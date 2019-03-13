<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPhoneNumbers($PhoneNumbers)
 * @method string getPhoneNumbers()
 * @method $this setConfigId($ConfigId)
 * @method integer getConfigId()
 * @method $this setTemplateParam($TemplateParam)
 * @method string getTemplateParam()
 */
final class SendPredefinedShortMessage extends CCCCommon
{
    public $action = 'SendPredefinedShortMessage';
}
