<?php
/**
 * Auto generated from Document.proto at 2016-10-06 18:09:24
 *
 * Diadoc.Api.Proto.Documents package
 */

namespace Diadoc\Api\Proto\Documents {
/**
 * ResolutionStatusType enum
 */
final class ResolutionStatusType
{
    const UnknownResolutionStatus = -1;
    const None = 0;
    const Approved = 1;
    const Disapproved = 2;
    const ApprovementRequested = 3;
    const SignatureRequested = 4;
    const SignatureDenied = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownResolutionStatus' => self::UnknownResolutionStatus,
            'None' => self::None,
            'Approved' => self::Approved,
            'Disapproved' => self::Disapproved,
            'ApprovementRequested' => self::ApprovementRequested,
            'SignatureRequested' => self::SignatureRequested,
            'SignatureDenied' => self::SignatureDenied,
        );
    }
}
}