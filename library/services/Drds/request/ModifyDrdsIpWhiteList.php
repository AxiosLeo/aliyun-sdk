<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setDrdsInstanceId($DrdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setIpWhiteList($IpWhiteList)
 * @method string getIpWhiteList()
 * @method $this setMode($Mode)
 * @method boolean getMode()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setGroupAttribute($GroupAttribute)
 * @method string getGroupAttribute()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class ModifyDrdsIpWhiteList extends DrdsCommon
{
    public $action = 'ModifyDrdsIpWhiteList';
}
