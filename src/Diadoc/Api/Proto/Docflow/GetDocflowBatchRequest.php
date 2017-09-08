<?php
/**
* Auto generated from DocflowApi.proto
*
 * Diadoc.Api.Proto.Docflow package
 */

namespace Diadoc\Api\Proto\Docflow {
/**
 * GetDocflowBatchRequest message
 */
class GetDocflowBatchRequest extends \ProtobufMessage
{
    /* Field index constants */
    const REQUESTS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUESTS => array(
            'name' => 'Requests',
            'repeated' => true,
            'type' => '\Diadoc\Api\Proto\Docflow\GetDocflowRequest'
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
        $this->values[self::REQUESTS] = array();
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
     * Appends value to 'Requests' list
     *
     * @param \Diadoc\Api\Proto\Docflow\GetDocflowRequest $value Value to append
     *
     * @return null
     */
    public function appendRequests(\Diadoc\Api\Proto\Docflow\GetDocflowRequest $value)
    {
        return $this->append(self::REQUESTS, $value);
    }

    /**
     * Clears 'Requests' list
     *
     * @return null
     */
    public function clearRequests()
    {
        return $this->clear(self::REQUESTS);
    }

    /**
     * Returns 'Requests' list
     *
     * @return \Diadoc\Api\Proto\Docflow\GetDocflowRequest[]
     */
    public function getRequests()
    {
        return $this->get(self::REQUESTS);
    }

    /**
     * Returns 'Requests' iterator
     *
     * @return \ArrayIterator
     */
    public function getRequestsIterator()
    {
        return new \ArrayIterator($this->get(self::REQUESTS));
    }

    /**
     * Returns element from 'Requests' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Diadoc\Api\Proto\Docflow\GetDocflowRequest
     */
    public function getRequestsAt($offset)
    {
        return $this->get(self::REQUESTS, $offset);
    }

    /**
     * Returns count of 'Requests' list
     *
     * @return int
     */
    public function getRequestsCount()
    {
        return $this->count(self::REQUESTS);
    }
}
}