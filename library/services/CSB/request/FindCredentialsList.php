<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 */
final class FindCredentialsList extends CSBCommon
{
    public $action = 'FindCredentialsList';
}
