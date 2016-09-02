<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * EncryptedXmlBasicDocumentMetadata message
 */
class EncryptedXmlBasicDocumentMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const FORMATIONDATE = 1;
    const FORMATIONTIME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FORMATIONDATE => array(
            'name' => 'FormationDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FORMATIONTIME => array(
            'name' => 'FormationTime',
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
        $this->values[self::FORMATIONDATE] = null;
        $this->values[self::FORMATIONTIME] = null;
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
     * Sets value of 'FormationDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFormationDate($value)
    {
        return $this->set(self::FORMATIONDATE, $value);
    }

    /**
     * Returns value of 'FormationDate' property
     *
     * @return string
     */
    public function getFormationDate()
    {
        $value = $this->get(self::FORMATIONDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'FormationTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFormationTime($value)
    {
        return $this->set(self::FORMATIONTIME, $value);
    }

    /**
     * Returns value of 'FormationTime' property
     *
     * @return string
     */
    public function getFormationTime()
    {
        $value = $this->get(self::FORMATIONTIME);
        return $value === null ? (string)$value : $value;
    }
}
}