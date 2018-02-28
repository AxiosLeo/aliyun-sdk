<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/28 09:26
 */

namespace aliyun\sdk\oss\traits\param;


trait EncodingTypeParam
{
    public function setEncodingType($encoding_type){
        $this->setParam("encoding-type",$encoding_type);
        $last_encoding_type = $this->encoding_type;
        $this->encoding_type = $encoding_type;
        dump($this->encoding_type);
        $params = $this->param();
        foreach ($params as $k=>$v){
            $detect = mb_detect_encoding($v);
            dump($detect,true,"detect");
            if($detect != $last_encoding_type){
                dump("change");
                $this->setParam($k,$v);
                dump(mb_detect_encoding($this->param($k)));
            }
        }

        return $this;
    }
}