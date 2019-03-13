<?php
namespace aliyun\sdk\services\Ots\request;

use aliyun\sdk\services\Ots\OtsCommon;

/**
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setInstanceName($InstanceName)
 * @method string getInstanceName()
 * @method $this setClusterType($ClusterType)
 * @method string getClusterType()
 * @method $this setNetwork($Network)
 * @method string getNetwork()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setTagInfo($TagInfo)
 * @method array getTagInfo()
 */
final class InsertInstance extends OtsCommon
{
    public $action = 'InsertInstance';
}
