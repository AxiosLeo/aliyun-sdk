<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setFileSystemId($FileSystemId)
 * @method string getFileSystemId()
 * @method $this setMountTargetDomain($MountTargetDomain)
 * @method string getMountTargetDomain()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeMountTargets extends NASCommon
{
    public $action = 'DescribeMountTargets';
}
