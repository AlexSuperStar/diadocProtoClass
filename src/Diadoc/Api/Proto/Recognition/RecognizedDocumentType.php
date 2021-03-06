<?php
/**
* Auto generated from Recognition.proto
*
 * Diadoc.Api.Proto.Recognition package
 */

namespace Diadoc\Api\Proto\Recognition {
/**
 * RecognizedDocumentType enum
 */
final class RecognizedDocumentType
{
    const UnknownRecognizedDocumentType = -1;
    const Invoice = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownRecognizedDocumentType' => self::UnknownRecognizedDocumentType,
            'Invoice' => self::Invoice,
        );
    }
}
}