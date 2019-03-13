<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setBucket($Bucket)
 * @method string getBucket()
 * @method $this setRoleArn($RoleArn)
 * @method string getRoleArn()
 */
final class UnbindInputBucket extends MtsCommon
{
    public $action = 'UnbindInputBucket';
}
