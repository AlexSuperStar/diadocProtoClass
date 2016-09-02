<?php
/**
 * Auto generated from InvoiceInfo.proto at 2016-09-02 13:32:04
 *
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * InvoiceInfo message
 */
class InvoiceInfo extends \ProtobufMessage
{
    /* Field index constants */
    const INVOICEDATE = 1;
    const INVOICENUMBER = 2;
    const SELLER = 3;
    const BUYER = 4;
    const SHIPPER = 5;
    const CONSIGNEE = 6;
    const SIGNER = 7;
    const PAYMENTDOCUMENTS = 8;
    const ITEMS = 9;
    const CURRENCY = 10;
    const TOTALWITHVATEXCLUDED = 11;
    const VAT = 12;
    const TOTAL = 13;
    const ADDITIONALINFO = 14;
    const INVOICEREVISIONDATE = 15;
    const INVOICEREVISIONNUMBER = 16;
    const ADDITIONALINFOS = 17;
    const VERSION = 18;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INVOICEDATE => array(
            'name' => 'InvoiceDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVOICENUMBER => array(
            'name' => 'InvoiceNumber',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SELLER => array(
            'name' => 'Seller',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo'
        ),
        self::BUYER => array(
            'name' => 'Buyer',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo'
        ),
        self::SHIPPER => array(
            'name' => 'Shipper',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\ShipperOrConsignee'
        ),
        self::CONSIGNEE => array(
            'name' => 'Consignee',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\ShipperOrConsignee'
        ),
        self::SIGNER => array(
            'name' => 'Signer',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Signer'
        ),
        self::PAYMENTDOCUMENTS => array(
            'name' => 'PaymentDocuments',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo'
        ),
        self::ITEMS => array(
            'name' => 'Items',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\InvoiceItem'
        ),
        self::CURRENCY => array(
            'name' => 'Currency',
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
        self::ADDITIONALINFO => array(
            'name' => 'AdditionalInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVOICEREVISIONDATE => array(
            'name' => 'InvoiceRevisionDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVOICEREVISIONNUMBER => array(
            'name' => 'InvoiceRevisionNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDITIONALINFOS => array(
            'name' => 'AdditionalInfos',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\AdditionalInfo'
        ),
        self::VERSION => array(
            'default' => \Diadoc\Api\Proto\Invoicing\InvoiceFormatVersion::DefaultInvoiceFormatVersion,
            'name' => 'Version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::INVOICEDATE] = null;
        $this->values[self::INVOICENUMBER] = null;
        $this->values[self::SELLER] = null;
        $this->values[self::BUYER] = null;
        $this->values[self::SHIPPER] = null;
        $this->values[self::CONSIGNEE] = null;
        $this->values[self::SIGNER] = null;
        $this->values[self::PAYMENTDOCUMENTS] = array();
        $this->values[self::ITEMS] = array();
        $this->values[self::CURRENCY] = null;
        $this->values[self::TOTALWITHVATEXCLUDED] = null;
        $this->values[self::VAT] = null;
        $this->values[self::TOTAL] = null;
        $this->values[self::ADDITIONALINFO] = null;
        $this->values[self::INVOICEREVISIONDATE] = null;
        $this->values[self::INVOICEREVISIONNUMBER] = null;
        $this->values[self::ADDITIONALINFOS] = array();
        $this->values[self::VERSION] = self::$fields[self::VERSION]['default'];
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
     * Sets value of 'InvoiceDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInvoiceDate($value)
    {
        return $this->set(self::INVOICEDATE, $value);
    }

    /**
     * Returns value of 'InvoiceDate' property
     *
     * @return string
     */
    public function getInvoiceDate()
    {
        $value = $this->get(self::INVOICEDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'InvoiceNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInvoiceNumber($value)
    {
        return $this->set(self::INVOICENUMBER, $value);
    }

    /**
     * Returns value of 'InvoiceNumber' property
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        $value = $this->get(self::INVOICENUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Seller' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo $value Property value
     *
     * @return null
     */
    public function setSeller(\Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo $value=null)
    {
        return $this->set(self::SELLER, $value);
    }

    /**
     * Returns value of 'Seller' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo
     */
    public function getSeller()
    {
        return $this->get(self::SELLER);
    }

    /**
     * Sets value of 'Buyer' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo $value Property value
     *
     * @return null
     */
    public function setBuyer(\Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo $value=null)
    {
        return $this->set(self::BUYER, $value);
    }

    /**
     * Returns value of 'Buyer' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo
     */
    public function getBuyer()
    {
        return $this->get(self::BUYER);
    }

    /**
     * Sets value of 'Shipper' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\ShipperOrConsignee $value Property value
     *
     * @return null
     */
    public function setShipper(\Diadoc\Api\Proto\Invoicing\ShipperOrConsignee $value=null)
    {
        return $this->set(self::SHIPPER, $value);
    }

    /**
     * Returns value of 'Shipper' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\ShipperOrConsignee
     */
    public function getShipper()
    {
        return $this->get(self::SHIPPER);
    }

    /**
     * Sets value of 'Consignee' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\ShipperOrConsignee $value Property value
     *
     * @return null
     */
    public function setConsignee(\Diadoc\Api\Proto\Invoicing\ShipperOrConsignee $value=null)
    {
        return $this->set(self::CONSIGNEE, $value);
    }

    /**
     * Returns value of 'Consignee' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\ShipperOrConsignee
     */
    public function getConsignee()
    {
        return $this->get(self::CONSIGNEE);
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
     * Appends value to 'PaymentDocuments' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo $value Value to append
     *
     * @return null
     */
    public function appendPaymentDocuments(\Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo $value)
    {
        return $this->append(self::PAYMENTDOCUMENTS, $value);
    }

    /**
     * Clears 'PaymentDocuments' list
     *
     * @return null
     */
    public function clearPaymentDocuments()
    {
        return $this->clear(self::PAYMENTDOCUMENTS);
    }

    /**
     * Returns 'PaymentDocuments' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo[]
     */
    public function getPaymentDocuments()
    {
        return $this->get(self::PAYMENTDOCUMENTS);
    }

    /**
     * Returns 'PaymentDocuments' iterator
     *
     * @return \ArrayIterator
     */
    public function getPaymentDocumentsIterator()
    {
        return new \ArrayIterator($this->get(self::PAYMENTDOCUMENTS));
    }

    /**
     * Returns element from 'PaymentDocuments' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo
     */
    public function getPaymentDocumentsAt($offset)
    {
        return $this->get(self::PAYMENTDOCUMENTS, $offset);
    }

    /**
     * Returns count of 'PaymentDocuments' list
     *
     * @return int
     */
    public function getPaymentDocumentsCount()
    {
        return $this->count(self::PAYMENTDOCUMENTS);
    }

    /**
     * Appends value to 'Items' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceItem $value Value to append
     *
     * @return null
     */
    public function appendItems(\Diadoc\Api\Proto\Invoicing\InvoiceItem $value)
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
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceItem[]
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
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceItem
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
     * Sets value of 'Currency' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCurrency($value)
    {
        return $this->set(self::CURRENCY, $value);
    }

    /**
     * Returns value of 'Currency' property
     *
     * @return string
     */
    public function getCurrency()
    {
        $value = $this->get(self::CURRENCY);
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
     * Sets value of 'InvoiceRevisionDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInvoiceRevisionDate($value)
    {
        return $this->set(self::INVOICEREVISIONDATE, $value);
    }

    /**
     * Returns value of 'InvoiceRevisionDate' property
     *
     * @return string
     */
    public function getInvoiceRevisionDate()
    {
        $value = $this->get(self::INVOICEREVISIONDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'InvoiceRevisionNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInvoiceRevisionNumber($value)
    {
        return $this->set(self::INVOICEREVISIONNUMBER, $value);
    }

    /**
     * Returns value of 'InvoiceRevisionNumber' property
     *
     * @return string
     */
    public function getInvoiceRevisionNumber()
    {
        $value = $this->get(self::INVOICEREVISIONNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'AdditionalInfos' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\AdditionalInfo $value Value to append
     *
     * @return null
     */
    public function appendAdditionalInfos(\Diadoc\Api\Proto\Invoicing\AdditionalInfo $value)
    {
        return $this->append(self::ADDITIONALINFOS, $value);
    }

    /**
     * Clears 'AdditionalInfos' list
     *
     * @return null
     */
    public function clearAdditionalInfos()
    {
        return $this->clear(self::ADDITIONALINFOS);
    }

    /**
     * Returns 'AdditionalInfos' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfo[]
     */
    public function getAdditionalInfos()
    {
        return $this->get(self::ADDITIONALINFOS);
    }

    /**
     * Returns 'AdditionalInfos' iterator
     *
     * @return \ArrayIterator
     */
    public function getAdditionalInfosIterator()
    {
        return new \ArrayIterator($this->get(self::ADDITIONALINFOS));
    }

    /**
     * Returns element from 'AdditionalInfos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfo
     */
    public function getAdditionalInfosAt($offset)
    {
        return $this->get(self::ADDITIONALINFOS, $offset);
    }

    /**
     * Returns count of 'AdditionalInfos' list
     *
     * @return int
     */
    public function getAdditionalInfosCount()
    {
        return $this->count(self::ADDITIONALINFOS);
    }

    /**
     * Sets value of 'Version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'Version' property
     *
     * @return integer
     */
    public function getVersion()
    {
        $value = $this->get(self::VERSION);
        return $value === null ? (integer)$value : $value;
    }
}
}