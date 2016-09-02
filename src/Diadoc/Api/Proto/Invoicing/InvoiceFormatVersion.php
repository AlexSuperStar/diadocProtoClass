<?php
/**
 * Auto generated from InvoiceInfo.proto at 2016-09-02 13:32:04
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * InvoiceFormatVersion enum
 */
final class InvoiceFormatVersion
{
    const DefaultInvoiceFormatVersion = 0;
    const v5_01 = 1;
    const v5_02 = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'DefaultInvoiceFormatVersion' => self::DefaultInvoiceFormatVersion,
            'v5_01' => self::v5_01,
            'v5_02' => self::v5_02,
        );
    }
}
}