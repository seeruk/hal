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
 * A HAL Link
 *
 * @author Elliot Wright <elliot@elliotwright.co>
 */
class Link implements LinkInterface
{
    /**
     * @var string
     */
    protected $deprecation;
    /**
     * @var string
     */
    protected $href;

    /**
     * @var string
     */
    protected $hrefLang;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $profile;

    /**
     * @var boolean
     */
    protected $templated;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $title;


    /**
     * Constructor.
     *
     * @param string $href
     */
    public function __construct($href)
    {
        $this->setHref($href);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeprecation()
    {
        return $this->deprecation;
    }

    /**
     * {@inheritDoc}
     */
    public function setDeprecation($deprecation)
    {
        $this->deprecation = $deprecation;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * {@inheritDoc}
     */
    public function setHref($href)
    {
        $this->href = $href;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getHrefLang()
    {
        return $this->hrefLang;
    }

    /**
     * {@inheritDoc}
     */
    public function setHrefLang($hrefLang)
    {
        $this->hrefLang = $hrefLang;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * {@inheritDoc}
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplated()
    {
        return (bool) $this->templated;
    }

    /**
     * {@inheritDoc}
     */
    public function isTemplated()
    {
        return $this->getTemplated();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemplated($templated)
    {
        $this->templated = $templated;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
