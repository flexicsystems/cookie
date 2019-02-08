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

namespace Flexic\Cookie;

use Flexic\Cookie\Cookie;

class Manager
{
    /**
     * @var array
     */
    protected static $cookies = array();

    /**
     * Set a cookie
     *
     * @param Cookie $cookie
     * @param bool $updateSession
     * @return bool
     */
    public static function set(Cookie $cookie, bool $updateSession = false)
    {
        if(!isset(self::$cookies[$cookie->getName()])) {
            self::$cookies[$cookie->getName()] = $cookie;
        }

        if($cookie->getIsSessionCreated() && !$updateSession) {
            return false;
        }

        setcookie($cookie->getName(),$cookie->getName(), $cookie->getExpiration(), $cookie->getPath(), $cookie->getDomain(), $cookie->getSecureOnly(), $cookie->getHttpOnly());

        return array_key_exists($cookie->getName(), $_COOKIE);
    }

    /**
     * Get a cookie
     *
     * @param string $name
     * @param bool $getFromSession
     * @return bool|\Flexic\Cookie\Cookie|mixed
     */
    public static function get(string $name, bool $getFromSession = false)
    {
        if(array_key_exists($name, self::$cookies) && array_key_exists($name, $_COOKIE) && !$getFromSession) {
            return self::$cookies[$name];
        }

        if(array_key_exists($name, $_COOKIE) && $getFromSession) {
            $cookie = new Cookie($_COOKIE[$name], true);
            self::set($cookie);
            return $cookie;
        }

        return false;
    }

    /**
     * remove a cookie
     *
     * @param string $name
     * @return bool
     */
    public static function delete(string $name)
    {
        if(array_key_exists($name, $_COOKIE) && !array_key_exists($name, self::$cookies)) {
            self::set(new Cookie($_COOKIE[$name], true));
        }

        self::$cookies[$name]->setExpiration(time() - 9999);
        self::$cookies[$name]->update();
        unset(self::$cookies[$name]);

        return !array_key_exists($name, self::$cookies);
    }

    /**
     * Get the cookie list
     *
     * @return array
     */
    public static function getCookieList() : array
    {
        return self::$cookies;
    }
}