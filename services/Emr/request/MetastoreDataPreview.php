<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setTableName($TableName)
 * @method string getTableName()
 */
final class MetastoreDataPreview extends EmrCommon
{
    public $action = 'MetastoreDataPreview';
}
