<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * ItemMark enum
 */
final class ItemMark
{
    const NotSpecified = 0;
    const Property = 1;
    const Job = 2;
    const Service = 3;
    const PropertyRights = 4;
    const Other = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'NotSpecified' => self::NotSpecified,
            'Property' => self::Property,
            'Job' => self::Job,
            'Service' => self::Service,
            'PropertyRights' => self::PropertyRights,
            'Other' => self::Other,
        );
    }
}
}