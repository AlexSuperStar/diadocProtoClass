<?php
/**
* Auto generated from ExtendedSigner.proto
*
 * Diadoc.Api.Proto.Invoicing.Signers package
 */

namespace Diadoc\Api\Proto\Invoicing\Signers {
/**
 * SignerPowers enum
 */
final class SignerPowers
{
    const InvoiceSigner = 0;
    const PersonMadeOperation = 1;
    const MadeAndSignOperation = 2;
    const PersonDocumentedOperation = 3;
    const MadeOperationAndSignedInvoice = 4;
    const MadeAndResponsibleForOperationAndSignedInvoice = 5;
    const ResponsibleForOperationAndSignerForInvoice = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'InvoiceSigner' => self::InvoiceSigner,
            'PersonMadeOperation' => self::PersonMadeOperation,
            'MadeAndSignOperation' => self::MadeAndSignOperation,
            'PersonDocumentedOperation' => self::PersonDocumentedOperation,
            'MadeOperationAndSignedInvoice' => self::MadeOperationAndSignedInvoice,
            'MadeAndResponsibleForOperationAndSignedInvoice' => self::MadeAndResponsibleForOperationAndSignedInvoice,
            'ResponsibleForOperationAndSignerForInvoice' => self::ResponsibleForOperationAndSignerForInvoice,
        );
    }
}
}