<?php
/**
* Auto generated from SignatureInfo.proto
*
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * SignatureInfo message
 */
class SignatureInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SIGNINGTIME = 1;
    const SIGNATUREVERIFICATIONTIME = 2;
    const SIGNATUREVERIFICATIONRESULT = 3;
    const THUMBPRINT = 4;
    const SERIALNUMBER = 5;
    const ISSUER = 6;
    const STARTDATE = 7;
    const ENDDATE = 8;
    const ORGNAME = 9;
    const ORGINN = 10;
    const JOBTITLE = 11;
    const FIRSTNAME = 12;
    const SURNAME = 13;
    const SNILS = 14;
    const EMAIL = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SIGNINGTIME => array(
            'name' => 'SigningTime',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
        self::SIGNATUREVERIFICATIONTIME => array(
            'name' => 'SignatureVerificationTime',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
        self::SIGNATUREVERIFICATIONRESULT => array(
            'name' => 'SignatureVerificationResult',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\SignatureVerificationResult'
        ),
        self::THUMBPRINT => array(
            'name' => 'Thumbprint',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SERIALNUMBER => array(
            'name' => 'SerialNumber',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISSUER => array(
            'name' => 'Issuer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STARTDATE => array(
            'name' => 'StartDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENDDATE => array(
            'name' => 'EndDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORGNAME => array(
            'name' => 'OrgName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ORGINN => array(
            'name' => 'OrgInn',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::JOBTITLE => array(
            'name' => 'JobTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FIRSTNAME => array(
            'name' => 'FirstName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SURNAME => array(
            'name' => 'Surname',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SNILS => array(
            'name' => 'Snils',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EMAIL => array(
            'name' => 'Email',
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
        $this->values[self::SIGNINGTIME] = null;
        $this->values[self::SIGNATUREVERIFICATIONTIME] = null;
        $this->values[self::SIGNATUREVERIFICATIONRESULT] = null;
        $this->values[self::THUMBPRINT] = null;
        $this->values[self::SERIALNUMBER] = null;
        $this->values[self::ISSUER] = null;
        $this->values[self::STARTDATE] = null;
        $this->values[self::ENDDATE] = null;
        $this->values[self::ORGNAME] = null;
        $this->values[self::ORGINN] = null;
        $this->values[self::JOBTITLE] = null;
        $this->values[self::FIRSTNAME] = null;
        $this->values[self::SURNAME] = null;
        $this->values[self::SNILS] = null;
        $this->values[self::EMAIL] = null;
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
     * Sets value of 'SigningTime' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setSigningTime(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::SIGNINGTIME, $value);
    }

    /**
     * Returns value of 'SigningTime' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getSigningTime()
    {
        return $this->get(self::SIGNINGTIME);
    }

    /**
     * Sets value of 'SignatureVerificationTime' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setSignatureVerificationTime(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::SIGNATUREVERIFICATIONTIME, $value);
    }

    /**
     * Returns value of 'SignatureVerificationTime' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getSignatureVerificationTime()
    {
        return $this->get(self::SIGNATUREVERIFICATIONTIME);
    }

    /**
     * Sets value of 'SignatureVerificationResult' property
     *
     * @param \Diadoc\Api\Proto\SignatureVerificationResult $value Property value
     *
     * @return null
     */
    public function setSignatureVerificationResult(\Diadoc\Api\Proto\SignatureVerificationResult $value=null)
    {
        return $this->set(self::SIGNATUREVERIFICATIONRESULT, $value);
    }

    /**
     * Returns value of 'SignatureVerificationResult' property
     *
     * @return \Diadoc\Api\Proto\SignatureVerificationResult
     */
    public function getSignatureVerificationResult()
    {
        return $this->get(self::SIGNATUREVERIFICATIONRESULT);
    }

    /**
     * Sets value of 'Thumbprint' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setThumbprint($value)
    {
        return $this->set(self::THUMBPRINT, $value);
    }

    /**
     * Returns value of 'Thumbprint' property
     *
     * @return string
     */
    public function getThumbprint()
    {
        $value = $this->get(self::THUMBPRINT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SerialNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSerialNumber($value)
    {
        return $this->set(self::SERIALNUMBER, $value);
    }

    /**
     * Returns value of 'SerialNumber' property
     *
     * @return string
     */
    public function getSerialNumber()
    {
        $value = $this->get(self::SERIALNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Issuer' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIssuer($value)
    {
        return $this->set(self::ISSUER, $value);
    }

    /**
     * Returns value of 'Issuer' property
     *
     * @return string
     */
    public function getIssuer()
    {
        $value = $this->get(self::ISSUER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'StartDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartDate($value)
    {
        return $this->set(self::STARTDATE, $value);
    }

    /**
     * Returns value of 'StartDate' property
     *
     * @return string
     */
    public function getStartDate()
    {
        $value = $this->get(self::STARTDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'EndDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndDate($value)
    {
        return $this->set(self::ENDDATE, $value);
    }

    /**
     * Returns value of 'EndDate' property
     *
     * @return string
     */
    public function getEndDate()
    {
        $value = $this->get(self::ENDDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'OrgName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrgName($value)
    {
        return $this->set(self::ORGNAME, $value);
    }

    /**
     * Returns value of 'OrgName' property
     *
     * @return string
     */
    public function getOrgName()
    {
        $value = $this->get(self::ORGNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'OrgInn' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrgInn($value)
    {
        return $this->set(self::ORGINN, $value);
    }

    /**
     * Returns value of 'OrgInn' property
     *
     * @return string
     */
    public function getOrgInn()
    {
        $value = $this->get(self::ORGINN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'JobTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setJobTitle($value)
    {
        return $this->set(self::JOBTITLE, $value);
    }

    /**
     * Returns value of 'JobTitle' property
     *
     * @return string
     */
    public function getJobTitle()
    {
        $value = $this->get(self::JOBTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'FirstName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFirstName($value)
    {
        return $this->set(self::FIRSTNAME, $value);
    }

    /**
     * Returns value of 'FirstName' property
     *
     * @return string
     */
    public function getFirstName()
    {
        $value = $this->get(self::FIRSTNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Surname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSurname($value)
    {
        return $this->set(self::SURNAME, $value);
    }

    /**
     * Returns value of 'Surname' property
     *
     * @return string
     */
    public function getSurname()
    {
        $value = $this->get(self::SURNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Snils' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSnils($value)
    {
        return $this->set(self::SNILS, $value);
    }

    /**
     * Returns value of 'Snils' property
     *
     * @return string
     */
    public function getSnils()
    {
        $value = $this->get(self::SNILS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Email' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEmail($value)
    {
        return $this->set(self::EMAIL, $value);
    }

    /**
     * Returns value of 'Email' property
     *
     * @return string
     */
    public function getEmail()
    {
        $value = $this->get(self::EMAIL);
        return $value === null ? (string)$value : $value;
    }
}
}