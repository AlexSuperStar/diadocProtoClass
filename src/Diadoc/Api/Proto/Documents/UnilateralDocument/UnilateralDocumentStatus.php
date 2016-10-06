<?php
/**
 * Auto generated from UnilateralDocument.proto at 2016-10-06 18:09:24
 *
 * Diadoc.Api.Proto.Documents.UnilateralDocument package
 */

namespace Diadoc\Api\Proto\Documents\UnilateralDocument {
/**
 * UnilateralDocumentStatus enum
 */
final class UnilateralDocumentStatus
{
    const UnknownUnilateralDocumentStatus = 0;
    const Outbound = 1;
    const OutboundWaitingForSenderSignature = 4;
    const OutboundInvalidSenderSignature = 5;
    const Inbound = 2;
    const Internal = 3;
    const InternalWaitingForSenderSignature = 6;
    const InternalInvalidSenderSignature = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownUnilateralDocumentStatus' => self::UnknownUnilateralDocumentStatus,
            'Outbound' => self::Outbound,
            'OutboundWaitingForSenderSignature' => self::OutboundWaitingForSenderSignature,
            'OutboundInvalidSenderSignature' => self::OutboundInvalidSenderSignature,
            'Inbound' => self::Inbound,
            'Internal' => self::Internal,
            'InternalWaitingForSenderSignature' => self::InternalWaitingForSenderSignature,
            'InternalInvalidSenderSignature' => self::InternalInvalidSenderSignature,
        );
    }
}
}