<?php
/**
 * Auto generated from Document.proto at 2016-10-06 18:09:24
 *
 * Diadoc.Api.Proto.Documents package
 */

namespace Diadoc\Api\Proto\Documents {
/**
 * ResolutionStatus message
 */
class ResolutionStatus extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const TARGET = 2;
    const AUTHORUSERID = 3;
    const AUTHORFIO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'default' => \Diadoc\Api\Proto\Documents\ResolutionStatusType::UnknownResolutionStatus,
            'name' => 'Type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TARGET => array(
            'name' => 'Target',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\ResolutionTarget'
        ),
        self::AUTHORUSERID => array(
            'name' => 'AuthorUserId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AUTHORFIO => array(
            'name' => 'AuthorFIO',
            'required' => true,
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
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
        $this->values[self::TARGET] = null;
        $this->values[self::AUTHORUSERID] = null;
        $this->values[self::AUTHORFIO] = null;
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
     * Sets value of 'Target' property
     *
     * @param \Diadoc\Api\Proto\ResolutionTarget $value Property value
     *
     * @return null
     */
    public function setTarget(\Diadoc\Api\Proto\ResolutionTarget $value=null)
    {
        return $this->set(self::TARGET, $value);
    }

    /**
     * Returns value of 'Target' property
     *
     * @return \Diadoc\Api\Proto\ResolutionTarget
     */
    public function getTarget()
    {
        return $this->get(self::TARGET);
    }

    /**
     * Sets value of 'AuthorUserId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthorUserId($value)
    {
        return $this->set(self::AUTHORUSERID, $value);
    }

    /**
     * Returns value of 'AuthorUserId' property
     *
     * @return string
     */
    public function getAuthorUserId()
    {
        $value = $this->get(self::AUTHORUSERID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'AuthorFIO' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthorFIO($value)
    {
        return $this->set(self::AUTHORFIO, $value);
    }

    /**
     * Returns value of 'AuthorFIO' property
     *
     * @return string
     */
    public function getAuthorFIO()
    {
        $value = $this->get(self::AUTHORFIO);
        return $value === null ? (string)$value : $value;
    }
}
}