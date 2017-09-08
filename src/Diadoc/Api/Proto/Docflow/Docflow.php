<?php
/**
* Auto generated from Docflow.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * Docflow message
 */
class Docflow extends \ProtobufMessage
{
    /* Field index constants */
    const ISFINISHED = 1;
    const DOCUMENTATTACHMENT = 2;
    const DEPARTMENTID = 3;
    const DOCUMENTISDELETED = 4;
    const DOCFLOWSTATUS = 5;
    const SENDTIMESTAMP = 6;
    const DELIVERYTIMESTAMP = 7;
    const INBOUNDINVOICEDOCFLOW = 8;
    const OUTBOUNDINVOICEDOCFLOW = 9;
    const XMLBILATERALDOCFLOW = 10;
    const BILATERALDOCFLOW = 11;
    const UNILATERALDOCFLOW = 12;
    const REVOCATIONDOCFLOW = 13;
    const RESOLUTIONDOCFLOW = 14;
    const CANDOCUMENTBEREVOKEDUNILATERALLYBYSENDER = 15;
    const PACKETID = 16;
    const CUSTOMDATA = 17;
    const INBOUNDUNIVERSALTRANSFERDOCUMENTDOCFLOW = 18;
    const OUTBOUNDUNIVERSALTRANSFERDOCUMENTDOCFLOW = 19;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ISFINISHED => array(
            'name' => 'IsFinished',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DOCUMENTATTACHMENT => array(
            'name' => 'DocumentAttachment',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\SignedAttachment'
        ),
        self::DEPARTMENTID => array(
            'name' => 'DepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTISDELETED => array(
            'name' => 'DocumentIsDeleted',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DOCFLOWSTATUS => array(
            'name' => 'DocflowStatus',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\DocflowStatus'
        ),
        self::SENDTIMESTAMP => array(
            'name' => 'SendTimestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
        self::DELIVERYTIMESTAMP => array(
            'name' => 'DeliveryTimestamp',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Timestamp'
        ),
        self::INBOUNDINVOICEDOCFLOW => array(
            'name' => 'InboundInvoiceDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\InboundInvoiceDocflow'
        ),
        self::OUTBOUNDINVOICEDOCFLOW => array(
            'name' => 'OutboundInvoiceDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\OutboundInvoiceDocflow'
        ),
        self::XMLBILATERALDOCFLOW => array(
            'name' => 'XmlBilateralDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\XmlBilateralDocflow'
        ),
        self::BILATERALDOCFLOW => array(
            'name' => 'BilateralDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\BilateralDocflow'
        ),
        self::UNILATERALDOCFLOW => array(
            'name' => 'UnilateralDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\UnilateralDocflow'
        ),
        self::REVOCATIONDOCFLOW => array(
            'name' => 'RevocationDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\RevocationDocflow'
        ),
        self::RESOLUTIONDOCFLOW => array(
            'name' => 'ResolutionDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\ResolutionDocflow'
        ),
        self::CANDOCUMENTBEREVOKEDUNILATERALLYBYSENDER => array(
            'name' => 'CanDocumentBeRevokedUnilaterallyBySender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PACKETID => array(
            'name' => 'PacketId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CUSTOMDATA => array(
            'name' => 'CustomData',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\CustomDataItem'
        ),
        self::INBOUNDUNIVERSALTRANSFERDOCUMENTDOCFLOW => array(
            'name' => 'InboundUniversalTransferDocumentDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\InboundUniversalTransferDocumentDocflow'
        ),
        self::OUTBOUNDUNIVERSALTRANSFERDOCUMENTDOCFLOW => array(
            'name' => 'OutboundUniversalTransferDocumentDocflow',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\OutboundUniversalTransferDocumentDocflow'
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
        $this->values[self::ISFINISHED] = null;
        $this->values[self::DOCUMENTATTACHMENT] = null;
        $this->values[self::DEPARTMENTID] = null;
        $this->values[self::DOCUMENTISDELETED] = null;
        $this->values[self::DOCFLOWSTATUS] = null;
        $this->values[self::SENDTIMESTAMP] = null;
        $this->values[self::DELIVERYTIMESTAMP] = null;
        $this->values[self::INBOUNDINVOICEDOCFLOW] = null;
        $this->values[self::OUTBOUNDINVOICEDOCFLOW] = null;
        $this->values[self::XMLBILATERALDOCFLOW] = null;
        $this->values[self::BILATERALDOCFLOW] = null;
        $this->values[self::UNILATERALDOCFLOW] = null;
        $this->values[self::REVOCATIONDOCFLOW] = null;
        $this->values[self::RESOLUTIONDOCFLOW] = null;
        $this->values[self::CANDOCUMENTBEREVOKEDUNILATERALLYBYSENDER] = null;
        $this->values[self::PACKETID] = null;
        $this->values[self::CUSTOMDATA] = array();
        $this->values[self::INBOUNDUNIVERSALTRANSFERDOCUMENTDOCFLOW] = null;
        $this->values[self::OUTBOUNDUNIVERSALTRANSFERDOCUMENTDOCFLOW] = null;
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
     * Sets value of 'IsFinished' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsFinished($value)
    {
        return $this->set(self::ISFINISHED, $value);
    }

    /**
     * Returns value of 'IsFinished' property
     *
     * @return boolean
     */
    public function getIsFinished()
    {
        $value = $this->get(self::ISFINISHED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'DocumentAttachment' property
     *
     * @param \Diadoc\Api\Proto\Docflow\SignedAttachment $value Property value
     *
     * @return null
     */
    public function setDocumentAttachment(\Diadoc\Api\Proto\Docflow\SignedAttachment $value=null)
    {
        return $this->set(self::DOCUMENTATTACHMENT, $value);
    }

    /**
     * Returns value of 'DocumentAttachment' property
     *
     * @return \Diadoc\Api\Proto\Docflow\SignedAttachment
     */
    public function getDocumentAttachment()
    {
        return $this->get(self::DOCUMENTATTACHMENT);
    }

    /**
     * Sets value of 'DepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDepartmentId($value)
    {
        return $this->set(self::DEPARTMENTID, $value);
    }

    /**
     * Returns value of 'DepartmentId' property
     *
     * @return string
     */
    public function getDepartmentId()
    {
        $value = $this->get(self::DEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentIsDeleted' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDocumentIsDeleted($value)
    {
        return $this->set(self::DOCUMENTISDELETED, $value);
    }

    /**
     * Returns value of 'DocumentIsDeleted' property
     *
     * @return boolean
     */
    public function getDocumentIsDeleted()
    {
        $value = $this->get(self::DOCUMENTISDELETED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'DocflowStatus' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocflowStatus $value Property value
     *
     * @return null
     */
    public function setDocflowStatus(\Diadoc\Api\Proto\Docflow\DocflowStatus $value=null)
    {
        return $this->set(self::DOCFLOWSTATUS, $value);
    }

    /**
     * Returns value of 'DocflowStatus' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocflowStatus
     */
    public function getDocflowStatus()
    {
        return $this->get(self::DOCFLOWSTATUS);
    }

    /**
     * Sets value of 'SendTimestamp' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setSendTimestamp(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::SENDTIMESTAMP, $value);
    }

    /**
     * Returns value of 'SendTimestamp' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getSendTimestamp()
    {
        return $this->get(self::SENDTIMESTAMP);
    }

    /**
     * Sets value of 'DeliveryTimestamp' property
     *
     * @param \Diadoc\Api\Proto\Timestamp $value Property value
     *
     * @return null
     */
    public function setDeliveryTimestamp(\Diadoc\Api\Proto\Timestamp $value=null)
    {
        return $this->set(self::DELIVERYTIMESTAMP, $value);
    }

    /**
     * Returns value of 'DeliveryTimestamp' property
     *
     * @return \Diadoc\Api\Proto\Timestamp
     */
    public function getDeliveryTimestamp()
    {
        return $this->get(self::DELIVERYTIMESTAMP);
    }

    /**
     * Sets value of 'InboundInvoiceDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\InboundInvoiceDocflow $value Property value
     *
     * @return null
     */
    public function setInboundInvoiceDocflow(\Diadoc\Api\Proto\Docflow\InboundInvoiceDocflow $value=null)
    {
        return $this->set(self::INBOUNDINVOICEDOCFLOW, $value);
    }

    /**
     * Returns value of 'InboundInvoiceDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\InboundInvoiceDocflow
     */
    public function getInboundInvoiceDocflow()
    {
        return $this->get(self::INBOUNDINVOICEDOCFLOW);
    }

    /**
     * Sets value of 'OutboundInvoiceDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\OutboundInvoiceDocflow $value Property value
     *
     * @return null
     */
    public function setOutboundInvoiceDocflow(\Diadoc\Api\Proto\Docflow\OutboundInvoiceDocflow $value=null)
    {
        return $this->set(self::OUTBOUNDINVOICEDOCFLOW, $value);
    }

    /**
     * Returns value of 'OutboundInvoiceDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\OutboundInvoiceDocflow
     */
    public function getOutboundInvoiceDocflow()
    {
        return $this->get(self::OUTBOUNDINVOICEDOCFLOW);
    }

    /**
     * Sets value of 'XmlBilateralDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\XmlBilateralDocflow $value Property value
     *
     * @return null
     */
    public function setXmlBilateralDocflow(\Diadoc\Api\Proto\Docflow\XmlBilateralDocflow $value=null)
    {
        return $this->set(self::XMLBILATERALDOCFLOW, $value);
    }

    /**
     * Returns value of 'XmlBilateralDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\XmlBilateralDocflow
     */
    public function getXmlBilateralDocflow()
    {
        return $this->get(self::XMLBILATERALDOCFLOW);
    }

    /**
     * Sets value of 'BilateralDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\BilateralDocflow $value Property value
     *
     * @return null
     */
    public function setBilateralDocflow(\Diadoc\Api\Proto\Docflow\BilateralDocflow $value=null)
    {
        return $this->set(self::BILATERALDOCFLOW, $value);
    }

    /**
     * Returns value of 'BilateralDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\BilateralDocflow
     */
    public function getBilateralDocflow()
    {
        return $this->get(self::BILATERALDOCFLOW);
    }

    /**
     * Sets value of 'UnilateralDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\UnilateralDocflow $value Property value
     *
     * @return null
     */
    public function setUnilateralDocflow(\Diadoc\Api\Proto\Docflow\UnilateralDocflow $value=null)
    {
        return $this->set(self::UNILATERALDOCFLOW, $value);
    }

    /**
     * Returns value of 'UnilateralDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\UnilateralDocflow
     */
    public function getUnilateralDocflow()
    {
        return $this->get(self::UNILATERALDOCFLOW);
    }

    /**
     * Sets value of 'RevocationDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\RevocationDocflow $value Property value
     *
     * @return null
     */
    public function setRevocationDocflow(\Diadoc\Api\Proto\Docflow\RevocationDocflow $value=null)
    {
        return $this->set(self::REVOCATIONDOCFLOW, $value);
    }

    /**
     * Returns value of 'RevocationDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\RevocationDocflow
     */
    public function getRevocationDocflow()
    {
        return $this->get(self::REVOCATIONDOCFLOW);
    }

    /**
     * Sets value of 'ResolutionDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\ResolutionDocflow $value Property value
     *
     * @return null
     */
    public function setResolutionDocflow(\Diadoc\Api\Proto\Docflow\ResolutionDocflow $value=null)
    {
        return $this->set(self::RESOLUTIONDOCFLOW, $value);
    }

    /**
     * Returns value of 'ResolutionDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\ResolutionDocflow
     */
    public function getResolutionDocflow()
    {
        return $this->get(self::RESOLUTIONDOCFLOW);
    }

    /**
     * Sets value of 'CanDocumentBeRevokedUnilaterallyBySender' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCanDocumentBeRevokedUnilaterallyBySender($value)
    {
        return $this->set(self::CANDOCUMENTBEREVOKEDUNILATERALLYBYSENDER, $value);
    }

    /**
     * Returns value of 'CanDocumentBeRevokedUnilaterallyBySender' property
     *
     * @return boolean
     */
    public function getCanDocumentBeRevokedUnilaterallyBySender()
    {
        $value = $this->get(self::CANDOCUMENTBEREVOKEDUNILATERALLYBYSENDER);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'PacketId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPacketId($value)
    {
        return $this->set(self::PACKETID, $value);
    }

    /**
     * Returns value of 'PacketId' property
     *
     * @return string
     */
    public function getPacketId()
    {
        $value = $this->get(self::PACKETID);
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
     * Sets value of 'InboundUniversalTransferDocumentDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\InboundUniversalTransferDocumentDocflow $value Property value
     *
     * @return null
     */
    public function setInboundUniversalTransferDocumentDocflow(\Diadoc\Api\Proto\Docflow\InboundUniversalTransferDocumentDocflow $value=null)
    {
        return $this->set(self::INBOUNDUNIVERSALTRANSFERDOCUMENTDOCFLOW, $value);
    }

    /**
     * Returns value of 'InboundUniversalTransferDocumentDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\InboundUniversalTransferDocumentDocflow
     */
    public function getInboundUniversalTransferDocumentDocflow()
    {
        return $this->get(self::INBOUNDUNIVERSALTRANSFERDOCUMENTDOCFLOW);
    }

    /**
     * Sets value of 'OutboundUniversalTransferDocumentDocflow' property
     *
     * @param \Diadoc\Api\Proto\Docflow\OutboundUniversalTransferDocumentDocflow $value Property value
     *
     * @return null
     */
    public function setOutboundUniversalTransferDocumentDocflow(\Diadoc\Api\Proto\Docflow\OutboundUniversalTransferDocumentDocflow $value=null)
    {
        return $this->set(self::OUTBOUNDUNIVERSALTRANSFERDOCUMENTDOCFLOW, $value);
    }

    /**
     * Returns value of 'OutboundUniversalTransferDocumentDocflow' property
     *
     * @return \Diadoc\Api\Proto\Docflow\OutboundUniversalTransferDocumentDocflow
     */
    public function getOutboundUniversalTransferDocumentDocflow()
    {
        return $this->get(self::OUTBOUNDUNIVERSALTRANSFERDOCUMENTDOCFLOW);
    }
}
}