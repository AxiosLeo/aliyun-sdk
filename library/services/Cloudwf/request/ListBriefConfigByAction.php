<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setFuzzySearch($FuzzySearch)
 * @method string getFuzzySearch()
 * @method $this setLimit($Limit)
 * @method integer getLimit()
 * @method $this setAncestorApgroupId($AncestorApgroupId)
 * @method integer getAncestorApgroupId()
 */
final class ListBriefConfigByAction extends CloudwfCommon
{
    public $action = 'ListBriefConfigByAction';
}
