Cookie Component
========================

The Cookie component defines an object-oriented layer for the Cookie handling.

Resources
---------

* [Documentation](https://www.themepoint.de/)
* [Issue reporting](https://github.com/flexicsystems/flexic/issues)

Examples
--------

```php
# add a new cookie

$cookie = (new Flexic\Cookie\Cookie('new_cookie'))
                ->setValue('new_cookie')
                ->setExpiration(time() + 3600)
                ->save();

Flexic\Cookie\Manager::set($new_cookie);

$cookie = Flexic\Cookie\Manager::get('new_cookie');
```
```php
# handle an existing cookie (Cookies which already stored from old sessions)

$cookie = Flexic\Cookie\Manager::get('old_cookie', true)
                ->setValue('new_cookie')
                ->setExpiration(time() + 3600)
                ->update();

Flexic\Cookie\Manager_:set($cookie, true);

$cookie = Flexic\Cookie\Manager::get('new_cookie');
```
```php
# remove an cookie

Flexic\Cookie\Manager::delete('old_cookie');
```
```php
# get all cookies

Flexic\Cookie\Manager::getCookieList();
```