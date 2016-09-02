<?php
/**
 * Auto generated from Address.proto at 2016-09-02 13:32:04
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
}
}