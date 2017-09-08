<?php
/**
* Auto generated from ExtendedSigner.proto
*
 * Diadoc.Api.Proto.Invoicing.Signers package
 */

namespace Diadoc\Api\Proto\Invoicing\Signers {
/**
 * DocumentTitleType enum
 */
final class DocumentTitleType
{
    const UtdSeller = 0;
    const UtdBuyer = 1;
    const UcdSeller = 2;
    const UcdBuyer = 3;
    const TovTorg551Seller = 4;
    const TovTorg551Buyer = 5;
    const AccCert552Seller = 6;
    const AccCert552Buyer = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UtdSeller' => self::UtdSeller,
            'UtdBuyer' => self::UtdBuyer,
            'UcdSeller' => self::UcdSeller,
            'UcdBuyer' => self::UcdBuyer,
            'TovTorg551Seller' => self::TovTorg551Seller,
            'TovTorg551Buyer' => self::TovTorg551Buyer,
            'AccCert552Seller' => self::AccCert552Seller,
            'AccCert552Buyer' => self::AccCert552Buyer,
        );
    }
}
}