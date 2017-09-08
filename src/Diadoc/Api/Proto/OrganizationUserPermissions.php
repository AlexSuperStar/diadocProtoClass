<?php
/**
* Auto generated from OrganizationUserPermissions.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * OrganizationUserPermissions message
 */
class OrganizationUserPermissions extends \ProtobufMessage
{
    /* Field index constants */
    const USERDEPARTMENTID = 1;
    const ISADMINISTRATOR = 2;
    const DOCUMENTACCESSLEVEL = 3;
    const CANSIGNDOCUMENTS = 4;
    const CANADDRESOLUTIONS = 7;
    const CANREQUESTRESOLUTIONS = 8;
    const SELECTEDDEPARTMENTIDS = 9;
    const JOBTITLE = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERDEPARTMENTID => array(
            'name' => 'UserDepartmentId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISADMINISTRATOR => array(
            'name' => 'IsAdministrator',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DOCUMENTACCESSLEVEL => array(
            'default' => \Diadoc\Api\Proto\DocumentAccessLevel::UnknownDocumentAccessLevel,
            'name' => 'DocumentAccessLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CANSIGNDOCUMENTS => array(
            'name' => 'CanSignDocuments',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CANADDRESOLUTIONS => array(
            'name' => 'CanAddResolutions',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CANREQUESTRESOLUTIONS => array(
            'name' => 'CanRequestResolutions',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::SELECTEDDEPARTMENTIDS => array(
            'name' => 'SelectedDepartmentIds',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::JOBTITLE => array(
            'name' => 'JobTitle',
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
        $this->values[self::USERDEPARTMENTID] = null;
        $this->values[self::ISADMINISTRATOR] = null;
        $this->values[self::DOCUMENTACCESSLEVEL] = self::$fields[self::DOCUMENTACCESSLEVEL]['default'];
        $this->values[self::CANSIGNDOCUMENTS] = null;
        $this->values[self::CANADDRESOLUTIONS] = null;
        $this->values[self::CANREQUESTRESOLUTIONS] = null;
        $this->values[self::SELECTEDDEPARTMENTIDS] = array();
        $this->values[self::JOBTITLE] = null;
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
     * Sets value of 'UserDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserDepartmentId($value)
    {
        return $this->set(self::USERDEPARTMENTID, $value);
    }

    /**
     * Returns value of 'UserDepartmentId' property
     *
     * @return string
     */
    public function getUserDepartmentId()
    {
        $value = $this->get(self::USERDEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'IsAdministrator' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsAdministrator($value)
    {
        return $this->set(self::ISADMINISTRATOR, $value);
    }

    /**
     * Returns value of 'IsAdministrator' property
     *
     * @return boolean
     */
    public function getIsAdministrator()
    {
        $value = $this->get(self::ISADMINISTRATOR);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'DocumentAccessLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDocumentAccessLevel($value)
    {
        return $this->set(self::DOCUMENTACCESSLEVEL, $value);
    }

    /**
     * Returns value of 'DocumentAccessLevel' property
     *
     * @return integer
     */
    public function getDocumentAccessLevel()
    {
        $value = $this->get(self::DOCUMENTACCESSLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'CanSignDocuments' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCanSignDocuments($value)
    {
        return $this->set(self::CANSIGNDOCUMENTS, $value);
    }

    /**
     * Returns value of 'CanSignDocuments' property
     *
     * @return boolean
     */
    public function getCanSignDocuments()
    {
        $value = $this->get(self::CANSIGNDOCUMENTS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'CanAddResolutions' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCanAddResolutions($value)
    {
        return $this->set(self::CANADDRESOLUTIONS, $value);
    }

    /**
     * Returns value of 'CanAddResolutions' property
     *
     * @return boolean
     */
    public function getCanAddResolutions()
    {
        $value = $this->get(self::CANADDRESOLUTIONS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'CanRequestResolutions' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCanRequestResolutions($value)
    {
        return $this->set(self::CANREQUESTRESOLUTIONS, $value);
    }

    /**
     * Returns value of 'CanRequestResolutions' property
     *
     * @return boolean
     */
    public function getCanRequestResolutions()
    {
        $value = $this->get(self::CANREQUESTRESOLUTIONS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Appends value to 'SelectedDepartmentIds' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendSelectedDepartmentIds($value)
    {
        return $this->append(self::SELECTEDDEPARTMENTIDS, $value);
    }

    /**
     * Clears 'SelectedDepartmentIds' list
     *
     * @return null
     */
    public function clearSelectedDepartmentIds()
    {
        return $this->clear(self::SELECTEDDEPARTMENTIDS);
    }

    /**
     * Returns 'SelectedDepartmentIds' list
     *
     * @return string[]
     */
    public function getSelectedDepartmentIds()
    {
        return $this->get(self::SELECTEDDEPARTMENTIDS);
    }

    /**
     * Returns 'SelectedDepartmentIds' iterator
     *
     * @return \ArrayIterator
     */
    public function getSelectedDepartmentIdsIterator()
    {
        return new \ArrayIterator($this->get(self::SELECTEDDEPARTMENTIDS));
    }

    /**
     * Returns element from 'SelectedDepartmentIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getSelectedDepartmentIdsAt($offset)
    {
        return $this->get(self::SELECTEDDEPARTMENTIDS, $offset);
    }

    /**
     * Returns count of 'SelectedDepartmentIds' list
     *
     * @return int
     */
    public function getSelectedDepartmentIdsCount()
    {
        return $this->count(self::SELECTEDDEPARTMENTIDS);
    }

    /**
     * Sets value of 'JobTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setJobTitle($value)
    {
        return $this->set(self::JOBTITLE, $value);
    }

    /**
     * Returns value of 'JobTitle' property
     *
     * @return string
     */
    public function getJobTitle()
    {
        $value = $this->get(self::JOBTITLE);
        return $value === null ? (string)$value : $value;
    }
}
}