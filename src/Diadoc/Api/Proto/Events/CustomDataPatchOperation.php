<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * CustomDataPatchOperation enum
 */
final class CustomDataPatchOperation
{
    const Set = 0;
    const Remove = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Set' => self::Set,
            'Remove' => self::Remove,
        );
    }
}
}