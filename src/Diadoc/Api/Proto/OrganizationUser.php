<?php
/**
 * Auto generated from OrganizationUser.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * OrganizationUser message
 */
class OrganizationUser extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const NAME = 2;
    const PERMISSIONS = 3;
    const POSITION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'Id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NAME => array(
            'name' => 'Name',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PERMISSIONS => array(
            'name' => 'Permissions',
            'required' => true,
            'type' => '\Diadoc\Api\Proto\OrganizationUserPermissions'
        ),
        self::POSITION => array(
            'name' => 'Position',
            'required' => true,
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
        $this->values[self::ID] = null;
        $this->values[self::NAME] = null;
        $this->values[self::PERMISSIONS] = null;
        $this->values[self::POSITION] = null;
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
     * Sets value of 'Id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'Id' property
     *
     * @return string
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'Name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'Permissions' property
     *
     * @param \Diadoc\Api\Proto\OrganizationUserPermissions $value Property value
     *
     * @return null
     */
    public function setPermissions(\Diadoc\Api\Proto\OrganizationUserPermissions $value=null)
    {
        return $this->set(self::PERMISSIONS, $value);
    }

    /**
     * Returns value of 'Permissions' property
     *
     * @return \Diadoc\Api\Proto\OrganizationUserPermissions
     */
    public function getPermissions()
    {
        return $this->get(self::PERMISSIONS);
    }

    /**
     * Sets value of 'Position' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPosition($value)
    {
        return $this->set(self::POSITION, $value);
    }

    /**
     * Returns value of 'Position' property
     *
     * @return string
     */
    public function getPosition()
    {
        $value = $this->get(self::POSITION);
        return $value === null ? (string)$value : $value;
    }
}
}