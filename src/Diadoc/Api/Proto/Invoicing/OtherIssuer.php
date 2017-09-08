<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * OtherIssuer message
 */
class OtherIssuer extends \ProtobufMessage
{
    /* Field index constants */
    const TRANSFEREMPLOYEEPOSITION = 1;
    const TRANSFEREMPLOYEEINFO = 2;
    const TRANSFERORGANIZATIONNAME = 3;
    const TRANSFERORGANIZATIONBASE = 4;
    const TRANSFEREMPLOYEEBASE = 5;
    const TRANSFERSURNAME = 6;
    const TRANSFERFIRSTNAME = 7;
    const TRANSFERPATRONYMIC = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TRANSFEREMPLOYEEPOSITION => array(
            'name' => 'TransferEmployeePosition',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFEREMPLOYEEINFO => array(
            'name' => 'TransferEmployeeInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFERORGANIZATIONNAME => array(
            'name' => 'TransferOrganizationName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFERORGANIZATIONBASE => array(
            'name' => 'TransferOrganizationBase',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFEREMPLOYEEBASE => array(
            'name' => 'TransferEmployeeBase',
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
        $this->values[self::TRANSFEREMPLOYEEPOSITION] = null;
        $this->values[self::TRANSFEREMPLOYEEINFO] = null;
        $this->values[self::TRANSFERORGANIZATIONNAME] = null;
        $this->values[self::TRANSFERORGANIZATIONBASE] = null;
        $this->values[self::TRANSFEREMPLOYEEBASE] = null;
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
     * Sets value of 'TransferEmployeePosition' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferEmployeePosition($value)
    {
        return $this->set(self::TRANSFEREMPLOYEEPOSITION, $value);
    }

    /**
     * Returns value of 'TransferEmployeePosition' property
     *
     * @return string
     */
    public function getTransferEmployeePosition()
    {
        $value = $this->get(self::TRANSFEREMPLOYEEPOSITION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TransferEmployeeInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferEmployeeInfo($value)
    {
        return $this->set(self::TRANSFEREMPLOYEEINFO, $value);
    }

    /**
     * Returns value of 'TransferEmployeeInfo' property
     *
     * @return string
     */
    public function getTransferEmployeeInfo()
    {
        $value = $this->get(self::TRANSFEREMPLOYEEINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TransferOrganizationName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferOrganizationName($value)
    {
        return $this->set(self::TRANSFERORGANIZATIONNAME, $value);
    }

    /**
     * Returns value of 'TransferOrganizationName' property
     *
     * @return string
     */
    public function getTransferOrganizationName()
    {
        $value = $this->get(self::TRANSFERORGANIZATIONNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TransferOrganizationBase' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferOrganizationBase($value)
    {
        return $this->set(self::TRANSFERORGANIZATIONBASE, $value);
    }

    /**
     * Returns value of 'TransferOrganizationBase' property
     *
     * @return string
     */
    public function getTransferOrganizationBase()
    {
        $value = $this->get(self::TRANSFERORGANIZATIONBASE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TransferEmployeeBase' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferEmployeeBase($value)
    {
        return $this->set(self::TRANSFEREMPLOYEEBASE, $value);
    }

    /**
     * Returns value of 'TransferEmployeeBase' property
     *
     * @return string
     */
    public function getTransferEmployeeBase()
    {
        $value = $this->get(self::TRANSFEREMPLOYEEBASE);
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