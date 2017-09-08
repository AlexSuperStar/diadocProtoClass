<?php
/**
* Auto generated from ResolutionRequestInfo.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * ResolutionRequestType enum
 */
final class ResolutionRequestType
{
    const UnknownResolutionRequestType = -1;
    const ApprovementRequest = 0;
    const SignatureRequest = 1;
    const ApprovementSignatureRequest = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownResolutionRequestType' => self::UnknownResolutionRequestType,
            'ApprovementRequest' => self::ApprovementRequest,
            'SignatureRequest' => self::SignatureRequest,
            'ApprovementSignatureRequest' => self::ApprovementSignatureRequest,
        );
    }
}
}