<?php
/**
* Auto generated from DocflowApi.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * GetDocflowEventsRequest message
 */
class GetDocflowEventsRequest extends \ProtobufMessage
{
    /* Field index constants */
    const FILTER = 1;
    const AFTERINDEXKEY = 2;
    const POPULATEDOCUMENTS = 3;
    const INJECTENTITYCONTENT = 4;
    const POPULATEPREVIOUSDOCUMENTSTATES = 5;

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
        self::POPULATEDOCUMENTS => array(
            'default' => false,
            'name' => 'PopulateDocuments',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::INJECTENTITYCONTENT => array(
            'default' => false,
            'name' => 'InjectEntityContent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::POPULATEPREVIOUSDOCUMENTSTATES => array(
            'default' => false,
            'name' => 'PopulatePreviousDocumentStates',
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
        $this->values[self::POPULATEDOCUMENTS] = self::$fields[self::POPULATEDOCUMENTS]['default'];
        $this->values[self::INJECTENTITYCONTENT] = self::$fields[self::INJECTENTITYCONTENT]['default'];
        $this->values[self::POPULATEPREVIOUSDOCUMENTSTATES] = self::$fields[self::POPULATEPREVIOUSDOCUMENTSTATES]['default'];
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
     * Sets value of 'PopulateDocuments' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPopulateDocuments($value)
    {
        return $this->set(self::POPULATEDOCUMENTS, $value);
    }

    /**
     * Returns value of 'PopulateDocuments' property
     *
     * @return boolean
     */
    public function getPopulateDocuments()
    {
        $value = $this->get(self::POPULATEDOCUMENTS);
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

    /**
     * Sets value of 'PopulatePreviousDocumentStates' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPopulatePreviousDocumentStates($value)
    {
        return $this->set(self::POPULATEPREVIOUSDOCUMENTSTATES, $value);
    }

    /**
     * Returns value of 'PopulatePreviousDocumentStates' property
     *
     * @return boolean
     */
    public function getPopulatePreviousDocumentStates()
    {
        $value = $this->get(self::POPULATEPREVIOUSDOCUMENTSTATES);
        return $value === null ? (boolean)$value : $value;
    }
}
}