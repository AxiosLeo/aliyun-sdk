<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 11:08
 */

namespace aliyun\sdk\mts\request\Workflow;

use aliyun\sdk\core\traits\param\MediaWorkflowIdParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DeleteMediaWorkflow
 * @package aliyun\sdk\mts\request\Workflow
 */
class DeleteMediaWorkflow extends MtsCommon
{
    use Request;
    use MediaWorkflowIdParamTrait;
}