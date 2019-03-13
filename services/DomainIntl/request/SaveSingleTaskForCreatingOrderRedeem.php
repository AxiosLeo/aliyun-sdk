<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setCurrentExpirationDate($CurrentExpirationDate)
 * @method integer getCurrentExpirationDate()
 * @method $this setCouponNo($CouponNo)
 * @method string getCouponNo()
 * @method $this setUseCoupon($UseCoupon)
 * @method boolean getUseCoupon()
 * @method $this setPromotionNo($PromotionNo)
 * @method string getPromotionNo()
 * @method $this setUsePromotion($UsePromotion)
 * @method boolean getUsePromotion()
 */
final class SaveSingleTaskForCreatingOrderRedeem extends DomainIntlCommon
{
    public $action = 'SaveSingleTaskForCreatingOrderRedeem';
}
