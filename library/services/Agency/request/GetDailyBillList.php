<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setAliyunPk($AliyunPk)
 * @method integer getAliyunPk()
 * @method $this setBillTime($BillTime)
 * @method string getBillTime()
 * @method $this setUserType($UserType)
 * @method string getUserType()
 * @method $this setBillType($BillType)
 * @method string getBillType()
 */
final class GetDailyBillList extends AgencyCommon
{
    public $action = 'GetDailyBillList';
}
