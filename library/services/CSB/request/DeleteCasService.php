<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCasServiceId($CasServiceId)
 * @method string getCasServiceId()
 * @method $this setCasCsbName($CasCsbName)
 * @method string getCasCsbName()
 * @method $this setSrcUserId($SrcUserId)
 * @method string getSrcUserId()
 * @method $this setLeafOnly($LeafOnly)
 * @method boolean getLeafOnly()
 */
final class DeleteCasService extends CSBCommon
{
    public $action = 'DeleteCasService';
}
