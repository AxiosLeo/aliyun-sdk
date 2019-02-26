<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setObjectId($ObjectId)
 * @method string getObjectId()
 * @method $this setObjectType($ObjectType)
 * @method string getObjectType()
 */
final class GetConfig extends CCCCommon
{
    public $action = 'GetConfig';
}
