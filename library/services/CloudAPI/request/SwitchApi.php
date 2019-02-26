<?php
namespace aliyun\sdk\services\CloudAPI\request;

use aliyun\sdk\services\CloudAPI\CloudAPICommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setApiId($ApiId)
 * @method string getApiId()
 * @method $this setStageName($StageName)
 * @method string getStageName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setHistoryVersion($HistoryVersion)
 * @method string getHistoryVersion()
 */
final class SwitchApi extends CloudAPICommon
{
    public $action = 'SwitchApi';
}
