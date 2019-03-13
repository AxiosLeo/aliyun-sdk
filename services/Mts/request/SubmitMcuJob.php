<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInput($Input)
 * @method string getInput()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 * @method $this setTemplateId($TemplateId)
 * @method string getTemplateId()
 * @method $this setTemplate($Template)
 * @method string getTemplate()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitMcuJob extends MtsCommon
{
    public $action = 'SubmitMcuJob';
}
