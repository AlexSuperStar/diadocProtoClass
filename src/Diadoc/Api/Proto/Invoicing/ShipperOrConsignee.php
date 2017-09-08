<?php
/**
* Auto generated from InvoiceInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * ShipperOrConsignee message
 */
class ShipperOrConsignee extends \ProtobufMessage
{
    /* Field index constants */
    const SAMEASSELLERORBUYER = 1;
    const ORGINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SAMEASSELLERORBUYER => array(
            'name' => 'SameAsSellerOrBuyer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::SAMEASSELLERORBUYER] = null;
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
     * Sets value of 'SameAsSellerOrBuyer' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSameAsSellerOrBuyer($value)
    {
        return $this->set(self::SAMEASSELLERORBUYER, $value);
    }

    /**
     * Returns value of 'SameAsSellerOrBuyer' property
     *
     * @return boolean
     */
    public function getSameAsSellerOrBuyer()
    {
        $value = $this->get(self::SAMEASSELLERORBUYER);
        return $value === null ? (boolean)$value : $value;
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