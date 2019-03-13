<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setReceiverId($ReceiverId)
 * @method string getReceiverId()
 * @method $this setEmail($Email)
 * @method string getEmail()
 */
final class DeleteReceiverDetail extends DmCommon
{
    public $action = 'DeleteReceiverDetail';
}
