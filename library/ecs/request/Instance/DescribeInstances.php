<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 14:42
 */

namespace aliyun\sdk\ecs\request\Instance;

use aliyun\sdk\core\traits\param\PageNumberParamTrait;
use aliyun\sdk\core\traits\param\PageSizeParamTrait;
use aliyun\sdk\ecs\request\EcsCommon;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\ecs\traits\ImageIdParam;
use aliyun\sdk\ecs\traits\ImageNameParam;
use aliyun\sdk\ecs\traits\ImageOwnerAliasParam;
use aliyun\sdk\ecs\traits\RegionIdParam;
use aliyun\sdk\ecs\traits\SnapshotIdParam;
use aliyun\sdk\ecs\traits\StatusParam;
use aliyun\sdk\ecs\traits\TagListParam;
use aliyun\sdk\ecs\traits\UsageParam;

/**
 * Class DescribeInstances.
 */
class DescribeInstances extends EcsCommon
{
    use Request;
    use RegionIdParam;
    use ImageIdParam;
    use StatusParam;
    use SnapshotIdParam;
    use ImageNameParam;
    use ImageOwnerAliasParam;
    use UsageParam;
    use TagListParam;
    use PageNumberParamTrait;
    use PageSizeParamTrait;
}
