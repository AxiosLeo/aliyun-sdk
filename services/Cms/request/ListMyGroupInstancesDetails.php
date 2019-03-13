<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setTotal($Total)
 * @method boolean getTotal()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 * @method $this setCategory($Category)
 * @method string getCategory()
 */
final class ListMyGroupInstancesDetails extends CmsCommon
{
    public $action = 'ListMyGroupInstancesDetails';
}
