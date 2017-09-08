<?php
/**
* Auto generated from AcceptanceCertificate552Info.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * AcceptanceCertificate552BuyerTitleInfo message
 */
class AcceptanceCertificate552BuyerTitleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SIGNERS = 1;
    const DOCUMENTCREATOR = 2;
    const DOCUMENTCREATORBASE = 3;
    const OPERATIONTYPE = 4;
    const DOCUMENTNAME = 5;
    const OPERATIONINFO = 6;
    const ACCEPTDATE = 7;
    const CREATEDTHINGACCEPTDATE = 8;
    const CREATEDTHINGINFO = 9;
    const ADDITIONALINFOID = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SIGNERS => array(
            'name' => 'Signers',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner'
        ),
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
        self::OPERATIONTYPE => array(
            'name' => 'OperationType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTNAME => array(
            'name' => 'DocumentName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OPERATIONINFO => array(
            'name' => 'OperationInfo',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ACCEPTDATE => array(
            'name' => 'AcceptDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CREATEDTHINGACCEPTDATE => array(
            'name' => 'CreatedThingAcceptDate',
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
        $this->values[self::SIGNERS] = array();
        $this->values[self::DOCUMENTCREATOR] = null;
        $this->values[self::DOCUMENTCREATORBASE] = null;
        $this->values[self::OPERATIONTYPE] = null;
        $this->values[self::DOCUMENTNAME] = null;
        $this->values[self::OPERATIONINFO] = null;
        $this->values[self::ACCEPTDATE] = null;
        $this->values[self::CREATEDTHINGACCEPTDATE] = null;
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
     * Sets value of 'DocumentName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentName($value)
    {
        return $this->set(self::DOCUMENTNAME, $value);
    }

    /**
     * Returns value of 'DocumentName' property
     *
     * @return string
     */
    public function getDocumentName()
    {
        $value = $this->get(self::DOCUMENTNAME);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'AcceptDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAcceptDate($value)
    {
        return $this->set(self::ACCEPTDATE, $value);
    }

    /**
     * Returns value of 'AcceptDate' property
     *
     * @return string
     */
    public function getAcceptDate()
    {
        $value = $this->get(self::ACCEPTDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'CreatedThingAcceptDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreatedThingAcceptDate($value)
    {
        return $this->set(self::CREATEDTHINGACCEPTDATE, $value);
    }

    /**
     * Returns value of 'CreatedThingAcceptDate' property
     *
     * @return string
     */
    public function getCreatedThingAcceptDate()
    {
        $value = $this->get(self::CREATEDTHINGACCEPTDATE);
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