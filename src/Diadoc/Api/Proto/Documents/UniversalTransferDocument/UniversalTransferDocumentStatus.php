<?php
/**
* Auto generated from UniversalTransferDocument.proto
*
 * Diadoc.Api.Proto.Documents.UniversalTransferDocument package
 */

namespace Diadoc\Api\Proto\Documents\UniversalTransferDocument {
/**
 * UniversalTransferDocumentStatus enum
 */
final class UniversalTransferDocumentStatus
{
    const UnknownDocumentStatus = 0;
    const OutboundWaitingForSenderSignature = 1;
    const OutboundWaitingForInvoiceReceiptAndRecipientSignature = 2;
    const OutboundWaitingForInvoiceReceipt = 3;
    const OutboundWaitingForRecipientSignature = 4;
    const OutboundWithRecipientSignature = 5;
    const OutboundRecipientSignatureRequestRejected = 6;
    const OutboundInvalidSenderSignature = 7;
    const OutboundNotFinished = 8;
    const OutboundFinished = 9;
    const InboundWaitingForRecipientSignature = 16;
    const InboundWithRecipientSignature = 17;
    const InboundRecipientSignatureRequestRejected = 18;
    const InboundInvalidRecipientSignature = 19;
    const InboundNotFinished = 20;
    const InboundFinished = 21;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownDocumentStatus' => self::UnknownDocumentStatus,
            'OutboundWaitingForSenderSignature' => self::OutboundWaitingForSenderSignature,
            'OutboundWaitingForInvoiceReceiptAndRecipientSignature' => self::OutboundWaitingForInvoiceReceiptAndRecipientSignature,
            'OutboundWaitingForInvoiceReceipt' => self::OutboundWaitingForInvoiceReceipt,
            'OutboundWaitingForRecipientSignature' => self::OutboundWaitingForRecipientSignature,
            'OutboundWithRecipientSignature' => self::OutboundWithRecipientSignature,
            'OutboundRecipientSignatureRequestRejected' => self::OutboundRecipientSignatureRequestRejected,
            'OutboundInvalidSenderSignature' => self::OutboundInvalidSenderSignature,
            'OutboundNotFinished' => self::OutboundNotFinished,
            'OutboundFinished' => self::OutboundFinished,
            'InboundWaitingForRecipientSignature' => self::InboundWaitingForRecipientSignature,
            'InboundWithRecipientSignature' => self::InboundWithRecipientSignature,
            'InboundRecipientSignatureRequestRejected' => self::InboundRecipientSignatureRequestRejected,
            'InboundInvalidRecipientSignature' => self::InboundInvalidRecipientSignature,
            'InboundNotFinished' => self::InboundNotFinished,
            'InboundFinished' => self::InboundFinished,
        );
    }
}
}