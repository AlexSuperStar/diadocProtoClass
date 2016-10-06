<?php
/**
 * Auto generated from Docflow.proto at 2016-10-06 18:08:10
 *
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * DocflowStatus message
 */
class DocflowStatus extends \ProtobufMessage
{
    /* Field index constants */
    const PRIMARYSTATUS = 1;
    const SECONDARYSTATUS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PRIMARYSTATUS => array(
            'name' => 'PrimaryStatus',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\DocflowStatusModel'
        ),
        self::SECONDARYSTATUS => array(
            'name' => 'SecondaryStatus',
            'required' => false,
            'type' => '\Diadoc\Api\Proto\Docflow\DocflowStatusModel'
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
        $this->values[self::PRIMARYSTATUS] = null;
        $this->values[self::SECONDARYSTATUS] = null;
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
     * Sets value of 'PrimaryStatus' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocflowStatusModel $value Property value
     *
     * @return null
     */
    public function setPrimaryStatus(\Diadoc\Api\Proto\Docflow\DocflowStatusModel $value=null)
    {
        return $this->set(self::PRIMARYSTATUS, $value);
    }

    /**
     * Returns value of 'PrimaryStatus' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocflowStatusModel
     */
    public function getPrimaryStatus()
    {
        return $this->get(self::PRIMARYSTATUS);
    }

    /**
     * Sets value of 'SecondaryStatus' property
     *
     * @param \Diadoc\Api\Proto\Docflow\DocflowStatusModel $value Property value
     *
     * @return null
     */
    public function setSecondaryStatus(\Diadoc\Api\Proto\Docflow\DocflowStatusModel $value=null)
    {
        return $this->set(self::SECONDARYSTATUS, $value);
    }

    /**
     * Returns value of 'SecondaryStatus' property
     *
     * @return \Diadoc\Api\Proto\Docflow\DocflowStatusModel
     */
    public function getSecondaryStatus()
    {
        return $this->get(self::SECONDARYSTATUS);
    }
}
}