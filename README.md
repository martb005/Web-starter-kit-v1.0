Website-Starter
===============

Website Starter is a simple PHP Framework build to create new Website faster.

#Main Features

- HTML5
- PHP
- CSS3
- LESS
- SVG to PNG
- jQuery
- HTML5 shiv for IE

## LESS
[LESS](http://lesscss.org/) extends CSS with dynamic behavior such as variables, mixins, operations and functions. A LESS compiler (server-side) or client-side) is needed such as [less.app](http://incident57.com/less/) (mac), [javascript](http://lesscss.org/), etc.

## SVG to PNG
Old browsers such as Internet Explorer 8- does not support SVG files. A few line of javascript are used to create a fallback to replace automatically every SVG files to PNG files. Don't forget to create both images!

## Hide file extension
.htaccess file is used to hide .PHP file extension to get clean URL.

## Meta
/inc/meta.php is used to add content to specific pag (Page title and page description).
```php
<title><?=$title?></title>
<meta name="description" content="<?=$description?>" />
```

