<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * EventContent message
 */
class EventContent extends \ProtobufMessage
{
    /* Field index constants */
    const COSTCHANGEINFO = 1;
    const TRANSFERDOCDETAILS = 2;
    const OPERATIONCONTENT = 3;
    const NOTIFICATIONDATE = 4;
    const CORRECTIONBASE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COSTCHANGEINFO => array(
            'name' => 'CostChangeInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFERDOCDETAILS => array(
            'name' => 'TransferDocDetails',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OPERATIONCONTENT => array(
            'name' => 'OperationContent',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOTIFICATIONDATE => array(
            'name' => 'NotificationDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CORRECTIONBASE => array(
            'name' => 'CorrectionBase',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\CorrectionBase'
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
        $this->values[self::COSTCHANGEINFO] = null;
        $this->values[self::TRANSFERDOCDETAILS] = null;
        $this->values[self::OPERATIONCONTENT] = null;
        $this->values[self::NOTIFICATIONDATE] = null;
        $this->values[self::CORRECTIONBASE] = array();
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
     * Sets value of 'CostChangeInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCostChangeInfo($value)
    {
        return $this->set(self::COSTCHANGEINFO, $value);
    }

    /**
     * Returns value of 'CostChangeInfo' property
     *
     * @return string
     */
    public function getCostChangeInfo()
    {
        $value = $this->get(self::COSTCHANGEINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TransferDocDetails' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferDocDetails($value)
    {
        return $this->set(self::TRANSFERDOCDETAILS, $value);
    }

    /**
     * Returns value of 'TransferDocDetails' property
     *
     * @return string
     */
    public function getTransferDocDetails()
    {
        $value = $this->get(self::TRANSFERDOCDETAILS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'OperationContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOperationContent($value)
    {
        return $this->set(self::OPERATIONCONTENT, $value);
    }

    /**
     * Returns value of 'OperationContent' property
     *
     * @return string
     */
    public function getOperationContent()
    {
        $value = $this->get(self::OPERATIONCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'NotificationDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNotificationDate($value)
    {
        return $this->set(self::NOTIFICATIONDATE, $value);
    }

    /**
     * Returns value of 'NotificationDate' property
     *
     * @return string
     */
    public function getNotificationDate()
    {
        $value = $this->get(self::NOTIFICATIONDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'CorrectionBase' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\CorrectionBase $value Value to append
     *
     * @return null
     */
    public function appendCorrectionBase(\Diadoc\Api\Proto\Invoicing\CorrectionBase $value)
    {
        return $this->append(self::CORRECTIONBASE, $value);
    }

    /**
     * Clears 'CorrectionBase' list
     *
     * @return null
     */
    public function clearCorrectionBase()
    {
        return $this->clear(self::CORRECTIONBASE);
    }

    /**
     * Returns 'CorrectionBase' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\CorrectionBase[]
     */
    public function getCorrectionBase()
    {
        return $this->get(self::CORRECTIONBASE);
    }

    /**
     * Returns 'CorrectionBase' iterator
     *
     * @return \ArrayIterator
     */
    public function getCorrectionBaseIterator()
    {
        return new \ArrayIterator($this->get(self::CORRECTIONBASE));
    }

    /**
     * Returns element from 'CorrectionBase' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\CorrectionBase
     */
    public function getCorrectionBaseAt($offset)
    {
        return $this->get(self::CORRECTIONBASE, $offset);
    }

    /**
     * Returns count of 'CorrectionBase' list
     *
     * @return int
     */
    public function getCorrectionBaseCount()
    {
        return $this->count(self::CORRECTIONBASE);
    }
}
}