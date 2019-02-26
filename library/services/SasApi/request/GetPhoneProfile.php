<?php
namespace aliyun\sdk\services\SasApi\request;

use aliyun\sdk\services\SasApi\SasApiCommon;

/**
 * @method $this setPhone($Phone)
 * @method string getPhone()
 * @method $this setSensType($SensType)
 * @method integer getSensType()
 * @method $this setBusinessType($BusinessType)
 * @method integer getBusinessType()
 * @method $this setDataVersion($DataVersion)
 * @method string getDataVersion()
 */
final class GetPhoneProfile extends SasApiCommon
{
    public $action = 'GetPhoneProfile';
}
