<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setFileSystemId($FileSystemId)
 * @method string getFileSystemId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyFileSystem extends NASCommon
{
    public $action = 'ModifyFileSystem';
}
