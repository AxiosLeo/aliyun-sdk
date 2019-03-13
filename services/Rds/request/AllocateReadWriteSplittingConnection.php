<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionStringPrefix($ConnectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($Port)
 * @method string getPort()
 * @method $this setMaxDelayTime($MaxDelayTime)
 * @method string getMaxDelayTime()
 * @method $this setNetType($NetType)
 * @method string getNetType()
 * @method $this setDistributionType($DistributionType)
 * @method string getDistributionType()
 * @method $this setWeight($Weight)
 * @method string getWeight()
 */
final class AllocateReadWriteSplittingConnection extends RdsCommon
{
    public $action = 'AllocateReadWriteSplittingConnection';
}
