<?php
/**
* Auto generated from DocumentInfo.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * UniversalCorrectionDocumentInfo message
 */
class UniversalCorrectionDocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TOTALINC = 1;
    const TOTALDEC = 2;
    const VATINC = 3;
    const VATDEC = 4;
    const CURRENCYCODE = 5;
    const GROUNDS = 6;
    const FUNCTION = 7;
    const ORIGINALDOCUMENTDATEANDNUMBER = 8;
    const ORIGINALDOCUMENTREVISIONDATEANDNUMBER = 9;
    const ORIGINALDOCUMENTCORRECTIONDATEANDNUMBER = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOTALINC => array(
            'name' => 'TotalInc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALDEC => array(
            'name' => 'TotalDec',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VATINC => array(
            'name' => 'VatInc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VATDEC => array(
            'name' => 'VatDec',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CURRENCYCODE => array(
            'name' => 'CurrencyCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUNDS => array(
            'name' => 'Grounds',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FUNCTION => array(
            'name' => 'Function',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ORIGINALDOCUMENTDATEANDNUMBER => array(
            'name' => 'OriginalDocumentDateAndNumber',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber'
        ),
        self::ORIGINALDOCUMENTREVISIONDATEANDNUMBER => array(
            'name' => 'OriginalDocumentRevisionDateAndNumber',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber'
        ),
        self::ORIGINALDOCUMENTCORRECTIONDATEANDNUMBER => array(
            'name' => 'OriginalDocumentCorrectionDateAndNumber',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber'
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
        $this->values[self::TOTALINC] = null;
        $this->values[self::TOTALDEC] = null;
        $this->values[self::VATINC] = null;
        $this->values[self::VATDEC] = null;
        $this->values[self::CURRENCYCODE] = null;
        $this->values[self::GROUNDS] = null;
        $this->values[self::FUNCTION] = null;
        $this->values[self::ORIGINALDOCUMENTDATEANDNUMBER] = null;
        $this->values[self::ORIGINALDOCUMENTREVISIONDATEANDNUMBER] = null;
        $this->values[self::ORIGINALDOCUMENTCORRECTIONDATEANDNUMBER] = null;
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
     * Sets value of 'TotalInc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalInc($value)
    {
        return $this->set(self::TOTALINC, $value);
    }

    /**
     * Returns value of 'TotalInc' property
     *
     * @return string
     */
    public function getTotalInc()
    {
        $value = $this->get(self::TOTALINC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TotalDec' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalDec($value)
    {
        return $this->set(self::TOTALDEC, $value);
    }

    /**
     * Returns value of 'TotalDec' property
     *
     * @return string
     */
    public function getTotalDec()
    {
        $value = $this->get(self::TOTALDEC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'VatInc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVatInc($value)
    {
        return $this->set(self::VATINC, $value);
    }

    /**
     * Returns value of 'VatInc' property
     *
     * @return string
     */
    public function getVatInc()
    {
        $value = $this->get(self::VATINC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'VatDec' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVatDec($value)
    {
        return $this->set(self::VATDEC, $value);
    }

    /**
     * Returns value of 'VatDec' property
     *
     * @return string
     */
    public function getVatDec()
    {
        $value = $this->get(self::VATDEC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'CurrencyCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrencyCode($value)
    {
        return $this->set(self::CURRENCYCODE, $value);
    }

    /**
     * Returns value of 'CurrencyCode' property
     *
     * @return integer
     */
    public function getCurrencyCode()
    {
        $value = $this->get(self::CURRENCYCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'Grounds' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrounds($value)
    {
        return $this->set(self::GROUNDS, $value);
    }

    /**
     * Returns value of 'Grounds' property
     *
     * @return string
     */
    public function getGrounds()
    {
        $value = $this->get(self::GROUNDS);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'OriginalDocumentDateAndNumber' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setOriginalDocumentDateAndNumber(\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value=null)
    {
        return $this->set(self::ORIGINALDOCUMENTDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalDocumentDateAndNumber' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalDocumentDateAndNumber()
    {
        return $this->get(self::ORIGINALDOCUMENTDATEANDNUMBER);
    }

    /**
     * Sets value of 'OriginalDocumentRevisionDateAndNumber' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setOriginalDocumentRevisionDateAndNumber(\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value=null)
    {
        return $this->set(self::ORIGINALDOCUMENTREVISIONDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalDocumentRevisionDateAndNumber' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalDocumentRevisionDateAndNumber()
    {
        return $this->get(self::ORIGINALDOCUMENTREVISIONDATEANDNUMBER);
    }

    /**
     * Sets value of 'OriginalDocumentCorrectionDateAndNumber' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setOriginalDocumentCorrectionDateAndNumber(\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value=null)
    {
        return $this->set(self::ORIGINALDOCUMENTCORRECTIONDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalDocumentCorrectionDateAndNumber' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalDocumentCorrectionDateAndNumber()
    {
        return $this->get(self::ORIGINALDOCUMENTCORRECTIONDATEANDNUMBER);
    }
}
}