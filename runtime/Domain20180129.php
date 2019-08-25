<?php

namespace aliyun\sdk\services\Domain20180129;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180129
 *
 * @package aliyun\sdk\services\Domain20180129
 * @method ScrollDomainList ScrollDomainList()
 * @method SaveSingleTaskForQueryingTransferAuthorizationCode SaveSingleTaskForQueryingTransferAuthorizationCode()
 * @method SaveSingleTaskForCreatingOrderTransfer SaveSingleTaskForCreatingOrderTransfer()
 * @method SaveSingleTaskForAddingDSRecord SaveSingleTaskForAddingDSRecord()
 * @method SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential()
 * @method SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID()
 * @method QueryDomainRealNameVerificationInfo QueryDomainRealNameVerificationInfo()
 * @method SaveTaskForSubmittingDomainDelete SaveTaskForSubmittingDomainDelete()
 * @method SaveSingleTaskForDisassociatingEns SaveSingleTaskForDisassociatingEns()
 * @method QueryQualificationDetail QueryQualificationDetail()
 * @method SaveSingleTaskForSynchronizingDnsHost SaveSingleTaskForSynchronizingDnsHost()
 * @method TransferInResendMailToken TransferInResendMailToken()
 * @method SaveSingleTaskForUpdatingContactInfo SaveSingleTaskForUpdatingContactInfo()
 * @method ListEmailVerification ListEmailVerification()
 * @method SaveRegistrantProfile SaveRegistrantProfile()
 * @method TransferInRefetchWhoisEmail TransferInRefetchWhoisEmail()
 * @method SaveBatchTaskForTransferProhibitionLock SaveBatchTaskForTransferProhibitionLock()
 * @method QueryFailReasonForDomainRealNameVerification QueryFailReasonForDomainRealNameVerification()
 * @method CheckTransferInFeasibility CheckTransferInFeasibility()
 * @method DeleteDomainGroup DeleteDomainGroup()
 * @method EmailVerified EmailVerified()
 * @method SaveSingleTaskForApprovingTransferOut SaveSingleTaskForApprovingTransferOut()
 * @method QueryTransferOutInfo QueryTransferOutInfo()
 * @method UpdateDomainToDomainGroup UpdateDomainToDomainGroup()
 * @method QueryTaskList QueryTaskList()
 * @method QueryDomainAdminDivision QueryDomainAdminDivision()
 * @method DeleteEmailVerification DeleteEmailVerification()
 * @method DeleteRegistrantProfile DeleteRegistrantProfile()
 * @method FuzzyMatchDomainSensitiveWord FuzzyMatchDomainSensitiveWord()
 * @method QueryDomainList QueryDomainList()
 * @method SaveBatchTaskForCreatingOrderTransfer SaveBatchTaskForCreatingOrderTransfer()
 * @method PollTaskResult PollTaskResult()
 * @method SaveTaskForUpdatingRegistrantInfoByIdentityCredential SaveTaskForUpdatingRegistrantInfoByIdentityCredential()
 * @method ResendEmailVerification ResendEmailVerification()
 * @method SaveSingleTaskForCreatingDnsHost SaveSingleTaskForCreatingDnsHost()
 * @method QueryTaskDetailList QueryTaskDetailList()
 * @method QueryAdvancedDomainList QueryAdvancedDomainList()
 * @method QueryRegistrantProfiles QueryRegistrantProfiles()
 * @method SaveSingleTaskForSynchronizingDSRecord SaveSingleTaskForSynchronizingDSRecord()
 * @method ResetQualificationVerification ResetQualificationVerification()
 * @method SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId()
 * @method GetQualificationUploadPolicy GetQualificationUploadPolicy()
 * @method SubmitEmailVerification SubmitEmailVerification()
 * @method QueryLocalEnsAssociation QueryLocalEnsAssociation()
 * @method SaveBatchDomainRemark SaveBatchDomainRemark()
 * @method SaveBatchTaskForUpdateProhibitionLock SaveBatchTaskForUpdateProhibitionLock()
 * @method CancelDomainVerification CancelDomainVerification()
 * @method SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID()
 * @method AcknowledgeTaskResult AcknowledgeTaskResult()
 * @method TransferInReenterTransferAuthorizationCode TransferInReenterTransferAuthorizationCode()
 * @method ListServerLock ListServerLock()
 * @method CancelQualificationVerification CancelQualificationVerification()
 * @method SaveBatchTaskForModifyingDomainDns SaveBatchTaskForModifyingDomainDns()
 * @method QueryTaskInfoHistory QueryTaskInfoHistory()
 * @method SaveBatchTaskForCreatingOrderActivate SaveBatchTaskForCreatingOrderActivate()
 * @method QueryTaskDetailHistory QueryTaskDetailHistory()
 * @method CheckDomain CheckDomain()
 * @method QueryEmailVerification QueryEmailVerification()
 * @method QueryRegistrantProfileRealNameVerificationInfo QueryRegistrantProfileRealNameVerificationInfo()
 * @method QueryDomainSuffix QueryDomainSuffix()
 * @method QueryDomainGroupList QueryDomainGroupList()
 * @method QueryDnsHost QueryDnsHost()
 * @method SaveSingleTaskForCreatingOrderRenew SaveSingleTaskForCreatingOrderRenew()
 * @method QueryDomainByInstanceId QueryDomainByInstanceId()
 * @method CheckMaxYearOfServerLock CheckMaxYearOfServerLock()
 * @method LookupTmchNotice LookupTmchNotice()
 * @method CheckDomainSunriseClaim CheckDomainSunriseClaim()
 * @method QueryFailingReasonListForQualification QueryFailingReasonListForQualification()
 * @method QueryServerLock QueryServerLock()
 * @method SaveSingleTaskForCancelingTransferIn SaveSingleTaskForCancelingTransferIn()
 * @method SaveSingleTaskForDomainNameProxyService SaveSingleTaskForDomainNameProxyService()
 * @method SaveBatchTaskForCreatingOrderRenew SaveBatchTaskForCreatingOrderRenew()
 * @method SaveSingleTaskForTransferProhibitionLock SaveSingleTaskForTransferProhibitionLock()
 * @method SaveBatchTaskForCreatingOrderRedeem SaveBatchTaskForCreatingOrderRedeem()
 * @method QueryEnsAssociation QueryEnsAssociation()
 * @method VerifyContactField VerifyContactField()
 * @method SaveBatchTaskForDomainNameProxyService SaveBatchTaskForDomainNameProxyService()
 * @method SaveSingleTaskForCreatingOrderActivate SaveSingleTaskForCreatingOrderActivate()
 * @method QueryDSRecord QueryDSRecord()
 * @method ConfirmTransferInEmail ConfirmTransferInEmail()
 * @method QueryChangeLogList QueryChangeLogList()
 * @method SaveSingleTaskForCreatingOrderRedeem SaveSingleTaskForCreatingOrderRedeem()
 * @method QueryTransferInByInstanceId QueryTransferInByInstanceId()
 * @method SaveSingleTaskForUpdateProhibitionLock SaveSingleTaskForUpdateProhibitionLock()
 * @method RegistrantProfileRealNameVerification RegistrantProfileRealNameVerification()
 * @method BatchFuzzyMatchDomainSensitiveWord BatchFuzzyMatchDomainSensitiveWord()
 * @method SaveBatchTaskForUpdatingContactInfoByNewContact SaveBatchTaskForUpdatingContactInfoByNewContact()
 * @method CheckProcessingServerLockApply CheckProcessingServerLockApply()
 * @method QueryTransferInList QueryTransferInList()
 * @method SaveSingleTaskForModifyingDSRecord SaveSingleTaskForModifyingDSRecord()
 * @method QueryFailReasonForRegistrantProfileRealNameVerification QueryFailReasonForRegistrantProfileRealNameVerification()
 * @method TransferInCheckMailToken TransferInCheckMailToken()
 * @method QueryContactInfo QueryContactInfo()
 * @method SaveSingleTaskForCancelingTransferOut SaveSingleTaskForCancelingTransferOut()
 * @method SaveSingleTaskForModifyingDnsHost SaveSingleTaskForModifyingDnsHost()
 * @method SaveDomainGroup SaveDomainGroup()
 * @method VerifyEmail VerifyEmail()
 * @method SaveSingleTaskForDeletingDSRecord SaveSingleTaskForDeletingDSRecord()
 * @method SaveSingleTaskForDeletingDnsHost SaveSingleTaskForDeletingDnsHost()
 * @method SaveSingleTaskForAssociatingEns SaveSingleTaskForAssociatingEns()
 */
class V20180129
{
}

/**
 * @method $this setEndExpirationDate($endExpirationDate)
 * @method int getEndExpirationDate()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartExpirationDate($startExpirationDate)
 * @method int getStartExpirationDate()
 * @method $this setProductDomainType($productDomainType)
 * @method string getProductDomainType()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDomainGroupId($domainGroupId)
 * @method int getDomainGroupId()
 * @method $this setDomainStatus($domainStatus)
 * @method int getDomainStatus()
 * @method $this setEndLength($endLength)
 * @method int getEndLength()
 * @method $this setExcluded($excluded)
 * @method string getExcluded()
 * @method $this setExcludedPrefix($excludedPrefix)
 * @method bool getExcludedPrefix()
 * @method $this setExcludedSuffix($excludedSuffix)
 * @method bool getExcludedSuffix()
 * @method $this setForm($form)
 * @method int getForm()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setKeyWordPrefix($keyWordPrefix)
 * @method bool getKeyWordPrefix()
 * @method $this setKeyWordSuffix($keyWordSuffix)
 * @method bool getKeyWordSuffix()
 * @method $this setStartLength($startLength)
 * @method int getStartLength()
 * @method $this setTradeType($tradeType)
 * @method int getTradeType()
 * @method $this setSuffixs($suffixs)
 * @method string getSuffixs()
 * @method $this setStartRegistrationDate($startRegistrationDate)
 * @method int getStartRegistrationDate()
 * @method $this setEndRegistrationDate($endRegistrationDate)
 * @method int getEndRegistrationDate()
 * @method $this setScrollId($scrollId)
 * @method string getScrollId()
 */
class ScrollDomainList extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class SaveSingleTaskForQueryingTransferAuthorizationCode extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAuthorizationCode($authorizationCode)
 * @method string getAuthorizationCode()
 * @method $this setRegistrantProfileId($registrantProfileId)
 * @method int getRegistrantProfileId()
 * @method $this setPermitPremiumTransfer($permitPremiumTransfer)
 * @method bool getPermitPremiumTransfer()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setUseCoupon($useCoupon)
 * @method bool getUseCoupon()
 * @method $this setPromotionNo($promotionNo)
 * @method string getPromotionNo()
 * @method $this setUsePromotion($usePromotion)
 * @method bool getUsePromotion()
 */
class SaveSingleTaskForCreatingOrderTransfer extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setKeyTag($keyTag)
 * @method int getKeyTag()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setAlgorithm($algorithm)
 * @method int getAlgorithm()
 * @method $this setDigestType($digestType)
 * @method int getDigestType()
 * @method $this setDigest($digest)
 * @method string getDigest()
 */
class SaveSingleTaskForAddingDSRecord extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIdentityCredential($identityCredential)
 * @method string getIdentityCredential()
 * @method $this setIdentityCredentialNo($identityCredentialNo)
 * @method string getIdentityCredentialNo()
 * @method $this setIdentityCredentialType($identityCredentialType)
 * @method string getIdentityCredentialType()
 * @method $this setDomainName($domainName)
 * @method array getDomainName()
 */
class SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegistrantProfileId($registrantProfileId)
 * @method int getRegistrantProfileId()
 * @method $this setDomainName($domainName)
 * @method array getDomainName()
 * @method $this setTransferOutProhibited($transferOutProhibited)
 * @method bool getTransferOutProhibited()
 */
class SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setFetchImage($fetchImage)
 * @method bool getFetchImage()
 */
class QueryDomainRealNameVerificationInfo extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class SaveTaskForSubmittingDomainDelete extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class SaveSingleTaskForDisassociatingEns extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setQualificationType($qualificationType)
 * @method string getQualificationType()
 */
class QueryQualificationDetail extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class SaveSingleTaskForSynchronizingDnsHost extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class TransferInResendMailToken extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegistrantProfileId($registrantProfileId)
 * @method int getRegistrantProfileId()
 * @method $this setContactType($contactType)
 * @method string getContactType()
 * @method $this setAddTransferLock($addTransferLock)
 * @method bool getAddTransferLock()
 */
class SaveSingleTaskForUpdatingContactInfo extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setBeginCreateTime($beginCreateTime)
 * @method int getBeginCreateTime()
 * @method $this setEndCreateTime($endCreateTime)
 * @method int getEndCreateTime()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setVerificationStatus($verificationStatus)
 * @method int getVerificationStatus()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class ListEmailVerification extends Request
{
}/**
 * @method $this setDefaultRegistrantProfile($defaultRegistrantProfile)
 * @method bool getDefaultRegistrantProfile()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegistrantProfileId($registrantProfileId)
 * @method int getRegistrantProfileId()
 * @method $this setCity($city)
 * @method string getCity()
 * @method $this setRegistrantOrganization($registrantOrganization)
 * @method string getRegistrantOrganization()
 * @method $this setRegistrantName($registrantName)
 * @method string getRegistrantName()
 * @method $this setProvince($province)
 * @method string getProvince()
 * @method $this setAddress($address)
 * @method string getAddress()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setPostalCode($postalCode)
 * @method string getPostalCode()
 * @method $this setTelArea($telArea)
 * @method string getTelArea()
 * @method $this setTelephone($telephone)
 * @method string getTelephone()
 * @method $this setTelExt($telExt)
 * @method string getTelExt()
 * @method $this setZhRegistrantOrganization($zhRegistrantOrganization)
 * @method string getZhRegistrantOrganization()
 * @method $this setZhRegistrantName($zhRegistrantName)
 * @method string getZhRegistrantName()
 * @method $this setZhProvince($zhProvince)
 * @method string getZhProvince()
 * @method $this setZhAddress($zhAddress)
 * @method string getZhAddress()
 * @method $this setZhCity($zhCity)
 * @method string getZhCity()
 * @method $this setRegistrantType($registrantType)
 * @method string getRegistrantType()
 * @method $this setRegistrantProfileType($registrantProfileType)
 * @method string getRegistrantProfileType()
 */
class SaveRegistrantProfile extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class TransferInRefetchWhoisEmail extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method array getDomainName()
 * @method $this setStatus($status)
 * @method bool getStatus()
 */
class SaveBatchTaskForTransferProhibitionLock extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRealNameVerificationAction($realNameVerificationAction)
 * @method string getRealNameVerificationAction()
 */
class QueryFailReasonForDomainRealNameVerification extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setTransferAuthorizationCode($transferAuthorizationCode)
 * @method string getTransferAuthorizationCode()
 */
class CheckTransferInFeasibility extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainGroupId($domainGroupId)
 * @method int getDomainGroupId()
 */
class DeleteDomainGroup extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setEmail($email)
 * @method string getEmail()
 */
class EmailVerified extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class SaveSingleTaskForApprovingTransferOut extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class QueryTransferOutInfo extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFileToUpload($fileToUpload)
 * @method string getFileToUpload()
 * @method $this setDomainName($domainName)
 * @method array getDomainName()
 * @method $this setDomainGroupId($domainGroupId)
 * @method int getDomainGroupId()
 * @method $this setReplace($replace)
 * @method bool getReplace()
 * @method $this setDataSource($dataSource)
 * @method int getDataSource()
 */
class UpdateDomainToDomainGroup extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setBeginCreateTime($beginCreateTime)
 * @method int getBeginCreateTime()
 * @method $this setEndCreateTime($endCreateTime)
 * @method int getEndCreateTime()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryTaskList extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class QueryDomainAdminDivision extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class DeleteEmailVerification extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegistrantProfileId($registrantProfileId)
 * @method int getRegistrantProfileId()
 */
class DeleteRegistrantProfile extends Request
{
}/**
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class FuzzyMatchDomainSensitiveWord extends Request
{
}/**
 * @method $this setEndExpirationDate($endExpirationDate)
 * @method int getEndExpirationDate()
 * @method $this setStartExpirationDate($startExpirationDate)
 * @method int getStartExpirationDate()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setStartRegistrationDate($startRegistrationDate)
 * @method int getStartRegistrationDate()
 * @method $this setEndRegistrationDate($endRegistrationDate)
 * @method int getEndRegistrationDate()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setOrderByType($orderByType)
 * @method string getOrderByType()
 * @method $this setOrderKeyType($orderKeyType)
 * @method string getOrderKeyType()
 * @method $this setProductDomainType($productDomainType)
 * @method string getProductDomainType()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDomainGroupId($domainGroupId)
 * @method string getDomainGroupId()
 */
class QueryDomainList extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setOrderTransferParam($orderTransferParam)
 * @method array getOrderTransferParam()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setUseCoupon($useCoupon)
 * @method bool getUseCoupon()
 * @method $this setPromotionNo($promotionNo)
 * @method string getPromotionNo()
 * @method $this setUsePromotion($usePromotion)
 * @method bool getUsePromotion()
 */
class SaveBatchTaskForCreatingOrderTransfer extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTaskNo($taskNo)
 * @method string getTaskNo()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTaskResultStatus($taskResultStatus)
 * @method int getTaskResultStatus()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class PollTaskResult extends Request
{
}/**
 * @method $this setPostalCode($postalCode)
 * @method string getPostalCode()
 * @method $this setAddress($address)
 * @method string getAddress()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setCity($city)
 * @method string getCity()
 * @method $this setRegistrantOrganization($registrantOrganization)
 * @method string getRegistrantOrganization()
 * @method $this setRegistrantName($registrantName)
 * @method string getRegistrantName()
 * @method $this setProvince($province)
 * @method string getProvince()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTelArea($telArea)
 * @method string getTelArea()
 * @method $this setTelephone($telephone)
 * @method string getTelephone()
 * @method $this setTelExt($telExt)
 * @method string getTelExt()
 * @method $this setZhCity($zhCity)
 * @method string getZhCity()
 * @method $this setZhRegistrantOrganization($zhRegistrantOrganization)
 * @method string getZhRegistrantOrganization()
 * @method $this setZhRegistrantName($zhRegistrantName)
 * @method string getZhRegistrantName()
 * @method $this setZhProvince($zhProvince)
 * @method string getZhProvince()
 * @method $this setZhAddress($zhAddress)
 * @method string getZhAddress()
 * @method $this setRegistrantType($registrantType)
 * @method string getRegistrantType()
 * @method $this setDomainName($domainName)
 * @method array getDomainName()
 * @method $this setIdentityCredentialType($identityCredentialType)
 * @method string getIdentityCredentialType()
 * @method $this setIdentityCredentialNo($identityCredentialNo)
 * @method string getIdentityCredentialNo()
 * @method $this setIdentityCredential($identityCredential)
 * @method string getIdentityCredential()
 * @method $this setTransferOutProhibited($transferOutProhibited)
 * @method bool getTransferOutProhibited()
 */
class SaveTaskForUpdatingRegistrantInfoByIdentityCredential extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class ResendEmailVerification extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDnsName($dnsName)
 * @method string getDnsName()
 * @method $this setIp($ip)
 * @method array getIp()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class SaveSingleTaskForCreatingDnsHost extends Request
{
}/**
 * @method $this setTaskStatus($taskStatus)
 * @method int getTaskStatus()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTaskNo($taskNo)
 * @method string getTaskNo()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryTaskDetailList extends Request
{
}/**
 * @method $this setEndExpirationDate($endExpirationDate)
 * @method int getEndExpirationDate()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartExpirationDate($startExpirationDate)
 * @method int getStartExpirationDate()
 * @method $this setProductDomainType($productDomainType)
 * @method string getProductDomainType()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDomainGroupId($domainGroupId)
 * @method int getDomainGroupId()
 * @method $this setDomainNameSort($domainNameSort)
 * @method bool getDomainNameSort()
 * @method $this setDomainStatus($domainStatus)
 * @method int getDomainStatus()
 * @method $this setEndLength($endLength)
 * @method int getEndLength()
 * @method $this setExcluded($excluded)
 * @method string getExcluded()
 * @method $this setExcludedPrefix($excludedPrefix)
 * @method bool getExcludedPrefix()
 * @method $this setExcludedSuffix($excludedSuffix)
 * @method bool getExcludedSuffix()
 * @method $this setExpirationDateSort($expirationDateSort)
 * @method bool getExpirationDateSort()
 * @method $this setForm($form)
 * @method int getForm()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setKeyWordPrefix($keyWordPrefix)
 * @method bool getKeyWordPrefix()
 * @method $this setKeyWordSuffix($keyWordSuffix)
 * @method bool getKeyWordSuffix()
 * @method $this setProductDomainTypeSort($productDomainTypeSort)
 * @method bool getProductDomainTypeSort()
 * @method $this setRegistrationDateSort($registrationDateSort)
 * @method bool getRegistrationDateSort()
 * @method $this setStartLength($startLength)
 * @method int getStartLength()
 * @method $this setTradeType($tradeType)
 * @method int getTradeType()
 * @method $this setSuffixs($suffixs)
 * @method string getSuffixs()
 * @method $this setStartRegistrationDate($startRegistrationDate)
 * @method int getStartRegistrationDate()
 * @method $this setEndRegistrationDate($endRegistrationDate)
 * @method int getEndRegistrationDate()
 */
class QueryAdvancedDomainList extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegistrantOrganization($registrantOrganization)
 * @method string getRegistrantOrganization()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setRegistrantProfileId($registrantProfileId)
 * @method int getRegistrantProfileId()
 * @method $this setDefaultRegistrantProfile($defaultRegistrantProfile)
 * @method bool getDefaultRegistrantProfile()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setZhRegistrantOrganization($zhRegistrantOrganization)
 * @method string getZhRegistrantOrganization()
 * @method $this setRegistrantType($registrantType)
 * @method string getRegistrantType()
 * @method $this setRealNameStatus($realNameStatus)
 * @method string getRealNameStatus()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setRegistrantProfileType($registrantProfileType)
 * @method string getRegistrantProfileType()
 */
class QueryRegistrantProfiles extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class SaveSingleTaskForSynchronizingDSRecord extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class ResetQualificationVerification extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegistrantProfileId($registrantProfileId)
 * @method int getRegistrantProfileId()
 * @method $this setContactType($contactType)
 * @method string getContactType()
 * @method $this setTransferOutProhibited($transferOutProhibited)
 * @method bool getTransferOutProhibited()
 * @method $this setDomainName($domainName)
 * @method array getDomainName()
 */
class SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class GetQualificationUploadPolicy extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setSendIfExist($sendIfExist)
 * @method bool getSendIfExist()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class SubmitEmailVerification extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class QueryLocalEnsAssociation extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class SaveBatchDomainRemark extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method array getDomainName()
 * @method $this setStatus($status)
 * @method bool getStatus()
 */
class SaveBatchTaskForUpdateProhibitionLock extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setActionType($actionType)
 * @method string getActionType()
 */
class CancelDomainVerification extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegistrantProfileId($registrantProfileId)
 * @method int getRegistrantProfileId()
 */
class SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTaskDetailNo($taskDetailNo)
 * @method array getTaskDetailNo()
 */
class AcknowledgeTaskResult extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setTransferAuthorizationCode($transferAuthorizationCode)
 * @method string getTransferAuthorizationCode()
 */
class TransferInReenterTransferAuthorizationCode extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setEndStartDate($endStartDate)
 * @method int getEndStartDate()
 * @method $this setBeginStartDate($beginStartDate)
 * @method int getBeginStartDate()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setLockProductId($lockProductId)
 * @method string getLockProductId()
 * @method $this setServerLockStatus($serverLockStatus)
 * @method int getServerLockStatus()
 * @method $this setStartExpireDate($startExpireDate)
 * @method int getStartExpireDate()
 * @method $this setEndExpireDate($endExpireDate)
 * @method int getEndExpireDate()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class ListServerLock extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setQualificationType($qualificationType)
 * @method string getQualificationType()
 */
class CancelQualificationVerification extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method array getDomainName()
 * @method $this setAliyunDns($aliyunDns)
 * @method bool getAliyunDns()
 * @method $this setDomainNameServer($domainNameServer)
 * @method array getDomainNameServer()
 */
class SaveBatchTaskForModifyingDomainDns extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setBeginCreateTime($beginCreateTime)
 * @method int getBeginCreateTime()
 * @method $this setEndCreateTime($endCreateTime)
 * @method int getEndCreateTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCreateTimeCursor($createTimeCursor)
 * @method int getCreateTimeCursor()
 * @method $this setTaskNoCursor($taskNoCursor)
 * @method string getTaskNoCursor()
 */
class QueryTaskInfoHistory extends Request
{
}/**
 * @method $this setOrderActivateParam($orderActivateParam)
 * @method array getOrderActivateParam()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setUseCoupon($useCoupon)
 * @method bool getUseCoupon()
 * @method $this setPromotionNo($promotionNo)
 * @method string getPromotionNo()
 * @method $this setUsePromotion($usePromotion)
 * @method bool getUsePromotion()
 */
class SaveBatchTaskForCreatingOrderActivate extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setTaskNo($taskNo)
 * @method string getTaskNo()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setDomainNameCursor($domainNameCursor)
 * @method string getDomainNameCursor()
 * @method $this setTaskStatus($taskStatus)
 * @method int getTaskStatus()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setTaskDetailNoCursor($taskDetailNoCursor)
 * @method string getTaskDetailNoCursor()
 */
class QueryTaskDetailHistory extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setFeeCommand($feeCommand)
 * @method string getFeeCommand()
 * @method $this setFeeCurrency($feeCurrency)
 * @method string getFeeCurrency()
 * @method $this setFeePeriod($feePeriod)
 * @method int getFeePeriod()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class CheckDomain extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class QueryEmailVerification extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegistrantProfileId($registrantProfileId)
 * @method int getRegistrantProfileId()
 * @method $this setFetchImage($fetchImage)
 * @method bool getFetchImage()
 */
class QueryRegistrantProfileRealNameVerificationInfo extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class QueryDomainSuffix extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainGroupName($domainGroupName)
 * @method string getDomainGroupName()
 * @method $this setShowDeletingGroup($showDeletingGroup)
 * @method bool getShowDeletingGroup()
 */
class QueryDomainGroupList extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class QueryDnsHost extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setSubscriptionDuration($subscriptionDuration)
 * @method int getSubscriptionDuration()
 * @method $this setCurrentExpirationDate($currentExpirationDate)
 * @method int getCurrentExpirationDate()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setUseCoupon($useCoupon)
 * @method bool getUseCoupon()
 * @method $this setPromotionNo($promotionNo)
 * @method string getPromotionNo()
 * @method $this setUsePromotion($usePromotion)
 * @method bool getUsePromotion()
 */
class SaveSingleTaskForCreatingOrderRenew extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class QueryDomainByInstanceId extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setCheckAction($checkAction)
 * @method string getCheckAction()
 */
class CheckMaxYearOfServerLock extends Request
{
}/**
 * @method $this setClaimKey($claimKey)
 * @method string getClaimKey()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class LookupTmchNotice extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class CheckDomainSunriseClaim extends Request
{
}/**
 * @method $this setQualificationType($qualificationType)
 * @method string getQualificationType()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLimit($limit)
 * @method int getLimit()
 */
class QueryFailingReasonListForQualification extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class QueryServerLock extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class SaveSingleTaskForCancelingTransferIn extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStatus($status)
 * @method bool getStatus()
 */
class SaveSingleTaskForDomainNameProxyService extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setOrderRenewParam($orderRenewParam)
 * @method array getOrderRenewParam()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setUseCoupon($useCoupon)
 * @method bool getUseCoupon()
 * @method $this setPromotionNo($promotionNo)
 * @method string getPromotionNo()
 * @method $this setUsePromotion($usePromotion)
 * @method bool getUsePromotion()
 */
class SaveBatchTaskForCreatingOrderRenew extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStatus($status)
 * @method bool getStatus()
 */
class SaveSingleTaskForTransferProhibitionLock extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setOrderRedeemParam($orderRedeemParam)
 * @method array getOrderRedeemParam()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setUseCoupon($useCoupon)
 * @method bool getUseCoupon()
 * @method $this setPromotionNo($promotionNo)
 * @method string getPromotionNo()
 * @method $this setUsePromotion($usePromotion)
 * @method bool getUsePromotion()
 */
class SaveBatchTaskForCreatingOrderRedeem extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class QueryEnsAssociation extends Request
{
}/**
 * @method $this setProvince($province)
 * @method string getProvince()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setCity($city)
 * @method string getCity()
 * @method $this setRegistrantOrganization($registrantOrganization)
 * @method string getRegistrantOrganization()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setRegistrantName($registrantName)
 * @method string getRegistrantName()
 * @method $this setAddress($address)
 * @method string getAddress()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setPostalCode($postalCode)
 * @method string getPostalCode()
 * @method $this setTelArea($telArea)
 * @method string getTelArea()
 * @method $this setTelephone($telephone)
 * @method string getTelephone()
 * @method $this setTelExt($telExt)
 * @method string getTelExt()
 * @method $this setZhRegistrantOrganization($zhRegistrantOrganization)
 * @method string getZhRegistrantOrganization()
 * @method $this setZhRegistrantName($zhRegistrantName)
 * @method string getZhRegistrantName()
 * @method $this setZhProvince($zhProvince)
 * @method string getZhProvince()
 * @method $this setZhAddress($zhAddress)
 * @method string getZhAddress()
 * @method $this setZhCity($zhCity)
 * @method string getZhCity()
 * @method $this setRegistrantType($registrantType)
 * @method string getRegistrantType()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class VerifyContactField extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method array getDomainName()
 * @method $this setStatus($status)
 * @method bool getStatus()
 */
class SaveBatchTaskForDomainNameProxyService extends Request
{
}/**
 * @method $this setZhRegistrantName($zhRegistrantName)
 * @method string getZhRegistrantName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setSubscriptionDuration($subscriptionDuration)
 * @method int getSubscriptionDuration()
 * @method $this setRegistrantProfileId($registrantProfileId)
 * @method int getRegistrantProfileId()
 * @method $this setEnableDomainProxy($enableDomainProxy)
 * @method bool getEnableDomainProxy()
 * @method $this setPermitPremiumActivation($permitPremiumActivation)
 * @method bool getPermitPremiumActivation()
 * @method $this setAliyunDns($aliyunDns)
 * @method bool getAliyunDns()
 * @method $this setDns1($dns1)
 * @method string getDns1()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setZhCity($zhCity)
 * @method string getZhCity()
 * @method $this setZhRegistrantOrganization($zhRegistrantOrganization)
 * @method string getZhRegistrantOrganization()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setDns2($dns2)
 * @method string getDns2()
 * @method $this setZhProvince($zhProvince)
 * @method string getZhProvince()
 * @method $this setZhAddress($zhAddress)
 * @method string getZhAddress()
 * @method $this setCity($city)
 * @method string getCity()
 * @method $this setRegistrantOrganization($registrantOrganization)
 * @method string getRegistrantOrganization()
 * @method $this setRegistrantName($registrantName)
 * @method string getRegistrantName()
 * @method $this setProvince($province)
 * @method string getProvince()
 * @method $this setAddress($address)
 * @method string getAddress()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setPostalCode($postalCode)
 * @method string getPostalCode()
 * @method $this setTelArea($telArea)
 * @method string getTelArea()
 * @method $this setTelephone($telephone)
 * @method string getTelephone()
 * @method $this setTelExt($telExt)
 * @method string getTelExt()
 * @method $this setRegistrantType($registrantType)
 * @method string getRegistrantType()
 * @method $this setTrademarkDomainActivation($trademarkDomainActivation)
 * @method bool getTrademarkDomainActivation()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setUseCoupon($useCoupon)
 * @method bool getUseCoupon()
 * @method $this setPromotionNo($promotionNo)
 * @method string getPromotionNo()
 * @method $this setUsePromotion($usePromotion)
 * @method bool getUsePromotion()
 */
class SaveSingleTaskForCreatingOrderActivate extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class QueryDSRecord extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setDomainName($domainName)
 * @method array getDomainName()
 */
class ConfirmTransferInEmail extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartDate($startDate)
 * @method int getStartDate()
 * @method $this setEndDate($endDate)
 * @method int getEndDate()
 */
class QueryChangeLogList extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCurrentExpirationDate($currentExpirationDate)
 * @method int getCurrentExpirationDate()
 * @method $this setCouponNo($couponNo)
 * @method string getCouponNo()
 * @method $this setUseCoupon($useCoupon)
 * @method bool getUseCoupon()
 * @method $this setPromotionNo($promotionNo)
 * @method string getPromotionNo()
 * @method $this setUsePromotion($usePromotion)
 * @method bool getUsePromotion()
 */
class SaveSingleTaskForCreatingOrderRedeem extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class QueryTransferInByInstanceId extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStatus($status)
 * @method bool getStatus()
 */
class SaveSingleTaskForUpdateProhibitionLock extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegistrantProfileID($registrantProfileID)
 * @method int getRegistrantProfileID()
 * @method $this setIdentityCredential($identityCredential)
 * @method string getIdentityCredential()
 * @method $this setIdentityCredentialNo($identityCredentialNo)
 * @method string getIdentityCredentialNo()
 * @method $this setIdentityCredentialType($identityCredentialType)
 * @method string getIdentityCredentialType()
 */
class RegistrantProfileRealNameVerification extends Request
{
}/**
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class BatchFuzzyMatchDomainSensitiveWord extends Request
{
}/**
 * @method $this setAddress($address)
 * @method string getAddress()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setCity($city)
 * @method string getCity()
 * @method $this setRegistrantOrganization($registrantOrganization)
 * @method string getRegistrantOrganization()
 * @method $this setRegistrantName($registrantName)
 * @method string getRegistrantName()
 * @method $this setProvince($province)
 * @method string getProvince()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setPostalCode($postalCode)
 * @method string getPostalCode()
 * @method $this setTelArea($telArea)
 * @method string getTelArea()
 * @method $this setTelephone($telephone)
 * @method string getTelephone()
 * @method $this setTelExt($telExt)
 * @method string getTelExt()
 * @method $this setZhCity($zhCity)
 * @method string getZhCity()
 * @method $this setZhRegistrantOrganization($zhRegistrantOrganization)
 * @method string getZhRegistrantOrganization()
 * @method $this setZhRegistrantName($zhRegistrantName)
 * @method string getZhRegistrantName()
 * @method $this setZhProvince($zhProvince)
 * @method string getZhProvince()
 * @method $this setZhAddress($zhAddress)
 * @method string getZhAddress()
 * @method $this setContactType($contactType)
 * @method string getContactType()
 * @method $this setRegistrantType($registrantType)
 * @method string getRegistrantType()
 * @method $this setTransferOutProhibited($transferOutProhibited)
 * @method bool getTransferOutProhibited()
 * @method $this setDomainName($domainName)
 * @method array getDomainName()
 */
class SaveBatchTaskForUpdatingContactInfoByNewContact extends Request
{
}/**
 * @method $this setFeePeriod($feePeriod)
 * @method int getFeePeriod()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class CheckProcessingServerLockApply extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setSubmissionStartDate($submissionStartDate)
 * @method int getSubmissionStartDate()
 * @method $this setSubmissionEndDate($submissionEndDate)
 * @method int getSubmissionEndDate()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setSimpleTransferInStatus($simpleTransferInStatus)
 * @method string getSimpleTransferInStatus()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryTransferInList extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setKeyTag($keyTag)
 * @method int getKeyTag()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setAlgorithm($algorithm)
 * @method int getAlgorithm()
 * @method $this setDigestType($digestType)
 * @method int getDigestType()
 * @method $this setDigest($digest)
 * @method string getDigest()
 */
class SaveSingleTaskForModifyingDSRecord extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegistrantProfileID($registrantProfileID)
 * @method int getRegistrantProfileID()
 */
class QueryFailReasonForRegistrantProfileRealNameVerification extends Request
{
}/**
 * @method $this setToken($token)
 * @method string getToken()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class TransferInCheckMailToken extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setContactType($contactType)
 * @method string getContactType()
 */
class QueryContactInfo extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class SaveSingleTaskForCancelingTransferOut extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDnsName($dnsName)
 * @method string getDnsName()
 * @method $this setIp($ip)
 * @method array getIp()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class SaveSingleTaskForModifyingDnsHost extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainGroupName($domainGroupName)
 * @method string getDomainGroupName()
 * @method $this setDomainGroupId($domainGroupId)
 * @method int getDomainGroupId()
 */
class SaveDomainGroup extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setToken($token)
 * @method string getToken()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class VerifyEmail extends Request
{
}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setKeyTag($keyTag)
 * @method int getKeyTag()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class SaveSingleTaskForDeletingDSRecord extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDnsName($dnsName)
 * @method string getDnsName()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class SaveSingleTaskForDeletingDnsHost extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setAddress($address)
 * @method string getAddress()
 */
class SaveSingleTaskForAssociatingEns extends Request
{
}
