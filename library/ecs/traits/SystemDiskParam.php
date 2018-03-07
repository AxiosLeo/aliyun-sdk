<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:19
 */

namespace aliyun\sdk\ecs\traits;

/**
 * Trait SystemDiskParam
 * @package aliyun\sdk\ecs\traits
 */
trait SystemDiskParam
{
    private $SystemDiskConfig = [
        "Category","Size","DiskName","Description"
    ];
    public function setSystemDisk($key,$value){
        if(in_array($key,$this->SystemDiskConfig)){
            $this->setParam("SystemDisk.".$key,$value);
        }
        return $this;
    }

    public function getSystemDisk($key = null){
        if(!is_null($key)){
            return $this->params("SystemDisk.".$key);
        }

        $params = $this->params();
        $list = [];
        foreach ($params as $k=>$v){
            if(false  !== strpos($k,"SystemDisk")){
                array_push($list,[$k=>$v]);
            }
        }

        return $list;
    }
}