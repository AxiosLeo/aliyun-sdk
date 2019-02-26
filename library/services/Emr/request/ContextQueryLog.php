<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setLogStore($LogStore)
 * @method string getLogStore()
 * @method $this setFrom($From)
 * @method integer getFrom()
 * @method $this setTo($To)
 * @method integer getTo()
 * @method $this setPackMeta($PackMeta)
 * @method string getPackMeta()
 * @method $this setPackId($PackId)
 * @method string getPackId()
 * @method $this setSize($Size)
 * @method integer getSize()
 * @method $this setTotalOffset($TotalOffset)
 * @method integer getTotalOffset()
 * @method $this setReverse($Reverse)
 * @method boolean getReverse()
 */
final class ContextQueryLog extends EmrCommon
{
    public $action = 'ContextQueryLog';
}
