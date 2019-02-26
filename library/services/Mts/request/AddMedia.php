<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setFileURL($FileURL)
 * @method string getFileURL()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setCoverURL($CoverURL)
 * @method string getCoverURL()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setMediaWorkflowId($MediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setMediaWorkflowUserData($MediaWorkflowUserData)
 * @method string getMediaWorkflowUserData()
 * @method $this setInputUnbind($InputUnbind)
 * @method boolean getInputUnbind()
 * @method $this setCateId($CateId)
 * @method integer getCateId()
 * @method $this setOverrideParams($OverrideParams)
 * @method string getOverrideParams()
 */
final class AddMedia extends MtsCommon
{
    public $action = 'AddMedia';
}
