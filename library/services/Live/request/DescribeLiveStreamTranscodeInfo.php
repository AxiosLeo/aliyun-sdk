<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainTranscodeName($DomainTranscodeName)
 * @method string getDomainTranscodeName()
 */
final class DescribeLiveStreamTranscodeInfo extends LiveCommon
{
    public $action = 'DescribeLiveStreamTranscodeInfo';
}
