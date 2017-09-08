<?php
/**
* Auto generated from DiadocMessage-PostApi.proto
*
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * EncryptedInvoiceCorrectionMetadata message
 */
class EncryptedInvoiceCorrectionMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const ORIGINALINVOICEDATEANDNUMBER = 1;
    const ORIGINALINVOICEREVISIONDATEANDNUMBER = 2;
    const INVOICECORRECTIONREVISIONDATEANDNUMBER = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ORIGINALINVOICEDATEANDNUMBER => array(
            'name' => 'OriginalInvoiceDateAndNumber',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber'
        ),
        self::ORIGINALINVOICEREVISIONDATEANDNUMBER => array(
            'name' => 'OriginalInvoiceRevisionDateAndNumber',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber'
        ),
        self::INVOICECORRECTIONREVISIONDATEANDNUMBER => array(
            'name' => 'InvoiceCorrectionRevisionDateAndNumber',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber'
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
        $this->values[self::ORIGINALINVOICEDATEANDNUMBER] = null;
        $this->values[self::ORIGINALINVOICEREVISIONDATEANDNUMBER] = null;
        $this->values[self::INVOICECORRECTIONREVISIONDATEANDNUMBER] = null;
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
     * Sets value of 'OriginalInvoiceDateAndNumber' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceDateAndNumber(\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value=null)
    {
        return $this->set(self::ORIGINALINVOICEDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceDateAndNumber' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalInvoiceDateAndNumber()
    {
        return $this->get(self::ORIGINALINVOICEDATEANDNUMBER);
    }

    /**
     * Sets value of 'OriginalInvoiceRevisionDateAndNumber' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setOriginalInvoiceRevisionDateAndNumber(\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value=null)
    {
        return $this->set(self::ORIGINALINVOICEREVISIONDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'OriginalInvoiceRevisionDateAndNumber' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalInvoiceRevisionDateAndNumber()
    {
        return $this->get(self::ORIGINALINVOICEREVISIONDATEANDNUMBER);
    }

    /**
     * Sets value of 'InvoiceCorrectionRevisionDateAndNumber' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setInvoiceCorrectionRevisionDateAndNumber(\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value=null)
    {
        return $this->set(self::INVOICECORRECTIONREVISIONDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'InvoiceCorrectionRevisionDateAndNumber' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getInvoiceCorrectionRevisionDateAndNumber()
    {
        return $this->get(self::INVOICECORRECTIONREVISIONDATEANDNUMBER);
    }
}
}