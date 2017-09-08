<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * Shipper message
 */
class Shipper extends \ProtobufMessage
{
    /* Field index constants */
    const SAMEASSELLER = 1;
    const ORGINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SAMEASSELLER => array(
            'name' => 'SameAsSeller',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ORGINFO => array(
            'name' => 'OrgInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo'
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
        $this->values[self::SAMEASSELLER] = null;
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
     * Sets value of 'SameAsSeller' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSameAsSeller($value)
    {
        return $this->set(self::SAMEASSELLER, $value);
    }

    /**
     * Returns value of 'SameAsSeller' property
     *
     * @return boolean
     */
    public function getSameAsSeller()
    {
        $value = $this->get(self::SAMEASSELLER);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'OrgInfo' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value Property value
     *
     * @return null
     */
    public function setOrgInfo(\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value=null)
    {
        return $this->set(self::ORGINFO, $value);
    }

    /**
     * Returns value of 'OrgInfo' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo
     */
    public function getOrgInfo()
    {
        return $this->get(self::ORGINFO);
    }
}
}