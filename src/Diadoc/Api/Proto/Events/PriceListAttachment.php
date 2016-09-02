<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * PriceListAttachment message
 */
class PriceListAttachment extends \ProtobufMessage
{
    /* Field index constants */
    const SIGNEDCONTENT = 1;
    const FILENAME = 2;
    const COMMENT = 3;
    const INITIALDOCUMENTIDS = 4;
    const SUBORDINATEDOCUMENTIDS = 5;
    const CUSTOMDOCUMENTID = 6;
    const DOCUMENTDATE = 7;
    const DOCUMENTNUMBER = 8;
    const PRICELISTEFFECTIVEDATE = 9;
    const CONTRACTDOCUMENTDATE = 10;
    const CONTRACTDOCUMENTNUMBER = 11;
    const NEEDRECEIPT = 12;
    const CUSTOMDATA = 13;

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
        self::CUSTOMDOCUMENTID => array(
            'name' => 'CustomDocumentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTDATE => array(
            'name' => 'DocumentDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTNUMBER => array(
            'name' => 'DocumentNumber',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRICELISTEFFECTIVEDATE => array(
            'name' => 'PriceListEffectiveDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTRACTDOCUMENTDATE => array(
            'name' => 'ContractDocumentDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTRACTDOCUMENTNUMBER => array(
            'name' => 'ContractDocumentNumber',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NEEDRECEIPT => array(
            'default' => false,
            'name' => 'NeedReceipt',
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
        $this->values[self::CUSTOMDOCUMENTID] = null;
        $this->values[self::DOCUMENTDATE] = null;
        $this->values[self::DOCUMENTNUMBER] = null;
        $this->values[self::PRICELISTEFFECTIVEDATE] = null;
        $this->values[self::CONTRACTDOCUMENTDATE] = null;
        $this->values[self::CONTRACTDOCUMENTNUMBER] = null;
        $this->values[self::NEEDRECEIPT] = self::$fields[self::NEEDRECEIPT]['default'];
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
     * Sets value of 'PriceListEffectiveDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPriceListEffectiveDate($value)
    {
        return $this->set(self::PRICELISTEFFECTIVEDATE, $value);
    }

    /**
     * Returns value of 'PriceListEffectiveDate' property
     *
     * @return string
     */
    public function getPriceListEffectiveDate()
    {
        $value = $this->get(self::PRICELISTEFFECTIVEDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ContractDocumentDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractDocumentDate($value)
    {
        return $this->set(self::CONTRACTDOCUMENTDATE, $value);
    }

    /**
     * Returns value of 'ContractDocumentDate' property
     *
     * @return string
     */
    public function getContractDocumentDate()
    {
        $value = $this->get(self::CONTRACTDOCUMENTDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ContractDocumentNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractDocumentNumber($value)
    {
        return $this->set(self::CONTRACTDOCUMENTNUMBER, $value);
    }

    /**
     * Returns value of 'ContractDocumentNumber' property
     *
     * @return string
     */
    public function getContractDocumentNumber()
    {
        $value = $this->get(self::CONTRACTDOCUMENTNUMBER);
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