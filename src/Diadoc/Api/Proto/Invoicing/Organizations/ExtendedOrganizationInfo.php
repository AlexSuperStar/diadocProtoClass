<?php
/**
* Auto generated from ExtendedOrganizationInfo.proto
*
 * Diadoc.Api.Proto.Invoicing.Organizations package
 */

namespace Diadoc\Api\Proto\Invoicing\Organizations {
/**
 * ExtendedOrganizationInfo message
 */
class ExtendedOrganizationInfo extends \ProtobufMessage
{
    /* Field index constants */
    const BOXID = 1;
    const ORGNAME = 2;
    const INN = 3;
    const KPP = 4;
    const ADDRESS = 5;
    const FNSPARTICIPANTID = 6;
    const ORGTYPE = 7;
    const OKOPF = 8;
    const OKPO = 9;
    const OKDP = 10;
    const PHONE = 11;
    const EMAIL = 12;
    const CORRESPONDENTACCOUNT = 13;
    const BANKACCOUNTNUMBER = 14;
    const BANKNAME = 15;
    const BANKID = 16;
    const DEPARTMENT = 17;
    const ORGANIZATIONADDITIONALINFO = 18;
    const ORGANIZATIONORPERSONINFO = 19;
    const INDIVIDUALENTITYREGISTRATIONCERTIFICATE = 20;
    const COUNTRY = 21;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOXID => array(
            'name' => 'BoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORGNAME => array(
            'name' => 'OrgName',
            'required' => false,
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
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Address'
        ),
        self::FNSPARTICIPANTID => array(
            'name' => 'FnsParticipantId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORGTYPE => array(
            'name' => 'OrgType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::EMAIL => array(
            'name' => 'Email',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CORRESPONDENTACCOUNT => array(
            'name' => 'CorrespondentAccount',
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
        self::ORGANIZATIONADDITIONALINFO => array(
            'name' => 'OrganizationAdditionalInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORGANIZATIONORPERSONINFO => array(
            'name' => 'OrganizationOrPersonInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INDIVIDUALENTITYREGISTRATIONCERTIFICATE => array(
            'name' => 'IndividualEntityRegistrationCertificate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COUNTRY => array(
            'name' => 'Country',
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
        $this->values[self::BOXID] = null;
        $this->values[self::ORGNAME] = null;
        $this->values[self::INN] = null;
        $this->values[self::KPP] = null;
        $this->values[self::ADDRESS] = null;
        $this->values[self::FNSPARTICIPANTID] = null;
        $this->values[self::ORGTYPE] = null;
        $this->values[self::OKOPF] = null;
        $this->values[self::OKPO] = null;
        $this->values[self::OKDP] = null;
        $this->values[self::PHONE] = null;
        $this->values[self::EMAIL] = null;
        $this->values[self::CORRESPONDENTACCOUNT] = null;
        $this->values[self::BANKACCOUNTNUMBER] = null;
        $this->values[self::BANKNAME] = null;
        $this->values[self::BANKID] = null;
        $this->values[self::DEPARTMENT] = null;
        $this->values[self::ORGANIZATIONADDITIONALINFO] = null;
        $this->values[self::ORGANIZATIONORPERSONINFO] = null;
        $this->values[self::INDIVIDUALENTITYREGISTRATIONCERTIFICATE] = null;
        $this->values[self::COUNTRY] = null;
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
     * Sets value of 'OrgName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrgName($value)
    {
        return $this->set(self::ORGNAME, $value);
    }

    /**
     * Returns value of 'OrgName' property
     *
     * @return string
     */
    public function getOrgName()
    {
        $value = $this->get(self::ORGNAME);
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

    /**
     * Sets value of 'OrgType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOrgType($value)
    {
        return $this->set(self::ORGTYPE, $value);
    }

    /**
     * Returns value of 'OrgType' property
     *
     * @return integer
     */
    public function getOrgType()
    {
        $value = $this->get(self::ORGTYPE);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'Email' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEmail($value)
    {
        return $this->set(self::EMAIL, $value);
    }

    /**
     * Returns value of 'Email' property
     *
     * @return string
     */
    public function getEmail()
    {
        $value = $this->get(self::EMAIL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'CorrespondentAccount' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCorrespondentAccount($value)
    {
        return $this->set(self::CORRESPONDENTACCOUNT, $value);
    }

    /**
     * Returns value of 'CorrespondentAccount' property
     *
     * @return string
     */
    public function getCorrespondentAccount()
    {
        $value = $this->get(self::CORRESPONDENTACCOUNT);
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
     * Sets value of 'OrganizationAdditionalInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrganizationAdditionalInfo($value)
    {
        return $this->set(self::ORGANIZATIONADDITIONALINFO, $value);
    }

    /**
     * Returns value of 'OrganizationAdditionalInfo' property
     *
     * @return string
     */
    public function getOrganizationAdditionalInfo()
    {
        $value = $this->get(self::ORGANIZATIONADDITIONALINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'OrganizationOrPersonInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrganizationOrPersonInfo($value)
    {
        return $this->set(self::ORGANIZATIONORPERSONINFO, $value);
    }

    /**
     * Returns value of 'OrganizationOrPersonInfo' property
     *
     * @return string
     */
    public function getOrganizationOrPersonInfo()
    {
        $value = $this->get(self::ORGANIZATIONORPERSONINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'IndividualEntityRegistrationCertificate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndividualEntityRegistrationCertificate($value)
    {
        return $this->set(self::INDIVIDUALENTITYREGISTRATIONCERTIFICATE, $value);
    }

    /**
     * Returns value of 'IndividualEntityRegistrationCertificate' property
     *
     * @return string
     */
    public function getIndividualEntityRegistrationCertificate()
    {
        $value = $this->get(self::INDIVIDUALENTITYREGISTRATIONCERTIFICATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Country' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCountry($value)
    {
        return $this->set(self::COUNTRY, $value);
    }

    /**
     * Returns value of 'Country' property
     *
     * @return string
     */
    public function getCountry()
    {
        $value = $this->get(self::COUNTRY);
        return $value === null ? (string)$value : $value;
    }
}
}