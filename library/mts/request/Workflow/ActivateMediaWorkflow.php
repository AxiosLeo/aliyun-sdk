<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 11:05
 */

namespace aliyun\sdk\mts\request\Workflow;

use aliyun\sdk\core\traits\param\MediaWorkflowIdParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class ActivateMediaWorkflow
 * @package aliyun\sdk\mts\request\Workflow
 */
class ActivateMediaWorkflow extends MtsCommon
{
    use Request;
    use MediaWorkflowIdParamTrait;
}