<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
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
    const EXTENDEDSIGNER = 4;

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
        self::EXTENDEDSIGNER => array(
            'name' => 'ExtendedSigner',
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
        $this->values[self::DOCUMENTID] = null;
        $this->values[self::TOBOXID] = null;
        $this->values[self::SIGNER] = null;
        $this->values[self::EXTENDEDSIGNER] = array();
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

    /**
     * Appends value to 'ExtendedSigner' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner $value Value to append
     *
     * @return null
     */
    public function appendExtendedSigner(\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner $value)
    {
        return $this->append(self::EXTENDEDSIGNER, $value);
    }

    /**
     * Clears 'ExtendedSigner' list
     *
     * @return null
     */
    public function clearExtendedSigner()
    {
        return $this->clear(self::EXTENDEDSIGNER);
    }

    /**
     * Returns 'ExtendedSigner' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner[]
     */
    public function getExtendedSigner()
    {
        return $this->get(self::EXTENDEDSIGNER);
    }

    /**
     * Returns 'ExtendedSigner' iterator
     *
     * @return \ArrayIterator
     */
    public function getExtendedSignerIterator()
    {
        return new \ArrayIterator($this->get(self::EXTENDEDSIGNER));
    }

    /**
     * Returns element from 'ExtendedSigner' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner
     */
    public function getExtendedSignerAt($offset)
    {
        return $this->get(self::EXTENDEDSIGNER, $offset);
    }

    /**
     * Returns count of 'ExtendedSigner' list
     *
     * @return int
     */
    public function getExtendedSignerCount()
    {
        return $this->count(self::EXTENDEDSIGNER);
    }
}
}