<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setHistoryVersion($HistoryVersion)
 * @method string getHistoryVersion()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setBatch($Batch)
 * @method integer getBatch()
 * @method $this setBatchWaitTime($BatchWaitTime)
 * @method integer getBatchWaitTime()
 */
final class RollbackApplication extends EdasCommon
{
    public $action = 'RollbackApplication';
}
