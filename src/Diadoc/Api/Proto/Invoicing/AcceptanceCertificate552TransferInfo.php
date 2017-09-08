<?php
/**
* Auto generated from AcceptanceCertificate552Info.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * AcceptanceCertificate552TransferInfo message
 */
class AcceptanceCertificate552TransferInfo extends \ProtobufMessage
{
    /* Field index constants */
    const OPERATIONINFO = 1;
    const TRANSFERDATE = 2;
    const CREATEDTHINGTRANSFERDATE = 3;
    const CREATEDTHINGINFO = 4;
    const ADDITIONALINFOS = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::OPERATIONINFO => array(
            'name' => 'OperationInfo',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFERDATE => array(
            'name' => 'TransferDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CREATEDTHINGTRANSFERDATE => array(
            'name' => 'CreatedThingTransferDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CREATEDTHINGINFO => array(
            'name' => 'CreatedThingInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDITIONALINFOS => array(
            'name' => 'AdditionalInfos',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\AdditionalInfo'
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
        $this->values[self::OPERATIONINFO] = null;
        $this->values[self::TRANSFERDATE] = null;
        $this->values[self::CREATEDTHINGTRANSFERDATE] = null;
        $this->values[self::CREATEDTHINGINFO] = null;
        $this->values[self::ADDITIONALINFOS] = array();
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
     * Sets value of 'OperationInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOperationInfo($value)
    {
        return $this->set(self::OPERATIONINFO, $value);
    }

    /**
     * Returns value of 'OperationInfo' property
     *
     * @return string
     */
    public function getOperationInfo()
    {
        $value = $this->get(self::OPERATIONINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TransferDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferDate($value)
    {
        return $this->set(self::TRANSFERDATE, $value);
    }

    /**
     * Returns value of 'TransferDate' property
     *
     * @return string
     */
    public function getTransferDate()
    {
        $value = $this->get(self::TRANSFERDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'CreatedThingTransferDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreatedThingTransferDate($value)
    {
        return $this->set(self::CREATEDTHINGTRANSFERDATE, $value);
    }

    /**
     * Returns value of 'CreatedThingTransferDate' property
     *
     * @return string
     */
    public function getCreatedThingTransferDate()
    {
        $value = $this->get(self::CREATEDTHINGTRANSFERDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'CreatedThingInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreatedThingInfo($value)
    {
        return $this->set(self::CREATEDTHINGINFO, $value);
    }

    /**
     * Returns value of 'CreatedThingInfo' property
     *
     * @return string
     */
    public function getCreatedThingInfo()
    {
        $value = $this->get(self::CREATEDTHINGINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'AdditionalInfos' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\AdditionalInfo $value Value to append
     *
     * @return null
     */
    public function appendAdditionalInfos(\Diadoc\Api\Proto\Invoicing\AdditionalInfo $value)
    {
        return $this->append(self::ADDITIONALINFOS, $value);
    }

    /**
     * Clears 'AdditionalInfos' list
     *
     * @return null
     */
    public function clearAdditionalInfos()
    {
        return $this->clear(self::ADDITIONALINFOS);
    }

    /**
     * Returns 'AdditionalInfos' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfo[]
     */
    public function getAdditionalInfos()
    {
        return $this->get(self::ADDITIONALINFOS);
    }

    /**
     * Returns 'AdditionalInfos' iterator
     *
     * @return \ArrayIterator
     */
    public function getAdditionalInfosIterator()
    {
        return new \ArrayIterator($this->get(self::ADDITIONALINFOS));
    }

    /**
     * Returns element from 'AdditionalInfos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfo
     */
    public function getAdditionalInfosAt($offset)
    {
        return $this->get(self::ADDITIONALINFOS, $offset);
    }

    /**
     * Returns count of 'AdditionalInfos' list
     *
     * @return int
     */
    public function getAdditionalInfosCount()
    {
        return $this->count(self::ADDITIONALINFOS);
    }
}
}