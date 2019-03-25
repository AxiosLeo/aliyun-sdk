<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setEtlJobId($EtlJobId)
 * @method string getEtlJobId()
 * @method $this setDataSourceId($DataSourceId)
 * @method string getDataSourceId()
 * @method $this setStageName($StageName)
 * @method string getStageName()
 * @method $this setSql($Sql)
 * @method string getSql()
 */
final class ResolveETLJobSqlSchema extends EmrCommon
{
    public $action = 'ResolveETLJobSqlSchema';
}
