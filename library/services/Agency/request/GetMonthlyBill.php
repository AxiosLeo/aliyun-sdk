<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setMonth($Month)
 * @method string getMonth()
 * @method $this setBillOwner($BillOwner)
 * @method string getBillOwner()
 * @method $this setBillType($BillType)
 * @method string getBillType()
 */
final class GetMonthlyBill extends AgencyCommon
{
    public $action = 'GetMonthlyBill';
}
