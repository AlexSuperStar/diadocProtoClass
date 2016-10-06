<?php
/**
 * Auto generated from XmlBilateralDocflow.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * BuyerTitleDocflow message
 */
class BuyerTitleDocflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const BUYERTITLEATTACHMENT = 2;
    const SENDTIMESTAMP = 3;
    const DELIVERYTIMESTAMP = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::BUYERTITLEATTACHMENT => array(
            'name' => 'BuyerTitleAttachment',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\SignedAttachment'
        ),
        self::SENDTIMESTAMP => array(
            'name' => 'SendTimestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
        self::DELIVERYTIMESTAMP => array(
            'name' => 'DeliveryTimestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
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
        $this->values[self::ISFINISHED] = null;
        $this->values[self::BUYERTITLEATTACHMENT] = null;
        $this->values[self::SENDTIMESTAMP] = null;
        $this->values[self::DELIVERYTIMESTAMP] = null;
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
     * Sets value of 'IsFinished' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsFinished($value)
    {
        return $this->set(self::ISFINISHED, $value);
    }

    /**
     * Returns value of 'IsFinished' property
     *
     * @return boolean
     */
    public function getIsFinished()
    {
        $value = $this->get(self::ISFINISHED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'BuyerTitleAttachment' property
     *
     * @param \Diadoc\Api\Proto\Docflow\SignedAttachment $value Property value
     *
     * @return null
     */
    public function setBuyerTitleAttachment(\Diadoc\Api\Proto\Docflow\SignedAttachment $value=null)
    {
        return $this->set(self::BUYERTITLEATTACHMENT, $value);
    }

    /**
     * Returns value of 'BuyerTitleAttachment' property
     *
     * @return \Diadoc\Api\Proto\Docflow\SignedAttachment
     */
    public function getBuyerTitleAttachment()
    {
        return $this->get(self::BUYERTITLEATTACHMENT);
    }

    /**
     * Sets value of 'SendTimestamp' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setSendTimestamp(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::SENDTIMESTAMP, $value);
    }

    /**
     * Returns value of 'SendTimestamp' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getSendTimestamp()
    {
        return $this->get(self::SENDTIMESTAMP);
    }

    /**
     * Sets value of 'DeliveryTimestamp' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setDeliveryTimestamp(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::DELIVERYTIMESTAMP, $value);
    }

    /**
     * Returns value of 'DeliveryTimestamp' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getDeliveryTimestamp()
    {
        return $this->get(self::DELIVERYTIMESTAMP);
    }
}
}