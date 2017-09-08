<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * TransferInfo message
 */
class TransferInfo extends \ProtobufMessage
{
    /* Field index constants */
    const OPERATIONINFO = 1;
    const OPERATIONTYPE = 2;
    const TRANSFERDATE = 3;
    const TRANSFERBASE = 4;
    const TRANSFERTEXTINFO = 5;
    const WAYBILL = 6;
    const CARRIER = 7;
    const EMPLOYEE = 8;
    const OTHERISSUER = 9;
    const CREATEDTHINGTRANSFERDATE = 10;
    const CREATEDTHINGINFO = 11;
    const ADDITIONALINFOID = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::OPERATIONINFO => array(
            'name' => 'OperationInfo',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OPERATIONTYPE => array(
            'name' => 'OperationType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFERDATE => array(
            'name' => 'TransferDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFERBASE => array(
            'name' => 'TransferBase',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\TransferBase'
        ),
        self::TRANSFERTEXTINFO => array(
            'name' => 'TransferTextInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WAYBILL => array(
            'name' => 'Waybill',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Waybill'
        ),
        self::CARRIER => array(
            'name' => 'Carrier',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo'
        ),
        self::EMPLOYEE => array(
            'name' => 'Employee',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Employee'
        ),
        self::OTHERISSUER => array(
            'name' => 'OtherIssuer',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\OtherIssuer'
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
        self::ADDITIONALINFOID => array(
            'name' => 'AdditionalInfoId',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\AdditionalInfoId'
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
        $this->values[self::OPERATIONTYPE] = null;
        $this->values[self::TRANSFERDATE] = null;
        $this->values[self::TRANSFERBASE] = array();
        $this->values[self::TRANSFERTEXTINFO] = null;
        $this->values[self::WAYBILL] = array();
        $this->values[self::CARRIER] = null;
        $this->values[self::EMPLOYEE] = null;
        $this->values[self::OTHERISSUER] = null;
        $this->values[self::CREATEDTHINGTRANSFERDATE] = null;
        $this->values[self::CREATEDTHINGINFO] = null;
        $this->values[self::ADDITIONALINFOID] = null;
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
     * Sets value of 'OperationType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOperationType($value)
    {
        return $this->set(self::OPERATIONTYPE, $value);
    }

    /**
     * Returns value of 'OperationType' property
     *
     * @return string
     */
    public function getOperationType()
    {
        $value = $this->get(self::OPERATIONTYPE);
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
     * Appends value to 'TransferBase' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\TransferBase $value Value to append
     *
     * @return null
     */
    public function appendTransferBase(\Diadoc\Api\Proto\Invoicing\TransferBase $value)
    {
        return $this->append(self::TRANSFERBASE, $value);
    }

    /**
     * Clears 'TransferBase' list
     *
     * @return null
     */
    public function clearTransferBase()
    {
        return $this->clear(self::TRANSFERBASE);
    }

    /**
     * Returns 'TransferBase' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\TransferBase[]
     */
    public function getTransferBase()
    {
        return $this->get(self::TRANSFERBASE);
    }

    /**
     * Returns 'TransferBase' iterator
     *
     * @return \ArrayIterator
     */
    public function getTransferBaseIterator()
    {
        return new \ArrayIterator($this->get(self::TRANSFERBASE));
    }

    /**
     * Returns element from 'TransferBase' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\TransferBase
     */
    public function getTransferBaseAt($offset)
    {
        return $this->get(self::TRANSFERBASE, $offset);
    }

    /**
     * Returns count of 'TransferBase' list
     *
     * @return int
     */
    public function getTransferBaseCount()
    {
        return $this->count(self::TRANSFERBASE);
    }

    /**
     * Sets value of 'TransferTextInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransferTextInfo($value)
    {
        return $this->set(self::TRANSFERTEXTINFO, $value);
    }

    /**
     * Returns value of 'TransferTextInfo' property
     *
     * @return string
     */
    public function getTransferTextInfo()
    {
        $value = $this->get(self::TRANSFERTEXTINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'Waybill' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\Waybill $value Value to append
     *
     * @return null
     */
    public function appendWaybill(\Diadoc\Api\Proto\Invoicing\Waybill $value)
    {
        return $this->append(self::WAYBILL, $value);
    }

    /**
     * Clears 'Waybill' list
     *
     * @return null
     */
    public function clearWaybill()
    {
        return $this->clear(self::WAYBILL);
    }

    /**
     * Returns 'Waybill' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\Waybill[]
     */
    public function getWaybill()
    {
        return $this->get(self::WAYBILL);
    }

    /**
     * Returns 'Waybill' iterator
     *
     * @return \ArrayIterator
     */
    public function getWaybillIterator()
    {
        return new \ArrayIterator($this->get(self::WAYBILL));
    }

    /**
     * Returns element from 'Waybill' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\Waybill
     */
    public function getWaybillAt($offset)
    {
        return $this->get(self::WAYBILL, $offset);
    }

    /**
     * Returns count of 'Waybill' list
     *
     * @return int
     */
    public function getWaybillCount()
    {
        return $this->count(self::WAYBILL);
    }

    /**
     * Sets value of 'Carrier' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value Property value
     *
     * @return null
     */
    public function setCarrier(\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value=null)
    {
        return $this->set(self::CARRIER, $value);
    }

    /**
     * Returns value of 'Carrier' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo
     */
    public function getCarrier()
    {
        return $this->get(self::CARRIER);
    }

    /**
     * Sets value of 'Employee' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Employee $value Property value
     *
     * @return null
     */
    public function setEmployee(\Diadoc\Api\Proto\Invoicing\Employee $value=null)
    {
        return $this->set(self::EMPLOYEE, $value);
    }

    /**
     * Returns value of 'Employee' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Employee
     */
    public function getEmployee()
    {
        return $this->get(self::EMPLOYEE);
    }

    /**
     * Sets value of 'OtherIssuer' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\OtherIssuer $value Property value
     *
     * @return null
     */
    public function setOtherIssuer(\Diadoc\Api\Proto\Invoicing\OtherIssuer $value=null)
    {
        return $this->set(self::OTHERISSUER, $value);
    }

    /**
     * Returns value of 'OtherIssuer' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\OtherIssuer
     */
    public function getOtherIssuer()
    {
        return $this->get(self::OTHERISSUER);
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
     * Sets value of 'AdditionalInfoId' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\AdditionalInfoId $value Property value
     *
     * @return null
     */
    public function setAdditionalInfoId(\Diadoc\Api\Proto\Invoicing\AdditionalInfoId $value=null)
    {
        return $this->set(self::ADDITIONALINFOID, $value);
    }

    /**
     * Returns value of 'AdditionalInfoId' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfoId
     */
    public function getAdditionalInfoId()
    {
        return $this->get(self::ADDITIONALINFOID);
    }
}
}