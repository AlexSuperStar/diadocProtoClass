<?php
/**
 * Auto generated from DocumentDirection.proto at 2016-09-02 13:33:34
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