<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setUid($Uid)
 * @method integer getUid()
 * @method $this setMonthBillTime($MonthBillTime)
 * @method string getMonthBillTime()
 * @method $this setMonthUserType($MonthUserType)
 * @method string getMonthUserType()
 * @method $this setMonthBillType($MonthBillType)
 * @method string getMonthBillType()
 */
final class GetMonthBillList extends AgencyCommon
{
    public $action = 'GetMonthBillList';
}
