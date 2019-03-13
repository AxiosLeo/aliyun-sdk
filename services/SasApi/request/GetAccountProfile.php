<?php
namespace aliyun\sdk\services\SasApi\request;

use aliyun\sdk\services\SasApi\SasApiCommon;

/**
 * @method $this setIp($Ip)
 * @method string getIp()
 * @method $this setPhone($Phone)
 * @method string getPhone()
 * @method $this setAccessTimestamp($AccessTimestamp)
 * @method integer getAccessTimestamp()
 * @method $this setSensType($SensType)
 * @method integer getSensType()
 * @method $this setBusinessType($BusinessType)
 * @method integer getBusinessType()
 * @method $this setRequestUrl($RequestUrl)
 * @method string getRequestUrl()
 * @method $this setUserAgent($UserAgent)
 * @method string getUserAgent()
 * @method $this setDeviceIdMd5($DeviceIdMd5)
 * @method string getDeviceIdMd5()
 * @method $this setOs($Os)
 * @method string getOs()
 * @method $this setDeviceType($DeviceType)
 * @method integer getDeviceType()
 * @method $this setConnectionType($ConnectionType)
 * @method integer getConnectionType()
 * @method $this setCarrier($Carrier)
 * @method integer getCarrier()
 */
final class GetAccountProfile extends SasApiCommon
{
    public $action = 'GetAccountProfile';
}
