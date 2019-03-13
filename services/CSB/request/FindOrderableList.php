<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 * @method $this setAlias($Alias)
 * @method string getAlias()
 * @method $this setProjectName($ProjectName)
 * @method string getProjectName()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class FindOrderableList extends CSBCommon
{
    public $action = 'FindOrderableList';
}
