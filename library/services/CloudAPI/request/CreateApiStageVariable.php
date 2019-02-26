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
 * @method $this setSupportRoute($SupportRoute)
 * @method boolean getSupportRoute()
 * @method $this setVariableValue($VariableValue)
 * @method string getVariableValue()
 * @method $this setStageRouteModel($StageRouteModel)
 * @method string getStageRouteModel()
 */
final class CreateApiStageVariable extends CloudAPICommon
{
    public $action = 'CreateApiStageVariable';
}
