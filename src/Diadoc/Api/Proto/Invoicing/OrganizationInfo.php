<?php
/**
* Auto generated from OrganizationInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * OrganizationInfo message
 */
class OrganizationInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const INN = 2;
    const KPP = 3;
    const ADDRESS = 4;
    const ISSOLEPROPRIETOR = 5;
    const OKOPF = 6;
    const OKPO = 7;
    const OKDP = 8;
    const PHONE = 9;
    const FAX = 10;
    const BANKACCOUNTNUMBER = 11;
    const BANKNAME = 12;
    const BANKID = 13;
    const DEPARTMENT = 14;
    const FNSPARTICIPANTID = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'Name',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INN => array(
            'name' => 'Inn',
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
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Address'
        ),
        self::ISSOLEPROPRIETOR => array(
            'default' => false,
            'name' => 'IsSoleProprietor',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::OKOPF => array(
            'name' => 'Okopf',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OKPO => array(
            'name' => 'Okpo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OKDP => array(
            'name' => 'Okdp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PHONE => array(
            'name' => 'Phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FAX => array(
            'name' => 'Fax',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BANKACCOUNTNUMBER => array(
            'name' => 'BankAccountNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BANKNAME => array(
            'name' => 'BankName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BANKID => array(
            'name' => 'BankId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEPARTMENT => array(
            'name' => 'Department',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FNSPARTICIPANTID => array(
            'name' => 'FnsParticipantId',
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
        $this->values[self::NAME] = null;
        $this->values[self::INN] = null;
        $this->values[self::KPP] = null;
        $this->values[self::ADDRESS] = null;
        $this->values[self::ISSOLEPROPRIETOR] = self::$fields[self::ISSOLEPROPRIETOR]['default'];
        $this->values[self::OKOPF] = null;
        $this->values[self::OKPO] = null;
        $this->values[self::OKDP] = null;
        $this->values[self::PHONE] = null;
        $this->values[self::FAX] = null;
        $this->values[self::BANKACCOUNTNUMBER] = null;
        $this->values[self::BANKNAME] = null;
        $this->values[self::BANKID] = null;
        $this->values[self::DEPARTMENT] = null;
        $this->values[self::FNSPARTICIPANTID] = null;
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
     * Sets value of 'Inn' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInn($value)
    {
        return $this->set(self::INN, $value);
    }

    /**
     * Returns value of 'Inn' property
     *
     * @return string
     */
    public function getInn()
    {
        $value = $this->get(self::INN);
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
     * Sets value of 'IsSoleProprietor' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsSoleProprietor($value)
    {
        return $this->set(self::ISSOLEPROPRIETOR, $value);
    }

    /**
     * Returns value of 'IsSoleProprietor' property
     *
     * @return boolean
     */
    public function getIsSoleProprietor()
    {
        $value = $this->get(self::ISSOLEPROPRIETOR);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'Okopf' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOkopf($value)
    {
        return $this->set(self::OKOPF, $value);
    }

    /**
     * Returns value of 'Okopf' property
     *
     * @return string
     */
    public function getOkopf()
    {
        $value = $this->get(self::OKOPF);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Okpo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOkpo($value)
    {
        return $this->set(self::OKPO, $value);
    }

    /**
     * Returns value of 'Okpo' property
     *
     * @return string
     */
    public function getOkpo()
    {
        $value = $this->get(self::OKPO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Okdp' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOkdp($value)
    {
        return $this->set(self::OKDP, $value);
    }

    /**
     * Returns value of 'Okdp' property
     *
     * @return string
     */
    public function getOkdp()
    {
        $value = $this->get(self::OKDP);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhone($value)
    {
        return $this->set(self::PHONE, $value);
    }

    /**
     * Returns value of 'Phone' property
     *
     * @return string
     */
    public function getPhone()
    {
        $value = $this->get(self::PHONE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Fax' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFax($value)
    {
        return $this->set(self::FAX, $value);
    }

    /**
     * Returns value of 'Fax' property
     *
     * @return string
     */
    public function getFax()
    {
        $value = $this->get(self::FAX);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'BankAccountNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBankAccountNumber($value)
    {
        return $this->set(self::BANKACCOUNTNUMBER, $value);
    }

    /**
     * Returns value of 'BankAccountNumber' property
     *
     * @return string
     */
    public function getBankAccountNumber()
    {
        $value = $this->get(self::BANKACCOUNTNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'BankName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBankName($value)
    {
        return $this->set(self::BANKNAME, $value);
    }

    /**
     * Returns value of 'BankName' property
     *
     * @return string
     */
    public function getBankName()
    {
        $value = $this->get(self::BANKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'BankId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBankId($value)
    {
        return $this->set(self::BANKID, $value);
    }

    /**
     * Returns value of 'BankId' property
     *
     * @return string
     */
    public function getBankId()
    {
        $value = $this->get(self::BANKID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Department' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDepartment($value)
    {
        return $this->set(self::DEPARTMENT, $value);
    }

    /**
     * Returns value of 'Department' property
     *
     * @return string
     */
    public function getDepartment()
    {
        $value = $this->get(self::DEPARTMENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'FnsParticipantId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFnsParticipantId($value)
    {
        return $this->set(self::FNSPARTICIPANTID, $value);
    }

    /**
     * Returns value of 'FnsParticipantId' property
     *
     * @return string
     */
    public function getFnsParticipantId()
    {
        $value = $this->get(self::FNSPARTICIPANTID);
        return $value === null ? (string)$value : $value;
    }
}
}