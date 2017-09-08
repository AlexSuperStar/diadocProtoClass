<?php
/**
* Auto generated from AcceptanceCertificate552Info.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * AcceptanceCertificate552SellerTitleInfo message
 */
class AcceptanceCertificate552SellerTitleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SELLER = 1;
    const BUYER = 2;
    const SIGNERS = 3;
    const GROUNDS = 4;
    const CURRENCY = 5;
    const CURRENCYRATE = 6;
    const WORKS = 7;
    const DOCUMENTDATE = 8;
    const DOCUMENTNUMBER = 9;
    const REVISIONDATE = 10;
    const REVISIONNUMBER = 11;
    const DOCUMENTCREATOR = 12;
    const DOCUMENTCREATORBASE = 13;
    const OPERATIONTYPE = 14;
    const OPERATIONTITLE = 15;
    const GOVERNMENTCONTRACTINFO = 16;
    const ADDITIONALINFOID = 17;
    const DOCUMENTNAME = 18;
    const TRANSFERINFO = 19;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SELLER => array(
            'name' => 'Seller',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo'
        ),
        self::BUYER => array(
            'name' => 'Buyer',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo'
        ),
        self::SIGNERS => array(
            'name' => 'Signers',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner'
        ),
        self::GROUNDS => array(
            'name' => 'Grounds',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\GroundInfo'
        ),
        self::CURRENCY => array(
            'name' => 'Currency',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CURRENCYRATE => array(
            'name' => 'CurrencyRate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WORKS => array(
            'name' => 'Works',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552WorkDescription'
        ),
        self::DOCUMENTDATE => array(
            'name' => 'DocumentDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTNUMBER => array(
            'name' => 'DocumentNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REVISIONDATE => array(
            'name' => 'RevisionDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REVISIONNUMBER => array(
            'name' => 'RevisionNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::OPERATIONTITLE => array(
            'name' => 'OperationTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GOVERNMENTCONTRACTINFO => array(
            'name' => 'GovernmentContractInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDITIONALINFOID => array(
            'name' => 'AdditionalInfoId',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\AdditionalInfoId'
        ),
        self::DOCUMENTNAME => array(
            'name' => 'DocumentName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRANSFERINFO => array(
            'name' => 'TransferInfo',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552TransferInfo'
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
        $this->values[self::SELLER] = null;
        $this->values[self::BUYER] = null;
        $this->values[self::SIGNERS] = array();
        $this->values[self::GROUNDS] = array();
        $this->values[self::CURRENCY] = null;
        $this->values[self::CURRENCYRATE] = null;
        $this->values[self::WORKS] = array();
        $this->values[self::DOCUMENTDATE] = null;
        $this->values[self::DOCUMENTNUMBER] = null;
        $this->values[self::REVISIONDATE] = null;
        $this->values[self::REVISIONNUMBER] = null;
        $this->values[self::DOCUMENTCREATOR] = null;
        $this->values[self::DOCUMENTCREATORBASE] = null;
        $this->values[self::OPERATIONTYPE] = null;
        $this->values[self::OPERATIONTITLE] = null;
        $this->values[self::GOVERNMENTCONTRACTINFO] = null;
        $this->values[self::ADDITIONALINFOID] = null;
        $this->values[self::DOCUMENTNAME] = null;
        $this->values[self::TRANSFERINFO] = null;
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
     * Sets value of 'Seller' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value Property value
     *
     * @return null
     */
    public function setSeller(\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value=null)
    {
        return $this->set(self::SELLER, $value);
    }

    /**
     * Returns value of 'Seller' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo
     */
    public function getSeller()
    {
        return $this->get(self::SELLER);
    }

    /**
     * Sets value of 'Buyer' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value Property value
     *
     * @return null
     */
    public function setBuyer(\Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value=null)
    {
        return $this->set(self::BUYER, $value);
    }

    /**
     * Returns value of 'Buyer' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo
     */
    public function getBuyer()
    {
        return $this->get(self::BUYER);
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
     * Appends value to 'Grounds' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\GroundInfo $value Value to append
     *
     * @return null
     */
    public function appendGrounds(\Diadoc\Api\Proto\Invoicing\GroundInfo $value)
    {
        return $this->append(self::GROUNDS, $value);
    }

    /**
     * Clears 'Grounds' list
     *
     * @return null
     */
    public function clearGrounds()
    {
        return $this->clear(self::GROUNDS);
    }

    /**
     * Returns 'Grounds' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\GroundInfo[]
     */
    public function getGrounds()
    {
        return $this->get(self::GROUNDS);
    }

    /**
     * Returns 'Grounds' iterator
     *
     * @return \ArrayIterator
     */
    public function getGroundsIterator()
    {
        return new \ArrayIterator($this->get(self::GROUNDS));
    }

    /**
     * Returns element from 'Grounds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\GroundInfo
     */
    public function getGroundsAt($offset)
    {
        return $this->get(self::GROUNDS, $offset);
    }

    /**
     * Returns count of 'Grounds' list
     *
     * @return int
     */
    public function getGroundsCount()
    {
        return $this->count(self::GROUNDS);
    }

    /**
     * Sets value of 'Currency' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCurrency($value)
    {
        return $this->set(self::CURRENCY, $value);
    }

    /**
     * Returns value of 'Currency' property
     *
     * @return string
     */
    public function getCurrency()
    {
        $value = $this->get(self::CURRENCY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'CurrencyRate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCurrencyRate($value)
    {
        return $this->set(self::CURRENCYRATE, $value);
    }

    /**
     * Returns value of 'CurrencyRate' property
     *
     * @return string
     */
    public function getCurrencyRate()
    {
        $value = $this->get(self::CURRENCYRATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'Works' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552WorkDescription $value Value to append
     *
     * @return null
     */
    public function appendWorks(\Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552WorkDescription $value)
    {
        return $this->append(self::WORKS, $value);
    }

    /**
     * Clears 'Works' list
     *
     * @return null
     */
    public function clearWorks()
    {
        return $this->clear(self::WORKS);
    }

    /**
     * Returns 'Works' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552WorkDescription[]
     */
    public function getWorks()
    {
        return $this->get(self::WORKS);
    }

    /**
     * Returns 'Works' iterator
     *
     * @return \ArrayIterator
     */
    public function getWorksIterator()
    {
        return new \ArrayIterator($this->get(self::WORKS));
    }

    /**
     * Returns element from 'Works' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552WorkDescription
     */
    public function getWorksAt($offset)
    {
        return $this->get(self::WORKS, $offset);
    }

    /**
     * Returns count of 'Works' list
     *
     * @return int
     */
    public function getWorksCount()
    {
        return $this->count(self::WORKS);
    }

    /**
     * Sets value of 'DocumentDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentDate($value)
    {
        return $this->set(self::DOCUMENTDATE, $value);
    }

    /**
     * Returns value of 'DocumentDate' property
     *
     * @return string
     */
    public function getDocumentDate()
    {
        $value = $this->get(self::DOCUMENTDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentNumber($value)
    {
        return $this->set(self::DOCUMENTNUMBER, $value);
    }

    /**
     * Returns value of 'DocumentNumber' property
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        $value = $this->get(self::DOCUMENTNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'RevisionDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRevisionDate($value)
    {
        return $this->set(self::REVISIONDATE, $value);
    }

    /**
     * Returns value of 'RevisionDate' property
     *
     * @return string
     */
    public function getRevisionDate()
    {
        $value = $this->get(self::REVISIONDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'RevisionNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRevisionNumber($value)
    {
        return $this->set(self::REVISIONNUMBER, $value);
    }

    /**
     * Returns value of 'RevisionNumber' property
     *
     * @return string
     */
    public function getRevisionNumber()
    {
        $value = $this->get(self::REVISIONNUMBER);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'OperationTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOperationTitle($value)
    {
        return $this->set(self::OPERATIONTITLE, $value);
    }

    /**
     * Returns value of 'OperationTitle' property
     *
     * @return string
     */
    public function getOperationTitle()
    {
        $value = $this->get(self::OPERATIONTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'GovernmentContractInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGovernmentContractInfo($value)
    {
        return $this->set(self::GOVERNMENTCONTRACTINFO, $value);
    }

    /**
     * Returns value of 'GovernmentContractInfo' property
     *
     * @return string
     */
    public function getGovernmentContractInfo()
    {
        $value = $this->get(self::GOVERNMENTCONTRACTINFO);
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
     * Sets value of 'TransferInfo' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552TransferInfo $value Property value
     *
     * @return null
     */
    public function setTransferInfo(\Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552TransferInfo $value=null)
    {
        return $this->set(self::TRANSFERINFO, $value);
    }

    /**
     * Returns value of 'TransferInfo' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552TransferInfo
     */
    public function getTransferInfo()
    {
        return $this->get(self::TRANSFERINFO);
    }
}
}