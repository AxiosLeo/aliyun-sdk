<?php

namespace aliyun\sdk\services\Green20160627;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160627
 *
 * @package aliyun\sdk\services\Green20160627
 * @method ImageFeedback ImageFeedback()
 * @method TextKeywordFilter TextKeywordFilter()
 * @method ImageResults ImageResults()
 * @method ImageDetection ImageDetection()
 * @method ImageResult ImageResult()
 * @method AntispamResults AntispamResults()
 * @method TextWordCorrect TextWordCorrect()
 * @method AntispamDetection AntispamDetection()
 */
class V20160627
{
}

/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class ImageFeedback extends Request
{
}/**
 * @method $this setText($text)
 * @method string getText()
 */
class TextKeywordFilter extends Request
{
}/**
 * @method $this setTaskId($taskId)
 * @method array getTaskId()
 */
class ImageResults extends Request
{
}/**
 * @method $this setAsync($async)
 * @method bool getAsync()
 * @method $this setImageUrl($imageUrl)
 * @method array getImageUrl()
 * @method $this setScene($scene)
 * @method array getScene()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 * @method $this setNotifySeed($notifySeed)
 * @method string getNotifySeed()
 */
class ImageDetection extends Request
{
}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class ImageResult extends Request
{
}/**
 * @method $this setDataId($dataId)
 * @method array getDataId()
 */
class AntispamResults extends Request
{
}/**
 * @method $this setText($text)
 * @method string getText()
 */
class TextWordCorrect extends Request
{
}/**
 * @method $this setDataId($dataId)
 * @method string getDataId()
 * @method $this setPostId($postId)
 * @method string getPostId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setPostNick($postNick)
 * @method string getPostNick()
 * @method $this setPostIp($postIp)
 * @method string getPostIp()
 * @method $this setPostMac($postMac)
 * @method string getPostMac()
 * @method $this setPostTime($postTime)
 * @method int getPostTime()
 * @method $this setMachineCode($machineCode)
 * @method string getMachineCode()
 * @method $this setParentDataId($parentDataId)
 * @method string getParentDataId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setPostContent($postContent)
 * @method string getPostContent()
 * @method $this setImageUrl($imageUrl)
 * @method array getImageUrl()
 */
class AntispamDetection extends Request
{
}
