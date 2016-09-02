<?php
/**
 * Auto generated from OrganizationPropertiesToUpdate.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * HeadOrganizationPropertiesToUpdate message
 */
class HeadOrganizationPropertiesToUpdate extends \ProtobufMessage
{
    /* Field index constants */
    const KPP = 1;
    const FULLNAME = 2;
    const ADDRESS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KPP => array(
            'name' => 'Kpp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\StringValue'
        ),
        self::FULLNAME => array(
            'name' => 'FullName',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\StringValue'
        ),
        self::ADDRESS => array(
            'name' => 'Address',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Address'
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
        $this->values[self::KPP] = null;
        $this->values[self::FULLNAME] = null;
        $this->values[self::ADDRESS] = null;
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
     * Sets value of 'Kpp' property
     *
     * @param \Diadoc\Api\Proto\StringValue $value Property value
     *
     * @return null
     */
    public function setKpp(\Diadoc\Api\Proto\StringValue $value=null)
    {
        return $this->set(self::KPP, $value);
    }

    /**
     * Returns value of 'Kpp' property
     *
     * @return \Diadoc\Api\Proto\StringValue
     */
    public function getKpp()
    {
        return $this->get(self::KPP);
    }

    /**
     * Sets value of 'FullName' property
     *
     * @param \Diadoc\Api\Proto\StringValue $value Property value
     *
     * @return null
     */
    public function setFullName(\Diadoc\Api\Proto\StringValue $value=null)
    {
        return $this->set(self::FULLNAME, $value);
    }

    /**
     * Returns value of 'FullName' property
     *
     * @return \Diadoc\Api\Proto\StringValue
     */
    public function getFullName()
    {
        return $this->get(self::FULLNAME);
    }

    /**
     * Sets value of 'Address' property
     *
     * @param \Diadoc\Api\Proto\Address $value Property value
     *
     * @return null
     */
    public function setAddress(\Diadoc\Api\Proto\Address $value=null)
    {
        return $this->set(self::ADDRESS, $value);
    }

    /**
     * Returns value of 'Address' property
     *
     * @return \Diadoc\Api\Proto\Address
     */
    public function getAddress()
    {
        return $this->get(self::ADDRESS);
    }
}
}