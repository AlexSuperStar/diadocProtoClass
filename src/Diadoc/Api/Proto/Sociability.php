<?php
/**
* Auto generated from Organization.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * Sociability enum
 */
final class Sociability
{
    const AllOrganizations = 0;
    const CounteragentsOnly = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'AllOrganizations' => self::AllOrganizations,
            'CounteragentsOnly' => self::CounteragentsOnly,
        );
    }
}
}