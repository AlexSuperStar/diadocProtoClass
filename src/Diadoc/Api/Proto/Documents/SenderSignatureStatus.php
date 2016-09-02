<?php
/**
 * Auto generated from Document.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Documents package
 */

namespace Diadoc\Api\Proto\Documents {
/**
 * SenderSignatureStatus enum
 */
final class SenderSignatureStatus
{
    const UnknownSenderSignatureStatus = 0;
    const WaitingForSenderSignature = 1;
    const SenderSignatureUnchecked = 2;
    const SenderSignatureCheckedAndValid = 3;
    const SenderSignatureCheckedAndInvalid = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownSenderSignatureStatus' => self::UnknownSenderSignatureStatus,
            'WaitingForSenderSignature' => self::WaitingForSenderSignature,
            'SenderSignatureUnchecked' => self::SenderSignatureUnchecked,
            'SenderSignatureCheckedAndValid' => self::SenderSignatureCheckedAndValid,
            'SenderSignatureCheckedAndInvalid' => self::SenderSignatureCheckedAndInvalid,
        );
    }
}
}