<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 */
final class GetEditingProject extends VodCommon
{
    public $action = 'GetEditingProject';
}
