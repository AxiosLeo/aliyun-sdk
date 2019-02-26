<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setMaintainStartTime($MaintainStartTime)
 * @method string getMaintainStartTime()
 * @method $this setMaintainEndTime($MaintainEndTime)
 * @method string getMaintainEndTime()
 */
final class ModifyInstanceMaintainTime extends RKvstoreCommon
{
    public $action = 'ModifyInstanceMaintainTime';
}
