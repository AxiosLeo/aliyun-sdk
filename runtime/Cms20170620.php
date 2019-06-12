<?php

namespace aliyun\sdk\services\Cms20170620;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170620
 *
 * @package aliyun\sdk\services\Cms20170620
 * @method GetProductGroupsAction GetProductGroupsAction()
 * @method ListAlertTemplate ListAlertTemplate()
 * @method UpdateTemplateApplyGroups UpdateTemplateApplyGroups()
 * @method PutAlertTemplate PutAlertTemplate()
 * @method DeleteAlertTemplate DeleteAlertTemplate()
 */
class V20170620
{
}

/**
 */
class GetProductGroupsAction extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAlertTemplate extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setGroupIds($groupIds)
 * @method string getGroupIds()
 */
class UpdateTemplateApplyGroups extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setTemplateDescribe($templateDescribe)
 * @method string getTemplateDescribe()
 * @method $this setSilenceTime($silenceTime)
 * @method string getSilenceTime()
 * @method $this setEnableStartTime($enableStartTime)
 * @method string getEnableStartTime()
 * @method $this setEnableEndTime($enableEndTime)
 * @method string getEnableEndTime()
 * @method $this setNotifyLevel($notifyLevel)
 * @method string getNotifyLevel()
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 * @method $this setApplyGroups($applyGroups)
 * @method string getApplyGroups()
 * @method $this setAlarmTemplateItems($alarmTemplateItems)
 * @method string getAlarmTemplateItems()
 */
class PutAlertTemplate extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 */
class DeleteAlertTemplate extends Request
{

}