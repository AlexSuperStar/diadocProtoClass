<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * UniversalCorrectionDocumentSellerTitleInfo message
 */
class UniversalCorrectionDocumentSellerTitleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const FUNCTION = 1;
    const DOCUMENTNAME = 2;
    const DOCUMENTDATE = 3;
    const DOCUMENTNUMBER = 4;
    const INVOICES = 5;
    const SELLER = 6;
    const BUYER = 7;
    const SIGNERS = 8;
    const EVENTCONTENT = 9;
    const INVOICECORRECTIONTABLE = 10;
    const CURRENCY = 11;
    const CURRENCYRATE = 12;
    const CORRECTIONREVISIONDATE = 13;
    const CORRECTIONREVISIONNUMBER = 14;
    const ADDITIONALINFOID = 15;
    const DOCUMENTCREATOR = 16;
    const DOCUMENTCREATORBASE = 17;
    const GOVERNMENTCONTRACTINFO = 18;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FUNCTION => array(
            'name' => 'Function',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DOCUMENTNAME => array(
            'name' => 'DocumentName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTDATE => array(
            'name' => 'DocumentDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTNUMBER => array(
            'name' => 'DocumentNumber',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVOICES => array(
            'name' => 'Invoices',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\InvoiceForCorrectionInfo'
        ),
        self::SELLER => array(
            'name' => 'Seller',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo'
        ),
        self::BUYER => array(
            'name' => 'Buyer',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo'
        ),
        self::SIGNERS => array(
            'name' => 'Signers',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner'
        ),
        self::EVENTCONTENT => array(
            'name' => 'EventContent',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\EventContent'
        ),
        self::INVOICECORRECTIONTABLE => array(
            'name' => 'InvoiceCorrectionTable',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\InvoiceCorrectionTable'
        ),
        self::CURRENCY => array(
            'name' => 'Currency',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CURRENCYRATE => array(
            'name' => 'CurrencyRate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CORRECTIONREVISIONDATE => array(
            'name' => 'CorrectionRevisionDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CORRECTIONREVISIONNUMBER => array(
            'name' => 'CorrectionRevisionNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDITIONALINFOID => array(
            'name' => 'AdditionalInfoId',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\AdditionalInfoId'
        ),
        self::DOCUMENTCREATOR => array(
            'name' => 'DocumentCreator',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTCREATORBASE => array(
            'name' => 'DocumentCreatorBase',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GOVERNMENTCONTRACTINFO => array(
            'name' => 'GovernmentContractInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::FUNCTION] = null;
        $this->values[self::DOCUMENTNAME] = null;
        $this->values[self::DOCUMENTDATE] = null;
        $this->values[self::DOCUMENTNUMBER] = null;
        $this->values[self::INVOICES] = array();
        $this->values[self::SELLER] = null;
        $this->values[self::BUYER] = null;
        $this->values[self::SIGNERS] = array();
        $this->values[self::EVENTCONTENT] = null;
        $this->values[self::INVOICECORRECTIONTABLE] = null;
        $this->values[self::CURRENCY] = null;
        $this->values[self::CURRENCYRATE] = null;
        $this->values[self::CORRECTIONREVISIONDATE] = null;
        $this->values[self::CORRECTIONREVISIONNUMBER] = null;
        $this->values[self::ADDITIONALINFOID] = null;
        $this->values[self::DOCUMENTCREATOR] = null;
        $this->values[self::DOCUMENTCREATORBASE] = null;
        $this->values[self::GOVERNMENTCONTRACTINFO] = null;
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
     * Sets value of 'Function' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFunction($value)
    {
        return $this->set(self::FUNCTION, $value);
    }

    /**
     * Returns value of 'Function' property
     *
     * @return integer
     */
    public function getFunction()
    {
        $value = $this->get(self::FUNCTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'DocumentName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentName($value)
    {
        return $this->set(self::DOCUMENTNAME, $value);
    }

    /**
     * Returns value of 'DocumentName' property
     *
     * @return string
     */
    public function getDocumentName()
    {
        $value = $this->get(self::DOCUMENTNAME);
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
     * Appends value to 'Invoices' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceForCorrectionInfo $value Value to append
     *
     * @return null
     */
    public function appendInvoices(\Diadoc\Api\Proto\Invoicing\InvoiceForCorrectionInfo $value)
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
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceForCorrectionInfo[]
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
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceForCorrectionInfo
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
     * Sets value of 'Seller' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value Property value
     *
     * @return null
     */
    public function setSeller(\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value=null)
    {
        return $this->set(self::SELLER, $value);
    }

    /**
     * Returns value of 'Seller' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo
     */
    public function getSeller()
    {
        return $this->get(self::SELLER);
    }

    /**
     * Sets value of 'Buyer' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value Property value
     *
     * @return null
     */
    public function setBuyer(\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value=null)
    {
        return $this->set(self::BUYER, $value);
    }

    /**
     * Returns value of 'Buyer' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo
     */
    public function getBuyer()
    {
        return $this->get(self::BUYER);
    }

    /**
     * Appends value to 'Signers' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner $value Value to append
     *
     * @return null
     */
    public function appendSigners(\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner $value)
    {
        return $this->append(self::SIGNERS, $value);
    }

    /**
     * Clears 'Signers' list
     *
     * @return null
     */
    public function clearSigners()
    {
        return $this->clear(self::SIGNERS);
    }

    /**
     * Returns 'Signers' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner[]
     */
    public function getSigners()
    {
        return $this->get(self::SIGNERS);
    }

    /**
     * Returns 'Signers' iterator
     *
     * @return \ArrayIterator
     */
    public function getSignersIterator()
    {
        return new \ArrayIterator($this->get(self::SIGNERS));
    }

    /**
     * Returns element from 'Signers' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner
     */
    public function getSignersAt($offset)
    {
        return $this->get(self::SIGNERS, $offset);
    }

    /**
     * Returns count of 'Signers' list
     *
     * @return int
     */
    public function getSignersCount()
    {
        return $this->count(self::SIGNERS);
    }

    /**
     * Sets value of 'EventContent' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\EventContent $value Property value
     *
     * @return null
     */
    public function setEventContent(\Diadoc\Api\Proto\Invoicing\EventContent $value=null)
    {
        return $this->set(self::EVENTCONTENT, $value);
    }

    /**
     * Returns value of 'EventContent' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\EventContent
     */
    public function getEventContent()
    {
        return $this->get(self::EVENTCONTENT);
    }

    /**
     * Sets value of 'InvoiceCorrectionTable' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceCorrectionTable $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionTable(\Diadoc\Api\Proto\Invoicing\InvoiceCorrectionTable $value=null)
    {
        return $this->set(self::INVOICECORRECTIONTABLE, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionTable' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceCorrectionTable
     */
    public function getInvoiceCorrectionTable()
    {
        return $this->get(self::INVOICECORRECTIONTABLE);
    }

    /**
     * Sets value of 'Currency' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCurrency($value)
    {
        return $this->set(self::CURRENCY, $value);
    }

    /**
     * Returns value of 'Currency' property
     *
     * @return string
     */
    public function getCurrency()
    {
        $value = $this->get(self::CURRENCY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'CurrencyRate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCurrencyRate($value)
    {
        return $this->set(self::CURRENCYRATE, $value);
    }

    /**
     * Returns value of 'CurrencyRate' property
     *
     * @return string
     */
    public function getCurrencyRate()
    {
        $value = $this->get(self::CURRENCYRATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'CorrectionRevisionDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCorrectionRevisionDate($value)
    {
        return $this->set(self::CORRECTIONREVISIONDATE, $value);
    }

    /**
     * Returns value of 'CorrectionRevisionDate' property
     *
     * @return string
     */
    public function getCorrectionRevisionDate()
    {
        $value = $this->get(self::CORRECTIONREVISIONDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'CorrectionRevisionNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCorrectionRevisionNumber($value)
    {
        return $this->set(self::CORRECTIONREVISIONNUMBER, $value);
    }

    /**
     * Returns value of 'CorrectionRevisionNumber' property
     *
     * @return string
     */
    public function getCorrectionRevisionNumber()
    {
        $value = $this->get(self::CORRECTIONREVISIONNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'AdditionalInfoId' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\AdditionalInfoId $value Property value
     *
     * @return null
     */
    public function setAdditionalInfoId(\Diadoc\Api\Proto\Invoicing\AdditionalInfoId $value=null)
    {
        return $this->set(self::ADDITIONALINFOID, $value);
    }

    /**
     * Returns value of 'AdditionalInfoId' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfoId
     */
    public function getAdditionalInfoId()
    {
        return $this->get(self::ADDITIONALINFOID);
    }

    /**
     * Sets value of 'DocumentCreator' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentCreator($value)
    {
        return $this->set(self::DOCUMENTCREATOR, $value);
    }

    /**
     * Returns value of 'DocumentCreator' property
     *
     * @return string
     */
    public function getDocumentCreator()
    {
        $value = $this->get(self::DOCUMENTCREATOR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentCreatorBase' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentCreatorBase($value)
    {
        return $this->set(self::DOCUMENTCREATORBASE, $value);
    }

    /**
     * Returns value of 'DocumentCreatorBase' property
     *
     * @return string
     */
    public function getDocumentCreatorBase()
    {
        $value = $this->get(self::DOCUMENTCREATORBASE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'GovernmentContractInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGovernmentContractInfo($value)
    {
        return $this->set(self::GOVERNMENTCONTRACTINFO, $value);
    }

    /**
     * Returns value of 'GovernmentContractInfo' property
     *
     * @return string
     */
    public function getGovernmentContractInfo()
    {
        $value = $this->get(self::GOVERNMENTCONTRACTINFO);
        return $value === null ? (string)$value : $value;
    }
}
}