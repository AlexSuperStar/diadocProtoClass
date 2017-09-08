<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * UniversalTransferDocumentSellerTitleInfo message
 */
class UniversalTransferDocumentSellerTitleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const FUNCTION = 1;
    const DOCUMENTNAME = 2;
    const DOCUMENTDATE = 3;
    const DOCUMENTNUMBER = 4;
    const SELLER = 5;
    const BUYER = 6;
    const SHIPPER = 7;
    const CONSIGNEE = 8;
    const SIGNERS = 9;
    const PAYMENTDOCUMENTS = 10;
    const INVOICETABLE = 11;
    const CURRENCY = 12;
    const CURRENCYRATE = 13;
    const REVISIONDATE = 14;
    const REVISIONNUMBER = 15;
    const ADDITIONALINFOID = 16;
    const TRANSFERINFO = 17;
    const DOCUMENTCREATOR = 18;
    const DOCUMENTCREATORBASE = 19;
    const GOVERNMENTCONTRACTINFO = 20;

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
        self::SHIPPER => array(
            'name' => 'Shipper',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Shipper'
        ),
        self::CONSIGNEE => array(
            'name' => 'Consignee',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo'
        ),
        self::SIGNERS => array(
            'name' => 'Signers',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner'
        ),
        self::PAYMENTDOCUMENTS => array(
            'name' => 'PaymentDocuments',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo'
        ),
        self::INVOICETABLE => array(
            'name' => 'InvoiceTable',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\InvoiceTable'
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
        self::REVISIONDATE => array(
            'name' => 'RevisionDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REVISIONNUMBER => array(
            'name' => 'RevisionNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDITIONALINFOID => array(
            'name' => 'AdditionalInfoId',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\AdditionalInfoId'
        ),
        self::TRANSFERINFO => array(
            'name' => 'TransferInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\TransferInfo'
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
        $this->values[self::SELLER] = null;
        $this->values[self::BUYER] = null;
        $this->values[self::SHIPPER] = null;
        $this->values[self::CONSIGNEE] = null;
        $this->values[self::SIGNERS] = array();
        $this->values[self::PAYMENTDOCUMENTS] = array();
        $this->values[self::INVOICETABLE] = null;
        $this->values[self::CURRENCY] = null;
        $this->values[self::CURRENCYRATE] = null;
        $this->values[self::REVISIONDATE] = null;
        $this->values[self::REVISIONNUMBER] = null;
        $this->values[self::ADDITIONALINFOID] = null;
        $this->values[self::TRANSFERINFO] = null;
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
     * Sets value of 'Shipper' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Shipper $value Property value
     *
     * @return null
     */
    public function setShipper(\Diadoc\Api\Proto\Invoicing\Shipper $value=null)
    {
        return $this->set(self::SHIPPER, $value);
    }

    /**
     * Returns value of 'Shipper' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Shipper
     */
    public function getShipper()
    {
        return $this->get(self::SHIPPER);
    }

    /**
     * Sets value of 'Consignee' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value Property value
     *
     * @return null
     */
    public function setConsignee(\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value=null)
    {
        return $this->set(self::CONSIGNEE, $value);
    }

    /**
     * Returns value of 'Consignee' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo
     */
    public function getConsignee()
    {
        return $this->get(self::CONSIGNEE);
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
     * Appends value to 'PaymentDocuments' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo $value Value to append
     *
     * @return null
     */
    public function appendPaymentDocuments(\Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo $value)
    {
        return $this->append(self::PAYMENTDOCUMENTS, $value);
    }

    /**
     * Clears 'PaymentDocuments' list
     *
     * @return null
     */
    public function clearPaymentDocuments()
    {
        return $this->clear(self::PAYMENTDOCUMENTS);
    }

    /**
     * Returns 'PaymentDocuments' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo[]
     */
    public function getPaymentDocuments()
    {
        return $this->get(self::PAYMENTDOCUMENTS);
    }

    /**
     * Returns 'PaymentDocuments' iterator
     *
     * @return \ArrayIterator
     */
    public function getPaymentDocumentsIterator()
    {
        return new \ArrayIterator($this->get(self::PAYMENTDOCUMENTS));
    }

    /**
     * Returns element from 'PaymentDocuments' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo
     */
    public function getPaymentDocumentsAt($offset)
    {
        return $this->get(self::PAYMENTDOCUMENTS, $offset);
    }

    /**
     * Returns count of 'PaymentDocuments' list
     *
     * @return int
     */
    public function getPaymentDocumentsCount()
    {
        return $this->count(self::PAYMENTDOCUMENTS);
    }

    /**
     * Sets value of 'InvoiceTable' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceTable $value Property value
     *
     * @return null
     */
    public function setInvoiceTable(\Diadoc\Api\Proto\Invoicing\InvoiceTable $value=null)
    {
        return $this->set(self::INVOICETABLE, $value);
    }

    /**
     * Returns value of 'InvoiceTable' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceTable
     */
    public function getInvoiceTable()
    {
        return $this->get(self::INVOICETABLE);
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
     * Sets value of 'RevisionDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRevisionDate($value)
    {
        return $this->set(self::REVISIONDATE, $value);
    }

    /**
     * Returns value of 'RevisionDate' property
     *
     * @return string
     */
    public function getRevisionDate()
    {
        $value = $this->get(self::REVISIONDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'RevisionNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRevisionNumber($value)
    {
        return $this->set(self::REVISIONNUMBER, $value);
    }

    /**
     * Returns value of 'RevisionNumber' property
     *
     * @return string
     */
    public function getRevisionNumber()
    {
        $value = $this->get(self::REVISIONNUMBER);
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
     * Sets value of 'TransferInfo' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\TransferInfo $value Property value
     *
     * @return null
     */
    public function setTransferInfo(\Diadoc\Api\Proto\Invoicing\TransferInfo $value=null)
    {
        return $this->set(self::TRANSFERINFO, $value);
    }

    /**
     * Returns value of 'TransferInfo' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\TransferInfo
     */
    public function getTransferInfo()
    {
        return $this->get(self::TRANSFERINFO);
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