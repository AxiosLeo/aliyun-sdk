<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setAliyunPk($AliyunPk)
 * @method integer getAliyunPk()
 * @method $this setEndUserPk($EndUserPk)
 * @method integer getEndUserPk()
 * @method $this setQuota($Quota)
 * @method string getQuota()
 */
final class SetCreditLimit extends AgencyCommon
{
    public $action = 'SetCreditLimit';
}
