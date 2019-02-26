<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setMaterialIds($MaterialIds)
 * @method string getMaterialIds()
 */
final class SetEditingProjectMaterials extends VodCommon
{
    public $action = 'SetEditingProjectMaterials';
}
