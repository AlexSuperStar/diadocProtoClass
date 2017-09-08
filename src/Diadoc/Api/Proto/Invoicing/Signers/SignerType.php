<?php
/**
* Auto generated from ExtendedSigner.proto
*
 * Diadoc.Api.Proto.Invoicing.Signers package
 */

namespace Diadoc\Api\Proto\Invoicing\Signers {
/**
 * SignerType enum
 */
final class SignerType
{
    const LegalEntity = 1;
    const IndividualEntity = 2;
    const PhysicalPerson = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'LegalEntity' => self::LegalEntity,
            'IndividualEntity' => self::IndividualEntity,
            'PhysicalPerson' => self::PhysicalPerson,
        );
    }
}
}