<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setFileSystemId($FileSystemId)
 * @method string getFileSystemId()
 */
final class DeleteFileSystem extends NASCommon
{
    public $action = 'DeleteFileSystem';
}
