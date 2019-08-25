<?php

namespace aliyun\sdk\services\Dm20151123;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20151123
 *
 * @package aliyun\sdk\services\Dm20151123
 * @method SenderStatisticsByTagNameAndBatchID SenderStatisticsByTagNameAndBatchID()
 * @method QueryReceiverDetail QueryReceiverDetail()
 * @method DeleteSign DeleteSign()
 * @method BatchSendMail BatchSendMail()
 * @method QueryTagByParam QueryTagByParam()
 * @method ModifyPWByDomain ModifyPWByDomain()
 * @method SenderStatisticsDetailByParam SenderStatisticsDetailByParam()
 * @method QueryMailAddressByParam QueryMailAddressByParam()
 * @method CheckReplyToMailAddress CheckReplyToMailAddress()
 * @method ApproveSmsTemplate ApproveSmsTemplate()
 * @method GetTrackListByMailFromAndTagName GetTrackListByMailFromAndTagName()
 * @method DeleteTag DeleteTag()
 * @method DeleteReceiver DeleteReceiver()
 * @method ModifyTag ModifyTag()
 * @method CreateTag CreateTag()
 * @method QuerySignByParam QuerySignByParam()
 * @method GetAccountList GetAccountList()
 * @method CreateDomain CreateDomain()
 * @method CreateReceiver CreateReceiver()
 * @method GetSenderAddressList GetSenderAddressList()
 * @method ModifyAccountNotification ModifyAccountNotification()
 * @method ModifyMailAddress ModifyMailAddress()
 * @method SingleSendMail SingleSendMail()
 * @method ApproveTemplate ApproveTemplate()
 * @method CreateDayu CreateDayu()
 * @method SaveReceiverDetail SaveReceiverDetail()
 * @method QueryTemplateByParam QueryTemplateByParam()
 * @method UpdateDomainTrackName UpdateDomainTrackName()
 * @method ApproveReplyMailAddress ApproveReplyMailAddress()
 * @method ModifyTemplate ModifyTemplate()
 * @method DescDomain DescDomain()
 * @method QueryInvalidAddress QueryInvalidAddress()
 * @method DeleteMailAddress DeleteMailAddress()
 * @method QueryTaskByParam QueryTaskByParam()
 * @method ApproveMailTemplate ApproveMailTemplate()
 * @method CreateMailAddress CreateMailAddress()
 * @method CreateSign CreateSign()
 * @method SetMaxQuotaLevel SetMaxQuotaLevel()
 * @method SendTestByTemplate SendTestByTemplate()
 * @method CheckInvalidAddress CheckInvalidAddress()
 * @method CheckDomain CheckDomain()
 * @method ModifySenderAddressNotification ModifySenderAddressNotification()
 * @method QueryReceiverByParam QueryReceiverByParam()
 * @method GetIpProtection GetIpProtection()
 * @method DeleteTemplate DeleteTemplate()
 * @method DeleteInvalidAddress DeleteInvalidAddress()
 * @method DescAccountSummary2 DescAccountSummary2()
 * @method DescTemplate DescTemplate()
 * @method MigrateMarket MigrateMarket()
 * @method CreateTemplate CreateTemplate()
 * @method GetRegionList GetRegionList()
 * @method AddIpfilter AddIpfilter()
 * @method DeleteIpfilterByEdmId DeleteIpfilterByEdmId()
 * @method SingleSendSms SingleSendSms()
 * @method QueryDomainByParam QueryDomainByParam()
 * @method DeleteDomain DeleteDomain()
 * @method DeleteReceiverDetail DeleteReceiverDetail()
 * @method DescAccountSummary DescAccountSummary()
 * @method GetIpfilterList GetIpfilterList()
 * @method QuerySmsStatistics QuerySmsStatistics()
 * @method UpdateIpProtection UpdateIpProtection()
 * @method GetTrackList GetTrackList()
 * @method EnableAccount EnableAccount()
 */
class V20151123
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
 * @method $this setSignId($signId)
 * @method int getSignId()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class DeleteSign extends Request
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
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class ApproveSmsTemplate extends Request
{
}/**
 * @method $this setTotal($total)
 * @method string getTotal()
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
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 */
class GetTrackListByMailFromAndTagName extends Request
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
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class QuerySignByParam extends Request
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
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class ModifyAccountNotification extends Request
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
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class ApproveTemplate extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setAccountType($accountType)
 * @method int getAccountType()
 */
class CreateDayu extends Request
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
 * @method $this setDomainId($domainId)
 * @method int getDomainId()
 * @method $this setCnameTrackRecord($cnameTrackRecord)
 * @method string getCnameTrackRecord()
 */
class UpdateDomainTrackName extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTicket($ticket)
 * @method string getTicket()
 */
class ApproveReplyMailAddress extends Request
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
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class ApproveMailTemplate extends Request
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
 * @method $this setSignName($signName)
 * @method string getSignName()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setSignType($signType)
 * @method int getSignType()
 * @method $this setFileNames($fileNames)
 * @method string getFileNames()
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class CreateSign extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMaxQuotaLevel($maxQuotaLevel)
 * @method string getMaxQuotaLevel()
 */
class SetMaxQuotaLevel extends Request
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
 * @method $this setToAddress($toAddress)
 * @method string getToAddress()
 */
class CheckInvalidAddress extends Request
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
 * @method $this setSenderAddressId($senderAddressId)
 * @method string getSenderAddressId()
 * @method $this setSenderAddress($senderAddress)
 * @method string getSenderAddress()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class ModifySenderAddressNotification extends Request
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
 * @method $this setToAddress($toAddress)
 * @method string getToAddress()
 */
class DeleteInvalidAddress extends Request
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
 */
class DescAccountSummary2 extends Request
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
 * @method $this setFromType($fromType)
 * @method int getFromType()
 */
class MigrateMarket extends Request
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
 * @method $this setSignName($signName)
 * @method string getSignName()
 * @method $this setTemplateCode($templateCode)
 * @method string getTemplateCode()
 * @method $this setRecNum($recNum)
 * @method string getRecNum()
 * @method $this setParamString($paramString)
 * @method string getParamString()
 */
class SingleSendSms extends Request
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
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class EnableAccount extends Request
{
}
