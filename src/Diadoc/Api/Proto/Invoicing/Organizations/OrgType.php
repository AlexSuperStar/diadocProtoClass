<?php
/**
* Auto generated from ExtendedOrganizationInfo.proto
*
 * Diadoc.Api.Proto.Invoicing.Organizations package
 */

namespace Diadoc\Api\Proto\Invoicing\Organizations {
/**
 * OrgType enum
 */
final class OrgType
{
    const LegalEntity = 1;
    const IndividualEntity = 2;
    const ForeignEntity = 3;
    const PhysicalEntity = 4;

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
            'ForeignEntity' => self::ForeignEntity,
            'PhysicalEntity' => self::PhysicalEntity,
        );
    }
}
}