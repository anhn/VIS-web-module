MySQL PHP Backup.
November 2004
Version 2.2

This is an overhauled version.
The program will detect by itself all tables in a specific database.
All tables will be shown, so you can delete them if you do not want
to save certain tables.

Has been tested also with Windows/Apache.
If you have problems with windows, change backup.php and restore.php.
Instructions are in the files.
I might not work if $_SERVER[SERVER_SOFTWARE] does not contain 'Win32'.

Version 2.1+ has totally selectable tables for update and
option for structures only.

******************
TIMEOUT ON SERVER:
******************
If you get a timeout of the backup, this is probably a memory constraint.
If you have huge tables this might happen.
I added an extra backup.php named backup_timeout.php.
If you get timeout problems because of huge tables, use that one.
It writes to the .sql file more often (2000 records).
Might be a bit slower, but secure.
(I tested this and it works fine on my win machine that crashed on a huge table.)


No configuration required.

Just unzip into a directory and you are done!

Start with index.php!

Do not start main.php (it will give an error anyway).
PROTECT YOUR BACKUP DIR WITH .htaccess!!

FULLTEXT INDEXES, this is implemented in 3.23 and 4.0+ of MySql.
I implemented a way to find out whether you have FULLTEXT indexes for 3.23.
Use backup_fulltext.php instead of backup.php
It is untested as i myself have never used fulltext.

Albert
www.absoft-my.com/pondok
