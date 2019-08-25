<?php

namespace aliyun\sdk\services\Green20160308;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160308
 *
 * @package aliyun\sdk\services\Green20160308
 * @method ImageFeedback ImageFeedback()
 * @method TextKeywordFilter TextKeywordFilter()
 * @method ImageResults ImageResults()
 * @method ImageDetection ImageDetection()
 * @method ImageResult ImageResult()
 * @method TextWordCorrect TextWordCorrect()
 */
class V20160308
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
 * @method $this setImageUrl($imageUrl)
 * @method array getImageUrl()
 * @method $this setScene($scene)
 * @method array getScene()
 * @method $this setAsync($async)
 * @method bool getAsync()
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
 * @method $this setText($text)
 * @method string getText()
 */
class TextWordCorrect extends Request
{
}
