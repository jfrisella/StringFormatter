#PHP String Formatter
this is still in development, use at own risk

* [About Library](#about-library)
* [Getting Started](#getting-started)

#About Library
this `Formatter\StringFormatter` class allows you to chain together standard PHP string functions in a more object oriented way.
The class will also allows for [custom functions](#custom-functions) and [custom chains](#custom-chains).

#Getting Started
this will explain how to download and install.  Use Composer.

#Basic Usage


#Custom Functions
this will explain about custom functions

#Custom Chains
this will explain about creating custom string function chains.

__THIS IS NOT ACTUALLY IMPLEMENTED YET, JUST AN IDEA OF HOW IT MIGHT WORK__
```php
$f = \Formatter\StringFormatter::get();

//This is a chain of string functions
$f->urldecode()->trim()->urlencode()->format($someString);

//Now define this string as a custom chain
$chains = array(
	"myCustomChain" => array(
		"urldecode" => array(),
		"trim" => array(
			//Here you define other parameters that you might want passed to function
			//so if you want to trim '%' from the string
			"%"
		),
		"urlencode" => array()
	)
);

\Formatter\StringFormatter::addChains($chains);

//Then you can use it
//And it will simulate the same list of items
$f->myCustomChain()->format($someString); 

//You can also pass in other parameters at runtime
//If you wanted to trim '|' instead of '%'
$f->myEncoder(array("trim" => array("|")))->format($someString);

```
