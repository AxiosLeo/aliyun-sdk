<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setShowDelService($ShowDelService)
 * @method boolean getShowDelService()
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 * @method $this setAlias($Alias)
 * @method string getAlias()
 * @method $this setProjectName($ProjectName)
 * @method string getProjectName()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 * @method $this setApproveLevel($ApproveLevel)
 * @method string getApproveLevel()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class FindApproveServiceList extends CSBCommon
{
    public $action = 'FindApproveServiceList';
}
