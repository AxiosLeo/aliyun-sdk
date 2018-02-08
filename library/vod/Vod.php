<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/7 16:59
 */

namespace aliyun\sdk\vod;

use aliyun\sdk\vod\request\Category;

class Vod
{
    /**
     * @return Category
     */
    public static function category(){
        return new Category();
    }
    public function GetCategories(){

    }
}