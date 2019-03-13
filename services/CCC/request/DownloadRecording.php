<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setFileName($FileName)
 * @method string getFileName()
 * @method $this setChannel($Channel)
 * @method string getChannel()
 */
final class DownloadRecording extends CCCCommon
{
    public $action = 'DownloadRecording';
}
