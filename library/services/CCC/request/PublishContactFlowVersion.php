<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setContactFlowVersionId($ContactFlowVersionId)
 * @method string getContactFlowVersionId()
 */
final class PublishContactFlowVersion extends CCCCommon
{
    public $action = 'PublishContactFlowVersion';
}
