<?php
/**
 * Auto generated from Counteragent.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * CounteragentStatus enum
 */
final class CounteragentStatus
{
    const UnknownCounteragentStatus = 0;
    const IsMyCounteragent = 1;
    const InvitesMe = 2;
    const IsInvitedByMe = 3;
    const RejectsMe = 5;
    const IsRejectedByMe = 6;
    const NotInCounteragentList = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownCounteragentStatus' => self::UnknownCounteragentStatus,
            'IsMyCounteragent' => self::IsMyCounteragent,
            'InvitesMe' => self::InvitesMe,
            'IsInvitedByMe' => self::IsInvitedByMe,
            'RejectsMe' => self::RejectsMe,
            'IsRejectedByMe' => self::IsRejectedByMe,
            'NotInCounteragentList' => self::NotInCounteragentList,
        );
    }
}
}