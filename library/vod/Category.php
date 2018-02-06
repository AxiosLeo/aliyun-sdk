<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/5 17:30
 */

namespace aliyun\sdk\vod;

class Category extends Common
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add(){
        $this->action_name = "AddCategory";
    }
    public function delete(){
        $this->action_name = "DeleteCategory";
    }
}