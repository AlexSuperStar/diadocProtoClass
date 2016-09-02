<?php
/**
 * Auto generated from ResolutionInfo.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * ResolutionType enum
 */
final class ResolutionType
{
    const UnknownResolutionType = -1;
    const UndefinedResolutionType = 0;
    const Approve = 1;
    const Disapprove = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownResolutionType' => self::UnknownResolutionType,
            'UndefinedResolutionType' => self::UndefinedResolutionType,
            'Approve' => self::Approve,
            'Disapprove' => self::Disapprove,
        );
    }
}
}