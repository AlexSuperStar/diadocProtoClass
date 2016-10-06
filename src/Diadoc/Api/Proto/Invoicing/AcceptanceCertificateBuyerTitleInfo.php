<?php
/**
 * Auto generated from AcceptanceCertificateInfo.proto at 2016-10-06 18:08:58
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * AcceptanceCertificateBuyerTitleInfo message
 */
class AcceptanceCertificateBuyerTitleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const COMPLAINTS = 1;
    const SIGNATURE = 2;
    const SIGNER = 3;
    const ADDITIONALINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COMPLAINTS => array(
            'name' => 'Complaints',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::COMPLAINTS] = null;
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
     * Sets value of 'Complaints' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setComplaints($value)
    {
        return $this->set(self::COMPLAINTS, $value);
    }

    /**
     * Returns value of 'Complaints' property
     *
     * @return string
     */
    public function getComplaints()
    {
        $value = $this->get(self::COMPLAINTS);
        return $value === null ? (string)$value : $value;
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