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

use Flexic\Cookie\Interfaces\CookieManagementInterface;

class Cookie extends Abstracts\AbstractCookie implements CookieManagementInterface
{
    public function __construct(string $name, bool $createFromSession = false)
    {
        $this->name = $name;

        if(array_key_exists($name, $_COOKIE) && $createFromSession) {
            $this->setValue($_COOKIE[$name]);
            $this->setIsSessionCreated(true);
        }
    }

    public function save(): bool
    {
        return $this->getIsSessionCreated() ? false : Manager::set($this);
    }

    public function update(): bool
    {
        return $this->getIsSessionCreated() ? Manager::set($this, true) : $this->save();
    }
}