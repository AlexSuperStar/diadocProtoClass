<?php
/**
 * Auto generated from DiadocMessage-GetApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * EntityType enum
 */
final class EntityType
{
    const UnknownEntityType = 0;
    const Attachment = 1;
    const Signature = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownEntityType' => self::UnknownEntityType,
            'Attachment' => self::Attachment,
            'Signature' => self::Signature,
        );
    }
}
}