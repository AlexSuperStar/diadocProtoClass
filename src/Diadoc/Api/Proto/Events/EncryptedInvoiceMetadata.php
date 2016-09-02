<?php
/**
 * Auto generated from DiadocMessage-PostApi.proto at 2016-09-02 13:31:45
 *
 * Diadoc.Api.Proto.Events package
 */

namespace Diadoc\Api\Proto\Events {
/**
 * EncryptedInvoiceMetadata message
 */
class EncryptedInvoiceMetadata extends \ProtobufMessage
{
    /* Field index constants */
    const REVISIONDATEANDNUMBER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REVISIONDATEANDNUMBER => array(
            'name' => 'RevisionDateAndNumber',
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
        $this->values[self::REVISIONDATEANDNUMBER] = null;
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
     * Sets value of 'RevisionDateAndNumber' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value Property value
     *
     * @return null
     */
    public function setRevisionDateAndNumber(\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value=null)
    {
        return $this->set(self::REVISIONDATEANDNUMBER, $value);
    }

    /**
     * Returns value of 'RevisionDateAndNumber' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getRevisionDateAndNumber()
    {
        return $this->get(self::REVISIONDATEANDNUMBER);
    }
}
}