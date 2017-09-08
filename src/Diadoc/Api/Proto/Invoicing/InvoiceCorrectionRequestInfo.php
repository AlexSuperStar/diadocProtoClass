<?php
/**
* Auto generated from InvoiceCorrectionRequestInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * InvoiceCorrectionRequestInfo message
 */
class InvoiceCorrectionRequestInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ERRORMESSAGE = 1;
    const SIGNER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ERRORMESSAGE => array(
            'name' => 'ErrorMessage',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNER => array(
            'name' => 'Signer',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Signer'
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
        $this->values[self::ERRORMESSAGE] = null;
        $this->values[self::SIGNER] = null;
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
     * Sets value of 'ErrorMessage' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrorMessage($value)
    {
        return $this->set(self::ERRORMESSAGE, $value);
    }

    /**
     * Returns value of 'ErrorMessage' property
     *
     * @return string
     */
    public function getErrorMessage()
    {
        $value = $this->get(self::ERRORMESSAGE);
        return $value === null ? (string)$value : $value;
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
}
}