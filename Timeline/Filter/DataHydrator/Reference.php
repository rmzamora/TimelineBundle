<?php

namespace Highco\TimelineBundle\Timeline\Filter\DataHydrator;

/**
 * This class represent a reference for an entry,
 * properties "model, and id" become an object
 *
 * @package HighcoTimelineBundle
 * @verison 1.0.0
 * @author  Stephane PY <py.stephane1@gmail.com>
 */
class Reference
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var object
     */
    public $object;

    /**
     * @var string
     */
    public $id;

    /**
     * @param string $model
     * @param string $id
     */
    public function __construct($model, $id)
    {
        $this->model = $model;
        $this->id    = $id;
    }

    /**
     * Return an unique key of the reference.
     *
     * @return string
     */
    public function getKey()
    {
        return sprintf('%s:%s', $this->model, $this->id);
    }
}
