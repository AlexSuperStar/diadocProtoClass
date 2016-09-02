<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * EncryptedDocumentMetadata message
 */
class EncryptedDocumentMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const FILEID = 1;
    const BUYERFNSPARTICIPANTID = 2;
    const SENDERFNSPARTICIPANTID = 3;
    const DOCUMENTDATEANDNUMBER = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FILEID => array(
            'name' => 'FileId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BUYERFNSPARTICIPANTID => array(
            'name' => 'BuyerFnsParticipantId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SENDERFNSPARTICIPANTID => array(
            'name' => 'SenderFnsParticipantId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTDATEANDNUMBER => array(
            'name' => 'DocumentDateAndNumber',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber'
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
        $this->values[self::FILEID] = null;
        $this->values[self::BUYERFNSPARTICIPANTID] = null;
        $this->values[self::SENDERFNSPARTICIPANTID] = null;
        $this->values[self::DOCUMENTDATEANDNUMBER] = null;
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
     * Sets value of 'FileId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFileId($value)
    {
        return $this->set(self::FILEID, $value);
    }

    /**
     * Returns value of 'FileId' property
     *
     * @return string
     */
    public function getFileId()
    {
        $value = $this->get(self::FILEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'BuyerFnsParticipantId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBuyerFnsParticipantId($value)
    {
        return $this->set(self::BUYERFNSPARTICIPANTID, $value);
    }

    /**
     * Returns value of 'BuyerFnsParticipantId' property
     *
     * @return string
     */
    public function getBuyerFnsParticipantId()
    {
        $value = $this->get(self::BUYERFNSPARTICIPANTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SenderFnsParticipantId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSenderFnsParticipantId($value)
    {
        return $this->set(self::SENDERFNSPARTICIPANTID, $value);
    }

    /**
     * Returns value of 'SenderFnsParticipantId' property
     *
     * @return string
     */
    public function getSenderFnsParticipantId()
    {
        $value = $this->get(self::SENDERFNSPARTICIPANTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentDateAndNumber' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setDocumentDateAndNumber(\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value=null)
    {
        return $this->set(self::DOCUMENTDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'DocumentDateAndNumber' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getDocumentDateAndNumber()
    {
        return $this->get(self::DOCUMENTDATEANDNUMBER);
    }
}
}