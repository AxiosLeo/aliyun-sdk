<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setSize($Size)
 * @method integer getSize()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setCursor($Cursor)
 * @method string getCursor()
 */
final class ListAlarmHistory extends CmsCommon
{
    public $action = 'ListAlarmHistory';
}
