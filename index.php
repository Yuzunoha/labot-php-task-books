<?php

$php = file_get_contents('/var/www/labot/labot-php-task-books-json/php.json');
$js = file_get_contents('/var/www/labot/labot-php-task-books-json/javascript.json');

echo "<pre>";
print_r($php);
print_r($js);
