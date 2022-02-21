#!/bin/sh

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
SIGNATURE=$(php -r "echo hash_file('SHA384', 'composer-setup.php');")
EXPECTED_SIGNATURE=$(wget -q -O - https://composer.github.io/installer.sig)

if [ "$EXPECTED_SIGNATURE" != "$SIGNATURE" ]
then
    echo 'ERROR: Invalid installer signature'
    rm composer-setup.php
    exit 1
fi

php composer-setup.php --quiet --install-dir=/usr/local/bin --filename=composer
RESULT=$?
rm composer-setup.php
exit $RESULT