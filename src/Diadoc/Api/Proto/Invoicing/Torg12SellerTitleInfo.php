<?php
/**
* Auto generated from Torg12Info.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * Torg12SellerTitleInfo message
 */
class Torg12SellerTitleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const DOCUMENTDATE = 1;
    const DOCUMENTNUMBER = 2;
    const SELLERDOCFLOWPARTICIPANT = 3;
    const BUYERDOCFLOWPARTICIPANT = 4;
    const SHIPPER = 5;
    const CONSIGNEE = 6;
    const SUPPLIER = 7;
    const PAYER = 8;
    const GROUNDS = 9;
    const WAYBILLDATE = 10;
    const WAYBILLNUMBER = 11;
    const OPERATIONCODE = 12;
    const ITEMS = 13;
    const PARCELSQUANTITYTOTAL = 14;
    const PARCELSQUANTITYTOTALINWORDS = 15;
    const GROSSQUANTITYTOTAL = 16;
    const GROSSQUANTITYTOTALINWORDS = 17;
    const NETQUANTITYTOTAL = 18;
    const NETQUANTITYTOTALINWORDS = 19;
    const QUANTITYTOTAL = 20;
    const TOTALWITHVATEXCLUDED = 21;
    const VAT = 22;
    const TOTAL = 23;
    const TOTALINWORDS = 24;
    const SUPPLYDATE = 25;
    const SUPPLYALLOWEDBY = 26;
    const SUPPLYPERFORMEDBY = 27;
    const CHIEFACCOUNTANT = 28;
    const SIGNER = 29;
    const ADDITIONALINFO = 30;
    const ATTACHMENTSHEETSQUANTITY = 31;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DOCUMENTDATE => array(
            'name' => 'DocumentDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOCUMENTNUMBER => array(
            'name' => 'DocumentNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SELLERDOCFLOWPARTICIPANT => array(
            'name' => 'SellerDocflowParticipant',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\DocflowParticipant'
        ),
        self::BUYERDOCFLOWPARTICIPANT => array(
            'name' => 'BuyerDocflowParticipant',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\DocflowParticipant'
        ),
        self::SHIPPER => array(
            'name' => 'Shipper',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\OrganizationInfo'
        ),
        self::CONSIGNEE => array(
            'name' => 'Consignee',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\OrganizationInfo'
        ),
        self::SUPPLIER => array(
            'name' => 'Supplier',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\OrganizationInfo'
        ),
        self::PAYER => array(
            'name' => 'Payer',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\OrganizationInfo'
        ),
        self::GROUNDS => array(
            'name' => 'Grounds',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Grounds'
        ),
        self::WAYBILLDATE => array(
            'name' => 'WaybillDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WAYBILLNUMBER => array(
            'name' => 'WaybillNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OPERATIONCODE => array(
            'name' => 'OperationCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ITEMS => array(
            'name' => 'Items',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Torg12Item'
        ),
        self::PARCELSQUANTITYTOTAL => array(
            'name' => 'ParcelsQuantityTotal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PARCELSQUANTITYTOTALINWORDS => array(
            'name' => 'ParcelsQuantityTotalInWords',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GROSSQUANTITYTOTAL => array(
            'name' => 'GrossQuantityTotal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GROSSQUANTITYTOTALINWORDS => array(
            'name' => 'GrossQuantityTotalInWords',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NETQUANTITYTOTAL => array(
            'name' => 'NetQuantityTotal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NETQUANTITYTOTALINWORDS => array(
            'name' => 'NetQuantityTotalInWords',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::QUANTITYTOTAL => array(
            'name' => 'QuantityTotal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALWITHVATEXCLUDED => array(
            'name' => 'TotalWithVatExcluded',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VAT => array(
            'name' => 'Vat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTAL => array(
            'name' => 'Total',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALINWORDS => array(
            'name' => 'TotalInWords',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SUPPLYDATE => array(
            'name' => 'SupplyDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SUPPLYALLOWEDBY => array(
            'name' => 'SupplyAllowedBy',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Official'
        ),
        self::SUPPLYPERFORMEDBY => array(
            'name' => 'SupplyPerformedBy',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\Official'
        ),
        self::CHIEFACCOUNTANT => array(
            'name' => 'ChiefAccountant',
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
        self::ATTACHMENTSHEETSQUANTITY => array(
            'name' => 'AttachmentSheetsQuantity',
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
        $this->values[self::DOCUMENTDATE] = null;
        $this->values[self::DOCUMENTNUMBER] = null;
        $this->values[self::SELLERDOCFLOWPARTICIPANT] = null;
        $this->values[self::BUYERDOCFLOWPARTICIPANT] = null;
        $this->values[self::SHIPPER] = null;
        $this->values[self::CONSIGNEE] = null;
        $this->values[self::SUPPLIER] = null;
        $this->values[self::PAYER] = null;
        $this->values[self::GROUNDS] = null;
        $this->values[self::WAYBILLDATE] = null;
        $this->values[self::WAYBILLNUMBER] = null;
        $this->values[self::OPERATIONCODE] = null;
        $this->values[self::ITEMS] = array();
        $this->values[self::PARCELSQUANTITYTOTAL] = null;
        $this->values[self::PARCELSQUANTITYTOTALINWORDS] = null;
        $this->values[self::GROSSQUANTITYTOTAL] = null;
        $this->values[self::GROSSQUANTITYTOTALINWORDS] = null;
        $this->values[self::NETQUANTITYTOTAL] = null;
        $this->values[self::NETQUANTITYTOTALINWORDS] = null;
        $this->values[self::QUANTITYTOTAL] = null;
        $this->values[self::TOTALWITHVATEXCLUDED] = null;
        $this->values[self::VAT] = null;
        $this->values[self::TOTAL] = null;
        $this->values[self::TOTALINWORDS] = null;
        $this->values[self::SUPPLYDATE] = null;
        $this->values[self::SUPPLYALLOWEDBY] = null;
        $this->values[self::SUPPLYPERFORMEDBY] = null;
        $this->values[self::CHIEFACCOUNTANT] = null;
        $this->values[self::SIGNER] = null;
        $this->values[self::ADDITIONALINFO] = null;
        $this->values[self::ATTACHMENTSHEETSQUANTITY] = null;
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
     * Sets value of 'SellerDocflowParticipant' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\DocflowParticipant $value Property value
     *
     * @return null
     */
    public function setSellerDocflowParticipant(\Diadoc\Api\Proto\Invoicing\DocflowParticipant $value=null)
    {
        return $this->set(self::SELLERDOCFLOWPARTICIPANT, $value);
    }

    /**
     * Returns value of 'SellerDocflowParticipant' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\DocflowParticipant
     */
    public function getSellerDocflowParticipant()
    {
        return $this->get(self::SELLERDOCFLOWPARTICIPANT);
    }

    /**
     * Sets value of 'BuyerDocflowParticipant' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\DocflowParticipant $value Property value
     *
     * @return null
     */
    public function setBuyerDocflowParticipant(\Diadoc\Api\Proto\Invoicing\DocflowParticipant $value=null)
    {
        return $this->set(self::BUYERDOCFLOWPARTICIPANT, $value);
    }

    /**
     * Returns value of 'BuyerDocflowParticipant' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\DocflowParticipant
     */
    public function getBuyerDocflowParticipant()
    {
        return $this->get(self::BUYERDOCFLOWPARTICIPANT);
    }

    /**
     * Sets value of 'Shipper' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\OrganizationInfo $value Property value
     *
     * @return null
     */
    public function setShipper(\Diadoc\Api\Proto\Invoicing\OrganizationInfo $value=null)
    {
        return $this->set(self::SHIPPER, $value);
    }

    /**
     * Returns value of 'Shipper' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\OrganizationInfo
     */
    public function getShipper()
    {
        return $this->get(self::SHIPPER);
    }

    /**
     * Sets value of 'Consignee' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\OrganizationInfo $value Property value
     *
     * @return null
     */
    public function setConsignee(\Diadoc\Api\Proto\Invoicing\OrganizationInfo $value=null)
    {
        return $this->set(self::CONSIGNEE, $value);
    }

    /**
     * Returns value of 'Consignee' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\OrganizationInfo
     */
    public function getConsignee()
    {
        return $this->get(self::CONSIGNEE);
    }

    /**
     * Sets value of 'Supplier' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\OrganizationInfo $value Property value
     *
     * @return null
     */
    public function setSupplier(\Diadoc\Api\Proto\Invoicing\OrganizationInfo $value=null)
    {
        return $this->set(self::SUPPLIER, $value);
    }

    /**
     * Returns value of 'Supplier' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\OrganizationInfo
     */
    public function getSupplier()
    {
        return $this->get(self::SUPPLIER);
    }

    /**
     * Sets value of 'Payer' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\OrganizationInfo $value Property value
     *
     * @return null
     */
    public function setPayer(\Diadoc\Api\Proto\Invoicing\OrganizationInfo $value=null)
    {
        return $this->set(self::PAYER, $value);
    }

    /**
     * Returns value of 'Payer' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\OrganizationInfo
     */
    public function getPayer()
    {
        return $this->get(self::PAYER);
    }

    /**
     * Sets value of 'Grounds' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Grounds $value Property value
     *
     * @return null
     */
    public function setGrounds(\Diadoc\Api\Proto\Invoicing\Grounds $value=null)
    {
        return $this->set(self::GROUNDS, $value);
    }

    /**
     * Returns value of 'Grounds' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Grounds
     */
    public function getGrounds()
    {
        return $this->get(self::GROUNDS);
    }

    /**
     * Sets value of 'WaybillDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWaybillDate($value)
    {
        return $this->set(self::WAYBILLDATE, $value);
    }

    /**
     * Returns value of 'WaybillDate' property
     *
     * @return string
     */
    public function getWaybillDate()
    {
        $value = $this->get(self::WAYBILLDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'WaybillNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWaybillNumber($value)
    {
        return $this->set(self::WAYBILLNUMBER, $value);
    }

    /**
     * Returns value of 'WaybillNumber' property
     *
     * @return string
     */
    public function getWaybillNumber()
    {
        $value = $this->get(self::WAYBILLNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'OperationCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOperationCode($value)
    {
        return $this->set(self::OPERATIONCODE, $value);
    }

    /**
     * Returns value of 'OperationCode' property
     *
     * @return string
     */
    public function getOperationCode()
    {
        $value = $this->get(self::OPERATIONCODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'Items' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\Torg12Item $value Value to append
     *
     * @return null
     */
    public function appendItems(\Diadoc\Api\Proto\Invoicing\Torg12Item $value)
    {
        return $this->append(self::ITEMS, $value);
    }

    /**
     * Clears 'Items' list
     *
     * @return null
     */
    public function clearItems()
    {
        return $this->clear(self::ITEMS);
    }

    /**
     * Returns 'Items' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\Torg12Item[]
     */
    public function getItems()
    {
        return $this->get(self::ITEMS);
    }

    /**
     * Returns 'Items' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemsIterator()
    {
        return new \ArrayIterator($this->get(self::ITEMS));
    }

    /**
     * Returns element from 'Items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\Torg12Item
     */
    public function getItemsAt($offset)
    {
        return $this->get(self::ITEMS, $offset);
    }

    /**
     * Returns count of 'Items' list
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->count(self::ITEMS);
    }

    /**
     * Sets value of 'ParcelsQuantityTotal' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParcelsQuantityTotal($value)
    {
        return $this->set(self::PARCELSQUANTITYTOTAL, $value);
    }

    /**
     * Returns value of 'ParcelsQuantityTotal' property
     *
     * @return string
     */
    public function getParcelsQuantityTotal()
    {
        $value = $this->get(self::PARCELSQUANTITYTOTAL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ParcelsQuantityTotalInWords' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParcelsQuantityTotalInWords($value)
    {
        return $this->set(self::PARCELSQUANTITYTOTALINWORDS, $value);
    }

    /**
     * Returns value of 'ParcelsQuantityTotalInWords' property
     *
     * @return string
     */
    public function getParcelsQuantityTotalInWords()
    {
        $value = $this->get(self::PARCELSQUANTITYTOTALINWORDS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'GrossQuantityTotal' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrossQuantityTotal($value)
    {
        return $this->set(self::GROSSQUANTITYTOTAL, $value);
    }

    /**
     * Returns value of 'GrossQuantityTotal' property
     *
     * @return string
     */
    public function getGrossQuantityTotal()
    {
        $value = $this->get(self::GROSSQUANTITYTOTAL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'GrossQuantityTotalInWords' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrossQuantityTotalInWords($value)
    {
        return $this->set(self::GROSSQUANTITYTOTALINWORDS, $value);
    }

    /**
     * Returns value of 'GrossQuantityTotalInWords' property
     *
     * @return string
     */
    public function getGrossQuantityTotalInWords()
    {
        $value = $this->get(self::GROSSQUANTITYTOTALINWORDS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'NetQuantityTotal' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNetQuantityTotal($value)
    {
        return $this->set(self::NETQUANTITYTOTAL, $value);
    }

    /**
     * Returns value of 'NetQuantityTotal' property
     *
     * @return string
     */
    public function getNetQuantityTotal()
    {
        $value = $this->get(self::NETQUANTITYTOTAL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'NetQuantityTotalInWords' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNetQuantityTotalInWords($value)
    {
        return $this->set(self::NETQUANTITYTOTALINWORDS, $value);
    }

    /**
     * Returns value of 'NetQuantityTotalInWords' property
     *
     * @return string
     */
    public function getNetQuantityTotalInWords()
    {
        $value = $this->get(self::NETQUANTITYTOTALINWORDS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'QuantityTotal' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setQuantityTotal($value)
    {
        return $this->set(self::QUANTITYTOTAL, $value);
    }

    /**
     * Returns value of 'QuantityTotal' property
     *
     * @return string
     */
    public function getQuantityTotal()
    {
        $value = $this->get(self::QUANTITYTOTAL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'TotalWithVatExcluded' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalWithVatExcluded($value)
    {
        return $this->set(self::TOTALWITHVATEXCLUDED, $value);
    }

    /**
     * Returns value of 'TotalWithVatExcluded' property
     *
     * @return string
     */
    public function getTotalWithVatExcluded()
    {
        $value = $this->get(self::TOTALWITHVATEXCLUDED);
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
     * Sets value of 'TotalInWords' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalInWords($value)
    {
        return $this->set(self::TOTALINWORDS, $value);
    }

    /**
     * Returns value of 'TotalInWords' property
     *
     * @return string
     */
    public function getTotalInWords()
    {
        $value = $this->get(self::TOTALINWORDS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SupplyDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSupplyDate($value)
    {
        return $this->set(self::SUPPLYDATE, $value);
    }

    /**
     * Returns value of 'SupplyDate' property
     *
     * @return string
     */
    public function getSupplyDate()
    {
        $value = $this->get(self::SUPPLYDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'SupplyAllowedBy' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Official $value Property value
     *
     * @return null
     */
    public function setSupplyAllowedBy(\Diadoc\Api\Proto\Invoicing\Official $value=null)
    {
        return $this->set(self::SUPPLYALLOWEDBY, $value);
    }

    /**
     * Returns value of 'SupplyAllowedBy' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Official
     */
    public function getSupplyAllowedBy()
    {
        return $this->get(self::SUPPLYALLOWEDBY);
    }

    /**
     * Sets value of 'SupplyPerformedBy' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Official $value Property value
     *
     * @return null
     */
    public function setSupplyPerformedBy(\Diadoc\Api\Proto\Invoicing\Official $value=null)
    {
        return $this->set(self::SUPPLYPERFORMEDBY, $value);
    }

    /**
     * Returns value of 'SupplyPerformedBy' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Official
     */
    public function getSupplyPerformedBy()
    {
        return $this->get(self::SUPPLYPERFORMEDBY);
    }

    /**
     * Sets value of 'ChiefAccountant' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\Official $value Property value
     *
     * @return null
     */
    public function setChiefAccountant(\Diadoc\Api\Proto\Invoicing\Official $value=null)
    {
        return $this->set(self::CHIEFACCOUNTANT, $value);
    }

    /**
     * Returns value of 'ChiefAccountant' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\Official
     */
    public function getChiefAccountant()
    {
        return $this->get(self::CHIEFACCOUNTANT);
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

    /**
     * Sets value of 'AttachmentSheetsQuantity' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAttachmentSheetsQuantity($value)
    {
        return $this->set(self::ATTACHMENTSHEETSQUANTITY, $value);
    }

    /**
     * Returns value of 'AttachmentSheetsQuantity' property
     *
     * @return string
     */
    public function getAttachmentSheetsQuantity()
    {
        $value = $this->get(self::ATTACHMENTSHEETSQUANTITY);
        return $value === null ? (string)$value : $value;
    }
}
}