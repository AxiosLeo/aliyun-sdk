<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPortalStatus($PortalStatus)
 * @method boolean getPortalStatus()
 * @method $this setPortalUrl($PortalUrl)
 * @method string getPortalUrl()
 * @method $this setAuthKey($AuthKey)
 * @method string getAuthKey()
 * @method $this setAuthSecret($AuthSecret)
 * @method string getAuthSecret()
 * @method $this setWebAuthUrl($WebAuthUrl)
 * @method string getWebAuthUrl()
 * @method $this setWhitelist($Whitelist)
 * @method string getWhitelist()
 * @method $this setCheckUrl($CheckUrl)
 * @method string getCheckUrl()
 * @method $this setNetwork($Network)
 * @method integer getNetwork()
 * @method $this setApConfigId($ApConfigId)
 * @method integer getApConfigId()
 */
final class SaveApPortalConfig extends CloudwfCommon
{
    public $action = 'SaveApPortalConfig';
}
