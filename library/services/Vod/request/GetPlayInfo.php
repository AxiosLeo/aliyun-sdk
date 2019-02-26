<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setFormats($Formats)
 * @method string getFormats()
 * @method $this setAuthTimeout($AuthTimeout)
 * @method integer getAuthTimeout()
 * @method $this setRand($Rand)
 * @method string getRand()
 * @method $this setAuthInfo($AuthInfo)
 * @method string getAuthInfo()
 * @method $this setChannel($Channel)
 * @method string getChannel()
 * @method $this setPlayerVersion($PlayerVersion)
 * @method string getPlayerVersion()
 * @method $this setOutputType($OutputType)
 * @method string getOutputType()
 * @method $this setStreamType($StreamType)
 * @method string getStreamType()
 * @method $this setReAuthInfo($ReAuthInfo)
 * @method string getReAuthInfo()
 * @method $this setDefinition($Definition)
 * @method string getDefinition()
 * @method $this setResultType($ResultType)
 * @method string getResultType()
 * @method $this setPlayConfig($PlayConfig)
 * @method string getPlayConfig()
 */
final class GetPlayInfo extends VodCommon
{
    public $action = 'GetPlayInfo';
}
