<?php
/**
* Auto generated from AcceptanceCertificateInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * AcceptanceCertificateSignatureInfo message
 */
class AcceptanceCertificateSignatureInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SIGNATUREDATE = 1;
    const OFFICIAL = 2;
    const ATTORNEY = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SIGNATUREDATE => array(
            'name' => 'SignatureDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OFFICIAL => array(
            'name' => 'Official',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Official'
        ),
        self::ATTORNEY => array(
            'name' => 'Attorney',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Attorney'
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
        $this->values[self::SIGNATUREDATE] = null;
        $this->values[self::OFFICIAL] = null;
        $this->values[self::ATTORNEY] = null;
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
     * Sets value of 'SignatureDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignatureDate($value)
    {
        return $this->set(self::SIGNATUREDATE, $value);
    }

    /**
     * Returns value of 'SignatureDate' property
     *
     * @return string
     */
    public function getSignatureDate()
    {
        $value = $this->get(self::SIGNATUREDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Official' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Official $value Property value
     *
     * @return null
     */
    public function setOfficial(\Diadoc\Api\Proto\Invoicing\Official $value=null)
    {
        return $this->set(self::OFFICIAL, $value);
    }

    /**
     * Returns value of 'Official' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Official
     */
    public function getOfficial()
    {
        return $this->get(self::OFFICIAL);
    }

    /**
     * Sets value of 'Attorney' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Attorney $value Property value
     *
     * @return null
     */
    public function setAttorney(\Diadoc\Api\Proto\Invoicing\Attorney $value=null)
    {
        return $this->set(self::ATTORNEY, $value);
    }

    /**
     * Returns value of 'Attorney' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Attorney
     */
    public function getAttorney()
    {
        return $this->get(self::ATTORNEY);
    }
}
}