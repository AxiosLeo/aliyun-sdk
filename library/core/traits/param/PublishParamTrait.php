<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 12:49
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait PublishParamTrait.
 *
 * @method getPublish()
 */
trait PublishParamTrait
{
    /**
     * @param bool $publish
     *
     * @return $this
     */
    public function setPublish($publish)
    {
        if ('false' === strtolower($publish)) {
            $publish = false;
        }
        $publish = $publish ? 'True' : 'False';
        $this->setParam('Publish', $publish);

        return $this;
    }
}
