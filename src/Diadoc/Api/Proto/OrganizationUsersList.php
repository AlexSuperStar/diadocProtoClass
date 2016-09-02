<?php
/**
 * Auto generated from OrganizationUser.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * OrganizationUsersList message
 */
class OrganizationUsersList extends \ProtobufMessage
{
    /* Field index constants */
    const USERS = 1;
    const CURRENTUSERID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERS => array(
            'name' => 'Users',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\OrganizationUser'
        ),
        self::CURRENTUSERID => array(
            'name' => 'CurrentUserId',
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
        $this->values[self::USERS] = array();
        $this->values[self::CURRENTUSERID] = null;
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
     * Appends value to 'Users' list
     *
     * @param \Diadoc\Api\Proto\OrganizationUser $value Value to append
     *
     * @return null
     */
    public function appendUsers(\Diadoc\Api\Proto\OrganizationUser $value)
    {
        return $this->append(self::USERS, $value);
    }

    /**
     * Clears 'Users' list
     *
     * @return null
     */
    public function clearUsers()
    {
        return $this->clear(self::USERS);
    }

    /**
     * Returns 'Users' list
     *
     * @return \Diadoc\Api\Proto\OrganizationUser[]
     */
    public function getUsers()
    {
        return $this->get(self::USERS);
    }

    /**
     * Returns 'Users' iterator
     *
     * @return \ArrayIterator
     */
    public function getUsersIterator()
    {
        return new \ArrayIterator($this->get(self::USERS));
    }

    /**
     * Returns element from 'Users' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\OrganizationUser
     */
    public function getUsersAt($offset)
    {
        return $this->get(self::USERS, $offset);
    }

    /**
     * Returns count of 'Users' list
     *
     * @return int
     */
    public function getUsersCount()
    {
        return $this->count(self::USERS);
    }

    /**
     * Sets value of 'CurrentUserId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCurrentUserId($value)
    {
        return $this->set(self::CURRENTUSERID, $value);
    }

    /**
     * Returns value of 'CurrentUserId' property
     *
     * @return string
     */
    public function getCurrentUserId()
    {
        $value = $this->get(self::CURRENTUSERID);
        return $value === null ? (string)$value : $value;
    }
}
}