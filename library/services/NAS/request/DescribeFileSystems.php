<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setFileSystemId($FileSystemId)
 * @method string getFileSystemId()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeFileSystems extends NASCommon
{
    public $action = 'DescribeFileSystems';
}
