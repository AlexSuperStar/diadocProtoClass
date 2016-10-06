<?php
/**
 * Auto generated from Address.proto at 2016-10-06 18:08:58
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * RussianAddress message
 */
class RussianAddress extends \ProtobufMessage
{
    /* Field index constants */
    const ZIPCODE = 1;
    const REGION = 2;
    const TERRITORY = 3;
    const CITY = 4;
    const LOCALITY = 5;
    const STREET = 6;
    const BUILDING = 7;
    const BLOCK = 8;
    const APARTMENT = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ZIPCODE => array(
            'name' => 'ZipCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REGION => array(
            'name' => 'Region',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TERRITORY => array(
            'name' => 'Territory',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CITY => array(
            'name' => 'City',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LOCALITY => array(
            'name' => 'Locality',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STREET => array(
            'name' => 'Street',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BUILDING => array(
            'name' => 'Building',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BLOCK => array(
            'name' => 'Block',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::APARTMENT => array(
            'name' => 'Apartment',
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
        $this->values[self::ZIPCODE] = null;
        $this->values[self::REGION] = null;
        $this->values[self::TERRITORY] = null;
        $this->values[self::CITY] = null;
        $this->values[self::LOCALITY] = null;
        $this->values[self::STREET] = null;
        $this->values[self::BUILDING] = null;
        $this->values[self::BLOCK] = null;
        $this->values[self::APARTMENT] = null;
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
     * Sets value of 'ZipCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setZipCode($value)
    {
        return $this->set(self::ZIPCODE, $value);
    }

    /**
     * Returns value of 'ZipCode' property
     *
     * @return string
     */
    public function getZipCode()
    {
        $value = $this->get(self::ZIPCODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Region' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRegion($value)
    {
        return $this->set(self::REGION, $value);
    }

    /**
     * Returns value of 'Region' property
     *
     * @return string
     */
    public function getRegion()
    {
        $value = $this->get(self::REGION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Territory' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTerritory($value)
    {
        return $this->set(self::TERRITORY, $value);
    }

    /**
     * Returns value of 'Territory' property
     *
     * @return string
     */
    public function getTerritory()
    {
        $value = $this->get(self::TERRITORY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'City' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'City' property
     *
     * @return string
     */
    public function getCity()
    {
        $value = $this->get(self::CITY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Locality' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLocality($value)
    {
        return $this->set(self::LOCALITY, $value);
    }

    /**
     * Returns value of 'Locality' property
     *
     * @return string
     */
    public function getLocality()
    {
        $value = $this->get(self::LOCALITY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Street' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreet($value)
    {
        return $this->set(self::STREET, $value);
    }

    /**
     * Returns value of 'Street' property
     *
     * @return string
     */
    public function getStreet()
    {
        $value = $this->get(self::STREET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Building' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBuilding($value)
    {
        return $this->set(self::BUILDING, $value);
    }

    /**
     * Returns value of 'Building' property
     *
     * @return string
     */
    public function getBuilding()
    {
        $value = $this->get(self::BUILDING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Block' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBlock($value)
    {
        return $this->set(self::BLOCK, $value);
    }

    /**
     * Returns value of 'Block' property
     *
     * @return string
     */
    public function getBlock()
    {
        $value = $this->get(self::BLOCK);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Apartment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setApartment($value)
    {
        return $this->set(self::APARTMENT, $value);
    }

    /**
     * Returns value of 'Apartment' property
     *
     * @return string
     */
    public function getApartment()
    {
        $value = $this->get(self::APARTMENT);
        return $value === null ? (string)$value : $value;
    }
}
}