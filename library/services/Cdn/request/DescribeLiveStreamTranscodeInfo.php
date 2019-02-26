<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainTranscodeName($DomainTranscodeName)
 * @method string getDomainTranscodeName()
 */
final class DescribeLiveStreamTranscodeInfo extends CdnCommon
{
    public $action = 'DescribeLiveStreamTranscodeInfo';
}
