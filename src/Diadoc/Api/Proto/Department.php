<?php
/**
* Auto generated from Organization.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * Department message
 */
class Department extends \ProtobufMessage
{
    /* Field index constants */
    const DEPARTMENTID = 1;
    const PARENTDEPARTMENTID = 2;
    const NAME = 3;
    const ABBREVIATION = 4;
    const KPP = 5;
    const ADDRESS = 6;
    const ISDISABLED = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DEPARTMENTID => array(
            'name' => 'DepartmentId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PARENTDEPARTMENTID => array(
            'name' => 'ParentDepartmentId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NAME => array(
            'name' => 'Name',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ABBREVIATION => array(
            'name' => 'Abbreviation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::KPP => array(
            'name' => 'Kpp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDRESS => array(
            'name' => 'Address',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Address'
        ),
        self::ISDISABLED => array(
            'default' => false,
            'name' => 'IsDisabled',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::DEPARTMENTID] = null;
        $this->values[self::PARENTDEPARTMENTID] = null;
        $this->values[self::NAME] = null;
        $this->values[self::ABBREVIATION] = null;
        $this->values[self::KPP] = null;
        $this->values[self::ADDRESS] = null;
        $this->values[self::ISDISABLED] = self::$fields[self::ISDISABLED]['default'];
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
     * Sets value of 'ParentDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParentDepartmentId($value)
    {
        return $this->set(self::PARENTDEPARTMENTID, $value);
    }

    /**
     * Returns value of 'ParentDepartmentId' property
     *
     * @return string
     */
    public function getParentDepartmentId()
    {
        $value = $this->get(self::PARENTDEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'Name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Abbreviation' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAbbreviation($value)
    {
        return $this->set(self::ABBREVIATION, $value);
    }

    /**
     * Returns value of 'Abbreviation' property
     *
     * @return string
     */
    public function getAbbreviation()
    {
        $value = $this->get(self::ABBREVIATION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Kpp' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKpp($value)
    {
        return $this->set(self::KPP, $value);
    }

    /**
     * Returns value of 'Kpp' property
     *
     * @return string
     */
    public function getKpp()
    {
        $value = $this->get(self::KPP);
        return $value === null ? (string)$value : $value;
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

    /**
     * Sets value of 'IsDisabled' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsDisabled($value)
    {
        return $this->set(self::ISDISABLED, $value);
    }

    /**
     * Returns value of 'IsDisabled' property
     *
     * @return boolean
     */
    public function getIsDisabled()
    {
        $value = $this->get(self::ISDISABLED);
        return $value === null ? (boolean)$value : $value;
    }
}
}