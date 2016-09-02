<?php
/**
 * Auto generated from Document.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Documents package
 */

namespace Diadoc\Api\Proto\Documents {
/**
 * Document message
 */
class Document extends \ProtobufMessage
{
    /* Field index constants */
    const INDEXKEY = 1;
    const MESSAGEID = 2;
    const ENTITYID = 3;
    const CREATIONTIMESTAMPTICKS = 4;
    const COUNTERAGENTBOXID = 5;
    const DOCUMENTTYPE = 6;
    const INITIALDOCUMENTIDS = 7;
    const SUBORDINATEDOCUMENTIDS = 8;
    const CONTENT = 9;
    const FILENAME = 10;
    const DOCUMENTDATE = 11;
    const DOCUMENTNUMBER = 12;
    const NONFORMALIZEDDOCUMENTMETADATA = 13;
    const INVOICEMETADATA = 14;
    const TRUSTCONNECTIONREQUESTMETADATA = 15;
    const TORG12METADATA = 16;
    const INVOICEREVISIONMETADATA = 17;
    const INVOICECORRECTIONMETADATA = 18;
    const INVOICECORRECTIONREVISIONMETADATA = 19;
    const ACCEPTANCECERTIFICATEMETADATA = 20;
    const PROFORMAINVOICEMETADATA = 21;
    const XMLTORG12METADATA = 22;
    const XMLACCEPTANCECERTIFICATEMETADATA = 23;
    const ISDELETED = 24;
    const DEPARTMENTID = 25;
    const ISTEST = 26;
    const FROMDEPARTMENTID = 27;
    const TODEPARTMENTID = 28;
    const PRICELISTMETADATA = 29;
    const CUSTOMDOCUMENTID = 30;
    const RESOLUTIONSTATUS = 31;
    const REVOCATIONSTATUS = 32;
    const SENDTIMESTAMPTICKS = 33;
    const DELIVERYTIMESTAMPTICKS = 34;
    const FORWARDDOCUMENTEVENTS = 35;
    const RECONCILIATIONACTMETADATA = 38;
    const CONTRACTMETADATA = 39;
    const TORG13METADATA = 40;
    const SERVICEDETAILSMETADATA = 41;
    const ROAMINGNOTIFICATIONSTATUS = 42;
    const HASCUSTOMPRINTFORM = 43;
    const CUSTOMDATA = 44;
    const PACKETID = 45;
    const DOCUMENTDIRECTION = 46;
    const LASTMODIFICATIONTIMESTAMPTICKS = 47;
    const ISENCRYPTEDCONTENT = 48;
    const SENDERSIGNATURESTATUS = 49;
    const SUPPLEMENTARYAGREEMENTMETADATA = 50;
    const ISREAD = 51;
    const ROAMINGNOTIFICATIONSTATUSDESCRIPTION = 52;
    const PACKETISLOCKED = 53;
    const PRICELISTAGREEMENTMETADATA = 54;
    const CERTIFICATEREGISTRYMETADATA = 55;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INDEXKEY => array(
            'name' => 'IndexKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MESSAGEID => array(
            'name' => 'MessageId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENTITYID => array(
            'name' => 'EntityId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CREATIONTIMESTAMPTICKS => array(
            'name' => 'CreationTimestampTicks',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::COUNTERAGENTBOXID => array(
            'name' => 'CounteragentBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTTYPE => array(
            'default' => \Diadoc\Api\Proto\DocumentType::UnknownDocumentType,
            'name' => 'DocumentType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INITIALDOCUMENTIDS => array(
            'name' => 'InitialDocumentIds',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\DocumentId'
        ),
        self::SUBORDINATEDOCUMENTIDS => array(
            'name' => 'SubordinateDocumentIds',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\DocumentId'
        ),
        self::CONTENT => array(
            'name' => 'Content',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Content'
        ),
        self::FILENAME => array(
            'name' => 'FileName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTDATE => array(
            'name' => 'DocumentDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTNUMBER => array(
            'name' => 'DocumentNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NONFORMALIZEDDOCUMENTMETADATA => array(
            'name' => 'NonformalizedDocumentMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\NonformalizedDocument\NonformalizedDocumentMetadata'
        ),
        self::INVOICEMETADATA => array(
            'name' => 'InvoiceMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceMetadata'
        ),
        self::TRUSTCONNECTIONREQUESTMETADATA => array(
            'name' => 'TrustConnectionRequestMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\BilateralDocument\TrustConnectionRequestMetadata'
        ),
        self::TORG12METADATA => array(
            'name' => 'Torg12Metadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata'
        ),
        self::INVOICEREVISIONMETADATA => array(
            'name' => 'InvoiceRevisionMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceRevisionMetadata'
        ),
        self::INVOICECORRECTIONMETADATA => array(
            'name' => 'InvoiceCorrectionMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceCorrectionMetadata'
        ),
        self::INVOICECORRECTIONREVISIONMETADATA => array(
            'name' => 'InvoiceCorrectionRevisionMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceCorrectionRevisionMetadata'
        ),
        self::ACCEPTANCECERTIFICATEMETADATA => array(
            'name' => 'AcceptanceCertificateMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateMetadata'
        ),
        self::PROFORMAINVOICEMETADATA => array(
            'name' => 'ProformaInvoiceMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\UnilateralDocument\ProformaInvoiceMetadata'
        ),
        self::XMLTORG12METADATA => array(
            'name' => 'XmlTorg12Metadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata'
        ),
        self::XMLACCEPTANCECERTIFICATEMETADATA => array(
            'name' => 'XmlAcceptanceCertificateMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata'
        ),
        self::ISDELETED => array(
            'default' => false,
            'name' => 'IsDeleted',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DEPARTMENTID => array(
            'name' => 'DepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISTEST => array(
            'default' => false,
            'name' => 'IsTest',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::FROMDEPARTMENTID => array(
            'name' => 'FromDepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TODEPARTMENTID => array(
            'name' => 'ToDepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRICELISTMETADATA => array(
            'name' => 'PriceListMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\BilateralDocument\PriceListMetadata'
        ),
        self::CUSTOMDOCUMENTID => array(
            'name' => 'CustomDocumentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RESOLUTIONSTATUS => array(
            'name' => 'ResolutionStatus',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\ResolutionStatus'
        ),
        self::REVOCATIONSTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\RevocationStatus::UnknownRevocationStatus,
            'name' => 'RevocationStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SENDTIMESTAMPTICKS => array(
            'name' => 'SendTimestampTicks',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::DELIVERYTIMESTAMPTICKS => array(
            'name' => 'DeliveryTimestampTicks',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::FORWARDDOCUMENTEVENTS => array(
            'name' => 'ForwardDocumentEvents',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\ForwardDocumentEvent'
        ),
        self::RECONCILIATIONACTMETADATA => array(
            'name' => 'ReconciliationActMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentMetadata'
        ),
        self::CONTRACTMETADATA => array(
            'name' => 'ContractMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\BilateralDocument\ContractMetadata'
        ),
        self::TORG13METADATA => array(
            'name' => 'Torg13Metadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata'
        ),
        self::SERVICEDETAILSMETADATA => array(
            'name' => 'ServiceDetailsMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\UnilateralDocument\ServiceDetailsMetadata'
        ),
        self::ROAMINGNOTIFICATIONSTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\RoamingNotificationStatus::UnknownRoamingNotificationStatus,
            'name' => 'RoamingNotificationStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HASCUSTOMPRINTFORM => array(
            'default' => false,
            'name' => 'HasCustomPrintForm',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CUSTOMDATA => array(
            'name' => 'CustomData',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\CustomDataItem'
        ),
        self::PACKETID => array(
            'name' => 'PacketId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTDIRECTION => array(
            'default' => \Diadoc\Api\Proto\DocumentDirection::UnknownDocumentDirection,
            'name' => 'DocumentDirection',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTMODIFICATIONTIMESTAMPTICKS => array(
            'name' => 'LastModificationTimestampTicks',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::ISENCRYPTEDCONTENT => array(
            'name' => 'IsEncryptedContent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::SENDERSIGNATURESTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\SenderSignatureStatus::UnknownSenderSignatureStatus,
            'name' => 'SenderSignatureStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SUPPLEMENTARYAGREEMENTMETADATA => array(
            'name' => 'SupplementaryAgreementMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\BilateralDocument\SupplementaryAgreementMetadata'
        ),
        self::ISREAD => array(
            'default' => false,
            'name' => 'IsRead',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ROAMINGNOTIFICATIONSTATUSDESCRIPTION => array(
            'name' => 'RoamingNotificationStatusDescription',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PACKETISLOCKED => array(
            'default' => false,
            'name' => 'PacketIsLocked',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PRICELISTAGREEMENTMETADATA => array(
            'name' => 'PriceListAgreementMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\NonformalizedDocument\NonformalizedDocumentMetadata'
        ),
        self::CERTIFICATEREGISTRYMETADATA => array(
            'name' => 'CertificateRegistryMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\NonformalizedDocument\NonformalizedDocumentMetadata'
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
        $this->values[self::INDEXKEY] = null;
        $this->values[self::MESSAGEID] = null;
        $this->values[self::ENTITYID] = null;
        $this->values[self::CREATIONTIMESTAMPTICKS] = null;
        $this->values[self::COUNTERAGENTBOXID] = null;
        $this->values[self::DOCUMENTTYPE] = self::$fields[self::DOCUMENTTYPE]['default'];
        $this->values[self::INITIALDOCUMENTIDS] = array();
        $this->values[self::SUBORDINATEDOCUMENTIDS] = array();
        $this->values[self::CONTENT] = null;
        $this->values[self::FILENAME] = null;
        $this->values[self::DOCUMENTDATE] = null;
        $this->values[self::DOCUMENTNUMBER] = null;
        $this->values[self::NONFORMALIZEDDOCUMENTMETADATA] = null;
        $this->values[self::INVOICEMETADATA] = null;
        $this->values[self::TRUSTCONNECTIONREQUESTMETADATA] = null;
        $this->values[self::TORG12METADATA] = null;
        $this->values[self::INVOICEREVISIONMETADATA] = null;
        $this->values[self::INVOICECORRECTIONMETADATA] = null;
        $this->values[self::INVOICECORRECTIONREVISIONMETADATA] = null;
        $this->values[self::ACCEPTANCECERTIFICATEMETADATA] = null;
        $this->values[self::PROFORMAINVOICEMETADATA] = null;
        $this->values[self::XMLTORG12METADATA] = null;
        $this->values[self::XMLACCEPTANCECERTIFICATEMETADATA] = null;
        $this->values[self::ISDELETED] = self::$fields[self::ISDELETED]['default'];
        $this->values[self::DEPARTMENTID] = null;
        $this->values[self::ISTEST] = self::$fields[self::ISTEST]['default'];
        $this->values[self::FROMDEPARTMENTID] = null;
        $this->values[self::TODEPARTMENTID] = null;
        $this->values[self::PRICELISTMETADATA] = null;
        $this->values[self::CUSTOMDOCUMENTID] = null;
        $this->values[self::RESOLUTIONSTATUS] = null;
        $this->values[self::REVOCATIONSTATUS] = self::$fields[self::REVOCATIONSTATUS]['default'];
        $this->values[self::SENDTIMESTAMPTICKS] = null;
        $this->values[self::DELIVERYTIMESTAMPTICKS] = null;
        $this->values[self::FORWARDDOCUMENTEVENTS] = array();
        $this->values[self::RECONCILIATIONACTMETADATA] = null;
        $this->values[self::CONTRACTMETADATA] = null;
        $this->values[self::TORG13METADATA] = null;
        $this->values[self::SERVICEDETAILSMETADATA] = null;
        $this->values[self::ROAMINGNOTIFICATIONSTATUS] = self::$fields[self::ROAMINGNOTIFICATIONSTATUS]['default'];
        $this->values[self::HASCUSTOMPRINTFORM] = self::$fields[self::HASCUSTOMPRINTFORM]['default'];
        $this->values[self::CUSTOMDATA] = array();
        $this->values[self::PACKETID] = null;
        $this->values[self::DOCUMENTDIRECTION] = self::$fields[self::DOCUMENTDIRECTION]['default'];
        $this->values[self::LASTMODIFICATIONTIMESTAMPTICKS] = null;
        $this->values[self::ISENCRYPTEDCONTENT] = null;
        $this->values[self::SENDERSIGNATURESTATUS] = self::$fields[self::SENDERSIGNATURESTATUS]['default'];
        $this->values[self::SUPPLEMENTARYAGREEMENTMETADATA] = null;
        $this->values[self::ISREAD] = self::$fields[self::ISREAD]['default'];
        $this->values[self::ROAMINGNOTIFICATIONSTATUSDESCRIPTION] = null;
        $this->values[self::PACKETISLOCKED] = self::$fields[self::PACKETISLOCKED]['default'];
        $this->values[self::PRICELISTAGREEMENTMETADATA] = null;
        $this->values[self::CERTIFICATEREGISTRYMETADATA] = null;
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
     * Sets value of 'IndexKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndexKey($value)
    {
        return $this->set(self::INDEXKEY, $value);
    }

    /**
     * Returns value of 'IndexKey' property
     *
     * @return string
     */
    public function getIndexKey()
    {
        $value = $this->get(self::INDEXKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'MessageId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageId($value)
    {
        return $this->set(self::MESSAGEID, $value);
    }

    /**
     * Returns value of 'MessageId' property
     *
     * @return string
     */
    public function getMessageId()
    {
        $value = $this->get(self::MESSAGEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'EntityId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEntityId($value)
    {
        return $this->set(self::ENTITYID, $value);
    }

    /**
     * Returns value of 'EntityId' property
     *
     * @return string
     */
    public function getEntityId()
    {
        $value = $this->get(self::ENTITYID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'CreationTimestampTicks' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreationTimestampTicks($value)
    {
        return $this->set(self::CREATIONTIMESTAMPTICKS, $value);
    }

    /**
     * Returns value of 'CreationTimestampTicks' property
     *
     * @return integer
     */
    public function getCreationTimestampTicks()
    {
        $value = $this->get(self::CREATIONTIMESTAMPTICKS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'CounteragentBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCounteragentBoxId($value)
    {
        return $this->set(self::COUNTERAGENTBOXID, $value);
    }

    /**
     * Returns value of 'CounteragentBoxId' property
     *
     * @return string
     */
    public function getCounteragentBoxId()
    {
        $value = $this->get(self::COUNTERAGENTBOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDocumentType($value)
    {
        return $this->set(self::DOCUMENTTYPE, $value);
    }

    /**
     * Returns value of 'DocumentType' property
     *
     * @return integer
     */
    public function getDocumentType()
    {
        $value = $this->get(self::DOCUMENTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'InitialDocumentIds' list
     *
     * @param \Diadoc\Api\Proto\DocumentId $value Value to append
     *
     * @return null
     */
    public function appendInitialDocumentIds(\Diadoc\Api\Proto\DocumentId $value)
    {
        return $this->append(self::INITIALDOCUMENTIDS, $value);
    }

    /**
     * Clears 'InitialDocumentIds' list
     *
     * @return null
     */
    public function clearInitialDocumentIds()
    {
        return $this->clear(self::INITIALDOCUMENTIDS);
    }

    /**
     * Returns 'InitialDocumentIds' list
     *
     * @return \Diadoc\Api\Proto\DocumentId[]
     */
    public function getInitialDocumentIds()
    {
        return $this->get(self::INITIALDOCUMENTIDS);
    }

    /**
     * Returns 'InitialDocumentIds' iterator
     *
     * @return \ArrayIterator
     */
    public function getInitialDocumentIdsIterator()
    {
        return new \ArrayIterator($this->get(self::INITIALDOCUMENTIDS));
    }

    /**
     * Returns element from 'InitialDocumentIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\DocumentId
     */
    public function getInitialDocumentIdsAt($offset)
    {
        return $this->get(self::INITIALDOCUMENTIDS, $offset);
    }

    /**
     * Returns count of 'InitialDocumentIds' list
     *
     * @return int
     */
    public function getInitialDocumentIdsCount()
    {
        return $this->count(self::INITIALDOCUMENTIDS);
    }

    /**
     * Appends value to 'SubordinateDocumentIds' list
     *
     * @param \Diadoc\Api\Proto\DocumentId $value Value to append
     *
     * @return null
     */
    public function appendSubordinateDocumentIds(\Diadoc\Api\Proto\DocumentId $value)
    {
        return $this->append(self::SUBORDINATEDOCUMENTIDS, $value);
    }

    /**
     * Clears 'SubordinateDocumentIds' list
     *
     * @return null
     */
    public function clearSubordinateDocumentIds()
    {
        return $this->clear(self::SUBORDINATEDOCUMENTIDS);
    }

    /**
     * Returns 'SubordinateDocumentIds' list
     *
     * @return \Diadoc\Api\Proto\DocumentId[]
     */
    public function getSubordinateDocumentIds()
    {
        return $this->get(self::SUBORDINATEDOCUMENTIDS);
    }

    /**
     * Returns 'SubordinateDocumentIds' iterator
     *
     * @return \ArrayIterator
     */
    public function getSubordinateDocumentIdsIterator()
    {
        return new \ArrayIterator($this->get(self::SUBORDINATEDOCUMENTIDS));
    }

    /**
     * Returns element from 'SubordinateDocumentIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\DocumentId
     */
    public function getSubordinateDocumentIdsAt($offset)
    {
        return $this->get(self::SUBORDINATEDOCUMENTIDS, $offset);
    }

    /**
     * Returns count of 'SubordinateDocumentIds' list
     *
     * @return int
     */
    public function getSubordinateDocumentIdsCount()
    {
        return $this->count(self::SUBORDINATEDOCUMENTIDS);
    }

    /**
     * Sets value of 'Content' property
     *
     * @param \Diadoc\Api\Proto\Content $value Property value
     *
     * @return null
     */
    public function setContent(\Diadoc\Api\Proto\Content $value=null)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'Content' property
     *
     * @return \Diadoc\Api\Proto\Content
     */
    public function getContent()
    {
        return $this->get(self::CONTENT);
    }

    /**
     * Sets value of 'FileName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFileName($value)
    {
        return $this->set(self::FILENAME, $value);
    }

    /**
     * Returns value of 'FileName' property
     *
     * @return string
     */
    public function getFileName()
    {
        $value = $this->get(self::FILENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentDate($value)
    {
        return $this->set(self::DOCUMENTDATE, $value);
    }

    /**
     * Returns value of 'DocumentDate' property
     *
     * @return string
     */
    public function getDocumentDate()
    {
        $value = $this->get(self::DOCUMENTDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentNumber($value)
    {
        return $this->set(self::DOCUMENTNUMBER, $value);
    }

    /**
     * Returns value of 'DocumentNumber' property
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        $value = $this->get(self::DOCUMENTNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'NonformalizedDocumentMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\NonformalizedDocument\NonformalizedDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setNonformalizedDocumentMetadata(\Diadoc\Api\Proto\Documents\NonformalizedDocument\NonformalizedDocumentMetadata $value=null)
    {
        return $this->set(self::NONFORMALIZEDDOCUMENTMETADATA, $value);
    }

    /**
     * Returns value of 'NonformalizedDocumentMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\NonformalizedDocument\NonformalizedDocumentMetadata
     */
    public function getNonformalizedDocumentMetadata()
    {
        return $this->get(self::NONFORMALIZEDDOCUMENTMETADATA);
    }

    /**
     * Sets value of 'InvoiceMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceMetadata $value Property value
     *
     * @return null
     */
    public function setInvoiceMetadata(\Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceMetadata $value=null)
    {
        return $this->set(self::INVOICEMETADATA, $value);
    }

    /**
     * Returns value of 'InvoiceMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceMetadata
     */
    public function getInvoiceMetadata()
    {
        return $this->get(self::INVOICEMETADATA);
    }

    /**
     * Sets value of 'TrustConnectionRequestMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\BilateralDocument\TrustConnectionRequestMetadata $value Property value
     *
     * @return null
     */
    public function setTrustConnectionRequestMetadata(\Diadoc\Api\Proto\Documents\BilateralDocument\TrustConnectionRequestMetadata $value=null)
    {
        return $this->set(self::TRUSTCONNECTIONREQUESTMETADATA, $value);
    }

    /**
     * Returns value of 'TrustConnectionRequestMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\BilateralDocument\TrustConnectionRequestMetadata
     */
    public function getTrustConnectionRequestMetadata()
    {
        return $this->get(self::TRUSTCONNECTIONREQUESTMETADATA);
    }

    /**
     * Sets value of 'Torg12Metadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setTorg12Metadata(\Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata $value=null)
    {
        return $this->set(self::TORG12METADATA, $value);
    }

    /**
     * Returns value of 'Torg12Metadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata
     */
    public function getTorg12Metadata()
    {
        return $this->get(self::TORG12METADATA);
    }

    /**
     * Sets value of 'InvoiceRevisionMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceRevisionMetadata $value Property value
     *
     * @return null
     */
    public function setInvoiceRevisionMetadata(\Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceRevisionMetadata $value=null)
    {
        return $this->set(self::INVOICEREVISIONMETADATA, $value);
    }

    /**
     * Returns value of 'InvoiceRevisionMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceRevisionMetadata
     */
    public function getInvoiceRevisionMetadata()
    {
        return $this->get(self::INVOICEREVISIONMETADATA);
    }

    /**
     * Sets value of 'InvoiceCorrectionMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceCorrectionMetadata $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionMetadata(\Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceCorrectionMetadata $value=null)
    {
        return $this->set(self::INVOICECORRECTIONMETADATA, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceCorrectionMetadata
     */
    public function getInvoiceCorrectionMetadata()
    {
        return $this->get(self::INVOICECORRECTIONMETADATA);
    }

    /**
     * Sets value of 'InvoiceCorrectionRevisionMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceCorrectionRevisionMetadata $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionRevisionMetadata(\Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceCorrectionRevisionMetadata $value=null)
    {
        return $this->set(self::INVOICECORRECTIONREVISIONMETADATA, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionRevisionMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceCorrectionRevisionMetadata
     */
    public function getInvoiceCorrectionRevisionMetadata()
    {
        return $this->get(self::INVOICECORRECTIONREVISIONMETADATA);
    }

    /**
     * Sets value of 'AcceptanceCertificateMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateMetadata $value Property value
     *
     * @return null
     */
    public function setAcceptanceCertificateMetadata(\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateMetadata $value=null)
    {
        return $this->set(self::ACCEPTANCECERTIFICATEMETADATA, $value);
    }

    /**
     * Returns value of 'AcceptanceCertificateMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateMetadata
     */
    public function getAcceptanceCertificateMetadata()
    {
        return $this->get(self::ACCEPTANCECERTIFICATEMETADATA);
    }

    /**
     * Sets value of 'ProformaInvoiceMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\UnilateralDocument\ProformaInvoiceMetadata $value Property value
     *
     * @return null
     */
    public function setProformaInvoiceMetadata(\Diadoc\Api\Proto\Documents\UnilateralDocument\ProformaInvoiceMetadata $value=null)
    {
        return $this->set(self::PROFORMAINVOICEMETADATA, $value);
    }

    /**
     * Returns value of 'ProformaInvoiceMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\UnilateralDocument\ProformaInvoiceMetadata
     */
    public function getProformaInvoiceMetadata()
    {
        return $this->get(self::PROFORMAINVOICEMETADATA);
    }

    /**
     * Sets value of 'XmlTorg12Metadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setXmlTorg12Metadata(\Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata $value=null)
    {
        return $this->set(self::XMLTORG12METADATA, $value);
    }

    /**
     * Returns value of 'XmlTorg12Metadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata
     */
    public function getXmlTorg12Metadata()
    {
        return $this->get(self::XMLTORG12METADATA);
    }

    /**
     * Sets value of 'XmlAcceptanceCertificateMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setXmlAcceptanceCertificateMetadata(\Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata $value=null)
    {
        return $this->set(self::XMLACCEPTANCECERTIFICATEMETADATA, $value);
    }

    /**
     * Returns value of 'XmlAcceptanceCertificateMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata
     */
    public function getXmlAcceptanceCertificateMetadata()
    {
        return $this->get(self::XMLACCEPTANCECERTIFICATEMETADATA);
    }

    /**
     * Sets value of 'IsDeleted' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsDeleted($value)
    {
        return $this->set(self::ISDELETED, $value);
    }

    /**
     * Returns value of 'IsDeleted' property
     *
     * @return boolean
     */
    public function getIsDeleted()
    {
        $value = $this->get(self::ISDELETED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'DepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDepartmentId($value)
    {
        return $this->set(self::DEPARTMENTID, $value);
    }

    /**
     * Returns value of 'DepartmentId' property
     *
     * @return string
     */
    public function getDepartmentId()
    {
        $value = $this->get(self::DEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'IsTest' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsTest($value)
    {
        return $this->set(self::ISTEST, $value);
    }

    /**
     * Returns value of 'IsTest' property
     *
     * @return boolean
     */
    public function getIsTest()
    {
        $value = $this->get(self::ISTEST);
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
     * Sets value of 'PriceListMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\BilateralDocument\PriceListMetadata $value Property value
     *
     * @return null
     */
    public function setPriceListMetadata(\Diadoc\Api\Proto\Documents\BilateralDocument\PriceListMetadata $value=null)
    {
        return $this->set(self::PRICELISTMETADATA, $value);
    }

    /**
     * Returns value of 'PriceListMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\BilateralDocument\PriceListMetadata
     */
    public function getPriceListMetadata()
    {
        return $this->get(self::PRICELISTMETADATA);
    }

    /**
     * Sets value of 'CustomDocumentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomDocumentId($value)
    {
        return $this->set(self::CUSTOMDOCUMENTID, $value);
    }

    /**
     * Returns value of 'CustomDocumentId' property
     *
     * @return string
     */
    public function getCustomDocumentId()
    {
        $value = $this->get(self::CUSTOMDOCUMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ResolutionStatus' property
     *
     * @param \Diadoc\Api\Proto\Documents\ResolutionStatus $value Property value
     *
     * @return null
     */
    public function setResolutionStatus(\Diadoc\Api\Proto\Documents\ResolutionStatus $value=null)
    {
        return $this->set(self::RESOLUTIONSTATUS, $value);
    }

    /**
     * Returns value of 'ResolutionStatus' property
     *
     * @return \Diadoc\Api\Proto\Documents\ResolutionStatus
     */
    public function getResolutionStatus()
    {
        return $this->get(self::RESOLUTIONSTATUS);
    }

    /**
     * Sets value of 'RevocationStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRevocationStatus($value)
    {
        return $this->set(self::REVOCATIONSTATUS, $value);
    }

    /**
     * Returns value of 'RevocationStatus' property
     *
     * @return integer
     */
    public function getRevocationStatus()
    {
        $value = $this->get(self::REVOCATIONSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'SendTimestampTicks' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSendTimestampTicks($value)
    {
        return $this->set(self::SENDTIMESTAMPTICKS, $value);
    }

    /**
     * Returns value of 'SendTimestampTicks' property
     *
     * @return integer
     */
    public function getSendTimestampTicks()
    {
        $value = $this->get(self::SENDTIMESTAMPTICKS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'DeliveryTimestampTicks' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeliveryTimestampTicks($value)
    {
        return $this->set(self::DELIVERYTIMESTAMPTICKS, $value);
    }

    /**
     * Returns value of 'DeliveryTimestampTicks' property
     *
     * @return integer
     */
    public function getDeliveryTimestampTicks()
    {
        $value = $this->get(self::DELIVERYTIMESTAMPTICKS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'ForwardDocumentEvents' list
     *
     * @param \Diadoc\Api\Proto\ForwardDocumentEvent $value Value to append
     *
     * @return null
     */
    public function appendForwardDocumentEvents(\Diadoc\Api\Proto\ForwardDocumentEvent $value)
    {
        return $this->append(self::FORWARDDOCUMENTEVENTS, $value);
    }

    /**
     * Clears 'ForwardDocumentEvents' list
     *
     * @return null
     */
    public function clearForwardDocumentEvents()
    {
        return $this->clear(self::FORWARDDOCUMENTEVENTS);
    }

    /**
     * Returns 'ForwardDocumentEvents' list
     *
     * @return \Diadoc\Api\Proto\ForwardDocumentEvent[]
     */
    public function getForwardDocumentEvents()
    {
        return $this->get(self::FORWARDDOCUMENTEVENTS);
    }

    /**
     * Returns 'ForwardDocumentEvents' iterator
     *
     * @return \ArrayIterator
     */
    public function getForwardDocumentEventsIterator()
    {
        return new \ArrayIterator($this->get(self::FORWARDDOCUMENTEVENTS));
    }

    /**
     * Returns element from 'ForwardDocumentEvents' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\ForwardDocumentEvent
     */
    public function getForwardDocumentEventsAt($offset)
    {
        return $this->get(self::FORWARDDOCUMENTEVENTS, $offset);
    }

    /**
     * Returns count of 'ForwardDocumentEvents' list
     *
     * @return int
     */
    public function getForwardDocumentEventsCount()
    {
        return $this->count(self::FORWARDDOCUMENTEVENTS);
    }

    /**
     * Sets value of 'ReconciliationActMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setReconciliationActMetadata(\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentMetadata $value=null)
    {
        return $this->set(self::RECONCILIATIONACTMETADATA, $value);
    }

    /**
     * Returns value of 'ReconciliationActMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentMetadata
     */
    public function getReconciliationActMetadata()
    {
        return $this->get(self::RECONCILIATIONACTMETADATA);
    }

    /**
     * Sets value of 'ContractMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\BilateralDocument\ContractMetadata $value Property value
     *
     * @return null
     */
    public function setContractMetadata(\Diadoc\Api\Proto\Documents\BilateralDocument\ContractMetadata $value=null)
    {
        return $this->set(self::CONTRACTMETADATA, $value);
    }

    /**
     * Returns value of 'ContractMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\BilateralDocument\ContractMetadata
     */
    public function getContractMetadata()
    {
        return $this->get(self::CONTRACTMETADATA);
    }

    /**
     * Sets value of 'Torg13Metadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setTorg13Metadata(\Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata $value=null)
    {
        return $this->set(self::TORG13METADATA, $value);
    }

    /**
     * Returns value of 'Torg13Metadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\BilateralDocument\BasicDocumentMetadata
     */
    public function getTorg13Metadata()
    {
        return $this->get(self::TORG13METADATA);
    }

    /**
     * Sets value of 'ServiceDetailsMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\UnilateralDocument\ServiceDetailsMetadata $value Property value
     *
     * @return null
     */
    public function setServiceDetailsMetadata(\Diadoc\Api\Proto\Documents\UnilateralDocument\ServiceDetailsMetadata $value=null)
    {
        return $this->set(self::SERVICEDETAILSMETADATA, $value);
    }

    /**
     * Returns value of 'ServiceDetailsMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\UnilateralDocument\ServiceDetailsMetadata
     */
    public function getServiceDetailsMetadata()
    {
        return $this->get(self::SERVICEDETAILSMETADATA);
    }

    /**
     * Sets value of 'RoamingNotificationStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoamingNotificationStatus($value)
    {
        return $this->set(self::ROAMINGNOTIFICATIONSTATUS, $value);
    }

    /**
     * Returns value of 'RoamingNotificationStatus' property
     *
     * @return integer
     */
    public function getRoamingNotificationStatus()
    {
        $value = $this->get(self::ROAMINGNOTIFICATIONSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'HasCustomPrintForm' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setHasCustomPrintForm($value)
    {
        return $this->set(self::HASCUSTOMPRINTFORM, $value);
    }

    /**
     * Returns value of 'HasCustomPrintForm' property
     *
     * @return boolean
     */
    public function getHasCustomPrintForm()
    {
        $value = $this->get(self::HASCUSTOMPRINTFORM);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Appends value to 'CustomData' list
     *
     * @param \Diadoc\Api\Proto\CustomDataItem $value Value to append
     *
     * @return null
     */
    public function appendCustomData(\Diadoc\Api\Proto\CustomDataItem $value)
    {
        return $this->append(self::CUSTOMDATA, $value);
    }

    /**
     * Clears 'CustomData' list
     *
     * @return null
     */
    public function clearCustomData()
    {
        return $this->clear(self::CUSTOMDATA);
    }

    /**
     * Returns 'CustomData' list
     *
     * @return \Diadoc\Api\Proto\CustomDataItem[]
     */
    public function getCustomData()
    {
        return $this->get(self::CUSTOMDATA);
    }

    /**
     * Returns 'CustomData' iterator
     *
     * @return \ArrayIterator
     */
    public function getCustomDataIterator()
    {
        return new \ArrayIterator($this->get(self::CUSTOMDATA));
    }

    /**
     * Returns element from 'CustomData' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\CustomDataItem
     */
    public function getCustomDataAt($offset)
    {
        return $this->get(self::CUSTOMDATA, $offset);
    }

    /**
     * Returns count of 'CustomData' list
     *
     * @return int
     */
    public function getCustomDataCount()
    {
        return $this->count(self::CUSTOMDATA);
    }

    /**
     * Sets value of 'PacketId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPacketId($value)
    {
        return $this->set(self::PACKETID, $value);
    }

    /**
     * Returns value of 'PacketId' property
     *
     * @return string
     */
    public function getPacketId()
    {
        $value = $this->get(self::PACKETID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentDirection' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDocumentDirection($value)
    {
        return $this->set(self::DOCUMENTDIRECTION, $value);
    }

    /**
     * Returns value of 'DocumentDirection' property
     *
     * @return integer
     */
    public function getDocumentDirection()
    {
        $value = $this->get(self::DOCUMENTDIRECTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'LastModificationTimestampTicks' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastModificationTimestampTicks($value)
    {
        return $this->set(self::LASTMODIFICATIONTIMESTAMPTICKS, $value);
    }

    /**
     * Returns value of 'LastModificationTimestampTicks' property
     *
     * @return integer
     */
    public function getLastModificationTimestampTicks()
    {
        $value = $this->get(self::LASTMODIFICATIONTIMESTAMPTICKS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'IsEncryptedContent' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsEncryptedContent($value)
    {
        return $this->set(self::ISENCRYPTEDCONTENT, $value);
    }

    /**
     * Returns value of 'IsEncryptedContent' property
     *
     * @return boolean
     */
    public function getIsEncryptedContent()
    {
        $value = $this->get(self::ISENCRYPTEDCONTENT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'SenderSignatureStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSenderSignatureStatus($value)
    {
        return $this->set(self::SENDERSIGNATURESTATUS, $value);
    }

    /**
     * Returns value of 'SenderSignatureStatus' property
     *
     * @return integer
     */
    public function getSenderSignatureStatus()
    {
        $value = $this->get(self::SENDERSIGNATURESTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'SupplementaryAgreementMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\BilateralDocument\SupplementaryAgreementMetadata $value Property value
     *
     * @return null
     */
    public function setSupplementaryAgreementMetadata(\Diadoc\Api\Proto\Documents\BilateralDocument\SupplementaryAgreementMetadata $value=null)
    {
        return $this->set(self::SUPPLEMENTARYAGREEMENTMETADATA, $value);
    }

    /**
     * Returns value of 'SupplementaryAgreementMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\BilateralDocument\SupplementaryAgreementMetadata
     */
    public function getSupplementaryAgreementMetadata()
    {
        return $this->get(self::SUPPLEMENTARYAGREEMENTMETADATA);
    }

    /**
     * Sets value of 'IsRead' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsRead($value)
    {
        return $this->set(self::ISREAD, $value);
    }

    /**
     * Returns value of 'IsRead' property
     *
     * @return boolean
     */
    public function getIsRead()
    {
        $value = $this->get(self::ISREAD);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'RoamingNotificationStatusDescription' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRoamingNotificationStatusDescription($value)
    {
        return $this->set(self::ROAMINGNOTIFICATIONSTATUSDESCRIPTION, $value);
    }

    /**
     * Returns value of 'RoamingNotificationStatusDescription' property
     *
     * @return string
     */
    public function getRoamingNotificationStatusDescription()
    {
        $value = $this->get(self::ROAMINGNOTIFICATIONSTATUSDESCRIPTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'PacketIsLocked' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPacketIsLocked($value)
    {
        return $this->set(self::PACKETISLOCKED, $value);
    }

    /**
     * Returns value of 'PacketIsLocked' property
     *
     * @return boolean
     */
    public function getPacketIsLocked()
    {
        $value = $this->get(self::PACKETISLOCKED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'PriceListAgreementMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\NonformalizedDocument\NonformalizedDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setPriceListAgreementMetadata(\Diadoc\Api\Proto\Documents\NonformalizedDocument\NonformalizedDocumentMetadata $value=null)
    {
        return $this->set(self::PRICELISTAGREEMENTMETADATA, $value);
    }

    /**
     * Returns value of 'PriceListAgreementMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\NonformalizedDocument\NonformalizedDocumentMetadata
     */
    public function getPriceListAgreementMetadata()
    {
        return $this->get(self::PRICELISTAGREEMENTMETADATA);
    }

    /**
     * Sets value of 'CertificateRegistryMetadata' property
     *
     * @param \Diadoc\Api\Proto\Documents\NonformalizedDocument\NonformalizedDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setCertificateRegistryMetadata(\Diadoc\Api\Proto\Documents\NonformalizedDocument\NonformalizedDocumentMetadata $value=null)
    {
        return $this->set(self::CERTIFICATEREGISTRYMETADATA, $value);
    }

    /**
     * Returns value of 'CertificateRegistryMetadata' property
     *
     * @return \Diadoc\Api\Proto\Documents\NonformalizedDocument\NonformalizedDocumentMetadata
     */
    public function getCertificateRegistryMetadata()
    {
        return $this->get(self::CERTIFICATEREGISTRYMETADATA);
    }
}
}