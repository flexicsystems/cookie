<?php
/**
 * Flexic
 * Copyright (c) 2019 ThemePoint
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 * @version 1.0.0.0
 * @package flexic.cookie
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flexic\Cookie\Abstracts;

use Flexic\Cookie\Interfaces\CookieInterface;
use Flexic\Cookie\Manager;

class AbstractCookie implements CookieInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var mixed
     */
    protected $value;

    /**
     * @var int
     */
    protected $expiration = 0;

    /**
     * @var string
     */
    protected $path = "/";

    /**
     * @var string
     */
    protected $domain = "";

    /**
     * @var bool
     */
    protected $httpOnly = false;

    /**
     * @var bool
     */
    protected $secureOnly = false;

    /**
     * @var bool
     */
    protected $isSessionCreated = false;

    public function getName() : string
    {
        return $this->name;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setExpiration(int $expiration)
    {
        $this->expiration = $expiration;
    }

    public function getExpiration() : int
    {
        return $this->expiration;
    }

    public function setPath(string $path)
    {
        $this->path = $path;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setDomain(string $domain)
    {
        $this->domain = $domain;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function setHttpOnly(bool $httpOnly)
    {
        $this->httpOnly = $httpOnly;
    }

    public function getHttpOnly(): bool
    {
        return $this->httpOnly;
    }

    public function setSecureOnly(bool $secureOnly)
    {
        $this->secureOnly = $secureOnly;
    }

    public function getSecureOnly(): bool
    {
        return $this->secureOnly;
    }

    public function setIsSessionCreated(bool $isSessionCreated)
    {
        $this->isSessionCreated = $isSessionCreated;
    }

    public function getIsSessionCreated(): bool
    {
        return $this->isSessionCreated;
    }
}