<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method array getInstanceId()
 */
final class InstallCloudAssistant extends EcsCommon
{
    public $action = 'InstallCloudAssistant';
}
