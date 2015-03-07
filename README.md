[![Latest Stable Version](https://poser.pugx.org/creitive/laravel5-breadcrumbs/version.png)](https://packagist.org/packages/creitive/laravel5-breadcrumbs) [![Total Downloads](https://poser.pugx.org/creitive/laravel5-breadcrumbs/d/total.png)](https://packagist.org/packages/creitive/laravel5-breadcrumbs)

Laravel 5 Breadcrumbs
=====================

*A simple Laravel 5-compatible breadcrumbs package. Generates Twitter Bootstrap-compatible output.*


Installation
------------

Just run this on the command line:

```
composer require creitive/laravel5-breadcrumbs
```

After this, you should add the service provider and the alias to your `config/app.php`, which should make it look something like this:

```php
return array(
	// ...

	'providers' => array(
		// ...

		'Creitive\Breadcrumbs\BreadcrumbsServiceProvider',
	),

	// ...

	'aliases' => array(
		// ...

		'Breadcrumbs' => 'Creitive\Breadcrumbs\Facades\Breadcrumbs',
	),
);
```

You're all set!


Usage
-----

For usage documentation, please visit the core library that this package depends on: [creitive/breadcrumbs](https://github.com/creitive/breadcrumbs).

This particular package registers a shared instance of the breadcrumbs class, and enables you to make the calls on the provided facade, ie. instead of doing `$breadcrumbs->addCrumb('Home', '/')`, you can do `\Breadcrumbs::addCrumb('Home', '/')`.

Additionally, having this as a separate package enables us to move forward with Laravel-specific features, such as having a configuration file that enables you to more cleanly customize how the package works.


Laravel 4
---------

For Laravel 4 support, visit the [creitive/laravel4-breadcrumbs](https://github.com/creitive/laravel4-breadcrumbs) package.


License
-------

The code is licensed under the MIT license, which is available in the `LICENSE` file.
