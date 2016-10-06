<?php
/**
 * Auto generated from Recognition.proto at 2016-10-06 18:08:24
 *
 * Diadoc.Api.Proto.Recognition package
 */

namespace Diadoc\Api\Proto\Recognition {
/**
 * Recognized message
 */
class Recognized extends \ProtobufMessage
{
    /* Field index constants */
    const RECOGNITIONID = 1;
    const ERRORMESSAGE = 2;
    const FILENAME = 3;
    const DOCUMENTTYPE = 4;
    const CONTENT = 5;
    const INVOICE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RECOGNITIONID => array(
            'name' => 'RecognitionId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ERRORMESSAGE => array(
            'name' => 'ErrorMessage',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FILENAME => array(
            'name' => 'FileName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTTYPE => array(
            'default' => \Diadoc\Api\Proto\Recognition\RecognizedDocumentType::UnknownRecognizedDocumentType,
            'name' => 'DocumentType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTENT => array(
            'name' => 'Content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVOICE => array(
            'name' => 'Invoice',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Recognition\RecognizedInvoice'
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
        $this->values[self::RECOGNITIONID] = null;
        $this->values[self::ERRORMESSAGE] = null;
        $this->values[self::FILENAME] = null;
        $this->values[self::DOCUMENTTYPE] = self::$fields[self::DOCUMENTTYPE]['default'];
        $this->values[self::CONTENT] = null;
        $this->values[self::INVOICE] = null;
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
     * Sets value of 'RecognitionId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecognitionId($value)
    {
        return $this->set(self::RECOGNITIONID, $value);
    }

    /**
     * Returns value of 'RecognitionId' property
     *
     * @return string
     */
    public function getRecognitionId()
    {
        $value = $this->get(self::RECOGNITIONID);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'FileName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFileName($value)
    {
        return $this->set(self::FILENAME, $value);
    }

    /**
     * Returns value of 'FileName' property
     *
     * @return string
     */
    public function getFileName()
    {
        $value = $this->get(self::FILENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDocumentType($value)
    {
        return $this->set(self::DOCUMENTTYPE, $value);
    }

    /**
     * Returns value of 'DocumentType' property
     *
     * @return integer
     */
    public function getDocumentType()
    {
        $value = $this->get(self::DOCUMENTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'Content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'Content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::CONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Invoice' property
     *
     * @param \Diadoc\Api\Proto\Recognition\RecognizedInvoice $value Property value
     *
     * @return null
     */
    public function setInvoice(\Diadoc\Api\Proto\Recognition\RecognizedInvoice $value=null)
    {
        return $this->set(self::INVOICE, $value);
    }

    /**
     * Returns value of 'Invoice' property
     *
     * @return \Diadoc\Api\Proto\Recognition\RecognizedInvoice
     */
    public function getInvoice()
    {
        return $this->get(self::INVOICE);
    }
}
}