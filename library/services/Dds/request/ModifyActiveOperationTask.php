<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIds($Ids)
 * @method string getIds()
 * @method $this setSwitchTime($SwitchTime)
 * @method string getSwitchTime()
 */
final class ModifyActiveOperationTask extends DdsCommon
{
    public $action = 'ModifyActiveOperationTask';
}
