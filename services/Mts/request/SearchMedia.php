<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setFrom($From)
 * @method string getFrom()
 * @method $this setTo($To)
 * @method string getTo()
 * @method $this setKeyWord($KeyWord)
 * @method string getKeyWord()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setTag($Tag)
 * @method string getTag()
 * @method $this setCateId($CateId)
 * @method string getCateId()
 * @method $this setSortBy($SortBy)
 * @method string getSortBy()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class SearchMedia extends MtsCommon
{
    public $action = 'SearchMedia';
}
