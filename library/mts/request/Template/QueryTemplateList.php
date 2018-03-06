<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/5 14:38
 */

namespace aliyun\sdk\mts\Template;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\mts\request\MtsCommon;

/**
 * Class QueryTemplateList
 * @package aliyun\sdk\mts\Template
 * @method $this setTemplateIds($TemplateIds)
 */
class QueryTemplateList extends MtsCommon
{
    use Request;
}