<?php
/**
 * Auto generated from InvoiceInfo.proto at 2016-09-02 13:32:04
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * TaxRate enum
 */
final class TaxRate
{
    const NoVat = 0;
    const Percent_0 = 1;
    const Percent_10 = 2;
    const Percent_18 = 3;
    const Percent_20 = 4;
    const Fraction_10_110 = 5;
    const Fraction_18_118 = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'NoVat' => self::NoVat,
            'Percent_0' => self::Percent_0,
            'Percent_10' => self::Percent_10,
            'Percent_18' => self::Percent_18,
            'Percent_20' => self::Percent_20,
            'Fraction_10_110' => self::Fraction_10_110,
            'Fraction_18_118' => self::Fraction_18_118,
        );
    }
}
}