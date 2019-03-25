<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setLaunchTemplateId($LaunchTemplateId)
 * @method string getLaunchTemplateId()
 * @method $this setLaunchTemplateName($LaunchTemplateName)
 * @method string getLaunchTemplateName()
 * @method $this setDefaultVersionNumber($DefaultVersionNumber)
 * @method integer getDefaultVersionNumber()
 */
final class ModifyLaunchTemplateDefaultVersion extends EcsCommon
{
    public $action = 'ModifyLaunchTemplateDefaultVersion';
}
