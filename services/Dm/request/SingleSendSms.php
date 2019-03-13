<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSignName($SignName)
 * @method string getSignName()
 * @method $this setTemplateCode($TemplateCode)
 * @method string getTemplateCode()
 * @method $this setRecNum($RecNum)
 * @method string getRecNum()
 * @method $this setParamString($ParamString)
 * @method string getParamString()
 * @method $this setVersion($Version)
 * @method string getVersion()
 */
final class SingleSendSms extends DmCommon
{
    public $action = 'SingleSendSms';
}
