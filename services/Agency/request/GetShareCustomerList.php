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
 * @method $this setExitOnGoingProject($ExitOnGoingProject)
 * @method string getExitOnGoingProject()
 * @method $this setCustomerType($CustomerType)
 * @method string getCustomerType()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetShareCustomerList extends AgencyCommon
{
    public $action = 'GetShareCustomerList';
}
