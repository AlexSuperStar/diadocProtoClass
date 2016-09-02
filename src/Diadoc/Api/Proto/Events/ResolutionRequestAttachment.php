<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * ResolutionRequestAttachment message
 */
class ResolutionRequestAttachment extends \ProtobufMessage
{
    /* Field index constants */
    const INITIALDOCUMENTID = 1;
    const TYPE = 2;
    const TARGETUSERID = 3;
    const TARGETDEPARTMENTID = 4;
    const COMMENT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INITIALDOCUMENTID => array(
            'name' => 'InitialDocumentId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TYPE => array(
            'name' => 'Type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TARGETUSERID => array(
            'name' => 'TargetUserId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TARGETDEPARTMENTID => array(
            'name' => 'TargetDepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COMMENT => array(
            'name' => 'Comment',
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
        $this->values[self::INITIALDOCUMENTID] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::TARGETUSERID] = null;
        $this->values[self::TARGETDEPARTMENTID] = null;
        $this->values[self::COMMENT] = null;
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
     * Sets value of 'InitialDocumentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInitialDocumentId($value)
    {
        return $this->set(self::INITIALDOCUMENTID, $value);
    }

    /**
     * Returns value of 'InitialDocumentId' property
     *
     * @return string
     */
    public function getInitialDocumentId()
    {
        $value = $this->get(self::INITIALDOCUMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'Type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'TargetUserId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTargetUserId($value)
    {
        return $this->set(self::TARGETUSERID, $value);
    }

    /**
     * Returns value of 'TargetUserId' property
     *
     * @return string
     */
    public function getTargetUserId()
    {
        $value = $this->get(self::TARGETUSERID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TargetDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTargetDepartmentId($value)
    {
        return $this->set(self::TARGETDEPARTMENTID, $value);
    }

    /**
     * Returns value of 'TargetDepartmentId' property
     *
     * @return string
     */
    public function getTargetDepartmentId()
    {
        $value = $this->get(self::TARGETDEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Comment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setComment($value)
    {
        return $this->set(self::COMMENT, $value);
    }

    /**
     * Returns value of 'Comment' property
     *
     * @return string
     */
    public function getComment()
    {
        $value = $this->get(self::COMMENT);
        return $value === null ? (string)$value : $value;
    }
}
}