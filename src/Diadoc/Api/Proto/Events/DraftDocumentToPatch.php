<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * DraftDocumentToPatch message
 */
class DraftDocumentToPatch extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTID = 1;
    const TOBOXID = 2;
    const SIGNER = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTID => array(
            'name' => 'DocumentId',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\DocumentId'
        ),
        self::TOBOXID => array(
            'name' => 'ToBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNER => array(
            'name' => 'Signer',
            'required' => false,
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
        $this->values[self::DOCUMENTID] = null;
        $this->values[self::TOBOXID] = null;
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
     * Sets value of 'DocumentId' property
     *
     * @param \Diadoc\Api\Proto\DocumentId $value Property value
     *
     * @return null
     */
    public function setDocumentId(\Diadoc\Api\Proto\DocumentId $value=null)
    {
        return $this->set(self::DOCUMENTID, $value);
    }

    /**
     * Returns value of 'DocumentId' property
     *
     * @return \Diadoc\Api\Proto\DocumentId
     */
    public function getDocumentId()
    {
        return $this->get(self::DOCUMENTID);
    }

    /**
     * Sets value of 'ToBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToBoxId($value)
    {
        return $this->set(self::TOBOXID, $value);
    }

    /**
     * Returns value of 'ToBoxId' property
     *
     * @return string
     */
    public function getToBoxId()
    {
        $value = $this->get(self::TOBOXID);
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