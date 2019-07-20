<p align="center">
    <a href="https://github.com/terabytesoftw/mail-views-user" target="_blank">
        <img src="https://lh3.googleusercontent.com/D9TFw1F6ddPuheDc_tpNptTdvTg-FNNpjLSBN14X6Sc-3JDiOxfE67rEh4OZfygonx1tKei2b2DEOHDLjF6T3xl8e-rkEEPZeGqLTWcS_v2cBRlyo0vcZLDHG5ivSDGIWCsenbol=w2400" height="50px;">
    </a>
    <h1 align="center">Mail Views User Core.</h1>
</p>

<p align="center">
    <a href="https://packagist.org/packages/terabytesoftw/mail-views-user" target="_blank">
        <img src="https://poser.pugx.org/terabytesoftw/mail-views-user/v/unstable" alt="Unstable Version">
    </a>
    <a href="https://travis-ci.org/terabytesoftw/mail-views-user" target="_blank">
        <img src="https://travis-ci.org/terabytesoftw/mail-views-user.svg?branch=master" alt="Build Status">
    </a>  
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/mail-views-user/" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoftw/mail-views-user/badges/build.png?b=master" alt="Build Status">
    </a>
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/mail-views-user/" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoftw/mail-views-user/badges/coverage.png?b=master" alt="Build Status">
    </a>    
    <a href="https://scrutinizer-ci.com/g/terabytesoftw/mail-views-user/?branch=master" target="_blank">
     	<img src="https://scrutinizer-ci.com/g/terabytesoftw/mail-views-user/badges/quality-score.png?b=master" alt="Code Quality">
    </a>
    <a href="https://scrutinizer-ci.com/code-intelligence" target="_blank">
     	<img src="https://scrutinizer-ci.com/g/terabytesoftw/mail-views-user/badges/code-intelligence.svg?b=master" alt="Code Intelligence Status">
    </a>
    <a href="https://codeclimate.com/github/terabytesoftw/mail-views-user/maintainability" target="_blank">
        <img src="https://api.codeclimate.com/v1/badges/9bbe65b6fda1abd74c2c/maintainability" alt="Maintainability">
    </a>		
</p>

</br>

### **DIRECTORY STRUCTURE:**

```
config/             contains application configurations
src/                contains source files
tests/              contains tests codeception for the web application
vendor/             contains dependent 3rd-party packages
```

### **REQUIREMENTS:**

- The minimum requirement by this project template that your Web server supports:
    - PHP 7.2 or higher.
    - [Composer Config Plugin](https://github.com/hiqdev/composer-config-plugin).

### **GENERATE MESSAGES TRANSLATION:**

<p align="justify">
To generate the Mail Views User Core, you can change the language settings in:
<p>

```
config/messages.php - [mail-views-user]:

'languages' => ['en'], 
```
<p align="justify">
 Automatically the generator will create the folder of your language in /messages - [mail-views-user], If any translation is needed, you can open an issue to add it.
</p>

```
root directory - [mail-views-user]:
./vendor/bin/yii message config/message.php
```

### **RUN TESTS CODECEPTION:**

~~~
// download all composer dependencies root project
$ composer update --prefer-dist -vvv

// run all tests with code coverage
$ vendor/bin/codecept run --coverage-xml
~~~

### **WEB SERVER SUPPORT:**

- Apache.
- Nginx.
- OpenLiteSpeed.

### **DOCUMENTATION STYLE GUIDE:**

[Style CI Documentation PSR2.](https://docs.styleci.io/presets#psr2)

### **LICENCE:**

[![License](https://poser.pugx.org/terabytesoftw/mail-views-user/license)](LICENSE.md)
[![YiiFramework](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Total Downloads](https://poser.pugx.org/terabytesoftw/mail-views-user/downloads)](https://packagist.org/packages/terabytesoftw/mail-views-user)
[![Styleci](https://github.styleci.io/repos/165419144/shield?branch=master)](https://github.styleci.io/repos/165419144)
