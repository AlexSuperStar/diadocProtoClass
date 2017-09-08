<?php
/**
* Auto generated from UniversalTransferDocumentInfo.proto
*
 * Diadoc.Api.Proto.Invoicing package
 */

namespace Diadoc\Api\Proto\Invoicing {
/**
 * AdditionalInfoId message
 */
class AdditionalInfoId extends \ProtobufMessage
{
    /* Field index constants */
    const INFOFILEID = 1;
    const ADDITIONALINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INFOFILEID => array(
            'name' => 'InfoFileId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDITIONALINFO => array(
            'name' => 'AdditionalInfo',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Invoicing\AdditionalInfo'
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
        $this->values[self::INFOFILEID] = null;
        $this->values[self::ADDITIONALINFO] = array();
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
     * Sets value of 'InfoFileId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInfoFileId($value)
    {
        return $this->set(self::INFOFILEID, $value);
    }

    /**
     * Returns value of 'InfoFileId' property
     *
     * @return string
     */
    public function getInfoFileId()
    {
        $value = $this->get(self::INFOFILEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'AdditionalInfo' list
     *
     * @param \Diadoc\Api\Proto\Invoicing\AdditionalInfo $value Value to append
     *
     * @return null
     */
    public function appendAdditionalInfo(\Diadoc\Api\Proto\Invoicing\AdditionalInfo $value)
    {
        return $this->append(self::ADDITIONALINFO, $value);
    }

    /**
     * Clears 'AdditionalInfo' list
     *
     * @return null
     */
    public function clearAdditionalInfo()
    {
        return $this->clear(self::ADDITIONALINFO);
    }

    /**
     * Returns 'AdditionalInfo' list
     *
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfo[]
     */
    public function getAdditionalInfo()
    {
        return $this->get(self::ADDITIONALINFO);
    }

    /**
     * Returns 'AdditionalInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getAdditionalInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ADDITIONALINFO));
    }

    /**
     * Returns element from 'AdditionalInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfo
     */
    public function getAdditionalInfoAt($offset)
    {
        return $this->get(self::ADDITIONALINFO, $offset);
    }

    /**
     * Returns count of 'AdditionalInfo' list
     *
     * @return int
     */
    public function getAdditionalInfoCount()
    {
        return $this->count(self::ADDITIONALINFO);
    }
}
}