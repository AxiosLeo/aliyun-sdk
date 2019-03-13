<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setDate($Date)
 * @method string getDate()
 * @method $this setBillOwner($BillOwner)
 * @method string getBillOwner()
 * @method $this setBillType($BillType)
 * @method string getBillType()
 */
final class GetDailyBill extends AgencyCommon
{
    public $action = 'GetDailyBill';
}
