<?php
/**
 * Auto generated from Organization.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * Organization message
 */
class Organization extends \ProtobufMessage
{
    /* Field index constants */
    const ORGID = 1;
    const INN = 2;
    const KPP = 3;
    const FULLNAME = 4;
    const SHORTNAME = 5;
    const BOXES = 7;
    const OGRN = 8;
    const FNSPARTICIPANTID = 9;
    const ADDRESS = 10;
    const FNSREGISTRATIONDATE = 11;
    const DEPARTMENTS = 12;
    const IFNSCODE = 13;
    const ISPILOT = 14;
    const ISACTIVE = 15;
    const ISTEST = 16;
    const ISBRANCH = 17;
    const ISROAMING = 18;
    const ISEMPLOYEE = 19;
    const INVITATIONCOUNT = 20;
    const SEARCHCOUNT = 21;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ORGID => array(
            'name' => 'OrgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INN => array(
            'name' => 'Inn',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::KPP => array(
            'name' => 'Kpp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FULLNAME => array(
            'name' => 'FullName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SHORTNAME => array(
            'name' => 'ShortName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BOXES => array(
            'name' => 'Boxes',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Box'
        ),
        self::OGRN => array(
            'name' => 'Ogrn',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FNSPARTICIPANTID => array(
            'name' => 'FnsParticipantId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDRESS => array(
            'name' => 'Address',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Address'
        ),
        self::FNSREGISTRATIONDATE => array(
            'name' => 'FnsRegistrationDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEPARTMENTS => array(
            'name' => 'Departments',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Department'
        ),
        self::IFNSCODE => array(
            'name' => 'IfnsCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISPILOT => array(
            'name' => 'IsPilot',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISACTIVE => array(
            'name' => 'IsActive',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISTEST => array(
            'name' => 'IsTest',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISBRANCH => array(
            'name' => 'IsBranch',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISROAMING => array(
            'name' => 'IsRoaming',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISEMPLOYEE => array(
            'name' => 'IsEmployee',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::INVITATIONCOUNT => array(
            'name' => 'InvitationCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEARCHCOUNT => array(
            'name' => 'SearchCount',
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
        $this->values[self::ORGID] = null;
        $this->values[self::INN] = null;
        $this->values[self::KPP] = null;
        $this->values[self::FULLNAME] = null;
        $this->values[self::SHORTNAME] = null;
        $this->values[self::BOXES] = array();
        $this->values[self::OGRN] = null;
        $this->values[self::FNSPARTICIPANTID] = null;
        $this->values[self::ADDRESS] = null;
        $this->values[self::FNSREGISTRATIONDATE] = null;
        $this->values[self::DEPARTMENTS] = array();
        $this->values[self::IFNSCODE] = null;
        $this->values[self::ISPILOT] = null;
        $this->values[self::ISACTIVE] = null;
        $this->values[self::ISTEST] = null;
        $this->values[self::ISBRANCH] = null;
        $this->values[self::ISROAMING] = null;
        $this->values[self::ISEMPLOYEE] = null;
        $this->values[self::INVITATIONCOUNT] = null;
        $this->values[self::SEARCHCOUNT] = null;
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
     * Sets value of 'FullName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFullName($value)
    {
        return $this->set(self::FULLNAME, $value);
    }

    /**
     * Returns value of 'FullName' property
     *
     * @return string
     */
    public function getFullName()
    {
        $value = $this->get(self::FULLNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ShortName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShortName($value)
    {
        return $this->set(self::SHORTNAME, $value);
    }

    /**
     * Returns value of 'ShortName' property
     *
     * @return string
     */
    public function getShortName()
    {
        $value = $this->get(self::SHORTNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'Boxes' list
     *
     * @param \Diadoc\Api\Proto\Box $value Value to append
     *
     * @return null
     */
    public function appendBoxes(\Diadoc\Api\Proto\Box $value)
    {
        return $this->append(self::BOXES, $value);
    }

    /**
     * Clears 'Boxes' list
     *
     * @return null
     */
    public function clearBoxes()
    {
        return $this->clear(self::BOXES);
    }

    /**
     * Returns 'Boxes' list
     *
     * @return \Diadoc\Api\Proto\Box[]
     */
    public function getBoxes()
    {
        return $this->get(self::BOXES);
    }

    /**
     * Returns 'Boxes' iterator
     *
     * @return \ArrayIterator
     */
    public function getBoxesIterator()
    {
        return new \ArrayIterator($this->get(self::BOXES));
    }

    /**
     * Returns element from 'Boxes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Box
     */
    public function getBoxesAt($offset)
    {
        return $this->get(self::BOXES, $offset);
    }

    /**
     * Returns count of 'Boxes' list
     *
     * @return int
     */
    public function getBoxesCount()
    {
        return $this->count(self::BOXES);
    }

    /**
     * Sets value of 'Ogrn' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOgrn($value)
    {
        return $this->set(self::OGRN, $value);
    }

    /**
     * Returns value of 'Ogrn' property
     *
     * @return string
     */
    public function getOgrn()
    {
        $value = $this->get(self::OGRN);
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
     * Sets value of 'FnsRegistrationDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFnsRegistrationDate($value)
    {
        return $this->set(self::FNSREGISTRATIONDATE, $value);
    }

    /**
     * Returns value of 'FnsRegistrationDate' property
     *
     * @return string
     */
    public function getFnsRegistrationDate()
    {
        $value = $this->get(self::FNSREGISTRATIONDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'Departments' list
     *
     * @param \Diadoc\Api\Proto\Department $value Value to append
     *
     * @return null
     */
    public function appendDepartments(\Diadoc\Api\Proto\Department $value)
    {
        return $this->append(self::DEPARTMENTS, $value);
    }

    /**
     * Clears 'Departments' list
     *
     * @return null
     */
    public function clearDepartments()
    {
        return $this->clear(self::DEPARTMENTS);
    }

    /**
     * Returns 'Departments' list
     *
     * @return \Diadoc\Api\Proto\Department[]
     */
    public function getDepartments()
    {
        return $this->get(self::DEPARTMENTS);
    }

    /**
     * Returns 'Departments' iterator
     *
     * @return \ArrayIterator
     */
    public function getDepartmentsIterator()
    {
        return new \ArrayIterator($this->get(self::DEPARTMENTS));
    }

    /**
     * Returns element from 'Departments' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Department
     */
    public function getDepartmentsAt($offset)
    {
        return $this->get(self::DEPARTMENTS, $offset);
    }

    /**
     * Returns count of 'Departments' list
     *
     * @return int
     */
    public function getDepartmentsCount()
    {
        return $this->count(self::DEPARTMENTS);
    }

    /**
     * Sets value of 'IfnsCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIfnsCode($value)
    {
        return $this->set(self::IFNSCODE, $value);
    }

    /**
     * Returns value of 'IfnsCode' property
     *
     * @return string
     */
    public function getIfnsCode()
    {
        $value = $this->get(self::IFNSCODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'IsPilot' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsPilot($value)
    {
        return $this->set(self::ISPILOT, $value);
    }

    /**
     * Returns value of 'IsPilot' property
     *
     * @return boolean
     */
    public function getIsPilot()
    {
        $value = $this->get(self::ISPILOT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsActive' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsActive($value)
    {
        return $this->set(self::ISACTIVE, $value);
    }

    /**
     * Returns value of 'IsActive' property
     *
     * @return boolean
     */
    public function getIsActive()
    {
        $value = $this->get(self::ISACTIVE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsTest' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsTest($value)
    {
        return $this->set(self::ISTEST, $value);
    }

    /**
     * Returns value of 'IsTest' property
     *
     * @return boolean
     */
    public function getIsTest()
    {
        $value = $this->get(self::ISTEST);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsBranch' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsBranch($value)
    {
        return $this->set(self::ISBRANCH, $value);
    }

    /**
     * Returns value of 'IsBranch' property
     *
     * @return boolean
     */
    public function getIsBranch()
    {
        $value = $this->get(self::ISBRANCH);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsRoaming' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsRoaming($value)
    {
        return $this->set(self::ISROAMING, $value);
    }

    /**
     * Returns value of 'IsRoaming' property
     *
     * @return boolean
     */
    public function getIsRoaming()
    {
        $value = $this->get(self::ISROAMING);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsEmployee' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsEmployee($value)
    {
        return $this->set(self::ISEMPLOYEE, $value);
    }

    /**
     * Returns value of 'IsEmployee' property
     *
     * @return boolean
     */
    public function getIsEmployee()
    {
        $value = $this->get(self::ISEMPLOYEE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'InvitationCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInvitationCount($value)
    {
        return $this->set(self::INVITATIONCOUNT, $value);
    }

    /**
     * Returns value of 'InvitationCount' property
     *
     * @return integer
     */
    public function getInvitationCount()
    {
        $value = $this->get(self::INVITATIONCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'SearchCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSearchCount($value)
    {
        return $this->set(self::SEARCHCOUNT, $value);
    }

    /**
     * Returns value of 'SearchCount' property
     *
     * @return integer
     */
    public function getSearchCount()
    {
        $value = $this->get(self::SEARCHCOUNT);
        return $value === null ? (integer)$value : $value;
    }
}
}