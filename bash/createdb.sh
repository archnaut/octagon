#!/bin/bash

MYSQL=`which mysql`
DB_HOST=${1:-localhost}
DB='code_challenge'
DB_USER='php'
DB_PASSWORD='P@$$w0rd'
DB_TABLE='Test'

      
# Create DB User
$MYSQL -uroot --host=$DB_HOST -t<<EOF_SQL
USE mysql;

CREATE USER IF NOT EXISTS $DB_USER@localhost IDENTIFIED BY '$DB_PASSWORD';
UPDATE user SET plugin='mysql_native_password' WHERE User='$DB_USER';

CREATE DATABASE IF NOT EXISTS $DB;
GRANT USAGE ON *.* TO $DB_USER@localhost IDENTIFIED BY '$DB_PASSWORD';
GRANT ALL PRIVILEGES ON $DB.* TO $DB_USER@localhost;
FLUSH PRIVILEGES;

USE $DB;
CREATE TABLE IF NOT EXISTS $DB_TABLE ( length VARCHAR(20), volume VARCHAR(20), mass VARCHAR(20), time VARCHAR(20), currency VARCHAR(20) );
INSERT INTO Test (length, volume, mass, time, currency) VALUES('inch', 'ounce', 'grain', 'second', 'dollar' );
INSERT INTO Test (length, volume, mass, time, currency) VALUES('link', 'gill', 'drachm', 'minute', 'pound' );
INSERT INTO Test (length, volume, mass, time, currency) VALUES('foot', 'pint', 'ounce', 'hour', 'euro' );
INSERT INTO Test (length, volume, mass, time, currency) VALUES('yard', 'quart', 'pound', 'day', 'yen' );
INSERT INTO Test (length, volume, mass, time, currency) VALUES('pole', 'gallon', 'stone', 'week', 'peso' );
EOF_SQL