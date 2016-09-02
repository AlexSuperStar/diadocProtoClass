<?php
/**
 * Auto generated from Official.proto at 2016-09-02 13:32:04
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * Attorney message
 */
class Attorney extends \ProtobufMessage
{
    /* Field index constants */
    const DATE = 1;
    const NUMBER = 2;
    const ISSUERORGANIZATIONNAME = 3;
    const ISSUERPERSON = 4;
    const ISSUERADDITIONALINFO = 5;
    const RECIPIENTPERSON = 6;
    const RECIPIENTADDITIONALINFO = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DATE => array(
            'name' => 'Date',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NUMBER => array(
            'name' => 'Number',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISSUERORGANIZATIONNAME => array(
            'name' => 'IssuerOrganizationName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISSUERPERSON => array(
            'name' => 'IssuerPerson',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Official'
        ),
        self::ISSUERADDITIONALINFO => array(
            'name' => 'IssuerAdditionalInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RECIPIENTPERSON => array(
            'name' => 'RecipientPerson',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Official'
        ),
        self::RECIPIENTADDITIONALINFO => array(
            'name' => 'RecipientAdditionalInfo',
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
        $this->values[self::DATE] = null;
        $this->values[self::NUMBER] = null;
        $this->values[self::ISSUERORGANIZATIONNAME] = null;
        $this->values[self::ISSUERPERSON] = null;
        $this->values[self::ISSUERADDITIONALINFO] = null;
        $this->values[self::RECIPIENTPERSON] = null;
        $this->values[self::RECIPIENTADDITIONALINFO] = null;
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
     * Sets value of 'Date' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDate($value)
    {
        return $this->set(self::DATE, $value);
    }

    /**
     * Returns value of 'Date' property
     *
     * @return string
     */
    public function getDate()
    {
        $value = $this->get(self::DATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Number' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNumber($value)
    {
        return $this->set(self::NUMBER, $value);
    }

    /**
     * Returns value of 'Number' property
     *
     * @return string
     */
    public function getNumber()
    {
        $value = $this->get(self::NUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'IssuerOrganizationName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIssuerOrganizationName($value)
    {
        return $this->set(self::ISSUERORGANIZATIONNAME, $value);
    }

    /**
     * Returns value of 'IssuerOrganizationName' property
     *
     * @return string
     */
    public function getIssuerOrganizationName()
    {
        $value = $this->get(self::ISSUERORGANIZATIONNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'IssuerPerson' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Official $value Property value
     *
     * @return null
     */
    public function setIssuerPerson(\Diadoc\Api\Proto\Invoicing\Official $value=null)
    {
        return $this->set(self::ISSUERPERSON, $value);
    }

    /**
     * Returns value of 'IssuerPerson' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Official
     */
    public function getIssuerPerson()
    {
        return $this->get(self::ISSUERPERSON);
    }

    /**
     * Sets value of 'IssuerAdditionalInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIssuerAdditionalInfo($value)
    {
        return $this->set(self::ISSUERADDITIONALINFO, $value);
    }

    /**
     * Returns value of 'IssuerAdditionalInfo' property
     *
     * @return string
     */
    public function getIssuerAdditionalInfo()
    {
        $value = $this->get(self::ISSUERADDITIONALINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'RecipientPerson' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Official $value Property value
     *
     * @return null
     */
    public function setRecipientPerson(\Diadoc\Api\Proto\Invoicing\Official $value=null)
    {
        return $this->set(self::RECIPIENTPERSON, $value);
    }

    /**
     * Returns value of 'RecipientPerson' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Official
     */
    public function getRecipientPerson()
    {
        return $this->get(self::RECIPIENTPERSON);
    }

    /**
     * Sets value of 'RecipientAdditionalInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecipientAdditionalInfo($value)
    {
        return $this->set(self::RECIPIENTADDITIONALINFO, $value);
    }

    /**
     * Returns value of 'RecipientAdditionalInfo' property
     *
     * @return string
     */
    public function getRecipientAdditionalInfo()
    {
        $value = $this->get(self::RECIPIENTADDITIONALINFO);
        return $value === null ? (string)$value : $value;
    }
}
}