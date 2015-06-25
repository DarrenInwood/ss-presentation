SilverStripe primer presentation
================================

Questions throughout welcome!

Overview
--------

SilverStripe uses OO principles, design patterns, and best practices to provide a MVC framework.

It is under active privately-funded development, and welcomes community input into the framework through git, IRC, and forums.

It also provides a CMS built using the framework.

Composer
--------

Installing via PHP package manager "composer":
composer create-project silverstripe/installer ./my/website/folder

A build process creates/updates database tables and a cache manifest of classes and settings.

Testing
-------

Add PHPUnit for testing:
composer require "phpunit/phpunit:3.7.*@dev"

Write a test.
Run PHPUnit:
vendor/bin/phpunit mysite/tests flush=1

Controller
----------

Set up some routes using Controller and naming conventions.

(Set up some custom routes using YAML)

http://docs.silverstripe.org/en/3.1/developer_guides/controllers/routing/

View
----

Simple templating language forces developers to keep logic in controllers.

Doesn't have to use HTML.

Demo a nested loop and scope resolution.
(Demo data type escaping.)
(Demo JS/CSS requirements.)

Model
-----

SilverStripe provides a relational Active Record type implementation called "DataObject".

Uses a relational database with various adapters.
(Demo using object templates.)

CMS
---

The CMS provides a useful starting point, without providing too much functionality.
 * Authentication and permissions
 * File management
 * Site tree
 * Field scaffolding for CMS editing DataObjects

Common modules
--------------

Can be found via packagist.org and installed via composer.

 * restfulserver (XML/JSON API exposure)
 * auth-external (LDAP, OpenID, Google account etc)
 * userforms
 * subsites
 * payment

