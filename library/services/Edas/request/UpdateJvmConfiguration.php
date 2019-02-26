<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setOptions($Options)
 * @method string getOptions()
 * @method $this setMinHeapSize($MinHeapSize)
 * @method integer getMinHeapSize()
 * @method $this setMaxPermSize($MaxPermSize)
 * @method integer getMaxPermSize()
 * @method $this setMaxHeapSize($MaxHeapSize)
 * @method integer getMaxHeapSize()
 */
final class UpdateJvmConfiguration extends EdasCommon
{
    public $action = 'UpdateJvmConfiguration';
}
