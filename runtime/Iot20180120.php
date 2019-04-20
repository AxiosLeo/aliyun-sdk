<?php

namespace aliyun\sdk\services\Iot20180120;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180120
 *
 * @package aliyun\sdk\services\Iot20180120
 * @method DeleteTask DeleteTask()
 * @method QueryFirmwareByName QueryFirmwareByName()
 * @method QueryProductListByGroup QueryProductListByGroup()
 * @method CreateDataSource CreateDataSource()
 * @method SetEdgeInstanceDeviceDriver SetEdgeInstanceDeviceDriver()
 * @method OpenLinkFaceService OpenLinkFaceService()
 * @method QueryMobileAppsList QueryMobileAppsList()
 * @method CreateProductInGroup CreateProductInGroup()
 * @method QueryAppAuthorization QueryAppAuthorization()
 * @method SaveDeviceProp SaveDeviceProp()
 * @method QueryAuthorizedAppList QueryAuthorizedAppList()
 * @method CreateAppEdgeDeployment CreateAppEdgeDeployment()
 * @method QueryDriver QueryDriver()
 * @method UpdateGroupMessageRoute UpdateGroupMessageRoute()
 * @method ListAppDataModelDeclare ListAppDataModelDeclare()
 * @method QueryServicesList QueryServicesList()
 * @method AddEventRecordPlanDevice AddEventRecordPlanDevice()
 * @method OpenSetDeviceProperty OpenSetDeviceProperty()
 * @method QueryRecordPlanDetail QueryRecordPlanDetail()
 * @method DeleteAutomationRule DeleteAutomationRule()
 * @method GetTaskStatus GetTaskStatus()
 * @method CreateGroupMessageRoute CreateGroupMessageRoute()
 * @method GetNamespacedPodEvent GetNamespacedPodEvent()
 * @method UpdateRule UpdateRule()
 * @method CreateEdgeClusterInstance CreateEdgeClusterInstance()
 * @method BatchGetDriverTemplateStatus BatchGetDriverTemplateStatus()
 * @method PostDeviceProperties PostDeviceProperties()
 * @method GetDeviceUserInfoPop GetDeviceUserInfoPop()
 * @method DeleteDeviceProp DeleteDeviceProp()
 * @method BatchGetDriverTemplateInfo BatchGetDriverTemplateInfo()
 * @method QueryDeviceEventRecord QueryDeviceEventRecord()
 * @method ValidateSqlStatement ValidateSqlStatement()
 * @method ListProduct ListProduct()
 * @method QueryDeviceDesiredProperty QueryDeviceDesiredProperty()
 * @method GetEdgeNode GetEdgeNode()
 * @method BatchRegisterDeviceWithApplyIdPop BatchRegisterDeviceWithApplyIdPop()
 * @method OpenQueryDevicePropertyData OpenQueryDevicePropertyData()
 * @method GetProductMeta GetProductMeta()
 * @method UpdateDeviceShadow UpdateDeviceShadow()
 * @method QueryDeviceGroupByDevice QueryDeviceGroupByDevice()
 * @method UpdateProduct UpdateProduct()
 * @method UpdateEdgeInstanceFunction UpdateEdgeInstanceFunction()
 * @method ListDeployDetail ListDeployDetail()
 * @method ListConfigVersion ListConfigVersion()
 * @method UnzipAndPushScene UnzipAndPushScene()
 * @method BindAppDomain BindAppDomain()
 * @method DeleteEdgeCluster DeleteEdgeCluster()
 * @method BindRoleToEdgeInstance BindRoleToEdgeInstance()
 * @method ListProductConsole ListProductConsole()
 * @method QueryEventRecordPlanByDevice QueryEventRecordPlanByDevice()
 * @method AcceptTransfer AcceptTransfer()
 * @method QuerySubDeviceListPop QuerySubDeviceListPop()
 * @method QueryAppUnifyEvent QueryAppUnifyEvent()
 * @method QueryDeviceBatchList QueryDeviceBatchList()
 * @method QueryProductAbilityListPop QueryProductAbilityListPop()
 * @method RefreshDataSource RefreshDataSource()
 * @method ResetThing ResetThing()
 * @method QueryApiServices QueryApiServices()
 * @method QueryModelConfig QueryModelConfig()
 * @method DeleteAuthorizedPhoneNum DeleteAuthorizedPhoneNum()
 * @method GetOfficialDriver GetOfficialDriver()
 * @method QueryDevicePageForBim QueryDevicePageForBim()
 * @method OpenBatchRegisterDeviceWithNames OpenBatchRegisterDeviceWithNames()
 * @method AddThingConfig AddThingConfig()
 * @method GetTask GetTask()
 * @method AddProductTag AddProductTag()
 * @method DeleteGroup DeleteGroup()
 * @method CreateEdgeInstanceDeployment CreateEdgeInstanceDeployment()
 * @method CancelReleaseProduct CancelReleaseProduct()
 * @method QueryDeviceSession QueryDeviceSession()
 * @method ListServiceModelDebugLog ListServiceModelDebugLog()
 * @method GenerateScript GenerateScript()
 * @method CreateScriptDraft CreateScriptDraft()
 * @method QueryEdgeInstanceWithGateway QueryEdgeInstanceWithGateway()
 * @method GetAppUploadPath GetAppUploadPath()
 * @method ListGroupMessageRoute ListGroupMessageRoute()
 * @method ListAppDeploymentService ListAppDeploymentService()
 * @method QueryAppOwnerDeviceList QueryAppOwnerDeviceList()
 * @method QueryDebugOnlineLogContent QueryDebugOnlineLogContent()
 * @method CreateBatchDiff CreateBatchDiff()
 * @method SaveUserServeStatus SaveUserServeStatus()
 * @method QueryVirtualDevice QueryVirtualDevice()
 * @method QueryTimeTemplateDetail QueryTimeTemplateDetail()
 * @method BatchGetProductTagListConsole BatchGetProductTagListConsole()
 * @method GetDeviceStatus GetDeviceStatus()
 * @method GetProductList GetProductList()
 * @method SetDevicePropPop SetDevicePropPop()
 * @method LocateDeviceByFingerprint LocateDeviceByFingerprint()
 * @method QueryUnimportedProducts QueryUnimportedProducts()
 * @method GetAppNodes GetAppNodes()
 * @method GeoCheckSetCoordinateStatus GeoCheckSetCoordinateStatus()
 * @method ListPresentCategoryStdAbilityByName ListPresentCategoryStdAbilityByName()
 * @method ImportDemoScene ImportDemoScene()
 * @method DeleteAppInstance DeleteAppInstance()
 * @method CreateAppDataModelDeclare CreateAppDataModelDeclare()
 * @method UpdateRuleAction UpdateRuleAction()
 * @method QueryReceivedAuthProductList QueryReceivedAuthProductList()
 * @method CancelAuthorizedDevices CancelAuthorizedDevices()
 * @method DoDeviceOffline DoDeviceOffline()
 * @method DeleteEdgeInstanceMessageRoute DeleteEdgeInstanceMessageRoute()
 * @method QueryProductProperty QueryProductProperty()
 * @method QueryOtaJobByDevices QueryOtaJobByDevices()
 * @method UpdateGeoProject UpdateGeoProject()
 * @method GetDevicePropPop GetDevicePropPop()
 * @method ApplyBatchCreateDevice ApplyBatchCreateDevice()
 * @method QueryDevicePropertyByProductPage QueryDevicePropertyByProductPage()
 * @method QueryPictureFiles QueryPictureFiles()
 * @method ListAllCategoryConsole ListAllCategoryConsole()
 * @method GetRuleAction GetRuleAction()
 * @method ExpandAppResource ExpandAppResource()
 * @method GetThingTopo GetThingTopo()
 * @method GetNodesAddingTask GetNodesAddingTask()
 * @method ListProductTags ListProductTags()
 * @method QueryFirmwareByUid QueryFirmwareByUid()
 * @method QueryDeviceGroupByFuzzyName QueryDeviceGroupByFuzzyName()
 * @method SetDevicePropertyPop SetDevicePropertyPop()
 * @method DeleteLdpApp DeleteLdpApp()
 * @method BatchGetEdgeInstanceAutomationRuleStatus BatchGetEdgeInstanceAutomationRuleStatus()
 * @method CreateGroup CreateGroup()
 * @method BatchCreateCustomProperty BatchCreateCustomProperty()
 * @method UpdateCloudMonitorSwitch UpdateCloudMonitorSwitch()
 * @method QueryProductAllInfo QueryProductAllInfo()
 * @method WithdrawTask WithdrawTask()
 * @method GetComponentList GetComponentList()
 * @method ListDetailAutomationRuleLog ListDetailAutomationRuleLog()
 * @method QueryDeviceStatisticsPop QueryDeviceStatisticsPop()
 * @method CreateDeployment CreateDeployment()
 * @method UpdateGroupDriverConfig UpdateGroupDriverConfig()
 * @method SaveSqlTaskView SaveSqlTaskView()
 * @method GetRemoteDebugServiceMeta GetRemoteDebugServiceMeta()
 * @method UpdateEventRecordPlanDevice UpdateEventRecordPlanDevice()
 * @method QueryAppDataModelList QueryAppDataModelList()
 * @method DeleteProductTag DeleteProductTag()
 * @method UpdateProductTopic UpdateProductTopic()
 * @method UpdateQueryJob UpdateQueryJob()
 * @method QueryDevicePage QueryDevicePage()
 * @method GetDeviceStatusBiz GetDeviceStatusBiz()
 * @method UpdateAutomationRule UpdateAutomationRule()
 * @method DeleteRecordPlanDevice DeleteRecordPlanDevice()
 * @method CreateAppServiceModelDeclare CreateAppServiceModelDeclare()
 * @method QueryGeoProjectList QueryGeoProjectList()
 * @method UpdateProductStdService UpdateProductStdService()
 * @method QueryProductListByTag QueryProductListByTag()
 * @method GetRegisterAppService GetRegisterAppService()
 * @method DeleteEventRecordPlan DeleteEventRecordPlan()
 * @method UpdateChildDeviceConfig UpdateChildDeviceConfig()
 * @method GetQueryJobListByFolderUID GetQueryJobListByFolderUID()
 * @method QueryDeviceUpgradeInfo QueryDeviceUpgradeInfo()
 * @method UpdateServerCallback UpdateServerCallback()
 * @method UpdateFlowRule UpdateFlowRule()
 * @method QueryTimeTemplate QueryTimeTemplate()
 * @method AuthorizeProduct AuthorizeProduct()
 * @method GetSolutionInstance GetSolutionInstance()
 * @method GetAppProperty GetAppProperty()
 * @method DeleteProduct DeleteProduct()
 * @method ListDriver ListDriver()
 * @method UpgradeSingleDevice UpgradeSingleDevice()
 * @method QueryDevicePropBiz QueryDevicePropBiz()
 * @method QueryRdsRegionsForRule QueryRdsRegionsForRule()
 * @method GetProductAbilityOverviewData GetProductAbilityOverviewData()
 * @method UpdateGroupFunctionConfig UpdateGroupFunctionConfig()
 * @method PreviewTaskSql PreviewTaskSql()
 * @method VerifyFirmware VerifyFirmware()
 * @method EnableThing EnableThing()
 * @method ModifySolutionInstance ModifySolutionInstance()
 * @method GeoBatchSetCoordinate GeoBatchSetCoordinate()
 * @method DebugAbilityPop DebugAbilityPop()
 * @method UpdateDriver UpdateDriver()
 * @method GetOauthUrl GetOauthUrl()
 * @method CreateProduct CreateProduct()
 * @method QueryDeviceLocationByProductPage QueryDeviceLocationByProductPage()
 * @method SetRecordPlan SetRecordPlan()
 * @method QueryEventRecordPlanDetail QueryEventRecordPlanDetail()
 * @method TriggerAutomationRule TriggerAutomationRule()
 * @method GetDeviceStatusPop GetDeviceStatusPop()
 * @method GenerateGISOssUploadUri GenerateGISOssUploadUri()
 * @method GetAppBaseInfo GetAppBaseInfo()
 * @method UpdateEdgeCluster UpdateEdgeCluster()
 * @method CancelQueryJob CancelQueryJob()
 * @method QueryDeviceByPkAndVersion QueryDeviceByPkAndVersion()
 * @method BatchDeleteBlankProductKeyFirmware BatchDeleteBlankProductKeyFirmware()
 * @method CheckAlinkProtocol CheckAlinkProtocol()
 * @method DeleteEventRecordPlanDevice DeleteEventRecordPlanDevice()
 * @method QueryDevicePictureFile QueryDevicePictureFile()
 * @method QueryTransferDeviceList QueryTransferDeviceList()
 * @method QueryMqInstancesForRule QueryMqInstancesForRule()
 * @method ForceSetDeviceProp ForceSetDeviceProp()
 * @method GetAppInstanceInfo GetAppInstanceInfo()
 * @method BatchAddThingTags BatchAddThingTags()
 * @method SetDeviceRecordLifeCycle SetDeviceRecordLifeCycle()
 * @method QueryGeoDeviceLocationTimeline QueryGeoDeviceLocationTimeline()
 * @method QueryServeList QueryServeList()
 * @method QueryAppDeviceAuthorization QueryAppDeviceAuthorization()
 * @method SendEdgeInstanceDriverDebugRequest SendEdgeInstanceDriverDebugRequest()
 * @method QueryConnectionExtensionInfo QueryConnectionExtensionInfo()
 * @method QueryDeviceGroupTagList QueryDeviceGroupTagList()
 * @method BatchRegisterDeviceWithNames BatchRegisterDeviceWithNames()
 * @method QueryDeviceListByFuzzyName QueryDeviceListByFuzzyName()
 * @method GetUserScenes GetUserScenes()
 * @method GeoGetDeviceInfoListFile GeoGetDeviceInfoListFile()
 * @method GetScriptDraftPop GetScriptDraftPop()
 * @method GetProductPropertiesForBim GetProductPropertiesForBim()
 * @method OpenQueryProduct OpenQueryProduct()
 * @method GetNetStatusReport GetNetStatusReport()
 * @method QueryDeviceGroupByName QueryDeviceGroupByName()
 * @method QueryServeById QueryServeById()
 * @method QueryTransferApplyByPage QueryTransferApplyByPage()
 * @method ListColumns ListColumns()
 * @method AddRecordPlanDevice AddRecordPlanDevice()
 * @method UpdateRecordPlanDevice UpdateRecordPlanDevice()
 * @method BatchGetEdgeInstanceAutomationRuleDeviceStatus BatchGetEdgeInstanceAutomationRuleDeviceStatus()
 * @method QueryEdgeInstanceStream QueryEdgeInstanceStream()
 * @method QueryPageByApplyId QueryPageByApplyId()
 * @method UpdateProductBiz UpdateProductBiz()
 * @method AuthorizeDevices AuthorizeDevices()
 * @method OpenEnableThing OpenEnableThing()
 * @method UpdateTask UpdateTask()
 * @method QueryProjectsList QueryProjectsList()
 * @method BindStreamToEdgeInstance BindStreamToEdgeInstance()
 * @method GetQueryJobV2 GetQueryJobV2()
 * @method ListAutomationRule ListAutomationRule()
 * @method GetAppPodSession GetAppPodSession()
 * @method GenerateOssUploadUri GenerateOssUploadUri()
 * @method QueryLiveStreaming QueryLiveStreaming()
 * @method DuplicateGeoProject DuplicateGeoProject()
 * @method GetAppVerifyNodePropertyResultAppConfig GetAppVerifyNodePropertyResultAppConfig()
 * @method QueryThingFunctionSwitchPop QueryThingFunctionSwitchPop()
 * @method QueryProductEvent QueryProductEvent()
 * @method CreateLaUser CreateLaUser()
 * @method QueryDeviceRecordLifeCycle QueryDeviceRecordLifeCycle()
 * @method CreateDriver CreateDriver()
 * @method UpdateSecureUpgradeFlag UpdateSecureUpgradeFlag()
 * @method QueryConfigByConfigIdPop QueryConfigByConfigIdPop()
 * @method RemoveThingTopo RemoveThingTopo()
 * @method DeleteAppDataModelDeclare DeleteAppDataModelDeclare()
 * @method GetOnsInfoList GetOnsInfoList()
 * @method QueryProductListPop QueryProductListPop()
 * @method GetProductListByRelation GetProductListByRelation()
 * @method ExpandAppDeploymentResource ExpandAppDeploymentResource()
 * @method DescribeAppServiceModelVersion DescribeAppServiceModelVersion()
 * @method CreateAppDeployment CreateAppDeployment()
 * @method QueryProductByUserId QueryProductByUserId()
 * @method QueryDeviceGroupByTags QueryDeviceGroupByTags()
 * @method UpdateSaaSAppPublishStatus UpdateSaaSAppPublishStatus()
 * @method ListAvailableProducts ListAvailableProducts()
 * @method CreateOrCancelApiPermissionDeclare CreateOrCancelApiPermissionDeclare()
 * @method GetScriptDraft GetScriptDraft()
 * @method SetTimeTemplate SetTimeTemplate()
 * @method QueryDeviceStatistics QueryDeviceStatistics()
 * @method GetEdgeInstanceVersion GetEdgeInstanceVersion()
 * @method BindFunctionToGroup BindFunctionToGroup()
 * @method RegisterPhoneNumToOa RegisterPhoneNumToOa()
 * @method ListAppDependentService ListAppDependentService()
 * @method GetAppConfigurableNode GetAppConfigurableNode()
 * @method DeleteRule DeleteRule()
 * @method RefreshProductAbilityTableList RefreshProductAbilityTableList()
 * @method CheckDataSourceOutput CheckDataSourceOutput()
 * @method InvokeThingServicePop InvokeThingServicePop()
 * @method BatchRegisterDevice BatchRegisterDevice()
 * @method GenerateScriptPop GenerateScriptPop()
 * @method GetAutomationRule GetAutomationRule()
 * @method ListSupportedCloudProducts ListSupportedCloudProducts()
 * @method DeleteAppServiceDependency DeleteAppServiceDependency()
 * @method CheckTaskSql CheckTaskSql()
 * @method EnableThingPop EnableThingPop()
 * @method QueryLinkFaceLicense QueryLinkFaceLicense()
 * @method QueryMessageInfo QueryMessageInfo()
 * @method ListSummaryAutomationRuleLog ListSummaryAutomationRuleLog()
 * @method QueryDeviceServiceData QueryDeviceServiceData()
 * @method CheckIsUnzipSuccess CheckIsUnzipSuccess()
 * @method DeleteQueryJob DeleteQueryJob()
 * @method UpdateProductPop UpdateProductPop()
 * @method DeleteProductTopic DeleteProductTopic()
 * @method QueryAuthorizeDevicePage QueryAuthorizeDevicePage()
 * @method CancelAuthorizedProduct CancelAuthorizedProduct()
 * @method BindAutomationRuleToEdgeInstance BindAutomationRuleToEdgeInstance()
 * @method BatchRegisterDeviceWithApplyId BatchRegisterDeviceWithApplyId()
 * @method QueryMnsTopicsForRule QueryMnsTopicsForRule()
 * @method GetMultiDeviceStatusForBim GetMultiDeviceStatusForBim()
 * @method InvokeThingService InvokeThingService()
 * @method QueryRecordPlanDevices QueryRecordPlanDevices()
 * @method UpdateGroup UpdateGroup()
 * @method ForceSetDeviceGroupTag ForceSetDeviceGroupTag()
 * @method QueryEdgeNodeList QueryEdgeNodeList()
 * @method CreateProductTopic CreateProductTopic()
 * @method UpdateProductTopicBiz UpdateProductTopicBiz()
 * @method BatchGetDriver BatchGetDriver()
 * @method CancelDiff CancelDiff()
 * @method GetDeviceShadow GetDeviceShadow()
 * @method QueryLdpAppsList QueryLdpAppsList()
 * @method GetProductAbilityTableTree GetProductAbilityTableTree()
 * @method PostDeviceEventsRegularly PostDeviceEventsRegularly()
 * @method GetSchedulerConfig GetSchedulerConfig()
 * @method BindAutomationRuleToGroup BindAutomationRuleToGroup()
 * @method UpdateTaskMeta UpdateTaskMeta()
 * @method QueryEdgeInstanceLatestDeploySnapshot QueryEdgeInstanceLatestDeploySnapshot()
 * @method TriggerCapturePicture TriggerCapturePicture()
 * @method DeleteApp DeleteApp()
 * @method GetRule GetRule()
 * @method GetAppSsoUrl GetAppSsoUrl()
 * @method ApplyBatchCreateDevicePop ApplyBatchCreateDevicePop()
 * @method ListGroupDriver ListGroupDriver()
 * @method CreateFlowRule CreateFlowRule()
 * @method GetDeviceUserInfo GetDeviceUserInfo()
 * @method GetEdgeNodeId2ServerRandom GetEdgeNodeId2ServerRandom()
 * @method SubmitTransferApply SubmitTransferApply()
 * @method ListGroupAutomationRule ListGroupAutomationRule()
 * @method QueryThingConfigPop QueryThingConfigPop()
 * @method QueryFirmwareVerifyInfo QueryFirmwareVerifyInfo()
 * @method QueryDeviceListByDeviceGroup QueryDeviceListByDeviceGroup()
 * @method BatchGetGroupAutomationRuleRelRuleStatus BatchGetGroupAutomationRuleRelRuleStatus()
 * @method EnableThingBiz EnableThingBiz()
 * @method GetAppSecret GetAppSecret()
 * @method QueryEdgeInstance QueryEdgeInstance()
 * @method UpdateProductStdEvent UpdateProductStdEvent()
 * @method OpenRegisterDevice OpenRegisterDevice()
 * @method OpenQueryProductList OpenQueryProductList()
 * @method BatchCreateDeviceWithApplyIdPop BatchCreateDeviceWithApplyIdPop()
 * @method QueryProductService QueryProductService()
 * @method UpdateProductTags UpdateProductTags()
 * @method GetUserBusinessEnabledStatus GetUserBusinessEnabledStatus()
 * @method BatchGetEdgeInstanceStreamStatus BatchGetEdgeInstanceStreamStatus()
 * @method DeleteAppServiceModelDeclare DeleteAppServiceModelDeclare()
 * @method GetEdgeInstanceByName GetEdgeInstanceByName()
 * @method RelateProduct RelateProduct()
 * @method UpdateScriptDraftPop UpdateScriptDraftPop()
 * @method DeleteDataAsset DeleteDataAsset()
 * @method ListGroupStream ListGroupStream()
 * @method QueryAvailableServeList QueryAvailableServeList()
 * @method ReleaseProduct ReleaseProduct()
 * @method DisableAutomationRule DisableAutomationRule()
 * @method ListRule ListRule()
 * @method SubmitNodesAddingTask SubmitNodesAddingTask()
 * @method CreateEdgeInstanceSls CreateEdgeInstanceSls()
 * @method DisableThingPop DisableThingPop()
 * @method GetSystemSourceTableListV2 GetSystemSourceTableListV2()
 * @method UpdateRecordPlan UpdateRecordPlan()
 * @method GetSourceOverviewData GetSourceOverviewData()
 * @method InitializeAppImageRepoPassword InitializeAppImageRepoPassword()
 * @method QueryDeviceListByAuthProduct QueryDeviceListByAuthProduct()
 * @method IsOperable IsOperable()
 * @method OpenBatchRegisterDeviceWithApplyId OpenBatchRegisterDeviceWithApplyId()
 * @method LpPortalAccessService LpPortalAccessService()
 * @method ListProductTag ListProductTag()
 * @method ApplyBatchCreateDeviceWithName ApplyBatchCreateDeviceWithName()
 * @method GetGroup GetGroup()
 * @method CopyBIMScene CopyBIMScene()
 * @method ListGroupProduct ListGroupProduct()
 * @method UnbindDeviceFromGroup UnbindDeviceFromGroup()
 * @method QueryDevicePropertyStatus QueryDevicePropertyStatus()
 * @method CreateCustomPropertyPop CreateCustomPropertyPop()
 * @method DeleteAbilityPop DeleteAbilityPop()
 * @method BatchGetEdgeInstanceAutomationRule BatchGetEdgeInstanceAutomationRule()
 * @method VerifyEdgeNodeId2 VerifyEdgeNodeId2()
 * @method DescribeAppServiceDependency DescribeAppServiceDependency()
 * @method GetDeviceEventsForBim GetDeviceEventsForBim()
 * @method PushThingConfigPop PushThingConfigPop()
 * @method GetEdgeNodeBootstrapScript GetEdgeNodeBootstrapScript()
 * @method ListAppImageRepos ListAppImageRepos()
 * @method GetDeviceStatusForBim GetDeviceStatusForBim()
 * @method DeleteProductTags DeleteProductTags()
 * @method UpdateEventPop UpdateEventPop()
 * @method CreateCustomEventPop CreateCustomEventPop()
 * @method UpgradeApp UpgradeApp()
 * @method QueryEdgeDisplayedTab QueryEdgeDisplayedTab()
 * @method CancelEdgeInstanceDeployment CancelEdgeInstanceDeployment()
 * @method DeleteGroupMessageRoute DeleteGroupMessageRoute()
 * @method ValidateLaUser ValidateLaUser()
 * @method SetDeviceProperty SetDeviceProperty()
 * @method DeleteDeviceFileStore DeleteDeviceFileStore()
 * @method QueryDeviceEventDataPop QueryDeviceEventDataPop()
 * @method SaveScene SaveScene()
 * @method UpdateTaskDetail UpdateTaskDetail()
 * @method SaveImageUpgradeConfigVersion SaveImageUpgradeConfigVersion()
 * @method Pub Pub()
 * @method QueryDeviceBatchInfo QueryDeviceBatchInfo()
 * @method UpdateEvent UpdateEvent()
 * @method GetAppOperatingInfo GetAppOperatingInfo()
 * @method DisableThing DisableThing()
 * @method StartDeviceDebug StartDeviceDebug()
 * @method AuthorizeAppkeyInvoke AuthorizeAppkeyInvoke()
 * @method DeleteDevice DeleteDevice()
 * @method GetHaveRoleStatus GetHaveRoleStatus()
 * @method DeleteAppInstanceData DeleteAppInstanceData()
 * @method UnbindStreamFromGroup UnbindStreamFromGroup()
 * @method BatchGetGroupFunctionStatus BatchGetGroupFunctionStatus()
 * @method UpdateAppImageRepoPassword UpdateAppImageRepoPassword()
 * @method UnbindRoleFromGroup UnbindRoleFromGroup()
 * @method TryToDeleteJobFolderIfNecessarily TryToDeleteJobFolderIfNecessarily()
 * @method GenerateOpcUaUploadUrl GenerateOpcUaUploadUrl()
 * @method DeleteAppKey DeleteAppKey()
 * @method CreateAppAuthorization CreateAppAuthorization()
 * @method BatchRegisterDeviceWithNamesPop BatchRegisterDeviceWithNamesPop()
 * @method QueryDevicePictureLifeCycle QueryDevicePictureLifeCycle()
 * @method ListAppProvideService ListAppProvideService()
 * @method DisableThingBiz DisableThingBiz()
 * @method GetScriptPop GetScriptPop()
 * @method GetAppPodInfo GetAppPodInfo()
 * @method ListCategory ListCategory()
 * @method GetPodContainerLog GetPodContainerLog()
 * @method BindFunctionToEdgeInstance BindFunctionToEdgeInstance()
 * @method DeleteScriptDraftPop DeleteScriptDraftPop()
 * @method GetGroupMessageRoute GetGroupMessageRoute()
 * @method QueryRecord QueryRecord()
 * @method OpenQueryDeviceServiceData OpenQueryDeviceServiceData()
 * @method ListServerCallbacks ListServerCallbacks()
 * @method UpdateAppConfigPublishStatus UpdateAppConfigPublishStatus()
 * @method SetSchedulerConfig SetSchedulerConfig()
 * @method ModifyAppServiceModelDeclare ModifyAppServiceModelDeclare()
 * @method GetDomainNameConfig GetDomainNameConfig()
 * @method ResetGroup ResetGroup()
 * @method SetDeviceDesiredProperty SetDeviceDesiredProperty()
 * @method StopRule StopRule()
 * @method QueryDetailAutomationRuleLog QueryDetailAutomationRuleLog()
 * @method UnbindFunctionFromGroup UnbindFunctionFromGroup()
 * @method QueryDeviceEventDataBiz QueryDeviceEventDataBiz()
 * @method DeleteJobFolder DeleteJobFolder()
 * @method BatchDeleteProductTag BatchDeleteProductTag()
 * @method RegisterDevice RegisterDevice()
 * @method QueryHitsInstanceForRule QueryHitsInstanceForRule()
 * @method GetAppServiceInfo GetAppServiceInfo()
 * @method QueryAppInstanceData QueryAppInstanceData()
 * @method QueryDeviceEventData QueryDeviceEventData()
 * @method SetThingFunctionSwitchStatus SetThingFunctionSwitchStatus()
 * @method BatchGetGroupStreamStatus BatchGetGroupStreamStatus()
 * @method GetQueryJobExecLog GetQueryJobExecLog()
 * @method GetFuncDocsDetail GetFuncDocsDetail()
 * @method GetDriver GetDriver()
 * @method QueryQuickStartSdk QueryQuickStartSdk()
 * @method BindStreamToGroup BindStreamToGroup()
 * @method QueryTableStoreInstancesForRule QueryTableStoreInstancesForRule()
 * @method DeleteDataSource DeleteDataSource()
 * @method QueryDeviceGroupTree QueryDeviceGroupTree()
 * @method BindGatewayToEdgeInstance BindGatewayToEdgeInstance()
 * @method CreateDeviceGroup CreateDeviceGroup()
 * @method RamAuth RamAuth()
 * @method QueryDeviceProp QueryDeviceProp()
 * @method DisableEdgeInstanceAutomationRule DisableEdgeInstanceAutomationRule()
 * @method QueryMqTopicsForRule QueryMqTopicsForRule()
 * @method UpdateService UpdateService()
 * @method CreateDriverTemplate CreateDriverTemplate()
 * @method BatchUpdateDeviceNickname BatchUpdateDeviceNickname()
 * @method AsyncExecuteQueryJobForDownload AsyncExecuteQueryJobForDownload()
 * @method QueryDeviceTopic QueryDeviceTopic()
 * @method QueryEdgeInstanceProduct QueryEdgeInstanceProduct()
 * @method BatchGetGroupDeviceStatus BatchGetGroupDeviceStatus()
 * @method QueryFcServicesForRule QueryFcServicesForRule()
 * @method SyncExecQueryJob SyncExecQueryJob()
 * @method QueryEdgeInstanceDevice QueryEdgeInstanceDevice()
 * @method DeleteRuleAction DeleteRuleAction()
 * @method ResetDeviceUpgrade ResetDeviceUpgrade()
 * @method QueryRdsInstancePageForRule QueryRdsInstancePageForRule()
 * @method InitScene InitScene()
 * @method QueryDeviceEventPicture QueryDeviceEventPicture()
 * @method RenameJobFolder RenameJobFolder()
 * @method QueryAppMonitorMetric QueryAppMonitorMetric()
 * @method QueryTableStorePrimaryKeysForRule QueryTableStorePrimaryKeysForRule()
 * @method BatchAddStdAbility BatchAddStdAbility()
 * @method QueryWebAppsList QueryWebAppsList()
 * @method DeleteAppDeployment DeleteAppDeployment()
 * @method EnableAutomationRule EnableAutomationRule()
 * @method GetAppConfigDetail GetAppConfigDetail()
 * @method DescribeRegions DescribeRegions()
 * @method QuerySummaryAutomationRuleLog QuerySummaryAutomationRuleLog()
 * @method QueryAllDeviceListByAuthProduct QueryAllDeviceListByAuthProduct()
 * @method SetDevicesProperty SetDevicesProperty()
 * @method PublishGeoProject PublishGeoProject()
 * @method OpenQueryDeviceStatistics OpenQueryDeviceStatistics()
 * @method PublishScene PublishScene()
 * @method CreateTask CreateTask()
 * @method ListGroup ListGroup()
 * @method DeleteDeviceGroup DeleteDeviceGroup()
 * @method BatchDeleteCustomProperty BatchDeleteCustomProperty()
 * @method UpdateGatewayServerConfig UpdateGatewayServerConfig()
 * @method CreateProject CreateProject()
 * @method QueryEdgeVersionParams QueryEdgeVersionParams()
 * @method UpdateTimeTemplate UpdateTimeTemplate()
 * @method GetPortalJsUrlsConfigForBIM GetPortalJsUrlsConfigForBIM()
 * @method QueryDebugOnlineLog QueryDebugOnlineLog()
 * @method OpenQueryBatchRegisterDeviceStatus OpenQueryBatchRegisterDeviceStatus()
 * @method RenameQueryJob RenameQueryJob()
 * @method GetSystemSourceTableList GetSystemSourceTableList()
 * @method GetProductAbilityTableList GetProductAbilityTableList()
 * @method QueryDevicePropertyStatusBiz QueryDevicePropertyStatusBiz()
 * @method QueryEdgeInstanceVersions QueryEdgeInstanceVersions()
 * @method CancelAppAuthorization CancelAppAuthorization()
 * @method OpenInvokeThingService OpenInvokeThingService()
 * @method QueryEdgeInstanceGateway QueryEdgeInstanceGateway()
 * @method DeleteDevicePop DeleteDevicePop()
 * @method QuerySubDeviceList QuerySubDeviceList()
 * @method BatchGetEdgeInstanceFunctionStatus BatchGetEdgeInstanceFunctionStatus()
 * @method GetScriptGenerate GetScriptGenerate()
 * @method QueryProduct QueryProduct()
 * @method GetQueryJob GetQueryJob()
 * @method BatchRegisterDevicePop BatchRegisterDevicePop()
 * @method QueryChildDeviceConfig QueryChildDeviceConfig()
 * @method QueryAllProductList QueryAllProductList()
 * @method CreateActivationCodeOrder CreateActivationCodeOrder()
 * @method QueryBatchCheckDeviceNamesStatus QueryBatchCheckDeviceNamesStatus()
 * @method GetAppInitEnvDetail GetAppInitEnvDetail()
 * @method CreateProductTags CreateProductTags()
 * @method QueryStdAbilityInfo QueryStdAbilityInfo()
 * @method ImportTslFromOss ImportTslFromOss()
 * @method GetServiceNameAndPort GetServiceNameAndPort()
 * @method BindDeviceToGroup BindDeviceToGroup()
 * @method QueryTopicReverseRouteTable QueryTopicReverseRouteTable()
 * @method SetSchedulerStatus SetSchedulerStatus()
 * @method SaveAppConfig SaveAppConfig()
 * @method QueryProductTopic QueryProductTopic()
 * @method CreateCustomService CreateCustomService()
 * @method QueryBatchCreateDeviceStatus QueryBatchCreateDeviceStatus()
 * @method QueryEdgeInstanceDeployment QueryEdgeInstanceDeployment()
 * @method BatchCreateDeviceWithApplyId BatchCreateDeviceWithApplyId()
 * @method QueryDevicePropertiesData QueryDevicePropertiesData()
 * @method QueryStrategyByFirName QueryStrategyByFirName()
 * @method QueryChannelDeviceList QueryChannelDeviceList()
 * @method StartRule StartRule()
 * @method OpenBatchRegisterDevice OpenBatchRegisterDevice()
 * @method QueryReducedTsl QueryReducedTsl()
 * @method QueryDeviceAttrData QueryDeviceAttrData()
 * @method DeleteAppConfig DeleteAppConfig()
 * @method GetDriverTemplate GetDriverTemplate()
 * @method QueryVersionsByPk QueryVersionsByPk()
 * @method QueryAuthorizeProductPage QueryAuthorizeProductPage()
 * @method QueryDevicePropertyStatusPop QueryDevicePropertyStatusPop()
 * @method GetCloudMonitorNode GetCloudMonitorNode()
 * @method QuerySuperDeviceGroup QuerySuperDeviceGroup()
 * @method CreateCustomProperty CreateCustomProperty()
 * @method QueryMeasureTop QueryMeasureTop()
 * @method ApplyDataAsset ApplyDataAsset()
 * @method GetShareInfo GetShareInfo()
 * @method SaveAppVirtualDeviceConfig SaveAppVirtualDeviceConfig()
 * @method UpdateProperty UpdateProperty()
 * @method SetThingFunctionSwitchStatusPop SetThingFunctionSwitchStatusPop()
 * @method BindDriverToGroup BindDriverToGroup()
 * @method UnregisterAppService UnregisterAppService()
 * @method DebugAbility DebugAbility()
 * @method QueryFcFunctionsForRule QueryFcFunctionsForRule()
 * @method CreateEdgeInstance CreateEdgeInstance()
 * @method QueryConfigByConfigId QueryConfigByConfigId()
 * @method CreateScriptPop CreateScriptPop()
 * @method QueryLogPage QueryLogPage()
 * @method GetAppImageRepo GetAppImageRepo()
 * @method GetGatewayBySubDevice GetGatewayBySubDevice()
 * @method PublishImageUpgradeConfigVersion PublishImageUpgradeConfigVersion()
 * @method CreateOssUploadAddress CreateOssUploadAddress()
 * @method GetFuncDocsTree GetFuncDocsTree()
 * @method ListProductStdAbility ListProductStdAbility()
 * @method MulticastMessagePop MulticastMessagePop()
 * @method RunScript RunScript()
 * @method CreateAppKey CreateAppKey()
 * @method QuerySecureUpgradePublicKey QuerySecureUpgradePublicKey()
 * @method QueryAlinkTopicList QueryAlinkTopicList()
 * @method ListDriverTemplate ListDriverTemplate()
 * @method GetScript GetScript()
 * @method DeleteEdgeInstance DeleteEdgeInstance()
 * @method FinishVerifyTask FinishVerifyTask()
 * @method GetEdgeInstanceSls GetEdgeInstanceSls()
 * @method ListGroupDevice ListGroupDevice()
 * @method RefreshProductAbilityTableTree RefreshProductAbilityTableTree()
 * @method QueryDeviceList QueryDeviceList()
 * @method CreateChildDevice CreateChildDevice()
 * @method GenerateOssUriForTsl GenerateOssUriForTsl()
 * @method QueryMqRegionsForRule QueryMqRegionsForRule()
 * @method CreateProductBiz CreateProductBiz()
 * @method CreateScript CreateScript()
 * @method QueryDevicePropertyDataPop QueryDevicePropertyDataPop()
 * @method QueryBatchCreateDeviceStatusPop QueryBatchCreateDeviceStatusPop()
 * @method QueryRecordPlanByDevice QueryRecordPlanByDevice()
 * @method ListSqlTaskView ListSqlTaskView()
 * @method DownloadAsyncDatasetContentFile DownloadAsyncDatasetContentFile()
 * @method UpdateDeviceConfig UpdateDeviceConfig()
 * @method GetScriptGenerateStatus GetScriptGenerateStatus()
 * @method ActiveDevice ActiveDevice()
 * @method QueryAppResourceConfig QueryAppResourceConfig()
 * @method BatchGetEdgeInstanceDeviceStatus BatchGetEdgeInstanceDeviceStatus()
 * @method VerifyThingAuthentication VerifyThingAuthentication()
 * @method CreateAppServiceDependency CreateAppServiceDependency()
 * @method CreateAutomationRule CreateAutomationRule()
 * @method ListOtherCategoryStdAbilityByName ListOtherCategoryStdAbilityByName()
 * @method ListAuthorizedPhoneNum ListAuthorizedPhoneNum()
 * @method SetLinkPlatformServiceOpen SetLinkPlatformServiceOpen()
 * @method QueryRulengSysTopics QueryRulengSysTopics()
 * @method DeleteGatewayServerConfig DeleteGatewayServerConfig()
 * @method BindRoleToGroup BindRoleToGroup()
 * @method QueryDeviceDetail QueryDeviceDetail()
 * @method QueryBatchCreateDeviceDetailPop QueryBatchCreateDeviceDetailPop()
 * @method BatchAddDeviceGroupRelations BatchAddDeviceGroupRelations()
 * @method QueryDeviceEvent QueryDeviceEvent()
 * @method GetDeviceProp GetDeviceProp()
 * @method QueryProductBiz QueryProductBiz()
 * @method DeleteFirmware DeleteFirmware()
 * @method GetUserSourceTableList GetUserSourceTableList()
 * @method DeleteDriver DeleteDriver()
 * @method QueryEdgeInstanceByFunction QueryEdgeInstanceByFunction()
 * @method CreateAppAlarm CreateAppAlarm()
 * @method GetAppConfigList GetAppConfigList()
 * @method BatchUpdateCustomProperty BatchUpdateCustomProperty()
 * @method QueryDeviceUpgradeCount QueryDeviceUpgradeCount()
 * @method UpdateProductTagForProtal UpdateProductTagForProtal()
 * @method StopLiveStreaming StopLiveStreaming()
 * @method QueryFirmwareList QueryFirmwareList()
 * @method GenerateBIMOssUploadUri GenerateBIMOssUploadUri()
 * @method QueryProductList QueryProductList()
 * @method CheckDataSourceValid CheckDataSourceValid()
 * @method UpdateEdgeNode UpdateEdgeNode()
 * @method ListAppServiceGroup ListAppServiceGroup()
 * @method QueryAppDataModelDetail QueryAppDataModelDetail()
 * @method QueryDeviceFile QueryDeviceFile()
 * @method QueryDeviceGroupList QueryDeviceGroupList()
 * @method QueryProductPropertyPop QueryProductPropertyPop()
 * @method CreateProductPop CreateProductPop()
 * @method SetDeviceGroupTags SetDeviceGroupTags()
 * @method ListProductByTags ListProductByTags()
 * @method QueryEdgeInstanceLatestDeployment QueryEdgeInstanceLatestDeployment()
 * @method GetScriptGeneratePop GetScriptGeneratePop()
 * @method GrantApiServices GrantApiServices()
 * @method OpenQueryDeviceEventData OpenQueryDeviceEventData()
 * @method SetDynamicRegisterSwitch SetDynamicRegisterSwitch()
 * @method UpdateDeviceGroup UpdateDeviceGroup()
 * @method QueryDevicePropertyDataBiz QueryDevicePropertyDataBiz()
 * @method IniAppDebugEnv IniAppDebugEnv()
 * @method GetGroupDriver GetGroupDriver()
 * @method UpdateProductTag UpdateProductTag()
 * @method ListCategoryStdAbility ListCategoryStdAbility()
 * @method ListAppDeploymentMessage ListAppDeploymentMessage()
 * @method QueryEdgeInstanceHistoricDeployment QueryEdgeInstanceHistoricDeployment()
 * @method UpdateEventRecordPlan UpdateEventRecordPlan()
 * @method PostDeviceEvents PostDeviceEvents()
 * @method RetryDiff RetryDiff()
 * @method SaveServerCallback SaveServerCallback()
 * @method RunScriptPop RunScriptPop()
 * @method CreateAppDeviceAuthorization CreateAppDeviceAuthorization()
 * @method QueryProductPop QueryProductPop()
 * @method QueryRuleForwardCloudRegion QueryRuleForwardCloudRegion()
 * @method QuickStart QuickStart()
 * @method UpdateLdpApp UpdateLdpApp()
 * @method CreateEdgeInstanceMessageRoute CreateEdgeInstanceMessageRoute()
 * @method QueryBatchRegisterDeviceStatus QueryBatchRegisterDeviceStatus()
 * @method CreateFirmware CreateFirmware()
 * @method UpdateScriptPop UpdateScriptPop()
 * @method QueryDeviceAttrStatusPop QueryDeviceAttrStatusPop()
 * @method QueryDeviceAttrDataPop QueryDeviceAttrDataPop()
 * @method TriggerRecord TriggerRecord()
 * @method DeleteAppImageRepo DeleteAppImageRepo()
 * @method SetGeoDeviceProperty SetGeoDeviceProperty()
 * @method DeleteAppAlarm DeleteAppAlarm()
 * @method CancelTransferApply CancelTransferApply()
 * @method BatchGetDeviceState BatchGetDeviceState()
 * @method PubBroadcast PubBroadcast()
 * @method CopyProductAbility CopyProductAbility()
 * @method OpenQueryDevicePropertyStatus OpenQueryDevicePropertyStatus()
 * @method AddThingConfigPop AddThingConfigPop()
 * @method BatchGetGroupAutomationRuleDeviceStatus BatchGetGroupAutomationRuleDeviceStatus()
 * @method QueryRecordPlans QueryRecordPlans()
 * @method CreateQueryJobBySQL CreateQueryJobBySQL()
 * @method QueryDevicePropertyByGroupPage QueryDevicePropertyByGroupPage()
 * @method CheckAlinkProtocolPop CheckAlinkProtocolPop()
 * @method QueryGatewayServerConfig QueryGatewayServerConfig()
 * @method ListProductCustomAbility ListProductCustomAbility()
 * @method CreateAppImageRepo CreateAppImageRepo()
 * @method QueryDiffTask QueryDiffTask()
 * @method CheckAndRemoveTopo CheckAndRemoveTopo()
 * @method QueryAllProductListPop QueryAllProductListPop()
 * @method QueryThingFunctionSwitch QueryThingFunctionSwitch()
 * @method UnbindDriverFromGroup UnbindDriverFromGroup()
 * @method GetEdgeInstance GetEdgeInstance()
 * @method GetEdgeInstanceMessageRoute GetEdgeInstanceMessageRoute()
 * @method DeleteGeoProject DeleteGeoProject()
 * @method SignApp SignApp()
 * @method CreateGeoProject CreateGeoProject()
 * @method QueryDevice QueryDevice()
 * @method ListGroupFunction ListGroupFunction()
 * @method ListRuleActions ListRuleActions()
 * @method GetPortalDescImage GetPortalDescImage()
 * @method UpdateAppAlarm UpdateAppAlarm()
 * @method QueryJoinPermissions QueryJoinPermissions()
 * @method QueryAppUnifyProperty QueryAppUnifyProperty()
 * @method QueryBatchCreateDeviceDetail QueryBatchCreateDeviceDetail()
 * @method GetAvailableProductList GetAvailableProductList()
 * @method GetGroupGateway GetGroupGateway()
 * @method CheckDataSourceValidV2 CheckDataSourceValidV2()
 * @method QueryStandardUnit QueryStandardUnit()
 * @method GetDataSourceList GetDataSourceList()
 * @method QueryMeasureList QueryMeasureList()
 * @method QueryEdgeInstanceAutomationRule QueryEdgeInstanceAutomationRule()
 * @method UpdateGeoDeviceEvent UpdateGeoDeviceEvent()
 * @method UpdateProductStdProperty UpdateProductStdProperty()
 * @method NotifyAddThingTopo NotifyAddThingTopo()
 * @method CreateProductTopicBiz CreateProductTopicBiz()
 * @method OpenQueryDeviceDetail OpenQueryDeviceDetail()
 * @method BatchDeleteDevice BatchDeleteDevice()
 * @method GetEdgeInstanceByGateway GetEdgeInstanceByGateway()
 * @method CreateEdgeNode CreateEdgeNode()
 * @method QueryHitsInstancePageForRule QueryHitsInstancePageForRule()
 * @method SaveAppNodeProperty SaveAppNodeProperty()
 * @method SetDevicePictureLifeCycle SetDevicePictureLifeCycle()
 * @method ListApp ListApp()
 * @method DebugRuleSql DebugRuleSql()
 * @method BatchAddThingTopo BatchAddThingTopo()
 * @method UnbindAutomationRuleFromEdgeInstance UnbindAutomationRuleFromEdgeInstance()
 * @method QueryTopicRouteTable QueryTopicRouteTable()
 * @method CloneTask CloneTask()
 * @method CreateCustomServicePop CreateCustomServicePop()
 * @method QueryEdgeClusterList QueryEdgeClusterList()
 * @method QueryDeviceDetailBiz QueryDeviceDetailBiz()
 * @method GetDslPop GetDslPop()
 * @method GetBindSceneInfo GetBindSceneInfo()
 * @method CancelAppDeviceAuthorization CancelAppDeviceAuthorization()
 * @method QueryGeoProject QueryGeoProject()
 * @method DeleteScene DeleteScene()
 * @method CreateLdpApp CreateLdpApp()
 * @method CreateRule CreateRule()
 * @method QueryDeviceByTags QueryDeviceByTags()
 * @method EnableEdgeInstanceAutomationRule EnableEdgeInstanceAutomationRule()
 * @method UnbindDeviceFromEdgeInstance UnbindDeviceFromEdgeInstance()
 * @method GetAsyncQueryJobRequestStatus GetAsyncQueryJobRequestStatus()
 * @method GetAppNodePropertyList GetAppNodePropertyList()
 * @method OpenGetDeviceStatus OpenGetDeviceStatus()
 * @method QueryDataHubSchemasForRule QueryDataHubSchemasForRule()
 * @method QueryAliyunUserInfo QueryAliyunUserInfo()
 * @method ListProductServeData ListProductServeData()
 * @method PublishTask PublishTask()
 * @method QueryHitsSecurityIpForRule QueryHitsSecurityIpForRule()
 * @method DeviceUpgradeCount DeviceUpgradeCount()
 * @method QueryDynamicRegisterSwitch QueryDynamicRegisterSwitch()
 * @method QueryDeviceVersionCountByPk QueryDeviceVersionCountByPk()
 * @method UpdateServicePop UpdateServicePop()
 * @method QueryEventRecordPlanDevices QueryEventRecordPlanDevices()
 * @method UnbindGatewayFromEdgeInstance UnbindGatewayFromEdgeInstance()
 * @method GetEdgeInstanceDriverDebugResponse GetEdgeInstanceDriverDebugResponse()
 * @method RemoveThingTopoBiz RemoveThingTopoBiz()
 * @method DeleteProductTopicBiz DeleteProductTopicBiz()
 * @method QueryDeviceLocationByGroupPage QueryDeviceLocationByGroupPage()
 * @method QueryRdsDatabasesForRule QueryRdsDatabasesForRule()
 * @method ChangeGeoProjectName ChangeGeoProjectName()
 * @method QueryProductServicePop QueryProductServicePop()
 * @method QueryThingConfig QueryThingConfig()
 * @method DeleteProductPop DeleteProductPop()
 * @method DescribeAppServiceApiDetail DescribeAppServiceApiDetail()
 * @method QueryServerCallback QueryServerCallback()
 * @method BindGatewayToGroup BindGatewayToGroup()
 * @method DelAppVirtualDeviceConfig DelAppVirtualDeviceConfig()
 * @method BatchGetEdgeInstanceAutomationRuleRelRuleStatus BatchGetEdgeInstanceAutomationRuleRelRuleStatus()
 * @method QueryReceivedTransferApplyList QueryReceivedTransferApplyList()
 * @method UnbindStreamFromEdgeInstance UnbindStreamFromEdgeInstance()
 * @method QueryProductEventPop QueryProductEventPop()
 * @method BatchDeleteThingTags BatchDeleteThingTags()
 * @method DeleteTopicRouteTable DeleteTopicRouteTable()
 * @method ListDeviceFileStores ListDeviceFileStores()
 * @method UpdateScript UpdateScript()
 * @method QueryEdgeInstanceMessageRoute QueryEdgeInstanceMessageRoute()
 * @method QueryAppVirtualDeviceConfig QueryAppVirtualDeviceConfig()
 * @method QueryAutomationRule QueryAutomationRule()
 * @method UpdateDeviceEventsForBim UpdateDeviceEventsForBim()
 * @method QueryRdsAccountsForRule QueryRdsAccountsForRule()
 * @method QueryRecordUrl QueryRecordUrl()
 * @method ImportTsl ImportTsl()
 * @method EnableOperationIngress EnableOperationIngress()
 * @method DeleteEdgeNode DeleteEdgeNode()
 * @method CreateCustomEvent CreateCustomEvent()
 * @method QueryDeviceGroupInfo QueryDeviceGroupInfo()
 * @method QueryEventRecordPlans QueryEventRecordPlans()
 * @method QueryDeviceDetailPop QueryDeviceDetailPop()
 * @method QueryGeoDevicePropertyByPage QueryGeoDevicePropertyByPage()
 * @method GetEdgeInstanceLogs GetEdgeInstanceLogs()
 * @method DeleteAppRepoTag DeleteAppRepoTag()
 * @method RejectTransfer RejectTransfer()
 * @method CreateScriptDraftPop CreateScriptDraftPop()
 * @method QueryEdgeInstanceFunction QueryEdgeInstanceFunction()
 * @method QueryGeoDeviceProperty QueryGeoDeviceProperty()
 * @method ResetEdgeInstanceDeployments ResetEdgeInstanceDeployments()
 * @method SyncExecDraftSQL SyncExecDraftSQL()
 * @method QueryAppAlarmList QueryAppAlarmList()
 * @method PostDevicePropertiesRegularly PostDevicePropertiesRegularly()
 * @method DeleteDeviceFile DeleteDeviceFile()
 * @method BatchCheckDeviceNames BatchCheckDeviceNames()
 * @method UpdateScriptDraft UpdateScriptDraft()
 * @method GetRemoteDebugToken GetRemoteDebugToken()
 * @method GetAppPermissionList GetAppPermissionList()
 * @method QueryDataHubProjectsForRule QueryDataHubProjectsForRule()
 * @method QueryProductTopicBiz QueryProductTopicBiz()
 * @method ReleaseAppDebugEnv ReleaseAppDebugEnv()
 * @method QueryDevicePropertyData QueryDevicePropertyData()
 * @method QueryDevicePagePop QueryDevicePagePop()
 * @method QueryMeasureSummary QueryMeasureSummary()
 * @method RRpc RRpc()
 * @method CheckCloudProductOpenStatus CheckCloudProductOpenStatus()
 * @method QueryDeviceDebugStatus QueryDeviceDebugStatus()
 * @method QueryHitsRegionsForRule QueryHitsRegionsForRule()
 * @method OpenDeleteDevice OpenDeleteDevice()
 * @method DeployCustomConfigToEdgeInstance DeployCustomConfigToEdgeInstance()
 * @method ListAppRepoTags ListAppRepoTags()
 * @method DeleteProductBiz DeleteProductBiz()
 * @method DeleteDriverTemplate DeleteDriverTemplate()
 * @method QueryEdgeInstanceDeviceByName QueryEdgeInstanceDeviceByName()
 * @method ModifyDeviceStatus ModifyDeviceStatus()
 * @method QueryTableStoreTablesForRule QueryTableStoreTablesForRule()
 * @method BatchForceUpdateProductTag BatchForceUpdateProductTag()
 * @method UnbindFunctionFromEdgeInstance UnbindFunctionFromEdgeInstance()
 * @method PushDeviceConfig PushDeviceConfig()
 * @method QueryEdgeInstanceDeployDetail QueryEdgeInstanceDeployDetail()
 * @method RegisterDevicePop RegisterDevicePop()
 * @method UpdateSqlTaskView UpdateSqlTaskView()
 * @method GetDataSource GetDataSource()
 * @method OpenDisableThing OpenDisableThing()
 * @method SetDeviceStorageLifeCycle SetDeviceStorageLifeCycle()
 * @method CreateTopicRouteTable CreateTopicRouteTable()
 * @method QueryProductAbilityList QueryProductAbilityList()
 * @method QueryDeviceUsedCapacity QueryDeviceUsedCapacity()
 * @method CreateJobFolder CreateJobFolder()
 * @method UpdateDataSource UpdateDataSource()
 * @method BatchUpdateFirmware BatchUpdateFirmware()
 * @method UpdateDataAsset UpdateDataAsset()
 * @method BuyLinkFaceLicenseToBusiness BuyLinkFaceLicenseToBusiness()
 * @method UpdateEdgeInstance UpdateEdgeInstance()
 * @method ListProviderServicePorts ListProviderServicePorts()
 * @method BatchGetDriverStatus BatchGetDriverStatus()
 * @method SaveMapConfig SaveMapConfig()
 * @method BatchGetGroupAutomationRuleStatus BatchGetGroupAutomationRuleStatus()
 * @method ListAllCategory ListAllCategory()
 * @method ListConfigNodeImage ListConfigNodeImage()
 * @method GetGatewayBySubDeviceBiz GetGatewayBySubDeviceBiz()
 * @method PushThingConfig PushThingConfig()
 * @method ListAppDeploymentRecord ListAppDeploymentRecord()
 * @method InvokeThingsService InvokeThingsService()
 * @method BatchUpdateProductTag BatchUpdateProductTag()
 * @method CreateAppInstance CreateAppInstance()
 * @method DebugAppProvideService DebugAppProvideService()
 * @method GetAppSignContent GetAppSignContent()
 * @method ListAppServiceModel ListAppServiceModel()
 * @method DeleteSqlTaskView DeleteSqlTaskView()
 * @method QueryBatchApplyDeviceList QueryBatchApplyDeviceList()
 * @method BindDeviceToEdgeInstance BindDeviceToEdgeInstance()
 * @method ListGatewayServerConfig ListGatewayServerConfig()
 * @method ListAppKey ListAppKey()
 * @method DisableOperationIngress DisableOperationIngress()
 * @method GetOperationIngress GetOperationIngress()
 * @method GetTaskList GetTaskList()
 * @method SetDeviceStatusForBim SetDeviceStatusForBim()
 * @method GetEdgeNodeId2 GetEdgeNodeId2()
 * @method UnbindRoleFromEdgeInstance UnbindRoleFromEdgeInstance()
 * @method ResetProductSecret ResetProductSecret()
 * @method QueryProductWithScript QueryProductWithScript()
 * @method DeleteAbility DeleteAbility()
 * @method GetAppDeploymentDetail GetAppDeploymentDetail()
 * @method DoDeviceOnline DoDeviceOnline()
 * @method QueryDeviceServiceDataBiz QueryDeviceServiceDataBiz()
 * @method DeleteScriptDraft DeleteScriptDraft()
 * @method GetScriptGenerateStatusPop GetScriptGenerateStatusPop()
 * @method UnbindAutomationRuleFromGroup UnbindAutomationRuleFromGroup()
 * @method SaveShareInfo SaveShareInfo()
 * @method GetQueryJobFolderTree GetQueryJobFolderTree()
 * @method QueryDeviceFileList QueryDeviceFileList()
 * @method CreateGatewayServerConfig CreateGatewayServerConfig()
 * @method QueryEdgeInstanceStatistics QueryEdgeInstanceStatistics()
 * @method BatchDeviceUpgrade BatchDeviceUpgrade()
 * @method UpdateEdgeInstanceMessageRoute UpdateEdgeInstanceMessageRoute()
 * @method ListAppServiceModelDeclare ListAppServiceModelDeclare()
 * @method QueryDeviceAttrStatus QueryDeviceAttrStatus()
 * @method SetEventRecordPlan SetEventRecordPlan()
 * @method ListStdAbility ListStdAbility()
 * @method BatchDeleteDevicePop BatchDeleteDevicePop()
 * @method QueryLinkFaceProductInfo QueryLinkFaceProductInfo()
 * @method UpdatePropertyPop UpdatePropertyPop()
 * @method QueryAppDataModelAttribute QueryAppDataModelAttribute()
 * @method DeleteTimeTemplate DeleteTimeTemplate()
 * @method GetDataAssetList GetDataAssetList()
 * @method RegisterAppService RegisterAppService()
 * @method UpdateAppInstanceData UpdateAppInstanceData()
 * @method QueryLinkFaceActiveCodeInfo QueryLinkFaceActiveCodeInfo()
 * @method CreateEdgeCluster CreateEdgeCluster()
 * @method UpdateDriverTemplate UpdateDriverTemplate()
 * @method UpdateEdgeInstanceSls UpdateEdgeInstanceSls()
 * @method RebootApp RebootApp()
 * @method QueryAppDeviceList QueryAppDeviceList()
 * @method GetDsl GetDsl()
 * @method ListTables ListTables()
 * @method queryAppBindDeviceList queryAppBindDeviceList()
 * @method GetPortalClasicScenes GetPortalClasicScenes()
 * @method ReUpgradeDevices ReUpgradeDevices()
 * @method QueryDeviceFileVod QueryDeviceFileVod()
 * @method DeleteBIMScene DeleteBIMScene()
 * @method QueryGeoMultiDeviceEventsByPage QueryGeoMultiDeviceEventsByPage()
 * @method QueryDataHubTopicsForRule QueryDataHubTopicsForRule()
 * @method QueryLinkFaceConsumerByCodes QueryLinkFaceConsumerByCodes()
 * @method QueryApiPermissionDeclare QueryApiPermissionDeclare()
 * @method BindDevicesToEdgeInstance BindDevicesToEdgeInstance()
 * @method QueryDeviceServiceDataPop QueryDeviceServiceDataPop()
 * @method QueryMonthRecord QueryMonthRecord()
 * @method CreateRuleAction CreateRuleAction()
 * @method DeleteRecordPlan DeleteRecordPlan()
 * @method AddAppInstanceData AddAppInstanceData()
 * @method BatchDeleteDeviceGroupRelations BatchDeleteDeviceGroupRelations()
 * @method QueryDeviceForEdge QueryDeviceForEdge()
 */
class V20180120
{
}

/**
 * @method $this setId($id)
 * @method int getId()
 */
class DeleteTask extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class QueryFirmwareByName extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 */
class QueryProductListByGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setEndPoint($endPoint)
 * @method string getEndPoint()
 * @method $this setAccessId($accessId)
 * @method string getAccessId()
 * @method $this setAccessKey($accessKey)
 * @method string getAccessKey()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setGmtCreate($gmtCreate)
 * @method string getGmtCreate()
 * @method $this setGmtModified($gmtModified)
 * @method string getGmtModified()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class CreateDataSource extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setDriverId($driverId)
 * @method string getDriverId()
 */
class SetEdgeInstanceDeviceDriver extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class OpenLinkFaceService extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setSort($sort)
 * @method string getSort()
 */
class QueryMobileAppsList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setNodeType($nodeType)
 * @method int getNodeType()
 * @method $this setDataFormat($dataFormat)
 * @method int getDataFormat()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setId2($id2)
 * @method bool getId2()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 * @method $this setProtocolType($protocolType)
 * @method string getProtocolType()
 * @method $this setServiceCode($serviceCode)
 * @method string getServiceCode()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupType($groupType)
 * @method string getGroupType()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class CreateProductInGroup extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setDeploymentName($deploymentName)
 * @method string getDeploymentName()
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryAppAuthorization extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProps($props)
 * @method string getProps()
 */
class SaveDeviceProp extends Request
{

}/**
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryAuthorizedAppList extends Request
{

}/**
 * @method $this setConfigureUuid($configureUuid)
 * @method string getConfigureUuid()
 * @method $this setConfigureVersionUuid($configureVersionUuid)
 * @method string getConfigureVersionUuid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDeployRegionId($deployRegionId)
 * @method string getDeployRegionId()
 * @method $this setHostingType($hostingType)
 * @method string getHostingType()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class CreateAppEdgeDeployment extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setDriverName($driverName)
 * @method string getDriverName()
 */
class QueryDriver extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setRouteId($routeId)
 * @method int getRouteId()
 * @method $this setTopicFilter($topicFilter)
 * @method string getTopicFilter()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setSourceData($sourceData)
 * @method string getSourceData()
 * @method $this setTargetType($targetType)
 * @method string getTargetType()
 * @method $this setTargetData($targetData)
 * @method string getTargetData()
 * @method $this setTargetIotHubQos($targetIotHubQos)
 * @method int getTargetIotHubQos()
 */
class UpdateGroupMessageRoute extends Request
{

}/**
 * @method $this setDeclareId($declareId)
 * @method string getDeclareId()
 * @method $this setDataModelName($dataModelName)
 * @method string getDataModelName()
 * @method $this setDeclareType($declareType)
 * @method string getDeclareType()
 * @method $this setDataModelId($dataModelId)
 * @method string getDataModelId()
 * @method $this setDeclareVersionId($declareVersionId)
 * @method string getDeclareVersionId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAppDataModelDeclare extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setSort($sort)
 * @method string getSort()
 */
class QueryServicesList extends Request
{

}/**
 * @method $this setPlanId($planId)
 * @method string getPlanId()
 * @method $this setStreamType($streamType)
 * @method int getStreamType()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class AddEventRecordPlanDevice extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setItems($items)
 * @method string getItems()
 */
class OpenSetDeviceProperty extends Request
{

}/**
 * @method $this setPlanId($planId)
 * @method string getPlanId()
 */
class QueryRecordPlanDetail extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class DeleteAutomationRule extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetTaskStatus extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setTopicFilter($topicFilter)
 * @method string getTopicFilter()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setSourceData($sourceData)
 * @method string getSourceData()
 * @method $this setTargetType($targetType)
 * @method string getTargetType()
 * @method $this setTargetData($targetData)
 * @method string getTargetData()
 * @method $this setTargetIotHubQos($targetIotHubQos)
 * @method int getTargetIotHubQos()
 */
class CreateGroupMessageRoute extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setPodName($podName)
 * @method string getPodName()
 */
class GetNamespacedPodEvent extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setSelect($select)
 * @method string getSelect()
 * @method $this setShortTopic($shortTopic)
 * @method string getShortTopic()
 * @method $this setWhere($where)
 * @method string getWhere()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRuleDesc($ruleDesc)
 * @method string getRuleDesc()
 * @method $this setTopicType($topicType)
 * @method int getTopicType()
 */
class UpdateRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setSource($source)
 * @method string getSource()
 */
class CreateEdgeClusterInstance extends Request
{

}/**
 * @method $this setDriverTemplateIds($driverTemplateIds)
 * @method string getDriverTemplateIds()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class BatchGetDriverTemplateStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setPropertyJson($propertyJson)
 * @method string getPropertyJson()
 * @method $this setPropertyBase64($propertyBase64)
 * @method string getPropertyBase64()
 */
class PostDeviceProperties extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class GetDeviceUserInfoPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPropKey($propKey)
 * @method string getPropKey()
 */
class DeleteDeviceProp extends Request
{

}/**
 * @method $this setDriverTemplateIds($driverTemplateIds)
 * @method string getDriverTemplateIds()
 */
class BatchGetDriverTemplateInfo extends Request
{

}/**
 * @method $this setEventId($eventId)
 * @method string getEventId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryDeviceEventRecord extends Request
{

}/**
 * @method $this setSqlStatement($sqlStatement)
 * @method string getSqlStatement()
 * @method $this setServiceRank($serviceRank)
 * @method string getServiceRank()
 */
class ValidateSqlStatement extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setNodeType($nodeType)
 * @method int getNodeType()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class ListProduct extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method array getIdentifier()
 */
class QueryDeviceDesiredProperty extends Request
{

}/**
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class GetEdgeNode extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class BatchRegisterDeviceWithApplyIdPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class OpenQueryDevicePropertyData extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class GetProductMeta extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setShadowMessage($shadowMessage)
 * @method string getShadowMessage()
 */
class UpdateDeviceShadow extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDeviceGroupByDevice extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class UpdateProduct extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setFunctionId($functionId)
 * @method string getFunctionId()
 * @method $this setRunMode($runMode)
 * @method string getRunMode()
 * @method $this setMemorySize($memorySize)
 * @method int getMemorySize()
 * @method $this setTimeout($timeout)
 * @method int getTimeout()
 * @method $this setTriggerContent($triggerContent)
 * @method string getTriggerContent()
 */
class UpdateEdgeInstanceFunction extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListDeployDetail extends Request
{

}/**
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setConfigUuid($configUuid)
 * @method string getConfigUuid()
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class ListConfigVersion extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setPackageName($packageName)
 * @method string getPackageName()
 */
class UnzipAndPushScene extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setCertBody($certBody)
 * @method string getCertBody()
 * @method $this setCertKey($certKey)
 * @method string getCertKey()
 * @method $this setCertName($certName)
 * @method string getCertName()
 */
class BindAppDomain extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DeleteEdgeCluster extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 */
class BindRoleToEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setNodeType($nodeType)
 * @method int getNodeType()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class ListProductConsole extends Request
{

}/**
 * @method $this setStreamType($streamType)
 * @method int getStreamType()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryEventRecordPlanByDevice extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class AcceptTransfer extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setSubDeviceName($subDeviceName)
 * @method string getSubDeviceName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QuerySubDeviceListPop extends Request
{

}/**
 * @method $this setDeviceType($deviceType)
 * @method string getDeviceType()
 */
class QueryAppUnifyEvent extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceBatchList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryProductAbilityListPop extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setEndPoint($endPoint)
 * @method string getEndPoint()
 * @method $this setAccessId($accessId)
 * @method string getAccessId()
 * @method $this setAccessKey($accessKey)
 * @method string getAccessKey()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setSourceUid($sourceUid)
 * @method string getSourceUid()
 */
class RefreshDataSource extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class ResetThing extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class QueryApiServices extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryModelConfig extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setPhone($phone)
 * @method string getPhone()
 */
class DeleteAuthorizedPhoneNum extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDriverName($driverName)
 * @method string getDriverName()
 */
class GetOfficialDriver extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 */
class QueryDevicePageForBim extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class OpenBatchRegisterDeviceWithNames extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setConfigName($configName)
 * @method string getConfigName()
 * @method $this setConfigContent($configContent)
 * @method string getConfigContent()
 * @method $this setSignMethod($signMethod)
 * @method string getSignMethod()
 * @method $this setConfigFormat($configFormat)
 * @method string getConfigFormat()
 */
class AddThingConfig extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetTask extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 * @method $this setTagKey($tagKey)
 * @method string getTagKey()
 * @method $this setTagValue($tagValue)
 * @method string getTagValue()
 */
class AddProductTag extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class DeleteGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class CreateEdgeInstanceDeployment extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class CancelReleaseProduct extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 */
class QueryDeviceSession extends Request
{

}/**
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAppKey($appKey)
 * @method string getAppKey()
 */
class ListServiceModelDebugLog extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setScriptType($scriptType)
 * @method string getScriptType()
 */
class GenerateScript extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setScriptContent($scriptContent)
 * @method string getScriptContent()
 * @method $this setScriptType($scriptType)
 * @method string getScriptType()
 * @method $this setOssUrl($ossUrl)
 * @method string getOssUrl()
 */
class CreateScriptDraft extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method int getType()
 */
class QueryEdgeInstanceWithGateway extends Request
{

}/**
 * @method $this setMetaCode($metaCode)
 * @method string getMetaCode()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class GetAppUploadPath extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListGroupMessageRoute extends Request
{

}/**
 * @method $this setDeploymentUuid($deploymentUuid)
 * @method string getDeploymentUuid()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAppDeploymentService extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setDeploymentUuid($deploymentUuid)
 * @method string getDeploymentUuid()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryAppOwnerDeviceList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 * @method $this setKeywords($keywords)
 * @method string getKeywords()
 */
class QueryDebugOnlineLogContent extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDestFirmwareName($destFirmwareName)
 * @method string getDestFirmwareName()
 * @method $this setSrcFirmwareName($srcFirmwareName)
 * @method array getSrcFirmwareName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDiffMethod($diffMethod)
 * @method string getDiffMethod()
 * @method $this setSplictSize($splictSize)
 * @method int getSplictSize()
 */
class CreateBatchDiff extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServeId($serveId)
 * @method int getServeId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class SaveUserServeStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryVirtualDevice extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class QueryTimeTemplateDetail extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setExclusionServe($exclusionServe)
 * @method array getExclusionServe()
 * @method $this setTagKey($tagKey)
 * @method string getTagKey()
 * @method $this setProductKey($productKey)
 * @method array getProductKey()
 */
class BatchGetProductTagListConsole extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class GetDeviceStatus extends Request
{

}/**
 */
class GetProductList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPropInfo($propInfo)
 * @method string getPropInfo()
 */
class SetDevicePropPop extends Request
{

}/**
 * @method $this setLocatingInfo($locatingInfo)
 * @method string getLocatingInfo()
 */
class LocateDeviceByFingerprint extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setServiceCode($serviceCode)
 * @method string getServiceCode()
 * @method $this setAccessMethod($accessMethod)
 * @method int getAccessMethod()
 * @method $this setServiceCodes($serviceCodes)
 * @method array getServiceCodes()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryUnimportedProducts extends Request
{

}/**
 * @method $this setAppConfigId($appConfigId)
 * @method string getAppConfigId()
 */
class GetAppNodes extends Request
{

}/**
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 */
class GeoCheckSetCoordinateStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCategoryType($categoryType)
 * @method string getCategoryType()
 * @method $this setName($name)
 * @method string getName()
 */
class ListPresentCategoryStdAbilityByName extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class ImportDemoScene extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setAliyunPk($aliyunPk)
 * @method string getAliyunPk()
 */
class DeleteAppInstance extends Request
{

}/**
 * @method $this setDeclareType($declareType)
 * @method string getDeclareType()
 * @method $this setDeclareId($declareId)
 * @method string getDeclareId()
 * @method $this setDeclareName($declareName)
 * @method string getDeclareName()
 * @method $this setDataModelId($dataModelId)
 * @method string getDataModelId()
 * @method $this setDataModelName($dataModelName)
 * @method string getDataModelName()
 * @method $this setDataModelVersion($dataModelVersion)
 * @method string getDataModelVersion()
 * @method $this setDataModelDescription($dataModelDescription)
 * @method string getDataModelDescription()
 * @method $this setDeclareVersionId($declareVersionId)
 * @method string getDeclareVersionId()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setDataModelPermission($dataModelPermission)
 * @method int getDataModelPermission()
 * @method $this setIsSubscribe($isSubscribe)
 * @method bool getIsSubscribe()
 * @method $this setDeleted($deleted)
 * @method int getDeleted()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateAppDataModelDeclare extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setActionId($actionId)
 * @method int getActionId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfiguration($configuration)
 * @method string getConfiguration()
 */
class UpdateRuleAction extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setAuthType($authType)
 * @method int getAuthType()
 */
class QueryReceivedAuthProductList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCancelDevice($cancelDevice)
 * @method array getCancelDevice()
 */
class CancelAuthorizedDevices extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class DoDeviceOffline extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRouteId($routeId)
 * @method int getRouteId()
 */
class DeleteEdgeInstanceMessageRoute extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 */
class QueryProductProperty extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 * @method $this setGeoProjectName($geoProjectName)
 * @method string getGeoProjectName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setMapConfig($mapConfig)
 * @method string getMapConfig()
 * @method $this setGroupMethod($groupMethod)
 * @method string getGroupMethod()
 */
class UpdateGeoProject extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPropName($propName)
 * @method string getPropName()
 */
class GetDevicePropPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCount($count)
 * @method int getCount()
 */
class ApplyBatchCreateDevice extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 * @method $this setAttributeCode($attributeCode)
 * @method string getAttributeCode()
 */
class QueryDevicePropertyByProductPage extends Request
{

}/**
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPictureType($pictureType)
 * @method int getPictureType()
 * @method $this setPictureSource($pictureSource)
 * @method int getPictureSource()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryPictureFiles extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class ListAllCategoryConsole extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setActionId($actionId)
 * @method int getActionId()
 */
class GetRuleAction extends Request
{

}/**
 * @method $this setType($type)
 * @method string getType()
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setCpuCapacityLimit($cpuCapacityLimit)
 * @method string getCpuCapacityLimit()
 * @method $this setMemCapacityLimit($memCapacityLimit)
 * @method string getMemCapacityLimit()
 * @method $this setCpuCapacityRequest($cpuCapacityRequest)
 * @method string getCpuCapacityRequest()
 * @method $this setMemCapacityRequest($memCapacityRequest)
 * @method string getMemCapacityRequest()
 * @method $this setReplicaCount($replicaCount)
 * @method int getReplicaCount()
 */
class ExpandAppResource extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetThingTopo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class GetNodesAddingTask extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class ListProductTags extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setDeleteStatus($deleteStatus)
 * @method int getDeleteStatus()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setFirmVersion($firmVersion)
 * @method string getFirmVersion()
 */
class QueryFirmwareByUid extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setSuperGroupId($superGroupId)
 * @method string getSuperGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setTag($tag)
 * @method array getTag()
 */
class QueryDeviceGroupByFuzzyName extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setItems($items)
 * @method string getItems()
 */
class SetDevicePropertyPop extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DeleteLdpApp extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRuleIds($ruleIds)
 * @method string getRuleIds()
 */
class BatchGetEdgeInstanceAutomationRuleStatus extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class CreateGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPropertyInfoList($propertyInfoList)
 * @method array getPropertyInfoList()
 */
class BatchCreateCustomProperty extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setSwitchStatus($switchStatus)
 * @method int getSwitchStatus()
 */
class UpdateCloudMonitorSwitch extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryProductAllInfo extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 */
class WithdrawTask extends Request
{

}/**
 */
class GetComponentList extends Request
{

}/**
 * @method $this setAutomationRuleId($automationRuleId)
 * @method string getAutomationRuleId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setTraceId($traceId)
 * @method string getTraceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class ListDetailAutomationRuleLog extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryDeviceStatisticsPop extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class CreateDeployment extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setDriverId($driverId)
 * @method string getDriverId()
 * @method $this setMemory($memory)
 * @method int getMemory()
 */
class UpdateGroupDriverConfig extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setViewName($viewName)
 * @method string getViewName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceList($deviceList)
 * @method string getDeviceList()
 */
class SaveSqlTaskView extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class GetRemoteDebugServiceMeta extends Request
{

}/**
 * @method $this setPlanId($planId)
 * @method string getPlanId()
 * @method $this setStreamType($streamType)
 * @method int getStreamType()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class UpdateEventRecordPlanDevice extends Request
{

}/**
 * @method $this setDataModelName($dataModelName)
 * @method string getDataModelName()
 * @method $this setDataModelId($dataModelId)
 * @method string getDataModelId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDeclareId($declareId)
 * @method string getDeclareId()
 * @method $this setDeclareType($declareType)
 * @method string getDeclareType()
 * @method $this setDeclareVersionId($declareVersionId)
 * @method string getDeclareVersionId()
 */
class QueryAppDataModelList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTagKey($tagKey)
 * @method string getTagKey()
 */
class DeleteProductTag extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setOperation($operation)
 * @method string getOperation()
 * @method $this setTopicShortName($topicShortName)
 * @method string getTopicShortName()
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 */
class UpdateProductTopic extends Request
{

}/**
 * @method $this setSqlStatement($sqlStatement)
 * @method string getSqlStatement()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class UpdateQueryJob extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 * @method $this setFuzzy($fuzzy)
 * @method bool getFuzzy()
 * @method $this setNickname($nickname)
 * @method string getNickname()
 */
class QueryDevicePage extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class GetDeviceStatusBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setRuleContent($ruleContent)
 * @method string getRuleContent()
 * @method $this setRuleDescription($ruleDescription)
 * @method string getRuleDescription()
 */
class UpdateAutomationRule extends Request
{

}/**
 * @method $this setStreamType($streamType)
 * @method int getStreamType()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class DeleteRecordPlanDevice extends Request
{

}/**
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 * @method $this setDeclareType($declareType)
 * @method string getDeclareType()
 * @method $this setServiceModelList($serviceModelList)
 * @method string getServiceModelList()
 */
class CreateAppServiceModelDeclare extends Request
{

}/**
 */
class QueryGeoProjectList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setInputParams($inputParams)
 * @method string getInputParams()
 * @method $this setOutputParams($outputParams)
 * @method string getOutputParams()
 * @method $this setCallType($callType)
 * @method int getCallType()
 * @method $this setConfigCode($configCode)
 * @method string getConfigCode()
 * @method $this setExtendConfig($extendConfig)
 * @method string getExtendConfig()
 */
class UpdateProductStdService extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductTag($productTag)
 * @method array getProductTag()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setName($name)
 * @method string getName()
 */
class QueryProductListByTag extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class GetRegisterAppService extends Request
{

}/**
 * @method $this setPlanId($planId)
 * @method string getPlanId()
 */
class DeleteEventRecordPlan extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGwProductKey($gwProductKey)
 * @method string getGwProductKey()
 * @method $this setGwDeviceName($gwDeviceName)
 * @method string getGwDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setServerId($serverId)
 * @method string getServerId()
 * @method $this setConfigJson($configJson)
 * @method string getConfigJson()
 */
class UpdateChildDeviceConfig extends Request
{

}/**
 * @method $this setFolderUID($folderUID)
 * @method string getFolderUID()
 */
class GetQueryJobListByFolderUID extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCallbackType($callbackType)
 * @method int getCallbackType()
 * @method $this setMode($mode)
 * @method string getMode()
 * @method $this setDeviceDataFlag($deviceDataFlag)
 * @method bool getDeviceDataFlag()
 * @method $this setDeviceLifeCycleFlag($deviceLifeCycleFlag)
 * @method bool getDeviceLifeCycleFlag()
 * @method $this setDeviceStatusChangeFlag($deviceStatusChangeFlag)
 * @method bool getDeviceStatusChangeFlag()
 * @method $this setDeviceTopoLifeCycleFlag($deviceTopoLifeCycleFlag)
 * @method bool getDeviceTopoLifeCycleFlag()
 * @method $this setFoundDeviceListFlag($foundDeviceListFlag)
 * @method bool getFoundDeviceListFlag()
 * @method $this setConfiguration($configuration)
 * @method string getConfiguration()
 */
class UpdateServerCallback extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setRuleContent($ruleContent)
 * @method string getRuleContent()
 * @method $this setRuleDescription($ruleDescription)
 * @method string getRuleDescription()
 */
class UpdateFlowRule extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryTimeTemplate extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class AuthorizeProduct extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 */
class GetSolutionInstance extends Request
{

}/**
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAppConfigId($appConfigId)
 * @method string getAppConfigId()
 * @method $this setConfigKey($configKey)
 * @method string getConfigKey()
 */
class GetAppProperty extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class DeleteProduct extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setDriverName($driverName)
 * @method string getDriverName()
 */
class ListDriver extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryDevicePropBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 */
class QueryRdsRegionsForRule extends Request
{

}/**
 * @method $this setTableName($tableName)
 * @method string getTableName()
 */
class GetProductAbilityOverviewData extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setEdgeFunctionId($edgeFunctionId)
 * @method string getEdgeFunctionId()
 * @method $this setRunMode($runMode)
 * @method string getRunMode()
 * @method $this setMemorySize($memorySize)
 * @method int getMemorySize()
 * @method $this setTimeout($timeout)
 * @method int getTimeout()
 * @method $this setTriggerContent($triggerContent)
 * @method string getTriggerContent()
 */
class UpdateGroupFunctionConfig extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setComponents($components)
 * @method string getComponents()
 * @method $this setParams($params)
 * @method string getParams()
 */
class PreviewTaskSql extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 * @method $this setDiff($diff)
 * @method bool getDiff()
 * @method $this setSrcFirmwareName($srcFirmwareName)
 * @method array getSrcFirmwareName()
 */
class VerifyFirmware extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class EnableThing extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotInstanceName($iotInstanceName)
 * @method string getIotInstanceName()
 */
class ModifySolutionInstance extends Request
{

}/**
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 */
class GeoBatchSetCoordinate extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setFunctionType($functionType)
 * @method string getFunctionType()
 * @method $this setFunctionCode($functionCode)
 * @method string getFunctionCode()
 * @method $this setArgs($args)
 * @method string getArgs()
 * @method $this setEnvironment($environment)
 * @method string getEnvironment()
 */
class DebugAbilityPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDriverName($driverName)
 * @method string getDriverName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setUrl($url)
 * @method string getUrl()
 * @method $this setRuntime($runtime)
 * @method string getRuntime()
 * @method $this setDriverId($driverId)
 * @method string getDriverId()
 */
class UpdateDriver extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setPath($path)
 * @method string getPath()
 */
class GetOauthUrl extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setNodeType($nodeType)
 * @method int getNodeType()
 * @method $this setDataFormat($dataFormat)
 * @method int getDataFormat()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setId2($id2)
 * @method bool getId2()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 * @method $this setProtocolType($protocolType)
 * @method string getProtocolType()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setJoinPermissionId($joinPermissionId)
 * @method string getJoinPermissionId()
 */
class CreateProduct extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class QueryDeviceLocationByProductPage extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class SetRecordPlan extends Request
{

}/**
 * @method $this setPlanId($planId)
 * @method string getPlanId()
 */
class QueryEventRecordPlanDetail extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class TriggerAutomationRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class GetDeviceStatusPop extends Request
{

}/**
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 */
class GenerateGISOssUploadUri extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class GetAppBaseInfo extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setClusterName($clusterName)
 * @method string getClusterName()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setServiceCidr($serviceCidr)
 * @method string getServiceCidr()
 * @method $this setEnvironmentVars($environmentVars)
 * @method string getEnvironmentVars()
 */
class UpdateEdgeCluster extends Request
{

}/**
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class CancelQueryJob extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 */
class BatchDeleteBlankProductKeyFirmware extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setAlinkJson($alinkJson)
 * @method string getAlinkJson()
 * @method $this setType($type)
 * @method int getType()
 */
class CheckAlinkProtocol extends Request
{

}/**
 * @method $this setStreamType($streamType)
 * @method int getStreamType()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class DeleteEventRecordPlanDevice extends Request
{

}/**
 * @method $this setCaptureId($captureId)
 * @method string getCaptureId()
 * @method $this setPictureType($pictureType)
 * @method int getPictureType()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryDevicePictureFile extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 * @method $this setdeviceName($deviceName)
 * @method string getdeviceName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryTransferDeviceList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 */
class QueryMqInstancesForRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProps($props)
 * @method string getProps()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class ForceSetDeviceProp extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class GetAppInstanceInfo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setThingIdTagsList($thingIdTagsList)
 * @method array getThingIdTagsList()
 */
class BatchAddThingTags extends Request
{

}/**
 * @method $this setDay($day)
 * @method int getDay()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class SetDeviceRecordLifeCycle extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setStart($start)
 * @method int getStart()
 * @method $this setEnd($end)
 * @method int getEnd()
 * @method $this setIotIds($iotIds)
 * @method string getIotIds()
 */
class QueryGeoDeviceLocationTimeline extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setExclusionServe($exclusionServe)
 * @method array getExclusionServe()
 */
class QueryServeList extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setToUserLoginId($toUserLoginId)
 * @method string getToUserLoginId()
 */
class QueryAppDeviceAuthorization extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setData($data)
 * @method string getData()
 */
class SendEdgeInstanceDriverDebugRequest extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryConnectionExtensionInfo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class QueryDeviceGroupTagList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class BatchRegisterDeviceWithNames extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDeviceListByFuzzyName extends Request
{

}/**
 */
class GetUserScenes extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 * @method $this setFuzzy($fuzzy)
 * @method bool getFuzzy()
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 */
class GeoGetDeviceInfoListFile extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setScriptCode($scriptCode)
 * @method string getScriptCode()
 */
class GetScriptDraftPop extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class GetProductPropertiesForBim extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class OpenQueryProduct extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class GetNetStatusReport extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class QueryDeviceGroupByName extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServeId($serveId)
 * @method int getServeId()
 */
class QueryServeById extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryTransferApplyByPage extends Request
{

}/**
 * @method $this setDataSourceId($dataSourceId)
 * @method int getDataSourceId()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 * @method $this setColumnType($columnType)
 * @method string getColumnType()
 * @method $this setIsPrimary($isPrimary)
 * @method bool getIsPrimary()
 */
class ListColumns extends Request
{

}/**
 * @method $this setPlanId($planId)
 * @method string getPlanId()
 * @method $this setStreamType($streamType)
 * @method int getStreamType()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class AddRecordPlanDevice extends Request
{

}/**
 * @method $this setPlanId($planId)
 * @method string getPlanId()
 * @method $this setStreamType($streamType)
 * @method int getStreamType()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class UpdateRecordPlanDevice extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleIds($ruleIds)
 * @method string getRuleIds()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class BatchGetEdgeInstanceAutomationRuleDeviceStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryEdgeInstanceStream extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class QueryPageByApplyId extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class UpdateProductBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTargetAliyunPk($targetAliyunPk)
 * @method string getTargetAliyunPk()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class AuthorizeDevices extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class OpenEnableThing extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setSql($sql)
 * @method string getSql()
 * @method $this setComponents($components)
 * @method string getComponents()
 * @method $this setParams($params)
 * @method string getParams()
 * @method $this setEnv($env)
 * @method string getEnv()
 * @method $this setGmtCreate($gmtCreate)
 * @method string getGmtCreate()
 * @method $this setGmtModified($gmtModified)
 * @method string getGmtModified()
 */
class UpdateTask extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryProjectsList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStreamGuId($streamGuId)
 * @method string getStreamGuId()
 */
class BindStreamToEdgeInstance extends Request
{

}/**
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetQueryJobV2 extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class ListAutomationRule extends Request
{

}/**
 * @method $this setHostingType($hostingType)
 * @method string getHostingType()
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setPodName($podName)
 * @method string getPodName()
 * @method $this setContainerName($containerName)
 * @method string getContainerName()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 */
class GetAppPodSession extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 */
class GenerateOssUploadUri extends Request
{

}/**
 * @method $this setStreamType($streamType)
 * @method int getStreamType()
 * @method $this setShouldEncrypt($shouldEncrypt)
 * @method bool getShouldEncrypt()
 * @method $this setEncryptType($encryptType)
 * @method int getEncryptType()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryLiveStreaming extends Request
{

}/**
 * @method $this setNewGeoProjectName($newGeoProjectName)
 * @method string getNewGeoProjectName()
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 */
class DuplicateGeoProject extends Request
{

}/**
 * @method $this setAppConfigId($appConfigId)
 * @method string getAppConfigId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setPropertyList($propertyList)
 * @method array getPropertyList()
 */
class GetAppVerifyNodePropertyResultAppConfig extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setType($type)
 * @method string getType()
 */
class QueryThingFunctionSwitchPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryProductEvent extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setPhone($phone)
 * @method string getPhone()
 * @method $this setExt($ext)
 * @method string getExt()
 */
class CreateLaUser extends Request
{

}/**
 * @method $this setDeviceList($deviceList)
 * @method array getDeviceList()
 */
class QueryDeviceRecordLifeCycle extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDriverName($driverName)
 * @method string getDriverName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setUrl($url)
 * @method string getUrl()
 * @method $this setRuntime($runtime)
 * @method string getRuntime()
 */
class CreateDriver extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setSecureUpgradeFlag($secureUpgradeFlag)
 * @method int getSecureUpgradeFlag()
 */
class UpdateSecureUpgradeFlag extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 * @method $this setContainedOssUrl($containedOssUrl)
 * @method bool getContainedOssUrl()
 */
class QueryConfigByConfigIdPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class RemoveThingTopo extends Request
{

}/**
 * @method $this setUuid($uuid)
 * @method string getUuid()
 */
class DeleteAppDataModelDeclare extends Request
{

}/**
 */
class GetOnsInfoList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setName($name)
 * @method string getName()
 */
class QueryProductListPop extends Request
{

}/**
 * @method $this setCategoryKey($categoryKey)
 * @method string getCategoryKey()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setRelated($related)
 * @method int getRelated()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetProductListByRelation extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setNameSpace($nameSpace)
 * @method string getNameSpace()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setCpuCapacityLimit($cpuCapacityLimit)
 * @method string getCpuCapacityLimit()
 * @method $this setMemCapacityLimit($memCapacityLimit)
 * @method string getMemCapacityLimit()
 * @method $this setCpuCapacityRequest($cpuCapacityRequest)
 * @method string getCpuCapacityRequest()
 * @method $this setMemCapacityRequest($memCapacityRequest)
 * @method string getMemCapacityRequest()
 * @method $this setContainerCount($containerCount)
 * @method int getContainerCount()
 */
class ExpandAppDeploymentResource extends Request
{

}/**
 * @method $this setModelCode($modelCode)
 * @method string getModelCode()
 * @method $this setModelVersion($modelVersion)
 * @method string getModelVersion()
 */
class DescribeAppServiceModelVersion extends Request
{

}/**
 * @method $this setConfigureUuid($configureUuid)
 * @method string getConfigureUuid()
 * @method $this setConfigureVersionUuid($configureVersionUuid)
 * @method string getConfigureVersionUuid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setHostingType($hostingType)
 * @method string getHostingType()
 * @method $this setDeployRegionId($deployRegionId)
 * @method string getDeployRegionId()
 */
class CreateAppDeployment extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class QueryProductByUserId extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceGroupByTags extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setPublishStatus($publishStatus)
 * @method string getPublishStatus()
 */
class UpdateSaaSAppPublishStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setJunior($junior)
 * @method int getJunior()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class ListAvailableProducts extends Request
{

}/**
 * @method $this setSceneName($sceneName)
 * @method string getSceneName()
 * @method $this setBizKey($bizKey)
 * @method string getBizKey()
 * @method $this setServiceId($serviceId)
 * @method string getServiceId()
 * @method $this setOperateType($operateType)
 * @method string getOperateType()
 */
class CreateOrCancelApiPermissionDeclare extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setScriptCode($scriptCode)
 * @method string getScriptCode()
 */
class GetScriptDraft extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setAllDay($allDay)
 * @method int getAllDay()
 * @method $this setTimeSections($timeSections)
 * @method array getTimeSections()
 */
class SetTimeTemplate extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryDeviceStatistics extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setVersionId($versionId)
 * @method string getVersionId()
 * @method $this setIsDesensitized($isDesensitized)
 * @method bool getIsDesensitized()
 */
class GetEdgeInstanceVersion extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setFunctionName($functionName)
 * @method string getFunctionName()
 * @method $this setRunMode($runMode)
 * @method string getRunMode()
 * @method $this setFcRegionId($fcRegionId)
 * @method string getFcRegionId()
 * @method $this setMemorySize($memorySize)
 * @method int getMemorySize()
 * @method $this setTimeout($timeout)
 * @method int getTimeout()
 * @method $this setTriggerContent($triggerContent)
 * @method string getTriggerContent()
 */
class BindFunctionToGroup extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setPhone($phone)
 * @method string getPhone()
 * @method $this setSysCode($sysCode)
 * @method string getSysCode()
 */
class RegisterPhoneNumToOa extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class ListAppDependentService extends Request
{

}/**
 * @method $this setAppConfigId($appConfigId)
 * @method string getAppConfigId()
 */
class GetAppConfigurableNode extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class DeleteRule extends Request
{

}/**
 * @method $this setAbilityType($abilityType)
 * @method string getAbilityType()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class RefreshProductAbilityTableList extends Request
{

}/**
 * @method $this setOutput($output)
 * @method string getOutput()
 * @method $this setSourceId($sourceId)
 * @method int getSourceId()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class CheckDataSourceOutput extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setArgs($args)
 * @method string getArgs()
 */
class InvokeThingServicePop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCount($count)
 * @method int getCount()
 */
class BatchRegisterDevice extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setScriptType($scriptType)
 * @method string getScriptType()
 */
class GenerateScriptPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class GetAutomationRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setSiteType($siteType)
 * @method string getSiteType()
 * @method $this setRuleDataFormat($ruleDataFormat)
 * @method string getRuleDataFormat()
 */
class ListSupportedCloudProducts extends Request
{

}/**
 * @method $this setServiceCode($serviceCode)
 * @method string getServiceCode()
 * @method $this setConsumer($consumer)
 * @method string getConsumer()
 * @method $this setConsumeVersion($consumeVersion)
 * @method string getConsumeVersion()
 */
class DeleteAppServiceDependency extends Request
{

}/**
 * @method $this setSql($sql)
 * @method string getSql()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class CheckTaskSql extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class EnableThingPop extends Request
{

}/**
 * @method $this setLicenseType($licenseType)
 * @method int getLicenseType()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryLinkFaceLicense extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setUniMsgId($uniMsgId)
 * @method string getUniMsgId()
 */
class QueryMessageInfo extends Request
{

}/**
 * @method $this setAutomationRuleId($automationRuleId)
 * @method string getAutomationRuleId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class ListSummaryAutomationRuleLog extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceServiceData extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class CheckIsUnzipSuccess extends Request
{

}/**
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DeleteQueryJob extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class UpdateProductPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 */
class DeleteProductTopic extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTargetAliyunPk($targetAliyunPk)
 * @method string getTargetAliyunPk()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryAuthorizeDevicePage extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTargetAliyunPk($targetAliyunPk)
 * @method string getTargetAliyunPk()
 */
class CancelAuthorizedProduct extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class BindAutomationRuleToEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class BatchRegisterDeviceWithApplyId extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 */
class QueryMnsTopicsForRule extends Request
{

}/**
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class GetMultiDeviceStatusForBim extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setArgs($args)
 * @method string getArgs()
 */
class InvokeThingService extends Request
{

}/**
 * @method $this setPlanId($planId)
 * @method string getPlanId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryRecordPlanDevices extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class UpdateGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setTagString($tagString)
 * @method string getTagString()
 */
class ForceSetDeviceGroupTag extends Request
{

}/**
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setKeywords($keywords)
 * @method string getKeywords()
 */
class QueryEdgeNodeList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTopicShortName($topicShortName)
 * @method string getTopicShortName()
 * @method $this setOperation($operation)
 * @method string getOperation()
 * @method $this setDesc($desc)
 * @method string getDesc()
 */
class CreateProductTopic extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setOperation($operation)
 * @method string getOperation()
 * @method $this setTopicShortName($topicShortName)
 * @method string getTopicShortName()
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class UpdateProductTopicBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDriverIds($driverIds)
 * @method string getDriverIds()
 */
class BatchGetDriver extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class CancelDiff extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setShadowMessage($shadowMessage)
 * @method string getShadowMessage()
 */
class GetDeviceShadow extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryLdpAppsList extends Request
{

}/**
 * @method $this setAbilityType($abilityType)
 * @method string getAbilityType()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class GetProductAbilityTableTree extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setOutputJson($outputJson)
 * @method string getOutputJson()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDelay($delay)
 * @method int getDelay()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setCount($count)
 * @method int getCount()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 * @method $this setOutputBase64($outputBase64)
 * @method string getOutputBase64()
 */
class PostDeviceEventsRegularly extends Request
{

}/**
 * @method $this setJobUid($jobUid)
 * @method string getJobUid()
 * @method $this setScheduleConfiguration($scheduleConfiguration)
 * @method string getScheduleConfiguration()
 */
class GetSchedulerConfig extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setAutomationRuleId($automationRuleId)
 * @method string getAutomationRuleId()
 */
class BindAutomationRuleToGroup extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDesc($desc)
 * @method string getDesc()
 */
class UpdateTaskMeta extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setGwIotId($gwIotId)
 * @method string getGwIotId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceIds($resourceIds)
 * @method array getResourceIds()
 */
class QueryEdgeInstanceLatestDeploySnapshot extends Request
{

}/**
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class TriggerCapturePicture extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class DeleteApp extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class GetRule extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setAliyunPk($aliyunPk)
 * @method string getAliyunPk()
 * @method $this setTenantId($tenantId)
 * @method string getTenantId()
 * @method $this setTenantSubUserId($tenantSubUserId)
 * @method string getTenantSubUserId()
 */
class GetAppSsoUrl extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCount($count)
 * @method int getCount()
 */
class ApplyBatchCreateDevicePop extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListGroupDriver extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setRuleContent($ruleContent)
 * @method string getRuleContent()
 * @method $this setRuleDescription($ruleDescription)
 * @method string getRuleDescription()
 * @method $this setRuleType($ruleType)
 * @method string getRuleType()
 */
class CreateFlowRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class GetDeviceUserInfo extends Request
{

}/**
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setId2($id2)
 * @method string getId2()
 */
class GetEdgeNodeId2ServerRandom extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTargetAliyunPk($targetAliyunPk)
 * @method string getTargetAliyunPk()
 * @method $this setTransferTag($transferTag)
 * @method bool getTransferTag()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class SubmitTransferApply extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListGroupAutomationRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setContainedOssUrl($containedOssUrl)
 * @method bool getContainedOssUrl()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryThingConfigPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class QueryFirmwareVerifyInfo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class QueryDeviceListByDeviceGroup extends Request
{

}/**
 * @method $this setAutomationRuleIds($automationRuleIds)
 * @method string getAutomationRuleIds()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class BatchGetGroupAutomationRuleRelRuleStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class EnableThingBiz extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class GetAppSecret extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method int getType()
 */
class QueryEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setEventId($eventId)
 * @method int getEventId()
 * @method $this setEventType($eventType)
 * @method int getEventType()
 * @method $this setEventName($eventName)
 * @method string getEventName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOutputData($outputData)
 * @method string getOutputData()
 * @method $this setConfigCode($configCode)
 * @method string getConfigCode()
 * @method $this setExtendConfig($extendConfig)
 * @method string getExtendConfig()
 */
class UpdateProductStdEvent extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class OpenRegisterDevice extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class OpenQueryProductList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method string getApplyId()
 */
class BatchCreateDeviceWithApplyIdPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 */
class QueryProductService extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProductTag($productTag)
 * @method array getProductTag()
 */
class UpdateProductTags extends Request
{

}/**
 * @method $this setServiceCodeList($serviceCodeList)
 * @method array getServiceCodeList()
 */
class GetUserBusinessEnabledStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStreamGuIds($streamGuIds)
 * @method string getStreamGuIds()
 */
class BatchGetEdgeInstanceStreamStatus extends Request
{

}/**
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 * @method $this setDeclareType($declareType)
 * @method string getDeclareType()
 * @method $this setModelCode($modelCode)
 * @method string getModelCode()
 */
class DeleteAppServiceModelDeclare extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setName($name)
 * @method string getName()
 */
class GetEdgeInstanceByName extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class RelateProduct extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setScriptContent($scriptContent)
 * @method string getScriptContent()
 * @method $this setScriptType($scriptType)
 * @method string getScriptType()
 * @method $this setScriptCode($scriptCode)
 * @method string getScriptCode()
 * @method $this setOssUrl($ossUrl)
 * @method string getOssUrl()
 */
class UpdateScriptDraftPop extends Request
{

}/**
 * @method $this setDataAssetUid($dataAssetUid)
 * @method string getDataAssetUid()
 */
class DeleteDataAsset extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListGroupStream extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setExclusionServe($exclusionServe)
 * @method array getExclusionServe()
 */
class QueryAvailableServeList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTemplate($template)
 * @method int getTemplate()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setTemplateIdentifier($templateIdentifier)
 * @method string getTemplateIdentifier()
 * @method $this setCategoryKey($categoryKey)
 * @method string getCategoryKey()
 * @method $this setCategoryName($categoryName)
 * @method string getCategoryName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class ReleaseProduct extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class DisableAutomationRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 */
class ListRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceInfo($deviceInfo)
 * @method array getDeviceInfo()
 */
class SubmitNodesAddingTask extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setLogStore($logStore)
 * @method string getLogStore()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setTtl($ttl)
 * @method int getTtl()
 * @method $this setLogLevel($logLevel)
 * @method string getLogLevel()
 */
class CreateEdgeInstanceSls extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class DisableThingPop extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class GetSystemSourceTableListV2 extends Request
{

}/**
 * @method $this setPlanId($planId)
 * @method string getPlanId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class UpdateRecordPlan extends Request
{

}/**
 * @method $this setSourceUid($sourceUid)
 * @method string getSourceUid()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 */
class GetSourceOverviewData extends Request
{

}/**
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class InitializeAppImageRepoPassword extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceListByAuthProduct extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setName($name)
 * @method string getName()
 */
class IsOperable extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setapplyId($applyId)
 * @method int getapplyId()
 */
class OpenBatchRegisterDeviceWithApplyId extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setMethod($method)
 * @method string getMethod()
 * @method $this setPlatform($platform)
 * @method string getPlatform()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setParams($params)
 * @method string getParams()
 */
class LpPortalAccessService extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class ListProductTag extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceNames($deviceNames)
 * @method string getDeviceNames()
 */
class ApplyBatchCreateDeviceWithName extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class GetGroup extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setSceneName($sceneName)
 * @method string getSceneName()
 */
class CopyBIMScene extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class ListGroupProduct extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setDeviceType($deviceType)
 * @method string getDeviceType()
 */
class UnbindDeviceFromGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDevicePropertyStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDataType($dataType)
 * @method int getDataType()
 * @method $this setRwFlag($rwFlag)
 * @method int getRwFlag()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setDataSpecs($dataSpecs)
 * @method string getDataSpecs()
 * @method $this setDataSpecsList($dataSpecsList)
 * @method string getDataSpecsList()
 */
class CreateCustomPropertyPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setAbilityType($abilityType)
 * @method int getAbilityType()
 * @method $this setAbilityId($abilityId)
 * @method int getAbilityId()
 */
class DeleteAbilityPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRuleIds($ruleIds)
 * @method string getRuleIds()
 */
class BatchGetEdgeInstanceAutomationRule extends Request
{

}/**
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setId2($id2)
 * @method string getId2()
 * @method $this setAuthCode($authCode)
 * @method string getAuthCode()
 * @method $this setExtra($extra)
 * @method string getExtra()
 */
class VerifyEdgeNodeId2 extends Request
{

}/**
 * @method $this setServiceCode($serviceCode)
 * @method string getServiceCode()
 * @method $this setConsumer($consumer)
 * @method string getConsumer()
 * @method $this setConsumeVersion($consumeVersion)
 * @method string getConsumeVersion()
 */
class DescribeAppServiceDependency extends Request
{

}/**
 * @method $this setTimeFrame($timeFrame)
 * @method int getTimeFrame()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setIotInfos($iotInfos)
 * @method string getIotInfos()
 */
class GetDeviceEventsForBim extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class PushThingConfigPop extends Request
{

}/**
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class GetEdgeNodeBootstrapScript extends Request
{

}/**
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAppImageRepos extends Request
{

}/**
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class GetDeviceStatusForBim extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProductTagKey($productTagKey)
 * @method array getProductTagKey()
 */
class DeleteProductTags extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setEventId($eventId)
 * @method int getEventId()
 * @method $this setEventType($eventType)
 * @method int getEventType()
 * @method $this setEventName($eventName)
 * @method string getEventName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOutputData($outputData)
 * @method string getOutputData()
 */
class UpdateEventPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setEventType($eventType)
 * @method int getEventType()
 * @method $this setEventName($eventName)
 * @method string getEventName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOutputData($outputData)
 * @method string getOutputData()
 */
class CreateCustomEventPop extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setAppConfigVersionUuid($appConfigVersionUuid)
 * @method string getAppConfigVersionUuid()
 */
class UpgradeApp extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 */
class QueryEdgeDisplayedTab extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class CancelEdgeInstanceDeployment extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setRouteId($routeId)
 * @method int getRouteId()
 */
class DeleteGroupMessageRoute extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 */
class ValidateLaUser extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setItems($items)
 * @method string getItems()
 */
class SetDeviceProperty extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setFileStoreId($fileStoreId)
 * @method int getFileStoreId()
 */
class DeleteDeviceFileStore extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceEventDataPop extends Request
{

}/**
 * @method $this setBindSceneDTO($bindSceneDTO)
 * @method string getBindSceneDTO()
 */
class SaveScene extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setSql($sql)
 * @method string getSql()
 * @method $this setComponents($components)
 * @method string getComponents()
 * @method $this setParams($params)
 * @method string getParams()
 */
class UpdateTaskDetail extends Request
{

}/**
 * @method $this setConfigUuid($configUuid)
 * @method string getConfigUuid()
 * @method $this setVersionName($versionName)
 * @method string getVersionName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setNodeImageList($nodeImageList)
 * @method array getNodeImageList()
 */
class SaveImageUpgradeConfigVersion extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setQos($qos)
 * @method int getQos()
 * @method $this setTopicFullName($topicFullName)
 * @method string getTopicFullName()
 * @method $this setMessageContent($messageContent)
 * @method string getMessageContent()
 */
class Pub extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setActive($active)
 * @method int getActive()
 */
class QueryDeviceBatchInfo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setEventId($eventId)
 * @method int getEventId()
 * @method $this setEventType($eventType)
 * @method int getEventType()
 * @method $this setEventName($eventName)
 * @method string getEventName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOutputData($outputData)
 * @method string getOutputData()
 * @method $this setExtendConfig($extendConfig)
 * @method string getExtendConfig()
 * @method $this setConfigCode($configCode)
 * @method string getConfigCode()
 */
class UpdateEvent extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class GetAppOperatingInfo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class DisableThing extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class StartDeviceDebug extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setServiceIdList($serviceIdList)
 * @method array getServiceIdList()
 */
class AuthorizeAppkeyInvoke extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class DeleteDevice extends Request
{

}/**
 * @method $this setRoleNameList($roleNameList)
 * @method array getRoleNameList()
 */
class GetHaveRoleStatus extends Request
{

}/**
 * @method $this setModelId($modelId)
 * @method string getModelId()
 * @method $this setConditions($conditions)
 * @method string getConditions()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setModelVersion($modelVersion)
 * @method string getModelVersion()
 * @method $this setClearScope($clearScope)
 * @method bool getClearScope()
 */
class DeleteAppInstanceData extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setStreamGuId($streamGuId)
 * @method string getStreamGuId()
 */
class UnbindStreamFromGroup extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setFunctions($functions)
 * @method string getFunctions()
 */
class BatchGetGroupFunctionStatus extends Request
{

}/**
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class UpdateAppImageRepoPassword extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class UnbindRoleFromGroup extends Request
{

}/**
 * @method $this setFolderId($folderId)
 * @method string getFolderId()
 */
class TryToDeleteJobFolderIfNecessarily extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setUploadType($uploadType)
 * @method string getUploadType()
 */
class GenerateOpcUaUploadUrl extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class DeleteAppKey extends Request
{

}/**
 * @method $this setData($data)
 * @method array getData()
 */
class CreateAppAuthorization extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class BatchRegisterDeviceWithNamesPop extends Request
{

}/**
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryDevicePictureLifeCycle extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class ListAppProvideService extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class DisableThingBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setScriptId($scriptId)
 * @method int getScriptId()
 */
class GetScriptPop extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 */
class GetAppPodInfo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class ListCategory extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setPodName($podName)
 * @method string getPodName()
 * @method $this setContainer($container)
 * @method string getContainer()
 * @method $this setTailLines($tailLines)
 * @method int getTailLines()
 */
class GetPodContainerLog extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setFunctionName($functionName)
 * @method string getFunctionName()
 * @method $this setRunMode($runMode)
 * @method string getRunMode()
 * @method $this setFcRegionId($fcRegionId)
 * @method string getFcRegionId()
 * @method $this setMemorySize($memorySize)
 * @method int getMemorySize()
 * @method $this setTimeout($timeout)
 * @method int getTimeout()
 * @method $this setTriggerContent($triggerContent)
 * @method string getTriggerContent()
 */
class BindFunctionToEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setScriptCode($scriptCode)
 * @method string getScriptCode()
 */
class DeleteScriptDraftPop extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setRouteId($routeId)
 * @method int getRouteId()
 */
class GetGroupMessageRoute extends Request
{

}/**
 * @method $this setStreamType($streamType)
 * @method int getStreamType()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setRecordType($recordType)
 * @method int getRecordType()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryRecord extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class OpenQueryDeviceServiceData extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class ListServerCallbacks extends Request
{

}/**
 * @method $this setAppConfigId($appConfigId)
 * @method string getAppConfigId()
 * @method $this setPublishStatus($publishStatus)
 * @method string getPublishStatus()
 * @method $this setVersionName($versionName)
 * @method string getVersionName()
 * @method $this setVersionDescription($versionDescription)
 * @method string getVersionDescription()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setPath($path)
 * @method string getPath()
 */
class UpdateAppConfigPublishStatus extends Request
{

}/**
 * @method $this setJobUid($jobUid)
 * @method string getJobUid()
 * @method $this setScheduleConfiguration($scheduleConfiguration)
 * @method string getScheduleConfiguration()
 */
class SetSchedulerConfig extends Request
{

}/**
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 * @method $this setDeclareType($declareType)
 * @method string getDeclareType()
 * @method $this setServiceModel($serviceModel)
 * @method string getServiceModel()
 */
class ModifyAppServiceModelDeclare extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class GetDomainNameConfig extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class ResetGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setItems($items)
 * @method string getItems()
 * @method $this setVersions($versions)
 * @method string getVersions()
 */
class SetDeviceDesiredProperty extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class StopRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setTraceId($traceId)
 * @method string getTraceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class QueryDetailAutomationRuleLog extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setEdgeFunctionId($edgeFunctionId)
 * @method string getEdgeFunctionId()
 */
class UnbindFunctionFromGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryDeviceEventDataBiz extends Request
{

}/**
 * @method $this setFolderId($folderId)
 * @method string getFolderId()
 */
class DeleteJobFolder extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTagKeys($tagKeys)
 * @method array getTagKeys()
 */
class BatchDeleteProductTag extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setDevEui($devEui)
 * @method string getDevEui()
 * @method $this setPinCode($pinCode)
 * @method string getPinCode()
 * @method $this setNickname($nickname)
 * @method string getNickname()
 */
class RegisterDevice extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class QueryHitsInstanceForRule extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class GetAppServiceInfo extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setModelId($modelId)
 * @method string getModelId()
 * @method $this setModelName($modelName)
 * @method string getModelName()
 * @method $this setModelVersion($modelVersion)
 * @method string getModelVersion()
 * @method $this setConditions($conditions)
 * @method string getConditions()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryAppInstanceData extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceEventData extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setType($type)
 * @method string getType()
 */
class SetThingFunctionSwitchStatus extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setStreamGuIds($streamGuIds)
 * @method string getStreamGuIds()
 */
class BatchGetGroupStreamStatus extends Request
{

}/**
 * @method $this setRequestIdX($requestIdX)
 * @method string getRequestIdX()
 */
class GetQueryJobExecLog extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetFuncDocsDetail extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDriverId($driverId)
 * @method string getDriverId()
 */
class GetDriver extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setOsType($osType)
 * @method int getOsType()
 * @method $this setProtocolType($protocolType)
 * @method int getProtocolType()
 * @method $this setLanguageType($languageType)
 * @method int getLanguageType()
 */
class QueryQuickStartSdk extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setStreamGuId($streamGuId)
 * @method string getStreamGuId()
 */
class BindStreamToGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 */
class QueryTableStoreInstancesForRule extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 */
class DeleteDataSource extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setSuperGroupId($superGroupId)
 * @method string getSuperGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class QueryDeviceGroupTree extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class BindGatewayToEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setSuperGroupId($superGroupId)
 * @method string getSuperGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setGroupDesc($groupDesc)
 * @method string getGroupDesc()
 */
class CreateDeviceGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 */
class RamAuth extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryDeviceProp extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class DisableEdgeInstanceAutomationRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class QueryMqTopicsForRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setInputParams($inputParams)
 * @method string getInputParams()
 * @method $this setOutputParams($outputParams)
 * @method string getOutputParams()
 * @method $this setCallType($callType)
 * @method int getCallType()
 * @method $this setExtendConfig($extendConfig)
 * @method string getExtendConfig()
 * @method $this setConfigCode($configCode)
 * @method string getConfigCode()
 */
class UpdateService extends Request
{

}/**
 * @method $this setDriverTemplateName($driverTemplateName)
 * @method string getDriverTemplateName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setRuntime($runtime)
 * @method string getRuntime()
 */
class CreateDriverTemplate extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceNicknameInfo($deviceNicknameInfo)
 * @method array getDeviceNicknameInfo()
 */
class BatchUpdateDeviceNickname extends Request
{

}/**
 * @method $this setAsyncRequestId($asyncRequestId)
 * @method string getAsyncRequestId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class AsyncExecuteQueryJobForDownload extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryDeviceTopic extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryEdgeInstanceProduct extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setDevices($devices)
 * @method string getDevices()
 */
class BatchGetGroupDeviceStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 */
class QueryFcServicesForRule extends Request
{

}/**
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setAsyncExecution($asyncExecution)
 * @method bool getAsyncExecution()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class SyncExecQueryJob extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryEdgeInstanceDevice extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setActionId($actionId)
 * @method int getActionId()
 */
class DeleteRuleAction extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class QueryRdsInstancePageForRule extends Request
{

}/**
 * @method $this setSceneDTO($sceneDTO)
 * @method string getSceneDTO()
 */
class InitScene extends Request
{

}/**
 * @method $this setEventId($eventId)
 * @method string getEventId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryDeviceEventPicture extends Request
{

}/**
 * @method $this setFolderId($folderId)
 * @method string getFolderId()
 * @method $this setNewFolderName($newFolderName)
 * @method string getNewFolderName()
 */
class RenameJobFolder extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setMetrics($metrics)
 * @method array getMetrics()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class QueryAppMonitorMetric extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 */
class QueryTableStorePrimaryKeysForRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPropertyId($propertyId)
 * @method array getPropertyId()
 * @method $this setServiceId($serviceId)
 * @method array getServiceId()
 * @method $this setEventId($eventId)
 * @method array getEventId()
 */
class BatchAddStdAbility extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setSort($sort)
 * @method string getSort()
 */
class QueryWebAppsList extends Request
{

}/**
 * @method $this setDeploymentRecordUuid($deploymentRecordUuid)
 * @method string getDeploymentRecordUuid()
 */
class DeleteAppDeployment extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class EnableAutomationRule extends Request
{

}/**
 * @method $this setUuid($uuid)
 * @method string getUuid()
 */
class GetAppConfigDetail extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 */
class DescribeRegions extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class QuerySummaryAutomationRuleLog extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryAllDeviceListByAuthProduct extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setItems($items)
 * @method string getItems()
 */
class SetDevicesProperty extends Request
{

}/**
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 */
class PublishGeoProject extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class OpenQueryDeviceStatistics extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class PublishScene extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setSql($sql)
 * @method string getSql()
 * @method $this setComponents($components)
 * @method string getComponents()
 * @method $this setParams($params)
 * @method string getParams()
 * @method $this setEnv($env)
 * @method string getEnv()
 * @method $this setGmtCreate($gmtCreate)
 * @method string getGmtCreate()
 * @method $this setGmtModified($gmtModified)
 * @method string getGmtModified()
 */
class CreateTask extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method int getType()
 */
class ListGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DeleteDeviceGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPropertyInfoList($propertyInfoList)
 * @method array getPropertyInfoList()
 */
class BatchDeleteCustomProperty extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setServerName($serverName)
 * @method string getServerName()
 * @method $this setContent($content)
 * @method string getContent()
 */
class UpdateGatewayServerConfig extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateProject extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setVersionParamKey($versionParamKey)
 * @method string getVersionParamKey()
 * @method $this setCpuArch($cpuArch)
 * @method string getCpuArch()
 * @method $this setSpecification($specification)
 * @method string getSpecification()
 * @method $this setVersionCode($versionCode)
 * @method string getVersionCode()
 * @method $this setOS($oS)
 * @method string getOS()
 */
class QueryEdgeVersionParams extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setAllDay($allDay)
 * @method int getAllDay()
 * @method $this setTimeSections($timeSections)
 * @method array getTimeSections()
 */
class UpdateTimeTemplate extends Request
{

}/**
 */
class GetPortalJsUrlsConfigForBIM extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryDebugOnlineLog extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class OpenQueryBatchRegisterDeviceStatus extends Request
{

}/**
 * @method $this setJobId($jobId)
 * @method string getJobId()
 * @method $this setNewJobName($newJobName)
 * @method string getNewJobName()
 */
class RenameQueryJob extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class GetSystemSourceTableList extends Request
{

}/**
 * @method $this setAbilityType($abilityType)
 * @method string getAbilityType()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class GetProductAbilityTableList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryDevicePropertyStatusBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCpuArch($cpuArch)
 * @method string getCpuArch()
 * @method $this setSpecification($specification)
 * @method string getSpecification()
 * @method $this setVersionCode($versionCode)
 * @method string getVersionCode()
 * @method $this setOS($oS)
 * @method string getOS()
 */
class QueryEdgeInstanceVersions extends Request
{

}/**
 * @method $this setApplicationAuthorizationUuid($applicationAuthorizationUuid)
 * @method string getApplicationAuthorizationUuid()
 */
class CancelAppAuthorization extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setThingMethod($thingMethod)
 * @method string getThingMethod()
 * @method $this setArgs($args)
 * @method string getArgs()
 */
class OpenInvokeThingService extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class QueryEdgeInstanceGateway extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class DeleteDevicePop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setSubDeviceName($subDeviceName)
 * @method string getSubDeviceName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QuerySubDeviceList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setFunctions($functions)
 * @method string getFunctions()
 */
class BatchGetEdgeInstanceFunctionStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class GetScriptGenerate extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryProduct extends Request
{

}/**
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetQueryJob extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCount($count)
 * @method int getCount()
 */
class BatchRegisterDevicePop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGwProductKey($gwProductKey)
 * @method string getGwProductKey()
 * @method $this setGwDeviceName($gwDeviceName)
 * @method string getGwDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryChildDeviceConfig extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryAllProductList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setActivationCode($activationCode)
 * @method array getActivationCode()
 */
class CreateActivationCodeOrder extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class QueryBatchCheckDeviceNamesStatus extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class GetAppInitEnvDetail extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProductTag($productTag)
 * @method array getProductTag()
 */
class CreateProductTags extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setAbilityType($abilityType)
 * @method int getAbilityType()
 * @method $this setDeviceType($deviceType)
 * @method string getDeviceType()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 */
class QueryStdAbilityInfo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTslUrl($tslUrl)
 * @method string getTslUrl()
 */
class ImportTslFromOss extends Request
{

}/**
 * @method $this setAppConfigId($appConfigId)
 * @method string getAppConfigId()
 */
class GetServiceNameAndPort extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setDeviceType($deviceType)
 * @method string getDeviceType()
 */
class BindDeviceToGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTopic($topic)
 * @method string getTopic()
 */
class QueryTopicReverseRouteTable extends Request
{

}/**
 * @method $this setJobUid($jobUid)
 * @method string getJobUid()
 * @method $this setScheduleConfiguration($scheduleConfiguration)
 * @method string getScheduleConfiguration()
 */
class SetSchedulerStatus extends Request
{

}/**
 * @method $this setAppConfigId($appConfigId)
 * @method string getAppConfigId()
 * @method $this setPosition($position)
 * @method string getPosition()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setNodeList($nodeList)
 * @method array getNodeList()
 * @method $this setNodeRelation($nodeRelation)
 * @method array getNodeRelation()
 * @method $this setPropertyList($propertyList)
 * @method array getPropertyList()
 * @method $this setOwnerOs($ownerOs)
 * @method string getOwnerOs()
 */
class SaveAppConfig extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryProductTopic extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCallType($callType)
 * @method int getCallType()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setInputParams($inputParams)
 * @method string getInputParams()
 * @method $this setOutputParams($outputParams)
 * @method string getOutputParams()
 * @method $this setExtendConfig($extendConfig)
 * @method string getExtendConfig()
 */
class CreateCustomService extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class QueryBatchCreateDeviceStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDeployId($deployId)
 * @method string getDeployId()
 */
class QueryEdgeInstanceDeployment extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method string getApplyId()
 */
class BatchCreateDeviceWithApplyId extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method array getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDevicePropertiesData extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class QueryStrategyByFirName extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryChannelDeviceList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class StartRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCount($count)
 * @method int getCount()
 */
class OpenBatchRegisterDevice extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryReducedTsl extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setAttributeCode($attributeCode)
 * @method string getAttributeCode()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceAttrData extends Request
{

}/**
 * @method $this setAppConfigId($appConfigId)
 * @method string getAppConfigId()
 */
class DeleteAppConfig extends Request
{

}/**
 * @method $this setDriverTemplateId($driverTemplateId)
 * @method string getDriverTemplateId()
 */
class GetDriverTemplate extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryVersionsByPk extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTargetAliyunPk($targetAliyunPk)
 * @method string getTargetAliyunPk()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAuthType($authType)
 * @method int getAuthType()
 */
class QueryAuthorizeProductPage extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDevicePropertyStatusPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class GetCloudMonitorNode extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class QuerySuperDeviceGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDataType($dataType)
 * @method int getDataType()
 * @method $this setRwFlag($rwFlag)
 * @method int getRwFlag()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setDataSpecs($dataSpecs)
 * @method string getDataSpecs()
 * @method $this setDataSpecsList($dataSpecsList)
 * @method string getDataSpecsList()
 * @method $this setExtendConfig($extendConfig)
 * @method string getExtendConfig()
 */
class CreateCustomProperty extends Request
{

}/**
 * @method $this setStartDay($startDay)
 * @method int getStartDay()
 * @method $this setSustainDays($sustainDays)
 * @method int getSustainDays()
 * @method $this setTopCount($topCount)
 * @method int getTopCount()
 */
class QueryMeasureTop extends Request
{

}/**
 * @method $this setDisplayName($displayName)
 * @method string getDisplayName()
 * @method $this setDataAssetUid($dataAssetUid)
 * @method string getDataAssetUid()
 * @method $this setDataAssetName($dataAssetName)
 * @method string getDataAssetName()
 * @method $this setDataAssetType($dataAssetType)
 * @method string getDataAssetType()
 * @method $this setStartHoldingTime($startHoldingTime)
 * @method int getStartHoldingTime()
 * @method $this setHoldingCycleValue($holdingCycleValue)
 * @method int getHoldingCycleValue()
 * @method $this setHoldingCycleUnits($holdingCycleUnits)
 * @method string getHoldingCycleUnits()
 */
class ApplyDataAsset extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setSysCode($sysCode)
 * @method string getSysCode()
 */
class GetShareInfo extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setAppConfigId($appConfigId)
 * @method string getAppConfigId()
 * @method $this setFrequenceUnit($frequenceUnit)
 * @method string getFrequenceUnit()
 * @method $this setFrequence($frequence)
 * @method int getFrequence()
 * @method $this setDeviceNumber($deviceNumber)
 * @method int getDeviceNumber()
 * @method $this setTargetType($targetType)
 * @method string getTargetType()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetName($targetName)
 * @method string getTargetName()
 * @method $this setPropertyPostRuleList($propertyPostRuleList)
 * @method string getPropertyPostRuleList()
 * @method $this setEventPostRuleList($eventPostRuleList)
 * @method string getEventPostRuleList()
 * @method $this setDeviceTagList($deviceTagList)
 * @method array getDeviceTagList()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTaged($taged)
 * @method bool getTaged()
 */
class SaveAppVirtualDeviceConfig extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPropertyId($propertyId)
 * @method int getPropertyId()
 * @method $this setDataType($dataType)
 * @method int getDataType()
 * @method $this setRwFlag($rwFlag)
 * @method int getRwFlag()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDataSpecs($dataSpecs)
 * @method string getDataSpecs()
 * @method $this setDataSpecsList($dataSpecsList)
 * @method string getDataSpecsList()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setDefinition($definition)
 * @method string getDefinition()
 * @method $this setExtendConfig($extendConfig)
 * @method string getExtendConfig()
 * @method $this setConfigCode($configCode)
 * @method string getConfigCode()
 */
class UpdateProperty extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setType($type)
 * @method string getType()
 */
class SetThingFunctionSwitchStatusPop extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setDriverTemplateId($driverTemplateId)
 * @method string getDriverTemplateId()
 * @method $this setDriverId($driverId)
 * @method string getDriverId()
 * @method $this setMemory($memory)
 * @method int getMemory()
 */
class BindDriverToGroup extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class UnregisterAppService extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setFunctionType($functionType)
 * @method string getFunctionType()
 * @method $this setFunctionCode($functionCode)
 * @method string getFunctionCode()
 * @method $this setArgs($args)
 * @method string getArgs()
 * @method $this setEnvironment($environment)
 * @method string getEnvironment()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class DebugAbility extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 */
class QueryFcFunctionsForRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class CreateEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 * @method $this setContainedOssUrl($containedOssUrl)
 * @method bool getContainedOssUrl()
 */
class QueryConfigByConfigId extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setScriptName($scriptName)
 * @method string getScriptName()
 * @method $this setScriptContent($scriptContent)
 * @method string getScriptContent()
 * @method $this setScriptType($scriptType)
 * @method string getScriptType()
 */
class CreateScriptPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFrom($from)
 * @method int getFrom()
 * @method $this setTo($to)
 * @method int getTo()
 * @method $this setKeyWords($keyWords)
 * @method string getKeyWords()
 * @method $this setBizcode($bizcode)
 * @method string getBizcode()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setMessageId($messageId)
 * @method string getMessageId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryLogPage extends Request
{

}/**
 * @method $this setRepoName($repoName)
 * @method string getRepoName()
 */
class GetAppImageRepo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class GetGatewayBySubDevice extends Request
{

}/**
 * @method $this setConfigureUuid($configureUuid)
 * @method string getConfigureUuid()
 */
class PublishImageUpgradeConfigVersion extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setType($type)
 * @method string getType()
 */
class CreateOssUploadAddress extends Request
{

}/**
 */
class GetFuncDocsTree extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class ListProductStdAbility extends Request
{

}/**
 * @method $this setMcAddress($mcAddress)
 * @method string getMcAddress()
 * @method $this setMulticastMessage($multicastMessage)
 * @method string getMulticastMessage()
 */
class MulticastMessagePop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setScriptContent($scriptContent)
 * @method string getScriptContent()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setScriptType($scriptType)
 * @method string getScriptType()
 */
class RunScript extends Request
{

}/**
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setRegisterAppType($registerAppType)
 * @method int getRegisterAppType()
 */
class CreateAppKey extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QuerySecureUpgradePublicKey extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryAlinkTopicList extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setName($name)
 * @method string getName()
 */
class ListDriverTemplate extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setScriptId($scriptId)
 * @method int getScriptId()
 */
class GetScript extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DeleteEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class FinishVerifyTask extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetEdgeInstanceSls extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class ListGroupDevice extends Request
{

}/**
 * @method $this setAbilityType($abilityType)
 * @method string getAbilityType()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class RefreshProductAbilityTableTree extends Request
{

}/**
 * @method $this setProductKeyList($productKeyList)
 * @method array getProductKeyList()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGwProductKey($gwProductKey)
 * @method string getGwProductKey()
 * @method $this setGwDeviceName($gwDeviceName)
 * @method string getGwDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setServerId($serverId)
 * @method string getServerId()
 * @method $this setConfigJson($configJson)
 * @method string getConfigJson()
 */
class CreateChildDevice extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 */
class GenerateOssUriForTsl extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 */
class QueryMqRegionsForRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setNodeType($nodeType)
 * @method int getNodeType()
 * @method $this setDataFormat($dataFormat)
 * @method int getDataFormat()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setId2($id2)
 * @method bool getId2()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 * @method $this setProtocolType($protocolType)
 * @method string getProtocolType()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class CreateProductBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setScriptName($scriptName)
 * @method string getScriptName()
 * @method $this setScriptContent($scriptContent)
 * @method string getScriptContent()
 * @method $this setScriptType($scriptType)
 * @method string getScriptType()
 */
class CreateScript extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDevicePropertyDataPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class QueryBatchCreateDeviceStatusPop extends Request
{

}/**
 * @method $this setStreamType($streamType)
 * @method int getStreamType()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryRecordPlanByDevice extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setId($id)
 * @method int getId()
 */
class ListSqlTaskView extends Request
{

}/**
 * @method $this setAsyncRequestId($asyncRequestId)
 * @method string getAsyncRequestId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DownloadAsyncDatasetContentFile extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setDriverId($driverId)
 * @method string getDriverId()
 */
class UpdateDeviceConfig extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class GetScriptGenerateStatus extends Request
{

}/**
 * @method $this setIotIdList($iotIdList)
 * @method array getIotIdList()
 */
class ActiveDevice extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 */
class QueryAppResourceConfig extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDevices($devices)
 * @method string getDevices()
 */
class BatchGetEdgeInstanceDeviceStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setParams($params)
 * @method string getParams()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class VerifyThingAuthentication extends Request
{

}/**
 * @method $this setServiceCode($serviceCode)
 * @method string getServiceCode()
 * @method $this setConsumer($consumer)
 * @method string getConsumer()
 * @method $this setConsumeVersion($consumeVersion)
 * @method string getConsumeVersion()
 * @method $this setProvider($provider)
 * @method string getProvider()
 * @method $this setProviderType($providerType)
 * @method string getProviderType()
 * @method $this setProvideVersion($provideVersion)
 * @method string getProvideVersion()
 */
class CreateAppServiceDependency extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setRuleContent($ruleContent)
 * @method string getRuleContent()
 * @method $this setRuleDescription($ruleDescription)
 * @method string getRuleDescription()
 */
class CreateAutomationRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCategoryType($categoryType)
 * @method string getCategoryType()
 * @method $this setName($name)
 * @method string getName()
 */
class ListOtherCategoryStdAbilityByName extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class ListAuthorizedPhoneNum extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 */
class SetLinkPlatformServiceOpen extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setType($type)
 * @method string getType()
 */
class QueryRulengSysTopics extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setCode($code)
 * @method string getCode()
 */
class DeleteGatewayServerConfig extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 */
class BindRoleToGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDeviceDetail extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method string getApplyId()
 */
class QueryBatchCreateDeviceDetailPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDevice($device)
 * @method array getDevice()
 */
class BatchAddDeviceGroupRelations extends Request
{

}/**
 * @method $this setEventType($eventType)
 * @method int getEventType()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryDeviceEvent extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPropName($propName)
 * @method string getPropName()
 */
class GetDeviceProp extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryProductBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class DeleteFirmware extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class GetUserSourceTableList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDriverId($driverId)
 * @method string getDriverId()
 */
class DeleteDriver extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFunctionId($functionId)
 * @method string getFunctionId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class QueryEdgeInstanceByFunction extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setStatisticalType($statisticalType)
 * @method string getStatisticalType()
 * @method $this setComparisonCondition($comparisonCondition)
 * @method string getComparisonCondition()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setComparisonValue($comparisonValue)
 * @method string getComparisonValue()
 * @method $this setComparisonModel($comparisonModel)
 * @method string getComparisonModel()
 * @method $this setContactGroups($contactGroups)
 * @method array getContactGroups()
 * @method $this setEvaluationCount($evaluationCount)
 * @method int getEvaluationCount()
 */
class CreateAppAlarm extends Request
{

}/**
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAppConfigId($appConfigId)
 * @method string getAppConfigId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setCloned($cloned)
 * @method bool getCloned()
 * @method $this setLpRelated($lpRelated)
 * @method int getLpRelated()
 * @method $this setNeedPublishing($needPublishing)
 * @method bool getNeedPublishing()
 * @method $this setAllVersionsRequired($allVersionsRequired)
 * @method bool getAllVersionsRequired()
 */
class GetAppConfigList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPropertyInfoList($propertyInfoList)
 * @method array getPropertyInfoList()
 */
class BatchUpdateCustomProperty extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class QueryDeviceUpgradeCount extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTagString($tagString)
 * @method string getTagString()
 */
class UpdateProductTagForProtal extends Request
{

}/**
 * @method $this setStreamType($streamType)
 * @method int getStreamType()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class StopLiveStreaming extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class QueryFirmwareList extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class GenerateBIMOssUploadUri extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 */
class QueryProductList extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setEndPoint($endPoint)
 * @method string getEndPoint()
 * @method $this setAccessId($accessId)
 * @method string getAccessId()
 * @method $this setAccessKey($accessKey)
 * @method string getAccessKey()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class CheckDataSourceValid extends Request
{

}/**
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class UpdateEdgeNode extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class ListAppServiceGroup extends Request
{

}/**
 * @method $this setDataModelId($dataModelId)
 * @method string getDataModelId()
 * @method $this setDataModelVersion($dataModelVersion)
 * @method string getDataModelVersion()
 */
class QueryAppDataModelDetail extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setFileId($fileId)
 * @method string getFileId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryDeviceFile extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setSuperGroupId($superGroupId)
 * @method string getSuperGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceGroupList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 */
class QueryProductPropertyPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setNodeType($nodeType)
 * @method int getNodeType()
 * @method $this setDataFormat($dataFormat)
 * @method int getDataFormat()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setId2($id2)
 * @method bool getId2()
 * @method $this setPayType($payType)
 * @method int getPayType()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 */
class CreateProductPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setTagString($tagString)
 * @method string getTagString()
 */
class SetDeviceGroupTags extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductTag($productTag)
 * @method array getProductTag()
 */
class ListProductByTags extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class QueryEdgeInstanceLatestDeployment extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class GetScriptGeneratePop extends Request
{

}/**
 * @method $this setServiceIds($serviceIds)
 * @method string getServiceIds()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class GrantApiServices extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class OpenQueryDeviceEventData extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class SetDynamicRegisterSwitch extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupDesc($groupDesc)
 * @method string getGroupDesc()
 */
class UpdateDeviceGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryDevicePropertyDataBiz extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class IniAppDebugEnv extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setDriverId($driverId)
 * @method string getDriverId()
 */
class GetGroupDriver extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 * @method $this setTagKey($tagKey)
 * @method string getTagKey()
 * @method $this setTagValue($tagValue)
 * @method string getTagValue()
 */
class UpdateProductTag extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCategoryType($categoryType)
 * @method string getCategoryType()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class ListCategoryStdAbility extends Request
{

}/**
 * @method $this setDeploymentUuid($deploymentUuid)
 * @method string getDeploymentUuid()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAppDeploymentMessage extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class QueryEdgeInstanceHistoricDeployment extends Request
{

}/**
 * @method $this setPlanId($planId)
 * @method string getPlanId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setEventTypes($eventTypes)
 * @method string getEventTypes()
 * @method $this setPreRecordDuration($preRecordDuration)
 * @method int getPreRecordDuration()
 * @method $this setRecordDuration($recordDuration)
 * @method int getRecordDuration()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class UpdateEventRecordPlan extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setOutputJson($outputJson)
 * @method string getOutputJson()
 * @method $this setOutputBase64($outputBase64)
 * @method string getOutputBase64()
 */
class PostDeviceEvents extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class RetryDiff extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setMnsConfiguration($mnsConfiguration)
 * @method string getMnsConfiguration()
 * @method $this setCallbackType($callbackType)
 * @method int getCallbackType()
 */
class SaveServerCallback extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInput($input)
 * @method string getInput()
 * @method $this setScriptContent($scriptContent)
 * @method string getScriptContent()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setScriptType($scriptType)
 * @method string getScriptType()
 */
class RunScriptPop extends Request
{

}/**
 * @method $this setData($data)
 * @method array getData()
 */
class CreateAppDeviceAuthorization extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryProductPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 */
class QueryRuleForwardCloudRegion extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setDevicePropJson($devicePropJson)
 * @method string getDevicePropJson()
 */
class QuickStart extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class UpdateLdpApp extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTopicFilter($topicFilter)
 * @method string getTopicFilter()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setSourceData($sourceData)
 * @method string getSourceData()
 * @method $this setTargetType($targetType)
 * @method string getTargetType()
 * @method $this setTargetData($targetData)
 * @method string getTargetData()
 * @method $this setTargetIotHubQos($targetIotHubQos)
 * @method int getTargetIotHubQos()
 */
class CreateEdgeInstanceMessageRoute extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class QueryBatchRegisterDeviceStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setScriptName($scriptName)
 * @method string getScriptName()
 * @method $this setScriptContent($scriptContent)
 * @method string getScriptContent()
 * @method $this setScriptType($scriptType)
 * @method string getScriptType()
 */
class UpdateScriptPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDeviceAttrStatusPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setAttributeCode($attributeCode)
 * @method string getAttributeCode()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceAttrDataPop extends Request
{

}/**
 * @method $this setStreamType($streamType)
 * @method int getStreamType()
 * @method $this setPreRecordDuration($preRecordDuration)
 * @method int getPreRecordDuration()
 * @method $this setRecordDuration($recordDuration)
 * @method int getRecordDuration()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class TriggerRecord extends Request
{

}/**
 * @method $this setRepoName($repoName)
 * @method string getRepoName()
 */
class DeleteAppImageRepo extends Request
{

}/**
 * @method $this setItems($items)
 * @method string getItems()
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class SetGeoDeviceProperty extends Request
{

}/**
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class DeleteAppAlarm extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class CancelTransferApply extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 * @method $this setIotId($iotId)
 * @method array getIotId()
 */
class BatchGetDeviceState extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTopicFullName($topicFullName)
 * @method string getTopicFullName()
 * @method $this setMessageContent($messageContent)
 * @method string getMessageContent()
 */
class PubBroadcast extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setSrcProductKey($srcProductKey)
 * @method string getSrcProductKey()
 * @method $this setTargetProductKey($targetProductKey)
 * @method string getTargetProductKey()
 */
class CopyProductAbility extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class OpenQueryDevicePropertyStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setConfigName($configName)
 * @method string getConfigName()
 * @method $this setConfigContent($configContent)
 * @method string getConfigContent()
 * @method $this setSignMethod($signMethod)
 * @method string getSignMethod()
 * @method $this setConfigFormat($configFormat)
 * @method string getConfigFormat()
 */
class AddThingConfigPop extends Request
{

}/**
 * @method $this setAutomationRuleIds($automationRuleIds)
 * @method string getAutomationRuleIds()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class BatchGetGroupAutomationRuleDeviceStatus extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryRecordPlans extends Request
{

}/**
 * @method $this setJobName($jobName)
 * @method string getJobName()
 * @method $this setSqlStatement($sqlStatement)
 * @method string getSqlStatement()
 * @method $this setFolderId($folderId)
 * @method string getFolderId()
 * @method $this setServiceRank($serviceRank)
 * @method string getServiceRank()
 */
class CreateQueryJobBySQL extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 * @method $this setAttributeCode($attributeCode)
 * @method string getAttributeCode()
 * @method $this setProductKeyList($productKeyList)
 * @method string getProductKeyList()
 */
class QueryDevicePropertyByGroupPage extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setAlinkJson($alinkJson)
 * @method string getAlinkJson()
 * @method $this setType($type)
 * @method int getType()
 */
class CheckAlinkProtocolPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setCode($code)
 * @method string getCode()
 */
class QueryGatewayServerConfig extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class ListProductCustomAbility extends Request
{

}/**
 * @method $this setRepoName($repoName)
 * @method string getRepoName()
 * @method $this setSummary($summary)
 * @method string getSummary()
 * @method $this setDetail($detail)
 * @method string getDetail()
 */
class CreateAppImageRepo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDiffTask extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setGwProductKey($gwProductKey)
 * @method string getGwProductKey()
 * @method $this setGwDeviceName($gwDeviceName)
 * @method string getGwDeviceName()
 */
class CheckAndRemoveTopo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setName($name)
 * @method string getName()
 */
class QueryAllProductListPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setType($type)
 * @method string getType()
 */
class QueryThingFunctionSwitch extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setDriverId($driverId)
 * @method string getDriverId()
 */
class UnbindDriverFromGroup extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRouteId($routeId)
 * @method int getRouteId()
 */
class GetEdgeInstanceMessageRoute extends Request
{

}/**
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 */
class DeleteGeoProject extends Request
{

}/**
 * @method $this setFormType($formType)
 * @method int getFormType()
 * @method $this setFieldKey($fieldKey)
 * @method string getFieldKey()
 * @method $this setFieldValue($fieldValue)
 * @method string getFieldValue()
 */
class SignApp extends Request
{

}/**
 * @method $this setGeoProjectName($geoProjectName)
 * @method string getGeoProjectName()
 * @method $this setGroupMethod($groupMethod)
 * @method string getGroupMethod()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setMapConfig($mapConfig)
 * @method string getMapConfig()
 */
class CreateGeoProject extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class QueryDevice extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setFunctionName($functionName)
 * @method string getFunctionName()
 */
class ListGroupFunction extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class ListRuleActions extends Request
{

}/**
 * @method $this setRequestVersion($requestVersion)
 * @method string getRequestVersion()
 */
class GetPortalDescImage extends Request
{

}/**
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setStatisticalType($statisticalType)
 * @method string getStatisticalType()
 * @method $this setComparisonCondition($comparisonCondition)
 * @method string getComparisonCondition()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setComparisonValue($comparisonValue)
 * @method string getComparisonValue()
 * @method $this setComparisonModel($comparisonModel)
 * @method string getComparisonModel()
 * @method $this setContactGroups($contactGroups)
 * @method array getContactGroups()
 * @method $this setEvaluationCount($evaluationCount)
 * @method int getEvaluationCount()
 */
class UpdateAppAlarm extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 */
class QueryJoinPermissions extends Request
{

}/**
 * @method $this setDeviceType($deviceType)
 * @method string getDeviceType()
 */
class QueryAppUnifyProperty extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method string getApplyId()
 */
class QueryBatchCreateDeviceDetail extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setJunior($junior)
 * @method int getJunior()
 * @method $this setProductName($productName)
 * @method string getProductName()
 */
class GetAvailableProductList extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class GetGroupGateway extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setEndPoint($endPoint)
 * @method string getEndPoint()
 * @method $this setAccessId($accessId)
 * @method string getAccessId()
 * @method $this setAccessKey($accessKey)
 * @method string getAccessKey()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDataSourcePK($dataSourcePK)
 * @method int getDataSourcePK()
 */
class CheckDataSourceValidV2 extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 */
class QueryStandardUnit extends Request
{

}/**
 * @method $this setIdList($idList)
 * @method string getIdList()
 * @method $this setNameList($nameList)
 * @method string getNameList()
 * @method $this setSearch($search)
 * @method string getSearch()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setOrder($order)
 * @method string getOrder()
 */
class GetDataSourceList extends Request
{

}/**
 * @method $this setStartDay($startDay)
 * @method int getStartDay()
 * @method $this setSustainDays($sustainDays)
 * @method int getSustainDays()
 */
class QueryMeasureList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryEdgeInstanceAutomationRule extends Request
{

}/**
 * @method $this setDeviceEvents($deviceEvents)
 * @method string getDeviceEvents()
 */
class UpdateGeoDeviceEvent extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPropertyId($propertyId)
 * @method int getPropertyId()
 * @method $this setDataType($dataType)
 * @method int getDataType()
 * @method $this setRwFlag($rwFlag)
 * @method int getRwFlag()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDataSpecs($dataSpecs)
 * @method string getDataSpecs()
 * @method $this setDataSpecsList($dataSpecsList)
 * @method string getDataSpecsList()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setDefinition($definition)
 * @method string getDefinition()
 * @method $this setConfigCode($configCode)
 * @method string getConfigCode()
 * @method $this setExtendConfig($extendConfig)
 * @method string getExtendConfig()
 */
class UpdateProductStdProperty extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceListStr($deviceListStr)
 * @method string getDeviceListStr()
 * @method $this setGwIotId($gwIotId)
 * @method string getGwIotId()
 * @method $this setGwProductKey($gwProductKey)
 * @method string getGwProductKey()
 * @method $this setGwDeviceName($gwDeviceName)
 * @method string getGwDeviceName()
 */
class NotifyAddThingTopo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTopicShortName($topicShortName)
 * @method string getTopicShortName()
 * @method $this setOperation($operation)
 * @method string getOperation()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class CreateProductTopicBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class OpenQueryDeviceDetail extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method array getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class BatchDeleteDevice extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class GetEdgeInstanceByGateway extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setNodeName($nodeName)
 * @method string getNodeName()
 * @method $this setContext($context)
 * @method string getContext()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class CreateEdgeNode extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class QueryHitsInstancePageForRule extends Request
{

}/**
 * @method $this setAppConfigId($appConfigId)
 * @method string getAppConfigId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setPropertyList($propertyList)
 * @method array getPropertyList()
 */
class SaveAppNodeProperty extends Request
{

}/**
 * @method $this setDay($day)
 * @method int getDay()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class SetDevicePictureLifeCycle extends Request
{

}/**
 * @method $this setType($type)
 * @method string getType()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDeploymentName($deploymentName)
 * @method string getDeploymentName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setDeployed($deployed)
 * @method string getDeployed()
 * @method $this setLpRelatedNotIn($lpRelatedNotIn)
 * @method int getLpRelatedNotIn()
 * @method $this setMultiStatus($multiStatus)
 * @method array getMultiStatus()
 */
class ListApp extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setSql($sql)
 * @method string getSql()
 * @method $this setJsonInfo($jsonInfo)
 * @method string getJsonInfo()
 */
class DebugRuleSql extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGwProductKey($gwProductKey)
 * @method string getGwProductKey()
 * @method $this setGwDeviceName($gwDeviceName)
 * @method string getGwDeviceName()
 * @method $this setExt($ext)
 * @method string getExt()
 * @method $this setTopoAddItem($topoAddItem)
 * @method array getTopoAddItem()
 */
class BatchAddThingTopo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class UnbindAutomationRuleFromEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTopic($topic)
 * @method string getTopic()
 */
class QueryTopicRouteTable extends Request
{

}/**
 * @method $this setSourceId($sourceId)
 * @method int getSourceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDesc($desc)
 * @method string getDesc()
 */
class CloneTask extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCallType($callType)
 * @method int getCallType()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setInputParams($inputParams)
 * @method string getInputParams()
 * @method $this setOutputParams($outputParams)
 * @method string getOutputParams()
 */
class CreateCustomServicePop extends Request
{

}/**
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeywords($keywords)
 * @method string getKeywords()
 */
class QueryEdgeClusterList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryDeviceDetailBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class GetDslPop extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class GetBindSceneInfo extends Request
{

}/**
 * @method $this setDeviceAuthorizationUuid($deviceAuthorizationUuid)
 * @method string getDeviceAuthorizationUuid()
 */
class CancelAppDeviceAuthorization extends Request
{

}/**
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 */
class QueryGeoProject extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class DeleteScene extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateLdpApp extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setSelect($select)
 * @method string getSelect()
 * @method $this setShortTopic($shortTopic)
 * @method string getShortTopic()
 * @method $this setWhere($where)
 * @method string getWhere()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRuleDesc($ruleDesc)
 * @method string getRuleDesc()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setTopicType($topicType)
 * @method int getTopicType()
 */
class CreateRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceByTags extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class EnableEdgeInstanceAutomationRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setDeviceType($deviceType)
 * @method string getDeviceType()
 */
class UnbindDeviceFromEdgeInstance extends Request
{

}/**
 * @method $this setAsyncRequestId($asyncRequestId)
 * @method string getAsyncRequestId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetAsyncQueryJobRequestStatus extends Request
{

}/**
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class GetAppNodePropertyList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class OpenGetDeviceStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setTopicName($topicName)
 * @method string getTopicName()
 */
class QueryDataHubSchemasForRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setAliyunPk($aliyunPk)
 * @method string getAliyunPk()
 * @method $this setTargetAliyunPk($targetAliyunPk)
 * @method string getTargetAliyunPk()
 */
class QueryAliyunUserInfo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class ListProductServeData extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 */
class PublishTask extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class QueryHitsSecurityIpForRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 */
class DeviceUpgradeCount extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryDynamicRegisterSwitch extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryDeviceVersionCountByPk extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setInputParams($inputParams)
 * @method string getInputParams()
 * @method $this setOutputParams($outputParams)
 * @method string getOutputParams()
 * @method $this setCallType($callType)
 * @method int getCallType()
 */
class UpdateServicePop extends Request
{

}/**
 * @method $this setPlanId($planId)
 * @method string getPlanId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryEventRecordPlanDevices extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class UnbindGatewayFromEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class GetEdgeInstanceDriverDebugResponse extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class RemoveThingTopoBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class DeleteProductTopicBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 * @method $this setProductKeyList($productKeyList)
 * @method string getProductKeyList()
 */
class QueryDeviceLocationByGroupPage extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setDbInstanceId($dbInstanceId)
 * @method string getDbInstanceId()
 */
class QueryRdsDatabasesForRule extends Request
{

}/**
 * @method $this setNewGeoProjectName($newGeoProjectName)
 * @method string getNewGeoProjectName()
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 */
class ChangeGeoProjectName extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 */
class QueryProductServicePop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setContainedOssUrl($containedOssUrl)
 * @method bool getContainedOssUrl()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryThingConfig extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class DeleteProductPop extends Request
{

}/**
 * @method $this setApiCode($apiCode)
 * @method string getApiCode()
 * @method $this setApiVersion($apiVersion)
 * @method string getApiVersion()
 */
class DescribeAppServiceApiDetail extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryServerCallback extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class BindGatewayToGroup extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 */
class DelAppVirtualDeviceConfig extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleIds($ruleIds)
 * @method string getRuleIds()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class BatchGetEdgeInstanceAutomationRuleRelRuleStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setcurrentPage($currentPage)
 * @method int getcurrentPage()
 * @method $this setpageSize($pageSize)
 * @method int getpageSize()
 */
class QueryReceivedTransferApplyList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStreamGuId($streamGuId)
 * @method string getStreamGuId()
 */
class UnbindStreamFromEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 */
class QueryProductEventPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setThingIdTagsList($thingIdTagsList)
 * @method array getThingIdTagsList()
 */
class BatchDeleteThingTags extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSrcTopic($srcTopic)
 * @method string getSrcTopic()
 * @method $this setDstTopic($dstTopic)
 * @method array getDstTopic()
 */
class DeleteTopicRouteTable extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListDeviceFileStores extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setScriptName($scriptName)
 * @method string getScriptName()
 * @method $this setScriptContent($scriptContent)
 * @method string getScriptContent()
 * @method $this setScriptType($scriptType)
 * @method string getScriptType()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 * @method $this setScriptCode($scriptCode)
 * @method string getScriptCode()
 */
class UpdateScript extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryEdgeInstanceMessageRoute extends Request
{

}/**
 * @method $this setAppConfigId($appConfigId)
 * @method string getAppConfigId()
 */
class QueryAppVirtualDeviceConfig extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class QueryAutomationRule extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setDeviceEvents($deviceEvents)
 * @method string getDeviceEvents()
 */
class UpdateDeviceEventsForBim extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setDbInstanceId($dbInstanceId)
 * @method string getDbInstanceId()
 */
class QueryRdsAccountsForRule extends Request
{

}/**
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryRecordUrl extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTslStr($tslStr)
 * @method string getTslStr()
 */
class ImportTsl extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setExpireInterval($expireInterval)
 * @method int getExpireInterval()
 */
class EnableOperationIngress extends Request
{

}/**
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class DeleteEdgeNode extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setEventType($eventType)
 * @method int getEventType()
 * @method $this setEventName($eventName)
 * @method string getEventName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOutputData($outputData)
 * @method string getOutputData()
 * @method $this setExtendConfig($extendConfig)
 * @method string getExtendConfig()
 */
class CreateCustomEvent extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class QueryDeviceGroupInfo extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryEventRecordPlans extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDeviceDetailPop extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDeviceGroupId($deviceGroupId)
 * @method string getDeviceGroupId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 * @method $this setProductAttributesMap($productAttributesMap)
 * @method string getProductAttributesMap()
 */
class QueryGeoDevicePropertyByPage extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setLogStore($logStore)
 * @method string getLogStore()
 * @method $this setQuery($query)
 * @method string getQuery()
 */
class GetEdgeInstanceLogs extends Request
{

}/**
 * @method $this setRepoName($repoName)
 * @method string getRepoName()
 * @method $this setTag($tag)
 * @method string getTag()
 */
class DeleteAppRepoTag extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class RejectTransfer extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setScriptContent($scriptContent)
 * @method string getScriptContent()
 * @method $this setScriptType($scriptType)
 * @method string getScriptType()
 * @method $this setOssUrl($ossUrl)
 * @method string getOssUrl()
 */
class CreateScriptDraftPop extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setFunctionName($functionName)
 * @method string getFunctionName()
 */
class QueryEdgeInstanceFunction extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryGeoDeviceProperty extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ResetEdgeInstanceDeployments extends Request
{

}/**
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setAsyncExecution($asyncExecution)
 * @method bool getAsyncExecution()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 * @method $this setDraftSql($draftSql)
 * @method string getDraftSql()
 */
class SyncExecDraftSQL extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setPageNo($pageNo)
 * @method string getPageNo()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class QueryAppAlarmList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setPropertyJson($propertyJson)
 * @method string getPropertyJson()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDelay($delay)
 * @method int getDelay()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setCount($count)
 * @method int getCount()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 * @method $this setPropertyBase64($propertyBase64)
 * @method string getPropertyBase64()
 */
class PostDevicePropertiesRegularly extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setFileId($fileId)
 * @method string getFileId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class DeleteDeviceFile extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class BatchCheckDeviceNames extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setScriptContent($scriptContent)
 * @method string getScriptContent()
 * @method $this setScriptType($scriptType)
 * @method string getScriptType()
 * @method $this setScriptCode($scriptCode)
 * @method string getScriptCode()
 * @method $this setOssUrl($ossUrl)
 * @method string getOssUrl()
 */
class UpdateScriptDraft extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class GetRemoteDebugToken extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 */
class GetAppPermissionList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 */
class QueryDataHubProjectsForRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryProductTopicBiz extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class ReleaseAppDebugEnv extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDevicePropertyData extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDevicePagePop extends Request
{

}/**
 * @method $this setStartDay($startDay)
 * @method int getStartDay()
 * @method $this setSustainDays($sustainDays)
 * @method int getSustainDays()
 */
class QueryMeasureSummary extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTimeout($timeout)
 * @method int getTimeout()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setTopic($topic)
 * @method string getTopic()
 * @method $this setRequestBase64Byte($requestBase64Byte)
 * @method string getRequestBase64Byte()
 */
class RRpc extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 */
class CheckCloudProductOpenStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDeviceDebugStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 */
class QueryHitsRegionsForRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class OpenDeleteDevice extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setConfigName($configName)
 * @method string getConfigName()
 * @method $this setPayload($payload)
 * @method string getPayload()
 */
class DeployCustomConfigToEdgeInstance extends Request
{

}/**
 * @method $this setRepoName($repoName)
 * @method string getRepoName()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAppRepoTags extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class DeleteProductBiz extends Request
{

}/**
 * @method $this setDriverTemplateId($driverTemplateId)
 * @method string getDriverTemplateId()
 */
class DeleteDriverTemplate extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryEdgeInstanceDeviceByName extends Request
{

}/**
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class ModifyDeviceStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 */
class QueryTableStoreTablesForRule extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTagString($tagString)
 * @method string getTagString()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class BatchForceUpdateProductTag extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setFunctionId($functionId)
 * @method string getFunctionId()
 */
class UnbindFunctionFromEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class PushDeviceConfig extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryEdgeInstanceDeployDetail extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class RegisterDevicePop extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setViewName($viewName)
 * @method string getViewName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceList($deviceList)
 * @method string getDeviceList()
 * @method $this setId($id)
 * @method int getId()
 */
class UpdateSqlTaskView extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 */
class GetDataSource extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class OpenDisableThing extends Request
{

}/**
 * @method $this setLifeCycle($lifeCycle)
 * @method int getLifeCycle()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class SetDeviceStorageLifeCycle extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSrcTopic($srcTopic)
 * @method string getSrcTopic()
 * @method $this setDstTopic($dstTopic)
 * @method array getDstTopic()
 */
class CreateTopicRouteTable extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryProductAbilityList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDeviceUsedCapacity extends Request
{

}/**
 * @method $this setFolderName($folderName)
 * @method string getFolderName()
 * @method $this setParentFolderId($parentFolderId)
 * @method string getParentFolderId()
 */
class CreateJobFolder extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setEndPoint($endPoint)
 * @method string getEndPoint()
 * @method $this setAccessId($accessId)
 * @method string getAccessId()
 * @method $this setAccessKey($accessKey)
 * @method string getAccessKey()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setGmtCreate($gmtCreate)
 * @method string getGmtCreate()
 * @method $this setGmtModified($gmtModified)
 * @method string getGmtModified()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSourceUid($sourceUid)
 * @method string getSourceUid()
 */
class UpdateDataSource extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFirmware($firmware)
 * @method array getFirmware()
 */
class BatchUpdateFirmware extends Request
{

}/**
 * @method $this setDataAssetId($dataAssetId)
 * @method string getDataAssetId()
 * @method $this setHoldingCycleValue($holdingCycleValue)
 * @method int getHoldingCycleValue()
 * @method $this setHoldingCycleUnits($holdingCycleUnits)
 * @method string getHoldingCycleUnits()
 */
class UpdateDataAsset extends Request
{

}/**
 * @method $this setNum($num)
 * @method int getNum()
 */
class BuyLinkFaceLicenseToBusiness extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTags($tags)
 * @method string getTags()
 */
class UpdateEdgeInstance extends Request
{

}/**
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 * @method $this setPortType($portType)
 * @method string getPortType()
 */
class ListProviderServicePorts extends Request
{

}/**
 * @method $this setDriverIds($driverIds)
 * @method string getDriverIds()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class BatchGetDriverStatus extends Request
{

}/**
 * @method $this setMapConfig($mapConfig)
 * @method string getMapConfig()
 * @method $this setGeoProjectId($geoProjectId)
 * @method string getGeoProjectId()
 */
class SaveMapConfig extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setAutomationRuleIds($automationRuleIds)
 * @method string getAutomationRuleIds()
 */
class BatchGetGroupAutomationRuleStatus extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class ListAllCategory extends Request
{

}/**
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setConfigUuid($configUuid)
 * @method string getConfigUuid()
 * @method $this setConfigVersionUuid($configVersionUuid)
 * @method string getConfigVersionUuid()
 */
class ListConfigNodeImage extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class GetGatewayBySubDeviceBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class PushThingConfig extends Request
{

}/**
 * @method $this setType($type)
 * @method string getType()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDeploymentName($deploymentName)
 * @method string getDeploymentName()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class ListAppDeploymentRecord extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setArgs($args)
 * @method string getArgs()
 */
class InvokeThingsService extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTagString($tagString)
 * @method string getTagString()
 */
class BatchUpdateProductTag extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method string getAppKey()
 * @method $this setAliyunPk($aliyunPk)
 * @method string getAliyunPk()
 */
class CreateAppInstance extends Request
{

}/**
 * @method $this setConsumer($consumer)
 * @method string getConsumer()
 * @method $this setApiCode($apiCode)
 * @method string getApiCode()
 * @method $this setApiVersion($apiVersion)
 * @method string getApiVersion()
 * @method $this setParameter($parameter)
 * @method string getParameter()
 */
class DebugAppProvideService extends Request
{

}/**
 * @method $this setAliyunPK($aliyunPK)
 * @method string getAliyunPK()
 */
class GetAppSignContent extends Request
{

}/**
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 * @method $this setDeclareType($declareType)
 * @method string getDeclareType()
 * @method $this setModelName($modelName)
 * @method string getModelName()
 * @method $this setModelCode($modelCode)
 * @method string getModelCode()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAppServiceModel extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class DeleteSqlTaskView extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class QueryBatchApplyDeviceList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class BindDeviceToEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProtocol4ChildDevice($protocol4ChildDevice)
 * @method string getProtocol4ChildDevice()
 * @method $this setServerName($serverName)
 * @method string getServerName()
 */
class ListGatewayServerConfig extends Request
{

}/**
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 */
class ListAppKey extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setName($name)
 * @method string getName()
 */
class DisableOperationIngress extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setName($name)
 * @method string getName()
 */
class GetOperationIngress extends Request
{

}/**
 * @method $this setIdList($idList)
 * @method string getIdList()
 * @method $this setNameList($nameList)
 * @method string getNameList()
 * @method $this setSearch($search)
 * @method string getSearch()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setEnv($env)
 * @method string getEnv()
 * @method $this setTaskStatus($taskStatus)
 * @method string getTaskStatus()
 */
class GetTaskList extends Request
{

}/**
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceStatus($deviceStatus)
 * @method string getDeviceStatus()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class SetDeviceStatusForBim extends Request
{

}/**
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setDeviceAuthCode($deviceAuthCode)
 * @method string getDeviceAuthCode()
 */
class GetEdgeNodeId2 extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class UnbindRoleFromEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class ResetProductSecret extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryProductWithScript extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setAbilityType($abilityType)
 * @method int getAbilityType()
 * @method $this setAbilityId($abilityId)
 * @method int getAbilityId()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 */
class DeleteAbility extends Request
{

}/**
 * @method $this setDeploymentRecordUuid($deploymentRecordUuid)
 * @method string getDeploymentRecordUuid()
 * @method $this setNeedDetail($needDetail)
 * @method bool getNeedDetail()
 */
class GetAppDeploymentDetail extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class DoDeviceOnline extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBizTenantId($bizTenantId)
 * @method string getBizTenantId()
 */
class QueryDeviceServiceDataBiz extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setScriptCode($scriptCode)
 * @method string getScriptCode()
 */
class DeleteScriptDraft extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class GetScriptGenerateStatusPop extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setAutomationRuleId($automationRuleId)
 * @method string getAutomationRuleId()
 */
class UnbindAutomationRuleFromGroup extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setPhones($phones)
 * @method string getPhones()
 * @method $this setExpiredTime($expiredTime)
 * @method int getExpiredTime()
 * @method $this setSysCode($sysCode)
 * @method string getSysCode()
 */
class SaveShareInfo extends Request
{

}/**
 */
class GetQueryJobFolderTree extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryDeviceFileList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProtocol4ChildDevice($protocol4ChildDevice)
 * @method string getProtocol4ChildDevice()
 * @method $this setServerName($serverName)
 * @method string getServerName()
 * @method $this setContent($content)
 * @method string getContent()
 */
class CreateGatewayServerConfig extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class QueryEdgeInstanceStatistics extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setDiff($diff)
 * @method bool getDiff()
 * @method $this setSrcFirmwareName($srcFirmwareName)
 * @method array getSrcFirmwareName()
 * @method $this setFireTime($fireTime)
 * @method int getFireTime()
 * @method $this setRetryInterval($retryInterval)
 * @method int getRetryInterval()
 * @method $this setRetryCount($retryCount)
 * @method int getRetryCount()
 */
class BatchDeviceUpgrade extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRouteId($routeId)
 * @method int getRouteId()
 * @method $this setTopicFilter($topicFilter)
 * @method string getTopicFilter()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setSourceData($sourceData)
 * @method string getSourceData()
 * @method $this setTargetType($targetType)
 * @method string getTargetType()
 * @method $this setTargetData($targetData)
 * @method string getTargetData()
 * @method $this setTargetIotHubQos($targetIotHubQos)
 * @method int getTargetIotHubQos()
 */
class UpdateEdgeInstanceMessageRoute extends Request
{

}/**
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 * @method $this setModelCode($modelCode)
 * @method string getModelCode()
 * @method $this setDeclareType($declareType)
 * @method string getDeclareType()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAppServiceModelDeclare extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDeviceAttrStatus extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setEventTypes($eventTypes)
 * @method string getEventTypes()
 * @method $this setPreRecordDuration($preRecordDuration)
 * @method int getPreRecordDuration()
 * @method $this setRecordDuration($recordDuration)
 * @method int getRecordDuration()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class SetEventRecordPlan extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAbilityType($abilityType)
 * @method int getAbilityType()
 * @method $this setName($name)
 * @method string getName()
 */
class ListStdAbility extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method array getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class BatchDeleteDevicePop extends Request
{

}/**
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCategoryName($categoryName)
 * @method string getCategoryName()
 */
class QueryLinkFaceProductInfo extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPropertyId($propertyId)
 * @method int getPropertyId()
 * @method $this setDataType($dataType)
 * @method int getDataType()
 * @method $this setRwFlag($rwFlag)
 * @method int getRwFlag()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setDataSpecs($dataSpecs)
 * @method string getDataSpecs()
 * @method $this setDataSpecsList($dataSpecsList)
 * @method string getDataSpecsList()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setDefinition($definition)
 * @method string getDefinition()
 */
class UpdatePropertyPop extends Request
{

}/**
 * @method $this setDataModelId($dataModelId)
 * @method string getDataModelId()
 * @method $this setDataModelVersion($dataModelVersion)
 * @method string getDataModelVersion()
 */
class QueryAppDataModelAttribute extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class DeleteTimeTemplate extends Request
{

}/**
 * @method $this setDataAssetUid($dataAssetUid)
 * @method string getDataAssetUid()
 * @method $this setDataAssetName($dataAssetName)
 * @method string getDataAssetName()
 * @method $this setDataAssetType($dataAssetType)
 * @method string getDataAssetType()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setOrder($order)
 * @method string getOrder()
 */
class GetDataAssetList extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setProtocol($protocol)
 * @method string getProtocol()
 * @method $this setMethod($method)
 * @method string getMethod()
 * @method $this setCreateInstanceUri($createInstanceUri)
 * @method string getCreateInstanceUri()
 * @method $this setDeleteInstanceUri($deleteInstanceUri)
 * @method string getDeleteInstanceUri()
 * @method $this setGetSsoUrlUri($getSsoUrlUri)
 * @method string getGetSsoUrlUri()
 * @method $this setBindUserDeviceUri($bindUserDeviceUri)
 * @method string getBindUserDeviceUri()
 * @method $this setUnbindUserDeviceUri($unbindUserDeviceUri)
 * @method string getUnbindUserDeviceUri()
 */
class RegisterAppService extends Request
{

}/**
 * @method $this setModelId($modelId)
 * @method string getModelId()
 * @method $this setProperties($properties)
 * @method string getProperties()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setModelVersion($modelVersion)
 * @method string getModelVersion()
 * @method $this setConditions($conditions)
 * @method string getConditions()
 */
class UpdateAppInstanceData extends Request
{

}/**
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryLinkFaceActiveCodeInfo extends Request
{

}/**
 * @method $this setClusterName($clusterName)
 * @method string getClusterName()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setStorageHost($storageHost)
 * @method string getStorageHost()
 * @method $this setStoragePath($storagePath)
 * @method string getStoragePath()
 * @method $this setServiceCidr($serviceCidr)
 * @method string getServiceCidr()
 * @method $this setEnvironmentVars($environmentVars)
 * @method string getEnvironmentVars()
 */
class CreateEdgeCluster extends Request
{

}/**
 * @method $this setDriverTemplateName($driverTemplateName)
 * @method string getDriverTemplateName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setRuntime($runtime)
 * @method string getRuntime()
 * @method $this setDriverTemplateId($driverTemplateId)
 * @method string getDriverTemplateId()
 */
class UpdateDriverTemplate extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setTtl($ttl)
 * @method int getTtl()
 * @method $this setLogLevel($logLevel)
 * @method string getLogLevel()
 */
class UpdateEdgeInstanceSls extends Request
{

}/**
 * @method $this setAppUuid($appUuid)
 * @method string getAppUuid()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 */
class RebootApp extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductKeyList($productKeyList)
 * @method array getProductKeyList()
 * @method $this setCategoryKeyList($categoryKeyList)
 * @method array getCategoryKeyList()
 * @method $this setTagList($tagList)
 * @method array getTagList()
 * @method $this setAppKey($appKey)
 * @method string getAppKey()
 */
class QueryAppDeviceList extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class GetDsl extends Request
{

}/**
 * @method $this setDataSourceId($dataSourceId)
 * @method int getDataSourceId()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 */
class ListTables extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class queryAppBindDeviceList extends Request
{

}/**
 * @method $this setRequestVersion($requestVersion)
 * @method string getRequestVersion()
 */
class GetPortalClasicScenes extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setFirmwareName($firmwareName)
 * @method string getFirmwareName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class ReUpgradeDevices extends Request
{

}/**
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setShouldEncrypt($shouldEncrypt)
 * @method bool getShouldEncrypt()
 * @method $this setEncryptType($encryptType)
 * @method int getEncryptType()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryDeviceFileVod extends Request
{

}/**
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class DeleteBIMScene extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setTimeFrame($timeFrame)
 * @method int getTimeFrame()
 */
class QueryGeoMultiDeviceEventsByPage extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setRoleArn($roleArn)
 * @method string getRoleArn()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class QueryDataHubTopicsForRule extends Request
{

}/**
 * @method $this setProductKeys($productKeys)
 * @method array getProductKeys()
 */
class QueryLinkFaceConsumerByCodes extends Request
{

}/**
 * @method $this setBizKey($bizKey)
 * @method string getBizKey()
 * @method $this setBizType($bizType)
 * @method string getBizType()
 */
class QueryApiPermissionDeclare extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDevices($devices)
 * @method array getDevices()
 */
class BindDevicesToEdgeInstance extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceServiceDataPop extends Request
{

}/**
 * @method $this setMonth($month)
 * @method string getMonth()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryMonthRecord extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfiguration($configuration)
 * @method string getConfiguration()
 * @method $this setErrorActionFlag($errorActionFlag)
 * @method bool getErrorActionFlag()
 */
class CreateRuleAction extends Request
{

}/**
 * @method $this setPlanId($planId)
 * @method string getPlanId()
 */
class DeleteRecordPlan extends Request
{

}/**
 * @method $this setModelId($modelId)
 * @method string getModelId()
 * @method $this setProperties($properties)
 * @method string getProperties()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setModelVersion($modelVersion)
 * @method string getModelVersion()
 */
class AddAppInstanceData extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDevice($device)
 * @method array getDevice()
 */
class BatchDeleteDeviceGroupRelations extends Request
{

}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setBindStatus($bindStatus)
 * @method int getBindStatus()
 */
class QueryDeviceForEdge extends Request
{

}