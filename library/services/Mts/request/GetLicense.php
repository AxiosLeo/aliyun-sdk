<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setLicenseUrl($LicenseUrl)
 * @method string getLicenseUrl()
 * @method $this setData($Data)
 * @method string getData()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setHeader($Header)
 * @method string getHeader()
 * @method $this setType($Type)
 * @method string getType()
 */
final class GetLicense extends MtsCommon
{
    public $action = 'GetLicense';
}
