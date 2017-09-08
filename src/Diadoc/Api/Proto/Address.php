<?php
/**
* Auto generated from Address.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * Address message
 */
class Address extends \ProtobufMessage
{
    /* Field index constants */
    const RUSSIANADDRESS = 1;
    const FOREIGNADDRESS = 2;
    const ADDRESSCODE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RUSSIANADDRESS => array(
            'name' => 'RussianAddress',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\RussianAddress'
        ),
        self::FOREIGNADDRESS => array(
            'name' => 'ForeignAddress',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\ForeignAddress'
        ),
        self::ADDRESSCODE => array(
            'name' => 'AddressCode',
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
        $this->values[self::RUSSIANADDRESS] = null;
        $this->values[self::FOREIGNADDRESS] = null;
        $this->values[self::ADDRESSCODE] = null;
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
     * Sets value of 'RussianAddress' property
     *
     * @param \Diadoc\Api\Proto\RussianAddress $value Property value
     *
     * @return null
     */
    public function setRussianAddress(\Diadoc\Api\Proto\RussianAddress $value=null)
    {
        return $this->set(self::RUSSIANADDRESS, $value);
    }

    /**
     * Returns value of 'RussianAddress' property
     *
     * @return \Diadoc\Api\Proto\RussianAddress
     */
    public function getRussianAddress()
    {
        return $this->get(self::RUSSIANADDRESS);
    }

    /**
     * Sets value of 'ForeignAddress' property
     *
     * @param \Diadoc\Api\Proto\ForeignAddress $value Property value
     *
     * @return null
     */
    public function setForeignAddress(\Diadoc\Api\Proto\ForeignAddress $value=null)
    {
        return $this->set(self::FOREIGNADDRESS, $value);
    }

    /**
     * Returns value of 'ForeignAddress' property
     *
     * @return \Diadoc\Api\Proto\ForeignAddress
     */
    public function getForeignAddress()
    {
        return $this->get(self::FOREIGNADDRESS);
    }

    /**
     * Sets value of 'AddressCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddressCode($value)
    {
        return $this->set(self::ADDRESSCODE, $value);
    }

    /**
     * Returns value of 'AddressCode' property
     *
     * @return string
     */
    public function getAddressCode()
    {
        $value = $this->get(self::ADDRESSCODE);
        return $value === null ? (string)$value : $value;
    }
}
}