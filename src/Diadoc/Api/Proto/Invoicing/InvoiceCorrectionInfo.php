<?php
/**
* Auto generated from InvoiceInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * InvoiceCorrectionInfo message
 */
class InvoiceCorrectionInfo extends \ProtobufMessage
{
    /* Field index constants */
    const INVOICEDATE = 1;
    const INVOICENUMBER = 2;
    const INVOICEREVISIONDATE = 3;
    const INVOICEREVISIONNUMBER = 4;
    const INVOICECORRECTIONDATE = 5;
    const INVOICECORRECTIONNUMBER = 6;
    const INVOICECORRECTIONREVISIONDATE = 7;
    const INVOICECORRECTIONREVISIONNUMBER = 8;
    const SELLER = 9;
    const BUYER = 10;
    const SIGNER = 11;
    const ITEMS = 12;
    const CURRENCY = 13;
    const TOTALSINC = 14;
    const TOTALSDEC = 15;
    const ADDITIONALINFO = 16;
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
        self::INVOICECORRECTIONDATE => array(
            'name' => 'InvoiceCorrectionDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVOICECORRECTIONNUMBER => array(
            'name' => 'InvoiceCorrectionNumber',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVOICECORRECTIONREVISIONDATE => array(
            'name' => 'InvoiceCorrectionRevisionDate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::INVOICECORRECTIONREVISIONNUMBER => array(
            'name' => 'InvoiceCorrectionRevisionNumber',
            'required' => false,
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
        self::SIGNER => array(
            'name' => 'Signer',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\Signer'
        ),
        self::ITEMS => array(
            'name' => 'Items',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\InvoiceCorrectionItem'
        ),
        self::CURRENCY => array(
            'name' => 'Currency',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALSINC => array(
            'name' => 'TotalsInc',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff'
        ),
        self::TOTALSDEC => array(
            'name' => 'TotalsDec',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff'
        ),
        self::ADDITIONALINFO => array(
            'name' => 'AdditionalInfo',
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
        $this->values[self::INVOICEREVISIONDATE] = null;
        $this->values[self::INVOICEREVISIONNUMBER] = null;
        $this->values[self::INVOICECORRECTIONDATE] = null;
        $this->values[self::INVOICECORRECTIONNUMBER] = null;
        $this->values[self::INVOICECORRECTIONREVISIONDATE] = null;
        $this->values[self::INVOICECORRECTIONREVISIONNUMBER] = null;
        $this->values[self::SELLER] = null;
        $this->values[self::BUYER] = null;
        $this->values[self::SIGNER] = null;
        $this->values[self::ITEMS] = array();
        $this->values[self::CURRENCY] = null;
        $this->values[self::TOTALSINC] = null;
        $this->values[self::TOTALSDEC] = null;
        $this->values[self::ADDITIONALINFO] = null;
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
     * Sets value of 'InvoiceCorrectionDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionDate($value)
    {
        return $this->set(self::INVOICECORRECTIONDATE, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionDate' property
     *
     * @return string
     */
    public function getInvoiceCorrectionDate()
    {
        $value = $this->get(self::INVOICECORRECTIONDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'InvoiceCorrectionNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionNumber($value)
    {
        return $this->set(self::INVOICECORRECTIONNUMBER, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionNumber' property
     *
     * @return string
     */
    public function getInvoiceCorrectionNumber()
    {
        $value = $this->get(self::INVOICECORRECTIONNUMBER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'InvoiceCorrectionRevisionDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionRevisionDate($value)
    {
        return $this->set(self::INVOICECORRECTIONREVISIONDATE, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionRevisionDate' property
     *
     * @return string
     */
    public function getInvoiceCorrectionRevisionDate()
    {
        $value = $this->get(self::INVOICECORRECTIONREVISIONDATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'InvoiceCorrectionRevisionNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionRevisionNumber($value)
    {
        return $this->set(self::INVOICECORRECTIONREVISIONNUMBER, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionRevisionNumber' property
     *
     * @return string
     */
    public function getInvoiceCorrectionRevisionNumber()
    {
        $value = $this->get(self::INVOICECORRECTIONREVISIONNUMBER);
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
     * Appends value to 'Items' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceCorrectionItem $value Value to append
     *
     * @return null
     */
    public function appendItems(\Diadoc\Api\Proto\Invoicing\InvoiceCorrectionItem $value)
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
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceCorrectionItem[]
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
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceCorrectionItem
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
     * Sets value of 'TotalsInc' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff $value Property value
     *
     * @return null
     */
    public function setTotalsInc(\Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff $value=null)
    {
        return $this->set(self::TOTALSINC, $value);
    }

    /**
     * Returns value of 'TotalsInc' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff
     */
    public function getTotalsInc()
    {
        return $this->get(self::TOTALSINC);
    }

    /**
     * Sets value of 'TotalsDec' property
     *
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff $value Property value
     *
     * @return null
     */
    public function setTotalsDec(\Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff $value=null)
    {
        return $this->set(self::TOTALSDEC, $value);
    }

    /**
     * Returns value of 'TotalsDec' property
     *
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceTotalsDiff
     */
    public function getTotalsDec()
    {
        return $this->get(self::TOTALSDEC);
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