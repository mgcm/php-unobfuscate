# php-unobfuscate

## Use Case

Do you have a lot of PHP files in your server, left by your previous employee, that look like this?

`<?php $_F=__FILE__;$_X='P2lCP1o0YX03fVMnKSk7P2k=';$_D=strrev('edoced_46esab');eval($_D('JFYuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw='));?>`

No worries! Meet `php-unobfuscate`, a simple tool for reversing lame PHP obfuscators.

Supports the following methods:

 * usage of `$_D=strrev('edoced_46esab')`

To run, just use:

`php -f unobfuscate.php obfuscated-php-file.php`

## Extra Extra

Some geniuses think that if you encode the already encoded PHP file multiple times, you have even more secure encoding! *WRONG*

This tool will decode as many times as necessary, so you get the full source code in just one run.
