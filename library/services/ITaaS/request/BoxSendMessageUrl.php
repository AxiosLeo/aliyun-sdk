<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientAppid($ClientAppid)
 * @method string getClientAppid()
 * @method $this setMSG($MSG)
 * @method string getMSG()
 * @method $this setTS($TS)
 * @method string getTS()
 * @method $this setAccessToken($AccessToken)
 * @method string getAccessToken()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 */
final class BoxSendMessageUrl extends ITaaSCommon
{
    public $action = 'BoxSendMessageUrl';
}
