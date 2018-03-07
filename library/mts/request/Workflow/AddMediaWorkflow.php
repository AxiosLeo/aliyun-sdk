<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 11:02
 */

namespace aliyun\sdk\mts\request\Workflow;

use aliyun\sdk\core\traits\param\NameParamTrait;
use aliyun\sdk\core\traits\param\TopologyParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class AddMediaWorkflow
 * @package aliyun\sdk\mts\request\Workflow
 */
class AddMediaWorkflow extends MtsCommon
{
    use Request;
    use NameParamTrait;
    use TopologyParamTrait;
}