<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setAccessGroupName($AccessGroupName)
 * @method string getAccessGroupName()
 * @method $this setAccessRuleId($AccessRuleId)
 * @method string getAccessRuleId()
 * @method $this setSourceCidrIp($SourceCidrIp)
 * @method string getSourceCidrIp()
 * @method $this setRWAccessType($RWAccessType)
 * @method string getRWAccessType()
 * @method $this setUserAccessType($UserAccessType)
 * @method string getUserAccessType()
 * @method $this setPriority($Priority)
 * @method integer getPriority()
 */
final class ModifyAccessRule extends NASCommon
{
    public $action = 'ModifyAccessRule';
}
