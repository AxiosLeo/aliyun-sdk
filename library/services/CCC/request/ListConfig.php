<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setConfigItem($ConfigItem)
 * @method array getConfigItem()
 */
final class ListConfig extends CCCCommon
{
    public $action = 'ListConfig';
}
