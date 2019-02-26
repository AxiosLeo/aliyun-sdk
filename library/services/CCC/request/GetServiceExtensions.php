<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setServiceType($ServiceType)
 * @method string getServiceType()
 */
final class GetServiceExtensions extends CCCCommon
{
    public $action = 'GetServiceExtensions';
}
