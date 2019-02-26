<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setServerCertificateId($ServerCertificateId)
 * @method string getServerCertificateId()
 * @method $this setServerCertificateName($ServerCertificateName)
 * @method string getServerCertificateName()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 */
final class SetServerCertificateName extends SlbCommon
{
    public $action = 'SetServerCertificateName';
}
