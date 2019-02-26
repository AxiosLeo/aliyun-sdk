<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setDrdsInstanceId($DrdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setEncode($Encode)
 * @method string getEncode()
 * @method $this setPassword($Password)
 * @method string getPassword()
 * @method $this setRdsInstances($RdsInstances)
 * @method string getRdsInstances()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class CreateDrdsDB extends DrdsCommon
{
    public $action = 'CreateDrdsDB';
}
