<?php
namespace aliyun\sdk\services\Cloudauth\request;

use aliyun\sdk\services\Cloudauth\CloudauthCommon;

/**
 * @method $this setBiz($Biz)
 * @method string getBiz()
 * @method $this setTicketId($TicketId)
 * @method string getTicketId()
 */
final class GetStatus extends CloudauthCommon
{
    public $action = 'GetStatus';
}
