<?php
/**
 * Auto generated from ResolutionChainList.proto at 2016-09-02 13:31:24
 *
 * Diadoc.Api.Proto package
 */

namespace Diadoc\Api\Proto {
/**
 * ResolutionChainList message
 */
class ResolutionChainList extends \ProtobufMessage
{
    /* Field index constants */
    const RESOLUTIONCHAINS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESOLUTIONCHAINS => array(
            'name' => 'ResolutionChains',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\ResolutionChain'
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
        $this->values[self::RESOLUTIONCHAINS] = array();
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
     * Appends value to 'ResolutionChains' list
     *
     * @param \Diadoc\Api\Proto\ResolutionChain $value Value to append
     *
     * @return null
     */
    public function appendResolutionChains(\Diadoc\Api\Proto\ResolutionChain $value)
    {
        return $this->append(self::RESOLUTIONCHAINS, $value);
    }

    /**
     * Clears 'ResolutionChains' list
     *
     * @return null
     */
    public function clearResolutionChains()
    {
        return $this->clear(self::RESOLUTIONCHAINS);
    }

    /**
     * Returns 'ResolutionChains' list
     *
     * @return \Diadoc\Api\Proto\ResolutionChain[]
     */
    public function getResolutionChains()
    {
        return $this->get(self::RESOLUTIONCHAINS);
    }

    /**
     * Returns 'ResolutionChains' iterator
     *
     * @return \ArrayIterator
     */
    public function getResolutionChainsIterator()
    {
        return new \ArrayIterator($this->get(self::RESOLUTIONCHAINS));
    }

    /**
     * Returns element from 'ResolutionChains' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\ResolutionChain
     */
    public function getResolutionChainsAt($offset)
    {
        return $this->get(self::RESOLUTIONCHAINS, $offset);
    }

    /**
     * Returns count of 'ResolutionChains' list
     *
     * @return int
     */
    public function getResolutionChainsCount()
    {
        return $this->count(self::RESOLUTIONCHAINS);
    }
}
}