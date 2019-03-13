<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setAutoCleanEnabled($AutoCleanEnabled)
 * @method string getAutoCleanEnabled()
 * @method $this setAutoCleanDays($AutoCleanDays)
 * @method integer getAutoCleanDays()
 * @method $this setDefaultQuota($DefaultQuota)
 * @method integer getDefaultQuota()
 * @method $this setDefaultTrashQuota($DefaultTrashQuota)
 * @method integer getDefaultTrashQuota()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 */
final class EditPhotoStore extends CloudPhotoCommon
{
    public $action = 'EditPhotoStore';
}
