<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 13:20
 */

namespace aliyun\sdk\api\traits;

/**
 * Trait AuthTypeParam.
 *
 * @method getAuthType()
 */
trait AuthTypeParam
{
    public function setAuthType($auth_type)
    {
        if (!in_array(strtoupper($auth_type), ['APP', 'ANONYMOUS', 'APPOPENID'])) {
            switch ($auth_type) {
                case 0:$auth_type = 'APP'; break;
                case 1:$auth_type = 'ANONYMOUS'; break;
                case 2:$auth_type = 'APPOPENID'; break;
            }
        }
        $this->setParam('AuthType', $auth_type);

        return $this;
    }
}
