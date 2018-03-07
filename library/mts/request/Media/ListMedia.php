<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 13:18
 */

namespace aliyun\sdk\mts\request\Media;

use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class ListMedia
 * @package aliyun\sdk\mts\request\Media
 * @method $this setNextPageToken($NextPageToken)
 * @method $this setMaximumPageSize($MaximumPageSize)
 * @method $this setFrom($From)
 * @method $this setTo($To)
 */
class ListMedia extends MtsCommon
{
    use Request;
}