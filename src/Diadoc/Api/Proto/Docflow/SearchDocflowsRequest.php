<?php
/**
 * Auto generated from DocflowApi.proto at 2016-10-06 18:03:23
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * SearchDocflowsRequest message
 */
class SearchDocflowsRequest extends \ProtobufMessage
{
    /* Field index constants */
    const QUERYSTRING = 1;
    const COUNT = 2;
    const FIRSTINDEX = 3;
    const SCOPE = 4;
    const INJECTENTITYCONTENT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::QUERYSTRING => array(
            'name' => 'QueryString',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COUNT => array(
            'default' => 100,
            'name' => 'Count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FIRSTINDEX => array(
            'name' => 'FirstIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SCOPE => array(
            'default' => \Diadoc\Api\Proto\Docflow\SearchScope::SearchScopeAny,
            'name' => 'Scope',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::QUERYSTRING] = null;
        $this->values[self::COUNT] = self::$fields[self::COUNT]['default'];
        $this->values[self::FIRSTINDEX] = null;
        $this->values[self::SCOPE] = self::$fields[self::SCOPE]['default'];
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
     * Sets value of 'QueryString' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setQueryString($value)
    {
        return $this->set(self::QUERYSTRING, $value);
    }

    /**
     * Returns value of 'QueryString' property
     *
     * @return string
     */
    public function getQueryString()
    {
        $value = $this->get(self::QUERYSTRING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'Count' property
     *
     * @return integer
     */
    public function getCount()
    {
        $value = $this->get(self::COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'FirstIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFirstIndex($value)
    {
        return $this->set(self::FIRSTINDEX, $value);
    }

    /**
     * Returns value of 'FirstIndex' property
     *
     * @return integer
     */
    public function getFirstIndex()
    {
        $value = $this->get(self::FIRSTINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'Scope' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScope($value)
    {
        return $this->set(self::SCOPE, $value);
    }

    /**
     * Returns value of 'Scope' property
     *
     * @return integer
     */
    public function getScope()
    {
        $value = $this->get(self::SCOPE);
        return $value === null ? (integer)$value : $value;
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