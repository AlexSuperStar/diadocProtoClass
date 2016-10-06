<?php
/**
 * Auto generated from ResolutionTarget.proto at 2016-10-06 18:09:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * ResolutionTarget message
 */
class ResolutionTarget extends \ProtobufMessage
{
    /* Field index constants */
    const DEPARTMENT = 1;
    const DEPARTMENTID = 2;
    const USER = 3;
    const USERID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DEPARTMENT => array(
            'name' => 'Department',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEPARTMENTID => array(
            'name' => 'DepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::USER => array(
            'name' => 'User',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::USERID => array(
            'name' => 'UserId',
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
        $this->values[self::DEPARTMENT] = null;
        $this->values[self::DEPARTMENTID] = null;
        $this->values[self::USER] = null;
        $this->values[self::USERID] = null;
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
     * Sets value of 'DepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDepartmentId($value)
    {
        return $this->set(self::DEPARTMENTID, $value);
    }

    /**
     * Returns value of 'DepartmentId' property
     *
     * @return string
     */
    public function getDepartmentId()
    {
        $value = $this->get(self::DEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'User' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUser($value)
    {
        return $this->set(self::USER, $value);
    }

    /**
     * Returns value of 'User' property
     *
     * @return string
     */
    public function getUser()
    {
        $value = $this->get(self::USER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'UserId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserId($value)
    {
        return $this->set(self::USERID, $value);
    }

    /**
     * Returns value of 'UserId' property
     *
     * @return string
     */
    public function getUserId()
    {
        $value = $this->get(self::USERID);
        return $value === null ? (string)$value : $value;
    }
}
}