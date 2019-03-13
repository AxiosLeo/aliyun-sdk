<?php
namespace aliyun\sdk\services\Cloudauth\request;

use aliyun\sdk\services\Cloudauth\CloudauthCommon;

/**
 * @method $this setBiz($Biz)
 * @method string getBiz()
 * @method $this setTicketId($TicketId)
 * @method string getTicketId()
 * @method $this setBinding($Binding)
 * @method getBinding()
 * @method $this setUserData($UserData)
 * @method getUserData()
 */
final class GetVerifyToken extends CloudauthCommon
{
    public $action = 'GetVerifyToken';
}
