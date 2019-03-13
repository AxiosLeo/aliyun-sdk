<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setUserId($UserId)
 * @method integer getUserId()
 * @method $this setHostName($HostName)
 * @method string getHostName()
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 * @method $this setSerialNumbers($SerialNumbers)
 * @method string getSerialNumbers()
 * @method $this setKeyWord($KeyWord)
 * @method string getKeyWord()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setStatus($Status)
 * @method string getStatus()
 */
final class NodeList extends CmsCommon
{
    public $action = 'NodeList';
}
