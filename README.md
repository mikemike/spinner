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

## How to use
```
$spinner = new Spinner();

$string = '{Hey|Howdy|Hi there|Hi} {there|mate|bud|buddy}, {{how are|how're} {you|ya}|how you doin'|how {you|ya} {feeling|hanging}|you doing {OK|alright}}?'

echo $spinner->process($string);
```

## Notes
Nested spins are supported, as illustrated in the above example.
