<?php

namespace aliyun\sdk\services\Dysmsapi20180501;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180501
 *
 * @package aliyun\sdk\services\Dysmsapi20180501
 * @method QueryMessage QueryMessage()
 * @method SendMessageToGlobe SendMessageToGlobe()
 * @method SmsConversion SmsConversion()
 * @method SendSms SendSms()
 * @method QuerySendDetails QuerySendDetails()
 * @method SendMessageWithTemplate SendMessageWithTemplate()
 */
class V20180501
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMessageId($messageId)
 * @method string getMessageId()
 */
class QueryMessage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTo($to)
 * @method string getTo()
 * @method $this setFrom($from)
 * @method string getFrom()
 * @method $this setMessage($message)
 * @method string getMessage()
 * @method $this setType($type)
 * @method string getType()
 */
class SendMessageToGlobe extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMessageId($messageId)
 * @method string getMessageId()
 * @method $this setConversionDate($conversionDate)
 * @method string getConversionDate()
 */
class SmsConversion extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPhoneNumbers($phoneNumbers)
 * @method string getPhoneNumbers()
 * @method $this setContentCode($contentCode)
 * @method string getContentCode()
 * @method $this setContentParam($contentParam)
 * @method string getContentParam()
 * @method $this setExternalId($externalId)
 * @method string getExternalId()
 * @method $this setSignName($signName)
 * @method string getSignName()
 */
class SendSms extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setStartDate($startDate)
 * @method string getStartDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class QuerySendDetails extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTo($to)
 * @method string getTo()
 * @method $this setFrom($from)
 * @method string getFrom()
 * @method $this setTemplateCode($templateCode)
 * @method string getTemplateCode()
 * @method $this setTemplateParam($templateParam)
 * @method string getTemplateParam()
 * @method $this setSmsUpExtendCode($smsUpExtendCode)
 * @method string getSmsUpExtendCode()
 */
class SendMessageWithTemplate extends Request
{

}