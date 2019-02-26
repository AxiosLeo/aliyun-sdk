<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setUid($Uid)
 * @method integer getUid()
 * @method $this setCreditStatus($CreditStatus)
 * @method integer getCreditStatus()
 */
final class SetCreditStatus extends AgencyCommon
{
    public $action = 'SetCreditStatus';
}
