<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/5 17:30
 */

namespace aliyun\sdk\vod\request;

class Category extends Common
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create(){
        $this->setActionName("AddCategory");
        return $this->request();
    }

    public function read(){
        $this->setActionName("GetCategories");
        return $this->request();
    }

    public function update(){
        $this->setActionName("UpdateCategory");
        return $this->request();
    }

    public function delete(){
        $this->setActionName("DeleteCategory");
        return $this->request();
    }

    public function setCateId($cate_id = -1){
        $this->setParam("CateId",$cate_id);
        return $this;
    }

    public function setCateName(){

    }
}