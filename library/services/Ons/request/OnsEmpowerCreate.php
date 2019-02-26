<?php
namespace aliyun\sdk\services\Ons\request;

use aliyun\sdk\services\Ons\OnsCommon;

/**
 * @method $this setOnsRegionId($OnsRegionId)
 * @method string getOnsRegionId()
 * @method $this setOnsPlatform($OnsPlatform)
 * @method string getOnsPlatform()
 * @method $this setPreventCache($PreventCache)
 * @method integer getPreventCache()
 * @method $this setEmpowerUser($EmpowerUser)
 * @method string getEmpowerUser()
 * @method $this setTopic($Topic)
 * @method string getTopic()
 * @method $this setRelation($Relation)
 * @method integer getRelation()
 */
final class OnsEmpowerCreate extends OnsCommon
{
    public $action = 'OnsEmpowerCreate';
}
