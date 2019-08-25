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
 * @method AddLabelForBid AddLabelForBid()
 * @method AddLabel AddLabel()
 * @method DeleteLabel DeleteLabel()
 * @method QueryBidUserCertifiedInfo QueryBidUserCertifiedInfo()
 * @method DeleteLabelForBid DeleteLabelForBid()
 * @method AddIdentityCertifiedForBidUser AddIdentityCertifiedForBidUser()
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
