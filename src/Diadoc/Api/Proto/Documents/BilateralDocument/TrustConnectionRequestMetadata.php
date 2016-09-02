<?php
/**
 * Auto generated from BilateralDocument.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Documents.BilateralDocument package
 */

namespace Diadoc\Api\Proto\Documents\BilateralDocument {
/**
 * TrustConnectionRequestMetadata message
 */
class TrustConnectionRequestMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const TRUSTCONNECTIONREQUESTSTATUS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TRUSTCONNECTIONREQUESTSTATUS => array(
            'default' => \Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus::UnknownBilateralDocumentStatus,
            'name' => 'TrustConnectionRequestStatus',
            'required' => false,
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
        $this->values[self::TRUSTCONNECTIONREQUESTSTATUS] = self::$fields[self::TRUSTCONNECTIONREQUESTSTATUS]['default'];
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
     * Sets value of 'TrustConnectionRequestStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTrustConnectionRequestStatus($value)
    {
        return $this->set(self::TRUSTCONNECTIONREQUESTSTATUS, $value);
    }

    /**
     * Returns value of 'TrustConnectionRequestStatus' property
     *
     * @return integer
     */
    public function getTrustConnectionRequestStatus()
    {
        $value = $this->get(self::TRUSTCONNECTIONREQUESTSTATUS);
        return $value === null ? (integer)$value : $value;
    }
}
}