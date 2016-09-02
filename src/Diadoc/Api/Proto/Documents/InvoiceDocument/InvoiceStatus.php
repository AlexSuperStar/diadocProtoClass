<?php
/**
 * Auto generated from InvoiceDocument.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Documents.InvoiceDocument package
 */

namespace Diadoc\Api\Proto\Documents\InvoiceDocument {
/**
 * InvoiceStatus enum
 */
final class InvoiceStatus
{
    const UnknownInvoiceStatus = 0;
    const OutboundWaitingForInvoiceReceipt = 1;
    const OutboundNotFinished = 2;
    const OutboundFinished = 3;
    const OutboundWaitingForSenderSignature = 6;
    const OutboundInvalidSenderSignature = 7;
    const InboundNotFinished = 4;
    const InboundFinished = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownInvoiceStatus' => self::UnknownInvoiceStatus,
            'OutboundWaitingForInvoiceReceipt' => self::OutboundWaitingForInvoiceReceipt,
            'OutboundNotFinished' => self::OutboundNotFinished,
            'OutboundFinished' => self::OutboundFinished,
            'OutboundWaitingForSenderSignature' => self::OutboundWaitingForSenderSignature,
            'OutboundInvalidSenderSignature' => self::OutboundInvalidSenderSignature,
            'InboundNotFinished' => self::InboundNotFinished,
            'InboundFinished' => self::InboundFinished,
        );
    }
}
}