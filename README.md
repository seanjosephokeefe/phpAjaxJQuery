# phpAjaxJQuery
PHP, with jQuery AJAX, MySQL DB, and also uses PHP Sessions

This app connects to a MySQL DB, uses AJAX to send data back and forth to the UI. It's a fun app. I also use PHP sessions. There's also some jQuery for validation.

This app is silly but it does show how to wire up PHP to the UI using jQuery and AJAX. There's a database behind it in MySQL called productsforajaxdb.

In the sql folder you'll find the scripts for the db. Run those in your MySQL instance and then create/modify a user called dbuser with a password of dbuser with privileges of insert/select/update. If you'd prefer to use another user then change the login settings in Config.php in the php folder to the credentials you'll be using in this database.

Then drop the PHPAJAXappWithJQuery folder into your localhost or web space and you should be good to go. I built the application in WAMP.

If you are using web hosting and can't connect then you may need to change the server "localhost" in the Config.php file to whatever your hosting recommends.

enjoy.

Follow me on Twitter 			@seanjokeefe,
at Tumblr						http://seanjosephokeefe.tumblr.com/