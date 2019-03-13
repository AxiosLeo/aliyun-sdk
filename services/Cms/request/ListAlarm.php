<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setNamespace($Namespace)
 * @method string getNamespace()
 * @method $this setDimension($Dimension)
 * @method string getDimension()
 * @method $this setState($State)
 * @method string getState()
 * @method $this setIsEnable($IsEnable)
 * @method boolean getIsEnable()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListAlarm extends CmsCommon
{
    public $action = 'ListAlarm';
}
