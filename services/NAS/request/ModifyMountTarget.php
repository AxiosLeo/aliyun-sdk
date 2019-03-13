<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setFileSystemId($FileSystemId)
 * @method string getFileSystemId()
 * @method $this setMountTargetDomain($MountTargetDomain)
 * @method string getMountTargetDomain()
 * @method $this setAccessGroupName($AccessGroupName)
 * @method string getAccessGroupName()
 * @method $this setStatus($Status)
 * @method string getStatus()
 */
final class ModifyMountTarget extends NASCommon
{
    public $action = 'ModifyMountTarget';
}
