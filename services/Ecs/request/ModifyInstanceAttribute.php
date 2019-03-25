<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setPassword($Password)
 * @method string getPassword()
 * @method $this setHostName($HostName)
 * @method string getHostName()
 * @method $this setInstanceName($InstanceName)
 * @method string getInstanceName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 * @method $this setRecyclable($Recyclable)
 * @method boolean getRecyclable()
 * @method $this setCreditSpecification($CreditSpecification)
 * @method string getCreditSpecification()
 * @method $this setDeletionProtection($DeletionProtection)
 * @method boolean getDeletionProtection()
 */
final class ModifyInstanceAttribute extends EcsCommon
{
    public $action = 'ModifyInstanceAttribute';
}
