<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setAliyunPk($AliyunPk)
 * @method integer getAliyunPk()
 * @method $this setRamUid($RamUid)
 * @method integer getRamUid()
 * @method $this setInstId($InstId)
 * @method string getInstId()
 * @method $this setPayStatus($PayStatus)
 * @method integer getPayStatus()
 * @method $this setStartDate($StartDate)
 * @method string getStartDate()
 * @method $this setEndDate($EndDate)
 * @method string getEndDate()
 * @method $this setIsStronger($IsStronger)
 * @method integer getIsStronger()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetBillList extends AgencyCommon
{
    public $action = 'GetBillList';
}
