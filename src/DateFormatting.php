<?php
$fmt = datefmt_create(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'timezone_id of the formatter is : ' . datefmt_get_timezone_id($fmt);
datefmt_set_timezone_id($fmt, 'CN');
echo 'Now timezone_id of the formatter is : ' . datefmt_get_timezone_id($fmt);


$fmtOo = new IntlDateFormatter(
    'en_US',
    IntlDateFormatter::FULL,
    IntlDateFormatter::FULL,
    'America/Los_Angeles',
    IntlDateFormatter::GREGORIAN
);
echo 'timezone_id of the formatter is : ' . $fmtOofmt->getTimezoneId();
$fmtOo->setTimezoneId('CN');
echo 'Now timezone_id of the formatter is : ' . $fmtOo->getTimezoneId();