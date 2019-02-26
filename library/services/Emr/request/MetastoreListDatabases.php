<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setFuzzyDatabaseName($FuzzyDatabaseName)
 * @method string getFuzzyDatabaseName()
 */
final class MetastoreListDatabases extends EmrCommon
{
    public $action = 'MetastoreListDatabases';
}
