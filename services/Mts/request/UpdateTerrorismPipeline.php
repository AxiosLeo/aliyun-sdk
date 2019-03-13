<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setState($State)
 * @method string getState()
 * @method $this setPriority($Priority)
 * @method integer getPriority()
 * @method $this setNotifyConfig($NotifyConfig)
 * @method string getNotifyConfig()
 */
final class UpdateTerrorismPipeline extends MtsCommon
{
    public $action = 'UpdateTerrorismPipeline';
}
