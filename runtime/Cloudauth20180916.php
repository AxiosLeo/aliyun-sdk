<?php

namespace aliyun\sdk\services\Cloudauth20180916;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180916
 *
 * @package aliyun\sdk\services\Cloudauth20180916
 * @method SubmitVerification SubmitVerification()
 * @method DetectFaceAttributes DetectFaceAttributes()
 * @method ModifyDeviceInfo ModifyDeviceInfo()
 * @method DescribeVerifySDK DescribeVerifySDK()
 * @method DescribeDeviceInfo DescribeDeviceInfo()
 * @method GetMaterials GetMaterials()
 * @method CompareFaces CompareFaces()
 * @method CreateVerifySDK CreateVerifySDK()
 * @method GetStatus GetStatus()
 * @method SubmitMaterials SubmitMaterials()
 * @method CreateAuthKey CreateAuthKey()
 * @method GetVerifyToken GetVerifyToken()
 */
class V20180916
{
}

/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBiz($biz)
 * @method string getBiz()
 * @method $this setTicketId($ticketId)
 * @method string getTicketId()
 * @method $this setMaterial($material)
 * @method array getMaterial()
 */
class SubmitVerification extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMaterialValue($materialValue)
 * @method string getMaterialValue()
 * @method $this setDontSaveDB($dontSaveDB)
 * @method bool getDontSaveDB()
 * @method $this setClientTag($clientTag)
 * @method string getClientTag()
 * @method $this setMaxNumPhotosPerCategory($maxNumPhotosPerCategory)
 * @method int getMaxNumPhotosPerCategory()
 * @method $this setRetAttributes($retAttributes)
 * @method string getRetAttributes()
 * @method $this setMaxFaceNum($maxFaceNum)
 * @method int getMaxFaceNum()
 */
class DetectFaceAttributes extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setUserDeviceId($userDeviceId)
 * @method string getUserDeviceId()
 * @method $this setBizType($bizType)
 * @method string getBizType()
 * @method $this setDuration($duration)
 * @method string getDuration()
 * @method $this setExpiredDay($expiredDay)
 * @method string getExpiredDay()
 */
class ModifyDeviceInfo extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class DescribeVerifySDK extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTotalCount($totalCount)
 * @method int getTotalCount()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setBizType($bizType)
 * @method string getBizType()
 * @method $this setUserDeviceId($userDeviceId)
 * @method string getUserDeviceId()
 * @method $this setExpiredStartDay($expiredStartDay)
 * @method string getExpiredStartDay()
 * @method $this setExpiredEndDay($expiredEndDay)
 * @method string getExpiredEndDay()
 */
class DescribeDeviceInfo extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBiz($biz)
 * @method string getBiz()
 * @method $this setTicketId($ticketId)
 * @method string getTicketId()
 */
class GetMaterials extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTargetImageType($targetImageType)
 * @method string getTargetImageType()
 * @method $this setSourceImageType($sourceImageType)
 * @method string getSourceImageType()
 * @method $this setSourceImageValue($sourceImageValue)
 * @method string getSourceImageValue()
 * @method $this setTargetImageValue($targetImageValue)
 * @method string getTargetImageValue()
 */
class CompareFaces extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setAppUrl($appUrl)
 * @method string getAppUrl()
 * @method $this setPlatform($platform)
 * @method string getPlatform()
 */
class CreateVerifySDK extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBiz($biz)
 * @method string getBiz()
 * @method $this setTicketId($ticketId)
 * @method string getTicketId()
 */
class GetStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVerifyToken($verifyToken)
 * @method string getVerifyToken()
 * @method $this setMaterial($material)
 * @method array getMaterial()
 */
class SubmitMaterials extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setBizType($bizType)
 * @method string getBizType()
 * @method $this setUserDeviceId($userDeviceId)
 * @method string getUserDeviceId()
 * @method $this setTest($test)
 * @method bool getTest()
 * @method $this setAuthYears($authYears)
 * @method int getAuthYears()
 */
class CreateAuthKey extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBiz($biz)
 * @method string getBiz()
 * @method $this setTicketId($ticketId)
 * @method string getTicketId()
 * @method $this setBinding($binding)
 * @method array getBinding()
 * @method $this setUserData($userData)
 * @method array getUserData()
 * @method $this setVerifyConfigs($verifyConfigs)
 * @method array getVerifyConfigs()
 */
class GetVerifyToken extends Request
{

}