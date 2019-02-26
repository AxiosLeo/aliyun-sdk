<?php
namespace aliyun\sdk\services\NAS\request;

use aliyun\sdk\services\NAS\NASCommon;

/**
 * @method $this setFsId($FsId)
 * @method string getFsId()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class CPFSDescribeFileSystems extends NASCommon
{
    public $action = 'CPFSDescribeFileSystems';
}
