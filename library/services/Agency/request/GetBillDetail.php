<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setAliyunPk($AliyunPk)
 * @method integer getAliyunPk()
 * @method $this setBillId($BillId)
 * @method integer getBillId()
 * @method $this setHid($Hid)
 * @method integer getHid()
 */
final class GetBillDetail extends AgencyCommon
{
    public $action = 'GetBillDetail';
}
