<?php
namespace aliyun\sdk\services\BssOpenApi\request;

use aliyun\sdk\services\BssOpenApi\BssOpenApiCommon;

/**
 * @method $this setInvoiceAmount($InvoiceAmount)
 * @method integer getInvoiceAmount()
 * @method $this setCustomerId($CustomerId)
 * @method integer getCustomerId()
 * @method $this setAddressId($AddressId)
 * @method integer getAddressId()
 * @method $this setInvoicingType($InvoicingType)
 * @method integer getInvoicingType()
 * @method $this setProcessWay($ProcessWay)
 * @method integer getProcessWay()
 * @method $this setApplyUserNick($ApplyUserNick)
 * @method string getApplyUserNick()
 * @method $this setSelectedIds($SelectedIds)
 * @method array getSelectedIds()
 * @method $this setInvoiceByAmount($InvoiceByAmount)
 * @method boolean getInvoiceByAmount()
 */
final class ApplyInvoice extends BssOpenApiCommon
{
    public $action = 'ApplyInvoice';
}
