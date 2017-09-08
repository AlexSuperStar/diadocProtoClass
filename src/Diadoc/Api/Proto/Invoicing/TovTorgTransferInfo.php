<?php
/**
* Auto generated from TovTorgInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * TovTorgTransferInfo message
 */
class TovTorgTransferInfo extends \ProtobufMessage
{
    /* Field index constants */
    const OPERATIONINFO = 1;
    const TRANSFERDATE = 2;
    const ATTACHMENT = 3;
    const WAYBILLS = 4;
    const EMPLOYEE = 5;
    const OTHERISSUER = 6;
    const ADDITIONALINFOS = 7;

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
        self::ATTACHMENT => array(
            'name' => 'Attachment',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WAYBILLS => array(
            'name' => 'Waybills',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Waybill'
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
        $this->values[self::ATTACHMENT] = null;
        $this->values[self::WAYBILLS] = array();
        $this->values[self::EMPLOYEE] = null;
        $this->values[self::OTHERISSUER] = null;
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
     * Sets value of 'Attachment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAttachment($value)
    {
        return $this->set(self::ATTACHMENT, $value);
    }

    /**
     * Returns value of 'Attachment' property
     *
     * @return string
     */
    public function getAttachment()
    {
        $value = $this->get(self::ATTACHMENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'Waybills' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\Waybill $value Value to append
     *
     * @return null
     */
    public function appendWaybills(\Diadoc\Api\Proto\Invoicing\Waybill $value)
    {
        return $this->append(self::WAYBILLS, $value);
    }

    /**
     * Clears 'Waybills' list
     *
     * @return null
     */
    public function clearWaybills()
    {
        return $this->clear(self::WAYBILLS);
    }

    /**
     * Returns 'Waybills' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\Waybill[]
     */
    public function getWaybills()
    {
        return $this->get(self::WAYBILLS);
    }

    /**
     * Returns 'Waybills' iterator
     *
     * @return \ArrayIterator
     */
    public function getWaybillsIterator()
    {
        return new \ArrayIterator($this->get(self::WAYBILLS));
    }

    /**
     * Returns element from 'Waybills' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\Waybill
     */
    public function getWaybillsAt($offset)
    {
        return $this->get(self::WAYBILLS, $offset);
    }

    /**
     * Returns count of 'Waybills' list
     *
     * @return int
     */
    public function getWaybillsCount()
    {
        return $this->count(self::WAYBILLS);
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