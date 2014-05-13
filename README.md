Website Starter Survival Kit
===============

Website Starter is a simple PHP Framework build to create new Website faster.

#Main Features

- HTML5
- PHP
- CSS3
- LESS
- Responsive nav and grid based on [Bootstrap 3.0](http://getbootstrap.com)
- SVG to PNG fallback for old browsers (lte IE 9)
- jQuery
- HTML5 shiv for IE
- Simple contact form
- Bootstrap Scrollpsy
- Magnific Popup as ligthview for image gallery

## LESS
[LESS](http://lesscss.org/) extends CSS with dynamic behavior such as variables, mixins, operations and functions. A LESS compiler (server-side) or client-side) is needed such as [less.app](http://incident57.com/less/) (mac), [javascript](http://lesscss.org/), etc.

## SVG to PNG
Old browsers such as Internet Explorer 8- does not support SVG files. A few line of javascript are used to create a fallback to replace automatically every SVG files to PNG files. Don't forget to create both images! (See index.php for example)

## Responsive Nav
[Bootstrap 3.0 Navbars](http://getbootstrap.com/components/#navbar) are responsive meta components that serve as navigation headers for your application or site. They begin collapsed (and are toggleable) in mobile views and become horizontal as the available viewport width increases.

## Responsive Grid
Responsive grid layout based on [Bootstrap 3.0 Grid](http://getbootstrap.com/components/#navbar)
```html
<div class="row">
	<div class="col-sm-8">.col-sm-8</div>
	<div class="col-sm-4">.col-sm-4</div>
</div>
```
## Scrollspy
The ScrollSpy plugin is for automatically updating nav targets based on scroll position. Scroll the area below the navbar and watch the active class change. The dropdown sub items will be highlighted as well.
### Usage via data attributes
To easily add scrollspy behavior to your topbar navigation, add data-spy="scroll" to the element you want to spy on (most typically this would be the &lt;body&gt;). Then add the data-target attribute with the ID or class of the parent element of any Bootstrap .nav component.
```html
<body data-spy="scroll" data-target=".navbar-example">
  ...
  <div class="navbar-example">
    <ul class="nav nav-tabs">
      ...
    </ul>
  </div>
  ...
</body>
```

### Usage via JavaScript
Call the scrollspy via JavaScript:
```javascript
$('body').scrollspy({ target: '.navbar-example' })
```


## Responsive Video
Wrap the iframe tags with a div and add it ".embed-container" CSS class as the exemple below.
```html
<div class=".embed-container">
	<iframe src="http://www.yourdomain.abc/yourvideoid"></iframe>
</div>
```

## Hide file extension
.htaccess file is used to hide .PHP file extension to get clean URL.

## Contact form
Simple contact form ready to use. Replace the receiver email address in sendmail.php to get this working. (See index.php for example)

## Meta
config.php is used to add content to specific pag (Page title and page description).
```php
<title><?=$title?></title>
<meta name="description" content="<?=$description?>" />

