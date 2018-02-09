<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/9 16:06
 */

return [
    "GetCategories"=>[
        "Action"=>["require"],
        "CateId"=>["default:-1"],
        "PageNo"=>["default:1"],
        "PageSize"=>["default:10","max:100"]
    ]
];