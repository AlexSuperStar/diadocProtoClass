<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * Employee message
 */
class Employee extends \ProtobufMessage
{
    /* Field index constants */
    const EMPLOYEEPOSITION = 1;
    const EMPLOYEEINFO = 2;
    const EMPLOYEEBASE = 3;
    const TRANSFERSURNAME = 4;
    const TRANSFERFIRSTNAME = 5;
    const TRANSFERPATRONYMIC = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EMPLOYEEPOSITION => array(
            'name' => 'EmployeePosition',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EMPLOYEEINFO => array(
            'name' => 'EmployeeInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EMPLOYEEBASE => array(
            'name' => 'EmployeeBase',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFERSURNAME => array(
            'name' => 'TransferSurname',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFERFIRSTNAME => array(
            'name' => 'TransferFirstName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFERPATRONYMIC => array(
            'name' => 'TransferPatronymic',
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
        $this->values[self::EMPLOYEEPOSITION] = null;
        $this->values[self::EMPLOYEEINFO] = null;
        $this->values[self::EMPLOYEEBASE] = null;
        $this->values[self::TRANSFERSURNAME] = null;
        $this->values[self::TRANSFERFIRSTNAME] = null;
        $this->values[self::TRANSFERPATRONYMIC] = null;
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
     * Sets value of 'EmployeePosition' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEmployeePosition($value)
    {
        return $this->set(self::EMPLOYEEPOSITION, $value);
    }

    /**
     * Returns value of 'EmployeePosition' property
     *
     * @return string
     */
    public function getEmployeePosition()
    {
        $value = $this->get(self::EMPLOYEEPOSITION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'EmployeeInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEmployeeInfo($value)
    {
        return $this->set(self::EMPLOYEEINFO, $value);
    }

    /**
     * Returns value of 'EmployeeInfo' property
     *
     * @return string
     */
    public function getEmployeeInfo()
    {
        $value = $this->get(self::EMPLOYEEINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'EmployeeBase' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEmployeeBase($value)
    {
        return $this->set(self::EMPLOYEEBASE, $value);
    }

    /**
     * Returns value of 'EmployeeBase' property
     *
     * @return string
     */
    public function getEmployeeBase()
    {
        $value = $this->get(self::EMPLOYEEBASE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TransferSurname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferSurname($value)
    {
        return $this->set(self::TRANSFERSURNAME, $value);
    }

    /**
     * Returns value of 'TransferSurname' property
     *
     * @return string
     */
    public function getTransferSurname()
    {
        $value = $this->get(self::TRANSFERSURNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TransferFirstName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferFirstName($value)
    {
        return $this->set(self::TRANSFERFIRSTNAME, $value);
    }

    /**
     * Returns value of 'TransferFirstName' property
     *
     * @return string
     */
    public function getTransferFirstName()
    {
        $value = $this->get(self::TRANSFERFIRSTNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TransferPatronymic' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferPatronymic($value)
    {
        return $this->set(self::TRANSFERPATRONYMIC, $value);
    }

    /**
     * Returns value of 'TransferPatronymic' property
     *
     * @return string
     */
    public function getTransferPatronymic()
    {
        $value = $this->get(self::TRANSFERPATRONYMIC);
        return $value === null ? (string)$value : $value;
    }
}
}