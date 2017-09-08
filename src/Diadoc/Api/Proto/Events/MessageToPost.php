<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * MessageToPost message
 */
class MessageToPost extends \ProtobufMessage
{
    /* Field index constants */
    const FROMBOXID = 1;
    const TOBOXID = 2;
    const INVOICES = 3;
    const NONFORMALIZEDDOCUMENTS = 4;
    const TORG12DOCUMENTS = 5;
    const ACCEPTANCECERTIFICATES = 7;
    const STRUCTUREDDATAATTACHMENTS = 8;
    const PROFORMAINVOICES = 9;
    const XMLTORG12SELLERTITLES = 10;
    const XMLACCEPTANCECERTIFICATESELLERTITLES = 11;
    const TODEPARTMENTID = 12;
    const ISDRAFT = 13;
    const LOCKDRAFT = 14;
    const STRICTDRAFTVALIDATION = 15;
    const ISINTERNAL = 16;
    const FROMDEPARTMENTID = 17;
    const DELAYSEND = 18;
    const PRICELISTS = 19;
    const PRICELISTAGREEMENTS = 20;
    const CERTIFICATEREGISTRIES = 21;
    const RECONCILIATIONACTS = 22;
    const CONTRACTS = 23;
    const TORG13DOCUMENTS = 24;
    const SERVICEDETAILSDOCUMENTS = 25;
    const PROXYBOXID = 26;
    const PROXYDEPARTMENTID = 27;
    const ENCRYPTEDINVOICES = 28;
    const ENCRYPTEDXMLTORG12SELLERTITLES = 29;
    const ENCRYPTEDXMLACCEPTANCECERTIFICATESELLERTITLES = 30;
    const SUPPLEMENTARYAGREEMENTS = 31;
    const LOCKPACKET = 32;
    const UNIVERSALTRANSFERDOCUMENTSELLERTITLES = 33;
    const CUSTOMDOCUMENTATTACHMENTS = 34;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FROMBOXID => array(
            'name' => 'FromBoxId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOBOXID => array(
            'name' => 'ToBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVOICES => array(
            'name' => 'Invoices',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\XmlDocumentAttachment'
        ),
        self::NONFORMALIZEDDOCUMENTS => array(
            'name' => 'NonformalizedDocuments',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\NonformalizedAttachment'
        ),
        self::TORG12DOCUMENTS => array(
            'name' => 'Torg12Documents',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\BasicDocumentAttachment'
        ),
        self::ACCEPTANCECERTIFICATES => array(
            'name' => 'AcceptanceCertificates',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\AcceptanceCertificateAttachment'
        ),
        self::STRUCTUREDDATAATTACHMENTS => array(
            'name' => 'StructuredDataAttachments',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\StructuredDataAttachment'
        ),
        self::PROFORMAINVOICES => array(
            'name' => 'ProformaInvoices',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\BasicDocumentAttachment'
        ),
        self::XMLTORG12SELLERTITLES => array(
            'name' => 'XmlTorg12SellerTitles',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\XmlDocumentAttachment'
        ),
        self::XMLACCEPTANCECERTIFICATESELLERTITLES => array(
            'name' => 'XmlAcceptanceCertificateSellerTitles',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\XmlDocumentAttachment'
        ),
        self::TODEPARTMENTID => array(
            'name' => 'ToDepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISDRAFT => array(
            'default' => false,
            'name' => 'IsDraft',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::LOCKDRAFT => array(
            'default' => false,
            'name' => 'LockDraft',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::STRICTDRAFTVALIDATION => array(
            'default' => true,
            'name' => 'StrictDraftValidation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISINTERNAL => array(
            'default' => false,
            'name' => 'IsInternal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::FROMDEPARTMENTID => array(
            'name' => 'FromDepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DELAYSEND => array(
            'default' => false,
            'name' => 'DelaySend',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PRICELISTS => array(
            'name' => 'PriceLists',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\PriceListAttachment'
        ),
        self::PRICELISTAGREEMENTS => array(
            'name' => 'PriceListAgreements',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\NonformalizedAttachment'
        ),
        self::CERTIFICATEREGISTRIES => array(
            'name' => 'CertificateRegistries',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\NonformalizedAttachment'
        ),
        self::RECONCILIATIONACTS => array(
            'name' => 'ReconciliationActs',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ReconciliationActAttachment'
        ),
        self::CONTRACTS => array(
            'name' => 'Contracts',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ContractAttachment'
        ),
        self::TORG13DOCUMENTS => array(
            'name' => 'Torg13Documents',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\Torg13Attachment'
        ),
        self::SERVICEDETAILSDOCUMENTS => array(
            'name' => 'ServiceDetailsDocuments',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ServiceDetailsAttachment'
        ),
        self::PROXYBOXID => array(
            'name' => 'ProxyBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PROXYDEPARTMENTID => array(
            'name' => 'ProxyDepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENCRYPTEDINVOICES => array(
            'name' => 'EncryptedInvoices',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\EncryptedInvoiceAttachment'
        ),
        self::ENCRYPTEDXMLTORG12SELLERTITLES => array(
            'name' => 'EncryptedXmlTorg12SellerTitles',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\EncryptedXmlDocumentAttachment'
        ),
        self::ENCRYPTEDXMLACCEPTANCECERTIFICATESELLERTITLES => array(
            'name' => 'EncryptedXmlAcceptanceCertificateSellerTitles',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\EncryptedXmlDocumentAttachment'
        ),
        self::SUPPLEMENTARYAGREEMENTS => array(
            'name' => 'SupplementaryAgreements',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\SupplementaryAgreementAttachment'
        ),
        self::LOCKPACKET => array(
            'default' => false,
            'name' => 'LockPacket',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::UNIVERSALTRANSFERDOCUMENTSELLERTITLES => array(
            'name' => 'UniversalTransferDocumentSellerTitles',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\XmlDocumentAttachment'
        ),
        self::CUSTOMDOCUMENTATTACHMENTS => array(
            'name' => 'CustomDocumentAttachments',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\CustomDocumentAttachment'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::FROMBOXID] = null;
        $this->values[self::TOBOXID] = null;
        $this->values[self::INVOICES] = array();
        $this->values[self::NONFORMALIZEDDOCUMENTS] = array();
        $this->values[self::TORG12DOCUMENTS] = array();
        $this->values[self::ACCEPTANCECERTIFICATES] = array();
        $this->values[self::STRUCTUREDDATAATTACHMENTS] = array();
        $this->values[self::PROFORMAINVOICES] = array();
        $this->values[self::XMLTORG12SELLERTITLES] = array();
        $this->values[self::XMLACCEPTANCECERTIFICATESELLERTITLES] = array();
        $this->values[self::TODEPARTMENTID] = null;
        $this->values[self::ISDRAFT] = self::$fields[self::ISDRAFT]['default'];
        $this->values[self::LOCKDRAFT] = self::$fields[self::LOCKDRAFT]['default'];
        $this->values[self::STRICTDRAFTVALIDATION] = self::$fields[self::STRICTDRAFTVALIDATION]['default'];
        $this->values[self::ISINTERNAL] = self::$fields[self::ISINTERNAL]['default'];
        $this->values[self::FROMDEPARTMENTID] = null;
        $this->values[self::DELAYSEND] = self::$fields[self::DELAYSEND]['default'];
        $this->values[self::PRICELISTS] = array();
        $this->values[self::PRICELISTAGREEMENTS] = array();
        $this->values[self::CERTIFICATEREGISTRIES] = array();
        $this->values[self::RECONCILIATIONACTS] = array();
        $this->values[self::CONTRACTS] = array();
        $this->values[self::TORG13DOCUMENTS] = array();
        $this->values[self::SERVICEDETAILSDOCUMENTS] = array();
        $this->values[self::PROXYBOXID] = null;
        $this->values[self::PROXYDEPARTMENTID] = null;
        $this->values[self::ENCRYPTEDINVOICES] = array();
        $this->values[self::ENCRYPTEDXMLTORG12SELLERTITLES] = array();
        $this->values[self::ENCRYPTEDXMLACCEPTANCECERTIFICATESELLERTITLES] = array();
        $this->values[self::SUPPLEMENTARYAGREEMENTS] = array();
        $this->values[self::LOCKPACKET] = self::$fields[self::LOCKPACKET]['default'];
        $this->values[self::UNIVERSALTRANSFERDOCUMENTSELLERTITLES] = array();
        $this->values[self::CUSTOMDOCUMENTATTACHMENTS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'FromBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromBoxId($value)
    {
        return $this->set(self::FROMBOXID, $value);
    }

    /**
     * Returns value of 'FromBoxId' property
     *
     * @return string
     */
    public function getFromBoxId()
    {
        $value = $this->get(self::FROMBOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ToBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToBoxId($value)
    {
        return $this->set(self::TOBOXID, $value);
    }

    /**
     * Returns value of 'ToBoxId' property
     *
     * @return string
     */
    public function getToBoxId()
    {
        $value = $this->get(self::TOBOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'Invoices' list
     *
     * @param \Diadoc\Api\Proto\Events\XmlDocumentAttachment $value Value to append
     *
     * @return null
     */
    public function appendInvoices(\Diadoc\Api\Proto\Events\XmlDocumentAttachment $value)
    {
        return $this->append(self::INVOICES, $value);
    }

    /**
     * Clears 'Invoices' list
     *
     * @return null
     */
    public function clearInvoices()
    {
        return $this->clear(self::INVOICES);
    }

    /**
     * Returns 'Invoices' list
     *
     * @return \Diadoc\Api\Proto\Events\XmlDocumentAttachment[]
     */
    public function getInvoices()
    {
        return $this->get(self::INVOICES);
    }

    /**
     * Returns 'Invoices' iterator
     *
     * @return \ArrayIterator
     */
    public function getInvoicesIterator()
    {
        return new \ArrayIterator($this->get(self::INVOICES));
    }

    /**
     * Returns element from 'Invoices' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\XmlDocumentAttachment
     */
    public function getInvoicesAt($offset)
    {
        return $this->get(self::INVOICES, $offset);
    }

    /**
     * Returns count of 'Invoices' list
     *
     * @return int
     */
    public function getInvoicesCount()
    {
        return $this->count(self::INVOICES);
    }

    /**
     * Appends value to 'NonformalizedDocuments' list
     *
     * @param \Diadoc\Api\Proto\Events\NonformalizedAttachment $value Value to append
     *
     * @return null
     */
    public function appendNonformalizedDocuments(\Diadoc\Api\Proto\Events\NonformalizedAttachment $value)
    {
        return $this->append(self::NONFORMALIZEDDOCUMENTS, $value);
    }

    /**
     * Clears 'NonformalizedDocuments' list
     *
     * @return null
     */
    public function clearNonformalizedDocuments()
    {
        return $this->clear(self::NONFORMALIZEDDOCUMENTS);
    }

    /**
     * Returns 'NonformalizedDocuments' list
     *
     * @return \Diadoc\Api\Proto\Events\NonformalizedAttachment[]
     */
    public function getNonformalizedDocuments()
    {
        return $this->get(self::NONFORMALIZEDDOCUMENTS);
    }

    /**
     * Returns 'NonformalizedDocuments' iterator
     *
     * @return \ArrayIterator
     */
    public function getNonformalizedDocumentsIterator()
    {
        return new \ArrayIterator($this->get(self::NONFORMALIZEDDOCUMENTS));
    }

    /**
     * Returns element from 'NonformalizedDocuments' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\NonformalizedAttachment
     */
    public function getNonformalizedDocumentsAt($offset)
    {
        return $this->get(self::NONFORMALIZEDDOCUMENTS, $offset);
    }

    /**
     * Returns count of 'NonformalizedDocuments' list
     *
     * @return int
     */
    public function getNonformalizedDocumentsCount()
    {
        return $this->count(self::NONFORMALIZEDDOCUMENTS);
    }

    /**
     * Appends value to 'Torg12Documents' list
     *
     * @param \Diadoc\Api\Proto\Events\BasicDocumentAttachment $value Value to append
     *
     * @return null
     */
    public function appendTorg12Documents(\Diadoc\Api\Proto\Events\BasicDocumentAttachment $value)
    {
        return $this->append(self::TORG12DOCUMENTS, $value);
    }

    /**
     * Clears 'Torg12Documents' list
     *
     * @return null
     */
    public function clearTorg12Documents()
    {
        return $this->clear(self::TORG12DOCUMENTS);
    }

    /**
     * Returns 'Torg12Documents' list
     *
     * @return \Diadoc\Api\Proto\Events\BasicDocumentAttachment[]
     */
    public function getTorg12Documents()
    {
        return $this->get(self::TORG12DOCUMENTS);
    }

    /**
     * Returns 'Torg12Documents' iterator
     *
     * @return \ArrayIterator
     */
    public function getTorg12DocumentsIterator()
    {
        return new \ArrayIterator($this->get(self::TORG12DOCUMENTS));
    }

    /**
     * Returns element from 'Torg12Documents' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\BasicDocumentAttachment
     */
    public function getTorg12DocumentsAt($offset)
    {
        return $this->get(self::TORG12DOCUMENTS, $offset);
    }

    /**
     * Returns count of 'Torg12Documents' list
     *
     * @return int
     */
    public function getTorg12DocumentsCount()
    {
        return $this->count(self::TORG12DOCUMENTS);
    }

    /**
     * Appends value to 'AcceptanceCertificates' list
     *
     * @param \Diadoc\Api\Proto\Events\AcceptanceCertificateAttachment $value Value to append
     *
     * @return null
     */
    public function appendAcceptanceCertificates(\Diadoc\Api\Proto\Events\AcceptanceCertificateAttachment $value)
    {
        return $this->append(self::ACCEPTANCECERTIFICATES, $value);
    }

    /**
     * Clears 'AcceptanceCertificates' list
     *
     * @return null
     */
    public function clearAcceptanceCertificates()
    {
        return $this->clear(self::ACCEPTANCECERTIFICATES);
    }

    /**
     * Returns 'AcceptanceCertificates' list
     *
     * @return \Diadoc\Api\Proto\Events\AcceptanceCertificateAttachment[]
     */
    public function getAcceptanceCertificates()
    {
        return $this->get(self::ACCEPTANCECERTIFICATES);
    }

    /**
     * Returns 'AcceptanceCertificates' iterator
     *
     * @return \ArrayIterator
     */
    public function getAcceptanceCertificatesIterator()
    {
        return new \ArrayIterator($this->get(self::ACCEPTANCECERTIFICATES));
    }

    /**
     * Returns element from 'AcceptanceCertificates' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\AcceptanceCertificateAttachment
     */
    public function getAcceptanceCertificatesAt($offset)
    {
        return $this->get(self::ACCEPTANCECERTIFICATES, $offset);
    }

    /**
     * Returns count of 'AcceptanceCertificates' list
     *
     * @return int
     */
    public function getAcceptanceCertificatesCount()
    {
        return $this->count(self::ACCEPTANCECERTIFICATES);
    }

    /**
     * Appends value to 'StructuredDataAttachments' list
     *
     * @param \Diadoc\Api\Proto\Events\StructuredDataAttachment $value Value to append
     *
     * @return null
     */
    public function appendStructuredDataAttachments(\Diadoc\Api\Proto\Events\StructuredDataAttachment $value)
    {
        return $this->append(self::STRUCTUREDDATAATTACHMENTS, $value);
    }

    /**
     * Clears 'StructuredDataAttachments' list
     *
     * @return null
     */
    public function clearStructuredDataAttachments()
    {
        return $this->clear(self::STRUCTUREDDATAATTACHMENTS);
    }

    /**
     * Returns 'StructuredDataAttachments' list
     *
     * @return \Diadoc\Api\Proto\Events\StructuredDataAttachment[]
     */
    public function getStructuredDataAttachments()
    {
        return $this->get(self::STRUCTUREDDATAATTACHMENTS);
    }

    /**
     * Returns 'StructuredDataAttachments' iterator
     *
     * @return \ArrayIterator
     */
    public function getStructuredDataAttachmentsIterator()
    {
        return new \ArrayIterator($this->get(self::STRUCTUREDDATAATTACHMENTS));
    }

    /**
     * Returns element from 'StructuredDataAttachments' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\StructuredDataAttachment
     */
    public function getStructuredDataAttachmentsAt($offset)
    {
        return $this->get(self::STRUCTUREDDATAATTACHMENTS, $offset);
    }

    /**
     * Returns count of 'StructuredDataAttachments' list
     *
     * @return int
     */
    public function getStructuredDataAttachmentsCount()
    {
        return $this->count(self::STRUCTUREDDATAATTACHMENTS);
    }

    /**
     * Appends value to 'ProformaInvoices' list
     *
     * @param \Diadoc\Api\Proto\Events\BasicDocumentAttachment $value Value to append
     *
     * @return null
     */
    public function appendProformaInvoices(\Diadoc\Api\Proto\Events\BasicDocumentAttachment $value)
    {
        return $this->append(self::PROFORMAINVOICES, $value);
    }

    /**
     * Clears 'ProformaInvoices' list
     *
     * @return null
     */
    public function clearProformaInvoices()
    {
        return $this->clear(self::PROFORMAINVOICES);
    }

    /**
     * Returns 'ProformaInvoices' list
     *
     * @return \Diadoc\Api\Proto\Events\BasicDocumentAttachment[]
     */
    public function getProformaInvoices()
    {
        return $this->get(self::PROFORMAINVOICES);
    }

    /**
     * Returns 'ProformaInvoices' iterator
     *
     * @return \ArrayIterator
     */
    public function getProformaInvoicesIterator()
    {
        return new \ArrayIterator($this->get(self::PROFORMAINVOICES));
    }

    /**
     * Returns element from 'ProformaInvoices' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\BasicDocumentAttachment
     */
    public function getProformaInvoicesAt($offset)
    {
        return $this->get(self::PROFORMAINVOICES, $offset);
    }

    /**
     * Returns count of 'ProformaInvoices' list
     *
     * @return int
     */
    public function getProformaInvoicesCount()
    {
        return $this->count(self::PROFORMAINVOICES);
    }

    /**
     * Appends value to 'XmlTorg12SellerTitles' list
     *
     * @param \Diadoc\Api\Proto\Events\XmlDocumentAttachment $value Value to append
     *
     * @return null
     */
    public function appendXmlTorg12SellerTitles(\Diadoc\Api\Proto\Events\XmlDocumentAttachment $value)
    {
        return $this->append(self::XMLTORG12SELLERTITLES, $value);
    }

    /**
     * Clears 'XmlTorg12SellerTitles' list
     *
     * @return null
     */
    public function clearXmlTorg12SellerTitles()
    {
        return $this->clear(self::XMLTORG12SELLERTITLES);
    }

    /**
     * Returns 'XmlTorg12SellerTitles' list
     *
     * @return \Diadoc\Api\Proto\Events\XmlDocumentAttachment[]
     */
    public function getXmlTorg12SellerTitles()
    {
        return $this->get(self::XMLTORG12SELLERTITLES);
    }

    /**
     * Returns 'XmlTorg12SellerTitles' iterator
     *
     * @return \ArrayIterator
     */
    public function getXmlTorg12SellerTitlesIterator()
    {
        return new \ArrayIterator($this->get(self::XMLTORG12SELLERTITLES));
    }

    /**
     * Returns element from 'XmlTorg12SellerTitles' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\XmlDocumentAttachment
     */
    public function getXmlTorg12SellerTitlesAt($offset)
    {
        return $this->get(self::XMLTORG12SELLERTITLES, $offset);
    }

    /**
     * Returns count of 'XmlTorg12SellerTitles' list
     *
     * @return int
     */
    public function getXmlTorg12SellerTitlesCount()
    {
        return $this->count(self::XMLTORG12SELLERTITLES);
    }

    /**
     * Appends value to 'XmlAcceptanceCertificateSellerTitles' list
     *
     * @param \Diadoc\Api\Proto\Events\XmlDocumentAttachment $value Value to append
     *
     * @return null
     */
    public function appendXmlAcceptanceCertificateSellerTitles(\Diadoc\Api\Proto\Events\XmlDocumentAttachment $value)
    {
        return $this->append(self::XMLACCEPTANCECERTIFICATESELLERTITLES, $value);
    }

    /**
     * Clears 'XmlAcceptanceCertificateSellerTitles' list
     *
     * @return null
     */
    public function clearXmlAcceptanceCertificateSellerTitles()
    {
        return $this->clear(self::XMLACCEPTANCECERTIFICATESELLERTITLES);
    }

    /**
     * Returns 'XmlAcceptanceCertificateSellerTitles' list
     *
     * @return \Diadoc\Api\Proto\Events\XmlDocumentAttachment[]
     */
    public function getXmlAcceptanceCertificateSellerTitles()
    {
        return $this->get(self::XMLACCEPTANCECERTIFICATESELLERTITLES);
    }

    /**
     * Returns 'XmlAcceptanceCertificateSellerTitles' iterator
     *
     * @return \ArrayIterator
     */
    public function getXmlAcceptanceCertificateSellerTitlesIterator()
    {
        return new \ArrayIterator($this->get(self::XMLACCEPTANCECERTIFICATESELLERTITLES));
    }

    /**
     * Returns element from 'XmlAcceptanceCertificateSellerTitles' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\XmlDocumentAttachment
     */
    public function getXmlAcceptanceCertificateSellerTitlesAt($offset)
    {
        return $this->get(self::XMLACCEPTANCECERTIFICATESELLERTITLES, $offset);
    }

    /**
     * Returns count of 'XmlAcceptanceCertificateSellerTitles' list
     *
     * @return int
     */
    public function getXmlAcceptanceCertificateSellerTitlesCount()
    {
        return $this->count(self::XMLACCEPTANCECERTIFICATESELLERTITLES);
    }

    /**
     * Sets value of 'ToDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToDepartmentId($value)
    {
        return $this->set(self::TODEPARTMENTID, $value);
    }

    /**
     * Returns value of 'ToDepartmentId' property
     *
     * @return string
     */
    public function getToDepartmentId()
    {
        $value = $this->get(self::TODEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'IsDraft' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsDraft($value)
    {
        return $this->set(self::ISDRAFT, $value);
    }

    /**
     * Returns value of 'IsDraft' property
     *
     * @return boolean
     */
    public function getIsDraft()
    {
        $value = $this->get(self::ISDRAFT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'LockDraft' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setLockDraft($value)
    {
        return $this->set(self::LOCKDRAFT, $value);
    }

    /**
     * Returns value of 'LockDraft' property
     *
     * @return boolean
     */
    public function getLockDraft()
    {
        $value = $this->get(self::LOCKDRAFT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'StrictDraftValidation' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setStrictDraftValidation($value)
    {
        return $this->set(self::STRICTDRAFTVALIDATION, $value);
    }

    /**
     * Returns value of 'StrictDraftValidation' property
     *
     * @return boolean
     */
    public function getStrictDraftValidation()
    {
        $value = $this->get(self::STRICTDRAFTVALIDATION);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsInternal' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsInternal($value)
    {
        return $this->set(self::ISINTERNAL, $value);
    }

    /**
     * Returns value of 'IsInternal' property
     *
     * @return boolean
     */
    public function getIsInternal()
    {
        $value = $this->get(self::ISINTERNAL);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'FromDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromDepartmentId($value)
    {
        return $this->set(self::FROMDEPARTMENTID, $value);
    }

    /**
     * Returns value of 'FromDepartmentId' property
     *
     * @return string
     */
    public function getFromDepartmentId()
    {
        $value = $this->get(self::FROMDEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DelaySend' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDelaySend($value)
    {
        return $this->set(self::DELAYSEND, $value);
    }

    /**
     * Returns value of 'DelaySend' property
     *
     * @return boolean
     */
    public function getDelaySend()
    {
        $value = $this->get(self::DELAYSEND);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Appends value to 'PriceLists' list
     *
     * @param \Diadoc\Api\Proto\Events\PriceListAttachment $value Value to append
     *
     * @return null
     */
    public function appendPriceLists(\Diadoc\Api\Proto\Events\PriceListAttachment $value)
    {
        return $this->append(self::PRICELISTS, $value);
    }

    /**
     * Clears 'PriceLists' list
     *
     * @return null
     */
    public function clearPriceLists()
    {
        return $this->clear(self::PRICELISTS);
    }

    /**
     * Returns 'PriceLists' list
     *
     * @return \Diadoc\Api\Proto\Events\PriceListAttachment[]
     */
    public function getPriceLists()
    {
        return $this->get(self::PRICELISTS);
    }

    /**
     * Returns 'PriceLists' iterator
     *
     * @return \ArrayIterator
     */
    public function getPriceListsIterator()
    {
        return new \ArrayIterator($this->get(self::PRICELISTS));
    }

    /**
     * Returns element from 'PriceLists' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\PriceListAttachment
     */
    public function getPriceListsAt($offset)
    {
        return $this->get(self::PRICELISTS, $offset);
    }

    /**
     * Returns count of 'PriceLists' list
     *
     * @return int
     */
    public function getPriceListsCount()
    {
        return $this->count(self::PRICELISTS);
    }

    /**
     * Appends value to 'PriceListAgreements' list
     *
     * @param \Diadoc\Api\Proto\Events\NonformalizedAttachment $value Value to append
     *
     * @return null
     */
    public function appendPriceListAgreements(\Diadoc\Api\Proto\Events\NonformalizedAttachment $value)
    {
        return $this->append(self::PRICELISTAGREEMENTS, $value);
    }

    /**
     * Clears 'PriceListAgreements' list
     *
     * @return null
     */
    public function clearPriceListAgreements()
    {
        return $this->clear(self::PRICELISTAGREEMENTS);
    }

    /**
     * Returns 'PriceListAgreements' list
     *
     * @return \Diadoc\Api\Proto\Events\NonformalizedAttachment[]
     */
    public function getPriceListAgreements()
    {
        return $this->get(self::PRICELISTAGREEMENTS);
    }

    /**
     * Returns 'PriceListAgreements' iterator
     *
     * @return \ArrayIterator
     */
    public function getPriceListAgreementsIterator()
    {
        return new \ArrayIterator($this->get(self::PRICELISTAGREEMENTS));
    }

    /**
     * Returns element from 'PriceListAgreements' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\NonformalizedAttachment
     */
    public function getPriceListAgreementsAt($offset)
    {
        return $this->get(self::PRICELISTAGREEMENTS, $offset);
    }

    /**
     * Returns count of 'PriceListAgreements' list
     *
     * @return int
     */
    public function getPriceListAgreementsCount()
    {
        return $this->count(self::PRICELISTAGREEMENTS);
    }

    /**
     * Appends value to 'CertificateRegistries' list
     *
     * @param \Diadoc\Api\Proto\Events\NonformalizedAttachment $value Value to append
     *
     * @return null
     */
    public function appendCertificateRegistries(\Diadoc\Api\Proto\Events\NonformalizedAttachment $value)
    {
        return $this->append(self::CERTIFICATEREGISTRIES, $value);
    }

    /**
     * Clears 'CertificateRegistries' list
     *
     * @return null
     */
    public function clearCertificateRegistries()
    {
        return $this->clear(self::CERTIFICATEREGISTRIES);
    }

    /**
     * Returns 'CertificateRegistries' list
     *
     * @return \Diadoc\Api\Proto\Events\NonformalizedAttachment[]
     */
    public function getCertificateRegistries()
    {
        return $this->get(self::CERTIFICATEREGISTRIES);
    }

    /**
     * Returns 'CertificateRegistries' iterator
     *
     * @return \ArrayIterator
     */
    public function getCertificateRegistriesIterator()
    {
        return new \ArrayIterator($this->get(self::CERTIFICATEREGISTRIES));
    }

    /**
     * Returns element from 'CertificateRegistries' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\NonformalizedAttachment
     */
    public function getCertificateRegistriesAt($offset)
    {
        return $this->get(self::CERTIFICATEREGISTRIES, $offset);
    }

    /**
     * Returns count of 'CertificateRegistries' list
     *
     * @return int
     */
    public function getCertificateRegistriesCount()
    {
        return $this->count(self::CERTIFICATEREGISTRIES);
    }

    /**
     * Appends value to 'ReconciliationActs' list
     *
     * @param \Diadoc\Api\Proto\Events\ReconciliationActAttachment $value Value to append
     *
     * @return null
     */
    public function appendReconciliationActs(\Diadoc\Api\Proto\Events\ReconciliationActAttachment $value)
    {
        return $this->append(self::RECONCILIATIONACTS, $value);
    }

    /**
     * Clears 'ReconciliationActs' list
     *
     * @return null
     */
    public function clearReconciliationActs()
    {
        return $this->clear(self::RECONCILIATIONACTS);
    }

    /**
     * Returns 'ReconciliationActs' list
     *
     * @return \Diadoc\Api\Proto\Events\ReconciliationActAttachment[]
     */
    public function getReconciliationActs()
    {
        return $this->get(self::RECONCILIATIONACTS);
    }

    /**
     * Returns 'ReconciliationActs' iterator
     *
     * @return \ArrayIterator
     */
    public function getReconciliationActsIterator()
    {
        return new \ArrayIterator($this->get(self::RECONCILIATIONACTS));
    }

    /**
     * Returns element from 'ReconciliationActs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ReconciliationActAttachment
     */
    public function getReconciliationActsAt($offset)
    {
        return $this->get(self::RECONCILIATIONACTS, $offset);
    }

    /**
     * Returns count of 'ReconciliationActs' list
     *
     * @return int
     */
    public function getReconciliationActsCount()
    {
        return $this->count(self::RECONCILIATIONACTS);
    }

    /**
     * Appends value to 'Contracts' list
     *
     * @param \Diadoc\Api\Proto\Events\ContractAttachment $value Value to append
     *
     * @return null
     */
    public function appendContracts(\Diadoc\Api\Proto\Events\ContractAttachment $value)
    {
        return $this->append(self::CONTRACTS, $value);
    }

    /**
     * Clears 'Contracts' list
     *
     * @return null
     */
    public function clearContracts()
    {
        return $this->clear(self::CONTRACTS);
    }

    /**
     * Returns 'Contracts' list
     *
     * @return \Diadoc\Api\Proto\Events\ContractAttachment[]
     */
    public function getContracts()
    {
        return $this->get(self::CONTRACTS);
    }

    /**
     * Returns 'Contracts' iterator
     *
     * @return \ArrayIterator
     */
    public function getContractsIterator()
    {
        return new \ArrayIterator($this->get(self::CONTRACTS));
    }

    /**
     * Returns element from 'Contracts' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ContractAttachment
     */
    public function getContractsAt($offset)
    {
        return $this->get(self::CONTRACTS, $offset);
    }

    /**
     * Returns count of 'Contracts' list
     *
     * @return int
     */
    public function getContractsCount()
    {
        return $this->count(self::CONTRACTS);
    }

    /**
     * Appends value to 'Torg13Documents' list
     *
     * @param \Diadoc\Api\Proto\Events\Torg13Attachment $value Value to append
     *
     * @return null
     */
    public function appendTorg13Documents(\Diadoc\Api\Proto\Events\Torg13Attachment $value)
    {
        return $this->append(self::TORG13DOCUMENTS, $value);
    }

    /**
     * Clears 'Torg13Documents' list
     *
     * @return null
     */
    public function clearTorg13Documents()
    {
        return $this->clear(self::TORG13DOCUMENTS);
    }

    /**
     * Returns 'Torg13Documents' list
     *
     * @return \Diadoc\Api\Proto\Events\Torg13Attachment[]
     */
    public function getTorg13Documents()
    {
        return $this->get(self::TORG13DOCUMENTS);
    }

    /**
     * Returns 'Torg13Documents' iterator
     *
     * @return \ArrayIterator
     */
    public function getTorg13DocumentsIterator()
    {
        return new \ArrayIterator($this->get(self::TORG13DOCUMENTS));
    }

    /**
     * Returns element from 'Torg13Documents' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\Torg13Attachment
     */
    public function getTorg13DocumentsAt($offset)
    {
        return $this->get(self::TORG13DOCUMENTS, $offset);
    }

    /**
     * Returns count of 'Torg13Documents' list
     *
     * @return int
     */
    public function getTorg13DocumentsCount()
    {
        return $this->count(self::TORG13DOCUMENTS);
    }

    /**
     * Appends value to 'ServiceDetailsDocuments' list
     *
     * @param \Diadoc\Api\Proto\Events\ServiceDetailsAttachment $value Value to append
     *
     * @return null
     */
    public function appendServiceDetailsDocuments(\Diadoc\Api\Proto\Events\ServiceDetailsAttachment $value)
    {
        return $this->append(self::SERVICEDETAILSDOCUMENTS, $value);
    }

    /**
     * Clears 'ServiceDetailsDocuments' list
     *
     * @return null
     */
    public function clearServiceDetailsDocuments()
    {
        return $this->clear(self::SERVICEDETAILSDOCUMENTS);
    }

    /**
     * Returns 'ServiceDetailsDocuments' list
     *
     * @return \Diadoc\Api\Proto\Events\ServiceDetailsAttachment[]
     */
    public function getServiceDetailsDocuments()
    {
        return $this->get(self::SERVICEDETAILSDOCUMENTS);
    }

    /**
     * Returns 'ServiceDetailsDocuments' iterator
     *
     * @return \ArrayIterator
     */
    public function getServiceDetailsDocumentsIterator()
    {
        return new \ArrayIterator($this->get(self::SERVICEDETAILSDOCUMENTS));
    }

    /**
     * Returns element from 'ServiceDetailsDocuments' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ServiceDetailsAttachment
     */
    public function getServiceDetailsDocumentsAt($offset)
    {
        return $this->get(self::SERVICEDETAILSDOCUMENTS, $offset);
    }

    /**
     * Returns count of 'ServiceDetailsDocuments' list
     *
     * @return int
     */
    public function getServiceDetailsDocumentsCount()
    {
        return $this->count(self::SERVICEDETAILSDOCUMENTS);
    }

    /**
     * Sets value of 'ProxyBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProxyBoxId($value)
    {
        return $this->set(self::PROXYBOXID, $value);
    }

    /**
     * Returns value of 'ProxyBoxId' property
     *
     * @return string
     */
    public function getProxyBoxId()
    {
        $value = $this->get(self::PROXYBOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ProxyDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProxyDepartmentId($value)
    {
        return $this->set(self::PROXYDEPARTMENTID, $value);
    }

    /**
     * Returns value of 'ProxyDepartmentId' property
     *
     * @return string
     */
    public function getProxyDepartmentId()
    {
        $value = $this->get(self::PROXYDEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'EncryptedInvoices' list
     *
     * @param \Diadoc\Api\Proto\Events\EncryptedInvoiceAttachment $value Value to append
     *
     * @return null
     */
    public function appendEncryptedInvoices(\Diadoc\Api\Proto\Events\EncryptedInvoiceAttachment $value)
    {
        return $this->append(self::ENCRYPTEDINVOICES, $value);
    }

    /**
     * Clears 'EncryptedInvoices' list
     *
     * @return null
     */
    public function clearEncryptedInvoices()
    {
        return $this->clear(self::ENCRYPTEDINVOICES);
    }

    /**
     * Returns 'EncryptedInvoices' list
     *
     * @return \Diadoc\Api\Proto\Events\EncryptedInvoiceAttachment[]
     */
    public function getEncryptedInvoices()
    {
        return $this->get(self::ENCRYPTEDINVOICES);
    }

    /**
     * Returns 'EncryptedInvoices' iterator
     *
     * @return \ArrayIterator
     */
    public function getEncryptedInvoicesIterator()
    {
        return new \ArrayIterator($this->get(self::ENCRYPTEDINVOICES));
    }

    /**
     * Returns element from 'EncryptedInvoices' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\EncryptedInvoiceAttachment
     */
    public function getEncryptedInvoicesAt($offset)
    {
        return $this->get(self::ENCRYPTEDINVOICES, $offset);
    }

    /**
     * Returns count of 'EncryptedInvoices' list
     *
     * @return int
     */
    public function getEncryptedInvoicesCount()
    {
        return $this->count(self::ENCRYPTEDINVOICES);
    }

    /**
     * Appends value to 'EncryptedXmlTorg12SellerTitles' list
     *
     * @param \Diadoc\Api\Proto\Events\EncryptedXmlDocumentAttachment $value Value to append
     *
     * @return null
     */
    public function appendEncryptedXmlTorg12SellerTitles(\Diadoc\Api\Proto\Events\EncryptedXmlDocumentAttachment $value)
    {
        return $this->append(self::ENCRYPTEDXMLTORG12SELLERTITLES, $value);
    }

    /**
     * Clears 'EncryptedXmlTorg12SellerTitles' list
     *
     * @return null
     */
    public function clearEncryptedXmlTorg12SellerTitles()
    {
        return $this->clear(self::ENCRYPTEDXMLTORG12SELLERTITLES);
    }

    /**
     * Returns 'EncryptedXmlTorg12SellerTitles' list
     *
     * @return \Diadoc\Api\Proto\Events\EncryptedXmlDocumentAttachment[]
     */
    public function getEncryptedXmlTorg12SellerTitles()
    {
        return $this->get(self::ENCRYPTEDXMLTORG12SELLERTITLES);
    }

    /**
     * Returns 'EncryptedXmlTorg12SellerTitles' iterator
     *
     * @return \ArrayIterator
     */
    public function getEncryptedXmlTorg12SellerTitlesIterator()
    {
        return new \ArrayIterator($this->get(self::ENCRYPTEDXMLTORG12SELLERTITLES));
    }

    /**
     * Returns element from 'EncryptedXmlTorg12SellerTitles' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\EncryptedXmlDocumentAttachment
     */
    public function getEncryptedXmlTorg12SellerTitlesAt($offset)
    {
        return $this->get(self::ENCRYPTEDXMLTORG12SELLERTITLES, $offset);
    }

    /**
     * Returns count of 'EncryptedXmlTorg12SellerTitles' list
     *
     * @return int
     */
    public function getEncryptedXmlTorg12SellerTitlesCount()
    {
        return $this->count(self::ENCRYPTEDXMLTORG12SELLERTITLES);
    }

    /**
     * Appends value to 'EncryptedXmlAcceptanceCertificateSellerTitles' list
     *
     * @param \Diadoc\Api\Proto\Events\EncryptedXmlDocumentAttachment $value Value to append
     *
     * @return null
     */
    public function appendEncryptedXmlAcceptanceCertificateSellerTitles(\Diadoc\Api\Proto\Events\EncryptedXmlDocumentAttachment $value)
    {
        return $this->append(self::ENCRYPTEDXMLACCEPTANCECERTIFICATESELLERTITLES, $value);
    }

    /**
     * Clears 'EncryptedXmlAcceptanceCertificateSellerTitles' list
     *
     * @return null
     */
    public function clearEncryptedXmlAcceptanceCertificateSellerTitles()
    {
        return $this->clear(self::ENCRYPTEDXMLACCEPTANCECERTIFICATESELLERTITLES);
    }

    /**
     * Returns 'EncryptedXmlAcceptanceCertificateSellerTitles' list
     *
     * @return \Diadoc\Api\Proto\Events\EncryptedXmlDocumentAttachment[]
     */
    public function getEncryptedXmlAcceptanceCertificateSellerTitles()
    {
        return $this->get(self::ENCRYPTEDXMLACCEPTANCECERTIFICATESELLERTITLES);
    }

    /**
     * Returns 'EncryptedXmlAcceptanceCertificateSellerTitles' iterator
     *
     * @return \ArrayIterator
     */
    public function getEncryptedXmlAcceptanceCertificateSellerTitlesIterator()
    {
        return new \ArrayIterator($this->get(self::ENCRYPTEDXMLACCEPTANCECERTIFICATESELLERTITLES));
    }

    /**
     * Returns element from 'EncryptedXmlAcceptanceCertificateSellerTitles' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\EncryptedXmlDocumentAttachment
     */
    public function getEncryptedXmlAcceptanceCertificateSellerTitlesAt($offset)
    {
        return $this->get(self::ENCRYPTEDXMLACCEPTANCECERTIFICATESELLERTITLES, $offset);
    }

    /**
     * Returns count of 'EncryptedXmlAcceptanceCertificateSellerTitles' list
     *
     * @return int
     */
    public function getEncryptedXmlAcceptanceCertificateSellerTitlesCount()
    {
        return $this->count(self::ENCRYPTEDXMLACCEPTANCECERTIFICATESELLERTITLES);
    }

    /**
     * Appends value to 'SupplementaryAgreements' list
     *
     * @param \Diadoc\Api\Proto\Events\SupplementaryAgreementAttachment $value Value to append
     *
     * @return null
     */
    public function appendSupplementaryAgreements(\Diadoc\Api\Proto\Events\SupplementaryAgreementAttachment $value)
    {
        return $this->append(self::SUPPLEMENTARYAGREEMENTS, $value);
    }

    /**
     * Clears 'SupplementaryAgreements' list
     *
     * @return null
     */
    public function clearSupplementaryAgreements()
    {
        return $this->clear(self::SUPPLEMENTARYAGREEMENTS);
    }

    /**
     * Returns 'SupplementaryAgreements' list
     *
     * @return \Diadoc\Api\Proto\Events\SupplementaryAgreementAttachment[]
     */
    public function getSupplementaryAgreements()
    {
        return $this->get(self::SUPPLEMENTARYAGREEMENTS);
    }

    /**
     * Returns 'SupplementaryAgreements' iterator
     *
     * @return \ArrayIterator
     */
    public function getSupplementaryAgreementsIterator()
    {
        return new \ArrayIterator($this->get(self::SUPPLEMENTARYAGREEMENTS));
    }

    /**
     * Returns element from 'SupplementaryAgreements' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\SupplementaryAgreementAttachment
     */
    public function getSupplementaryAgreementsAt($offset)
    {
        return $this->get(self::SUPPLEMENTARYAGREEMENTS, $offset);
    }

    /**
     * Returns count of 'SupplementaryAgreements' list
     *
     * @return int
     */
    public function getSupplementaryAgreementsCount()
    {
        return $this->count(self::SUPPLEMENTARYAGREEMENTS);
    }

    /**
     * Sets value of 'LockPacket' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setLockPacket($value)
    {
        return $this->set(self::LOCKPACKET, $value);
    }

    /**
     * Returns value of 'LockPacket' property
     *
     * @return boolean
     */
    public function getLockPacket()
    {
        $value = $this->get(self::LOCKPACKET);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Appends value to 'UniversalTransferDocumentSellerTitles' list
     *
     * @param \Diadoc\Api\Proto\Events\XmlDocumentAttachment $value Value to append
     *
     * @return null
     */
    public function appendUniversalTransferDocumentSellerTitles(\Diadoc\Api\Proto\Events\XmlDocumentAttachment $value)
    {
        return $this->append(self::UNIVERSALTRANSFERDOCUMENTSELLERTITLES, $value);
    }

    /**
     * Clears 'UniversalTransferDocumentSellerTitles' list
     *
     * @return null
     */
    public function clearUniversalTransferDocumentSellerTitles()
    {
        return $this->clear(self::UNIVERSALTRANSFERDOCUMENTSELLERTITLES);
    }

    /**
     * Returns 'UniversalTransferDocumentSellerTitles' list
     *
     * @return \Diadoc\Api\Proto\Events\XmlDocumentAttachment[]
     */
    public function getUniversalTransferDocumentSellerTitles()
    {
        return $this->get(self::UNIVERSALTRANSFERDOCUMENTSELLERTITLES);
    }

    /**
     * Returns 'UniversalTransferDocumentSellerTitles' iterator
     *
     * @return \ArrayIterator
     */
    public function getUniversalTransferDocumentSellerTitlesIterator()
    {
        return new \ArrayIterator($this->get(self::UNIVERSALTRANSFERDOCUMENTSELLERTITLES));
    }

    /**
     * Returns element from 'UniversalTransferDocumentSellerTitles' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\XmlDocumentAttachment
     */
    public function getUniversalTransferDocumentSellerTitlesAt($offset)
    {
        return $this->get(self::UNIVERSALTRANSFERDOCUMENTSELLERTITLES, $offset);
    }

    /**
     * Returns count of 'UniversalTransferDocumentSellerTitles' list
     *
     * @return int
     */
    public function getUniversalTransferDocumentSellerTitlesCount()
    {
        return $this->count(self::UNIVERSALTRANSFERDOCUMENTSELLERTITLES);
    }

    /**
     * Appends value to 'CustomDocumentAttachments' list
     *
     * @param \Diadoc\Api\Proto\Events\CustomDocumentAttachment $value Value to append
     *
     * @return null
     */
    public function appendCustomDocumentAttachments(\Diadoc\Api\Proto\Events\CustomDocumentAttachment $value)
    {
        return $this->append(self::CUSTOMDOCUMENTATTACHMENTS, $value);
    }

    /**
     * Clears 'CustomDocumentAttachments' list
     *
     * @return null
     */
    public function clearCustomDocumentAttachments()
    {
        return $this->clear(self::CUSTOMDOCUMENTATTACHMENTS);
    }

    /**
     * Returns 'CustomDocumentAttachments' list
     *
     * @return \Diadoc\Api\Proto\Events\CustomDocumentAttachment[]
     */
    public function getCustomDocumentAttachments()
    {
        return $this->get(self::CUSTOMDOCUMENTATTACHMENTS);
    }

    /**
     * Returns 'CustomDocumentAttachments' iterator
     *
     * @return \ArrayIterator
     */
    public function getCustomDocumentAttachmentsIterator()
    {
        return new \ArrayIterator($this->get(self::CUSTOMDOCUMENTATTACHMENTS));
    }

    /**
     * Returns element from 'CustomDocumentAttachments' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\CustomDocumentAttachment
     */
    public function getCustomDocumentAttachmentsAt($offset)
    {
        return $this->get(self::CUSTOMDOCUMENTATTACHMENTS, $offset);
    }

    /**
     * Returns count of 'CustomDocumentAttachments' list
     *
     * @return int
     */
    public function getCustomDocumentAttachmentsCount()
    {
        return $this->count(self::CUSTOMDOCUMENTATTACHMENTS);
    }
}
}