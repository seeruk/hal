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

use SeerUK\Hal\LinkInterface;
use SeerUK\Hal\ResourceInterface;

/**
 * A HAL Resource Interface
 *
 * @author Elliot Wright <elliot@elliotwright.co>
 */
interface ResourceInterface
{
    /**
     * Add link
     *
     * @param string        $name
     * @param LinkInterface $link
     * @param boolean       $append
     *
     * @return ResourceInterface
     */
    public function addLink($name, LinkInterface $link, $append = null);

    /**
     * Add links
     *
     * @param array $links
     *
     * @return ResourceInterface
     */
    public function addLinks(array $links);

    /**
     * Get link
     *
     * @param string $name
     *
     * @return LinkInterface
     */
    public function getLink($name);

    /**
     * Get links
     *
     * @return array
     */
    public function getLinks();

    /**
     * Has link?
     *
     * @param string  $name
     *
     * @return boolean
     */
    public function hasLink($name);

    /**
     * Remove link
     *
     * @param string $name
     *
     * @return ResourceInterface
     */
    public function removeLink($name);

    /**
     * Add resource
     *
     * @param string            $name
     * @param ResourceInterface $resource
     * @param boolean           $append
     *
     * @return ResourceInterface
     */
    public function addResource($name, ResourceInterface $resource, $append = null);

    /**
     * Add resources
     *
     * @param array $resources
     *
     * @return ResourceInterface
     */
    public function addResources(array $resources);

    /**
     * Get resource
     *
     * @param string $name
     *
     * @return ResourceInterface
     */
    public function getResource($name);

    /**
     * Get resources
     *
     * @return array
     */
    public function getResources();

    /**
     * Has resource?
     *
     * @param string  $name
     *
     * @return boolean
     */
    public function hasResource($name);

    /**
     * Remove resource
     *
     * @param  string $name
     *
     * @return ResourceInterface
     */
    public function removeResource($name);

    /**
     * Get a variable
     *
     * @param string $name
     *
     * @return mixed
     */
    public function getVariable($name);

    /**
     * Get variables
     *
     * @return array
     */
    public function getVariables();

    /**
     * Has variable?
     *
     * @param string $name
     *
     * @return boolean
     */
    public function hasVariable($name);

    /**
     * Set variable
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return ResourceInterface
     */
    public function setVariable($name, $value);

    /**
     * Set variables
     *
     * @param array $variables
     *
     * @return ResourceInterface
     */
    public function setVariables(array $variables);

    /**
     * Unset variable
     *
     * @param string $name
     *
     * @return ResourceInterface
     */
    public function unsetVariable($name);
}
