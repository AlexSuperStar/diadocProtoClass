<?php
/**
 * Auto generated from ReceiptStatus.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Documents package
 */

namespace Diadoc\Api\Proto\Documents {
/**
 * ReceiptStatus enum
 */
final class ReceiptStatus
{
    const UnknownReceiptStatus = 0;
    const ReceiptStatusNone = 1;
    const ReceiptStatusFinished = 2;
    const ReceiptStatusHaveToCreateReceipt = 3;
    const ReceiptStatusWaitingForReceipt = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownReceiptStatus' => self::UnknownReceiptStatus,
            'ReceiptStatusNone' => self::ReceiptStatusNone,
            'ReceiptStatusFinished' => self::ReceiptStatusFinished,
            'ReceiptStatusHaveToCreateReceipt' => self::ReceiptStatusHaveToCreateReceipt,
            'ReceiptStatusWaitingForReceipt' => self::ReceiptStatusWaitingForReceipt,
        );
    }
}
}