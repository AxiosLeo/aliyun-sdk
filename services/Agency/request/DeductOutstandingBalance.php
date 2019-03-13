<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setUid($Uid)
 * @method integer getUid()
 * @method $this setDeductAmount($DeductAmount)
 * @method string getDeductAmount()
 */
final class DeductOutstandingBalance extends AgencyCommon
{
    public $action = 'DeductOutstandingBalance';
}
