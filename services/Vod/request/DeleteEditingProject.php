<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProjectIds($ProjectIds)
 * @method string getProjectIds()
 */
final class DeleteEditingProject extends VodCommon
{
    public $action = 'DeleteEditingProject';
}
