<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 11:13
 */

namespace aliyun\sdk\mts\request\Workflow;

use aliyun\sdk\core\traits\param\PageNumberParamTrait;
use aliyun\sdk\core\traits\param\PageSizeParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SearchMediaWorkflow
 * @package aliyun\sdk\mts\request\Workflow
 * @method $this setStateList($StateList)
 */
class SearchMediaWorkflow extends MtsCommon
{
    use Request;
    use PageSizeParamTrait;
    use PageNumberParamTrait;
}