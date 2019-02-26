<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setAliyunPk($AliyunPk)
 * @method integer getAliyunPk()
 * @method $this setRamUid($RamUid)
 * @method integer getRamUid()
 * @method $this setCustomerName($CustomerName)
 * @method string getCustomerName()
 * @method $this setCustomerAccount($CustomerAccount)
 * @method string getCustomerAccount()
 * @method $this setCustomerStatus($CustomerStatus)
 * @method integer getCustomerStatus()
 * @method $this setStart($Start)
 * @method string getStart()
 * @method $this setEnd($End)
 * @method string getEnd()
 * @method $this setCustomerGcLevel($CustomerGcLevel)
 * @method string getCustomerGcLevel()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetCustomerList extends AgencyCommon
{
    public $action = 'GetCustomerList';
}
