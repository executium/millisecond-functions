# Millisecond Functions
A small repo provided multiple millisecond functions for which we use within our API, provided as a useful shortcut for anyone using our API (or other unrelated projects) to generate a timestamp

## PHP Millisecond Functions
Examples provided in the `php-millisecond-function.php`


```php

function ms()
{
  $mt = explode(' ', microtime());
  return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
}

```

## Javascript Millisecond Function
Real simple stuff, but provided as a quick shortcut to getting the current millisecond value on your server/local system.

```javascript

function ms()
{
  return new Date().getTime();
}

```
