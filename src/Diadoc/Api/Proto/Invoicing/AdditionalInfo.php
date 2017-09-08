<?php
/**
* Auto generated from InvoiceInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * AdditionalInfo message
 */
class AdditionalInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const VALUE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'Id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VALUE => array(
            'name' => 'Value',
            'required' => true,
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
        $this->values[self::ID] = null;
        $this->values[self::VALUE] = null;
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
     * Sets value of 'Id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'Id' property
     *
     * @return string
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'Value' property
     *
     * @return string
     */
    public function getValue()
    {
        $value = $this->get(self::VALUE);
        return $value === null ? (string)$value : $value;
    }
}
}