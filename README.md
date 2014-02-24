ATG Bootstraps
==================================================

What is this?
--------------------------------------

A group (now there is only one set but there will be more in the future) of code templates for fast web development.

When should I use this?
--------------------------------------

At those projects which meet the followings needs:

1. Short time projects (from minutes to a few days).
2. High browser compatibility standards (IE6+)
3. Responsive capable
4. Nice css3/html5 functionalities

What does this include?
--------------------------------------

- **jQuery**: Latest stable version (1.x as we need IE 6+ support)
- **Selectivizr**: CSS3 selectors for IE
- **Modernizr**: Helps to detect browser capabilities and loads [polyfills](https://github.com/Modernizr/Modernizr/wiki/HTML5-Cross-Browser-Polyfills). It also enables html5 elements in IE
- **PIE**: enables some CSS3 features in IE
- **cssfx**: creates browser-compatible css code so you don't have to write -moz/webkit/ms- anymore
- **polyfill.placeholder.js**: just for `placeholder` attribute in form inputs
- **respond.min.js**: ensures crossbrowser mediaqueries
- **jquery.validate.min.js**: the famous jquery plugin. It only loads if a form tag or .form class is present and loads localization file (if html lang attribute is different from `en`)
- **normalize.css**: same from [html5 boilerplate](http://html5boilerplate.com/)
- **media-queries.css**: for responsive stuff

How to use it?
--------------------------------------

Just write your html5 as allways and put your css3 code into `css/style.css` and your javascript into `js/main.js`. Although I can't guarantee 100% browser compatiblity I promise you will have less headaches than before. 

Credits
--------------------------------------
This has evolved for some time thanks to my coworkers: Claudio Alvarez, Mario Droguett, Luis Donaire and Jaime Quiñones. They have contributed through testings (in real projects) and proposals (real project needs).