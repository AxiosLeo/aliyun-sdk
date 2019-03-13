<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setFormats($Formats)
 * @method string getFormats()
 * @method $this setAuthInfo($AuthInfo)
 * @method string getAuthInfo()
 * @method $this setAuthTimeout($AuthTimeout)
 * @method integer getAuthTimeout()
 * @method $this setRand($Rand)
 * @method string getRand()
 * @method $this setPlayDomain($PlayDomain)
 * @method string getPlayDomain()
 * @method $this setHlsUriToken($HlsUriToken)
 * @method string getHlsUriToken()
 * @method $this setTerminal($Terminal)
 * @method string getTerminal()
 */
final class PlayInfo extends MtsCommon
{
    public $action = 'PlayInfo';
}
