<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 11:13
 */

namespace aliyun\sdk\api\request\Group;

use aliyun\sdk\api\request\APICommon;
use aliyun\sdk\core\traits\param\GroupIdParamTrait;
use aliyun\sdk\core\traits\param\StageIdParamTrait;
use aliyun\sdk\core\traits\param\VariableNameParamTrait;
use aliyun\sdk\core\traits\Request;

/**
 * Class DeleteApiStageVariable.
 */
class DeleteApiStageVariable extends APICommon
{
    use Request;
    use GroupIdParamTrait;
    use StageIdParamTrait;
    use VariableNameParamTrait;
}
