<?php
/**
 * Auto generated from AcceptanceCertificateInfo.proto at 2016-10-06 18:08:58
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * AcceptanceCertificateSellerTitleInfo message
 */
class AcceptanceCertificateSellerTitleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SELLER = 1;
    const BUYER = 2;
    const DOCUMENTDATE = 3;
    const DOCUMENTNUMBER = 4;
    const DOCUMENTTITLE = 5;
    const WORKS = 6;
    const SIGNATURE = 7;
    const SIGNER = 8;
    const ADDITIONALINFO = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SELLER => array(
            'name' => 'Seller',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo'
        ),
        self::BUYER => array(
            'name' => 'Buyer',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\DocflowParticipant'
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
        self::DOCUMENTTITLE => array(
            'name' => 'DocumentTitle',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WORKS => array(
            'name' => 'Works',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\WorkDescription'
        ),
        self::SIGNATURE => array(
            'name' => 'Signature',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\AcceptanceCertificateSignatureInfo'
        ),
        self::SIGNER => array(
            'name' => 'Signer',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Signer'
        ),
        self::ADDITIONALINFO => array(
            'name' => 'AdditionalInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::DOCUMENTDATE] = null;
        $this->values[self::DOCUMENTNUMBER] = null;
        $this->values[self::DOCUMENTTITLE] = null;
        $this->values[self::WORKS] = array();
        $this->values[self::SIGNATURE] = null;
        $this->values[self::SIGNER] = null;
        $this->values[self::ADDITIONALINFO] = null;
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
     * @param \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo $value Property value
     *
     * @return null
     */
    public function setSeller(\Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo $value=null)
    {
        return $this->set(self::SELLER, $value);
    }

    /**
     * Returns value of 'Seller' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo
     */
    public function getSeller()
    {
        return $this->get(self::SELLER);
    }

    /**
     * Sets value of 'Buyer' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\DocflowParticipant $value Property value
     *
     * @return null
     */
    public function setBuyer(\Diadoc\Api\Proto\Invoicing\DocflowParticipant $value=null)
    {
        return $this->set(self::BUYER, $value);
    }

    /**
     * Returns value of 'Buyer' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\DocflowParticipant
     */
    public function getBuyer()
    {
        return $this->get(self::BUYER);
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
     * Sets value of 'DocumentTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDocumentTitle($value)
    {
        return $this->set(self::DOCUMENTTITLE, $value);
    }

    /**
     * Returns value of 'DocumentTitle' property
     *
     * @return string
     */
    public function getDocumentTitle()
    {
        $value = $this->get(self::DOCUMENTTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'Works' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\WorkDescription $value Value to append
     *
     * @return null
     */
    public function appendWorks(\Diadoc\Api\Proto\Invoicing\WorkDescription $value)
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
     * @return \Diadoc\Api\Proto\Invoicing\WorkDescription[]
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
     * @return \Diadoc\Api\Proto\Invoicing\WorkDescription
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
     * Sets value of 'Signature' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\AcceptanceCertificateSignatureInfo $value Property value
     *
     * @return null
     */
    public function setSignature(\Diadoc\Api\Proto\Invoicing\AcceptanceCertificateSignatureInfo $value=null)
    {
        return $this->set(self::SIGNATURE, $value);
    }

    /**
     * Returns value of 'Signature' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\AcceptanceCertificateSignatureInfo
     */
    public function getSignature()
    {
        return $this->get(self::SIGNATURE);
    }

    /**
     * Sets value of 'Signer' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Signer $value Property value
     *
     * @return null
     */
    public function setSigner(\Diadoc\Api\Proto\Invoicing\Signer $value=null)
    {
        return $this->set(self::SIGNER, $value);
    }

    /**
     * Returns value of 'Signer' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Signer
     */
    public function getSigner()
    {
        return $this->get(self::SIGNER);
    }

    /**
     * Sets value of 'AdditionalInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAdditionalInfo($value)
    {
        return $this->set(self::ADDITIONALINFO, $value);
    }

    /**
     * Returns value of 'AdditionalInfo' property
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        $value = $this->get(self::ADDITIONALINFO);
        return $value === null ? (string)$value : $value;
    }
}
}