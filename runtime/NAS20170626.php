<?php

namespace aliyun\sdk\services\NAS20170626;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170626
 *
 * @package aliyun\sdk\services\NAS20170626
 * @method CreateAccessGroup CreateAccessGroup()
 * @method DescribeFileSystems DescribeFileSystems()
 * @method ModifyTieringJob ModifyTieringJob()
 * @method ModifyMountTarget ModifyMountTarget()
 * @method CPFSModifyFileSystem CPFSModifyFileSystem()
 * @method DescribeMountTargets DescribeMountTargets()
 * @method DeleteMountTarget DeleteMountTarget()
 * @method DeleteAccessRule DeleteAccessRule()
 * @method ModifyFileSystem ModifyFileSystem()
 * @method CreateAccessRule CreateAccessRule()
 * @method DeleteTieringPolicy DeleteTieringPolicy()
 * @method ModifyTieringPolicy ModifyTieringPolicy()
 * @method DescribeRegions DescribeRegions()
 * @method CreateFileSystem CreateFileSystem()
 * @method CPFSCreateFileSystem CPFSCreateFileSystem()
 * @method CPFSDescribeRegions CPFSDescribeRegions()
 * @method DescribeAccessGroups DescribeAccessGroups()
 * @method CreateTieringPolicy CreateTieringPolicy()
 * @method DescribeAccessRules DescribeAccessRules()
 * @method CreateTieringJob CreateTieringJob()
 * @method CPFSDescribeFileSystems CPFSDescribeFileSystems()
 * @method ModifyAccessGroup ModifyAccessGroup()
 * @method CreateMountTarget CreateMountTarget()
 * @method DeleteTieringJob DeleteTieringJob()
 * @method DeleteAccessGroup DeleteAccessGroup()
 * @method CPFSDeleteFileSystem CPFSDeleteFileSystem()
 * @method DeleteFileSystem DeleteFileSystem()
 * @method DescribeTieringJobs DescribeTieringJobs()
 * @method ModifyAccessRule ModifyAccessRule()
 */
class V20170626
{
}

/**
 * @method $this setAccessGroupName($accessGroupName)
 * @method string getAccessGroupName()
 * @method $this setAccessGroupType($accessGroupType)
 * @method string getAccessGroupType()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateAccessGroup extends Request
{

}/**
 * @method $this setFileSystemId($fileSystemId)
 * @method string getFileSystemId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeFileSystems extends Request
{

}/**
 * @method $this setVolume($volume)
 * @method string getVolume()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setPath($path)
 * @method string getPath()
 * @method $this setRecursive($recursive)
 * @method bool getRecursive()
 * @method $this setPolicy($policy)
 * @method string getPolicy()
 * @method $this setWeekday($weekday)
 * @method int getWeekday()
 * @method $this setHour($hour)
 * @method int getHour()
 * @method $this setEnabled($enabled)
 * @method bool getEnabled()
 */
class ModifyTieringJob extends Request
{

}/**
 * @method $this setFileSystemId($fileSystemId)
 * @method string getFileSystemId()
 * @method $this setMountTargetDomain($mountTargetDomain)
 * @method string getMountTargetDomain()
 * @method $this setAccessGroupName($accessGroupName)
 * @method string getAccessGroupName()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class ModifyMountTarget extends Request
{

}/**
 * @method $this setFsId($fsId)
 * @method string getFsId()
 * @method $this setFsDesc($fsDesc)
 * @method string getFsDesc()
 * @method $this setLdapUrl($ldapUrl)
 * @method string getLdapUrl()
 */
class CPFSModifyFileSystem extends Request
{

}/**
 * @method $this setFileSystemId($fileSystemId)
 * @method string getFileSystemId()
 * @method $this setMountTargetDomain($mountTargetDomain)
 * @method string getMountTargetDomain()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeMountTargets extends Request
{

}/**
 * @method $this setFileSystemId($fileSystemId)
 * @method string getFileSystemId()
 * @method $this setMountTargetDomain($mountTargetDomain)
 * @method string getMountTargetDomain()
 */
class DeleteMountTarget extends Request
{

}/**
 * @method $this setAccessGroupName($accessGroupName)
 * @method string getAccessGroupName()
 * @method $this setAccessRuleId($accessRuleId)
 * @method string getAccessRuleId()
 */
class DeleteAccessRule extends Request
{

}/**
 * @method $this setFileSystemId($fileSystemId)
 * @method string getFileSystemId()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyFileSystem extends Request
{

}/**
 * @method $this setAccessGroupName($accessGroupName)
 * @method string getAccessGroupName()
 * @method $this setSourceCidrIp($sourceCidrIp)
 * @method string getSourceCidrIp()
 * @method $this setRWAccessType($rWAccessType)
 * @method string getRWAccessType()
 * @method $this setUserAccessType($userAccessType)
 * @method string getUserAccessType()
 * @method $this setPriority($priority)
 * @method int getPriority()
 */
class CreateAccessRule extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 */
class DeleteTieringPolicy extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setMtime($mtime)
 * @method int getMtime()
 * @method $this setAtime($atime)
 * @method int getAtime()
 * @method $this setCtime($ctime)
 * @method int getCtime()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setRecallTime($recallTime)
 * @method int getRecallTime()
 */
class ModifyTieringPolicy extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeRegions extends Request
{

}/**
 * @method $this setStorageType($storageType)
 * @method string getStorageType()
 * @method $this setProtocolType($protocolType)
 * @method string getProtocolType()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateFileSystem extends Request
{

}/**
 * @method $this setFsDesc($fsDesc)
 * @method string getFsDesc()
 * @method $this setFsSpec($fsSpec)
 * @method string getFsSpec()
 * @method $this setBandwidth($bandwidth)
 * @method int getBandwidth()
 * @method $this setCapacity($capacity)
 * @method int getCapacity()
 * @method $this setNetworkType($networkType)
 * @method string getNetworkType()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 */
class CPFSCreateFileSystem extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class CPFSDescribeRegions extends Request
{

}/**
 * @method $this setAccessGroupName($accessGroupName)
 * @method string getAccessGroupName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeAccessGroups extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setMtime($mtime)
 * @method int getMtime()
 * @method $this setAtime($atime)
 * @method int getAtime()
 * @method $this setCtime($ctime)
 * @method int getCtime()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setRecallTime($recallTime)
 * @method int getRecallTime()
 */
class CreateTieringPolicy extends Request
{

}/**
 * @method $this setAccessGroupName($accessGroupName)
 * @method string getAccessGroupName()
 * @method $this setAccessRuleId($accessRuleId)
 * @method string getAccessRuleId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeAccessRules extends Request
{

}/**
 * @method $this setVolume($volume)
 * @method string getVolume()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setPath($path)
 * @method string getPath()
 * @method $this setRecursive($recursive)
 * @method bool getRecursive()
 * @method $this setPolicy($policy)
 * @method string getPolicy()
 * @method $this setWeekday($weekday)
 * @method int getWeekday()
 * @method $this setHour($hour)
 * @method int getHour()
 * @method $this setEnabled($enabled)
 * @method bool getEnabled()
 */
class CreateTieringJob extends Request
{

}/**
 * @method $this setFsId($fsId)
 * @method string getFsId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class CPFSDescribeFileSystems extends Request
{

}/**
 * @method $this setAccessGroupName($accessGroupName)
 * @method string getAccessGroupName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyAccessGroup extends Request
{

}/**
 * @method $this setFileSystemId($fileSystemId)
 * @method string getFileSystemId()
 * @method $this setAccessGroupName($accessGroupName)
 * @method string getAccessGroupName()
 * @method $this setNetworkType($networkType)
 * @method string getNetworkType()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 */
class CreateMountTarget extends Request
{

}/**
 * @method $this setVolume($volume)
 * @method string getVolume()
 * @method $this setName($name)
 * @method string getName()
 */
class DeleteTieringJob extends Request
{

}/**
 * @method $this setAccessGroupName($accessGroupName)
 * @method string getAccessGroupName()
 */
class DeleteAccessGroup extends Request
{

}/**
 * @method $this setFsId($fsId)
 * @method string getFsId()
 */
class CPFSDeleteFileSystem extends Request
{

}/**
 * @method $this setFileSystemId($fileSystemId)
 * @method string getFileSystemId()
 */
class DeleteFileSystem extends Request
{

}/**
 * @method $this setVolume($volume)
 * @method string getVolume()
 */
class DescribeTieringJobs extends Request
{

}/**
 * @method $this setAccessGroupName($accessGroupName)
 * @method string getAccessGroupName()
 * @method $this setAccessRuleId($accessRuleId)
 * @method string getAccessRuleId()
 * @method $this setSourceCidrIp($sourceCidrIp)
 * @method string getSourceCidrIp()
 * @method $this setRWAccessType($rWAccessType)
 * @method string getRWAccessType()
 * @method $this setUserAccessType($userAccessType)
 * @method string getUserAccessType()
 * @method $this setPriority($priority)
 * @method int getPriority()
 */
class ModifyAccessRule extends Request
{

}