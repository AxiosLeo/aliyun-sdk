<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCasterId($CasterId)
 * @method string getCasterId()
 * @method $this setCasterName($CasterName)
 * @method string getCasterName()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setTranscodeConfig($TranscodeConfig)
 * @method string getTranscodeConfig()
 * @method $this setRecordConfig($RecordConfig)
 * @method string getRecordConfig()
 * @method $this setDelay($Delay)
 * @method float getDelay()
 * @method $this setUrgentMaterialId($UrgentMaterialId)
 * @method string getUrgentMaterialId()
 * @method $this setSideOutputUrl($SideOutputUrl)
 * @method string getSideOutputUrl()
 * @method $this setCallbackUrl($CallbackUrl)
 * @method string getCallbackUrl()
 * @method $this setProgramEffect($ProgramEffect)
 * @method integer getProgramEffect()
 * @method $this setProgramName($ProgramName)
 * @method string getProgramName()
 * @method $this setChannelEnable($ChannelEnable)
 * @method integer getChannelEnable()
 */
final class SetCasterConfig extends LiveCommon
{
    public $action = 'SetCasterConfig';
}
