<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setHwmode($Hwmode)
 * @method string getHwmode()
 * @method $this setHtmode($Htmode)
 * @method string getHtmode()
 * @method $this setChannel($Channel)
 * @method integer getChannel()
 * @method $this setTxpower($Txpower)
 * @method integer getTxpower()
 * @method $this setBeaconInt($BeaconInt)
 * @method integer getBeaconInt()
 * @method $this setRts($Rts)
 * @method integer getRts()
 * @method $this setFrag($Frag)
 * @method integer getFrag()
 * @method $this setShortgi($Shortgi)
 * @method integer getShortgi()
 * @method $this setProbereq($Probereq)
 * @method integer getProbereq()
 * @method $this setNoscan($Noscan)
 * @method integer getNoscan()
 * @method $this setMinrate($Minrate)
 * @method integer getMinrate()
 * @method $this setBcastRate($BcastRate)
 * @method integer getBcastRate()
 * @method $this setMcastRate($McastRate)
 * @method integer getMcastRate()
 * @method $this setUapsd($Uapsd)
 * @method integer getUapsd()
 * @method $this setDisabled($Disabled)
 * @method integer getDisabled()
 * @method $this setRadioIndex($RadioIndex)
 * @method integer getRadioIndex()
 * @method $this setRequireMode($RequireMode)
 * @method string getRequireMode()
 * @method $this setMac($Mac)
 * @method string getMac()
 * @method $this setInstantlyEffective($InstantlyEffective)
 * @method integer getInstantlyEffective()
 */
final class SaveApRadioConfig extends CloudwfCommon
{
    public $action = 'SaveApRadioConfig';
}
