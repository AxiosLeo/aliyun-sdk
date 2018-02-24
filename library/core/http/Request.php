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
use aliyun\sdk\core\exception\ClientException;
use aliyun\sdk\core\Product;
use aliyun\sdk\core\sign\HmacSHA1;

class Request extends Parameter
{

    protected $product = "";

    protected $domain = "";

    protected $region = "";

    protected $locationServiceCode = "";

    protected $locationEndpointType = "";

    protected $request_method = "POST";

    protected $header = [];

    public function __construct()
    {
        parent::__construct();
        $this->region = Aliyun::$region_id;
        $this->domain = Product::domain($this->product,$this->region);
    }

    protected function setActionName($action_name){
        $this->setParam("Action",$action_name);
    }

    protected function setRequestMethod($method){
        $method = strtoupper($method);
        if(in_array($method,["GET","POST"])){
            $this->request_method = $method;
        }
    }

    protected function setRequestHeader($key,$value){
        $this->header[$key] = $value;
    }

    /**
     * @throws \aliyun\sdk\core\exception\ClientException
     */
    public function request(){
        Credential::auth($this->product,$this->param('SignatureNonce'),$this->param('Timestamp'));
        $signature = HmacSHA1::create($this->param(),$this->request_method);
        $this->setSignature($signature);
        $response =  self::curl($this->domain,$this->param,$this->request_method,$this->header);
        Aliyun::$response = $response;
        return $response;
    }

    public static function curl($url, $data = [], $method = "POST", $header = []){
        $data = is_array($data) ? http_build_query($data) : $data;
        if($method == "GET"){
            if(strpos($data,'?') === false){
                $url = $url . "?";
            }
            $lastString = substr($data, -1);
            $url = $lastString=="&" || $lastString=="?" ? $url . $data : $url . "&" . $data;
        }
        curl_init();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 80);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);

        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == "https") {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        if (is_array($header) && 0 < count($header)) {
            $httpHeaders = self::getHttpHeaders($header);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeaders);
        }

        $response = new Response();
        $response->setbody(curl_exec($ch));
        $response->setHeader(curl_getinfo($ch, CURLINFO_HEADER_OUT));
        $response->setStatus(curl_getinfo($ch, CURLINFO_HTTP_CODE));
        if (curl_errno($ch)) {
            throw new ClientException("Server unreachable: Errno: " . curl_errno($ch) . " " . curl_error($ch), "SDK.ServerUnreachable");
        }

        curl_close($ch);

        return $response;
    }

    public static function getHttpHeaders($headers)
    {
        $httpHeader = [];
        foreach ($headers as $key => $value) {
            array_push($httpHeader , $key.":".$value);
        }
        return $httpHeader;
    }
}