<?php

namespace aliyun\sdk\services\Vpc20160428;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160428
 *
 * @package aliyun\sdk\services\Vpc20160428
 * @method EnablePhysicalConnection EnablePhysicalConnection()
 * @method DeleteCustomerGateway DeleteCustomerGateway()
 * @method DeleteGlobalAccelerationInstance DeleteGlobalAccelerationInstance()
 * @method DescribeIPv6TranslatorEntries DescribeIPv6TranslatorEntries()
 * @method ModifyCustomerGatewayAttribute ModifyCustomerGatewayAttribute()
 * @method ModifyIPv6TranslatorAclAttribute ModifyIPv6TranslatorAclAttribute()
 * @method DescribeSslVpnClientCert DescribeSslVpnClientCert()
 * @method CreateCustomerGateway CreateCustomerGateway()
 * @method UnassociateGlobalAccelerationInstance UnassociateGlobalAccelerationInstance()
 * @method DescribeVpnRouteEntries DescribeVpnRouteEntries()
 * @method ModifyVpcAttribute ModifyVpcAttribute()
 * @method DisableVpcClassicLink DisableVpcClassicLink()
 * @method RemoveGlobalAccelerationInstanceIp RemoveGlobalAccelerationInstanceIp()
 * @method ModifyFlowLogAttribute ModifyFlowLogAttribute()
 * @method ModifyRouterInterfaceSpec ModifyRouterInterfaceSpec()
 * @method DescribePhysicalConnections DescribePhysicalConnections()
 * @method ModifyGlobalAccelerationInstanceSpec ModifyGlobalAccelerationInstanceSpec()
 * @method ModifyGlobalAccelerationInstanceAttributes ModifyGlobalAccelerationInstanceAttributes()
 * @method ModifyVpnGatewayAttribute ModifyVpnGatewayAttribute()
 * @method ModifyCommonBandwidthPackageIpBandwidth ModifyCommonBandwidthPackageIpBandwidth()
 * @method DeleteVpnRouteEntry DeleteVpnRouteEntry()
 * @method ModifyForwardEntry ModifyForwardEntry()
 * @method CreateIpv6EgressOnlyRule CreateIpv6EgressOnlyRule()
 * @method AddBandwidthPackageIps AddBandwidthPackageIps()
 * @method DeleteVpnConnection DeleteVpnConnection()
 * @method UnassociatePhysicalConnectionFromVirtualBorderRouter UnassociatePhysicalConnectionFromVirtualBorderRouter()
 * @method ActiveFlowLog ActiveFlowLog()
 * @method DeleteExpressConnect DeleteExpressConnect()
 * @method CreateIPv6Translator CreateIPv6Translator()
 * @method ModifySslVpnServer ModifySslVpnServer()
 * @method DescribeIpv6Addresses DescribeIpv6Addresses()
 * @method DeletePhysicalConnection DeletePhysicalConnection()
 * @method DeleteCommonBandwidthPackage DeleteCommonBandwidthPackage()
 * @method DescribeEipMonitorData DescribeEipMonitorData()
 * @method CreateFlowLog CreateFlowLog()
 * @method ModifyCommonBandwidthPackagePayType ModifyCommonBandwidthPackagePayType()
 * @method DescribeVpnConnections DescribeVpnConnections()
 * @method CompletePhysicalConnectionLOA CompletePhysicalConnectionLOA()
 * @method DescribeIpv6GatewayAttribute DescribeIpv6GatewayAttribute()
 * @method CreateIpv6Gateway CreateIpv6Gateway()
 * @method DeleteFlowLog DeleteFlowLog()
 * @method ApplyPhysicalConnectionLOA ApplyPhysicalConnectionLOA()
 * @method AssociateEipAddress AssociateEipAddress()
 * @method ModifyBandwidthPackageSpec ModifyBandwidthPackageSpec()
 * @method DescribeCustomerGateways DescribeCustomerGateways()
 * @method DeactiveFlowLog DeactiveFlowLog()
 * @method ModifyBgpGroupAttribute ModifyBgpGroupAttribute()
 * @method DescribeEipAddresses DescribeEipAddresses()
 * @method ModifyIPv6TranslatorAclListEntry ModifyIPv6TranslatorAclListEntry()
 * @method ModifyVSwitchAttribute ModifyVSwitchAttribute()
 * @method DeleteBandwidthPackage DeleteBandwidthPackage()
 * @method DescribeBandwidthPackages DescribeBandwidthPackages()
 * @method ModifyRouteEntry ModifyRouteEntry()
 * @method DeleteIpv6InternetBandwidth DeleteIpv6InternetBandwidth()
 * @method CreatePhysicalConnectionNew CreatePhysicalConnectionNew()
 * @method ModifyCommonBandwidthPackageAttribute ModifyCommonBandwidthPackageAttribute()
 * @method DescribePhysicalConnectionLOA DescribePhysicalConnectionLOA()
 * @method AddBgpNetwork AddBgpNetwork()
 * @method DescribeNqas DescribeNqas()
 * @method DeactivateRouterInterface DeactivateRouterInterface()
 * @method RemoveCommonBandwidthPackageIp RemoveCommonBandwidthPackageIp()
 * @method CreateCommonBandwidthPackage CreateCommonBandwidthPackage()
 * @method CancelCommonBandwidthPackageIpBandwidth CancelCommonBandwidthPackageIpBandwidth()
 * @method AddCommonBandwidthPackageIp AddCommonBandwidthPackageIp()
 * @method CreateBandwidthPackage CreateBandwidthPackage()
 * @method DescribeCustomerGateway DescribeCustomerGateway()
 * @method CreateSnatEntry CreateSnatEntry()
 * @method CreateBgpGroup CreateBgpGroup()
 * @method DescribeSslVpnServers DescribeSslVpnServers()
 * @method DescribeIpv6EgressOnlyRules DescribeIpv6EgressOnlyRules()
 * @method DescribeBgpNetworks DescribeBgpNetworks()
 * @method DescribeForwardTableEntries DescribeForwardTableEntries()
 * @method DeleteBgpNetwork DeleteBgpNetwork()
 * @method UnassociateEipAddress UnassociateEipAddress()
 * @method AddGlobalAccelerationInstanceIp AddGlobalAccelerationInstanceIp()
 * @method DescribeVpnGateway DescribeVpnGateway()
 * @method DescribeVirtualBorderRouters DescribeVirtualBorderRouters()
 * @method ModifyVpnPbrRouteEntryWeight ModifyVpnPbrRouteEntryWeight()
 * @method DeleteBgpGroup DeleteBgpGroup()
 * @method ModifyRouteTableAttributes ModifyRouteTableAttributes()
 * @method DescribeCommonBandwidthPackages DescribeCommonBandwidthPackages()
 * @method DescribeNatGateways DescribeNatGateways()
 * @method DescribeBgpGroups DescribeBgpGroups()
 * @method DescribeIPv6TranslatorAclListAttributes DescribeIPv6TranslatorAclListAttributes()
 * @method DescribeServerRelatedGlobalAccelerationInstances DescribeServerRelatedGlobalAccelerationInstances()
 * @method CreateVpc CreateVpc()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeVirtualBorderRoutersForPhysicalConnection DescribeVirtualBorderRoutersForPhysicalConnection()
 * @method ModifyIpv6GatewayAttribute ModifyIpv6GatewayAttribute()
 * @method DeleteRouteEntry DeleteRouteEntry()
 * @method CreateNatGateway CreateNatGateway()
 * @method DeleteIPv6Translator DeleteIPv6Translator()
 * @method ConnectRouterInterface ConnectRouterInterface()
 * @method CreatePhysicalConnectionOccupancyOrder CreatePhysicalConnectionOccupancyOrder()
 * @method ModifyRouterInterfaceAttribute ModifyRouterInterfaceAttribute()
 * @method DeleteVpnGateway DeleteVpnGateway()
 * @method UnassociateRouteTable UnassociateRouteTable()
 * @method RevokeInstanceFromCen RevokeInstanceFromCen()
 * @method CreateRouteTable CreateRouteTable()
 * @method ModifyIpv6AddressAttribute ModifyIpv6AddressAttribute()
 * @method DeleteVpc DeleteVpc()
 * @method CreatePhysicalConnectionSetupOrder CreatePhysicalConnectionSetupOrder()
 * @method ModifyVpnConnectionAttribute ModifyVpnConnectionAttribute()
 * @method DescribeHaVips DescribeHaVips()
 * @method ModifySslVpnClientCert ModifySslVpnClientCert()
 * @method ModifyIpv6GatewaySpec ModifyIpv6GatewaySpec()
 * @method AssociateGlobalAccelerationInstance AssociateGlobalAccelerationInstance()
 * @method CreateGlobalAccelerationInstance CreateGlobalAccelerationInstance()
 * @method ModifyPhysicalConnectionAttribute ModifyPhysicalConnectionAttribute()
 * @method DescribeVpnPbrRouteEntries DescribeVpnPbrRouteEntries()
 * @method DescribeSnatTableEntries DescribeSnatTableEntries()
 * @method DeleteVirtualBorderRouter DeleteVirtualBorderRouter()
 * @method DescribeSslVpnClientCerts DescribeSslVpnClientCerts()
 * @method RemoveIPv6TranslatorAclListEntry RemoveIPv6TranslatorAclListEntry()
 * @method ActivateRouterInterface ActivateRouterInterface()
 * @method DescribeVRouters DescribeVRouters()
 * @method CreateIPv6TranslatorEntry CreateIPv6TranslatorEntry()
 * @method ModifyNatGatewaySpec ModifyNatGatewaySpec()
 * @method ModifyVpnRouteEntryWeight ModifyVpnRouteEntryWeight()
 * @method PublishVpnRouteEntry PublishVpnRouteEntry()
 * @method DescribeIPv6Translators DescribeIPv6Translators()
 * @method DescribeVpnGateways DescribeVpnGateways()
 * @method DescribeRouteTableList DescribeRouteTableList()
 * @method CreateForwardEntry CreateForwardEntry()
 * @method DescribePhysicalConnectionOrder DescribePhysicalConnectionOrder()
 * @method ModifyIpv6InternetBandwidth ModifyIpv6InternetBandwidth()
 * @method CreateVpnPbrRouteEntry CreateVpnPbrRouteEntry()
 * @method AssociateRouteTable AssociateRouteTable()
 * @method AllocateEipAddress AllocateEipAddress()
 * @method DescribeZones DescribeZones()
 * @method DescribeGlobalAccelerationInstances DescribeGlobalAccelerationInstances()
 * @method DeleteForwardEntry DeleteForwardEntry()
 * @method DeleteHaVip DeleteHaVip()
 * @method EnableVpcClassicLink EnableVpcClassicLink()
 * @method CreateSslVpnServer CreateSslVpnServer()
 * @method DescribeFlowLogs DescribeFlowLogs()
 * @method CancelPhysicalConnection CancelPhysicalConnection()
 * @method DeleteBgpPeer DeleteBgpPeer()
 * @method ModifyVirtualBorderRouterAttribute ModifyVirtualBorderRouterAttribute()
 * @method DescribeGrantRulesToCen DescribeGrantRulesToCen()
 * @method UnassociateHaVip UnassociateHaVip()
 * @method ModifyCommonBandwidthPackageSpec ModifyCommonBandwidthPackageSpec()
 * @method DescribeVpcs DescribeVpcs()
 * @method DescribeVpnConnection DescribeVpnConnection()
 * @method DeleteSslVpnServer DeleteSslVpnServer()
 * @method CreateBgpPeer CreateBgpPeer()
 * @method DeleteIpv6Gateway DeleteIpv6Gateway()
 * @method CreateVpnRouteEntry CreateVpnRouteEntry()
 * @method DescribeRouteTables DescribeRouteTables()
 * @method TerminatePhysicalConnection TerminatePhysicalConnection()
 * @method DeleteIpv6EgressOnlyRule DeleteIpv6EgressOnlyRule()
 * @method CreateVSwitch CreateVSwitch()
 * @method DeleteVSwitch DeleteVSwitch()
 * @method DownloadVpnConnectionConfig DownloadVpnConnectionConfig()
 * @method ModifySnatEntry ModifySnatEntry()
 * @method AddIPv6TranslatorAclListEntry AddIPv6TranslatorAclListEntry()
 * @method ModifyBandwidthPackageAttribute ModifyBandwidthPackageAttribute()
 * @method DeleteSslVpnClientCert DeleteSslVpnClientCert()
 * @method ConvertBandwidthPackage ConvertBandwidthPackage()
 * @method CreateIPv6TranslatorAclList CreateIPv6TranslatorAclList()
 * @method ModifyHaVipAttribute ModifyHaVipAttribute()
 * @method DescribeVSwitchAttributes DescribeVSwitchAttributes()
 * @method ModifyIPv6TranslatorAttribute ModifyIPv6TranslatorAttribute()
 * @method DescribeAccessPoints DescribeAccessPoints()
 * @method CreatePhysicalConnection CreatePhysicalConnection()
 * @method RecoverVirtualBorderRouter RecoverVirtualBorderRouter()
 * @method ModifyEipAddressAttribute ModifyEipAddressAttribute()
 * @method DescribeBgpPeers DescribeBgpPeers()
 * @method ModifyIPv6TranslatorEntry ModifyIPv6TranslatorEntry()
 * @method ReleaseEipAddress ReleaseEipAddress()
 * @method TerminateVirtualBorderRouter TerminateVirtualBorderRouter()
 * @method DescribeVpcAttribute DescribeVpcAttribute()
 * @method RemoveBandwidthPackageIps RemoveBandwidthPackageIps()
 * @method DeleteRouteTable DeleteRouteTable()
 * @method DeleteIPv6TranslatorEntry DeleteIPv6TranslatorEntry()
 * @method AllocateIpv6InternetBandwidth AllocateIpv6InternetBandwidth()
 * @method DescribeIPv6TranslatorAclLists DescribeIPv6TranslatorAclLists()
 * @method AssociatePhysicalConnectionToVirtualBorderRouter AssociatePhysicalConnectionToVirtualBorderRouter()
 * @method CreateNqa CreateNqa()
 * @method CreateVpnConnection CreateVpnConnection()
 * @method CreateVpnGateway CreateVpnGateway()
 * @method DescribeVSwitches DescribeVSwitches()
 * @method DeleteVpnPbrRouteEntry DeleteVpnPbrRouteEntry()
 * @method DeleteIPv6TranslatorAclList DeleteIPv6TranslatorAclList()
 * @method DeleteNqa DeleteNqa()
 * @method DescribeIpv6Gateways DescribeIpv6Gateways()
 * @method ModifyNqa ModifyNqa()
 * @method AssociateHaVip AssociateHaVip()
 * @method DeleteRouterInterface DeleteRouterInterface()
 * @method CreateSslVpnClientCert CreateSslVpnClientCert()
 * @method DeleteNatGateway DeleteNatGateway()
 * @method CreateHaVip CreateHaVip()
 * @method DeleteSnatEntry DeleteSnatEntry()
 * @method CreateRouteEntry CreateRouteEntry()
 * @method GrantInstanceToCen GrantInstanceToCen()
 * @method ModifyIPv6TranslatorBandwidth ModifyIPv6TranslatorBandwidth()
 * @method DescribeRouterInterfaces DescribeRouterInterfaces()
 * @method ModifyNatGatewayAttribute ModifyNatGatewayAttribute()
 * @method CreateVirtualBorderRouter CreateVirtualBorderRouter()
 * @method CreateRouterInterface CreateRouterInterface()
 * @method ModifyVRouterAttribute ModifyVRouterAttribute()
 */
class V20160428
{
}

/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($physicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class EnablePhysicalConnection extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCustomerGatewayId($customerGatewayId)
 * @method string getCustomerGatewayId()
 */
class DeleteCustomerGateway extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($globalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteGlobalAccelerationInstance extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6TranslatorId($ipv6TranslatorId)
 * @method string getIpv6TranslatorId()
 * @method $this setIpv6TranslatorEntryId($ipv6TranslatorEntryId)
 * @method string getIpv6TranslatorEntryId()
 * @method $this setEntryName($entryName)
 * @method string getEntryName()
 * @method $this setAllocateIpv6Addr($allocateIpv6Addr)
 * @method string getAllocateIpv6Addr()
 * @method $this setAllocateIpv6Port($allocateIpv6Port)
 * @method int getAllocateIpv6Port()
 * @method $this setBackendIpv4Addr($backendIpv4Addr)
 * @method string getBackendIpv4Addr()
 * @method $this setBackendIpv4Port($backendIpv4Port)
 * @method int getBackendIpv4Port()
 * @method $this setTransProtocol($transProtocol)
 * @method string getTransProtocol()
 * @method $this setAclStatus($aclStatus)
 * @method string getAclStatus()
 * @method $this setAclType($aclType)
 * @method string getAclType()
 * @method $this setAclId($aclId)
 * @method string getAclId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class DescribeIPv6TranslatorEntries extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCustomerGatewayId($customerGatewayId)
 * @method string getCustomerGatewayId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyCustomerGatewayAttribute extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setAclId($aclId)
 * @method string getAclId()
 * @method $this setAclName($aclName)
 * @method string getAclName()
 */
class ModifyIPv6TranslatorAclAttribute extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSslVpnClientCertId($sslVpnClientCertId)
 * @method string getSslVpnClientCertId()
 */
class DescribeSslVpnClientCert extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setIpAddress($ipAddress)
 * @method string getIpAddress()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateCustomerGateway extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($globalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInstanceType($instanceType)
 * @method string getInstanceType()
 */
class UnassociateGlobalAccelerationInstance extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeVpnRouteEntries extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setVpcName($vpcName)
 * @method string getVpcName()
 * @method $this setCidrBlock($cidrBlock)
 * @method string getCidrBlock()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEnableIPv6($enableIPv6)
 * @method bool getEnableIPv6()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyVpcAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DisableVpcClassicLink extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($globalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setIpInstanceId($ipInstanceId)
 * @method string getIpInstanceId()
 */
class RemoveGlobalAccelerationInstanceIp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFlowLogId($flowLogId)
 * @method string getFlowLogId()
 * @method $this setFlowLogName($flowLogName)
 * @method string getFlowLogName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyFlowLogAttribute extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouterInterfaceId($routerInterfaceId)
 * @method string getRouterInterfaceId()
 * @method $this setSpec($spec)
 * @method string getSpec()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyRouterInterfaceSpec extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setFilter($filter)
 * @method array getFilter()
 * @method $this setIncludeReservationData($includeReservationData)
 * @method bool getIncludeReservationData()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribePhysicalConnections extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($globalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setBandwidth($bandwidth)
 * @method string getBandwidth()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyGlobalAccelerationInstanceSpec extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($globalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyGlobalAccelerationInstanceAttributes extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyVpnGatewayAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setEipId($eipId)
 * @method string getEipId()
 * @method $this setBandwidth($bandwidth)
 * @method string getBandwidth()
 */
class ModifyCommonBandwidthPackageIpBandwidth extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setRouteDest($routeDest)
 * @method string getRouteDest()
 * @method $this setNextHop($nextHop)
 * @method string getNextHop()
 * @method $this setWeight($weight)
 * @method int getWeight()
 */
class DeleteVpnRouteEntry extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setForwardTableId($forwardTableId)
 * @method string getForwardTableId()
 * @method $this setForwardEntryId($forwardEntryId)
 * @method string getForwardEntryId()
 * @method $this setExternalIp($externalIp)
 * @method string getExternalIp()
 * @method $this setExternalPort($externalPort)
 * @method string getExternalPort()
 * @method $this setInternalIp($internalIp)
 * @method string getInternalIp()
 * @method $this setInternalPort($internalPort)
 * @method string getInternalPort()
 * @method $this setIpProtocol($ipProtocol)
 * @method string getIpProtocol()
 * @method $this setForwardEntryName($forwardEntryName)
 * @method string getForwardEntryName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ModifyForwardEntry extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6GatewayId($ipv6GatewayId)
 * @method string getIpv6GatewayId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstanceType($instanceType)
 * @method string getInstanceType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateIpv6EgressOnlyRule extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setIpCount($ipCount)
 * @method string getIpCount()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class AddBandwidthPackageIps extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setVpnConnectionId($vpnConnectionId)
 * @method string getVpnConnectionId()
 */
class DeleteVpnConnection extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVbrId($vbrId)
 * @method string getVbrId()
 * @method $this setPhysicalConnectionId($physicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UnassociatePhysicalConnectionFromVirtualBorderRouter extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFlowLogId($flowLogId)
 * @method string getFlowLogId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ActiveFlowLog extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouterInterfaceId($routerInterfaceId)
 * @method string getRouterInterfaceId()
 * @method $this setForce($force)
 * @method bool getForce()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteExpressConnect extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setSpec($spec)
 * @method string getSpec()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setBandwidth($bandwidth)
 * @method int getBandwidth()
 */
class CreateIPv6Translator extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSslVpnServerId($sslVpnServerId)
 * @method string getSslVpnServerId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setClientIpPool($clientIpPool)
 * @method string getClientIpPool()
 * @method $this setLocalSubnet($localSubnet)
 * @method string getLocalSubnet()
 * @method $this setProto($proto)
 * @method string getProto()
 * @method $this setCipher($cipher)
 * @method string getCipher()
 * @method $this setPort($port)
 * @method int getPort()
 * @method $this setCompress($compress)
 * @method bool getCompress()
 */
class ModifySslVpnServer extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6AddressId($ipv6AddressId)
 * @method string getIpv6AddressId()
 * @method $this setIpv6Address($ipv6Address)
 * @method string getIpv6Address()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setAssociatedInstanceId($associatedInstanceId)
 * @method string getAssociatedInstanceId()
 * @method $this setAssociatedInstanceType($associatedInstanceType)
 * @method string getAssociatedInstanceType()
 * @method $this setNetworkType($networkType)
 * @method string getNetworkType()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setIpv6InternetBandwidthId($ipv6InternetBandwidthId)
 * @method string getIpv6InternetBandwidthId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeIpv6Addresses extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($physicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setUserCidr($userCidr)
 * @method string getUserCidr()
 */
class DeletePhysicalConnection extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setForce($force)
 * @method string getForce()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 */
class DeleteCommonBandwidthPackage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAllocationId($allocationId)
 * @method string getAllocationId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeEipMonitorData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFlowLogName($flowLogName)
 * @method string getFlowLogName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method string getResourceId()
 * @method $this setTrafficType($trafficType)
 * @method string getTrafficType()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setLogStoreName($logStoreName)
 * @method string getLogStoreName()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateFlowLog extends Request
{

}/**
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBandwidth($bandwidth)
 * @method string getBandwidth()
 * @method $this setKbpsBandwidth($kbpsBandwidth)
 * @method string getKbpsBandwidth()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceBid($resourceBid)
 * @method string getResourceBid()
 * @method $this setResourceUid($resourceUid)
 * @method int getResourceUid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ModifyCommonBandwidthPackagePayType extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setCustomerGatewayId($customerGatewayId)
 * @method string getCustomerGatewayId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setVpnConnectionId($vpnConnectionId)
 * @method string getVpnConnectionId()
 */
class DescribeVpnConnections extends Request
{

}/**
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLineCode($lineCode)
 * @method string getLineCode()
 * @method $this setLineLabel($lineLabel)
 * @method string getLineLabel()
 */
class CompletePhysicalConnectionLOA extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6GatewayId($ipv6GatewayId)
 * @method string getIpv6GatewayId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeIpv6GatewayAttribute extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setSpec($spec)
 * @method string getSpec()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateIpv6Gateway extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFlowLogId($flowLogId)
 * @method string getFlowLogId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteFlowLog extends Request
{

}/**
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidth($bandwidth)
 * @method int getBandwidth()
 * @method $this setPeerLocation($peerLocation)
 * @method string getPeerLocation()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCompanyName($companyName)
 * @method string getCompanyName()
 * @method $this setLineType($lineType)
 * @method string getLineType()
 * @method $this setSi($si)
 * @method string getSi()
 * @method $this setConstructionTime($constructionTime)
 * @method string getConstructionTime()
 * @method $this setPMInfo($pMInfo)
 * @method array getPMInfo()
 */
class ApplyPhysicalConnectionLOA extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAllocationId($allocationId)
 * @method string getAllocationId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInstanceType($instanceType)
 * @method string getInstanceType()
 * @method $this setInstanceRegionId($instanceRegionId)
 * @method string getInstanceRegionId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 */
class AssociateEipAddress extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setBandwidth($bandwidth)
 * @method string getBandwidth()
 */
class ModifyBandwidthPackageSpec extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCustomerGatewayId($customerGatewayId)
 * @method string getCustomerGatewayId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeCustomerGateways extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFlowLogId($flowLogId)
 * @method string getFlowLogId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeactiveFlowLog extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBgpGroupId($bgpGroupId)
 * @method string getBgpGroupId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setPeerAsn($peerAsn)
 * @method int getPeerAsn()
 * @method $this setAuthKey($authKey)
 * @method string getAuthKey()
 * @method $this setIsFakeAsn($isFakeAsn)
 * @method bool getIsFakeAsn()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyBgpGroupAttribute extends Request
{

}/**
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIncludeReservationData($includeReservationData)
 * @method bool getIncludeReservationData()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setEipAddress($eipAddress)
 * @method string getEipAddress()
 * @method $this setAllocationId($allocationId)
 * @method string getAllocationId()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setISP($iSP)
 * @method string getISP()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setFilter_1_Key($filter_1_Key)
 * @method string getFilter_1_Key()
 * @method $this setFilter_2_Key($filter_2_Key)
 * @method string getFilter_2_Key()
 * @method $this setFilter_1_Value($filter_1_Value)
 * @method string getFilter_1_Value()
 * @method $this setFilter_2_Value($filter_2_Value)
 * @method string getFilter_2_Value()
 * @method $this setLockReason($lockReason)
 * @method string getLockReason()
 * @method $this setAssociatedInstanceType($associatedInstanceType)
 * @method string getAssociatedInstanceType()
 * @method $this setAssociatedInstanceId($associatedInstanceId)
 * @method string getAssociatedInstanceId()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 */
class DescribeEipAddresses extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAclId($aclId)
 * @method string getAclId()
 * @method $this setAclEntryId($aclEntryId)
 * @method string getAclEntryId()
 * @method $this setAclEntryComment($aclEntryComment)
 * @method string getAclEntryComment()
 */
class ModifyIPv6TranslatorAclListEntry extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setVSwitchName($vSwitchName)
 * @method string getVSwitchName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setIpv6CidrBlock($ipv6CidrBlock)
 * @method int getIpv6CidrBlock()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyVSwitchAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setForce($force)
 * @method bool getForce()
 */
class DeleteBandwidthPackage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setNatGatewayId($natGatewayId)
 * @method string getNatGatewayId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeBandwidthPackages extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouteEntryName($routeEntryName)
 * @method string getRouteEntryName()
 * @method $this setRouteEntryId($routeEntryId)
 * @method string getRouteEntryId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyRouteEntry extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6AddressId($ipv6AddressId)
 * @method string getIpv6AddressId()
 * @method $this setIpv6InternetBandwidthId($ipv6InternetBandwidthId)
 * @method string getIpv6InternetBandwidthId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteIpv6InternetBandwidth extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAccessPointId($accessPointId)
 * @method string getAccessPointId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setLineOperator($lineOperator)
 * @method string getLineOperator()
 * @method $this setbandwidth($bandwidth)
 * @method int getbandwidth()
 * @method $this setPeerLocation($peerLocation)
 * @method string getPeerLocation()
 * @method $this setPortType($portType)
 * @method string getPortType()
 * @method $this setRedundantPhysicalConnectionId($redundantPhysicalConnectionId)
 * @method string getRedundantPhysicalConnectionId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setCircuitCode($circuitCode)
 * @method string getCircuitCode()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setInterfaceName($interfaceName)
 * @method string getInterfaceName()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreatePhysicalConnectionNew extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyCommonBandwidthPackageAttribute extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribePhysicalConnectionLOA extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDstCidrBlock($dstCidrBlock)
 * @method string getDstCidrBlock()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setRouterId($routerId)
 * @method string getRouterId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AddBgpNetwork extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRouterId($routerId)
 * @method string getRouterId()
 * @method $this setNqaId($nqaId)
 * @method string getNqaId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIsDefault($isDefault)
 * @method bool getIsDefault()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeNqas extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouterInterfaceId($routerInterfaceId)
 * @method string getRouterInterfaceId()
 */
class DeactivateRouterInterface extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setIpInstanceId($ipInstanceId)
 * @method string getIpInstanceId()
 */
class RemoveCommonBandwidthPackageIp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZone($zone)
 * @method string getZone()
 * @method $this setISP($iSP)
 * @method string getISP()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setBandwidth($bandwidth)
 * @method int getBandwidth()
 * @method $this setRatio($ratio)
 * @method int getRatio()
 * @method $this setInternetChargeType($internetChargeType)
 * @method string getInternetChargeType()
 */
class CreateCommonBandwidthPackage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setEipId($eipId)
 * @method string getEipId()
 */
class CancelCommonBandwidthPackageIpBandwidth extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setIpInstanceId($ipInstanceId)
 * @method string getIpInstanceId()
 */
class AddCommonBandwidthPackageIp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNatGatewayId($natGatewayId)
 * @method string getNatGatewayId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setIpCount($ipCount)
 * @method int getIpCount()
 * @method $this setBandwidth($bandwidth)
 * @method int getBandwidth()
 * @method $this setISP($iSP)
 * @method string getISP()
 * @method $this setZone($zone)
 * @method string getZone()
 * @method $this setInternetChargeType($internetChargeType)
 * @method string getInternetChargeType()
 */
class CreateBandwidthPackage extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCustomerGatewayId($customerGatewayId)
 * @method string getCustomerGatewayId()
 */
class DescribeCustomerGateway extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSnatTableId($snatTableId)
 * @method string getSnatTableId()
 * @method $this setSourceVSwitchId($sourceVSwitchId)
 * @method string getSourceVSwitchId()
 * @method $this setSourceCIDR($sourceCIDR)
 * @method string getSourceCIDR()
 * @method $this setSnatIp($snatIp)
 * @method string getSnatIp()
 * @method $this setSnatEntryName($snatEntryName)
 * @method string getSnatEntryName()
 */
class CreateSnatEntry extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouterId($routerId)
 * @method string getRouterId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setPeerAsn($peerAsn)
 * @method int getPeerAsn()
 * @method $this setAuthKey($authKey)
 * @method string getAuthKey()
 * @method $this setIsFakeAsn($isFakeAsn)
 * @method bool getIsFakeAsn()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateBgpGroup extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSslVpnServerId($sslVpnServerId)
 * @method string getSslVpnServerId()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeSslVpnServers extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6GatewayId($ipv6GatewayId)
 * @method string getIpv6GatewayId()
 * @method $this setIpv6EgressOnlyRuleId($ipv6EgressOnlyRuleId)
 * @method string getIpv6EgressOnlyRuleId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setInstanceType($instanceType)
 * @method string getInstanceType()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeIpv6EgressOnlyRules extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRouterId($routerId)
 * @method string getRouterId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeBgpNetworks extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setForwardTableId($forwardTableId)
 * @method string getForwardTableId()
 * @method $this setForwardEntryId($forwardEntryId)
 * @method string getForwardEntryId()
 * @method $this setExternalIp($externalIp)
 * @method string getExternalIp()
 * @method $this setExternalPort($externalPort)
 * @method string getExternalPort()
 * @method $this setInternalIp($internalIp)
 * @method string getInternalIp()
 * @method $this setInternalPort($internalPort)
 * @method string getInternalPort()
 * @method $this setIpProtocol($ipProtocol)
 * @method string getIpProtocol()
 * @method $this setForwardEntryName($forwardEntryName)
 * @method string getForwardEntryName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeForwardTableEntries extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDstCidrBlock($dstCidrBlock)
 * @method string getDstCidrBlock()
 * @method $this setRouterId($routerId)
 * @method string getRouterId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteBgpNetwork extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setForce($force)
 * @method bool getForce()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAllocationId($allocationId)
 * @method string getAllocationId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setInstanceType($instanceType)
 * @method string getInstanceType()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 */
class UnassociateEipAddress extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($globalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setIpInstanceId($ipInstanceId)
 * @method string getIpInstanceId()
 */
class AddGlobalAccelerationInstanceIp extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 */
class DescribeVpnGateway extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setFilter($filter)
 * @method array getFilter()
 */
class DescribeVirtualBorderRouters extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setRouteSource($routeSource)
 * @method string getRouteSource()
 * @method $this setRouteDest($routeDest)
 * @method string getRouteDest()
 * @method $this setNextHop($nextHop)
 * @method string getNextHop()
 * @method $this setWeight($weight)
 * @method int getWeight()
 * @method $this setNewWeight($newWeight)
 * @method int getNewWeight()
 */
class ModifyVpnPbrRouteEntryWeight extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBgpGroupId($bgpGroupId)
 * @method string getBgpGroupId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteBgpGroup extends Request
{

}/**
 * @method $this setRouteTableId($routeTableId)
 * @method string getRouteTableId()
 * @method $this setRouteTableName($routeTableName)
 * @method string getRouteTableName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBandwidth($bandwidth)
 * @method string getBandwidth()
 * @method $this setKbpsBandwidth($kbpsBandwidth)
 * @method string getKbpsBandwidth()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setResourceBid($resourceBid)
 * @method string getResourceBid()
 * @method $this setResourceUid($resourceUid)
 * @method int getResourceUid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ModifyRouteTableAttributes extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setIncludeReservationData($includeReservationData)
 * @method bool getIncludeReservationData()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeCommonBandwidthPackages extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNatGatewayId($natGatewayId)
 * @method string getNatGatewayId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setInstanceChargeType($instanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setSpec($spec)
 * @method string getSpec()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeNatGateways extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRouterId($routerId)
 * @method string getRouterId()
 * @method $this setBgpGroupId($bgpGroupId)
 * @method string getBgpGroupId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIsDefault($isDefault)
 * @method bool getIsDefault()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeBgpGroups extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAclId($aclId)
 * @method string getAclId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeIPv6TranslatorAclListAttributes extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServerId($serverId)
 * @method string getServerId()
 * @method $this setServerType($serverType)
 * @method string getServerType()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeServerRelatedGlobalAccelerationInstances extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCidrBlock($cidrBlock)
 * @method string getCidrBlock()
 * @method $this setIpv6CidrBlock($ipv6CidrBlock)
 * @method string getIpv6CidrBlock()
 * @method $this setEnableIpv6($enableIpv6)
 * @method bool getEnableIpv6()
 * @method $this setVpcName($vpcName)
 * @method string getVpcName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setUserCidr($userCidr)
 * @method string getUserCidr()
 */
class CreateVpc extends Request
{

}/**
 * @method $this setProductType($productType)
 * @method string getProductType()
 * @method $this setAcceptLanguage($acceptLanguage)
 * @method string getAcceptLanguage()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeRegions extends Request
{

}/**
 * @method $this setFilter($filter)
 * @method array getFilter()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($physicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeVirtualBorderRoutersForPhysicalConnection extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6GatewayId($ipv6GatewayId)
 * @method string getIpv6GatewayId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyIpv6GatewayAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouteTableId($routeTableId)
 * @method string getRouteTableId()
 * @method $this setRouteEntryId($routeEntryId)
 * @method string getRouteEntryId()
 * @method $this setDestinationCidrBlock($destinationCidrBlock)
 * @method string getDestinationCidrBlock()
 * @method $this setNextHopId($nextHopId)
 * @method string getNextHopId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setNextHopList($nextHopList)
 * @method array getNextHopList()
 */
class DeleteRouteEntry extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setSpec($spec)
 * @method string getSpec()
 * @method $this setBandwidthPackage($bandwidthPackage)
 * @method array getBandwidthPackage()
 * @method $this setInstanceChargeType($instanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setDuration($duration)
 * @method string getDuration()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 */
class CreateNatGateway extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6TranslatorId($ipv6TranslatorId)
 * @method string getIpv6TranslatorId()
 */
class DeleteIPv6Translator extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouterInterfaceId($routerInterfaceId)
 * @method string getRouterInterfaceId()
 */
class ConnectRouterInterface extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($physicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setInstanceChargeType($instanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreatePhysicalConnectionOccupancyOrder extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouterInterfaceId($routerInterfaceId)
 * @method string getRouterInterfaceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOppositeInterfaceId($oppositeInterfaceId)
 * @method string getOppositeInterfaceId()
 * @method $this setOppositeRouterId($oppositeRouterId)
 * @method string getOppositeRouterId()
 * @method $this setOppositeRouterType($oppositeRouterType)
 * @method string getOppositeRouterType()
 * @method $this setOppositeInterfaceOwnerId($oppositeInterfaceOwnerId)
 * @method int getOppositeInterfaceOwnerId()
 * @method $this setHealthCheckSourceIp($healthCheckSourceIp)
 * @method string getHealthCheckSourceIp()
 * @method $this setHealthCheckTargetIp($healthCheckTargetIp)
 * @method string getHealthCheckTargetIp()
 * @method $this setDeleteHealthCheckIp($deleteHealthCheckIp)
 * @method bool getDeleteHealthCheckIp()
 */
class ModifyRouterInterfaceAttribute extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 */
class DeleteVpnGateway extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouteTableId($routeTableId)
 * @method string getRouteTableId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class UnassociateRouteTable extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstanceType($instanceType)
 * @method string getInstanceType()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setCenOwnerId($cenOwnerId)
 * @method int getCenOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class RevokeInstanceFromCen extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setRouteTableName($routeTableName)
 * @method string getRouteTableName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateRouteTable extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6AddressId($ipv6AddressId)
 * @method string getIpv6AddressId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyIpv6AddressAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteVpc extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAccessPointId($accessPointId)
 * @method string getAccessPointId()
 * @method $this setLineOperator($lineOperator)
 * @method string getLineOperator()
 * @method $this setPortType($portType)
 * @method string getPortType()
 * @method $this setRedundantPhysicalConnectionId($redundantPhysicalConnectionId)
 * @method string getRedundantPhysicalConnectionId()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreatePhysicalConnectionSetupOrder extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setVpnConnectionId($vpnConnectionId)
 * @method string getVpnConnectionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLocalSubnet($localSubnet)
 * @method string getLocalSubnet()
 * @method $this setRemoteSubnet($remoteSubnet)
 * @method string getRemoteSubnet()
 * @method $this setEffectImmediately($effectImmediately)
 * @method bool getEffectImmediately()
 * @method $this setIkeConfig($ikeConfig)
 * @method string getIkeConfig()
 * @method $this setIpsecConfig($ipsecConfig)
 * @method string getIpsecConfig()
 * @method $this setHealthCheckConfig($healthCheckConfig)
 * @method string getHealthCheckConfig()
 * @method $this setAutoConfigRoute($autoConfigRoute)
 * @method bool getAutoConfigRoute()
 */
class ModifyVpnConnectionAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setFilter($filter)
 * @method array getFilter()
 */
class DescribeHaVips extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSslVpnClientCertId($sslVpnClientCertId)
 * @method string getSslVpnClientCertId()
 * @method $this setName($name)
 * @method string getName()
 */
class ModifySslVpnClientCert extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6GatewayId($ipv6GatewayId)
 * @method string getIpv6GatewayId()
 * @method $this setSpec($spec)
 * @method string getSpec()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyIpv6GatewaySpec extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($globalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setBackendServerId($backendServerId)
 * @method string getBackendServerId()
 * @method $this setBackendServerRegionId($backendServerRegionId)
 * @method string getBackendServerRegionId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setBackendServerType($backendServerType)
 * @method string getBackendServerType()
 */
class AssociateGlobalAccelerationInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServiceLocation($serviceLocation)
 * @method string getServiceLocation()
 * @method $this setBandwidth($bandwidth)
 * @method string getBandwidth()
 * @method $this setInternetChargeType($internetChargeType)
 * @method string getInternetChargeType()
 * @method $this setBandwidthType($bandwidthType)
 * @method string getBandwidthType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class CreateGlobalAccelerationInstance extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($physicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setLineOperator($lineOperator)
 * @method string getLineOperator()
 * @method $this setbandwidth($bandwidth)
 * @method int getbandwidth()
 * @method $this setPeerLocation($peerLocation)
 * @method string getPeerLocation()
 * @method $this setPortType($portType)
 * @method string getPortType()
 * @method $this setRedundantPhysicalConnectionId($redundantPhysicalConnectionId)
 * @method string getRedundantPhysicalConnectionId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCircuitCode($circuitCode)
 * @method string getCircuitCode()
 */
class ModifyPhysicalConnectionAttribute extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeVpnPbrRouteEntries extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSnatTableId($snatTableId)
 * @method string getSnatTableId()
 * @method $this setSnatEntryId($snatEntryId)
 * @method string getSnatEntryId()
 * @method $this setSourceVSwitchId($sourceVSwitchId)
 * @method string getSourceVSwitchId()
 * @method $this setSourceCIDR($sourceCIDR)
 * @method string getSourceCIDR()
 * @method $this setSnatIp($snatIp)
 * @method string getSnatIp()
 * @method $this setSnatEntryName($snatEntryName)
 * @method string getSnatEntryName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeSnatTableEntries extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVbrId($vbrId)
 * @method string getVbrId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteVirtualBorderRouter extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSslVpnServerId($sslVpnServerId)
 * @method string getSslVpnServerId()
 * @method $this setSslVpnClientCertId($sslVpnClientCertId)
 * @method string getSslVpnClientCertId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeSslVpnClientCerts extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAclId($aclId)
 * @method string getAclId()
 * @method $this setAclEntryId($aclEntryId)
 * @method string getAclEntryId()
 */
class RemoveIPv6TranslatorAclListEntry extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouterInterfaceId($routerInterfaceId)
 * @method string getRouterInterfaceId()
 */
class ActivateRouterInterface extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVRouterId($vRouterId)
 * @method string getVRouterId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeVRouters extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6TranslatorId($ipv6TranslatorId)
 * @method string getIpv6TranslatorId()
 * @method $this setEntryName($entryName)
 * @method string getEntryName()
 * @method $this setEntryDescription($entryDescription)
 * @method string getEntryDescription()
 * @method $this setAllocateIpv6Port($allocateIpv6Port)
 * @method int getAllocateIpv6Port()
 * @method $this setBackendIpv4Addr($backendIpv4Addr)
 * @method string getBackendIpv4Addr()
 * @method $this setBackendIpv4Port($backendIpv4Port)
 * @method int getBackendIpv4Port()
 * @method $this setTransProtocol($transProtocol)
 * @method string getTransProtocol()
 * @method $this setEntryBandwidth($entryBandwidth)
 * @method int getEntryBandwidth()
 * @method $this setAclStatus($aclStatus)
 * @method string getAclStatus()
 * @method $this setAclType($aclType)
 * @method string getAclType()
 * @method $this setAclId($aclId)
 * @method string getAclId()
 */
class CreateIPv6TranslatorEntry extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNatGatewayId($natGatewayId)
 * @method string getNatGatewayId()
 * @method $this setSpec($spec)
 * @method string getSpec()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class ModifyNatGatewaySpec extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setRouteDest($routeDest)
 * @method string getRouteDest()
 * @method $this setNextHop($nextHop)
 * @method string getNextHop()
 * @method $this setWeight($weight)
 * @method int getWeight()
 * @method $this setNewWeight($newWeight)
 * @method int getNewWeight()
 */
class ModifyVpnRouteEntryWeight extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setRouteDest($routeDest)
 * @method string getRouteDest()
 * @method $this setNextHop($nextHop)
 * @method string getNextHop()
 * @method $this setRouteType($routeType)
 * @method string getRouteType()
 * @method $this setPublishVpc($publishVpc)
 * @method bool getPublishVpc()
 */
class PublishVpnRouteEntry extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6TranslatorId($ipv6TranslatorId)
 * @method string getIpv6TranslatorId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setSpec($spec)
 * @method string getSpec()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setAllocateIpv6Addr($allocateIpv6Addr)
 * @method string getAllocateIpv6Addr()
 * @method $this setAllocateIpv4Addr($allocateIpv4Addr)
 * @method string getAllocateIpv4Addr()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setBusinessStatus($businessStatus)
 * @method string getBusinessStatus()
 */
class DescribeIPv6Translators extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setBusinessStatus($businessStatus)
 * @method string getBusinessStatus()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeVpnGateways extends Request
{

}/**
 * @method $this setRouterType($routerType)
 * @method string getRouterType()
 * @method $this setRouterId($routerId)
 * @method string getRouterId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setRouteTableId($routeTableId)
 * @method string getRouteTableId()
 * @method $this setRouteTableName($routeTableName)
 * @method string getRouteTableName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeRouteTableList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setForwardTableId($forwardTableId)
 * @method string getForwardTableId()
 * @method $this setExternalIp($externalIp)
 * @method string getExternalIp()
 * @method $this setExternalPort($externalPort)
 * @method string getExternalPort()
 * @method $this setInternalIp($internalIp)
 * @method string getInternalIp()
 * @method $this setInternalPort($internalPort)
 * @method string getInternalPort()
 * @method $this setIpProtocol($ipProtocol)
 * @method string getIpProtocol()
 * @method $this setForwardEntryName($forwardEntryName)
 * @method string getForwardEntryName()
 */
class CreateForwardEntry extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($physicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribePhysicalConnectionOrder extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6AddressId($ipv6AddressId)
 * @method string getIpv6AddressId()
 * @method $this setIpv6InternetBandwidthId($ipv6InternetBandwidthId)
 * @method string getIpv6InternetBandwidthId()
 * @method $this setBandwidth($bandwidth)
 * @method int getBandwidth()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyIpv6InternetBandwidth extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setRouteSource($routeSource)
 * @method string getRouteSource()
 * @method $this setRouteDest($routeDest)
 * @method string getRouteDest()
 * @method $this setNextHop($nextHop)
 * @method string getNextHop()
 * @method $this setWeight($weight)
 * @method int getWeight()
 * @method $this setPublishVpc($publishVpc)
 * @method bool getPublishVpc()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateVpnPbrRouteEntry extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouteTableId($routeTableId)
 * @method string getRouteTableId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AssociateRouteTable extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidth($bandwidth)
 * @method string getBandwidth()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setISP($iSP)
 * @method string getISP()
 * @method $this setNetmode($netmode)
 * @method string getNetmode()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setInstanceChargeType($instanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setInternetChargeType($internetChargeType)
 * @method string getInternetChargeType()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class AllocateEipAddress extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeZones extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIncludeReservationData($includeReservationData)
 * @method bool getIncludeReservationData()
 * @method $this setGlobalAccelerationInstanceId($globalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setIpAddress($ipAddress)
 * @method string getIpAddress()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setBandwidthType($bandwidthType)
 * @method string getBandwidthType()
 * @method $this setServiceLocation($serviceLocation)
 * @method string getServiceLocation()
 * @method $this setServerId($serverId)
 * @method string getServerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeGlobalAccelerationInstances extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setForwardTableId($forwardTableId)
 * @method string getForwardTableId()
 * @method $this setForwardEntryId($forwardEntryId)
 * @method string getForwardEntryId()
 */
class DeleteForwardEntry extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setHaVipId($haVipId)
 * @method string getHaVipId()
 */
class DeleteHaVip extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class EnableVpcClassicLink extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setClientIpPool($clientIpPool)
 * @method string getClientIpPool()
 * @method $this setLocalSubnet($localSubnet)
 * @method string getLocalSubnet()
 * @method $this setProto($proto)
 * @method string getProto()
 * @method $this setCipher($cipher)
 * @method string getCipher()
 * @method $this setPort($port)
 * @method int getPort()
 * @method $this setCompress($compress)
 * @method bool getCompress()
 */
class CreateSslVpnServer extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFlowLogName($flowLogName)
 * @method string getFlowLogName()
 * @method $this setFlowLogId($flowLogId)
 * @method string getFlowLogId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method string getResourceId()
 * @method $this setTrafficType($trafficType)
 * @method string getTrafficType()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setLogStoreName($logStoreName)
 * @method string getLogStoreName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeFlowLogs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($physicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CancelPhysicalConnection extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBgpPeerId($bgpPeerId)
 * @method string getBgpPeerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteBgpPeer extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVbrId($vbrId)
 * @method string getVbrId()
 * @method $this setVlanId($vlanId)
 * @method int getVlanId()
 * @method $this setCircuitCode($circuitCode)
 * @method string getCircuitCode()
 * @method $this setLocalGatewayIp($localGatewayIp)
 * @method string getLocalGatewayIp()
 * @method $this setPeerGatewayIp($peerGatewayIp)
 * @method string getPeerGatewayIp()
 * @method $this setPeeringSubnetMask($peeringSubnetMask)
 * @method string getPeeringSubnetMask()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setAssociatedPhysicalConnections($associatedPhysicalConnections)
 * @method string getAssociatedPhysicalConnections()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyVirtualBorderRouterAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstanceType($instanceType)
 * @method string getInstanceType()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeGrantRulesToCen extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setHaVipId($haVipId)
 * @method string getHaVipId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setForce($force)
 * @method string getForce()
 */
class UnassociateHaVip extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setBandwidth($bandwidth)
 * @method string getBandwidth()
 */
class ModifyCommonBandwidthPackageSpec extends Request
{

}/**
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcName($vpcName)
 * @method string getVpcName()
 * @method $this setIsDefault($isDefault)
 * @method bool getIsDefault()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeVpcs extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpnConnectionId($vpnConnectionId)
 * @method string getVpnConnectionId()
 */
class DescribeVpnConnection extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setSslVpnServerId($sslVpnServerId)
 * @method string getSslVpnServerId()
 */
class DeleteSslVpnServer extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBgpGroupId($bgpGroupId)
 * @method string getBgpGroupId()
 * @method $this setPeerIpAddress($peerIpAddress)
 * @method string getPeerIpAddress()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateBgpPeer extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6GatewayId($ipv6GatewayId)
 * @method string getIpv6GatewayId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteIpv6Gateway extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setRouteDest($routeDest)
 * @method string getRouteDest()
 * @method $this setNextHop($nextHop)
 * @method string getNextHop()
 * @method $this setWeight($weight)
 * @method int getWeight()
 * @method $this setPublishVpc($publishVpc)
 * @method bool getPublishVpc()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateVpnRouteEntry extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVRouterId($vRouterId)
 * @method string getVRouterId()
 * @method $this setRouteTableId($routeTableId)
 * @method string getRouteTableId()
 * @method $this setRouterType($routerType)
 * @method string getRouterType()
 * @method $this setRouterId($routerId)
 * @method string getRouterId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setRouteTableName($routeTableName)
 * @method string getRouteTableName()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeRouteTables extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($physicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class TerminatePhysicalConnection extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6EgressOnlyRuleId($ipv6EgressOnlyRuleId)
 * @method string getIpv6EgressOnlyRuleId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteIpv6EgressOnlyRule extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCidrBlock($cidrBlock)
 * @method string getCidrBlock()
 * @method $this setIpv6CidrBlock($ipv6CidrBlock)
 * @method int getIpv6CidrBlock()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchName($vSwitchName)
 * @method string getVSwitchName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateVSwitch extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteVSwitch extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpnConnectionId($vpnConnectionId)
 * @method string getVpnConnectionId()
 */
class DownloadVpnConnectionConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSnatTableId($snatTableId)
 * @method string getSnatTableId()
 * @method $this setSnatEntryId($snatEntryId)
 * @method string getSnatEntryId()
 * @method $this setSnatIp($snatIp)
 * @method string getSnatIp()
 * @method $this setSnatEntryName($snatEntryName)
 * @method string getSnatEntryName()
 */
class ModifySnatEntry extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAclId($aclId)
 * @method string getAclId()
 * @method $this setAclEntryIp($aclEntryIp)
 * @method string getAclEntryIp()
 * @method $this setAclEntryComment($aclEntryComment)
 * @method string getAclEntryComment()
 */
class AddIPv6TranslatorAclListEntry extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyBandwidthPackageAttribute extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setSslVpnClientCertId($sslVpnClientCertId)
 * @method string getSslVpnClientCertId()
 */
class DeleteSslVpnClientCert extends Request
{

}/**
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class ConvertBandwidthPackage extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setAclName($aclName)
 * @method string getAclName()
 */
class CreateIPv6TranslatorAclList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setHaVipId($haVipId)
 * @method string getHaVipId()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyHaVipAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeVSwitchAttributes extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setIpv6TranslatorId($ipv6TranslatorId)
 * @method string getIpv6TranslatorId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyIPv6TranslatorAttribute extends Request
{

}/**
 * @method $this setFilter($filter)
 * @method array getFilter()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setHostOperator($hostOperator)
 * @method string getHostOperator()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeAccessPoints extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAccessPointId($accessPointId)
 * @method string getAccessPointId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setLineOperator($lineOperator)
 * @method string getLineOperator()
 * @method $this setbandwidth($bandwidth)
 * @method int getbandwidth()
 * @method $this setPeerLocation($peerLocation)
 * @method string getPeerLocation()
 * @method $this setPortType($portType)
 * @method string getPortType()
 * @method $this setRedundantPhysicalConnectionId($redundantPhysicalConnectionId)
 * @method string getRedundantPhysicalConnectionId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setCircuitCode($circuitCode)
 * @method string getCircuitCode()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreatePhysicalConnection extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVbrId($vbrId)
 * @method string getVbrId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class RecoverVirtualBorderRouter extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setAllocationId($allocationId)
 * @method string getAllocationId()
 * @method $this setBandwidth($bandwidth)
 * @method string getBandwidth()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyEipAddressAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRouterId($routerId)
 * @method string getRouterId()
 * @method $this setBgpPeerId($bgpPeerId)
 * @method string getBgpPeerId()
 * @method $this setBgpGroupId($bgpGroupId)
 * @method string getBgpGroupId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIsDefault($isDefault)
 * @method bool getIsDefault()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeBgpPeers extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6TranslatorEntryId($ipv6TranslatorEntryId)
 * @method string getIpv6TranslatorEntryId()
 * @method $this setEntryName($entryName)
 * @method string getEntryName()
 * @method $this setEntryDescription($entryDescription)
 * @method string getEntryDescription()
 * @method $this setAllocateIpv6Port($allocateIpv6Port)
 * @method int getAllocateIpv6Port()
 * @method $this setBackendIpv4Addr($backendIpv4Addr)
 * @method string getBackendIpv4Addr()
 * @method $this setBackendIpv4Port($backendIpv4Port)
 * @method int getBackendIpv4Port()
 * @method $this setTransProtocol($transProtocol)
 * @method string getTransProtocol()
 * @method $this setEntryBandwidth($entryBandwidth)
 * @method int getEntryBandwidth()
 * @method $this setAclStatus($aclStatus)
 * @method string getAclStatus()
 * @method $this setAclType($aclType)
 * @method string getAclType()
 * @method $this setAclId($aclId)
 * @method string getAclId()
 */
class ModifyIPv6TranslatorEntry extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAllocationId($allocationId)
 * @method string getAllocationId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ReleaseEipAddress extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVbrId($vbrId)
 * @method string getVbrId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class TerminateVirtualBorderRouter extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIsDefault($isDefault)
 * @method bool getIsDefault()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeVpcAttribute extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($bandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRemovedIpAddresses($removedIpAddresses)
 * @method array getRemovedIpAddresses()
 */
class RemoveBandwidthPackageIps extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouteTableId($routeTableId)
 * @method string getRouteTableId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteRouteTable extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6TranslatorEntryId($ipv6TranslatorEntryId)
 * @method string getIpv6TranslatorEntryId()
 * @method $this setIpv6TranslatorId($ipv6TranslatorId)
 * @method string getIpv6TranslatorId()
 */
class DeleteIPv6TranslatorEntry extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6GatewayId($ipv6GatewayId)
 * @method string getIpv6GatewayId()
 * @method $this setIpv6AddressId($ipv6AddressId)
 * @method string getIpv6AddressId()
 * @method $this setInternetChargeType($internetChargeType)
 * @method string getInternetChargeType()
 * @method $this setBandwidth($bandwidth)
 * @method int getBandwidth()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AllocateIpv6InternetBandwidth extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAclId($aclId)
 * @method string getAclId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAclName($aclName)
 * @method string getAclName()
 */
class DescribeIPv6TranslatorAclLists extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVbrId($vbrId)
 * @method string getVbrId()
 * @method $this setPhysicalConnectionId($physicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setVlanId($vlanId)
 * @method string getVlanId()
 * @method $this setCircuitCode($circuitCode)
 * @method string getCircuitCode()
 * @method $this setLocalGatewayIp($localGatewayIp)
 * @method string getLocalGatewayIp()
 * @method $this setPeerGatewayIp($peerGatewayIp)
 * @method string getPeerGatewayIp()
 * @method $this setPeeringSubnetMask($peeringSubnetMask)
 * @method string getPeeringSubnetMask()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class AssociatePhysicalConnectionToVirtualBorderRouter extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDestinationIp($destinationIp)
 * @method string getDestinationIp()
 * @method $this setRouterId($routerId)
 * @method string getRouterId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateNqa extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCustomerGatewayId($customerGatewayId)
 * @method string getCustomerGatewayId()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLocalSubnet($localSubnet)
 * @method string getLocalSubnet()
 * @method $this setRemoteSubnet($remoteSubnet)
 * @method string getRemoteSubnet()
 * @method $this setEffectImmediately($effectImmediately)
 * @method bool getEffectImmediately()
 * @method $this setIkeConfig($ikeConfig)
 * @method string getIkeConfig()
 * @method $this setIpsecConfig($ipsecConfig)
 * @method string getIpsecConfig()
 * @method $this setHealthCheckConfig($healthCheckConfig)
 * @method string getHealthCheckConfig()
 * @method $this setAutoConfigRoute($autoConfigRoute)
 * @method bool getAutoConfigRoute()
 */
class CreateVpnConnection extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setInstanceChargeType($instanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setBandwidth($bandwidth)
 * @method int getBandwidth()
 * @method $this setEnableIpsec($enableIpsec)
 * @method bool getEnableIpsec()
 * @method $this setEnableSsl($enableSsl)
 * @method bool getEnableSsl()
 * @method $this setSslConnections($sslConnections)
 * @method int getSslConnections()
 */
class CreateVpnGateway extends Request
{

}/**
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVSwitchName($vSwitchName)
 * @method string getVSwitchName()
 * @method $this setIsDefault($isDefault)
 * @method bool getIsDefault()
 * @method $this setRouteTableId($routeTableId)
 * @method string getRouteTableId()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeVSwitches extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setVpnGatewayId($vpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setRouteSource($routeSource)
 * @method string getRouteSource()
 * @method $this setRouteDest($routeDest)
 * @method string getRouteDest()
 * @method $this setNextHop($nextHop)
 * @method string getNextHop()
 * @method $this setWeight($weight)
 * @method int getWeight()
 */
class DeleteVpnPbrRouteEntry extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAclId($aclId)
 * @method string getAclId()
 */
class DeleteIPv6TranslatorAclList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNqaId($nqaId)
 * @method string getNqaId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteNqa extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIpv6GatewayId($ipv6GatewayId)
 * @method string getIpv6GatewayId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeIpv6Gateways extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDestinationIp($destinationIp)
 * @method string getDestinationIp()
 * @method $this setNqaId($nqaId)
 * @method string getNqaId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyNqa extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setHaVipId($haVipId)
 * @method string getHaVipId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class AssociateHaVip extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouterInterfaceId($routerInterfaceId)
 * @method string getRouterInterfaceId()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DeleteRouterInterface extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSslVpnServerId($sslVpnServerId)
 * @method string getSslVpnServerId()
 * @method $this setName($name)
 * @method string getName()
 */
class CreateSslVpnClientCert extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNatGatewayId($natGatewayId)
 * @method string getNatGatewayId()
 * @method $this setForce($force)
 * @method bool getForce()
 */
class DeleteNatGateway extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setIpAddress($ipAddress)
 * @method string getIpAddress()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateHaVip extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSnatTableId($snatTableId)
 * @method string getSnatTableId()
 * @method $this setSnatEntryId($snatEntryId)
 * @method string getSnatEntryId()
 */
class DeleteSnatEntry extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRouteTableId($routeTableId)
 * @method string getRouteTableId()
 * @method $this setDestinationCidrBlock($destinationCidrBlock)
 * @method string getDestinationCidrBlock()
 * @method $this setNextHopId($nextHopId)
 * @method string getNextHopId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setRouteEntryName($routeEntryName)
 * @method string getRouteEntryName()
 * @method $this setNextHopType($nextHopType)
 * @method string getNextHopType()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setNextHopList($nextHopList)
 * @method array getNextHopList()
 */
class CreateRouteEntry extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstanceType($instanceType)
 * @method string getInstanceType()
 * @method $this setCenId($cenId)
 * @method string getCenId()
 * @method $this setCenOwnerId($cenOwnerId)
 * @method int getCenOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class GrantInstanceToCen extends Request
{

}/**
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setIpv6TranslatorId($ipv6TranslatorId)
 * @method string getIpv6TranslatorId()
 * @method $this setBandwidth($bandwidth)
 * @method int getBandwidth()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 */
class ModifyIPv6TranslatorBandwidth extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIncludeReservationData($includeReservationData)
 * @method bool getIncludeReservationData()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setFilter($filter)
 * @method array getFilter()
 */
class DescribeRouterInterfaces extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNatGatewayId($natGatewayId)
 * @method string getNatGatewayId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyNatGatewayAttribute extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($physicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setVbrOwnerId($vbrOwnerId)
 * @method int getVbrOwnerId()
 * @method $this setVlanId($vlanId)
 * @method int getVlanId()
 * @method $this setCircuitCode($circuitCode)
 * @method string getCircuitCode()
 * @method $this setLocalGatewayIp($localGatewayIp)
 * @method string getLocalGatewayIp()
 * @method $this setPeerGatewayIp($peerGatewayIp)
 * @method string getPeerGatewayIp()
 * @method $this setPeeringSubnetMask($peeringSubnetMask)
 * @method string getPeeringSubnetMask()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateVirtualBorderRouter extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setOppositeRegionId($oppositeRegionId)
 * @method string getOppositeRegionId()
 * @method $this setSpec($spec)
 * @method string getSpec()
 * @method $this setRouterType($routerType)
 * @method string getRouterType()
 * @method $this setRouterId($routerId)
 * @method string getRouterId()
 * @method $this setOppositeInterfaceId($oppositeInterfaceId)
 * @method string getOppositeInterfaceId()
 * @method $this setOppositeRouterId($oppositeRouterId)
 * @method string getOppositeRouterId()
 * @method $this setOppositeRouterType($oppositeRouterType)
 * @method string getOppositeRouterType()
 * @method $this setOppositeInterfaceOwnerId($oppositeInterfaceOwnerId)
 * @method string getOppositeInterfaceOwnerId()
 * @method $this setHealthCheckSourceIp($healthCheckSourceIp)
 * @method string getHealthCheckSourceIp()
 * @method $this setHealthCheckTargetIp($healthCheckTargetIp)
 * @method string getHealthCheckTargetIp()
 * @method $this setAccessPointId($accessPointId)
 * @method string getAccessPointId()
 * @method $this setOppositeAccessPointId($oppositeAccessPointId)
 * @method string getOppositeAccessPointId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setInstanceChargeType($instanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setAutoPay($autoPay)
 * @method bool getAutoPay()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class CreateRouterInterface extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVRouterId($vRouterId)
 * @method string getVRouterId()
 * @method $this setVRouterName($vRouterName)
 * @method string getVRouterName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class ModifyVRouterAttribute extends Request
{

}