<?php
/**
 * Auto generated from OrganizationInfo.proto at 2016-10-06 18:08:58
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * DocflowParticipant message
 */
class DocflowParticipant extends \ProtobufMessage
{
    /* Field index constants */
    const BOXID = 1;
    const INN = 2;
    const KPP = 3;
    const FNSPARTICIPANTID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOXID => array(
            'name' => 'BoxId',
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
        $this->values[self::BOXID] = null;
        $this->values[self::INN] = null;
        $this->values[self::KPP] = null;
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