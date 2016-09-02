<?php
/**
 * Auto generated from Docflow.proto at 2016-09-02 13:33:34
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * DocflowStatusModel message
 */
class DocflowStatusModel extends \ProtobufMessage
{
    /* Field index constants */
    const SEVERITY = 1;
    const STATUSTEXT = 2;
    const STATUSHINT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SEVERITY => array(
            'default' => \Diadoc\Api\Proto\Docflow\DocflowStatusSeverity::UnknownDocflowStatusSeverity,
            'name' => 'Severity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATUSTEXT => array(
            'name' => 'StatusText',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STATUSHINT => array(
            'name' => 'StatusHint',
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
        $this->values[self::SEVERITY] = self::$fields[self::SEVERITY]['default'];
        $this->values[self::STATUSTEXT] = null;
        $this->values[self::STATUSHINT] = null;
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
     * Sets value of 'Severity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSeverity($value)
    {
        return $this->set(self::SEVERITY, $value);
    }

    /**
     * Returns value of 'Severity' property
     *
     * @return integer
     */
    public function getSeverity()
    {
        $value = $this->get(self::SEVERITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'StatusText' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStatusText($value)
    {
        return $this->set(self::STATUSTEXT, $value);
    }

    /**
     * Returns value of 'StatusText' property
     *
     * @return string
     */
    public function getStatusText()
    {
        $value = $this->get(self::STATUSTEXT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'StatusHint' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStatusHint($value)
    {
        return $this->set(self::STATUSHINT, $value);
    }

    /**
     * Returns value of 'StatusHint' property
     *
     * @return string
     */
    public function getStatusHint()
    {
        $value = $this->get(self::STATUSHINT);
        return $value === null ? (string)$value : $value;
    }
}
}