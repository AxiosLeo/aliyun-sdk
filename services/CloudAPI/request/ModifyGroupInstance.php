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
 * @method $this setTargetInstanceId($TargetInstanceId)
 * @method string getTargetInstanceId()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 */
final class ModifyGroupInstance extends CloudAPICommon
{
    public $action = 'ModifyGroupInstance';
}
