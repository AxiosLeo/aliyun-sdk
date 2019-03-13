<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCACertificate($CACertificate)
 * @method string getCACertificate()
 * @method $this setCACertificateName($CACertificateName)
 * @method string getCACertificateName()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 */
final class UploadCACertificate extends SlbCommon
{
    public $action = 'UploadCACertificate';
}
