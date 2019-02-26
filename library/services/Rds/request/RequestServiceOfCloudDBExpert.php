<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setServiceRequestType($ServiceRequestType)
 * @method string getServiceRequestType()
 * @method $this setServiceRequestParam($ServiceRequestParam)
 * @method string getServiceRequestParam()
 */
final class RequestServiceOfCloudDBExpert extends RdsCommon
{
    public $action = 'RequestServiceOfCloudDBExpert';
}
