<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTemplateTag($TemplateTag)
 * @method array getTemplateTag()
 * @method $this setLaunchTemplateId($LaunchTemplateId)
 * @method array getLaunchTemplateId()
 * @method $this setLaunchTemplateName($LaunchTemplateName)
 * @method array getLaunchTemplateName()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setTemplateResourceGroupId($TemplateResourceGroupId)
 * @method string getTemplateResourceGroupId()
 */
final class DescribeLaunchTemplates extends EcsCommon
{
    public $action = 'DescribeLaunchTemplates';
}
