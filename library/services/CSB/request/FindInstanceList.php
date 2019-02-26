<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setStatus($Status)
 * @method integer getStatus()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setSearchTxt($SearchTxt)
 * @method string getSearchTxt()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 */
final class FindInstanceList extends CSBCommon
{
    public $action = 'FindInstanceList';
}
