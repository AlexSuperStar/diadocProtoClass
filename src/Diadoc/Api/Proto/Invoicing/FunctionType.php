<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * FunctionType enum
 */
final class FunctionType
{
    const Invoice = 0;
    const Basic = 1;
    const InvoiceAndBasic = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Invoice' => self::Invoice,
            'Basic' => self::Basic,
            'InvoiceAndBasic' => self::InvoiceAndBasic,
        );
    }
}
}