<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTemplateId($TemplateId)
 * @method string getTemplateId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setContainer($Container)
 * @method string getContainer()
 * @method $this setVideo($Video)
 * @method string getVideo()
 * @method $this setAudio($Audio)
 * @method string getAudio()
 * @method $this setMuxConfig($MuxConfig)
 * @method string getMuxConfig()
 * @method $this setTransConfig($TransConfig)
 * @method string getTransConfig()
 */
final class UpdateTemplate extends MtsCommon
{
    public $action = 'UpdateTemplate';
}
