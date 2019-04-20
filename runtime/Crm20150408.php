<?php

namespace aliyun\sdk\services\Crm20150408;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150408
 *
 * @package aliyun\sdk\services\Crm20150408
 * @method QueryCustomerLabel QueryCustomerLabel()
 * @method BatchGetAliyunIdByAliyunPk BatchGetAliyunIdByAliyunPk()
 * @method CheckLabel CheckLabel()
 * @method AddIdentityCertifiedLabel AddIdentityCertifiedLabel()
 * @method AddLabelForBid AddLabelForBid()
 * @method ModifyPhoneForBidUser ModifyPhoneForBidUser()
 * @method QueryBidUserInfo QueryBidUserInfo()
 * @method AddLabel AddLabel()
 * @method FindServiceManager FindServiceManager()
 * @method DeleteLabel DeleteLabel()
 * @method QueryBidUserCertifiedInfo QueryBidUserCertifiedInfo()
 * @method DeleteLabelForBid DeleteLabelForBid()
 * @method RemoveIdentityCertifiedLabel RemoveIdentityCertifiedLabel()
 * @method AddIdentityCertifiedForBidUser AddIdentityCertifiedForBidUser()
 * @method AddOrUpdateBidUserInfo AddOrUpdateBidUserInfo()
 * @method GetAliyunPkByAliyunId GetAliyunPkByAliyunId()
 * @method RemoveIdentityCertifiedForBidUser RemoveIdentityCertifiedForBidUser()
 * @method CheckLabelForBid CheckLabelForBid()
 */
class V20150408
{
}

/**
 * @method $this setLabelSeries($labelSeries)
 * @method string getLabelSeries()
 */
class QueryCustomerLabel extends Request
{

}/**
 * @method $this setPkList($pkList)
 * @method array getPkList()
 */
class BatchGetAliyunIdByAliyunPk extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setLabelName($labelName)
 * @method string getLabelName()
 * @method $this setLabelSeries($labelSeries)
 * @method string getLabelSeries()
 */
class CheckLabel extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 */
class AddIdentityCertifiedLabel extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setLabel($label)
 * @method string getLabel()
 * @method $this setLabelSeries($labelSeries)
 * @method string getLabelSeries()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class AddLabelForBid extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setBidType($bidType)
 * @method string getBidType()
 * @method $this setphone($phone)
 * @method string getphone()
 */
class ModifyPhoneForBidUser extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 */
class QueryBidUserInfo extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setLabelName($labelName)
 * @method string getLabelName()
 * @method $this setLabelSeries($labelSeries)
 * @method string getLabelSeries()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setOrganization($organization)
 * @method string getOrganization()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class AddLabel extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 */
class FindServiceManager extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setLabelName($labelName)
 * @method string getLabelName()
 * @method $this setLabelSeries($labelSeries)
 * @method string getLabelSeries()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setOrganization($organization)
 * @method string getOrganization()
 */
class DeleteLabel extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setBidType($bidType)
 * @method string getBidType()
 */
class QueryBidUserCertifiedInfo extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setLabel($label)
 * @method string getLabel()
 * @method $this setLabelSeries($labelSeries)
 * @method string getLabelSeries()
 */
class DeleteLabelForBid extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 */
class RemoveIdentityCertifiedLabel extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setBidType($bidType)
 * @method string getBidType()
 * @method $this setPhone($phone)
 * @method string getPhone()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLicenseType($licenseType)
 * @method string getLicenseType()
 * @method $this setLicenseNumber($licenseNumber)
 * @method string getLicenseNumber()
 * @method $this setIsEnterprise($isEnterprise)
 * @method bool getIsEnterprise()
 */
class AddIdentityCertifiedForBidUser extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setemail($email)
 * @method string getemail()
 * @method $this setphone($phone)
 * @method string getphone()
 * @method $this settrueName($trueName)
 * @method string gettrueName()
 * @method $this setcertType($certType)
 * @method string getcertType()
 * @method $this setcertNumber($certNumber)
 * @method string getcertNumber()
 */
class AddOrUpdateBidUserInfo extends Request
{

}/**
 * @method $this setAliyunId($aliyunId)
 * @method string getAliyunId()
 */
class GetAliyunPkByAliyunId extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setBidType($bidType)
 * @method string getBidType()
 */
class RemoveIdentityCertifiedForBidUser extends Request
{

}/**
 * @method $this setPK($pK)
 * @method string getPK()
 * @method $this setLabel($label)
 * @method string getLabel()
 * @method $this setLabelSeries($labelSeries)
 * @method string getLabelSeries()
 */
class CheckLabelForBid extends Request
{

}