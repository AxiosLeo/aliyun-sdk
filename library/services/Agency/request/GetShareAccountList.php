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
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetShareAccountList extends AgencyCommon
{
    public $action = 'GetShareAccountList';
}
