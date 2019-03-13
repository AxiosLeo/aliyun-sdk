<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setUid($Uid)
 * @method integer getUid()
 * @method $this setCreditLine($CreditLine)
 * @method string getCreditLine()
 */
final class SetCreditLine extends AgencyCommon
{
    public $action = 'SetCreditLine';
}
