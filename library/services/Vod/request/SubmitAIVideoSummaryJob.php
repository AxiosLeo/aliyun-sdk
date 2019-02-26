<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setAIVideoSummaryConfig($AIVideoSummaryConfig)
 * @method string getAIVideoSummaryConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitAIVideoSummaryJob extends VodCommon
{
    public $action = 'SubmitAIVideoSummaryJob';
}
