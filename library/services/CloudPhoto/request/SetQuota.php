<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setTotalQuota($TotalQuota)
 * @method integer getTotalQuota()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class SetQuota extends CloudPhotoCommon
{
    public $action = 'SetQuota';
}
