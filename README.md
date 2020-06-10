# Millisecond Functions
A small repo providing multiple millisecond functions for which we use within our API, provided as a useful shortcut for anyone using our API (or other unrelated projects) to generate a timestamp

## PHP Millisecond Function
Examples provided in the `php-millisecond-function.php`


```php

function ms()
{
  $mt = explode(' ', microtime());
  return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
}

```

## Javascript Millisecond Function
Real simple stuff, but provided as a quick shortcut to getting the current millisecond value on your server/local system.The file `javascript-millisecond-functions.js` contains the below code.

```javascript

function ms()
{
  return new Date().getTime();
}

```

## Millisecond Timing Tests
We have provided a quick and easy script `php-vs-javascript-millisecond-timing.php` which you can run on your server then access from your browser to see the millisecond offset between you and the server. This can be a useful function if you are trying to determine your own offset with a server and then your servers offset with a third party.

## js_millisecond_update(t) function for executium API version 2
The file `javascript-millisecond-text-input-update.js` provides the function `js_millisecond_update()` which can be used for keeping the screen up to date with the latest millisecond of your device. The script can be adapted for any needs easily. In the file we run the function and provide a text input as an example.
