<?php
/**
 * Auto generated from Document.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Documents package
 */

namespace Diadoc\Api\Proto\Documents {
/**
 * RoamingNotificationStatus enum
 */
final class RoamingNotificationStatus
{
    const UnknownRoamingNotificationStatus = 0;
    const RoamingNotificationStatusNone = 1;
    const RoamingNotificationStatusSuccess = 2;
    const RoamingNotificationStatusError = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownRoamingNotificationStatus' => self::UnknownRoamingNotificationStatus,
            'RoamingNotificationStatusNone' => self::RoamingNotificationStatusNone,
            'RoamingNotificationStatusSuccess' => self::RoamingNotificationStatusSuccess,
            'RoamingNotificationStatusError' => self::RoamingNotificationStatusError,
        );
    }
}
}