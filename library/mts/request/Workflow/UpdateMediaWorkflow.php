<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 11:09
 */

namespace aliyun\sdk\mts\request\Workflow;

use aliyun\sdk\core\traits\param\MediaWorkflowIdParamTrait;
use aliyun\sdk\core\traits\param\TopologyParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class UpdateMediaWorkflow.
 */
class UpdateMediaWorkflow extends MtsCommon
{
    use Request;
    use MediaWorkflowIdParamTrait;
    use TopologyParamTrait;
}
