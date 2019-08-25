<?php

namespace aliyun\sdk\services\Rdc20180821;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180821
 *
 * @package aliyun\sdk\services\Rdc20180821
 * @method GetProjectMembers GetProjectMembers()
 * @method GetCustomFieldsByTemplateId GetCustomFieldsByTemplateId()
 * @method GetChangeLog GetChangeLog()
 * @method GetWorkitemById GetWorkitemById()
 * @method GetBindedUserByDingId GetBindedUserByDingId()
 * @method GetIssueById GetIssueById()
 * @method SearchWorkitem SearchWorkitem()
 * @method AddEnterpriseMember AddEnterpriseMember()
 * @method UpdateWorkitem UpdateWorkitem()
 * @method CreateWorkitem CreateWorkitem()
 * @method SearchProjectsByRegion SearchProjectsByRegion()
 * @method GetUserByAliyunPk GetUserByAliyunPk()
 * @method SearchTestCase SearchTestCase()
 * @method CreateEnterprise CreateEnterprise()
 */
class V20180821
{
}

/**
 * @method $this setCorpIdentifier($corpIdentifier)
 * @method string getCorpIdentifier()
 * @method $this setProjectId($projectId)
 * @method int getProjectId()
 * @method $this setStaffId($staffId)
 * @method string getStaffId()
 */
class GetProjectMembers extends Request
{
}/**
 * @method $this setAKProjectId($aKProjectId)
 * @method int getAKProjectId()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setCorpIdentifier($corpIdentifier)
 * @method string getCorpIdentifier()
 */
class GetCustomFieldsByTemplateId extends Request
{
}/**
 * @method $this setTargetType($targetType)
 * @method string getTargetType()
 * @method $this setTargetIds($targetIds)
 * @method string getTargetIds()
 * @method $this setCorpIdentifier($corpIdentifier)
 * @method string getCorpIdentifier()
 */
class GetChangeLog extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setCorpIdentifier($corpIdentifier)
 * @method string getCorpIdentifier()
 */
class GetWorkitemById extends Request
{
}/**
 * @method $this setDingId($dingId)
 * @method string getDingId()
 */
class GetBindedUserByDingId extends Request
{
}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setCorpIdentifier($corpIdentifier)
 * @method string getCorpIdentifier()
 */
class GetIssueById extends Request
{
}/**
 * @method $this setStamp($stamp)
 * @method string getStamp()
 * @method $this setAKProjectId($aKProjectId)
 * @method int getAKProjectId()
 * @method $this setToPage($toPage)
 * @method int getToPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCorpIdentifier($corpIdentifier)
 * @method string getCorpIdentifier()
 * @method $this setSprintId($sprintId)
 * @method int getSprintId()
 */
class SearchWorkitem extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStaffId($staffId)
 * @method string getStaffId()
 * @method $this setOperator($operator)
 * @method string getOperator()
 */
class AddEnterpriseMember extends Request
{
}/**
 * @method $this setAKProjectId($aKProjectId)
 * @method int getAKProjectId()
 * @method $this setCorpIdentifier($corpIdentifier)
 * @method string getCorpIdentifier()
 * @method $this setModifier($modifier)
 * @method string getModifier()
 * @method $this setAssignedTo($assignedTo)
 * @method string getAssignedTo()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setSubject($subject)
 * @method string getSubject()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setStamp($stamp)
 * @method string getStamp()
 * @method $this setCfList($cfList)
 * @method string getCfList()
 * @method $this setIssueId($issueId)
 * @method int getIssueId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPriority($priority)
 * @method string getPriority()
 * @method $this setSeriousLevel($seriousLevel)
 * @method string getSeriousLevel()
 * @method $this setVerifier($verifier)
 * @method string getVerifier()
 * @method $this setSprintId($sprintId)
 * @method int getSprintId()
 * @method $this setIgnoreCheck($ignoreCheck)
 * @method bool getIgnoreCheck()
 * @method $this setCfs($cfs)
 * @method string getCfs()
 */
class UpdateWorkitem extends Request
{
}/**
 * @method $this setCorpIdentifier($corpIdentifier)
 * @method string getCorpIdentifier()
 * @method $this setAuthor($author)
 * @method string getAuthor()
 * @method $this setAssignedTo($assignedTo)
 * @method string getAssignedTo()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setSubject($subject)
 * @method string getSubject()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setStamp($stamp)
 * @method string getStamp()
 * @method $this setAKProjectId($aKProjectId)
 * @method int getAKProjectId()
 * @method $this setCfList($cfList)
 * @method string getCfList()
 * @method $this setVerifier($verifier)
 * @method string getVerifier()
 * @method $this setPriorityId($priorityId)
 * @method int getPriorityId()
 * @method $this setSeriousLevelId($seriousLevelId)
 * @method int getSeriousLevelId()
 * @method $this setWatcherUsers($watcherUsers)
 * @method string getWatcherUsers()
 * @method $this setModuleIds($moduleIds)
 * @method string getModuleIds()
 */
class CreateWorkitem extends Request
{
}/**
 * @method $this setCorpIdentifier($corpIdentifier)
 * @method string getCorpIdentifier()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setToPage($toPage)
 * @method int getToPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class SearchProjectsByRegion extends Request
{
}/**
 * @method $this setPk($pk)
 * @method string getPk()
 */
class GetUserByAliyunPk extends Request
{
}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCorpIdentifier($corpIdentifier)
 * @method string getCorpIdentifier()
 * @method $this setAkProjectId($akProjectId)
 * @method string getAkProjectId()
 * @method $this setCaseTag($caseTag)
 * @method string getCaseTag()
 * @method $this setPageNum($pageNum)
 * @method string getPageNum()
 * @method $this setCreateDateStart($createDateStart)
 * @method string getCreateDateStart()
 * @method $this setCreateDateEnd($createDateEnd)
 * @method string getCreateDateEnd()
 * @method $this setUpdateDateStart($updateDateStart)
 * @method string getUpdateDateStart()
 * @method $this setUpdateDateEnd($updateDateEnd)
 * @method string getUpdateDateEnd()
 */
class SearchTestCase extends Request
{
}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setEmails($emails)
 * @method string getEmails()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setCreatorStaffId($creatorStaffId)
 * @method string getCreatorStaffId()
 */
class CreateEnterprise extends Request
{
}
