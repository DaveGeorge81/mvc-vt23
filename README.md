My Symfony project
=======================

This is what I will be working on during the course mvc at BTH in spring 2023.

The main focus is on card games built in Symfony together with some Javascript and database handling via Doctrine.

Scrutinizer report:
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/badges/build.png?b=main)](https://scrutinizer-ci.com/g/DaveGeorge81/mvc-vt23/build-status/main)

To get started
---------------

1. Open git bash (or another bash terminal with git installed)

2. Change the current workning directory to where you want the project

3. To clone the repo:

```
$ git clone https://github.com/DaveGeorge81/mvc-vt23.git
```

4. Press enter to clone.

5. Move to the mvc-23 folder. Install the dependencies and the modules for testing.

```
$ cd mvc-23
```

Dependencies:

Start with composer and npm.

```
# Composer
$ composer install
```

```
# Npm
$ npm install
```

Run the build and its dependencies

```

$ npm run build

```

Run the doctrine and its dependencies

```

$ composer require symfony/orm-pack
$ composer require --dev symfony/maker-bundle

```

Set up the tables

```
$ php bin/console doctrine:schema:update --force

```
Modules for testing:

### php-cs-fixer

```

$ composer require friendsofphp/php-cs-fixer --dev

```

### phpmd

```

$ composer require phpmd/phpmd --dev

```

### phpstan

```

$ composer require phpstan/phpstan --dev

```

### phpunit

```

$ composer require phpunit/phpunit --dev

```

### phpdoc

```

$ composer require phpdocumentor/phpdocumentor --dev

```

### phpmetrics

```

$ composer require phpmetrics/phpmetrics --dev

```

### add to composer.json

```
"require-dev": {
    "friendsofphp/php-cs-fixer": "^2.0",
    "phpmd/phpmd": "^2.10",
    "phpstan/phpstan": "^0.12",
    "phpunit/phpunit": "^9.0",
    "phpdocumentor/phpdocumentor": "^3.0",
    "phpmetrics/phpmetrics": "^2.4"
}

```

## Add to Scrutinizer

Edit in the scrutinizer.yml what files to include

```
curl -s https://raw.githubusercontent.com/dbwebb-se/mvc/main/example/scrutinizer/.scrutinizer.yml > .scrutinizer.yml
```

6. To start project go to /public and type:

```
$ php -S localhost:8888
```

7. go to http://localhost:8888/ in your web browser.

8. Have fun!
