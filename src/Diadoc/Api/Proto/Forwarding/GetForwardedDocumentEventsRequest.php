<?php
/**
 * Auto generated from ForwardingApi.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto.Forwarding package
 */

namespace Diadoc\Api\Proto\Forwarding {
/**
 * GetForwardedDocumentEventsRequest message
 */
class GetForwardedDocumentEventsRequest extends \ProtobufMessage
{
    /* Field index constants */
    const FILTER = 1;
    const AFTERINDEXKEY = 2;
    const POPULATEFORWARDEDDOCUMENTS = 3;
    const INJECTENTITYCONTENT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FILTER => array(
            'name' => 'Filter',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\TimeBasedFilter'
        ),
        self::AFTERINDEXKEY => array(
            'name' => 'AfterIndexKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::POPULATEFORWARDEDDOCUMENTS => array(
            'default' => false,
            'name' => 'PopulateForwardedDocuments',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::INJECTENTITYCONTENT => array(
            'default' => false,
            'name' => 'InjectEntityContent',
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
        $this->values[self::FILTER] = null;
        $this->values[self::AFTERINDEXKEY] = null;
        $this->values[self::POPULATEFORWARDEDDOCUMENTS] = self::$fields[self::POPULATEFORWARDEDDOCUMENTS]['default'];
        $this->values[self::INJECTENTITYCONTENT] = self::$fields[self::INJECTENTITYCONTENT]['default'];
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
     * Sets value of 'Filter' property
     *
     * @param \Diadoc\Api\Proto\TimeBasedFilter $value Property value
     *
     * @return null
     */
    public function setFilter(\Diadoc\Api\Proto\TimeBasedFilter $value=null)
    {
        return $this->set(self::FILTER, $value);
    }

    /**
     * Returns value of 'Filter' property
     *
     * @return \Diadoc\Api\Proto\TimeBasedFilter
     */
    public function getFilter()
    {
        return $this->get(self::FILTER);
    }

    /**
     * Sets value of 'AfterIndexKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAfterIndexKey($value)
    {
        return $this->set(self::AFTERINDEXKEY, $value);
    }

    /**
     * Returns value of 'AfterIndexKey' property
     *
     * @return string
     */
    public function getAfterIndexKey()
    {
        $value = $this->get(self::AFTERINDEXKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'PopulateForwardedDocuments' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPopulateForwardedDocuments($value)
    {
        return $this->set(self::POPULATEFORWARDEDDOCUMENTS, $value);
    }

    /**
     * Returns value of 'PopulateForwardedDocuments' property
     *
     * @return boolean
     */
    public function getPopulateForwardedDocuments()
    {
        $value = $this->get(self::POPULATEFORWARDEDDOCUMENTS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'InjectEntityContent' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setInjectEntityContent($value)
    {
        return $this->set(self::INJECTENTITYCONTENT, $value);
    }

    /**
     * Returns value of 'InjectEntityContent' property
     *
     * @return boolean
     */
    public function getInjectEntityContent()
    {
        $value = $this->get(self::INJECTENTITYCONTENT);
        return $value === null ? (boolean)$value : $value;
    }
}
}