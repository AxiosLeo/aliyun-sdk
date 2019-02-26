<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/2 13:46
 */

namespace aliyun\sdk\core\http;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\auth\Credential;
use aliyun\sdk\core\Product;
use aliyun\sdk\core\sign\HmacSHA1;
use api\tool\Http;
use api\tool\lib\HttpResponse;

class Request
{

    protected $product = "";

    protected $domain = "";

    protected $region = "";

    protected $action = "";

    protected $locationServiceCode = "";

    protected $locationEndpointType = "openAPI";

    protected $request_method = "POST";

    protected $header = [];

    protected $path = "/";

    protected $param = [];

    protected $auth = false;

    protected $version = "";

    protected $format = "JSON";

    protected $signature_method = "HMAC-SHA1";

    protected $signature_version = "1.0";

    protected function setActionName($action_name)
    {
        $this->setParam("Action", $action_name);
    }

    protected function setRequestHeader($key, $value)
    {
        $this->header[$key] = $value;
    }

    public function setRequestMethod($method = "GET")
    {
        $this->request_method = $method;
    }

    private function uuid($salt = "")
    {
        return md5($salt . uniqid(md5(microtime(true)), true));
    }

    /**
     * @return HttpResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request()
    {
        $this->region = Aliyun::$region_id;
        if (empty($this->domain)) {
            $this->domain = Product::domain($this->product, $this->region);
        }
        $this->locationServiceCode = $this->product;
        $this->setParam('Format', $this->format);
        $this->setParam('Version', $this->version);
        $this->setParam('AccessKeyId', Aliyun::$access_key_id);
        $this->setParam("SignatureMethod", $this->signature_method);
        $this->setParam("SignatureVersion", $this->signature_version);
        $this->setParam("Timestamp", gmdate("Y-m-d\TH:i:s\Z"));
        $this->setParam("Action", $this->action);

        $signature_nonce = $this->uuid("SignatureNonce");
        $this->setParam("SignatureNonce", $signature_nonce);
        if ($this->auth) {
            Credential::auth($this->product, $signature_nonce, $this->params('Timestamp'));
        }
        $signature = HmacSHA1::create($this->param, $this->request_method);
        $this->setParam("Signature", $signature);

        if (false === strpos($this->domain, 'http')) {
            $this->domain = 'http://' . $this->domain;
        }

        $response = Http::instance()
            ->setMethod($this->request_method)
            ->setDomain($this->domain)
            ->setHeader($this->header)
            ->setParam($this->param)
            ->curl($this->path);

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