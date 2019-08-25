<?php

namespace aliyun\sdk\services\CSB20171118;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20171118
 *
 * @package aliyun\sdk\services\CSB20171118
 * @method DeleteServiceList DeleteServiceList()
 * @method FindProjectsNameList FindProjectsNameList()
 * @method FindCredentialsList FindCredentialsList()
 * @method FindOrderedList FindOrderedList()
 * @method CreateCredentials CreateCredentials()
 * @method GetProject GetProject()
 * @method CreateOrder CreateOrder()
 * @method DeleteService DeleteService()
 * @method DeleteCredentialsList DeleteCredentialsList()
 * @method CreateService CreateService()
 * @method ReplaceCredential ReplaceCredential()
 * @method UpdateOrder UpdateOrder()
 * @method PublishCasService PublishCasService()
 * @method FindServiceList FindServiceList()
 * @method DeleteOrderList DeleteOrderList()
 * @method CommitSuccessedServices CommitSuccessedServices()
 * @method DeleteCasService DeleteCasService()
 * @method GetOrder GetOrder()
 * @method UpdateService UpdateService()
 * @method CreateProject CreateProject()
 * @method DeleteProject DeleteProject()
 * @method FindOrderableList FindOrderableList()
 * @method CheckServiceExist CheckServiceExist()
 * @method RenewCredentials RenewCredentials()
 * @method DeleteProjectList DeleteProjectList()
 * @method FindApprovalOrderList FindApprovalOrderList()
 * @method UpdateProject UpdateProject()
 * @method GetInstance GetInstance()
 * @method FindServiceStatisticalData FindServiceStatisticalData()
 * @method UpdateServiceQPS UpdateServiceQPS()
 * @method UpdateProjectListStatus UpdateProjectListStatus()
 * @method UpdateServiceListStatus UpdateServiceListStatus()
 * @method UpdateOrderList UpdateOrderList()
 * @method GetService GetService()
 * @method FindInstanceList FindInstanceList()
 * @method FindProjectList FindProjectList()
 * @method PublishUnionCasService PublishUnionCasService()
 * @method FindApproveServiceList FindApproveServiceList()
 * @method DeleteUnionCasService DeleteUnionCasService()
 * @method ApproveOrderList ApproveOrderList()
 */
class V20171118
{
}

/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setData($data)
 * @method string getData()
 */
class DeleteServiceList extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setOperationFlag($operationFlag)
 * @method string getOperationFlag()
 */
class FindProjectsNameList extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 */
class FindCredentialsList extends Request
{
}/**
 * @method $this setShowDelOrder($showDelOrder)
 * @method bool getShowDelOrder()
 * @method $this setAlias($alias)
 * @method string getAlias()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 */
class FindOrderedList extends Request
{
}/**
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setData($data)
 * @method string getData()
 */
class CreateCredentials extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class GetProject extends Request
{
}/**
 * @method $this setData($data)
 * @method string getData()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class CreateOrder extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 */
class DeleteService extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIgnoreDauth($ignoreDauth)
 * @method bool getIgnoreDauth()
 * @method $this setForce($force)
 * @method bool getForce()
 * @method $this setData($data)
 * @method string getData()
 */
class DeleteCredentialsList extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 */
class CreateService extends Request
{
}/**
 * @method $this setCredentialId($credentialId)
 * @method int getCredentialId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ReplaceCredential extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setData($data)
 * @method string getData()
 */
class UpdateOrder extends Request
{
}/**
 * @method $this setCasCsbName($casCsbName)
 * @method string getCasCsbName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setData($data)
 * @method string getData()
 */
class PublishCasService extends Request
{
}/**
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setAlias($alias)
 * @method string getAlias()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setShowDelService($showDelService)
 * @method bool getShowDelService()
 * @method $this setCasShowType($casShowType)
 * @method int getCasShowType()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class FindServiceList extends Request
{
}/**
 * @method $this setData($data)
 * @method string getData()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DeleteOrderList extends Request
{
}/**
 * @method $this setCsbName($csbName)
 * @method string getCsbName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServices($services)
 * @method string getServices()
 */
class CommitSuccessedServices extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasServiceId($casServiceId)
 * @method string getCasServiceId()
 * @method $this setCasCsbName($casCsbName)
 * @method string getCasCsbName()
 * @method $this setSrcUserId($srcUserId)
 * @method string getSrcUserId()
 * @method $this setLeafOnly($leafOnly)
 * @method bool getLeafOnly()
 */
class DeleteCasService extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrderId($orderId)
 * @method int getOrderId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 */
class GetOrder extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setData($data)
 * @method string getData()
 */
class UpdateService extends Request
{
}/**
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class CreateProject extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setProjectId($projectId)
 * @method int getProjectId()
 */
class DeleteProject extends Request
{
}/**
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setAlias($alias)
 * @method string getAlias()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class FindOrderableList extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 */
class CheckServiceExist extends Request
{
}/**
 * @method $this setCredentialId($credentialId)
 * @method int getCredentialId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class RenewCredentials extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setData($data)
 * @method string getData()
 */
class DeleteProjectList extends Request
{
}/**
 * @method $this setAlias($alias)
 * @method string getAlias()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setOnlyPending($onlyPending)
 * @method bool getOnlyPending()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 */
class FindApprovalOrderList extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setData($data)
 * @method string getData()
 */
class UpdateProject extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 */
class GetInstance extends Request
{
}/**
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class FindServiceStatisticalData extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 * @method $this setQps($qps)
 * @method string getQps()
 */
class UpdateServiceQPS extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setData($data)
 * @method string getData()
 */
class UpdateProjectListStatus extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setData($data)
 * @method string getData()
 */
class UpdateServiceListStatus extends Request
{
}/**
 * @method $this setData($data)
 * @method string getData()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class UpdateOrderList extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 */
class GetService extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setSearchTxt($searchTxt)
 * @method string getSearchTxt()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 */
class FindInstanceList extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class FindProjectList extends Request
{
}/**
 * @method $this setCasCsbName($casCsbName)
 * @method string getCasCsbName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setData($data)
 * @method string getData()
 */
class PublishUnionCasService extends Request
{
}/**
 * @method $this setShowDelService($showDelService)
 * @method bool getShowDelService()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setAlias($alias)
 * @method string getAlias()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setCsbId($csbId)
 * @method int getCsbId()
 * @method $this setApproveLevel($approveLevel)
 * @method string getApproveLevel()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class FindApproveServiceList extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasServiceId($casServiceId)
 * @method string getCasServiceId()
 * @method $this setCasCsbName($casCsbName)
 * @method string getCasCsbName()
 * @method $this setSrcUserId($srcUserId)
 * @method string getSrcUserId()
 * @method $this setLeafOnly($leafOnly)
 * @method bool getLeafOnly()
 */
class DeleteUnionCasService extends Request
{
}/**
 * @method $this setData($data)
 * @method string getData()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ApproveOrderList extends Request
{
}
