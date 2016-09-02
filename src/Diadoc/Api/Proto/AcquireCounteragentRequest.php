<?php
/**
 * Auto generated from AcquireCounteragent.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * AcquireCounteragentRequest message
 */
class AcquireCounteragentRequest extends \ProtobufMessage
{
    /* Field index constants */
    const ORGID = 1;
    const INN = 2;
    const MESSAGETOCOUNTERAGENT = 3;
    const INVITATIONDOCUMENT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ORGID => array(
            'name' => 'OrgId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INN => array(
            'name' => 'Inn',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MESSAGETOCOUNTERAGENT => array(
            'name' => 'MessageToCounteragent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVITATIONDOCUMENT => array(
            'name' => 'InvitationDocument',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\InvitationDocument'
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
        $this->values[self::MESSAGETOCOUNTERAGENT] = null;
        $this->values[self::INVITATIONDOCUMENT] = null;
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
     * Sets value of 'MessageToCounteragent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageToCounteragent($value)
    {
        return $this->set(self::MESSAGETOCOUNTERAGENT, $value);
    }

    /**
     * Returns value of 'MessageToCounteragent' property
     *
     * @return string
     */
    public function getMessageToCounteragent()
    {
        $value = $this->get(self::MESSAGETOCOUNTERAGENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'InvitationDocument' property
     *
     * @param \Diadoc\Api\Proto\InvitationDocument $value Property value
     *
     * @return null
     */
    public function setInvitationDocument(\Diadoc\Api\Proto\InvitationDocument $value=null)
    {
        return $this->set(self::INVITATIONDOCUMENT, $value);
    }

    /**
     * Returns value of 'InvitationDocument' property
     *
     * @return \Diadoc\Api\Proto\InvitationDocument
     */
    public function getInvitationDocument()
    {
        return $this->get(self::INVITATIONDOCUMENT);
    }
}
}