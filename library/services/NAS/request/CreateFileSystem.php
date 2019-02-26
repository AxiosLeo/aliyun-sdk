<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setStorageType($StorageType)
 * @method string getStorageType()
 * @method $this setProtocolType($ProtocolType)
 * @method string getProtocolType()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class CreateFileSystem extends NASCommon
{
    public $action = 'CreateFileSystem';
}
