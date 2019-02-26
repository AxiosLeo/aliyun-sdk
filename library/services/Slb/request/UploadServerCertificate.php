<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAliCloudCertificateId($AliCloudCertificateId)
 * @method string getAliCloudCertificateId()
 * @method $this setAliCloudCertificateName($AliCloudCertificateName)
 * @method string getAliCloudCertificateName()
 * @method $this setServerCertificate($ServerCertificate)
 * @method string getServerCertificate()
 * @method $this setPrivateKey($PrivateKey)
 * @method string getPrivateKey()
 * @method $this setServerCertificateName($ServerCertificateName)
 * @method string getServerCertificateName()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 */
final class UploadServerCertificate extends SlbCommon
{
    public $action = 'UploadServerCertificate';
}
