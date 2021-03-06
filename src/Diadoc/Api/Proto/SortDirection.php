<?php
/**
* Auto generated from TimeBasedFilter.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * SortDirection enum
 */
final class SortDirection
{
    const UnknownSortDirection = 0;
    const Ascending = 1;
    const Descending = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownSortDirection' => self::UnknownSortDirection,
            'Ascending' => self::Ascending,
            'Descending' => self::Descending,
        );
    }
}
}