<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setAliyunPk($AliyunPk)
 * @method integer getAliyunPk()
 * @method $this setRamUid($RamUid)
 * @method integer getRamUid()
 * @method $this setOrderId($OrderId)
 * @method integer getOrderId()
 * @method $this setStatus($Status)
 * @method integer getStatus()
 * @method $this setStartDate($StartDate)
 * @method string getStartDate()
 * @method $this setEndDate($EndDate)
 * @method string getEndDate()
 * @method $this setTimeType($TimeType)
 * @method integer getTimeType()
 * @method $this setIsStronger($IsStronger)
 * @method integer getIsStronger()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetOrderList extends AgencyCommon
{
    public $action = 'GetOrderList';
}
