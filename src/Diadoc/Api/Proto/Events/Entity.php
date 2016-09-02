<?php
/**
 * Auto generated from DiadocMessage-GetApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * Entity message
 */
class Entity extends \ProtobufMessage
{
    /* Field index constants */
    const ENTITYTYPE = 1;
    const ENTITYID = 2;
    const PARENTENTITYID = 3;
    const CONTENT = 4;
    const ATTACHMENTTYPE = 5;
    const FILENAME = 6;
    const NEEDRECIPIENTSIGNATURE = 7;
    const SIGNERBOXID = 8;
    const NOTDELIVEREDEVENTID = 10;
    const DOCUMENTINFO = 11;
    const RAWCREATIONDATE = 12;
    const RESOLUTIONINFO = 13;
    const SIGNERDEPARTMENTID = 14;
    const RESOLUTIONREQUESTINFO = 15;
    const RESOLUTIONREQUESTDENIALINFO = 16;
    const NEEDRECEIPT = 17;
    const PACKETID = 18;
    const ISAPPROVEMENTSIGNATURE = 19;
    const ISENCRYPTEDCONTENT = 20;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENTITYTYPE => array(
            'default' => \Diadoc\Api\Proto\Events\EntityType::UnknownEntityType,
            'name' => 'EntityType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENTITYID => array(
            'name' => 'EntityId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PARENTENTITYID => array(
            'name' => 'ParentEntityId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTENT => array(
            'name' => 'Content',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Content'
        ),
        self::ATTACHMENTTYPE => array(
            'default' => \Diadoc\Api\Proto\Events\AttachmentType::UnknownAttachmentType,
            'name' => 'AttachmentType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FILENAME => array(
            'name' => 'FileName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NEEDRECIPIENTSIGNATURE => array(
            'default' => false,
            'name' => 'NeedRecipientSignature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::SIGNERBOXID => array(
            'name' => 'SignerBoxId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOTDELIVEREDEVENTID => array(
            'name' => 'NotDeliveredEventId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTINFO => array(
            'name' => 'DocumentInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Documents\Document'
        ),
        self::RAWCREATIONDATE => array(
            'default' => 0,
            'name' => 'RawCreationDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FIXED64,
        ),
        self::RESOLUTIONINFO => array(
            'name' => 'ResolutionInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Events\ResolutionInfo'
        ),
        self::SIGNERDEPARTMENTID => array(
            'name' => 'SignerDepartmentId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RESOLUTIONREQUESTINFO => array(
            'name' => 'ResolutionRequestInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Events\ResolutionRequestInfo'
        ),
        self::RESOLUTIONREQUESTDENIALINFO => array(
            'name' => 'ResolutionRequestDenialInfo',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Events\ResolutionRequestDenialInfo'
        ),
        self::NEEDRECEIPT => array(
            'default' => false,
            'name' => 'NeedReceipt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::PACKETID => array(
            'name' => 'PacketId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ISAPPROVEMENTSIGNATURE => array(
            'default' => false,
            'name' => 'IsApprovementSignature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ISENCRYPTEDCONTENT => array(
            'default' => false,
            'name' => 'IsEncryptedContent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::ENTITYTYPE] = self::$fields[self::ENTITYTYPE]['default'];
        $this->values[self::ENTITYID] = null;
        $this->values[self::PARENTENTITYID] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::ATTACHMENTTYPE] = self::$fields[self::ATTACHMENTTYPE]['default'];
        $this->values[self::FILENAME] = null;
        $this->values[self::NEEDRECIPIENTSIGNATURE] = self::$fields[self::NEEDRECIPIENTSIGNATURE]['default'];
        $this->values[self::SIGNERBOXID] = null;
        $this->values[self::NOTDELIVEREDEVENTID] = null;
        $this->values[self::DOCUMENTINFO] = null;
        $this->values[self::RAWCREATIONDATE] = self::$fields[self::RAWCREATIONDATE]['default'];
        $this->values[self::RESOLUTIONINFO] = null;
        $this->values[self::SIGNERDEPARTMENTID] = null;
        $this->values[self::RESOLUTIONREQUESTINFO] = null;
        $this->values[self::RESOLUTIONREQUESTDENIALINFO] = null;
        $this->values[self::NEEDRECEIPT] = self::$fields[self::NEEDRECEIPT]['default'];
        $this->values[self::PACKETID] = null;
        $this->values[self::ISAPPROVEMENTSIGNATURE] = self::$fields[self::ISAPPROVEMENTSIGNATURE]['default'];
        $this->values[self::ISENCRYPTEDCONTENT] = self::$fields[self::ISENCRYPTEDCONTENT]['default'];
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
     * Sets value of 'EntityType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEntityType($value)
    {
        return $this->set(self::ENTITYTYPE, $value);
    }

    /**
     * Returns value of 'EntityType' property
     *
     * @return integer
     */
    public function getEntityType()
    {
        $value = $this->get(self::ENTITYTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'EntityId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEntityId($value)
    {
        return $this->set(self::ENTITYID, $value);
    }

    /**
     * Returns value of 'EntityId' property
     *
     * @return string
     */
    public function getEntityId()
    {
        $value = $this->get(self::ENTITYID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ParentEntityId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParentEntityId($value)
    {
        return $this->set(self::PARENTENTITYID, $value);
    }

    /**
     * Returns value of 'ParentEntityId' property
     *
     * @return string
     */
    public function getParentEntityId()
    {
        $value = $this->get(self::PARENTENTITYID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Content' property
     *
     * @param \Diadoc\Api\Proto\Content $value Property value
     *
     * @return null
     */
    public function setContent(\Diadoc\Api\Proto\Content $value=null)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'Content' property
     *
     * @return \Diadoc\Api\Proto\Content
     */
    public function getContent()
    {
        return $this->get(self::CONTENT);
    }

    /**
     * Sets value of 'AttachmentType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAttachmentType($value)
    {
        return $this->set(self::ATTACHMENTTYPE, $value);
    }

    /**
     * Returns value of 'AttachmentType' property
     *
     * @return integer
     */
    public function getAttachmentType()
    {
        $value = $this->get(self::ATTACHMENTTYPE);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'SignerBoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignerBoxId($value)
    {
        return $this->set(self::SIGNERBOXID, $value);
    }

    /**
     * Returns value of 'SignerBoxId' property
     *
     * @return string
     */
    public function getSignerBoxId()
    {
        $value = $this->get(self::SIGNERBOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'NotDeliveredEventId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNotDeliveredEventId($value)
    {
        return $this->set(self::NOTDELIVEREDEVENTID, $value);
    }

    /**
     * Returns value of 'NotDeliveredEventId' property
     *
     * @return string
     */
    public function getNotDeliveredEventId()
    {
        $value = $this->get(self::NOTDELIVEREDEVENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'DocumentInfo' property
     *
     * @param \Diadoc\Api\Proto\Documents\Document $value Property value
     *
     * @return null
     */
    public function setDocumentInfo(\Diadoc\Api\Proto\Documents\Document $value=null)
    {
        return $this->set(self::DOCUMENTINFO, $value);
    }

    /**
     * Returns value of 'DocumentInfo' property
     *
     * @return \Diadoc\Api\Proto\Documents\Document
     */
    public function getDocumentInfo()
    {
        return $this->get(self::DOCUMENTINFO);
    }

    /**
     * Sets value of 'RawCreationDate' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRawCreationDate($value)
    {
        return $this->set(self::RAWCREATIONDATE, $value);
    }

    /**
     * Returns value of 'RawCreationDate' property
     *
     * @return integer
     */
    public function getRawCreationDate()
    {
        $value = $this->get(self::RAWCREATIONDATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'ResolutionInfo' property
     *
     * @param \Diadoc\Api\Proto\Events\ResolutionInfo $value Property value
     *
     * @return null
     */
    public function setResolutionInfo(\Diadoc\Api\Proto\Events\ResolutionInfo $value=null)
    {
        return $this->set(self::RESOLUTIONINFO, $value);
    }

    /**
     * Returns value of 'ResolutionInfo' property
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionInfo
     */
    public function getResolutionInfo()
    {
        return $this->get(self::RESOLUTIONINFO);
    }

    /**
     * Sets value of 'SignerDepartmentId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignerDepartmentId($value)
    {
        return $this->set(self::SIGNERDEPARTMENTID, $value);
    }

    /**
     * Returns value of 'SignerDepartmentId' property
     *
     * @return string
     */
    public function getSignerDepartmentId()
    {
        $value = $this->get(self::SIGNERDEPARTMENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ResolutionRequestInfo' property
     *
     * @param \Diadoc\Api\Proto\Events\ResolutionRequestInfo $value Property value
     *
     * @return null
     */
    public function setResolutionRequestInfo(\Diadoc\Api\Proto\Events\ResolutionRequestInfo $value=null)
    {
        return $this->set(self::RESOLUTIONREQUESTINFO, $value);
    }

    /**
     * Returns value of 'ResolutionRequestInfo' property
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRequestInfo
     */
    public function getResolutionRequestInfo()
    {
        return $this->get(self::RESOLUTIONREQUESTINFO);
    }

    /**
     * Sets value of 'ResolutionRequestDenialInfo' property
     *
     * @param \Diadoc\Api\Proto\Events\ResolutionRequestDenialInfo $value Property value
     *
     * @return null
     */
    public function setResolutionRequestDenialInfo(\Diadoc\Api\Proto\Events\ResolutionRequestDenialInfo $value=null)
    {
        return $this->set(self::RESOLUTIONREQUESTDENIALINFO, $value);
    }

    /**
     * Returns value of 'ResolutionRequestDenialInfo' property
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRequestDenialInfo
     */
    public function getResolutionRequestDenialInfo()
    {
        return $this->get(self::RESOLUTIONREQUESTDENIALINFO);
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
     * Sets value of 'IsApprovementSignature' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsApprovementSignature($value)
    {
        return $this->set(self::ISAPPROVEMENTSIGNATURE, $value);
    }

    /**
     * Returns value of 'IsApprovementSignature' property
     *
     * @return boolean
     */
    public function getIsApprovementSignature()
    {
        $value = $this->get(self::ISAPPROVEMENTSIGNATURE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'IsEncryptedContent' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsEncryptedContent($value)
    {
        return $this->set(self::ISENCRYPTEDCONTENT, $value);
    }

    /**
     * Returns value of 'IsEncryptedContent' property
     *
     * @return boolean
     */
    public function getIsEncryptedContent()
    {
        $value = $this->get(self::ISENCRYPTEDCONTENT);
        return $value === null ? (boolean)$value : $value;
    }
}
}