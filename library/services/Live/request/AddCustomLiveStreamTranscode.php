<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDomain($Domain)
 * @method string getDomain()
 * @method $this setApp($App)
 * @method string getApp()
 * @method $this setTemplate($Template)
 * @method string getTemplate()
 * @method $this setTemplateType($TemplateType)
 * @method string getTemplateType()
 * @method $this setHeight($Height)
 * @method integer getHeight()
 * @method $this setWidth($Width)
 * @method integer getWidth()
 * @method $this setFPS($FPS)
 * @method integer getFPS()
 * @method $this setVideoBitrate($VideoBitrate)
 * @method integer getVideoBitrate()
 * @method $this setAudioBitrate($AudioBitrate)
 * @method integer getAudioBitrate()
 * @method $this setGop($Gop)
 * @method string getGop()
 * @method $this setProfile($Profile)
 * @method integer getProfile()
 */
final class AddCustomLiveStreamTranscode extends LiveCommon
{
    public $action = 'AddCustomLiveStreamTranscode';
}
