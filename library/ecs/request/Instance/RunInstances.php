<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 14:36
 */

namespace aliyun\sdk\ecs\request\Instance;

use aliyun\sdk\ecs\request\EcsCommon;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\ecs\traits\AmountParam;
use aliyun\sdk\ecs\traits\AutoReleaseTimeParam;
use aliyun\sdk\ecs\traits\ClientTokenParam;
use aliyun\sdk\ecs\traits\DataDiskParam;
use aliyun\sdk\ecs\traits\DescriptionParam;
use aliyun\sdk\ecs\traits\HostNameParam;
use aliyun\sdk\ecs\traits\ImageIdParam;
use aliyun\sdk\ecs\traits\InstanceNameParam;
use aliyun\sdk\ecs\traits\InstanceTypeParam;
use aliyun\sdk\ecs\traits\InternetChargeTypeParam;
use aliyun\sdk\ecs\traits\InternetMaxBandwidthInParam;
use aliyun\sdk\ecs\traits\InternetMaxBandwidthOutParam;
use aliyun\sdk\ecs\traits\IoOptimizedParam;
use aliyun\sdk\ecs\traits\KeyPairNameParam;
use aliyun\sdk\ecs\traits\PasswordParam;
use aliyun\sdk\ecs\traits\RamRoleNameParam;
use aliyun\sdk\ecs\traits\RegionIdParam;
use aliyun\sdk\ecs\traits\SecurityEnhancementStrategyParam;
use aliyun\sdk\ecs\traits\SecurityGroupIdParam;
use aliyun\sdk\ecs\traits\SpotPriceLimitParam;
use aliyun\sdk\ecs\traits\SpotStrategyParam;
use aliyun\sdk\ecs\traits\SystemDiskParam;
use aliyun\sdk\ecs\traits\TagListParam;
use aliyun\sdk\ecs\traits\UserDataParam;
use aliyun\sdk\ecs\traits\VSwitchIdParam;
use aliyun\sdk\ecs\traits\ZoneIdParam;

/**
 * Class RunInstances.
 */
class RunInstances extends EcsCommon
{
    use Request;
    use RegionIdParam;
    use ImageIdParam;
    use InstanceTypeParam;
    use SecurityGroupIdParam;
    use ZoneIdParam;
    use InternetChargeTypeParam;
    use IoOptimizedParam;
    use SystemDiskParam;
    use DataDiskParam;
    use VSwitchIdParam;
    use InternetMaxBandwidthInParam;
    use InternetMaxBandwidthOutParam;
    use InstanceNameParam;
    use HostNameParam;
    use DescriptionParam;
    use PasswordParam;
    use AmountParam;
    use AutoReleaseTimeParam;
    use UserDataParam;
    use KeyPairNameParam;
    use RamRoleNameParam;
    use SecurityEnhancementStrategyParam;
    use TagListParam;
    use SpotStrategyParam;
    use SpotPriceLimitParam;
    use ClientTokenParam;
}
