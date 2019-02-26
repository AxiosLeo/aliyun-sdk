<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setAliyunPk($AliyunPk)
 * @method integer getAliyunPk()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setPublicIpAddresse($PublicIpAddresse)
 * @method string getPublicIpAddresse()
 * @method $this setTag($Tag)
 * @method integer getTag()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setAk($Ak)
 * @method string getAk()
 * @method $this setSk($Sk)
 * @method string getSk()
 */
final class GetInstanceList extends AgencyCommon
{
    public $action = 'GetInstanceList';
}
