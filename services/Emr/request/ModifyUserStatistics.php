<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setUserId($UserId)
 * @method string getUserId()
 * @method $this setJobNum($JobNum)
 * @method integer getJobNum()
 * @method $this setExecutePlanNum($ExecutePlanNum)
 * @method integer getExecutePlanNum()
 * @method $this setInteractionJobNum($InteractionJobNum)
 * @method integer getInteractionJobNum()
 * @method $this setJobMigratedNum($JobMigratedNum)
 * @method integer getJobMigratedNum()
 * @method $this setExecutePlanMigratedNum($ExecutePlanMigratedNum)
 * @method integer getExecutePlanMigratedNum()
 * @method $this setInteractionJobMigratedNum($InteractionJobMigratedNum)
 * @method integer getInteractionJobMigratedNum()
 */
final class ModifyUserStatistics extends EmrCommon
{
    public $action = 'ModifyUserStatistics';
}
