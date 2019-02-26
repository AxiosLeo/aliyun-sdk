<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setTaskId($TaskId)
 * @method string getTaskId()
 */
final class GetConversationList extends CCCCommon
{
    public $action = 'GetConversationList';
}
