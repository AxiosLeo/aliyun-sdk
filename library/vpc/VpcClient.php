<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 10:44
 */

namespace aliyun\sdk\vpc;

use aliyun\sdk\core\traits\ClientTrait;
use aliyun\sdk\vpc\request\VpcCommon;

/**
 * Class VpcClient
 * Api Document : https://help.aliyun.com/document_detail/34964.html
 * @package aliyun\sdk\vpc
 */
class VpcClient extends VpcCommon
{
    use ClientTrait;
}