<?php
/**
 * Auto generated from DocumentInfo.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * DocumentInfo message
 */
class DocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTTYPE = 1;
    const DOCUMENTDIRECTION = 2;
    const ISTEST = 3;
    const CUSTOMDOCUMENTID = 4;
    const FROMDEPARTMENTID = 5;
    const TODEPARTMENTID = 6;
    const COUNTERAGENTBOXID = 7;
    const DOCUMENTDATEANDNUMBER = 8;
    const BASICDOCUMENTINFO = 9;
    const INVOICEINFO = 10;
    const INVOICECORRECTIONINFO = 11;
    const PRICELISTINFO = 12;
    const CONTRACTINFO = 13;
    const SUPPLEMENTARYAGREEMENTINFO = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTTYPE => array(
            'default' => \Diadoc\Api\Proto\DocumentType::UnknownDocumentType,
            'name' => 'DocumentType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DOCUMENTDIRECTION => array(
            'default' => \Diadoc\Api\Proto\DocumentDirection::UnknownDocumentDirection,
            'name' => 'DocumentDirection',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISTEST => array(
            'name' => 'IsTest',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CUSTOMDOCUMENTID => array(
            'name' => 'CustomDocumentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::COUNTERAGENTBOXID => array(
            'name' => 'CounteragentBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTDATEANDNUMBER => array(
            'name' => 'DocumentDateAndNumber',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber'
        ),
        self::BASICDOCUMENTINFO => array(
            'name' => 'BasicDocumentInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\BasicDocumentInfo'
        ),
        self::INVOICEINFO => array(
            'name' => 'InvoiceInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\InvoiceDocumentInfo'
        ),
        self::INVOICECORRECTIONINFO => array(
            'name' => 'InvoiceCorrectionInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\InvoiceCorrectionDocumentInfo'
        ),
        self::PRICELISTINFO => array(
            'name' => 'PriceListInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\PriceListDocumentInfo'
        ),
        self::CONTRACTINFO => array(
            'name' => 'ContractInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\ContractDocumentInfo'
        ),
        self::SUPPLEMENTARYAGREEMENTINFO => array(
            'name' => 'SupplementaryAgreementInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\SupplementaryAgreementDocumentInfo'
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
        $this->values[self::DOCUMENTTYPE] = self::$fields[self::DOCUMENTTYPE]['default'];
        $this->values[self::DOCUMENTDIRECTION] = self::$fields[self::DOCUMENTDIRECTION]['default'];
        $this->values[self::ISTEST] = null;
        $this->values[self::CUSTOMDOCUMENTID] = null;
        $this->values[self::FROMDEPARTMENTID] = null;
        $this->values[self::TODEPARTMENTID] = null;
        $this->values[self::COUNTERAGENTBOXID] = null;
        $this->values[self::DOCUMENTDATEANDNUMBER] = null;
        $this->values[self::BASICDOCUMENTINFO] = null;
        $this->values[self::INVOICEINFO] = null;
        $this->values[self::INVOICECORRECTIONINFO] = null;
        $this->values[self::PRICELISTINFO] = null;
        $this->values[self::CONTRACTINFO] = null;
        $this->values[self::SUPPLEMENTARYAGREEMENTINFO] = null;
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
     * Sets value of 'DocumentDateAndNumber' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setDocumentDateAndNumber(\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value=null)
    {
        return $this->set(self::DOCUMENTDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'DocumentDateAndNumber' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getDocumentDateAndNumber()
    {
        return $this->get(self::DOCUMENTDATEANDNUMBER);
    }

    /**
     * Sets value of 'BasicDocumentInfo' property
     *
     * @param \Diadoc\Api\Proto\Docflow\BasicDocumentInfo $value Property value
     *
     * @return null
     */
    public function setBasicDocumentInfo(\Diadoc\Api\Proto\Docflow\BasicDocumentInfo $value=null)
    {
        return $this->set(self::BASICDOCUMENTINFO, $value);
    }

    /**
     * Returns value of 'BasicDocumentInfo' property
     *
     * @return \Diadoc\Api\Proto\Docflow\BasicDocumentInfo
     */
    public function getBasicDocumentInfo()
    {
        return $this->get(self::BASICDOCUMENTINFO);
    }

    /**
     * Sets value of 'InvoiceInfo' property
     *
     * @param \Diadoc\Api\Proto\Docflow\InvoiceDocumentInfo $value Property value
     *
     * @return null
     */
    public function setInvoiceInfo(\Diadoc\Api\Proto\Docflow\InvoiceDocumentInfo $value=null)
    {
        return $this->set(self::INVOICEINFO, $value);
    }

    /**
     * Returns value of 'InvoiceInfo' property
     *
     * @return \Diadoc\Api\Proto\Docflow\InvoiceDocumentInfo
     */
    public function getInvoiceInfo()
    {
        return $this->get(self::INVOICEINFO);
    }

    /**
     * Sets value of 'InvoiceCorrectionInfo' property
     *
     * @param \Diadoc\Api\Proto\Docflow\InvoiceCorrectionDocumentInfo $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionInfo(\Diadoc\Api\Proto\Docflow\InvoiceCorrectionDocumentInfo $value=null)
    {
        return $this->set(self::INVOICECORRECTIONINFO, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionInfo' property
     *
     * @return \Diadoc\Api\Proto\Docflow\InvoiceCorrectionDocumentInfo
     */
    public function getInvoiceCorrectionInfo()
    {
        return $this->get(self::INVOICECORRECTIONINFO);
    }

    /**
     * Sets value of 'PriceListInfo' property
     *
     * @param \Diadoc\Api\Proto\Docflow\PriceListDocumentInfo $value Property value
     *
     * @return null
     */
    public function setPriceListInfo(\Diadoc\Api\Proto\Docflow\PriceListDocumentInfo $value=null)
    {
        return $this->set(self::PRICELISTINFO, $value);
    }

    /**
     * Returns value of 'PriceListInfo' property
     *
     * @return \Diadoc\Api\Proto\Docflow\PriceListDocumentInfo
     */
    public function getPriceListInfo()
    {
        return $this->get(self::PRICELISTINFO);
    }

    /**
     * Sets value of 'ContractInfo' property
     *
     * @param \Diadoc\Api\Proto\Docflow\ContractDocumentInfo $value Property value
     *
     * @return null
     */
    public function setContractInfo(\Diadoc\Api\Proto\Docflow\ContractDocumentInfo $value=null)
    {
        return $this->set(self::CONTRACTINFO, $value);
    }

    /**
     * Returns value of 'ContractInfo' property
     *
     * @return \Diadoc\Api\Proto\Docflow\ContractDocumentInfo
     */
    public function getContractInfo()
    {
        return $this->get(self::CONTRACTINFO);
    }

    /**
     * Sets value of 'SupplementaryAgreementInfo' property
     *
     * @param \Diadoc\Api\Proto\Docflow\SupplementaryAgreementDocumentInfo $value Property value
     *
     * @return null
     */
    public function setSupplementaryAgreementInfo(\Diadoc\Api\Proto\Docflow\SupplementaryAgreementDocumentInfo $value=null)
    {
        return $this->set(self::SUPPLEMENTARYAGREEMENTINFO, $value);
    }

    /**
     * Returns value of 'SupplementaryAgreementInfo' property
     *
     * @return \Diadoc\Api\Proto\Docflow\SupplementaryAgreementDocumentInfo
     */
    public function getSupplementaryAgreementInfo()
    {
        return $this->get(self::SUPPLEMENTARYAGREEMENTINFO);
    }
}
}