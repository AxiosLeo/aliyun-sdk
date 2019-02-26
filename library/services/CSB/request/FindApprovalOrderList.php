<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setAlias($Alias)
 * @method string getAlias()
 * @method $this setProjectName($ProjectName)
 * @method string getProjectName()
 * @method $this setOnlyPending($OnlyPending)
 * @method boolean getOnlyPending()
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 * @method $this setServiceId($ServiceId)
 * @method integer getServiceId()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 */
final class FindApprovalOrderList extends CSBCommon
{
    public $action = 'FindApprovalOrderList';
}
