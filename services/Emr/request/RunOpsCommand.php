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
 * @method $this setHostIdList($HostIdList)
 * @method array getHostIdList()
 * @method $this setDimension($Dimension)
 * @method string getDimension()
 * @method $this setOpsCommandName($OpsCommandName)
 * @method string getOpsCommandName()
 * @method $this setComment($Comment)
 * @method string getComment()
 * @method $this setCustomParams($CustomParams)
 * @method string getCustomParams()
 */
final class RunOpsCommand extends EmrCommon
{
    public $action = 'RunOpsCommand';
}
