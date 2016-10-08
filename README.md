Yii 2 Advanced Project Template with gulp, sass and bootstrap
=============================================================

This Yii 2 Advanced Project Template [Yii 2](http://www.yiiframework.com/) already included with custom bootstrap-sass asset bundle.

The 'official' bootstrap asset bundle have been disabled to avoid conflict with the custom one.

HOW TO USE IT
-------------
This repo already includes the gulp package via NPM.

Simply download this repository then you can rename the project folder according to your project name.

To start using it you should initialize the project to determine wether it's in developers[0] or production[1] mode, by typing:
```
php init
```

bootstrap-sass variables can be customized from the _variables.scss file located at:
```
node_modules       
    bootstrap-sass
        assets
            stylesheets
                bootstrap/
                    _variables.scss
```

We may also add our custom sass by importing it through the all.scss file located at:
```
joenmarz_resources
    assets
        ...
        sass/
            all.scss
```

Finally when the variables has been customized we can apply it by running gulp command by simply typing:
```
gulp
```






DIRECTORY STRUCTURE
-------------------
```
common
    config/                     contains shared configurations
    mail/                       contains view files for e-mails
    models/                     contains model classes used in both backend and frontend
console
    config/                     the 'official' bootstrap asset bundle has been disabled in main.php
    controllers/                contains console controllers (commands)
    migrations/                 contains database migrations
    models/                     contains console-specific model classes
    runtime/                    contains files generated during runtime
backend
    assets/                     contains application assets such as JavaScript and CSS
    config/                     contains backend configurations
    controllers/                contains Web controller classes
    models/                     contains backend-specific model classes
    runtime/                    contains files generated during runtime
    views/                      contains view files for the Web application
    web/                        contains the entry script and Web resources
frontend
    assets/                     contains application assets such as JavaScript and CSS
    config/                     contains frontend configurations
    controllers/                contains Web controller classes
    models/                     contains frontend-specific model classes
    runtime/                    contains files generated during runtime
    views/                      contains view files for the Web application
    web/                        contains the entry script and Web resources
    widgets/                    contains frontend widgets
joenmarz_resources
    assets
        js/                     contains customizable js assets
        sass/                   contains customizable sass assets
    layouts
        backend/                contains custom layout to be imported as backend main layout
        frontend/               contains custom layout to be imported as backend main layout
node_modules
    ...                         (contains other pre-requisite sub-folders)
    bootstrap-sass
        assets
            stylesheets
                bootstrap       contains bootstrap-sass widgets and its variables
                    mixins/     contains another bootstrap-sass widgets
    ...                         (contains other pre-requisite sub-folders)
vendor/                         contains dependent 3rd-party packages
environments/                   contains environment-based overrides
tests                           contains various tests for the advanced application
    codeception/                contains tests developed with Codeception PHP Testing Framework
```
