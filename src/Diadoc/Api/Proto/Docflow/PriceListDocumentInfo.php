<?php
/**
 * Auto generated from DocumentInfo.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * PriceListDocumentInfo message
 */
class PriceListDocumentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const PRICELISTEFFECTIVEDATE = 1;
    const CONTRACTDOCUMENTDATEANDNUMBER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRICELISTEFFECTIVEDATE => array(
            'name' => 'PriceListEffectiveDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTRACTDOCUMENTDATEANDNUMBER => array(
            'name' => 'ContractDocumentDateAndNumber',
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
        $this->values[self::PRICELISTEFFECTIVEDATE] = null;
        $this->values[self::CONTRACTDOCUMENTDATEANDNUMBER] = null;
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
     * Sets value of 'PriceListEffectiveDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPriceListEffectiveDate($value)
    {
        return $this->set(self::PRICELISTEFFECTIVEDATE, $value);
    }

    /**
     * Returns value of 'PriceListEffectiveDate' property
     *
     * @return string
     */
    public function getPriceListEffectiveDate()
    {
        $value = $this->get(self::PRICELISTEFFECTIVEDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ContractDocumentDateAndNumber' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setContractDocumentDateAndNumber(\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value=null)
    {
        return $this->set(self::CONTRACTDOCUMENTDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'ContractDocumentDateAndNumber' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getContractDocumentDateAndNumber()
    {
        return $this->get(self::CONTRACTDOCUMENTDATEANDNUMBER);
    }
}
}