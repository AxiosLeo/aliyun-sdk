<?php

namespace aliyun\sdk\services\Dm20170622;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170622
 *
 * @package aliyun\sdk\services\Dm20170622
 * @method SenderStatisticsByTagNameAndBatchID SenderStatisticsByTagNameAndBatchID()
 * @method QueryReceiverDetail QueryReceiverDetail()
 * @method BatchSendMail BatchSendMail()
 * @method QueryTagByParam QueryTagByParam()
 * @method ModifyPWByDomain ModifyPWByDomain()
 * @method SenderStatisticsDetailByParam SenderStatisticsDetailByParam()
 * @method QueryMailAddressByParam QueryMailAddressByParam()
 * @method CheckReplyToMailAddress CheckReplyToMailAddress()
 * @method DeleteTag DeleteTag()
 * @method DeleteReceiver DeleteReceiver()
 * @method ModifyTag ModifyTag()
 * @method CreateTag CreateTag()
 * @method GetAccountList GetAccountList()
 * @method CreateDomain CreateDomain()
 * @method CreateReceiver CreateReceiver()
 * @method GetSenderAddressList GetSenderAddressList()
 * @method ModifyMailAddress ModifyMailAddress()
 * @method SingleSendMail SingleSendMail()
 * @method SaveReceiverDetail SaveReceiverDetail()
 * @method QueryTemplateByParam QueryTemplateByParam()
 * @method ModifyTemplate ModifyTemplate()
 * @method DescDomain DescDomain()
 * @method QueryInvalidAddress QueryInvalidAddress()
 * @method DeleteMailAddress DeleteMailAddress()
 * @method QueryTaskByParam QueryTaskByParam()
 * @method CreateMailAddress CreateMailAddress()
 * @method SendTestByTemplate SendTestByTemplate()
 * @method CheckDomain CheckDomain()
 * @method QueryReceiverByParam QueryReceiverByParam()
 * @method GetIpProtection GetIpProtection()
 * @method DeleteTemplate DeleteTemplate()
 * @method DescTemplate DescTemplate()
 * @method CreateTemplate CreateTemplate()
 * @method GetRegionList GetRegionList()
 * @method AddIpfilter AddIpfilter()
 * @method DeleteIpfilterByEdmId DeleteIpfilterByEdmId()
 * @method QueryDomainByParam QueryDomainByParam()
 * @method DeleteDomain DeleteDomain()
 * @method DeleteReceiverDetail DeleteReceiverDetail()
 * @method DescAccountSummary DescAccountSummary()
 * @method GetIpfilterList GetIpfilterList()
 * @method QuerySmsStatistics QuerySmsStatistics()
 * @method UpdateIpProtection UpdateIpProtection()
 * @method GetTrackList GetTrackList()
 */
class V20170622
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 */
class SenderStatisticsByTagNameAndBatchID extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setReceiverId($receiverId)
 * @method string getReceiverId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setNextStart($nextStart)
 * @method string getNextStart()
 */
class QueryReceiverDetail extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setReceiversName($receiversName)
 * @method string getReceiversName()
 * @method $this setAddressType($addressType)
 * @method int getAddressType()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 * @method $this setReplyAddress($replyAddress)
 * @method string getReplyAddress()
 * @method $this setReplyAddressAlias($replyAddressAlias)
 * @method string getReplyAddressAlias()
 * @method $this setClickTrace($clickTrace)
 * @method string getClickTrace()
 */
class BatchSendMail extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 */
class QueryTagByParam extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 */
class ModifyPWByDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setToAddress($toAddress)
 * @method string getToAddress()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setNextStart($nextStart)
 * @method string getNextStart()
 */
class SenderStatisticsDetailByParam extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setSendtype($sendtype)
 * @method string getSendtype()
 */
class QueryMailAddressByParam extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setMailAddressId($mailAddressId)
 * @method int getMailAddressId()
 */
class CheckReplyToMailAddress extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTagId($tagId)
 * @method int getTagId()
 */
class DeleteTag extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setReceiverId($receiverId)
 * @method string getReceiverId()
 */
class DeleteReceiver extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTagId($tagId)
 * @method int getTagId()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 */
class ModifyTag extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 */
class CreateTag extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTotal($total)
 * @method string getTotal()
 * @method $this setOffset($offset)
 * @method string getOffset()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setOffsetCreateTime($offsetCreateTime)
 * @method string getOffsetCreateTime()
 * @method $this setOffsetCreateTimeDesc($offsetCreateTimeDesc)
 * @method string getOffsetCreateTimeDesc()
 * @method $this setPageNumber($pageNumber)
 * @method string getPageNumber()
 */
class GetAccountList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class CreateDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setReceiversName($receiversName)
 * @method string getReceiversName()
 * @method $this setReceiversAlias($receiversAlias)
 * @method string getReceiversAlias()
 * @method $this setDesc($desc)
 * @method string getDesc()
 */
class CreateReceiver extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTotal($total)
 * @method string getTotal()
 * @method $this setOffset($offset)
 * @method string getOffset()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageNo($pageNo)
 * @method string getPageNo()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 */
class GetSenderAddressList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMailAddressId($mailAddressId)
 * @method int getMailAddressId()
 * @method $this setReplyAddress($replyAddress)
 * @method string getReplyAddress()
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class ModifyMailAddress extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAddressType($addressType)
 * @method int getAddressType()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 * @method $this setReplyToAddress($replyToAddress)
 * @method bool getReplyToAddress()
 * @method $this setToAddress($toAddress)
 * @method string getToAddress()
 * @method $this setSubject($subject)
 * @method string getSubject()
 * @method $this setHtmlBody($htmlBody)
 * @method string getHtmlBody()
 * @method $this setTextBody($textBody)
 * @method string getTextBody()
 * @method $this setFromAlias($fromAlias)
 * @method string getFromAlias()
 * @method $this setReplyAddress($replyAddress)
 * @method string getReplyAddress()
 * @method $this setReplyAddressAlias($replyAddressAlias)
 * @method string getReplyAddressAlias()
 * @method $this setClickTrace($clickTrace)
 * @method string getClickTrace()
 */
class SingleSendMail extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setReceiverId($receiverId)
 * @method string getReceiverId()
 * @method $this setDetail($detail)
 * @method string getDetail()
 */
class SaveReceiverDetail extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class QueryTemplateByParam extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setTemplateSubject($templateSubject)
 * @method string getTemplateSubject()
 * @method $this setTemplateNickName($templateNickName)
 * @method string getTemplateNickName()
 * @method $this setTemplateText($templateText)
 * @method string getTemplateText()
 * @method $this setSmsType($smsType)
 * @method int getSmsType()
 * @method $this setSmsContent($smsContent)
 * @method string getSmsContent()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class ModifyTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDomainId($domainId)
 * @method int getDomainId()
 */
class DescDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setNextStart($nextStart)
 * @method string getNextStart()
 */
class QueryInvalidAddress extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMailAddressId($mailAddressId)
 * @method int getMailAddressId()
 */
class DeleteMailAddress extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setStatus($status)
 * @method int getStatus()
 */
class QueryTaskByParam extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setReplyAddress($replyAddress)
 * @method string getReplyAddress()
 * @method $this setSendtype($sendtype)
 * @method string getSendtype()
 */
class CreateMailAddress extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setNickName($nickName)
 * @method string getNickName()
 * @method $this setBirthday($birthday)
 * @method string getBirthday()
 * @method $this setGender($gender)
 * @method string getGender()
 * @method $this setMobile($mobile)
 * @method string getMobile()
 * @method $this setEmail($email)
 * @method string getEmail()
 */
class SendTestByTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDomainId($domainId)
 * @method int getDomainId()
 */
class CheckDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setStatus($status)
 * @method int getStatus()
 */
class QueryReceiverByParam extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class GetIpProtection extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class DeleteTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class DescTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateType($templateType)
 * @method int getTemplateType()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setTemplateSubject($templateSubject)
 * @method string getTemplateSubject()
 * @method $this setTemplateNickName($templateNickName)
 * @method string getTemplateNickName()
 * @method $this setTemplateText($templateText)
 * @method string getTemplateText()
 * @method $this setSmsType($smsType)
 * @method int getSmsType()
 * @method $this setSmsContent($smsContent)
 * @method string getSmsContent()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class CreateTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTotal($total)
 * @method string getTotal()
 * @method $this setOffset($offset)
 * @method string getOffset()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setOffsetCreateTime($offsetCreateTime)
 * @method string getOffsetCreateTime()
 * @method $this setOffsetCreateTimeDesc($offsetCreateTimeDesc)
 * @method string getOffsetCreateTimeDesc()
 * @method $this setPageNumber($pageNumber)
 * @method string getPageNumber()
 */
class GetRegionList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setIpAddress($ipAddress)
 * @method string getIpAddress()
 */
class AddIpfilter extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 * @method $this setId($id)
 * @method string getId()
 */
class DeleteIpfilterByEdmId extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setStatus($status)
 * @method int getStatus()
 */
class QueryDomainByParam extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDomainId($domainId)
 * @method int getDomainId()
 */
class DeleteDomain extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setReceiverId($receiverId)
 * @method string getReceiverId()
 * @method $this setEmail($email)
 * @method string getEmail()
 */
class DeleteReceiverDetail extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class DescAccountSummary extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class GetIpfilterList extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class QuerySmsStatistics extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setIpProtection($ipProtection)
 * @method string getIpProtection()
 */
class UpdateIpProtection extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTotal($total)
 * @method string getTotal()
 * @method $this setOffset($offset)
 * @method string getOffset()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setOffsetCreateTime($offsetCreateTime)
 * @method string getOffsetCreateTime()
 * @method $this setOffsetCreateTimeDesc($offsetCreateTimeDesc)
 * @method string getOffsetCreateTimeDesc()
 * @method $this setPageNumber($pageNumber)
 * @method string getPageNumber()
 */
class GetTrackList extends Request
{
}
