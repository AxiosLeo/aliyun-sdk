<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDomainId($DomainId)
 * @method integer getDomainId()
 * @method $this setCnameTrackRecord($CnameTrackRecord)
 * @method string getCnameTrackRecord()
 */
final class UpdateDomainTrackName extends DmCommon
{
    public $action = 'UpdateDomainTrackName';
}
