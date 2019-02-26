<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setKeyTag($KeyTag)
 * @method integer getKeyTag()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setAlgorithm($Algorithm)
 * @method integer getAlgorithm()
 * @method $this setDigestType($DigestType)
 * @method integer getDigestType()
 * @method $this setDigest($Digest)
 * @method string getDigest()
 */
final class SaveSingleTaskForModifyingDSRecord extends DomainIntlCommon
{
    public $action = 'SaveSingleTaskForModifyingDSRecord';
}
