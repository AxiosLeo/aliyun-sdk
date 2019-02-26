<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setStreamName($StreamName)
 * @method string getStreamName()
 * @method $this setVodTranscodeGroupId($VodTranscodeGroupId)
 * @method string getVodTranscodeGroupId()
 * @method $this setCycleDuration($CycleDuration)
 * @method integer getCycleDuration()
 * @method $this setAutoCompose($AutoCompose)
 * @method string getAutoCompose()
 * @method $this setComposeVodTranscodeGroupId($ComposeVodTranscodeGroupId)
 * @method string getComposeVodTranscodeGroupId()
 */
final class AddLiveRecordVodConfig extends LiveCommon
{
    public $action = 'AddLiveRecordVodConfig';
}
