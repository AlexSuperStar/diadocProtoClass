<?php
/**
 * Auto generated from Torg12Info.proto at 2016-09-02 13:32:04
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * Torg12BuyerTitleInfo message
 */
class Torg12BuyerTitleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SHIPMENTRECEIPTDATE = 1;
    const ATTORNEY = 2;
    const ACCEPTEDBY = 3;
    const RECEIVEDBY = 4;
    const SIGNER = 5;
    const ADDITIONALINFO = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SHIPMENTRECEIPTDATE => array(
            'name' => 'ShipmentReceiptDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ATTORNEY => array(
            'name' => 'Attorney',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Attorney'
        ),
        self::ACCEPTEDBY => array(
            'name' => 'AcceptedBy',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Official'
        ),
        self::RECEIVEDBY => array(
            'name' => 'ReceivedBy',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Official'
        ),
        self::SIGNER => array(
            'name' => 'Signer',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Signer'
        ),
        self::ADDITIONALINFO => array(
            'name' => 'AdditionalInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::SHIPMENTRECEIPTDATE] = null;
        $this->values[self::ATTORNEY] = null;
        $this->values[self::ACCEPTEDBY] = null;
        $this->values[self::RECEIVEDBY] = null;
        $this->values[self::SIGNER] = null;
        $this->values[self::ADDITIONALINFO] = null;
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
     * Sets value of 'ShipmentReceiptDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShipmentReceiptDate($value)
    {
        return $this->set(self::SHIPMENTRECEIPTDATE, $value);
    }

    /**
     * Returns value of 'ShipmentReceiptDate' property
     *
     * @return string
     */
    public function getShipmentReceiptDate()
    {
        $value = $this->get(self::SHIPMENTRECEIPTDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Attorney' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Attorney $value Property value
     *
     * @return null
     */
    public function setAttorney(\Diadoc\Api\Proto\Invoicing\Attorney $value=null)
    {
        return $this->set(self::ATTORNEY, $value);
    }

    /**
     * Returns value of 'Attorney' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Attorney
     */
    public function getAttorney()
    {
        return $this->get(self::ATTORNEY);
    }

    /**
     * Sets value of 'AcceptedBy' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Official $value Property value
     *
     * @return null
     */
    public function setAcceptedBy(\Diadoc\Api\Proto\Invoicing\Official $value=null)
    {
        return $this->set(self::ACCEPTEDBY, $value);
    }

    /**
     * Returns value of 'AcceptedBy' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Official
     */
    public function getAcceptedBy()
    {
        return $this->get(self::ACCEPTEDBY);
    }

    /**
     * Sets value of 'ReceivedBy' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Official $value Property value
     *
     * @return null
     */
    public function setReceivedBy(\Diadoc\Api\Proto\Invoicing\Official $value=null)
    {
        return $this->set(self::RECEIVEDBY, $value);
    }

    /**
     * Returns value of 'ReceivedBy' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Official
     */
    public function getReceivedBy()
    {
        return $this->get(self::RECEIVEDBY);
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
     * Sets value of 'AdditionalInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAdditionalInfo($value)
    {
        return $this->set(self::ADDITIONALINFO, $value);
    }

    /**
     * Returns value of 'AdditionalInfo' property
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        $value = $this->get(self::ADDITIONALINFO);
        return $value === null ? (string)$value : $value;
    }
}
}