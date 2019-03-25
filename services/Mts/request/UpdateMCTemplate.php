<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTemplateId($TemplateId)
 * @method string getTemplateId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setPorn($Porn)
 * @method string getPorn()
 * @method $this setTerrorism($Terrorism)
 * @method string getTerrorism()
 * @method $this setPolitics($Politics)
 * @method string getPolitics()
 * @method $this setAd($Ad)
 * @method string getAd()
 * @method $this setQrcode($Qrcode)
 * @method string getQrcode()
 * @method $this setLive($Live)
 * @method string getLive()
 * @method $this setLogo($Logo)
 * @method string getLogo()
 * @method $this setAbuse($Abuse)
 * @method string getAbuse()
 * @method $this setContraband($Contraband)
 * @method string getContraband()
 * @method $this setspam($spam)
 * @method string getspam()
 */
final class UpdateMCTemplate extends MtsCommon
{
    public $action = 'UpdateMCTemplate';
}
