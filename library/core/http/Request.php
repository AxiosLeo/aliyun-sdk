<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/2 13:46
 */

namespace aliyun\sdk\core\http;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\auth\Credential;
use aliyun\sdk\core\help\HttpHelper;
use aliyun\sdk\core\help\HttpResponse;
use aliyun\sdk\core\Product;
use aliyun\sdk\core\sign\HmacSHA1;

class Request
{

    protected $product = "";

    protected $domain = "";

    protected $region = "";

    protected $locationServiceCode = "";

    protected $locationEndpointType = "openAPI";

    protected $request_method = "POST";

    protected $header = [];

    protected $path = "/";

    protected $param = [];

    protected $auth = false;

    public function __construct()
    {
        $this->region = Aliyun::$region_id;
        if (empty($this->domain)) {
            $this->domain = Product::domain($this->product, $this->region);
        }

        $this->locationServiceCode = $this->product;

        $this->setParam('Format', "JSON");
        $this->setParam('Version', "0000-00-00");
        $this->setParam('AccessKeyId', Aliyun::$access_key_id);
        $this->setParam("SignatureMethod", "HMAC-SHA1");
        $this->setParam("SignatureVersion", "1.0");
        $this->setParam("Timestamp", date("Y-m-d\TH:i:s\Z"));
    }

    protected function setActionName($action_name)
    {
        $this->setParam("Action", $action_name);
    }

    protected function setRequestHeader($key, $value)
    {
        $this->header[$key] = $value;
    }

    /**
     * @return HttpResponse
     */
    public function request()
    {
        $signature_nonce = HttpHelper::uuid("SignatureNonce");
        $this->setParam("SignatureNonce", $signature_nonce);
        if ($this->auth) {
            Credential::auth($this->product, $signature_nonce, $this->params('Timestamp'));
        }
        $signature = HmacSHA1::create($this->params(), $this->request_method);
        $this->setParam("Signature", $signature);

        $response = HttpHelper::curl($this->domain, $this->path, $this->param, $this->request_method, $this->header);
        return Aliyun::response($response);
    }

    public static function getHttpHeaders($headers)
    {
        $httpHeader = [];
        foreach ($headers as $key => $value) {
            array_push($httpHeader, $key . ":" . $value);
        }
        return $httpHeader;
    }

    public function params($key = null, $default = "")
    {
        if (!is_null($key)) {
            return isset($this->param[$key]) ? $this->param[$key] : $default;
        }
        return $this->param;
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function setParam($key, $value = '')
    {
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                $this->param[$k] = $v;
            }
        } else {
            $this->param[$key] = $value;
        }
    }
}