<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * EncryptedInvoiceAttachment message
 */
class EncryptedInvoiceAttachment extends \ProtobufMessage
{
    /* Field index constants */
    const SIGNEDCONTENT = 1;
    const COMMENT = 3;
    const INITIALDOCUMENTIDS = 4;
    const SUBORDINATEDOCUMENTIDS = 5;
    const CUSTOMDOCUMENTID = 6;
    const CUSTOMDATA = 7;
    const METADATA = 8;
    const INVOICEMETADATA = 9;
    const INVOICECORRECTIONMETADATA = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SIGNEDCONTENT => array(
            'name' => 'SignedContent',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Events\SignedContent'
        ),
        self::COMMENT => array(
            'name' => 'Comment',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INITIALDOCUMENTIDS => array(
            'name' => 'InitialDocumentIds',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\DocumentId'
        ),
        self::SUBORDINATEDOCUMENTIDS => array(
            'name' => 'SubordinateDocumentIds',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\DocumentId'
        ),
        self::CUSTOMDOCUMENTID => array(
            'name' => 'CustomDocumentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CUSTOMDATA => array(
            'name' => 'CustomData',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\CustomDataItem'
        ),
        self::METADATA => array(
            'name' => 'Metadata',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Events\EncryptedDocumentMetadata'
        ),
        self::INVOICEMETADATA => array(
            'name' => 'InvoiceMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Events\EncryptedInvoiceMetadata'
        ),
        self::INVOICECORRECTIONMETADATA => array(
            'name' => 'InvoiceCorrectionMetadata',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Events\EncryptedInvoiceCorrectionMetadata'
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
        $this->values[self::SIGNEDCONTENT] = null;
        $this->values[self::COMMENT] = null;
        $this->values[self::INITIALDOCUMENTIDS] = array();
        $this->values[self::SUBORDINATEDOCUMENTIDS] = array();
        $this->values[self::CUSTOMDOCUMENTID] = null;
        $this->values[self::CUSTOMDATA] = array();
        $this->values[self::METADATA] = null;
        $this->values[self::INVOICEMETADATA] = null;
        $this->values[self::INVOICECORRECTIONMETADATA] = null;
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
     * Sets value of 'SignedContent' property
     *
     * @param \Diadoc\Api\Proto\Events\SignedContent $value Property value
     *
     * @return null
     */
    public function setSignedContent(\Diadoc\Api\Proto\Events\SignedContent $value=null)
    {
        return $this->set(self::SIGNEDCONTENT, $value);
    }

    /**
     * Returns value of 'SignedContent' property
     *
     * @return \Diadoc\Api\Proto\Events\SignedContent
     */
    public function getSignedContent()
    {
        return $this->get(self::SIGNEDCONTENT);
    }

    /**
     * Sets value of 'Comment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setComment($value)
    {
        return $this->set(self::COMMENT, $value);
    }

    /**
     * Returns value of 'Comment' property
     *
     * @return string
     */
    public function getComment()
    {
        $value = $this->get(self::COMMENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'InitialDocumentIds' list
     *
     * @param \Diadoc\Api\Proto\DocumentId $value Value to append
     *
     * @return null
     */
    public function appendInitialDocumentIds(\Diadoc\Api\Proto\DocumentId $value)
    {
        return $this->append(self::INITIALDOCUMENTIDS, $value);
    }

    /**
     * Clears 'InitialDocumentIds' list
     *
     * @return null
     */
    public function clearInitialDocumentIds()
    {
        return $this->clear(self::INITIALDOCUMENTIDS);
    }

    /**
     * Returns 'InitialDocumentIds' list
     *
     * @return \Diadoc\Api\Proto\DocumentId[]
     */
    public function getInitialDocumentIds()
    {
        return $this->get(self::INITIALDOCUMENTIDS);
    }

    /**
     * Returns 'InitialDocumentIds' iterator
     *
     * @return \ArrayIterator
     */
    public function getInitialDocumentIdsIterator()
    {
        return new \ArrayIterator($this->get(self::INITIALDOCUMENTIDS));
    }

    /**
     * Returns element from 'InitialDocumentIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\DocumentId
     */
    public function getInitialDocumentIdsAt($offset)
    {
        return $this->get(self::INITIALDOCUMENTIDS, $offset);
    }

    /**
     * Returns count of 'InitialDocumentIds' list
     *
     * @return int
     */
    public function getInitialDocumentIdsCount()
    {
        return $this->count(self::INITIALDOCUMENTIDS);
    }

    /**
     * Appends value to 'SubordinateDocumentIds' list
     *
     * @param \Diadoc\Api\Proto\DocumentId $value Value to append
     *
     * @return null
     */
    public function appendSubordinateDocumentIds(\Diadoc\Api\Proto\DocumentId $value)
    {
        return $this->append(self::SUBORDINATEDOCUMENTIDS, $value);
    }

    /**
     * Clears 'SubordinateDocumentIds' list
     *
     * @return null
     */
    public function clearSubordinateDocumentIds()
    {
        return $this->clear(self::SUBORDINATEDOCUMENTIDS);
    }

    /**
     * Returns 'SubordinateDocumentIds' list
     *
     * @return \Diadoc\Api\Proto\DocumentId[]
     */
    public function getSubordinateDocumentIds()
    {
        return $this->get(self::SUBORDINATEDOCUMENTIDS);
    }

    /**
     * Returns 'SubordinateDocumentIds' iterator
     *
     * @return \ArrayIterator
     */
    public function getSubordinateDocumentIdsIterator()
    {
        return new \ArrayIterator($this->get(self::SUBORDINATEDOCUMENTIDS));
    }

    /**
     * Returns element from 'SubordinateDocumentIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\DocumentId
     */
    public function getSubordinateDocumentIdsAt($offset)
    {
        return $this->get(self::SUBORDINATEDOCUMENTIDS, $offset);
    }

    /**
     * Returns count of 'SubordinateDocumentIds' list
     *
     * @return int
     */
    public function getSubordinateDocumentIdsCount()
    {
        return $this->count(self::SUBORDINATEDOCUMENTIDS);
    }

    /**
     * Sets value of 'CustomDocumentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomDocumentId($value)
    {
        return $this->set(self::CUSTOMDOCUMENTID, $value);
    }

    /**
     * Returns value of 'CustomDocumentId' property
     *
     * @return string
     */
    public function getCustomDocumentId()
    {
        $value = $this->get(self::CUSTOMDOCUMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'CustomData' list
     *
     * @param \Diadoc\Api\Proto\CustomDataItem $value Value to append
     *
     * @return null
     */
    public function appendCustomData(\Diadoc\Api\Proto\CustomDataItem $value)
    {
        return $this->append(self::CUSTOMDATA, $value);
    }

    /**
     * Clears 'CustomData' list
     *
     * @return null
     */
    public function clearCustomData()
    {
        return $this->clear(self::CUSTOMDATA);
    }

    /**
     * Returns 'CustomData' list
     *
     * @return \Diadoc\Api\Proto\CustomDataItem[]
     */
    public function getCustomData()
    {
        return $this->get(self::CUSTOMDATA);
    }

    /**
     * Returns 'CustomData' iterator
     *
     * @return \ArrayIterator
     */
    public function getCustomDataIterator()
    {
        return new \ArrayIterator($this->get(self::CUSTOMDATA));
    }

    /**
     * Returns element from 'CustomData' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\CustomDataItem
     */
    public function getCustomDataAt($offset)
    {
        return $this->get(self::CUSTOMDATA, $offset);
    }

    /**
     * Returns count of 'CustomData' list
     *
     * @return int
     */
    public function getCustomDataCount()
    {
        return $this->count(self::CUSTOMDATA);
    }

    /**
     * Sets value of 'Metadata' property
     *
     * @param \Diadoc\Api\Proto\Events\EncryptedDocumentMetadata $value Property value
     *
     * @return null
     */
    public function setMetadata(\Diadoc\Api\Proto\Events\EncryptedDocumentMetadata $value=null)
    {
        return $this->set(self::METADATA, $value);
    }

    /**
     * Returns value of 'Metadata' property
     *
     * @return \Diadoc\Api\Proto\Events\EncryptedDocumentMetadata
     */
    public function getMetadata()
    {
        return $this->get(self::METADATA);
    }

    /**
     * Sets value of 'InvoiceMetadata' property
     *
     * @param \Diadoc\Api\Proto\Events\EncryptedInvoiceMetadata $value Property value
     *
     * @return null
     */
    public function setInvoiceMetadata(\Diadoc\Api\Proto\Events\EncryptedInvoiceMetadata $value=null)
    {
        return $this->set(self::INVOICEMETADATA, $value);
    }

    /**
     * Returns value of 'InvoiceMetadata' property
     *
     * @return \Diadoc\Api\Proto\Events\EncryptedInvoiceMetadata
     */
    public function getInvoiceMetadata()
    {
        return $this->get(self::INVOICEMETADATA);
    }

    /**
     * Sets value of 'InvoiceCorrectionMetadata' property
     *
     * @param \Diadoc\Api\Proto\Events\EncryptedInvoiceCorrectionMetadata $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionMetadata(\Diadoc\Api\Proto\Events\EncryptedInvoiceCorrectionMetadata $value=null)
    {
        return $this->set(self::INVOICECORRECTIONMETADATA, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionMetadata' property
     *
     * @return \Diadoc\Api\Proto\Events\EncryptedInvoiceCorrectionMetadata
     */
    public function getInvoiceCorrectionMetadata()
    {
        return $this->get(self::INVOICECORRECTIONMETADATA);
    }
}
}