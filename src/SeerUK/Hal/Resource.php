<?php

/**
 * This file is part of SeerUK\Hal
 *
 * (c) Elliot Wright <elliot@elliotwright.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SeerUK\Hal;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\GenericSerializationVisitor;
use SeerUK\Hal\LinkInterface;
use SeerUK\Hal\ResourceInterface;

/**
 * A HAL Resource
 *
 * @author Elliot Wright <elliot@elliotwright.co>
 */
class Resource implements ResourceInterface
{
    /**
     * @var array
     *
     * @Serializer\SerializedName("_links")
     */
    protected $links;

    /**
     * @var array
     *
     * @Serializer\SerializedName("_embedded")
     */
    protected $resources;

    /**
     * @var array
     *
     * @Serializer\Inline
     */
    protected $variables;


    /**
     * Constructor
     */
    public function __construct(array $variables = array())
    {
        $this->variables = $variables;
        $this->links     = [];
        $this->resources = [];
    }

    /**
     * {@inheritDoc}
     */
    public function addLink($name, LinkInterface $link, $append = null)
    {
        if ($append) {
            $appended = [];

            if ($this->hasLink($name)) {
                $temp = $this->getLink($name);

                if (is_array($temp)) {
                    $appended = $temp;
                } else {
                    $appended[] = $temp;
                }
            }

            $appended[] = $link;

            $this->links[$name] = $appended;

            return $this;
        }

        $this->links[$name] = $link;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function addLinks(array $links)
    {
        foreach ($links as $name => $link) {
            $this->addLink($name, $link);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getLink($name)
    {
        return $this->links[$name];
    }

    /**
     * {@inheritDoc}
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * {@inheritDoc}
     */
    public function hasLink($name)
    {
        return isset($this->links[$name]);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLink($name)
    {
        unset($this->links[$name]);

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function addResource($name, ResourceInterface $resource, $append = null)
    {
        if ($append) {
            $appended = [];

            if ($this->hasResource($name)) {
                $temp = $this->getResource($name);

                if (is_array($temp)) {
                    $appended = $temp;
                } else {
                    $appended[] = $temp;
                }
            }

            $appended[] = $resource;

            $this->resources[$name] = $appended;

            return $this;
        }

        $this->resources[$name] = $resource;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function addResources(array $resources)
    {
        foreach ($resources as $name => $resource) {
            $this->addResource($name, $resource);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getResource($name)
    {
        return $this->resources[$name];
    }

    /**
     * {@inheritDoc}
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * {@inheritDoc}
     */
    public function hasResource($name)
    {
        return isset($this->resources[$name]);
    }

    /**
     * {@inheritDoc}
     */
    public function removeResource($name)
    {
        unset($this->resources[$name]);

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getVariable($name)
    {
        return $this->variables[$name];
    }

    /**
     * {@inheritDoc}
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * {@inheritDoc}
     */
    public function hasVariable($name)
    {
        return isset($this->variables[$name]);
    }

    /**
     * {@inheritDoc}
     */
    public function setVariable($name, $value)
    {
        $this->variables[$name] = $value;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setVariables(array $variables)
    {
        $this->variables = $variables;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function unsetVariable($name)
    {
        unset($this->variables[$name]);

        return $this;
    }

    /**
     * Pre-serialize event handler
     *
     * @Serializer\PreSerialize()
     */
    protected function preSerialize()
    {
        if (empty($this->links)) {
            $this->links = null;
        }

        if (empty($this->resources)) {
            $this->resources = null;
        }
    }
}
