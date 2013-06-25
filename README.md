Amazon Bundle
============

This bundle handles connections w/ various Amazon AWS services.

## Copyright

Copyright (c) 2013 Underground Elephant

## License

Licensed under the Apache License, Version 2.0.

See LICENSE-2.0.txt.

## General Installation

1. Add to composer.json under `require`

	```
	"uecode/amazoa-bundle": "dev-master",
	```

2. Register in `AppKernel`

	``` php
		$bundles = array(
		// ...
		new Uecode\Bundle\UecodeBundle\UecodeBundle()
		new Uecode\Bundle\AmazonBundle\AmazonBundle()
	```

3. Add Account info to your config.yml

	```yml
	uecode:
	    amazon:
	        accounts:
	            connections:
	                main:
	                    key: somekey
	                    secret: somesecret
	```

## Usage

In your code, after doing the above, you should be able to get the amazon factory with:

```php
// get container
$container = $container->get('uecode.amazon');
```

Example to get a particular AWS object:
* 'connection config key' is a config value relative to uecode.amazon.accounts.connections (e.g., "main").
* 'AmazonClass' is a wrapper for an Amazon service which would be located in Component/.
```php
$obj = $container->getAmazonService('AmazonClass', '<connection config key>', array(<service options>));
```

At present, this lib only has support for Amazon SWF.
```
$swf = $container->get('uecode.amazon')
                 ->getAmazonService('SimpleWorkflow', '<connection config key>', array(<service options>));
```

This project is still in the making as are its docs but we should have some docs on
creating SWF workflows soon.
