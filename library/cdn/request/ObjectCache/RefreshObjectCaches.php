<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 15:43
 */

namespace aliyun\sdk\cdn\request\ObjectCache;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class RefreshObjectCaches
 * @package aliyun\sdk\cdn\request\ObjectCache
 * @method $this setObjectPath($object_path)
 * @method $this setObjectType($object_type)
 */
class RefreshObjectCaches extends CdnCommon
{
    use Request;
}