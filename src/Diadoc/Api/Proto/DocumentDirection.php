<?php
/**
* Auto generated from DocumentDirection.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * DocumentDirection enum
 */
final class DocumentDirection
{
    const UnknownDocumentDirection = 0;
    const Inbound = 1;
    const Outbound = 2;
    const Internal = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownDocumentDirection' => self::UnknownDocumentDirection,
            'Inbound' => self::Inbound,
            'Outbound' => self::Outbound,
            'Internal' => self::Internal,
        );
    }
}
}