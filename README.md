SendGrid SMTP
===

This drop in library adds basic support for using SendGrid's SMTP service in a Flamework project.

This library modifies the standard <code>lib_email.php</code> library file adding the feature flag for using SendGrid as your SMTP mailer throughout the existing Flamework core. You can choose to enable this by copying this <code>lib_email.php</code> over your existing file, and enabling the feature flags in <code>config.php</code>, or you can use the <code>lib_sendgrid.php</code> library on its own.

This library also depends on the <code>sendgrip-php</code> API available here -- http://github.com/sendgrid/sendgrid-php. I've copied this library into the include folder for convenience, but please feel free to clone a current copy from the SendGrid GitHub account.

The flamework-sendgrid library relies on three additional global variables. Be sure to add these to your <code>config.php</code> file and set with your SendGrid credentials.

<pre>$GLOBALS['cfg']['enable_feature_sendgrid'] = 1;
$GLOBALS['cfg']['sendgrid_username'] = 'YOUR-SENDGRID-USERNAME';
$GLOBALS['cfg']['sendgrid_password'] = 'YOU-SENDGRID-PASSWORD';</pre>
