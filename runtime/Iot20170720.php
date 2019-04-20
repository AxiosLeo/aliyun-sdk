<?php

namespace aliyun\sdk\services\Iot20170720;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170720
 *
 * @package aliyun\sdk\services\Iot20170720
 * @method QueryFirmwareByName QueryFirmwareByName()
 * @method CreateLoraApp CreateLoraApp()
 * @method QueryLoraDeviceInfoList QueryLoraDeviceInfoList()
 * @method getLoraNodeInfoList getLoraNodeInfoList()
 * @method SynchronizeGateway SynchronizeGateway()
 * @method QueryProductName QueryProductName()
 * @method QueryLoraNodeInfoList QueryLoraNodeInfoList()
 * @method QueryLoraProductName QueryLoraProductName()
 * @method SendMacCommand SendMacCommand()
 * @method QueryOtaJobByDevices QueryOtaJobByDevices()
 * @method QueryFirmwareByUid QueryFirmwareByUid()
 * @method QueryFirmwareByPk QueryFirmwareByPk()
 * @method QueryDeviceUpgradeInfo QueryDeviceUpgradeInfo()
 * @method UpgradeSingleDevice UpgradeSingleDevice()
 * @method VerifyFirmware VerifyFirmware()
 * @method QueryDeviceByPkAndVersion QueryDeviceByPkAndVersion()
 * @method InitNmsRouteMap InitNmsRouteMap()
 * @method CleanTopic CleanTopic()
 * @method InsertCommand InsertCommand()
 * @method SyncGateway SyncGateway()
 * @method QueryFirmwareVerifyInfo QueryFirmwareVerifyInfo()
 * @method QuerySingleDevice QuerySingleDevice()
 * @method DeleteRouteMap DeleteRouteMap()
 * @method DeleteRouteMapResponse DeleteRouteMapResponse()
 * @method ResetDeviceUpgrade ResetDeviceUpgrade()
 * @method QueryAmsProductMapping QueryAmsProductMapping()
 * @method CreateOtaaDevice CreateOtaaDevice()
 * @method QueryOtaaDevice QueryOtaaDevice()
 * @method SendEventData SendEventData()
 * @method QueryStrategyByFirName QueryStrategyByFirName()
 * @method QueryVersionsByPk QueryVersionsByPk()
 * @method FinishVerifyTask FinishVerifyTask()
 * @method QueryProductNameAndAllCount QueryProductNameAndAllCount()
 * @method DeviceUpgradeInfo DeviceUpgradeInfo()
 * @method DeleteLoraDevice DeleteLoraDevice()
 * @method DeleteFirmware DeleteFirmware()
 * @method QueryFirmwareVersionById QueryFirmwareVersionById()
 * @method CreateFirmware CreateFirmware()
 * @method RegisterLoraDevice RegisterLoraDevice()
 * @method DeviceUpgradeCount DeviceUpgradeCount()
 * @method InitNmsRouteMapResponse InitNmsRouteMapResponse()
 * @method UpdateFirmware UpdateFirmware()
 * @method QueryFirmwareById QueryFirmwareById()
 * @method SendMessage SendMessage()
 * @method QueryDeviceInfo QueryDeviceInfo()
 * @method DeleteDeviceList DeleteDeviceList()
 * @method BatchDeviceUpgrade BatchDeviceUpgrade()
 * @method ReUpgradeDevices ReUpgradeDevices()
 */
class V20170720
{
}

/**
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class QueryFirmwareByName extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class CreateLoraApp extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryLoraDeviceInfoList extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class getLoraNodeInfoList extends Request
{

}/**
 * @method $this setJsonRouteMap($jsonRouteMap)
 * @method string getJsonRouteMap()
 * @method $this setJsonTxpkDTO($jsonTxpkDTO)
 * @method string getJsonTxpkDTO()
 */
class SynchronizeGateway extends Request
{

}/**
 */
class QueryProductName extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryLoraNodeInfoList extends Request
{

}/**
 */
class QueryLoraProductName extends Request
{

}/**
 * @method $this setJsonCommands($jsonCommands)
 * @method string getJsonCommands()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class SendMacCommand extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class QueryOtaJobByDevices extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setDeleteStatus($deleteStatus)
 * @method int getDeleteStatus()
 */
class QueryFirmwareByUid extends Request
{

}/**
 * @method $this setFirmwareId($firmwareId)
 * @method int getFirmwareId()
 */
class QueryFirmwareByPk extends Request
{

}/**
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setType($type)
 * @method int getType()
 */
class QueryDeviceUpgradeInfo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class UpgradeSingleDevice extends Request
{

}/**
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class VerifyFirmware extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setIndistinctDevName($indistinctDevName)
 * @method string getIndistinctDevName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setFirmwareVersion($firmwareVersion)
 * @method array getFirmwareVersion()
 */
class QueryDeviceByPkAndVersion extends Request
{

}/**
 * @method $this setDevAddr($devAddr)
 * @method string getDevAddr()
 * @method $this setDevEui($devEui)
 * @method string getDevEui()
 * @method $this setGatewayId($gatewayId)
 * @method string getGatewayId()
 * @method $this setGwDeviceName($gwDeviceName)
 * @method string getGwDeviceName()
 * @method $this setGwProductKey($gwProductKey)
 * @method string getGwProductKey()
 * @method $this setNodeTxFreq($nodeTxFreq)
 * @method string getNodeTxFreq()
 * @method $this setNodeMixFlag($nodeMixFlag)
 * @method int getNodeMixFlag()
 * @method $this setGatewayMainFlag($gatewayMainFlag)
 * @method int getGatewayMainFlag()
 */
class InitNmsRouteMap extends Request
{

}/**
 * @method $this setTopic($topic)
 * @method string getTopic()
 * @method $this setExts($exts)
 * @method string getExts()
 * @method $this setSubscriberId($subscriberId)
 * @method string getSubscriberId()
 */
class CleanTopic extends Request
{

}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this settime($time)
 * @method int gettime()
 */
class InsertCommand extends Request
{

}/**
 * @method $this setjsonRouteMap($jsonRouteMap)
 * @method string getjsonRouteMap()
 * @method $this setjsonTxpkDTO($jsonTxpkDTO)
 * @method string getjsonTxpkDTO()
 */
class SyncGateway extends Request
{

}/**
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class QueryFirmwareVerifyInfo extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QuerySingleDevice extends Request
{

}/**
 * @method $this setDevAddr($devAddr)
 * @method string getDevAddr()
 * @method $this setDevEui($devEui)
 * @method string getDevEui()
 * @method $this setGatewayId($gatewayId)
 * @method string getGatewayId()
 */
class DeleteRouteMap extends Request
{

}/**
 * @method $this setDevAddr($devAddr)
 * @method string getDevAddr()
 * @method $this setDevEui($devEui)
 * @method string getDevEui()
 * @method $this setGatewayId($gatewayId)
 * @method string getGatewayId()
 * @method $this setGwDeviceName($gwDeviceName)
 * @method string getGwDeviceName()
 * @method $this setGwProductKey($gwProductKey)
 * @method string getGwProductKey()
 */
class DeleteRouteMapResponse extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class ResetDeviceUpgrade extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryAmsProductMapping extends Request
{

}/**
 * @method $this setPattern($pattern)
 * @method string getPattern()
 * @method $this setDownlinkFreq($downlinkFreq)
 * @method string getDownlinkFreq()
 * @method $this setDeviceNum($deviceNum)
 * @method int getDeviceNum()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setOui($oui)
 * @method string getOui()
 * @method $this setOrgId($orgId)
 * @method string getOrgId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setNodeFreqType($nodeFreqType)
 * @method int getNodeFreqType()
 */
class CreateOtaaDevice extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryOtaaDevice extends Request
{

}/**
 * @method $this setJsonCommands($jsonCommands)
 * @method string getJsonCommands()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class SendEventData extends Request
{

}/**
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class QueryStrategyByFirName extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryVersionsByPk extends Request
{

}/**
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class FinishVerifyTask extends Request
{

}/**
 */
class QueryProductNameAndAllCount extends Request
{

}/**
 * @method $this setFirmwareId($firmwareId)
 * @method int getFirmwareId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setJobResult($jobResult)
 * @method int getJobResult()
 */
class DeviceUpgradeInfo extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class DeleteLoraDevice extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class DeleteFirmware extends Request
{

}/**
 * @method $this setFirmwareId($firmwareId)
 * @method int getFirmwareId()
 */
class QueryFirmwareVersionById extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 * @method $this setDestVersion($destVersion)
 * @method string getDestVersion()
 * @method $this setFirmwareUrl($firmwareUrl)
 * @method string getFirmwareUrl()
 * @method $this setFirmwareSign($firmwareSign)
 * @method string getFirmwareSign()
 * @method $this setSignMethod($signMethod)
 * @method string getSignMethod()
 * @method $this setFirmwareSize($firmwareSize)
 * @method int getFirmwareSize()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setFirmwareDesc($firmwareDesc)
 * @method string getFirmwareDesc()
 */
class CreateFirmware extends Request
{

}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setNetId($netId)
 * @method string getNetId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceEui($deviceEui)
 * @method string getDeviceEui()
 * @method $this setAppEui($appEui)
 * @method string getAppEui()
 * @method $this setAppKey($appKey)
 * @method string getAppKey()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setTenantId($tenantId)
 * @method int getTenantId()
 * @method $this setDownlinkFreq($downlinkFreq)
 * @method string getDownlinkFreq()
 * @method $this setModu($modu)
 * @method string getModu()
 * @method $this setNodeFreqType($nodeFreqType)
 * @method string getNodeFreqType()
 */
class RegisterLoraDevice extends Request
{

}/**
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class DeviceUpgradeCount extends Request
{

}/**
 * @method $this setDevAddr($devAddr)
 * @method string getDevAddr()
 * @method $this setDevEui($devEui)
 * @method string getDevEui()
 * @method $this setGatewayId($gatewayId)
 * @method string getGatewayId()
 * @method $this setGwDeviceName($gwDeviceName)
 * @method string getGwDeviceName()
 * @method $this setGwProductKey($gwProductKey)
 * @method string getGwProductKey()
 * @method $this setNodeTxFreq($nodeTxFreq)
 * @method string getNodeTxFreq()
 * @method $this setNodeMixFlag($nodeMixFlag)
 * @method int getNodeMixFlag()
 * @method $this setGatewayMainFlag($gatewayMainFlag)
 * @method int getGatewayMainFlag()
 */
class InitNmsRouteMapResponse extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFirmwareId($firmwareId)
 * @method int getFirmwareId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 * @method $this setDestVersion($destVersion)
 * @method string getDestVersion()
 * @method $this setFirmwareUrl($firmwareUrl)
 * @method string getFirmwareUrl()
 * @method $this setFirmwareMd5($firmwareMd5)
 * @method string getFirmwareMd5()
 * @method $this setFirmwareSize($firmwareSize)
 * @method int getFirmwareSize()
 * @method $this setFirmwareDesc($firmwareDesc)
 * @method string getFirmwareDesc()
 * @method $this setVerifyState($verifyState)
 * @method int getVerifyState()
 */
class UpdateFirmware extends Request
{

}/**
 * @method $this setFirmwareId($firmwareId)
 * @method int getFirmwareId()
 */
class QueryFirmwareById extends Request
{

}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCommandContent($commandContent)
 * @method string getCommandContent()
 * @method $this setFport($fport)
 * @method int getFport()
 */
class SendMessage extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDeviceInfo extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class DeleteDeviceList extends Request
{

}/**
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setUpgradeType($upgradeType)
 * @method string getUpgradeType()
 * @method $this setStrategyType($strategyType)
 * @method string getStrategyType()
 * @method $this setDestVersion($destVersion)
 * @method string getDestVersion()
 * @method $this setLocations($locations)
 * @method string getLocations()
 * @method $this setSrcVersion($srcVersion)
 * @method array getSrcVersion()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class BatchDeviceUpgrade extends Request
{

}/**
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class ReUpgradeDevices extends Request
{

}