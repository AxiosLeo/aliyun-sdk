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
 * @method $this setCanvas($Canvas)
 * @method string getCanvas()
 * @method $this setContent($Content)
 * @method string getContent()
 */
final class CommitContactFlowVersionModification extends CCCCommon
{
    public $action = 'CommitContactFlowVersionModification';
}
