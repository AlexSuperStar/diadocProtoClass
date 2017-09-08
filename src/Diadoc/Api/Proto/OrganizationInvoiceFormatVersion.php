<?php
/**
* Auto generated from Organization.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * OrganizationInvoiceFormatVersion enum
 */
final class OrganizationInvoiceFormatVersion
{
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
            'v5_01' => self::v5_01,
            'v5_02' => self::v5_02,
        );
    }
}
}