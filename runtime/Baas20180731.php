<?php

namespace aliyun\sdk\services\Baas20180731;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180731
 *
 * @package aliyun\sdk\services\Baas20180731
 * @method AcceptInvitation AcceptInvitation()
 * @method DescribeOrganizationUserCerts DescribeOrganizationUserCerts()
 * @method AddEthereumNode AddEthereumNode()
 * @method DestroyConsortium DestroyConsortium()
 * @method GetBlockchainCreateTask GetBlockchainCreateTask()
 * @method DescribeLatest15Blocks DescribeLatest15Blocks()
 * @method DescribeEthereumInvitaion DescribeEthereumInvitaion()
 * @method DescribeResourceType DescribeResourceType()
 * @method DescribeBlockchainCreateTask DescribeBlockchainCreateTask()
 * @method CreateEthereum CreateEthereum()
 * @method GetMyBlockchains GetMyBlockchains()
 * @method DescribeEthereumNodes DescribeEthereumNodes()
 * @method DescribeMembers DescribeMembers()
 * @method DescribeEthereumInvitee DescribeEthereumInvitee()
 * @method DescribeTransactionFor2CBrowser DescribeTransactionFor2CBrowser()
 * @method RenameBlockchain RenameBlockchain()
 * @method QueryConsortiumDeletable QueryConsortiumDeletable()
 * @method CreateBlockchainApplication CreateBlockchainApplication()
 * @method CreateConsortium CreateConsortium()
 * @method DescribeEthereumDeletable DescribeEthereumDeletable()
 * @method CreateOrganizationUser CreateOrganizationUser()
 * @method DescribeOrganizationUsers DescribeOrganizationUsers()
 * @method ResetCertificate ResetCertificate()
 * @method DescribeOrgnaizationChaincodes DescribeOrgnaizationChaincodes()
 * @method DescribeMyBlockchains DescribeMyBlockchains()
 * @method CheckOrganizationDomain CheckOrganizationDomain()
 * @method SynchronizeChaincode SynchronizeChaincode()
 * @method DescribeChaincodeCollectionConfig DescribeChaincodeCollectionConfig()
 * @method QueryMetric QueryMetric()
 * @method RejectUser RejectUser()
 * @method DeleteChaincode DeleteChaincode()
 * @method DescribeRootDomain DescribeRootDomain()
 * @method DescribeQRCodeAuthority DescribeQRCodeAuthority()
 * @method ApplyBlockchain ApplyBlockchain()
 * @method DescribeConsortiumChannels DescribeConsortiumChannels()
 * @method DescribeTransactionQRCode DescribeTransactionQRCode()
 * @method DescribeApplies DescribeApplies()
 * @method DescribeNetstatURL DescribeNetstatURL()
 * @method DescribeOrdererLogs DescribeOrdererLogs()
 * @method UpgradeChaincode UpgradeChaincode()
 * @method DescribeOrganizationDeletable DescribeOrganizationDeletable()
 * @method UnfreezeAccount UnfreezeAccount()
 * @method ConfirmConsortiumMember ConfirmConsortiumMember()
 * @method DownloadBizview DownloadBizview()
 * @method DescribeConsortiumChaincodes DescribeConsortiumChaincodes()
 * @method DescribeTemplates DescribeTemplates()
 * @method DescribeSchemaDetail DescribeSchemaDetail()
 * @method DescribeConsortiumMembers DescribeConsortiumMembers()
 * @method DescribeConsortiumAdminStatus DescribeConsortiumAdminStatus()
 * @method DescribeBlock DescribeBlock()
 * @method QueryOrganizationDeletable QueryOrganizationDeletable()
 * @method ApproveEthereumInvitee ApproveEthereumInvitee()
 * @method ResetOrganizationUserPassword ResetOrganizationUserPassword()
 * @method UpdateEthereum UpdateEthereum()
 * @method DescribeDownloadPathsOfNotaryChain DescribeDownloadPathsOfNotaryChain()
 * @method CreateAccount CreateAccount()
 * @method DescribeConsortiumSpecs DescribeConsortiumSpecs()
 * @method SchemaDetail SchemaDetail()
 * @method DescribeDownloadPathsOfContractChain DescribeDownloadPathsOfContractChain()
 * @method DescribeLatest15TransDigests DescribeLatest15TransDigests()
 * @method GetBlockchainInfo GetBlockchainInfo()
 * @method DescribeQRCodeAccessLog DescribeQRCodeAccessLog()
 * @method DescribeConsortiums DescribeConsortiums()
 * @method InstallChaincode InstallChaincode()
 * @method DescribeMySuccessApplies DescribeMySuccessApplies()
 * @method DescribeOrganizationChannels DescribeOrganizationChannels()
 * @method DescribeConsortiumDeletable DescribeConsortiumDeletable()
 * @method DescribeCandidateOrganizations DescribeCandidateOrganizations()
 * @method InviteUser InviteUser()
 * @method CreateConsortiumMember CreateConsortiumMember()
 * @method CreateOwnAccount CreateOwnAccount()
 * @method DescribeInvitationList DescribeInvitationList()
 * @method CreateBlockchainApply CreateBlockchainApply()
 * @method DescribeMetric DescribeMetric()
 * @method DescribeRegions DescribeRegions()
 * @method DownloadSignedData DownloadSignedData()
 * @method DescribeTasks DescribeTasks()
 * @method UpdateSchema UpdateSchema()
 * @method CreateEcosphere CreateEcosphere()
 * @method DescribeOrganizationSpecs DescribeOrganizationSpecs()
 * @method DownloadSDK2 DownloadSDK2()
 * @method DescribeChannelMembers DescribeChannelMembers()
 * @method QueryBlock QueryBlock()
 * @method DescribeExplorer DescribeExplorer()
 * @method GetBcSchema GetBcSchema()
 * @method UpdateEthereumClientUserPassword UpdateEthereumClientUserPassword()
 * @method DownloadAll DownloadAll()
 * @method DescribeConsortiumConfig DescribeConsortiumConfig()
 * @method QueryTransaction QueryTransaction()
 * @method CreateChannel CreateChannel()
 * @method UpdateEthereumNode UpdateEthereumNode()
 * @method DescribeMySuccessfulApplication DescribeMySuccessfulApplication()
 * @method DownloadOrganizationSDK DownloadOrganizationSDK()
 * @method DescribeBlockchainConfigOption DescribeBlockchainConfigOption()
 * @method GetTemplates GetTemplates()
 * @method DescribeOrganizations DescribeOrganizations()
 * @method DescribeEthereumNodeLogs DescribeEthereumNodeLogs()
 * @method DownloadSdk DownloadSdk()
 * @method DescribeTransactionReceiptFor2CBrowser DescribeTransactionReceiptFor2CBrowser()
 * @method DescribeOrganizationMembers DescribeOrganizationMembers()
 * @method DescribeBlockchainSchema DescribeBlockchainSchema()
 * @method CreateChaincode CreateChaincode()
 * @method CheckConsortiumDomain CheckConsortiumDomain()
 * @method InstantiateChaincode InstantiateChaincode()
 * @method AcceptEthereumInvitation AcceptEthereumInvitation()
 * @method DescribeEthereumNodeConfiguration DescribeEthereumNodeConfiguration()
 * @method DescribeMemberRole DescribeMemberRole()
 * @method UpdateQRCodeAuthority UpdateQRCodeAuthority()
 * @method DescribeBcSchema DescribeBcSchema()
 * @method DescribePeerLogs DescribePeerLogs()
 * @method GetApplies GetApplies()
 * @method FreezeAccount FreezeAccount()
 * @method DescribeEcosphereSpecs DescribeEcosphereSpecs()
 * @method UpdateEthereumNodeConfiguration UpdateEthereumNodeConfiguration()
 * @method DescribeAntRegions DescribeAntRegions()
 * @method DestroyEthereum DestroyEthereum()
 * @method DescribeOssProperties DescribeOssProperties()
 * @method DescribeOrganizationChaincodes DescribeOrganizationChaincodes()
 * @method DescribeBlockchainInfo DescribeBlockchainInfo()
 * @method DescribeOrganization DescribeOrganization()
 * @method ResetUser ResetUser()
 * @method DescribeConsortiumOrderers DescribeConsortiumOrderers()
 * @method CreateChannelMember CreateChannelMember()
 * @method DescribeOrganizationPeers DescribeOrganizationPeers()
 * @method CreateOrganization CreateOrganization()
 * @method UpdateMemberRole UpdateMemberRole()
 * @method DescribeConsortiumMemberApproval DescribeConsortiumMemberApproval()
 * @method DescribeExplorerURL DescribeExplorerURL()
 * @method DescribeEthereums DescribeEthereums()
 * @method DescribeEthereumClientUsers DescribeEthereumClientUsers()
 * @method QueryEthereumDeletable QueryEthereumDeletable()
 * @method OperateUser OperateUser()
 * @method GetMySuccessApplies GetMySuccessApplies()
 * @method DescribeEthereumNodeInfo DescribeEthereumNodeInfo()
 * @method DescribeEthereum DescribeEthereum()
 * @method GetOssProperties GetOssProperties()
 * @method DescribeChaincodeUploadPolicy DescribeChaincodeUploadPolicy()
 * @method DescribeInvitationCode DescribeInvitationCode()
 * @method CreateEthereumInvitation CreateEthereumInvitation()
 * @method DestroyOrganization DestroyOrganization()
 * @method DescribeEthereumNode DescribeEthereumNode()
 * @method DescribeInviter DescribeInviter()
 * @method JoinChannel JoinChannel()
 * @method DescribeTransaction DescribeTransaction()
 */
class V20180731
{
}

/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setIsAccepted($isAccepted)
 * @method bool getIsAccepted()
 */
class AcceptInvitation extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setUsername($username)
 * @method string getUsername()
 */
class DescribeOrganizationUserCerts extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNodeName($nodeName)
 * @method string getNodeName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setEthereumId($ethereumId)
 * @method string getEthereumId()
 * @method $this setExternalNode($externalNode)
 * @method bool getExternalNode()
 */
class AddEthereumNode extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 */
class DestroyConsortium extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrent($current)
 * @method int getCurrent()
 */
class GetBlockchainCreateTask extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeLatest15Blocks extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setToken($token)
 * @method string getToken()
 */
class DescribeEthereumInvitaion extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeResourceType extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrent($current)
 * @method int getCurrent()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeBlockchainCreateTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setConsensus($consensus)
 * @method string getConsensus()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setNetworkId($networkId)
 * @method string getNetworkId()
 * @method $this setGas($gas)
 * @method string getGas()
 * @method $this setDifficulty($difficulty)
 * @method string getDifficulty()
 * @method $this setNode($node)
 * @method array getNode()
 */
class CreateEthereum extends Request
{

}/**
 */
class GetMyBlockchains extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeEthereumNodes extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrent($current)
 * @method int getCurrent()
 */
class DescribeMembers extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeEthereumInvitee extends Request
{

}/**
 * @method $this setAlipayAuthCode($alipayAuthCode)
 * @method string getAlipayAuthCode()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setHash($hash)
 * @method string getHash()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeTransactionFor2CBrowser extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setNewName($newName)
 * @method string getNewName()
 */
class RenameBlockchain extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class QueryConsortiumDeletable extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setMachineNum($machineNum)
 * @method int getMachineNum()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setLiveTime($liveTime)
 * @method int getLiveTime()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCipherSuit($cipherSuit)
 * @method string getCipherSuit()
 * @method $this setTlsAlgo($tlsAlgo)
 * @method string getTlsAlgo()
 * @method $this setMerkleTreeSuit($merkleTreeSuit)
 * @method string getMerkleTreeSuit()
 * @method $this setBlockchainType($blockchainType)
 * @method string getBlockchainType()
 * @method $this setBlockchainRegionId($blockchainRegionId)
 * @method string getBlockchainRegionId()
 */
class CreateBlockchainApplication extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setLocation($location)
 * @method string getLocation()
 * @method $this setOrdererType($ordererType)
 * @method string getOrdererType()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setChannelPolicy($channelPolicy)
 * @method string getChannelPolicy()
 * @method $this setSpecName($specName)
 * @method string getSpecName()
 * @method $this setOrderersCount($orderersCount)
 * @method int getOrderersCount()
 * @method $this setPeersCount($peersCount)
 * @method int getPeersCount()
 * @method $this setOrganization($organization)
 * @method array getOrganization()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setDuration($duration)
 * @method int getDuration()
 */
class CreateConsortium extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEthereumId($ethereumId)
 * @method string getEthereumId()
 */
class DescribeEthereumDeletable extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setUsername($username)
 * @method string getUsername()
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class CreateOrganizationUser extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeOrganizationUsers extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ResetCertificate extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeOrgnaizationChaincodes extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeMyBlockchains extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class CheckOrganizationDomain extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setChaincodeId($chaincodeId)
 * @method string getChaincodeId()
 */
class SynchronizeChaincode extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setChaincodeId($chaincodeId)
 * @method string getChaincodeId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeChaincodeCollectionConfig extends Request
{

}/**
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setInnerIp($innerIp)
 * @method string getInnerIp()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setTimeArea($timeArea)
 * @method string getTimeArea()
 */
class QueryMetric extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setReason($reason)
 * @method string getReason()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class RejectUser extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setChaincodeId($chaincodeId)
 * @method string getChaincodeId()
 */
class DeleteChaincode extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeRootDomain extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeQRCodeAuthority extends Request
{

}/**
 * @method $this setBlockchain($blockchain)
 * @method string getBlockchain()
 * @method $this setUploadReq($uploadReq)
 * @method string getUploadReq()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAccountPubKey($accountPubKey)
 * @method string getAccountPubKey()
 * @method $this setAccountRecoverPubKey($accountRecoverPubKey)
 * @method string getAccountRecoverPubKey()
 * @method $this setAccount($account)
 * @method string getAccount()
 */
class ApplyBlockchain extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeConsortiumChannels extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setHash($hash)
 * @method string getHash()
 */
class DescribeTransactionQRCode extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrent($current)
 * @method int getCurrent()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeApplies extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeNetstatURL extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setOrdererName($ordererName)
 * @method string getOrdererName()
 * @method $this setLines($lines)
 * @method string getLines()
 */
class DescribeOrdererLogs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setChaincodeId($chaincodeId)
 * @method string getChaincodeId()
 * @method $this setEndorsePolicy($endorsePolicy)
 * @method string getEndorsePolicy()
 * @method $this setLocation($location)
 * @method string getLocation()
 * @method $this setCollectionConfig($collectionConfig)
 * @method string getCollectionConfig()
 */
class UpgradeChaincode extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeOrganizationDeletable extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setAccount($account)
 * @method string getAccount()
 */
class UnfreezeAccount extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setOrganization($organization)
 * @method array getOrganization()
 */
class ConfirmConsortiumMember extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DownloadBizview extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeConsortiumChaincodes extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeTemplates extends Request
{

}/**
 * @method $this setSchemaId($schemaId)
 * @method int getSchemaId()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeSchemaDetail extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeConsortiumMembers extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeConsortiumAdminStatus extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setHeight($height)
 * @method int getHeight()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeBlock extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class QueryOrganizationDeletable extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setInvitee($invitee)
 * @method array getInvitee()
 */
class ApproveEthereumInvitee extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setUsername($username)
 * @method string getUsername()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class ResetOrganizationUserPassword extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setId($id)
 * @method string getId()
 */
class UpdateEthereum extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeDownloadPathsOfNotaryChain extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setAccount($account)
 * @method string getAccount()
 * @method $this setAccountPubKey($accountPubKey)
 * @method string getAccountPubKey()
 * @method $this setAccountRecoverPubKey($accountRecoverPubKey)
 * @method string getAccountRecoverPubKey()
 */
class CreateAccount extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeConsortiumSpecs extends Request
{

}/**
 * @method $this setSchemaId($schemaId)
 * @method int getSchemaId()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 */
class SchemaDetail extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 */
class DescribeDownloadPathsOfContractChain extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeLatest15TransDigests extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 */
class GetBlockchainInfo extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeQRCodeAccessLog extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeConsortiums extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setChaincodeId($chaincodeId)
 * @method string getChaincodeId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class InstallChaincode extends Request
{

}/**
 */
class DescribeMySuccessApplies extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeOrganizationChannels extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeConsortiumDeletable extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeCandidateOrganizations extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setUserEmail($userEmail)
 * @method string getUserEmail()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class InviteUser extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setOrganization($organization)
 * @method array getOrganization()
 * @method $this setCode($code)
 * @method string getCode()
 */
class CreateConsortiumMember extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setIdentity($identity)
 * @method string getIdentity()
 * @method $this setPublicKey($publicKey)
 * @method string getPublicKey()
 * @method $this setRecoveryKey($recoveryKey)
 * @method string getRecoveryKey()
 */
class CreateOwnAccount extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 */
class DescribeInvitationList extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setMachineNum($machineNum)
 * @method int getMachineNum()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setLiveTime($liveTime)
 * @method int getLiveTime()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class CreateBlockchainApply extends Request
{

}/**
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setInnerIp($innerIp)
 * @method string getInnerIp()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setTimeArea($timeArea)
 * @method string getTimeArea()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeMetric extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeRegions extends Request
{

}/**
 * @method $this setPath($path)
 * @method string getPath()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DownloadSignedData extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeTasks extends Request
{

}/**
 * @method $this setSchemaId($schemaId)
 * @method int getSchemaId()
 * @method $this setSchemaName($schemaName)
 * @method string getSchemaName()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCategoryConfigs($categoryConfigs)
 * @method string getCategoryConfigs()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class UpdateSchema extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setOrdererType($ordererType)
 * @method string getOrdererType()
 * @method $this setConsortiumName($consortiumName)
 * @method string getConsortiumName()
 * @method $this setOrdererDomain($ordererDomain)
 * @method string getOrdererDomain()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setLocation($location)
 * @method string getLocation()
 * @method $this setChannelPolicy($channelPolicy)
 * @method string getChannelPolicy()
 * @method $this setSpecName($specName)
 * @method string getSpecName()
 * @method $this setOrderersCount($orderersCount)
 * @method int getOrderersCount()
 * @method $this setPeersCount($peersCount)
 * @method int getPeersCount()
 * @method $this setOrganization($organization)
 * @method array getOrganization()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setDuration($duration)
 * @method int getDuration()
 */
class CreateEcosphere extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeOrganizationSpecs extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DownloadSDK2 extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 */
class DescribeChannelMembers extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setHeight($height)
 * @method int getHeight()
 */
class QueryBlock extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setExMethod($exMethod)
 * @method string getExMethod()
 * @method $this setExUrl($exUrl)
 * @method string getExUrl()
 * @method $this setExBody($exBody)
 * @method string getExBody()
 */
class DescribeExplorer extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 */
class GetBcSchema extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setUsername($username)
 * @method string getUsername()
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class UpdateEthereumClientUserPassword extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DownloadAll extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeConsortiumConfig extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setHash($hash)
 * @method string getHash()
 */
class QueryTransaction extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setOrganization($organization)
 * @method array getOrganization()
 * @method $this setChannelName($channelName)
 * @method string getChannelName()
 */
class CreateChannel extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNodeName($nodeName)
 * @method string getNodeName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class UpdateEthereumNode extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeMySuccessfulApplication extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setUsername($username)
 * @method string getUsername()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DownloadOrganizationSDK extends Request
{

}/**
 * @method $this setPurpose($purpose)
 * @method string getPurpose()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeBlockchainConfigOption extends Request
{

}/**
 */
class GetTemplates extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeOrganizations extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setLines($lines)
 * @method string getLines()
 */
class DescribeEthereumNodeLogs extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 */
class DownloadSdk extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setHash($hash)
 * @method string getHash()
 * @method $this setAlipayAuthCode($alipayAuthCode)
 * @method string getAlipayAuthCode()
 */
class DescribeTransactionReceiptFor2CBrowser extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeOrganizationMembers extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeBlockchainSchema extends Request
{

}/**
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOssBucket($ossBucket)
 * @method string getOssBucket()
 * @method $this setOssUrl($ossUrl)
 * @method string getOssUrl()
 * @method $this setEndorsePolicy($endorsePolicy)
 * @method string getEndorsePolicy()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class CreateChaincode extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 */
class CheckConsortiumDomain extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setChaincodeId($chaincodeId)
 * @method string getChaincodeId()
 * @method $this setEndorsePolicy($endorsePolicy)
 * @method string getEndorsePolicy()
 * @method $this setLocation($location)
 * @method string getLocation()
 * @method $this setCollectionConfig($collectionConfig)
 * @method string getCollectionConfig()
 */
class InstantiateChaincode extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setToken($token)
 * @method string getToken()
 * @method $this setCode($code)
 * @method string getCode()
 */
class AcceptEthereumInvitation extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class DescribeEthereumNodeConfiguration extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeMemberRole extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setAuthorized($authorized)
 * @method bool getAuthorized()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class UpdateQRCodeAuthority extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 */
class DescribeBcSchema extends Request
{

}/**
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPeerName($peerName)
 * @method string getPeerName()
 * @method $this setLines($lines)
 * @method string getLines()
 */
class DescribePeerLogs extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrent($current)
 * @method int getCurrent()
 */
class GetApplies extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setAccount($account)
 * @method string getAccount()
 */
class FreezeAccount extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeEcosphereSpecs extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 * @method $this setIP($iP)
 * @method string getIP()
 * @method $this setNodePub($nodePub)
 * @method string getNodePub()
 * @method $this setTMPub($tMPub)
 * @method string getTMPub()
 * @method $this setP2pPort($p2pPort)
 * @method int getP2pPort()
 * @method $this setTMPort($tMPort)
 * @method int getTMPort()
 * @method $this setRaftPort($raftPort)
 * @method int getRaftPort()
 * @method $this setRpcPort($rpcPort)
 * @method int getRpcPort()
 * @method $this setWSPort($wSPort)
 * @method int getWSPort()
 */
class UpdateEthereumNodeConfiguration extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setLocale($locale)
 * @method string getLocale()
 */
class DescribeAntRegions extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEthereumId($ethereumId)
 * @method string getEthereumId()
 */
class DestroyEthereum extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeOssProperties extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeOrganizationChaincodes extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeBlockchainInfo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeOrganization extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setOperation($operation)
 * @method int getOperation()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ResetUser extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeConsortiumOrderers extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setOrganization($organization)
 * @method array getOrganization()
 */
class CreateChannelMember extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeOrganizationPeers extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLocation($location)
 * @method string getLocation()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setSpecName($specName)
 * @method string getSpecName()
 * @method $this setPeersCount($peersCount)
 * @method int getPeersCount()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 */
class CreateOrganization extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setRole($role)
 * @method int getRole()
 */
class UpdateMemberRole extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeConsortiumMemberApproval extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class DescribeExplorerURL extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeEthereums extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class DescribeEthereumClientUsers extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEthereumId($ethereumId)
 * @method string getEthereumId()
 */
class QueryEthereumDeletable extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setOperation($operation)
 * @method int getOperation()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class OperateUser extends Request
{

}/**
 */
class GetMySuccessApplies extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class DescribeEthereumNodeInfo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeEthereum extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 */
class GetOssProperties extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 */
class DescribeChaincodeUploadPolicy extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 */
class DescribeInvitationCode extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEthereumId($ethereumId)
 * @method string getEthereumId()
 */
class CreateEthereumInvitation extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 */
class DestroyOrganization extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeEthereumNode extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCode($code)
 * @method string getCode()
 */
class DescribeInviter extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setDo($do)
 * @method string getDo()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class JoinChannel extends Request
{

}/**
 * @method $this setBizid($bizid)
 * @method string getBizid()
 * @method $this setHash($hash)
 * @method string getHash()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeTransaction extends Request
{

}