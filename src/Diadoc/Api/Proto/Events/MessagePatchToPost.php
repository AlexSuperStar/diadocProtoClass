<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * MessagePatchToPost message
 */
class MessagePatchToPost extends \ProtobufMessage
{
    /* Field index constants */
    const BOXID = 1;
    const MESSAGEID = 2;
    const RECEIPTS = 3;
    const CORRECTIONREQUESTS = 4;
    const SIGNATURES = 5;
    const REQUESTEDSIGNATUREREJECTIONS = 6;
    const XMLTORG12BUYERTITLES = 7;
    const XMLACCEPTANCECERTIFICATEBUYERTITLES = 8;
    const RESOLUTIONS = 9;
    const RESOLUTIONREQUESTS = 10;
    const RESOLUTIONREQUESTCANCELLATIONS = 11;
    const RESOLUTIONREQUESTDENIALS = 12;
    const RESOLUTIONREQUESTDENIALCANCELLATIONS = 13;
    const REVOCATIONREQUESTS = 14;
    const XMLSIGNATUREREJECTIONS = 15;
    const CUSTOMDATAPATCHES = 16;
    const RESOLUTIONROUTEASSIGNMENTS = 17;
    const SIGNATUREVERIFICATIONS = 18;
    const EDITDOCUMENTPACKETCOMMANDS = 19;
    const UNIVERSALTRANSFERDOCUMENTBUYERTITLES = 20;
    const RESOLUTIONROUTEREMOVALS = 21;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOXID => array(
            'name' => 'BoxId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MESSAGEID => array(
            'name' => 'MessageId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RECEIPTS => array(
            'name' => 'Receipts',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ReceiptAttachment'
        ),
        self::CORRECTIONREQUESTS => array(
            'name' => 'CorrectionRequests',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\CorrectionRequestAttachment'
        ),
        self::SIGNATURES => array(
            'name' => 'Signatures',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\DocumentSignature'
        ),
        self::REQUESTEDSIGNATUREREJECTIONS => array(
            'name' => 'RequestedSignatureRejections',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\RequestedSignatureRejection'
        ),
        self::XMLTORG12BUYERTITLES => array(
            'name' => 'XmlTorg12BuyerTitles',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ReceiptAttachment'
        ),
        self::XMLACCEPTANCECERTIFICATEBUYERTITLES => array(
            'name' => 'XmlAcceptanceCertificateBuyerTitles',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ReceiptAttachment'
        ),
        self::RESOLUTIONS => array(
            'name' => 'Resolutions',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ResolutionAttachment'
        ),
        self::RESOLUTIONREQUESTS => array(
            'name' => 'ResolutionRequests',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ResolutionRequestAttachment'
        ),
        self::RESOLUTIONREQUESTCANCELLATIONS => array(
            'name' => 'ResolutionRequestCancellations',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ResolutionRequestCancellationAttachment'
        ),
        self::RESOLUTIONREQUESTDENIALS => array(
            'name' => 'ResolutionRequestDenials',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ResolutionRequestDenialAttachment'
        ),
        self::RESOLUTIONREQUESTDENIALCANCELLATIONS => array(
            'name' => 'ResolutionRequestDenialCancellations',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ResolutionRequestDenialCancellationAttachment'
        ),
        self::REVOCATIONREQUESTS => array(
            'name' => 'RevocationRequests',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\RevocationRequestAttachment'
        ),
        self::XMLSIGNATUREREJECTIONS => array(
            'name' => 'XmlSignatureRejections',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\XmlSignatureRejectionAttachment'
        ),
        self::CUSTOMDATAPATCHES => array(
            'name' => 'CustomDataPatches',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\CustomDataPatch'
        ),
        self::RESOLUTIONROUTEASSIGNMENTS => array(
            'name' => 'ResolutionRouteAssignments',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ResolutionRouteAssignment'
        ),
        self::SIGNATUREVERIFICATIONS => array(
            'name' => 'SignatureVerifications',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\SignatureVerification'
        ),
        self::EDITDOCUMENTPACKETCOMMANDS => array(
            'name' => 'EditDocumentPacketCommands',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\EditDocumentPacketCommand'
        ),
        self::UNIVERSALTRANSFERDOCUMENTBUYERTITLES => array(
            'name' => 'UniversalTransferDocumentBuyerTitles',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ReceiptAttachment'
        ),
        self::RESOLUTIONROUTEREMOVALS => array(
            'name' => 'ResolutionRouteRemovals',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Events\ResolutionRouteRemoval'
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
        $this->values[self::BOXID] = null;
        $this->values[self::MESSAGEID] = null;
        $this->values[self::RECEIPTS] = array();
        $this->values[self::CORRECTIONREQUESTS] = array();
        $this->values[self::SIGNATURES] = array();
        $this->values[self::REQUESTEDSIGNATUREREJECTIONS] = array();
        $this->values[self::XMLTORG12BUYERTITLES] = array();
        $this->values[self::XMLACCEPTANCECERTIFICATEBUYERTITLES] = array();
        $this->values[self::RESOLUTIONS] = array();
        $this->values[self::RESOLUTIONREQUESTS] = array();
        $this->values[self::RESOLUTIONREQUESTCANCELLATIONS] = array();
        $this->values[self::RESOLUTIONREQUESTDENIALS] = array();
        $this->values[self::RESOLUTIONREQUESTDENIALCANCELLATIONS] = array();
        $this->values[self::REVOCATIONREQUESTS] = array();
        $this->values[self::XMLSIGNATUREREJECTIONS] = array();
        $this->values[self::CUSTOMDATAPATCHES] = array();
        $this->values[self::RESOLUTIONROUTEASSIGNMENTS] = array();
        $this->values[self::SIGNATUREVERIFICATIONS] = array();
        $this->values[self::EDITDOCUMENTPACKETCOMMANDS] = array();
        $this->values[self::UNIVERSALTRANSFERDOCUMENTBUYERTITLES] = array();
        $this->values[self::RESOLUTIONROUTEREMOVALS] = array();
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
     * Sets value of 'BoxId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBoxId($value)
    {
        return $this->set(self::BOXID, $value);
    }

    /**
     * Returns value of 'BoxId' property
     *
     * @return string
     */
    public function getBoxId()
    {
        $value = $this->get(self::BOXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'MessageId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageId($value)
    {
        return $this->set(self::MESSAGEID, $value);
    }

    /**
     * Returns value of 'MessageId' property
     *
     * @return string
     */
    public function getMessageId()
    {
        $value = $this->get(self::MESSAGEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'Receipts' list
     *
     * @param \Diadoc\Api\Proto\Events\ReceiptAttachment $value Value to append
     *
     * @return null
     */
    public function appendReceipts(\Diadoc\Api\Proto\Events\ReceiptAttachment $value)
    {
        return $this->append(self::RECEIPTS, $value);
    }

    /**
     * Clears 'Receipts' list
     *
     * @return null
     */
    public function clearReceipts()
    {
        return $this->clear(self::RECEIPTS);
    }

    /**
     * Returns 'Receipts' list
     *
     * @return \Diadoc\Api\Proto\Events\ReceiptAttachment[]
     */
    public function getReceipts()
    {
        return $this->get(self::RECEIPTS);
    }

    /**
     * Returns 'Receipts' iterator
     *
     * @return \ArrayIterator
     */
    public function getReceiptsIterator()
    {
        return new \ArrayIterator($this->get(self::RECEIPTS));
    }

    /**
     * Returns element from 'Receipts' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ReceiptAttachment
     */
    public function getReceiptsAt($offset)
    {
        return $this->get(self::RECEIPTS, $offset);
    }

    /**
     * Returns count of 'Receipts' list
     *
     * @return int
     */
    public function getReceiptsCount()
    {
        return $this->count(self::RECEIPTS);
    }

    /**
     * Appends value to 'CorrectionRequests' list
     *
     * @param \Diadoc\Api\Proto\Events\CorrectionRequestAttachment $value Value to append
     *
     * @return null
     */
    public function appendCorrectionRequests(\Diadoc\Api\Proto\Events\CorrectionRequestAttachment $value)
    {
        return $this->append(self::CORRECTIONREQUESTS, $value);
    }

    /**
     * Clears 'CorrectionRequests' list
     *
     * @return null
     */
    public function clearCorrectionRequests()
    {
        return $this->clear(self::CORRECTIONREQUESTS);
    }

    /**
     * Returns 'CorrectionRequests' list
     *
     * @return \Diadoc\Api\Proto\Events\CorrectionRequestAttachment[]
     */
    public function getCorrectionRequests()
    {
        return $this->get(self::CORRECTIONREQUESTS);
    }

    /**
     * Returns 'CorrectionRequests' iterator
     *
     * @return \ArrayIterator
     */
    public function getCorrectionRequestsIterator()
    {
        return new \ArrayIterator($this->get(self::CORRECTIONREQUESTS));
    }

    /**
     * Returns element from 'CorrectionRequests' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\CorrectionRequestAttachment
     */
    public function getCorrectionRequestsAt($offset)
    {
        return $this->get(self::CORRECTIONREQUESTS, $offset);
    }

    /**
     * Returns count of 'CorrectionRequests' list
     *
     * @return int
     */
    public function getCorrectionRequestsCount()
    {
        return $this->count(self::CORRECTIONREQUESTS);
    }

    /**
     * Appends value to 'Signatures' list
     *
     * @param \Diadoc\Api\Proto\Events\DocumentSignature $value Value to append
     *
     * @return null
     */
    public function appendSignatures(\Diadoc\Api\Proto\Events\DocumentSignature $value)
    {
        return $this->append(self::SIGNATURES, $value);
    }

    /**
     * Clears 'Signatures' list
     *
     * @return null
     */
    public function clearSignatures()
    {
        return $this->clear(self::SIGNATURES);
    }

    /**
     * Returns 'Signatures' list
     *
     * @return \Diadoc\Api\Proto\Events\DocumentSignature[]
     */
    public function getSignatures()
    {
        return $this->get(self::SIGNATURES);
    }

    /**
     * Returns 'Signatures' iterator
     *
     * @return \ArrayIterator
     */
    public function getSignaturesIterator()
    {
        return new \ArrayIterator($this->get(self::SIGNATURES));
    }

    /**
     * Returns element from 'Signatures' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\DocumentSignature
     */
    public function getSignaturesAt($offset)
    {
        return $this->get(self::SIGNATURES, $offset);
    }

    /**
     * Returns count of 'Signatures' list
     *
     * @return int
     */
    public function getSignaturesCount()
    {
        return $this->count(self::SIGNATURES);
    }

    /**
     * Appends value to 'RequestedSignatureRejections' list
     *
     * @param \Diadoc\Api\Proto\Events\RequestedSignatureRejection $value Value to append
     *
     * @return null
     */
    public function appendRequestedSignatureRejections(\Diadoc\Api\Proto\Events\RequestedSignatureRejection $value)
    {
        return $this->append(self::REQUESTEDSIGNATUREREJECTIONS, $value);
    }

    /**
     * Clears 'RequestedSignatureRejections' list
     *
     * @return null
     */
    public function clearRequestedSignatureRejections()
    {
        return $this->clear(self::REQUESTEDSIGNATUREREJECTIONS);
    }

    /**
     * Returns 'RequestedSignatureRejections' list
     *
     * @return \Diadoc\Api\Proto\Events\RequestedSignatureRejection[]
     */
    public function getRequestedSignatureRejections()
    {
        return $this->get(self::REQUESTEDSIGNATUREREJECTIONS);
    }

    /**
     * Returns 'RequestedSignatureRejections' iterator
     *
     * @return \ArrayIterator
     */
    public function getRequestedSignatureRejectionsIterator()
    {
        return new \ArrayIterator($this->get(self::REQUESTEDSIGNATUREREJECTIONS));
    }

    /**
     * Returns element from 'RequestedSignatureRejections' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\RequestedSignatureRejection
     */
    public function getRequestedSignatureRejectionsAt($offset)
    {
        return $this->get(self::REQUESTEDSIGNATUREREJECTIONS, $offset);
    }

    /**
     * Returns count of 'RequestedSignatureRejections' list
     *
     * @return int
     */
    public function getRequestedSignatureRejectionsCount()
    {
        return $this->count(self::REQUESTEDSIGNATUREREJECTIONS);
    }

    /**
     * Appends value to 'XmlTorg12BuyerTitles' list
     *
     * @param \Diadoc\Api\Proto\Events\ReceiptAttachment $value Value to append
     *
     * @return null
     */
    public function appendXmlTorg12BuyerTitles(\Diadoc\Api\Proto\Events\ReceiptAttachment $value)
    {
        return $this->append(self::XMLTORG12BUYERTITLES, $value);
    }

    /**
     * Clears 'XmlTorg12BuyerTitles' list
     *
     * @return null
     */
    public function clearXmlTorg12BuyerTitles()
    {
        return $this->clear(self::XMLTORG12BUYERTITLES);
    }

    /**
     * Returns 'XmlTorg12BuyerTitles' list
     *
     * @return \Diadoc\Api\Proto\Events\ReceiptAttachment[]
     */
    public function getXmlTorg12BuyerTitles()
    {
        return $this->get(self::XMLTORG12BUYERTITLES);
    }

    /**
     * Returns 'XmlTorg12BuyerTitles' iterator
     *
     * @return \ArrayIterator
     */
    public function getXmlTorg12BuyerTitlesIterator()
    {
        return new \ArrayIterator($this->get(self::XMLTORG12BUYERTITLES));
    }

    /**
     * Returns element from 'XmlTorg12BuyerTitles' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ReceiptAttachment
     */
    public function getXmlTorg12BuyerTitlesAt($offset)
    {
        return $this->get(self::XMLTORG12BUYERTITLES, $offset);
    }

    /**
     * Returns count of 'XmlTorg12BuyerTitles' list
     *
     * @return int
     */
    public function getXmlTorg12BuyerTitlesCount()
    {
        return $this->count(self::XMLTORG12BUYERTITLES);
    }

    /**
     * Appends value to 'XmlAcceptanceCertificateBuyerTitles' list
     *
     * @param \Diadoc\Api\Proto\Events\ReceiptAttachment $value Value to append
     *
     * @return null
     */
    public function appendXmlAcceptanceCertificateBuyerTitles(\Diadoc\Api\Proto\Events\ReceiptAttachment $value)
    {
        return $this->append(self::XMLACCEPTANCECERTIFICATEBUYERTITLES, $value);
    }

    /**
     * Clears 'XmlAcceptanceCertificateBuyerTitles' list
     *
     * @return null
     */
    public function clearXmlAcceptanceCertificateBuyerTitles()
    {
        return $this->clear(self::XMLACCEPTANCECERTIFICATEBUYERTITLES);
    }

    /**
     * Returns 'XmlAcceptanceCertificateBuyerTitles' list
     *
     * @return \Diadoc\Api\Proto\Events\ReceiptAttachment[]
     */
    public function getXmlAcceptanceCertificateBuyerTitles()
    {
        return $this->get(self::XMLACCEPTANCECERTIFICATEBUYERTITLES);
    }

    /**
     * Returns 'XmlAcceptanceCertificateBuyerTitles' iterator
     *
     * @return \ArrayIterator
     */
    public function getXmlAcceptanceCertificateBuyerTitlesIterator()
    {
        return new \ArrayIterator($this->get(self::XMLACCEPTANCECERTIFICATEBUYERTITLES));
    }

    /**
     * Returns element from 'XmlAcceptanceCertificateBuyerTitles' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ReceiptAttachment
     */
    public function getXmlAcceptanceCertificateBuyerTitlesAt($offset)
    {
        return $this->get(self::XMLACCEPTANCECERTIFICATEBUYERTITLES, $offset);
    }

    /**
     * Returns count of 'XmlAcceptanceCertificateBuyerTitles' list
     *
     * @return int
     */
    public function getXmlAcceptanceCertificateBuyerTitlesCount()
    {
        return $this->count(self::XMLACCEPTANCECERTIFICATEBUYERTITLES);
    }

    /**
     * Appends value to 'Resolutions' list
     *
     * @param \Diadoc\Api\Proto\Events\ResolutionAttachment $value Value to append
     *
     * @return null
     */
    public function appendResolutions(\Diadoc\Api\Proto\Events\ResolutionAttachment $value)
    {
        return $this->append(self::RESOLUTIONS, $value);
    }

    /**
     * Clears 'Resolutions' list
     *
     * @return null
     */
    public function clearResolutions()
    {
        return $this->clear(self::RESOLUTIONS);
    }

    /**
     * Returns 'Resolutions' list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionAttachment[]
     */
    public function getResolutions()
    {
        return $this->get(self::RESOLUTIONS);
    }

    /**
     * Returns 'Resolutions' iterator
     *
     * @return \ArrayIterator
     */
    public function getResolutionsIterator()
    {
        return new \ArrayIterator($this->get(self::RESOLUTIONS));
    }

    /**
     * Returns element from 'Resolutions' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionAttachment
     */
    public function getResolutionsAt($offset)
    {
        return $this->get(self::RESOLUTIONS, $offset);
    }

    /**
     * Returns count of 'Resolutions' list
     *
     * @return int
     */
    public function getResolutionsCount()
    {
        return $this->count(self::RESOLUTIONS);
    }

    /**
     * Appends value to 'ResolutionRequests' list
     *
     * @param \Diadoc\Api\Proto\Events\ResolutionRequestAttachment $value Value to append
     *
     * @return null
     */
    public function appendResolutionRequests(\Diadoc\Api\Proto\Events\ResolutionRequestAttachment $value)
    {
        return $this->append(self::RESOLUTIONREQUESTS, $value);
    }

    /**
     * Clears 'ResolutionRequests' list
     *
     * @return null
     */
    public function clearResolutionRequests()
    {
        return $this->clear(self::RESOLUTIONREQUESTS);
    }

    /**
     * Returns 'ResolutionRequests' list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRequestAttachment[]
     */
    public function getResolutionRequests()
    {
        return $this->get(self::RESOLUTIONREQUESTS);
    }

    /**
     * Returns 'ResolutionRequests' iterator
     *
     * @return \ArrayIterator
     */
    public function getResolutionRequestsIterator()
    {
        return new \ArrayIterator($this->get(self::RESOLUTIONREQUESTS));
    }

    /**
     * Returns element from 'ResolutionRequests' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRequestAttachment
     */
    public function getResolutionRequestsAt($offset)
    {
        return $this->get(self::RESOLUTIONREQUESTS, $offset);
    }

    /**
     * Returns count of 'ResolutionRequests' list
     *
     * @return int
     */
    public function getResolutionRequestsCount()
    {
        return $this->count(self::RESOLUTIONREQUESTS);
    }

    /**
     * Appends value to 'ResolutionRequestCancellations' list
     *
     * @param \Diadoc\Api\Proto\Events\ResolutionRequestCancellationAttachment $value Value to append
     *
     * @return null
     */
    public function appendResolutionRequestCancellations(\Diadoc\Api\Proto\Events\ResolutionRequestCancellationAttachment $value)
    {
        return $this->append(self::RESOLUTIONREQUESTCANCELLATIONS, $value);
    }

    /**
     * Clears 'ResolutionRequestCancellations' list
     *
     * @return null
     */
    public function clearResolutionRequestCancellations()
    {
        return $this->clear(self::RESOLUTIONREQUESTCANCELLATIONS);
    }

    /**
     * Returns 'ResolutionRequestCancellations' list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRequestCancellationAttachment[]
     */
    public function getResolutionRequestCancellations()
    {
        return $this->get(self::RESOLUTIONREQUESTCANCELLATIONS);
    }

    /**
     * Returns 'ResolutionRequestCancellations' iterator
     *
     * @return \ArrayIterator
     */
    public function getResolutionRequestCancellationsIterator()
    {
        return new \ArrayIterator($this->get(self::RESOLUTIONREQUESTCANCELLATIONS));
    }

    /**
     * Returns element from 'ResolutionRequestCancellations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRequestCancellationAttachment
     */
    public function getResolutionRequestCancellationsAt($offset)
    {
        return $this->get(self::RESOLUTIONREQUESTCANCELLATIONS, $offset);
    }

    /**
     * Returns count of 'ResolutionRequestCancellations' list
     *
     * @return int
     */
    public function getResolutionRequestCancellationsCount()
    {
        return $this->count(self::RESOLUTIONREQUESTCANCELLATIONS);
    }

    /**
     * Appends value to 'ResolutionRequestDenials' list
     *
     * @param \Diadoc\Api\Proto\Events\ResolutionRequestDenialAttachment $value Value to append
     *
     * @return null
     */
    public function appendResolutionRequestDenials(\Diadoc\Api\Proto\Events\ResolutionRequestDenialAttachment $value)
    {
        return $this->append(self::RESOLUTIONREQUESTDENIALS, $value);
    }

    /**
     * Clears 'ResolutionRequestDenials' list
     *
     * @return null
     */
    public function clearResolutionRequestDenials()
    {
        return $this->clear(self::RESOLUTIONREQUESTDENIALS);
    }

    /**
     * Returns 'ResolutionRequestDenials' list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRequestDenialAttachment[]
     */
    public function getResolutionRequestDenials()
    {
        return $this->get(self::RESOLUTIONREQUESTDENIALS);
    }

    /**
     * Returns 'ResolutionRequestDenials' iterator
     *
     * @return \ArrayIterator
     */
    public function getResolutionRequestDenialsIterator()
    {
        return new \ArrayIterator($this->get(self::RESOLUTIONREQUESTDENIALS));
    }

    /**
     * Returns element from 'ResolutionRequestDenials' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRequestDenialAttachment
     */
    public function getResolutionRequestDenialsAt($offset)
    {
        return $this->get(self::RESOLUTIONREQUESTDENIALS, $offset);
    }

    /**
     * Returns count of 'ResolutionRequestDenials' list
     *
     * @return int
     */
    public function getResolutionRequestDenialsCount()
    {
        return $this->count(self::RESOLUTIONREQUESTDENIALS);
    }

    /**
     * Appends value to 'ResolutionRequestDenialCancellations' list
     *
     * @param \Diadoc\Api\Proto\Events\ResolutionRequestDenialCancellationAttachment $value Value to append
     *
     * @return null
     */
    public function appendResolutionRequestDenialCancellations(\Diadoc\Api\Proto\Events\ResolutionRequestDenialCancellationAttachment $value)
    {
        return $this->append(self::RESOLUTIONREQUESTDENIALCANCELLATIONS, $value);
    }

    /**
     * Clears 'ResolutionRequestDenialCancellations' list
     *
     * @return null
     */
    public function clearResolutionRequestDenialCancellations()
    {
        return $this->clear(self::RESOLUTIONREQUESTDENIALCANCELLATIONS);
    }

    /**
     * Returns 'ResolutionRequestDenialCancellations' list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRequestDenialCancellationAttachment[]
     */
    public function getResolutionRequestDenialCancellations()
    {
        return $this->get(self::RESOLUTIONREQUESTDENIALCANCELLATIONS);
    }

    /**
     * Returns 'ResolutionRequestDenialCancellations' iterator
     *
     * @return \ArrayIterator
     */
    public function getResolutionRequestDenialCancellationsIterator()
    {
        return new \ArrayIterator($this->get(self::RESOLUTIONREQUESTDENIALCANCELLATIONS));
    }

    /**
     * Returns element from 'ResolutionRequestDenialCancellations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRequestDenialCancellationAttachment
     */
    public function getResolutionRequestDenialCancellationsAt($offset)
    {
        return $this->get(self::RESOLUTIONREQUESTDENIALCANCELLATIONS, $offset);
    }

    /**
     * Returns count of 'ResolutionRequestDenialCancellations' list
     *
     * @return int
     */
    public function getResolutionRequestDenialCancellationsCount()
    {
        return $this->count(self::RESOLUTIONREQUESTDENIALCANCELLATIONS);
    }

    /**
     * Appends value to 'RevocationRequests' list
     *
     * @param \Diadoc\Api\Proto\Events\RevocationRequestAttachment $value Value to append
     *
     * @return null
     */
    public function appendRevocationRequests(\Diadoc\Api\Proto\Events\RevocationRequestAttachment $value)
    {
        return $this->append(self::REVOCATIONREQUESTS, $value);
    }

    /**
     * Clears 'RevocationRequests' list
     *
     * @return null
     */
    public function clearRevocationRequests()
    {
        return $this->clear(self::REVOCATIONREQUESTS);
    }

    /**
     * Returns 'RevocationRequests' list
     *
     * @return \Diadoc\Api\Proto\Events\RevocationRequestAttachment[]
     */
    public function getRevocationRequests()
    {
        return $this->get(self::REVOCATIONREQUESTS);
    }

    /**
     * Returns 'RevocationRequests' iterator
     *
     * @return \ArrayIterator
     */
    public function getRevocationRequestsIterator()
    {
        return new \ArrayIterator($this->get(self::REVOCATIONREQUESTS));
    }

    /**
     * Returns element from 'RevocationRequests' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\RevocationRequestAttachment
     */
    public function getRevocationRequestsAt($offset)
    {
        return $this->get(self::REVOCATIONREQUESTS, $offset);
    }

    /**
     * Returns count of 'RevocationRequests' list
     *
     * @return int
     */
    public function getRevocationRequestsCount()
    {
        return $this->count(self::REVOCATIONREQUESTS);
    }

    /**
     * Appends value to 'XmlSignatureRejections' list
     *
     * @param \Diadoc\Api\Proto\Events\XmlSignatureRejectionAttachment $value Value to append
     *
     * @return null
     */
    public function appendXmlSignatureRejections(\Diadoc\Api\Proto\Events\XmlSignatureRejectionAttachment $value)
    {
        return $this->append(self::XMLSIGNATUREREJECTIONS, $value);
    }

    /**
     * Clears 'XmlSignatureRejections' list
     *
     * @return null
     */
    public function clearXmlSignatureRejections()
    {
        return $this->clear(self::XMLSIGNATUREREJECTIONS);
    }

    /**
     * Returns 'XmlSignatureRejections' list
     *
     * @return \Diadoc\Api\Proto\Events\XmlSignatureRejectionAttachment[]
     */
    public function getXmlSignatureRejections()
    {
        return $this->get(self::XMLSIGNATUREREJECTIONS);
    }

    /**
     * Returns 'XmlSignatureRejections' iterator
     *
     * @return \ArrayIterator
     */
    public function getXmlSignatureRejectionsIterator()
    {
        return new \ArrayIterator($this->get(self::XMLSIGNATUREREJECTIONS));
    }

    /**
     * Returns element from 'XmlSignatureRejections' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\XmlSignatureRejectionAttachment
     */
    public function getXmlSignatureRejectionsAt($offset)
    {
        return $this->get(self::XMLSIGNATUREREJECTIONS, $offset);
    }

    /**
     * Returns count of 'XmlSignatureRejections' list
     *
     * @return int
     */
    public function getXmlSignatureRejectionsCount()
    {
        return $this->count(self::XMLSIGNATUREREJECTIONS);
    }

    /**
     * Appends value to 'CustomDataPatches' list
     *
     * @param \Diadoc\Api\Proto\Events\CustomDataPatch $value Value to append
     *
     * @return null
     */
    public function appendCustomDataPatches(\Diadoc\Api\Proto\Events\CustomDataPatch $value)
    {
        return $this->append(self::CUSTOMDATAPATCHES, $value);
    }

    /**
     * Clears 'CustomDataPatches' list
     *
     * @return null
     */
    public function clearCustomDataPatches()
    {
        return $this->clear(self::CUSTOMDATAPATCHES);
    }

    /**
     * Returns 'CustomDataPatches' list
     *
     * @return \Diadoc\Api\Proto\Events\CustomDataPatch[]
     */
    public function getCustomDataPatches()
    {
        return $this->get(self::CUSTOMDATAPATCHES);
    }

    /**
     * Returns 'CustomDataPatches' iterator
     *
     * @return \ArrayIterator
     */
    public function getCustomDataPatchesIterator()
    {
        return new \ArrayIterator($this->get(self::CUSTOMDATAPATCHES));
    }

    /**
     * Returns element from 'CustomDataPatches' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\CustomDataPatch
     */
    public function getCustomDataPatchesAt($offset)
    {
        return $this->get(self::CUSTOMDATAPATCHES, $offset);
    }

    /**
     * Returns count of 'CustomDataPatches' list
     *
     * @return int
     */
    public function getCustomDataPatchesCount()
    {
        return $this->count(self::CUSTOMDATAPATCHES);
    }

    /**
     * Appends value to 'ResolutionRouteAssignments' list
     *
     * @param \Diadoc\Api\Proto\Events\ResolutionRouteAssignment $value Value to append
     *
     * @return null
     */
    public function appendResolutionRouteAssignments(\Diadoc\Api\Proto\Events\ResolutionRouteAssignment $value)
    {
        return $this->append(self::RESOLUTIONROUTEASSIGNMENTS, $value);
    }

    /**
     * Clears 'ResolutionRouteAssignments' list
     *
     * @return null
     */
    public function clearResolutionRouteAssignments()
    {
        return $this->clear(self::RESOLUTIONROUTEASSIGNMENTS);
    }

    /**
     * Returns 'ResolutionRouteAssignments' list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRouteAssignment[]
     */
    public function getResolutionRouteAssignments()
    {
        return $this->get(self::RESOLUTIONROUTEASSIGNMENTS);
    }

    /**
     * Returns 'ResolutionRouteAssignments' iterator
     *
     * @return \ArrayIterator
     */
    public function getResolutionRouteAssignmentsIterator()
    {
        return new \ArrayIterator($this->get(self::RESOLUTIONROUTEASSIGNMENTS));
    }

    /**
     * Returns element from 'ResolutionRouteAssignments' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRouteAssignment
     */
    public function getResolutionRouteAssignmentsAt($offset)
    {
        return $this->get(self::RESOLUTIONROUTEASSIGNMENTS, $offset);
    }

    /**
     * Returns count of 'ResolutionRouteAssignments' list
     *
     * @return int
     */
    public function getResolutionRouteAssignmentsCount()
    {
        return $this->count(self::RESOLUTIONROUTEASSIGNMENTS);
    }

    /**
     * Appends value to 'SignatureVerifications' list
     *
     * @param \Diadoc\Api\Proto\Events\SignatureVerification $value Value to append
     *
     * @return null
     */
    public function appendSignatureVerifications(\Diadoc\Api\Proto\Events\SignatureVerification $value)
    {
        return $this->append(self::SIGNATUREVERIFICATIONS, $value);
    }

    /**
     * Clears 'SignatureVerifications' list
     *
     * @return null
     */
    public function clearSignatureVerifications()
    {
        return $this->clear(self::SIGNATUREVERIFICATIONS);
    }

    /**
     * Returns 'SignatureVerifications' list
     *
     * @return \Diadoc\Api\Proto\Events\SignatureVerification[]
     */
    public function getSignatureVerifications()
    {
        return $this->get(self::SIGNATUREVERIFICATIONS);
    }

    /**
     * Returns 'SignatureVerifications' iterator
     *
     * @return \ArrayIterator
     */
    public function getSignatureVerificationsIterator()
    {
        return new \ArrayIterator($this->get(self::SIGNATUREVERIFICATIONS));
    }

    /**
     * Returns element from 'SignatureVerifications' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\SignatureVerification
     */
    public function getSignatureVerificationsAt($offset)
    {
        return $this->get(self::SIGNATUREVERIFICATIONS, $offset);
    }

    /**
     * Returns count of 'SignatureVerifications' list
     *
     * @return int
     */
    public function getSignatureVerificationsCount()
    {
        return $this->count(self::SIGNATUREVERIFICATIONS);
    }

    /**
     * Appends value to 'EditDocumentPacketCommands' list
     *
     * @param \Diadoc\Api\Proto\Events\EditDocumentPacketCommand $value Value to append
     *
     * @return null
     */
    public function appendEditDocumentPacketCommands(\Diadoc\Api\Proto\Events\EditDocumentPacketCommand $value)
    {
        return $this->append(self::EDITDOCUMENTPACKETCOMMANDS, $value);
    }

    /**
     * Clears 'EditDocumentPacketCommands' list
     *
     * @return null
     */
    public function clearEditDocumentPacketCommands()
    {
        return $this->clear(self::EDITDOCUMENTPACKETCOMMANDS);
    }

    /**
     * Returns 'EditDocumentPacketCommands' list
     *
     * @return \Diadoc\Api\Proto\Events\EditDocumentPacketCommand[]
     */
    public function getEditDocumentPacketCommands()
    {
        return $this->get(self::EDITDOCUMENTPACKETCOMMANDS);
    }

    /**
     * Returns 'EditDocumentPacketCommands' iterator
     *
     * @return \ArrayIterator
     */
    public function getEditDocumentPacketCommandsIterator()
    {
        return new \ArrayIterator($this->get(self::EDITDOCUMENTPACKETCOMMANDS));
    }

    /**
     * Returns element from 'EditDocumentPacketCommands' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\EditDocumentPacketCommand
     */
    public function getEditDocumentPacketCommandsAt($offset)
    {
        return $this->get(self::EDITDOCUMENTPACKETCOMMANDS, $offset);
    }

    /**
     * Returns count of 'EditDocumentPacketCommands' list
     *
     * @return int
     */
    public function getEditDocumentPacketCommandsCount()
    {
        return $this->count(self::EDITDOCUMENTPACKETCOMMANDS);
    }

    /**
     * Appends value to 'UniversalTransferDocumentBuyerTitles' list
     *
     * @param \Diadoc\Api\Proto\Events\ReceiptAttachment $value Value to append
     *
     * @return null
     */
    public function appendUniversalTransferDocumentBuyerTitles(\Diadoc\Api\Proto\Events\ReceiptAttachment $value)
    {
        return $this->append(self::UNIVERSALTRANSFERDOCUMENTBUYERTITLES, $value);
    }

    /**
     * Clears 'UniversalTransferDocumentBuyerTitles' list
     *
     * @return null
     */
    public function clearUniversalTransferDocumentBuyerTitles()
    {
        return $this->clear(self::UNIVERSALTRANSFERDOCUMENTBUYERTITLES);
    }

    /**
     * Returns 'UniversalTransferDocumentBuyerTitles' list
     *
     * @return \Diadoc\Api\Proto\Events\ReceiptAttachment[]
     */
    public function getUniversalTransferDocumentBuyerTitles()
    {
        return $this->get(self::UNIVERSALTRANSFERDOCUMENTBUYERTITLES);
    }

    /**
     * Returns 'UniversalTransferDocumentBuyerTitles' iterator
     *
     * @return \ArrayIterator
     */
    public function getUniversalTransferDocumentBuyerTitlesIterator()
    {
        return new \ArrayIterator($this->get(self::UNIVERSALTRANSFERDOCUMENTBUYERTITLES));
    }

    /**
     * Returns element from 'UniversalTransferDocumentBuyerTitles' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ReceiptAttachment
     */
    public function getUniversalTransferDocumentBuyerTitlesAt($offset)
    {
        return $this->get(self::UNIVERSALTRANSFERDOCUMENTBUYERTITLES, $offset);
    }

    /**
     * Returns count of 'UniversalTransferDocumentBuyerTitles' list
     *
     * @return int
     */
    public function getUniversalTransferDocumentBuyerTitlesCount()
    {
        return $this->count(self::UNIVERSALTRANSFERDOCUMENTBUYERTITLES);
    }

    /**
     * Appends value to 'ResolutionRouteRemovals' list
     *
     * @param \Diadoc\Api\Proto\Events\ResolutionRouteRemoval $value Value to append
     *
     * @return null
     */
    public function appendResolutionRouteRemovals(\Diadoc\Api\Proto\Events\ResolutionRouteRemoval $value)
    {
        return $this->append(self::RESOLUTIONROUTEREMOVALS, $value);
    }

    /**
     * Clears 'ResolutionRouteRemovals' list
     *
     * @return null
     */
    public function clearResolutionRouteRemovals()
    {
        return $this->clear(self::RESOLUTIONROUTEREMOVALS);
    }

    /**
     * Returns 'ResolutionRouteRemovals' list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRouteRemoval[]
     */
    public function getResolutionRouteRemovals()
    {
        return $this->get(self::RESOLUTIONROUTEREMOVALS);
    }

    /**
     * Returns 'ResolutionRouteRemovals' iterator
     *
     * @return \ArrayIterator
     */
    public function getResolutionRouteRemovalsIterator()
    {
        return new \ArrayIterator($this->get(self::RESOLUTIONROUTEREMOVALS));
    }

    /**
     * Returns element from 'ResolutionRouteRemovals' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Events\ResolutionRouteRemoval
     */
    public function getResolutionRouteRemovalsAt($offset)
    {
        return $this->get(self::RESOLUTIONROUTEREMOVALS, $offset);
    }

    /**
     * Returns count of 'ResolutionRouteRemovals' list
     *
     * @return int
     */
    public function getResolutionRouteRemovalsCount()
    {
        return $this->count(self::RESOLUTIONROUTEREMOVALS);
    }
}
}