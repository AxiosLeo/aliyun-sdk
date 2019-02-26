<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setOutboundOnly($OutboundOnly)
 * @method boolean getOutboundOnly()
 */
final class ListPhoneNumbers extends CCCCommon
{
    public $action = 'ListPhoneNumbers';
}
