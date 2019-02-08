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

interface CookieManagementInterface
{
    /**
     * Save the cookie
     *
     * @return mixed
     */
    public function save() : bool;

    /**
     * Update a cookie
     *
     * @return bool
     */
    public function update() : bool;
}