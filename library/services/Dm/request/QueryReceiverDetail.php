<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setReceiverId($ReceiverId)
 * @method string getReceiverId()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setKeyWord($KeyWord)
 * @method string getKeyWord()
 * @method $this setNextStart($NextStart)
 * @method string getNextStart()
 */
final class QueryReceiverDetail extends DmCommon
{
    public $action = 'QueryReceiverDetail';
}
