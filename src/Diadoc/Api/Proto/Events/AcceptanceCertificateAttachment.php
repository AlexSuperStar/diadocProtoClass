<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * AcceptanceCertificateAttachment message
 */
class AcceptanceCertificateAttachment extends \ProtobufMessage
{
    /* Field index constants */
    const SIGNEDCONTENT = 1;
    const FILENAME = 2;
    const COMMENT = 3;
    const INITIALDOCUMENTIDS = 4;
    const SUBORDINATEDOCUMENTIDS = 5;
    const DOCUMENTDATE = 6;
    const DOCUMENTNUMBER = 7;
    const TOTAL = 8;
    const CUSTOMDOCUMENTID = 9;
    const VAT = 10;
    const GROUNDS = 11;
    const NEEDRECEIPT = 12;
    const NEEDRECIPIENTSIGNATURE = 13;
    const CUSTOMDATA = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SIGNEDCONTENT => array(
            'name' => 'SignedContent',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Events\SignedContent'
        ),
        self::FILENAME => array(
            'name' => 'FileName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::DOCUMENTDATE => array(
            'name' => 'DocumentDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTNUMBER => array(
            'default' => '',
            'name' => 'DocumentNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTAL => array(
            'name' => 'Total',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CUSTOMDOCUMENTID => array(
            'name' => 'CustomDocumentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VAT => array(
            'name' => 'Vat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GROUNDS => array(
            'name' => 'Grounds',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NEEDRECEIPT => array(
            'default' => false,
            'name' => 'NeedReceipt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::NEEDRECIPIENTSIGNATURE => array(
            'default' => true,
            'name' => 'NeedRecipientSignature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CUSTOMDATA => array(
            'name' => 'CustomData',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\CustomDataItem'
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
        $this->values[self::FILENAME] = null;
        $this->values[self::COMMENT] = null;
        $this->values[self::INITIALDOCUMENTIDS] = array();
        $this->values[self::SUBORDINATEDOCUMENTIDS] = array();
        $this->values[self::DOCUMENTDATE] = null;
        $this->values[self::DOCUMENTNUMBER] = self::$fields[self::DOCUMENTNUMBER]['default'];
        $this->values[self::TOTAL] = null;
        $this->values[self::CUSTOMDOCUMENTID] = null;
        $this->values[self::VAT] = null;
        $this->values[self::GROUNDS] = null;
        $this->values[self::NEEDRECEIPT] = self::$fields[self::NEEDRECEIPT]['default'];
        $this->values[self::NEEDRECIPIENTSIGNATURE] = self::$fields[self::NEEDRECIPIENTSIGNATURE]['default'];
        $this->values[self::CUSTOMDATA] = array();
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
     * Sets value of 'Total' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotal($value)
    {
        return $this->set(self::TOTAL, $value);
    }

    /**
     * Returns value of 'Total' property
     *
     * @return string
     */
    public function getTotal()
    {
        $value = $this->get(self::TOTAL);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'Vat' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVat($value)
    {
        return $this->set(self::VAT, $value);
    }

    /**
     * Returns value of 'Vat' property
     *
     * @return string
     */
    public function getVat()
    {
        $value = $this->get(self::VAT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Grounds' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrounds($value)
    {
        return $this->set(self::GROUNDS, $value);
    }

    /**
     * Returns value of 'Grounds' property
     *
     * @return string
     */
    public function getGrounds()
    {
        $value = $this->get(self::GROUNDS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'NeedReceipt' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setNeedReceipt($value)
    {
        return $this->set(self::NEEDRECEIPT, $value);
    }

    /**
     * Returns value of 'NeedReceipt' property
     *
     * @return boolean
     */
    public function getNeedReceipt()
    {
        $value = $this->get(self::NEEDRECEIPT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'NeedRecipientSignature' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setNeedRecipientSignature($value)
    {
        return $this->set(self::NEEDRECIPIENTSIGNATURE, $value);
    }

    /**
     * Returns value of 'NeedRecipientSignature' property
     *
     * @return boolean
     */
    public function getNeedRecipientSignature()
    {
        $value = $this->get(self::NEEDRECIPIENTSIGNATURE);
        return $value === null ? (boolean)$value : $value;
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
}
}