<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * RevocationRequestAttachment message
 */
class RevocationRequestAttachment extends \ProtobufMessage
{
    /* Field index constants */
    const PARENTENTITYID = 1;
    const SIGNEDCONTENT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PARENTENTITYID => array(
            'name' => 'ParentEntityId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNEDCONTENT => array(
            'name' => 'SignedContent',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Events\SignedContent'
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
        $this->values[self::PARENTENTITYID] = null;
        $this->values[self::SIGNEDCONTENT] = null;
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
     * Sets value of 'ParentEntityId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParentEntityId($value)
    {
        return $this->set(self::PARENTENTITYID, $value);
    }

    /**
     * Returns value of 'ParentEntityId' property
     *
     * @return string
     */
    public function getParentEntityId()
    {
        $value = $this->get(self::PARENTENTITYID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SignedContent' property
     *
     * @param \Diadoc\Api\Proto\Events\SignedContent $value Property value
     *
     * @return null
     */
    public function setSignedContent(\Diadoc\Api\Proto\Events\SignedContent $value=null)
    {
        return $this->set(self::SIGNEDCONTENT, $value);
    }

    /**
     * Returns value of 'SignedContent' property
     *
     * @return \Diadoc\Api\Proto\Events\SignedContent
     */
    public function getSignedContent()
    {
        return $this->get(self::SIGNEDCONTENT);
    }
}
}