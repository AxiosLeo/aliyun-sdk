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
use aliyun\sdk\core\help\HttpHelper;
use aliyun\sdk\core\Product;
use aliyun\sdk\core\sign\HmacSHA1;

class Request extends Parameter
{

    protected $product = "";

    protected $domain = "";

    protected $region = "";

    protected $locationServiceCode = "";

    protected $locationEndpointType = "";

    protected $request_method = "Get";

    protected $header = [];

    public function __construct()
    {
        parent::__construct();
        $this->region = Aliyun::$region_id;
        $this->domain = Product::domain($this->product,$this->region);
    }

    public function setActionName($action_name){
        $this->setParam("ActionName",$action_name);
    }

    public function setRequestMethod($method){
        $method = strtoupper($method);
        if(in_array($method,["GET","POST"])){
            $this->request_method = $method;
        }
    }

    public function setRequestHeader($key,$value){
        $this->header[$key] = $value;
    }

    /**
     * @throws \aliyun\sdk\core\exception\ClientException
     */
    public function request(){
        $signature = HmacSHA1::create($this->param());
        $this->setSignature($signature);
        return HttpHelper::curl($this->domain,$this->request_method,$this->param,$this->header);
    }
}