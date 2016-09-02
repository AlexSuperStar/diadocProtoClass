<?php
/**
 * Auto generated from ResolutionRequestInfo.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * ResolutionRequestInfo message
 */
class ResolutionRequestInfo extends \ProtobufMessage
{
    /* Field index constants */
    const REQUESTTYPE = 1;
    const AUTHOR = 2;
    const TARGET = 3;
    const RESOLVEDWITH = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUESTTYPE => array(
            'default' => \Diadoc\Api\Proto\Events\ResolutionRequestType::UnknownResolutionRequestType,
            'name' => 'RequestType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUTHOR => array(
            'name' => 'Author',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TARGET => array(
            'name' => 'Target',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\ResolutionTarget'
        ),
        self::RESOLVEDWITH => array(
            'name' => 'ResolvedWith',
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
        $this->values[self::REQUESTTYPE] = self::$fields[self::REQUESTTYPE]['default'];
        $this->values[self::AUTHOR] = null;
        $this->values[self::TARGET] = null;
        $this->values[self::RESOLVEDWITH] = null;
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
     * Sets value of 'RequestType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRequestType($value)
    {
        return $this->set(self::REQUESTTYPE, $value);
    }

    /**
     * Returns value of 'RequestType' property
     *
     * @return integer
     */
    public function getRequestType()
    {
        $value = $this->get(self::REQUESTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'Author' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthor($value)
    {
        return $this->set(self::AUTHOR, $value);
    }

    /**
     * Returns value of 'Author' property
     *
     * @return string
     */
    public function getAuthor()
    {
        $value = $this->get(self::AUTHOR);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'ResolvedWith' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setResolvedWith($value)
    {
        return $this->set(self::RESOLVEDWITH, $value);
    }

    /**
     * Returns value of 'ResolvedWith' property
     *
     * @return string
     */
    public function getResolvedWith()
    {
        $value = $this->get(self::RESOLVEDWITH);
        return $value === null ? (string)$value : $value;
    }
}
}