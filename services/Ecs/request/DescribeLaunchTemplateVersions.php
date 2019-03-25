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
 * @method $this setLaunchTemplateVersion($LaunchTemplateVersion)
 * @method array getLaunchTemplateVersion()
 * @method $this setMinVersion($MinVersion)
 * @method integer getMinVersion()
 * @method $this setMaxVersion($MaxVersion)
 * @method integer getMaxVersion()
 * @method $this setDefaultVersion($DefaultVersion)
 * @method boolean getDefaultVersion()
 * @method $this setDetailFlag($DetailFlag)
 * @method boolean getDetailFlag()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeLaunchTemplateVersions extends EcsCommon
{
    public $action = 'DescribeLaunchTemplateVersions';
}
