<?php
/**
* Auto generated from DiadocMessage-GetApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * AttachmentType enum
 */
final class AttachmentType
{
    const UnknownAttachmentType = -1;
    const Nonformalized = 0;
    const Invoice = 1;
    const InvoiceReceipt = 2;
    const InvoiceConfirmation = 3;
    const InvoiceCorrectionRequest = 4;
    const AttachmentComment = 5;
    const DeliveryFailureNotification = 6;
    const EancomInvoic = 7;
    const SignatureRequestRejection = 8;
    const EcrCatConformanceCertificateMetadata = 9;
    const SignatureVerificationReport = 10;
    const TrustConnectionRequest = 11;
    const Torg12 = 12;
    const InvoiceRevision = 13;
    const InvoiceCorrection = 14;
    const InvoiceCorrectionRevision = 15;
    const AcceptanceCertificate = 16;
    const StructuredData = 17;
    const ProformaInvoice = 18;
    const XmlTorg12 = 19;
    const XmlAcceptanceCertificate = 20;
    const XmlTorg12BuyerTitle = 21;
    const XmlAcceptanceCertificateBuyerTitle = 22;
    const Resolution = 23;
    const ResolutionRequest = 24;
    const ResolutionRequestDenial = 25;
    const PriceList = 26;
    const Receipt = 27;
    const XmlSignatureRejection = 28;
    const RevocationRequest = 29;
    const PriceListAgreement = 30;
    const CertificateRegistry = 34;
    const ReconciliationAct = 35;
    const Contract = 36;
    const Torg13 = 37;
    const ServiceDetails = 38;
    const RoamingNotification = 39;
    const SupplementaryAgreement = 40;
    const UniversalTransferDocument = 41;
    const UniversalTransferDocumentBuyerTitle = 42;
    const UniversalTransferDocumentRevision = 45;
    const UniversalCorrectionDocument = 49;
    const UniversalCorrectionDocumentRevision = 50;
    const UniversalCorrectionDocumentBuyerTitle = 51;
    const CustomData = 64;
    const MoveDocument = 65;
    const ResolutionRouteAssignmentAttachment = 66;
    const ResolutionRouteRemovalAttachment = 67;
    const Cancellation = 69;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UnknownAttachmentType' => self::UnknownAttachmentType,
            'Nonformalized' => self::Nonformalized,
            'Invoice' => self::Invoice,
            'InvoiceReceipt' => self::InvoiceReceipt,
            'InvoiceConfirmation' => self::InvoiceConfirmation,
            'InvoiceCorrectionRequest' => self::InvoiceCorrectionRequest,
            'AttachmentComment' => self::AttachmentComment,
            'DeliveryFailureNotification' => self::DeliveryFailureNotification,
            'EancomInvoic' => self::EancomInvoic,
            'SignatureRequestRejection' => self::SignatureRequestRejection,
            'EcrCatConformanceCertificateMetadata' => self::EcrCatConformanceCertificateMetadata,
            'SignatureVerificationReport' => self::SignatureVerificationReport,
            'TrustConnectionRequest' => self::TrustConnectionRequest,
            'Torg12' => self::Torg12,
            'InvoiceRevision' => self::InvoiceRevision,
            'InvoiceCorrection' => self::InvoiceCorrection,
            'InvoiceCorrectionRevision' => self::InvoiceCorrectionRevision,
            'AcceptanceCertificate' => self::AcceptanceCertificate,
            'StructuredData' => self::StructuredData,
            'ProformaInvoice' => self::ProformaInvoice,
            'XmlTorg12' => self::XmlTorg12,
            'XmlAcceptanceCertificate' => self::XmlAcceptanceCertificate,
            'XmlTorg12BuyerTitle' => self::XmlTorg12BuyerTitle,
            'XmlAcceptanceCertificateBuyerTitle' => self::XmlAcceptanceCertificateBuyerTitle,
            'Resolution' => self::Resolution,
            'ResolutionRequest' => self::ResolutionRequest,
            'ResolutionRequestDenial' => self::ResolutionRequestDenial,
            'PriceList' => self::PriceList,
            'Receipt' => self::Receipt,
            'XmlSignatureRejection' => self::XmlSignatureRejection,
            'RevocationRequest' => self::RevocationRequest,
            'PriceListAgreement' => self::PriceListAgreement,
            'CertificateRegistry' => self::CertificateRegistry,
            'ReconciliationAct' => self::ReconciliationAct,
            'Contract' => self::Contract,
            'Torg13' => self::Torg13,
            'ServiceDetails' => self::ServiceDetails,
            'RoamingNotification' => self::RoamingNotification,
            'SupplementaryAgreement' => self::SupplementaryAgreement,
            'UniversalTransferDocument' => self::UniversalTransferDocument,
            'UniversalTransferDocumentBuyerTitle' => self::UniversalTransferDocumentBuyerTitle,
            'UniversalTransferDocumentRevision' => self::UniversalTransferDocumentRevision,
            'UniversalCorrectionDocument' => self::UniversalCorrectionDocument,
            'UniversalCorrectionDocumentRevision' => self::UniversalCorrectionDocumentRevision,
            'UniversalCorrectionDocumentBuyerTitle' => self::UniversalCorrectionDocumentBuyerTitle,
            'CustomData' => self::CustomData,
            'MoveDocument' => self::MoveDocument,
            'ResolutionRouteAssignmentAttachment' => self::ResolutionRouteAssignmentAttachment,
            'ResolutionRouteRemovalAttachment' => self::ResolutionRouteRemovalAttachment,
            'Cancellation' => self::Cancellation,
        );
    }
}
}