# Laravel Spinning Package

## Introduction
Spin articles and text using this package.

## What is spinning?
Spinning allows an author to write an article or text but provide different variations of words or sentences.  This class then plucks a sentence out at random.  The idea being that lots of versions of the same article/text will be generated.

The text format is sometimes referred to as 'spyntax' or 'spintax'

## Example text
`{Hello|Hi|Hey} my name is {Frank|Bob|John}`

may produce:
`Hi my name is Frank`
`Hey my name is Frank`
`Hello my name is Bob`
`Hi my name is John`
`Hey my name is Bob`
etc...

## Installation
Add `"mikemike/spinner": "dev-master"` to your `composer.json`.

Run `composer update`

Add `Mikemike\Spinner\SpinnerServiceProvider::class,` to the `providers` array in your `config/app.php`.

Add `'Spinner' => Mikemike\Spinner\SpinnerFacade::class,` to the `aliases` array in your `config/app.php`.

## How to use
Add the class at the top of your class:
```
use Spinner;
```
And then call it anywhere in your code:
```
$spinner = new Spinner();

$string = '{Hey|Howdy|Hi there|Hi} {there|mate|bud|buddy}, {{how are|how\'re} {you|ya}|how you doin\'|how {you|ya} {feeling|hanging}|you doing {OK|alright}}?';

echo $spinner::process($string);
```

## Notes
Nested spins are supported, as illustrated in the above example.

## Sponsors

This package is sponsored by [Accreditly](https://accreditly.io), who offer a number of web development certifications, including:

* [PHP Certification](https://accreditly.io/certifications/php-fundamentals)
* [JavaScript Certification](https://accreditly.io/certifications/javascript-fundamentals)
* [Database Fundamentals Certification](https://accreditly.io/certifications/database-fundamentals)
* [WordPress Certification](https://accreditly.io/certifications/wordpress-development)
