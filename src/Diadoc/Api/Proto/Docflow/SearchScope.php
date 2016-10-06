<?php
/**
 * Auto generated from DocflowApi.proto at 2016-10-06 18:03:23
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * SearchScope enum
 */
final class SearchScope
{
    const SearchScopeAny = 0;
    const SearchScopeIncoming = 1;
    const SearchScopeOutgoing = 2;
    const SearchScopeDeleted = 3;
    const SearchScopeInternal = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SearchScopeAny' => self::SearchScopeAny,
            'SearchScopeIncoming' => self::SearchScopeIncoming,
            'SearchScopeOutgoing' => self::SearchScopeOutgoing,
            'SearchScopeDeleted' => self::SearchScopeDeleted,
            'SearchScopeInternal' => self::SearchScopeInternal,
        );
    }
}
}