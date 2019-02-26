<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegisterMetadatas($RegisterMetadatas)
 * @method string getRegisterMetadatas()
 * @method $this setTemplateGroupId($TemplateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setWorkFlowId($WorkFlowId)
 * @method string getWorkFlowId()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class RegisterMedia extends VodCommon
{
    public $action = 'RegisterMedia';
}
