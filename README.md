ADA Pay for Woocommerce
============

A php library with wordpress and laravel packages for receiving ada and cFT on woocommerce.

[![Latest Stable Version](https://poser.pugx.org/lidonation/ada-pay/v/stable)](https://packagist.org/packages/lidonation/ada-pay)
[![License](https://poser.pugx.org/lidonation/ada-pay/license)](https://packagist.org/packages/lidonation/ada-pay)
[![composer.lock](https://poser.pugx.org/lidonation/ada-pay/composerlock)](https://packagist.org/packages/lidonation/ada-pay)
[![Total Downloads](https://poser.pugx.org/lidonation/ada-pay/downloads)](https://packagist.org/packages/lidonation/ada-pay)


Requirements
------------

* PHP >= 8.0;
* composer.

Features
--------

* PSR-4 autoloading compliant structure;
* PSR-2 compliant code style;
* Unit-Testing with PHPUnit 6;
* Comprehensive guide and tutorial;
* Easy to use with any framework or even a plain php file;
* Useful tools for better code included.

Installation
============

composer require lidonation/ada-pay
    


## Contribution

Useful Tools
============

Running Tests:
--------

    php vendor/bin/phpunit
 
 or 
 
    composer test

Code Sniffer Tool:
------------------

    php vendor/bin/phpcs --standard=PSR2 src/
 
 or
 
    composer psr2check

Code Auto-fixer:
----------------

    php vendor/bin/phpcbf --standard=PSR2 src/ 
    
 or
 
    composer psr2autofix
 
 
Building Docs:
--------

    php vendor/bin/phpdoc -d "src" -t "docs"
 
 or 
 
    composer docs

Changelog
=========

To keep track, please refer to [CHANGELOG.md](https://github.com/lidonation/ada-pay/blob/main/CHANGELOG.md).

Contributing
============

1. Fork it.
2. Create your feature branch (git checkout -b my-new-feature).
3. Make your changes.
4. Run the tests, adding new ones for your own code if necessary (phpunit).
5. Commit your changes (git commit -am 'Added some feature').
6. Push to the branch (git push origin my-new-feature).
7. Create new pull request.

Also please refer to [CONTRIBUTION.md](https://github.com/lidonation/ada-pay/blob/main/CONTRIBUTION.md).

License
=======

Please refer to [LICENSE](https://github.com/lidonation/ada-pay/blob/main/LICENSE).
