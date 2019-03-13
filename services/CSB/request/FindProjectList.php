<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setProjectName($ProjectName)
 * @method string getProjectName()
 */
final class FindProjectList extends CSBCommon
{
    public $action = 'FindProjectList';
}
