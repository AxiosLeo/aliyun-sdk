<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 11:14
 */

namespace aliyun\sdk\mts\request\Workflow;

use aliyun\sdk\core\traits\param\MediaWorkflowIdParamTrait;
use aliyun\sdk\core\traits\param\MediaWorkflowNameParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class ListMediaWorkflowExecutions
 * @package aliyun\sdk\mts\request\Workflow
 * @method $this setInputFileURL($InputFileURL)
 * @method $this setNextPageToken($NextPageToken)
 * @method $this setMaximumPageSize($MaximumPageSize)
 */
class ListMediaWorkflowExecutions extends MtsCommon
{
    use Request;
    use MediaWorkflowIdParamTrait;
    use MediaWorkflowNameParamTrait;
}