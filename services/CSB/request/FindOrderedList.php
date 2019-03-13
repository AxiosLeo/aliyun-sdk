<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setShowDelOrder($ShowDelOrder)
 * @method boolean getShowDelOrder()
 * @method $this setAlias($Alias)
 * @method string getAlias()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setServiceId($ServiceId)
 * @method integer getServiceId()
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 * @method $this setProjectName($ProjectName)
 * @method string getProjectName()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 */
final class FindOrderedList extends CSBCommon
{
    public $action = 'FindOrderedList';
}
