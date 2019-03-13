<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTicket($Ticket)
 * @method string getTicket()
 */
final class ApproveReplyMailAddress extends DmCommon
{
    public $action = 'ApproveReplyMailAddress';
}
