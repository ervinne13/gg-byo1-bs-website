# PHP

## Variables, Numbers, Dates & Strings

Follow along the instructor as he discuss about `typed variables` vs `typed values` and other things.

Main Points:
- PHP has `typed values`;
- PHP supports 10 primitive types
    - Scalar Types
        - boolean
        - integer
        - float (floating-point number, aka double)
        - string
    - Compound Types
        - array
        - object (defined by classes)
        - callable
        - iterable (pseudo-type introduced in PHP 7.1)
    - Special Types
        - resource
        - NULL

Notes on special and pseudo types:

__Iterable__ is an array or object implementing the `Traversable` interface.

__Resource__ is a special variable, holding a reference to an external resource. Resources are created and used by special functions.

```php
// prints: mysql link
$c = mysql_connect();
echo get_resource_type($c) . "\n";

// prints: stream
$fp = fopen("foo", "w");
echo get_resource_type($fp) . "\n";

// prints: domxml document
$doc = new_xmldoc("1.0");
echo get_resource_type($doc->doc) . "\n";
?>
```

__NULL__ is value that represents a variable with no value.

A variable is considered null if:
- it has been assigned the constant NULL.
- it has not been set to any value yet.
- it has been unset().

## Type Coercion

PHP is a loosely typed language that allows you to declare a variable and its type simply by using it. It also automatically converts values from one type to another whenever required. This is called `implicit casting`.

### Implicit & Explicit Casting

- Implicit: Letting PHP do the casting as you use the variables
- Explicit: Using PHP functions to type cast. (`intval`, `floatval`, etc.)

You may also cast using the following:

```php
echo (int) "1.5"; // prints 1
```

Cast Types Reference

| Cast Type | Description |
|-----------|-------------|
|(int) (integer)|Cast to an integer by dropping the decimal portion|
|(bool) (boolean)|Cast to a Boolean|
|(float) (double) (real)|Cast to a floating-point number|
|(string)|Cast to a string|
|(object)|Cast to an object|

## Control Structures

Control structures `drive` a program, these are things like conditional statements and loops.

## PHP & HTML

One of PHP's greatest assets is that it works really well with HTML out of the box.