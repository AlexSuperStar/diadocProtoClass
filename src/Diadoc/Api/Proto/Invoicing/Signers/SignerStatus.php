<?php
/**
* Auto generated from ExtendedSigner.proto
*
 * Diadoc.Api.Proto.Invoicing.Signers package
 */

namespace Diadoc\Api\Proto\Invoicing\Signers {
/**
 * SignerStatus enum
 */
final class SignerStatus
{
    const SellerEmployee = 1;
    const InformationCreatorEmployee = 2;
    const OtherOrganizationEmployee = 3;
    const AuthorizedPerson = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SellerEmployee' => self::SellerEmployee,
            'InformationCreatorEmployee' => self::InformationCreatorEmployee,
            'OtherOrganizationEmployee' => self::OtherOrganizationEmployee,
            'AuthorizedPerson' => self::AuthorizedPerson,
        );
    }
}
}