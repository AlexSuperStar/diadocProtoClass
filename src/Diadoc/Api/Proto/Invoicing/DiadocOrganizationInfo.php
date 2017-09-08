<?php
/**
* Auto generated from OrganizationInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * DiadocOrganizationInfo message
 */
class DiadocOrganizationInfo extends \ProtobufMessage
{
    /* Field index constants */
    const BOXID = 1;
    const ORGINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOXID => array(
            'name' => 'BoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORGINFO => array(
            'name' => 'OrgInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\OrganizationInfo'
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
        $this->values[self::BOXID] = null;
        $this->values[self::ORGINFO] = null;
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
     * Sets value of 'BoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBoxId($value)
    {
        return $this->set(self::BOXID, $value);
    }

    /**
     * Returns value of 'BoxId' property
     *
     * @return string
     */
    public function getBoxId()
    {
        $value = $this->get(self::BOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'OrgInfo' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\OrganizationInfo $value Property value
     *
     * @return null
     */
    public function setOrgInfo(\Diadoc\Api\Proto\Invoicing\OrganizationInfo $value=null)
    {
        return $this->set(self::ORGINFO, $value);
    }

    /**
     * Returns value of 'OrgInfo' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\OrganizationInfo
     */
    public function getOrgInfo()
    {
        return $this->get(self::ORGINFO);
    }
}
}