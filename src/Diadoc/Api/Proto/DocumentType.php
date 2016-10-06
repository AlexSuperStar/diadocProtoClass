<?php
/**
 * Auto generated from DocumentType.proto at 2016-10-06 18:09:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * DocumentType enum
 */
final class DocumentType
{
    const UnknownDocumentType = -1;
    const Nonformalized = 0;
    const Invoice = 1;
    const TrustConnectionRequest = 11;
    const Torg12 = 12;
    const InvoiceRevision = 13;
    const InvoiceCorrection = 14;
    const InvoiceCorrectionRevision = 15;
    const AcceptanceCertificate = 16;
    const ProformaInvoice = 18;
    const XmlTorg12 = 19;
    const XmlAcceptanceCertificate = 20;
    const PriceList = 26;
    const PriceListAgreement = 30;
    const CertificateRegistry = 34;
    const ReconciliationAct = 35;
    const Contract = 36;
    const Torg13 = 37;
    const ServiceDetails = 38;
    const SupplementaryAgreement = 40;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownDocumentType' => self::UnknownDocumentType,
            'Nonformalized' => self::Nonformalized,
            'Invoice' => self::Invoice,
            'TrustConnectionRequest' => self::TrustConnectionRequest,
            'Torg12' => self::Torg12,
            'InvoiceRevision' => self::InvoiceRevision,
            'InvoiceCorrection' => self::InvoiceCorrection,
            'InvoiceCorrectionRevision' => self::InvoiceCorrectionRevision,
            'AcceptanceCertificate' => self::AcceptanceCertificate,
            'ProformaInvoice' => self::ProformaInvoice,
            'XmlTorg12' => self::XmlTorg12,
            'XmlAcceptanceCertificate' => self::XmlAcceptanceCertificate,
            'PriceList' => self::PriceList,
            'PriceListAgreement' => self::PriceListAgreement,
            'CertificateRegistry' => self::CertificateRegistry,
            'ReconciliationAct' => self::ReconciliationAct,
            'Contract' => self::Contract,
            'Torg13' => self::Torg13,
            'ServiceDetails' => self::ServiceDetails,
            'SupplementaryAgreement' => self::SupplementaryAgreement,
        );
    }
}
}