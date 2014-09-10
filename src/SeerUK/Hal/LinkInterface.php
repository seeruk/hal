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

/**
 * A HAL Link Interface
 *
 * @author Elliot Wright <elliot@elliotwright.co>
 */
interface LinkInterface
{
    /**
     * Get deprecation
     *
     * @return string
     */
    public function getDeprecation();

    /**
     * Set deprecation
     *
     * @param string $deprecation
     *
     * @return LinkInterface
     */
    public function setDeprecation($deprecation);

    /**
     * Get href
     *
     * @return strign
     */
    public function getHref();

    /**
     * Set href
     *
     * @param string $href
     *
     * @return LinkInterface
     */
    public function setHref($href);

    /**
     * Get href language
     *
     * @return string
     */
    public function getHrefLang();

    /**
     * Set href language
     *
     * @param string $hrefLang
     *
     * @return LinkInterface
     */
    public function setHrefLang($hrefLang);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set name
     *
     * @param string $name
     *
     * @return LinkInterface
     */
    public function setName($name);

    /**
     * Get profile
     *
     * @return string
     */
    public function getProfile();

    /**
     * Set profile
     *
     * @param string $profile
     *
     * @return LinkInterface
     */
    public function setProfile($profile);

    /**
     * Get templated
     *
     * @return boolean
     */
    public function getTemplated();

    /**
     * Is templated?
     *
     * @return boolean
     */
    public function isTemplated();

    /**
     * Set templated
     *
     * @param boolean $templated
     *
     * @return LinkInterface
     */
    public function setTemplated($templated);

    /**
     * Get type
     *
     * @return string
     */
    public function getType();

    /**
     * Set type
     *
     * @param string $type
     *
     * @return LinkInterface
     */
    public function setType($type);

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set title
     *
     * @param string $title
     *
     * @return LinkInterface
     */
    public function setTitle($title);
}
