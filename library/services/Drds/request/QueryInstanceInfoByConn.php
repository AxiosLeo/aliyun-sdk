<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setHost($Host)
 * @method string getHost()
 * @method $this setPort($Port)
 * @method integer getPort()
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class QueryInstanceInfoByConn extends DrdsCommon
{
    public $action = 'QueryInstanceInfoByConn';
}
