This project is used to POC the email notification via contact form.

Steps to run:

1. Create `config.php` based on the temple to customize addresses
2. Use `mailme.php` to submit an email to a predetermined address upon page visit.
3. Upload `contact.php` and `submit.php` on the web server to test.

Issues:
-------

Sending actual email does not work on XAMMP OSX El Capitan, depite pointing the smtp 
from `php.ini` to the correct server address.   