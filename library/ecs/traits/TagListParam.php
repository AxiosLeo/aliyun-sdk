<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 17:05
 */

namespace aliyun\sdk\ecs\traits;

/**
 * Trait TagListParam
 * @package aliyun\sdk\ecs\traits
 */
trait TagListParam
{
    private $tag = [];

    public function setTag($tags = []){
        $n = 0; $prefix= "Tag.";
        foreach ($tags as $k=>$v){
            $n++;
            $param_key = $prefix . $n . "." . "Key";
            $this->setParam($param_key,$k);
            $param_key = $prefix . $n . "." . "Value";
            $this->setParam($param_key,$v);
        }
        return $this;
    }

    public function getTag(){
        $params = $this->params();
        $list = [];
        foreach ($params as $k=>$v){
            if(false  !== strpos($k, "Tag.")){
                list($Tag, $n, $key) = explode(".",$k);
                if($key == "Key"){
                    $prefix = $Tag.".".$n;
                    $list[$this->params($prefix.".Key")] = $this->params($prefix.".Value");
                }
            }
        }
        return $list;
    }
}