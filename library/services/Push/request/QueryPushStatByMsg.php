<?php
namespace aliyun\sdk\services\Push\request;

use aliyun\sdk\services\Push\PushCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAppKey($AppKey)
 * @method integer getAppKey()
 * @method $this setMessageId($MessageId)
 * @method integer getMessageId()
 */
final class QueryPushStatByMsg extends PushCommon
{
    public $action = 'QueryPushStatByMsg';
}
