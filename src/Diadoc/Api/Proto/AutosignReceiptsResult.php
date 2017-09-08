<?php
/**
* Auto generated from CloudSign.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * AutosignReceiptsResult message
 */
class AutosignReceiptsResult extends \ProtobufMessage
{
    /* Field index constants */
    const NEXTBATCHKEY = 1;
    const SIGNEDRECEIPTSCOUNT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NEXTBATCHKEY => array(
            'name' => 'NextBatchKey',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNEDRECEIPTSCOUNT => array(
            'name' => 'SignedReceiptsCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::NEXTBATCHKEY] = null;
        $this->values[self::SIGNEDRECEIPTSCOUNT] = null;
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
     * Sets value of 'NextBatchKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNextBatchKey($value)
    {
        return $this->set(self::NEXTBATCHKEY, $value);
    }

    /**
     * Returns value of 'NextBatchKey' property
     *
     * @return string
     */
    public function getNextBatchKey()
    {
        $value = $this->get(self::NEXTBATCHKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SignedReceiptsCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSignedReceiptsCount($value)
    {
        return $this->set(self::SIGNEDRECEIPTSCOUNT, $value);
    }

    /**
     * Returns value of 'SignedReceiptsCount' property
     *
     * @return integer
     */
    public function getSignedReceiptsCount()
    {
        $value = $this->get(self::SIGNEDRECEIPTSCOUNT);
        return $value === null ? (integer)$value : $value;
    }
}
}