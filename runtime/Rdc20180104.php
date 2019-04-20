<?php

namespace aliyun\sdk\services\Rdc20180104;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180104
 *
 * @package aliyun\sdk\services\Rdc20180104
 * @method GetIssue GetIssue()
 * @method CreateIssue CreateIssue()
 * @method ConvertPolicy ConvertPolicy()
 * @method DeleteEnterprise DeleteEnterprise()
 * @method GetEnterpriseListPaging GetEnterpriseListPaging()
 * @method GetBillingStatus GetBillingStatus()
 */
class V20180104
{
}

/**
 * @method $this setid($id)
 * @method int getid()
 * @method $this setregion($region)
 * @method string getregion()
 */
class GetIssue extends Request
{

}/**
 * @method $this setseriousLevelId($seriousLevelId)
 * @method int getseriousLevelId()
 * @method $this setregion($region)
 * @method string getregion()
 * @method $this setauthor($author)
 * @method string getauthor()
 * @method $this setassignedTo($assignedTo)
 * @method string getassignedTo()
 * @method $this settemplateId($templateId)
 * @method int gettemplateId()
 * @method $this setsubject($subject)
 * @method string getsubject()
 * @method $this setpriorityId($priorityId)
 * @method int getpriorityId()
 * @method $this setexpectedAt($expectedAt)
 * @method string getexpectedAt()
 * @method $this setdescription($description)
 * @method string getdescription()
 * @method $this setwatcherUsers($watcherUsers)
 * @method string getwatcherUsers()
 * @method $this setmoduleIds($moduleIds)
 * @method string getmoduleIds()
 * @method $this setcfList($cfList)
 * @method string getcfList()
 * @method $this setakProjectId($akProjectId)
 * @method int getakProjectId()
 * @method $this setrelatedAkProjectIds($relatedAkProjectIds)
 * @method string getrelatedAkProjectIds()
 * @method $this setstamp($stamp)
 * @method string getstamp()
 * @method $this setakVersionIds($akVersionIds)
 * @method string getakVersionIds()
 * @method $this setsource($source)
 * @method string getsource()
 */
class CreateIssue extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ConvertPolicy extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DeleteEnterprise extends Request
{

}/**
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setPage($page)
 * @method int getPage()
 */
class GetEnterpriseListPaging extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetBillingStatus extends Request
{

}