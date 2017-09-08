<?php
/**
* Auto generated from TovTorgInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * TovTorgBuyerTitleInfo message
 */
class TovTorgBuyerTitleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTCREATOR = 1;
    const DOCUMENTCREATORBASE = 2;
    const OPERATIONCODE = 3;
    const OPERATIONCONTENT = 4;
    const ACCEPTANCEDATE = 5;
    const EMPLOYEE = 6;
    const OTHERISSUER = 7;
    const ADDITIONALINFOID = 8;
    const SIGNERS = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTCREATOR => array(
            'name' => 'DocumentCreator',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTCREATORBASE => array(
            'name' => 'DocumentCreatorBase',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OPERATIONCODE => array(
            'name' => 'OperationCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OPERATIONCONTENT => array(
            'name' => 'OperationContent',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ACCEPTANCEDATE => array(
            'name' => 'AcceptanceDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::ADDITIONALINFOID => array(
            'name' => 'AdditionalInfoId',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\AdditionalInfoId'
        ),
        self::SIGNERS => array(
            'name' => 'Signers',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner'
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
        $this->values[self::DOCUMENTCREATOR] = null;
        $this->values[self::DOCUMENTCREATORBASE] = null;
        $this->values[self::OPERATIONCODE] = null;
        $this->values[self::OPERATIONCONTENT] = null;
        $this->values[self::ACCEPTANCEDATE] = null;
        $this->values[self::EMPLOYEE] = null;
        $this->values[self::OTHERISSUER] = null;
        $this->values[self::ADDITIONALINFOID] = null;
        $this->values[self::SIGNERS] = array();
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
     * Sets value of 'DocumentCreator' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentCreator($value)
    {
        return $this->set(self::DOCUMENTCREATOR, $value);
    }

    /**
     * Returns value of 'DocumentCreator' property
     *
     * @return string
     */
    public function getDocumentCreator()
    {
        $value = $this->get(self::DOCUMENTCREATOR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentCreatorBase' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentCreatorBase($value)
    {
        return $this->set(self::DOCUMENTCREATORBASE, $value);
    }

    /**
     * Returns value of 'DocumentCreatorBase' property
     *
     * @return string
     */
    public function getDocumentCreatorBase()
    {
        $value = $this->get(self::DOCUMENTCREATORBASE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'OperationCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOperationCode($value)
    {
        return $this->set(self::OPERATIONCODE, $value);
    }

    /**
     * Returns value of 'OperationCode' property
     *
     * @return string
     */
    public function getOperationCode()
    {
        $value = $this->get(self::OPERATIONCODE);
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
     * Sets value of 'AcceptanceDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAcceptanceDate($value)
    {
        return $this->set(self::ACCEPTANCEDATE, $value);
    }

    /**
     * Returns value of 'AcceptanceDate' property
     *
     * @return string
     */
    public function getAcceptanceDate()
    {
        $value = $this->get(self::ACCEPTANCEDATE);
        return $value === null ? (string)$value : $value;
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

    /**
     * Appends value to 'Signers' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner $value Value to append
     *
     * @return null
     */
    public function appendSigners(\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner $value)
    {
        return $this->append(self::SIGNERS, $value);
    }

    /**
     * Clears 'Signers' list
     *
     * @return null
     */
    public function clearSigners()
    {
        return $this->clear(self::SIGNERS);
    }

    /**
     * Returns 'Signers' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner[]
     */
    public function getSigners()
    {
        return $this->get(self::SIGNERS);
    }

    /**
     * Returns 'Signers' iterator
     *
     * @return \ArrayIterator
     */
    public function getSignersIterator()
    {
        return new \ArrayIterator($this->get(self::SIGNERS));
    }

    /**
     * Returns element from 'Signers' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner
     */
    public function getSignersAt($offset)
    {
        return $this->get(self::SIGNERS, $offset);
    }

    /**
     * Returns count of 'Signers' list
     *
     * @return int
     */
    public function getSignersCount()
    {
        return $this->count(self::SIGNERS);
    }
}
}