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

namespace Flexic\Cookie\Interfaces;

interface CookieInterface
{
    /**
     * @return string
     */
    public function getName() : string ;

    /**
     * @param $value
     */
    public function setValue($value);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param int $expiration
     */
    public function setExpiration(int $expiration);

    /**
     * @return int
     */
    public function getExpiration() : int;

    /**
     * @param string $path
     */
    public function setPath(string $path);

    /**
     * @return string
     */
    public function getPath() : string ;

    /**
     * @param string $domain
     */
    public function setDomain(string $domain);

    /**
     * @return string
     */
    public function getDomain() : string;

    /**
     * @param bool $httpOnly
     */
    public function setHttpOnly(bool $httpOnly);

    /**
     * @return bool
     */
    public function getHttpOnly() : bool;

    /**
     * @param bool $secureOnly
     */
    public function setSecureOnly(bool $secureOnly);

    /**
     * @return bool
     */
    public function getSecureOnly() : bool;

    /**
     * @param bool $isSessionCreated
     */
    public function setIsSessionCreated(bool $isSessionCreated);

    /**
     * @return bool
     */
    public function getIsSessionCreated() : bool;
}