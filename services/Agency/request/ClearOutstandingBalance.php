<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setAliyunPk($AliyunPk)
 * @method integer getAliyunPk()
 * @method $this setEndUserPk($EndUserPk)
 * @method integer getEndUserPk()
 * @method $this setDebtQuota($DebtQuota)
 * @method string getDebtQuota()
 */
final class ClearOutstandingBalance extends AgencyCommon
{
    public $action = 'ClearOutstandingBalance';
}
