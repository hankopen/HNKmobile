HNKmobile
=========

HNKmobile is a shopping mobile website mainly made with jQuery mobile and simplecart(js) targeted to be used with PhoneGap http://phonegap.com/ and so to be used in an app running on iOS, Android, Blackberry and whatever PhoneGap would support. It support the main payment providers like Paypal, Google Checkout... .   
You need to know javascript to modify the app up to your wishes.  
HNKmobile was originally developed to be used to take online order for a vegan burger restaurant in Paris.  

It use : 

- jQuery http://jquery.com/ (v1.11.1)
- jQuery mobile http://jquerymobile.com/ (v1.4.2)
- pickeadate.js http://amsul.ca/pickadate.js/ (v3.5.2)
- jQuery Validation Plugin http://jqueryvalidation.org/ (v1.12.0)
- simpleCart(js) http://simplecartjs.org/ (v3.0.5)

© 2014 [Pierre Doleans](http://www.doleans.net/)  
Dual licensed under the MIT or GPL licenses.

## Quick Start
There is only 2 HTML pages.  
The first one load the datas and the second take the orders.  
You can theme it by using jQuery mobile theme.  
For demo purpose the datas are directly written in the index.html page but they should be sent by an API, a rest server under CodeIgniter was originally used: code: https://github.com/fanzila/hnk/blob/master/hmw/application/controllers/rest.php

## Tests
Tested ok on Chrome v35.0.1916.114  
Tested ok under Android v4.2 with Cordova v3.5.0-0.2.4.
