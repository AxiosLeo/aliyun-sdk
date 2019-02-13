<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:44
 */

namespace aliyun\sdk\mts\request\Pipeline;

use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class QueryPipelineList.
 *
 * @method $this setPipelineIds($PipelineIds)
 * @method       getPipelineIds()
 */
class QueryPipelineList extends MtsCommon
{
    use Request;
}
