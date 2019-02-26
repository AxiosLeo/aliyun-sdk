<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTableId($TableId)
 * @method string getTableId()
 * @method $this setDeletePartitionName($DeletePartitionName)
 * @method array getDeletePartitionName()
 * @method $this setDeleteColumnName($DeleteColumnName)
 * @method array getDeleteColumnName()
 * @method $this setAddPartition($AddPartition)
 * @method array getAddPartition()
 * @method $this setAddColumn($AddColumn)
 * @method array getAddColumn()
 */
final class MetastoreUpdateTable extends EmrCommon
{
    public $action = 'MetastoreUpdateTable';
}
