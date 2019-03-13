<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setStreamType($StreamType)
 * @method integer getStreamType()
 * @method $this setShouldEncrypt($ShouldEncrypt)
 * @method boolean getShouldEncrypt()
 * @method $this setEncryptType($EncryptType)
 * @method integer getEncryptType()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 */
final class QueryLiveStreaming extends IotCommon
{
    public $action = 'QueryLiveStreaming';
}
