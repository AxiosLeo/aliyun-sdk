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
use aliyun\sdk\core\help\Parse;
use aliyun\sdk\core\Product;
use aliyun\sdk\core\sign\HmacSHA1;
use GuzzleHttp\Client;

class Request
{

    protected $product = "";

    protected $domain = "";

    protected $region = "";

    protected $locationServiceCode = "";

    protected $locationEndpointType = "";

    protected $request_method = "POST";

    protected $header = [];

    protected $path = "/";

    protected $param = [];

    protected $auth = false;

    public function __construct()
    {
        $this->region = Aliyun::$region_id;
        if(empty($this->domain)){
            $this->domain = Product::domain($this->product,$this->region);
        }

        $this->setParam('Format',"JSON");
        $this->setParam('Version',"0000-00-00");
        $this->setParam('AccessKeyId',Aliyun::$access_key_id);
        $this->setParam("SignatureMethod","HMAC-SHA1");
        $this->setParam("SignatureVersion","1.0");
        $this->setParam("SignatureNonce", Aliyun::$security_token);
        $this->setParam("Timestamp",date("Y-m-d\TH:i:s\Z"));
    }

    protected function setActionName($action_name){
        $this->setParam("Action",$action_name);
    }

    protected function setRequestHeader($key,$value){
        $this->header[$key] = $value;
    }

    /**
     * @return Response
     */
    public function request(){
        $signature_nonce = $this->params('SignatureNonce');
        if($this->auth){
            Credential::auth($this->product,$signature_nonce,$this->params('Timestamp'));
        }
        $signature = HmacSHA1::create($this->params(),$this->request_method);
        $this->setParam("Signature",$signature);

        $response =  self::curl($this->domain,$this->path,$this->param,$this->request_method,$this->header);
        return Aliyun::response($response);
    }

    public static function curl($domain, $path, $data = [], $method = "POST", $header = []){
        $domain = "http://".$domain;
        $client = new Client(['base_uri' => $domain]);
        $result = $client->request($method, $path, [
            'http_errors' => false,
            'form_params'=>$data,
            'headers'=>$header
        ]);
        $body = $result->getBody();
        $response = new Response();
        $response->setHeader($result->getHeaders());
        $body = (string) $body;
        $content_type = $result->getHeaderLine("content-type");
        if(strpos($content_type,"xml") !== false){
            $body = Parse::xmlToArray($body);
        }else if(strpos($content_type,"json") !== false){
            $body = Parse::jsonToArray($body);
        }
        $response->setBody($body);
        $response->setStatus($result->getStatusCode());
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

    public function params($key = '')
    {
        if(is_string($key) && isset($this->param[$key])){
            return $this->param[$key];
        }
        return $this->param;
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function setParam($key , $value = ''){
        if(is_array($key)){
            foreach ($key as $k=>$v){
                $this->param[$k] = $v;
            }
        }else{
            $this->param[$key] = $value;
        }
    }
}