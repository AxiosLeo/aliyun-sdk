<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setLaunchTemplateId($LaunchTemplateId)
 * @method string getLaunchTemplateId()
 * @method $this setLaunchTemplateName($LaunchTemplateName)
 * @method string getLaunchTemplateName()
 */
final class DeleteLaunchTemplate extends EcsCommon
{
    public $action = 'DeleteLaunchTemplate';
}
