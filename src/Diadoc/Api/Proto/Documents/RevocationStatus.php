<?php
/**
 * Auto generated from Document.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Documents package
 */

namespace Diadoc\Api\Proto\Documents {
/**
 * RevocationStatus enum
 */
final class RevocationStatus
{
    const UnknownRevocationStatus = 0;
    const RevocationStatusNone = 1;
    const RevocationIsRequestedByMe = 2;
    const RequestsMyRevocation = 3;
    const RevocationAccepted = 4;
    const RevocationRejected = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownRevocationStatus' => self::UnknownRevocationStatus,
            'RevocationStatusNone' => self::RevocationStatusNone,
            'RevocationIsRequestedByMe' => self::RevocationIsRequestedByMe,
            'RequestsMyRevocation' => self::RequestsMyRevocation,
            'RevocationAccepted' => self::RevocationAccepted,
            'RevocationRejected' => self::RevocationRejected,
        );
    }
}
}