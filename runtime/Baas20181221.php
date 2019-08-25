<?php

namespace aliyun\sdk\services\Baas20181221;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20181221
 *
 * @package aliyun\sdk\services\Baas20181221
 * @method AcceptInvitation AcceptInvitation()
 * @method QueryConsortiumDeletable QueryConsortiumDeletable()
 * @method CreateConsortium CreateConsortium()
 * @method CreateOrganizationUser CreateOrganizationUser()
 * @method DescribeOrganizationUsers DescribeOrganizationUsers()
 * @method DescribeOrgnaizationChaincodes DescribeOrgnaizationChaincodes()
 * @method CheckOrganizationDomain CheckOrganizationDomain()
 * @method SynchronizeChaincode SynchronizeChaincode()
 * @method DeleteChaincode DeleteChaincode()
 * @method DescribeRootDomain DescribeRootDomain()
 * @method DescribeConsortiumChannels DescribeConsortiumChannels()
 * @method DescribeOrdererLogs DescribeOrdererLogs()
 * @method UpgradeChaincode UpgradeChaincode()
 * @method DescribeOrganizationDeletable DescribeOrganizationDeletable()
 * @method ConfirmConsortiumMember ConfirmConsortiumMember()
 * @method DescribeConsortiumChaincodes DescribeConsortiumChaincodes()
 * @method DescribeConsortiumMembers DescribeConsortiumMembers()
 * @method DescribeConsortiumAdminStatus DescribeConsortiumAdminStatus()
 * @method QueryOrganizationDeletable QueryOrganizationDeletable()
 * @method ResetOrganizationUserPassword ResetOrganizationUserPassword()
 * @method DescribeConsortiumSpecs DescribeConsortiumSpecs()
 * @method DescribeConsortiums DescribeConsortiums()
 * @method InstallChaincode InstallChaincode()
 * @method DescribeOrganizationChannels DescribeOrganizationChannels()
 * @method DescribeConsortiumDeletable DescribeConsortiumDeletable()
 * @method DescribeCandidateOrganizations DescribeCandidateOrganizations()
 * @method CreateConsortiumMember CreateConsortiumMember()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeTasks DescribeTasks()
 * @method CreateEcosphere CreateEcosphere()
 * @method DescribeOrganizationSpecs DescribeOrganizationSpecs()
 * @method DescribeChannelMembers DescribeChannelMembers()
 * @method DescribeExplorer DescribeExplorer()
 * @method DescribeConsortiumConfig DescribeConsortiumConfig()
 * @method CreateChannel CreateChannel()
 * @method DownloadOrganizationSDK DownloadOrganizationSDK()
 * @method DescribeOrganizations DescribeOrganizations()
 * @method DescribeOrganizationMembers DescribeOrganizationMembers()
 * @method CreateChaincode CreateChaincode()
 * @method CheckConsortiumDomain CheckConsortiumDomain()
 * @method InstantiateChaincode InstantiateChaincode()
 * @method DescribePeerLogs DescribePeerLogs()
 * @method DescribeEcosphereSpecs DescribeEcosphereSpecs()
 * @method DescribeOrganizationChaincodes DescribeOrganizationChaincodes()
 * @method DescribeOrganization DescribeOrganization()
 * @method DescribeConsortiumOrderers DescribeConsortiumOrderers()
 * @method CreateChannelMember CreateChannelMember()
 * @method DescribeOrganizationPeers DescribeOrganizationPeers()
 * @method CreateOrganization CreateOrganization()
 * @method DescribeConsortiumMemberApproval DescribeConsortiumMemberApproval()
 * @method QueryEthereumDeletable QueryEthereumDeletable()
 * @method DescribeChaincodeUploadPolicy DescribeChaincodeUploadPolicy()
 * @method DescribeInvitationCode DescribeInvitationCode()
 * @method DescribeInviter DescribeInviter()
 * @method JoinChannel JoinChannel()
 */
class V20181221
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
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class QueryConsortiumDeletable extends Request
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
 */
class CreateConsortium extends Request
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
 * @method $this setConsortiumId($consortiumId)
 * @method string getConsortiumId()
 * @method $this setOrganization($organization)
 * @method array getOrganization()
 */
class ConfirmConsortiumMember extends Request
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
 */
class DescribeConsortiumSpecs extends Request
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
 */
class DescribeRegions extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeTasks extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 */
class DescribeChannelMembers extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeConsortiumConfig extends Request
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
 * @method $this setOrganizationId($organizationId)
 * @method string getOrganizationId()
 * @method $this setLocation($location)
 * @method string getLocation()
 */
class DescribeOrganizationMembers extends Request
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
 */
class InstantiateChaincode extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeEcosphereSpecs extends Request
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
 */
class CreateOrganization extends Request
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
 * @method $this setEthereumId($ethereumId)
 * @method string getEthereumId()
 */
class QueryEthereumDeletable extends Request
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
}
