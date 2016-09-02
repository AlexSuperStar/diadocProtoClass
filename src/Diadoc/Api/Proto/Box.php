<?php
/**
 * Auto generated from Organization.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * Box message
 */
class Box extends \ProtobufMessage
{
    /* Field index constants */
    const BOXID = 1;
    const TITLE = 2;
    const ORGANIZATION = 3;
    const INVOICEFORMATVERSION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOXID => array(
            'name' => 'BoxId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TITLE => array(
            'name' => 'Title',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORGANIZATION => array(
            'name' => 'Organization',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Organization'
        ),
        self::INVOICEFORMATVERSION => array(
            'default' => \Diadoc\Api\Proto\OrganizationInvoiceFormatVersion::v5_02,
            'name' => 'InvoiceFormatVersion',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::TITLE] = null;
        $this->values[self::ORGANIZATION] = null;
        $this->values[self::INVOICEFORMATVERSION] = self::$fields[self::INVOICEFORMATVERSION]['default'];
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
     * Sets value of 'Title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'Title' property
     *
     * @return string
     */
    public function getTitle()
    {
        $value = $this->get(self::TITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Organization' property
     *
     * @param \Diadoc\Api\Proto\Organization $value Property value
     *
     * @return null
     */
    public function setOrganization(\Diadoc\Api\Proto\Organization $value=null)
    {
        return $this->set(self::ORGANIZATION, $value);
    }

    /**
     * Returns value of 'Organization' property
     *
     * @return \Diadoc\Api\Proto\Organization
     */
    public function getOrganization()
    {
        return $this->get(self::ORGANIZATION);
    }

    /**
     * Sets value of 'InvoiceFormatVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInvoiceFormatVersion($value)
    {
        return $this->set(self::INVOICEFORMATVERSION, $value);
    }

    /**
     * Returns value of 'InvoiceFormatVersion' property
     *
     * @return integer
     */
    public function getInvoiceFormatVersion()
    {
        $value = $this->get(self::INVOICEFORMATVERSION);
        return $value === null ? (integer)$value : $value;
    }
}
}