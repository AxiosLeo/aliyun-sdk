<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 17:37
 */

namespace aliyun\sdk\ecs\traits;

/**
 * Trait ImageOwnerAliasParam.
 */
trait ImageOwnerAliasParam
{
    public function setImageOwnerAlias($ImageOwnerAlias)
    {
        $options = [
            'system', 'self', 'others', 'marketplace',
        ];

        if (is_numeric($ImageOwnerAlias)) {
            $ImageOwnerAlias = isset($options[$ImageOwnerAlias]) ? $options[$ImageOwnerAlias] : '';
        }

        if (!in_array($ImageOwnerAlias, $options)) {
            $ImageOwnerAlias = '';
        }

        $this->setParam('ImageOwnerAlias', $ImageOwnerAlias);

        return $this;
    }
}
