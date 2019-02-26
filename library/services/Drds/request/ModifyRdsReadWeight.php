<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setDrdsInstanceId($DrdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setInstanceNames($InstanceNames)
 * @method string getInstanceNames()
 * @method $this setWeights($Weights)
 * @method string getWeights()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class ModifyRdsReadWeight extends DrdsCommon
{
    public $action = 'ModifyRdsReadWeight';
}
