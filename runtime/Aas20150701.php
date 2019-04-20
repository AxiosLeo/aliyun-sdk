<?php

namespace aliyun\sdk\services\Aas20150701;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150701
 *
 * @package aliyun\sdk\services\Aas20150701
 * @method GetBasicAccountInfoByPk GetBasicAccountInfoByPk()
 * @method GetSessionInfoByMiniTicketWithRoute GetSessionInfoByMiniTicketWithRoute()
 * @method UpdateAccessKeyStatusForAccount UpdateAccessKeyStatusForAccount()
 * @method GetAliyunAccountWithBindHid GetAliyunAccountWithBindHid()
 * @method CreateAliyunAccountWithBindHid CreateAliyunAccountWithBindHid()
 * @method CreateAccessKeyForAccount CreateAccessKeyForAccount()
 * @method ListAccessKeysForAccount ListAccessKeysForAccount()
 * @method GetAliyunAccountWithBindTaobaoHid GetAliyunAccountWithBindTaobaoHid()
 * @method VerifyAccountLoginToken VerifyAccountLoginToken()
 * @method GetBasicInfoForAccount GetBasicInfoForAccount()
 * @method UpdateStatusForAccount UpdateStatusForAccount()
 * @method GetSessionInfoByTicketWithRouteSGPRO GetSessionInfoByTicketWithRouteSGPRO()
 * @method DeleteAccessKeyForAccount DeleteAccessKeyForAccount()
 * @method GetSessionInfoByMiniTicketWithRouteSHRO GetSessionInfoByMiniTicketWithRouteSHRO()
 * @method CreateIntlAliyunAccount CreateIntlAliyunAccount()
 * @method CreateShortTermAccessKeyForAccount CreateShortTermAccessKeyForAccount()
 * @method GetLoginConfigInfoByPK GetLoginConfigInfoByPK()
 * @method GenerateAccountLoginToken GenerateAccountLoginToken()
 * @method UpdatePasswordForAccount UpdatePasswordForAccount()
 * @method ListAliyunAccount ListAliyunAccount()
 * @method IsBindMfaByPk IsBindMfaByPk()
 * @method GetSessionInfoByMiniTicket GetSessionInfoByMiniTicket()
 * @method GetSessionInfoByMiniTicketWithRouteSGPRO GetSessionInfoByMiniTicketWithRouteSGPRO()
 * @method GetBasicAccountInfoByHavanaId GetBasicAccountInfoByHavanaId()
 * @method CreateAliyunAccount CreateAliyunAccount()
 * @method GetSessionInfoByTicketWithRoute GetSessionInfoByTicketWithRoute()
 * @method GetSessionInfoByTicket GetSessionInfoByTicket()
 * @method GetSessionInfoByTicketWithRouteSHRO GetSessionInfoByTicketWithRouteSHRO()
 * @method GetShortTermAccessKeyForAccount GetShortTermAccessKeyForAccount()
 * @method GetAccountKinshipInfoByPK GetAccountKinshipInfoByPK()
 */
class V20150701
{
}

/**
 * @method $this setPK($pK)
 * @method string getPK()
 */
class GetBasicAccountInfoByPk extends Request
{

}/**
 * @method $this setTicket($ticket)
 * @method string getTicket()
 */
class GetSessionInfoByMiniTicketWithRoute extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setAKId($aKId)
 * @method string getAKId()
 * @method $this setAKStatus($aKStatus)
 * @method string getAKStatus()
 */
class UpdateAccessKeyStatusForAccount extends Request
{

}/**
 * @method $this setInnerAccountHid($innerAccountHid)
 * @method string getInnerAccountHid()
 */
class GetAliyunAccountWithBindHid extends Request
{

}/**
 * @method $this setInnerAccountHid($innerAccountHid)
 * @method string getInnerAccountHid()
 */
class CreateAliyunAccountWithBindHid extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setAKSecret($aKSecret)
 * @method string getAKSecret()
 */
class CreateAccessKeyForAccount extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setAKStatus($aKStatus)
 * @method string getAKStatus()
 * @method $this setAKType($aKType)
 * @method string getAKType()
 */
class ListAccessKeysForAccount extends Request
{

}/**
 * @method $this setHavanaId($havanaId)
 * @method string getHavanaId()
 */
class GetAliyunAccountWithBindTaobaoHid extends Request
{

}/**
 * @method $this setLoginToken($loginToken)
 * @method string getLoginToken()
 */
class VerifyAccountLoginToken extends Request
{

}/**
 * @method $this setAliyunId($aliyunId)
 * @method string getAliyunId()
 */
class GetBasicInfoForAccount extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setAccountStatus($accountStatus)
 * @method string getAccountStatus()
 */
class UpdateStatusForAccount extends Request
{

}/**
 * @method $this setTicket($ticket)
 * @method string getTicket()
 */
class GetSessionInfoByTicketWithRouteSGPRO extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setAKId($aKId)
 * @method string getAKId()
 */
class DeleteAccessKeyForAccount extends Request
{

}/**
 * @method $this setTicket($ticket)
 * @method string getTicket()
 */
class GetSessionInfoByMiniTicketWithRouteSHRO extends Request
{

}/**
 * @method $this setNationalityCode($nationalityCode)
 * @method string getNationalityCode()
 */
class CreateIntlAliyunAccount extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 * @method $this setIsMfaPresent($isMfaPresent)
 * @method bool getIsMfaPresent()
 */
class CreateShortTermAccessKeyForAccount extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 */
class GetLoginConfigInfoByPK extends Request
{

}/**
 * @method $this setTargetPk($targetPk)
 * @method string getTargetPk()
 */
class GenerateAccountLoginToken extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setNewPassword($newPassword)
 * @method string getNewPassword()
 */
class UpdatePasswordForAccount extends Request
{

}/**
 * @method $this setMaxItems($maxItems)
 * @method int getMaxItems()
 * @method $this setMarker($marker)
 * @method string getMarker()
 */
class ListAliyunAccount extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 */
class IsBindMfaByPk extends Request
{

}/**
 * @method $this setTicket($ticket)
 * @method string getTicket()
 */
class GetSessionInfoByMiniTicket extends Request
{

}/**
 * @method $this setTicket($ticket)
 * @method string getTicket()
 */
class GetSessionInfoByMiniTicketWithRouteSGPRO extends Request
{

}/**
 * @method $this setHavanaId($havanaId)
 * @method string getHavanaId()
 */
class GetBasicAccountInfoByHavanaId extends Request
{

}/**
 * @method $this setAliyunId($aliyunId)
 * @method string getAliyunId()
 */
class CreateAliyunAccount extends Request
{

}/**
 * @method $this setTicket($ticket)
 * @method string getTicket()
 */
class GetSessionInfoByTicketWithRoute extends Request
{

}/**
 * @method $this setTicket($ticket)
 * @method string getTicket()
 */
class GetSessionInfoByTicket extends Request
{

}/**
 * @method $this setTicket($ticket)
 * @method string getTicket()
 */
class GetSessionInfoByTicketWithRouteSHRO extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 * @method $this setIsMfaPresent($isMfaPresent)
 * @method bool getIsMfaPresent()
 */
class GetShortTermAccessKeyForAccount extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 */
class GetAccountKinshipInfoByPK extends Request
{

}