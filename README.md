EWSDN 2014 Web Site
=========================

PHP/HTML/CSS/JS code for the EWSDN 2014 website.

This code is adapted from the [ACM SIGCOMM 2012](https://github.com/ryanrhymes/SIGCOMM2012) repository. It is licensed under a [Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License](http://creativecommons.org/licenses/by-nc-sa/3.0/).

What's in the various subdirectories:

* `css`			CSS code, only edit style.css, the rest is from vendors
* `css/images`	jquerymobile CSS images
* `images`		our images (logos, etc.)
* `include`		PHP partials and code
* `js`			Javascript, only edit script.js, the rest is from vendors
* `scripts`		various helper scripts to check and compile the site

This site uses a bunch of open javascript libraries. You will want to use their latest versions:

* http://jquery.com/ - the javascript goes into `js`
* http://jquerymobile.com/ - the javascript goes into `js` and the CSS and images go into `css`
* http://jquerymobile.com/demos/1.1.0/docs/_assets/css/jqm-docs.css - the CSS for the jquerymobile documentation page, goes into CSS
* http://code.google.com/p/css3-mediaqueries-js/ - the javascript goes into `js`


Cache manifest for offline usage
--------------------------------

The `scripts/publish` script generates this automatically. Edit the script to control which objects are included in the manifest.


Creating a minified version of the site
---------------------------------------

Much better to publish this minified version than the source files. Bash script in `scripts/publish`.

In order to save time, this script does *not* optimize any images. You should really run your images through pngquant (http://pngquant.org/) and then image_optim (https://github.com/toy/image_optim) before you add them to the repository.


Local test server
-----------------

With recent versions of PHP, you can run a development test server on your machine like this: `php -S 127.0.0.1:8000`


Checking for broken links
-------------------------

Run a local test server (see above) and then run `linklint` (http://www.linklint.org/):

    linklint -doc report -http -host 127.0.0.1:8000 /@

Checker results are in `report/index.html` afterwards.


Checking for HTML issues
------------------------

Run a local test server (see above) and then run `bash scripts/lint`.
