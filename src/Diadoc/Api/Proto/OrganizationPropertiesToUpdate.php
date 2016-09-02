<?php
/**
 * Auto generated from OrganizationPropertiesToUpdate.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * OrganizationPropertiesToUpdate message
 */
class OrganizationPropertiesToUpdate extends \ProtobufMessage
{
    /* Field index constants */
    const ORGID = 1;
    const OGRN = 2;
    const IFNSCODE = 3;
    const ADDRESS = 4;
    const HEADORGANIZATIONPROPERTIES = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ORGID => array(
            'name' => 'OrgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OGRN => array(
            'name' => 'Ogrn',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\StringValue'
        ),
        self::IFNSCODE => array(
            'name' => 'IfnsCode',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\StringValue'
        ),
        self::ADDRESS => array(
            'name' => 'Address',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Address'
        ),
        self::HEADORGANIZATIONPROPERTIES => array(
            'name' => 'HeadOrganizationProperties',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\HeadOrganizationPropertiesToUpdate'
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
        $this->values[self::ORGID] = null;
        $this->values[self::OGRN] = null;
        $this->values[self::IFNSCODE] = null;
        $this->values[self::ADDRESS] = null;
        $this->values[self::HEADORGANIZATIONPROPERTIES] = null;
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
     * Sets value of 'OrgId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrgId($value)
    {
        return $this->set(self::ORGID, $value);
    }

    /**
     * Returns value of 'OrgId' property
     *
     * @return string
     */
    public function getOrgId()
    {
        $value = $this->get(self::ORGID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Ogrn' property
     *
     * @param \Diadoc\Api\Proto\StringValue $value Property value
     *
     * @return null
     */
    public function setOgrn(\Diadoc\Api\Proto\StringValue $value=null)
    {
        return $this->set(self::OGRN, $value);
    }

    /**
     * Returns value of 'Ogrn' property
     *
     * @return \Diadoc\Api\Proto\StringValue
     */
    public function getOgrn()
    {
        return $this->get(self::OGRN);
    }

    /**
     * Sets value of 'IfnsCode' property
     *
     * @param \Diadoc\Api\Proto\StringValue $value Property value
     *
     * @return null
     */
    public function setIfnsCode(\Diadoc\Api\Proto\StringValue $value=null)
    {
        return $this->set(self::IFNSCODE, $value);
    }

    /**
     * Returns value of 'IfnsCode' property
     *
     * @return \Diadoc\Api\Proto\StringValue
     */
    public function getIfnsCode()
    {
        return $this->get(self::IFNSCODE);
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
     * Sets value of 'HeadOrganizationProperties' property
     *
     * @param \Diadoc\Api\Proto\HeadOrganizationPropertiesToUpdate $value Property value
     *
     * @return null
     */
    public function setHeadOrganizationProperties(\Diadoc\Api\Proto\HeadOrganizationPropertiesToUpdate $value=null)
    {
        return $this->set(self::HEADORGANIZATIONPROPERTIES, $value);
    }

    /**
     * Returns value of 'HeadOrganizationProperties' property
     *
     * @return \Diadoc\Api\Proto\HeadOrganizationPropertiesToUpdate
     */
    public function getHeadOrganizationProperties()
    {
        return $this->get(self::HEADORGANIZATIONPROPERTIES);
    }
}
}