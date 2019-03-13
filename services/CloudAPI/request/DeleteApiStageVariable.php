<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setStageId($StageId)
 * @method string getStageId()
 * @method $this setVariableName($VariableName)
 * @method string getVariableName()
 */
final class DeleteApiStageVariable extends CloudAPICommon
{
    public $action = 'DeleteApiStageVariable';
}
