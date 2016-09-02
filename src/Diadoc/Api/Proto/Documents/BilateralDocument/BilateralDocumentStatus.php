<?php
/**
 * Auto generated from BilateralDocument.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Documents.BilateralDocument package
 */

namespace Diadoc\Api\Proto\Documents\BilateralDocument {
/**
 * BilateralDocumentStatus enum
 */
final class BilateralDocumentStatus
{
    const UnknownBilateralDocumentStatus = 0;
    const OutboundWaitingForRecipientSignature = 1;
    const OutboundWithRecipientSignature = 2;
    const OutboundRecipientSignatureRequestRejected = 3;
    const OutboundWaitingForSenderSignature = 10;
    const OutboundInvalidSenderSignature = 11;
    const InboundWaitingForRecipientSignature = 4;
    const InboundWithRecipientSignature = 5;
    const InboundRecipientSignatureRequestRejected = 6;
    const InboundInvalidRecipientSignature = 12;
    const InternalWaitingForRecipientSignature = 7;
    const InternalWithRecipientSignature = 8;
    const InternalRecipientSignatureRequestRejected = 9;
    const InternalWaitingForSenderSignature = 13;
    const InternalInvalidSenderSignature = 14;
    const InternalInvalidRecipientSignature = 15;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownBilateralDocumentStatus' => self::UnknownBilateralDocumentStatus,
            'OutboundWaitingForRecipientSignature' => self::OutboundWaitingForRecipientSignature,
            'OutboundWithRecipientSignature' => self::OutboundWithRecipientSignature,
            'OutboundRecipientSignatureRequestRejected' => self::OutboundRecipientSignatureRequestRejected,
            'OutboundWaitingForSenderSignature' => self::OutboundWaitingForSenderSignature,
            'OutboundInvalidSenderSignature' => self::OutboundInvalidSenderSignature,
            'InboundWaitingForRecipientSignature' => self::InboundWaitingForRecipientSignature,
            'InboundWithRecipientSignature' => self::InboundWithRecipientSignature,
            'InboundRecipientSignatureRequestRejected' => self::InboundRecipientSignatureRequestRejected,
            'InboundInvalidRecipientSignature' => self::InboundInvalidRecipientSignature,
            'InternalWaitingForRecipientSignature' => self::InternalWaitingForRecipientSignature,
            'InternalWithRecipientSignature' => self::InternalWithRecipientSignature,
            'InternalRecipientSignatureRequestRejected' => self::InternalRecipientSignatureRequestRejected,
            'InternalWaitingForSenderSignature' => self::InternalWaitingForSenderSignature,
            'InternalInvalidSenderSignature' => self::InternalInvalidSenderSignature,
            'InternalInvalidRecipientSignature' => self::InternalInvalidRecipientSignature,
        );
    }
}
}