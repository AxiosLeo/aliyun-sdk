<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setFileSystemId($FileSystemId)
 * @method string getFileSystemId()
 * @method $this setMountTargetDomain($MountTargetDomain)
 * @method string getMountTargetDomain()
 */
final class DeleteMountTarget extends NASCommon
{
    public $action = 'DeleteMountTarget';
}
