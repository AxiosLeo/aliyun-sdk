<?php
namespace aliyun\sdk\services\CS\request;

use aliyun\sdk\services\CS\CSCommon;

/**
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setclusterType($clusterType)
 * @method string getclusterType()
 */
final class DescribeClusters extends CSCommon
{
    public $action = 'DescribeClusters';
}
