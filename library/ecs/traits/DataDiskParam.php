<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:25
 */

namespace aliyun\sdk\ecs\traits;

/**
 * Trait DataDiskParam.
 */
trait DataDiskParam
{
    private $DataDiskConfig = [
        'Category', 'Size', 'SnapshotId', 'Encrypted', 'DiskName', 'Description', 'DeleteWithInstance',
    ];

    public function setDataDisk($n, $key, $value)
    {
        if (in_array($key, $this->DataDiskConfig)) {
            $this->setParam('DataDisk.' . $n . '.' . $key, $value);
        }

        return $this;
    }

    public function getDataDisk($n = null, $key = null)
    {
        $needle = 'DataDisk.';
        $level  = 0;
        if (!is_null($n)) {
            $level  = 1;
            $needle = $needle . $n . '.';
        }
        if (!is_null($key) && 1 == $level) {
            $level  = 2;
            $needle = $needle . $key;
        }
        if (2 === $level) {
            return $this->params($needle);
        }

        $params = $this->params();
        $list   = [];
        foreach ($params as $k=>$v) {
            if (false !== strpos($k, $needle)) {
                list($DataDisk, $n, $key)  = explode('.', $k);
                $list[$DataDisk][$n][$key] = $v;
            }
        }

        return $list;
    }
}
