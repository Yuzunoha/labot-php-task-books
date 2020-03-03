<?php

$php = json_decode(file_get_contents('/var/www/labot/labot-php-task-books-json/php.json'));
$js = json_decode(file_get_contents('/var/www/labot/labot-php-task-books-json/javascript.json'));

?>

<h1>PHPの参考書</h1>
<table>
<tr>
<th>title</th>
<th>author</th>
<th>publisher</th>
</tr>
<?php
foreach ($php as $book) {
    echo '<tr>';
    echo '<td>' . $book->title . '</td>';
    echo '<td>' . $book->author . '</td>';
    echo '<td>' . $book->publisher . '</td>';
    echo '</tr>';
}
?>
</table>

<h1>JavaScriptの参考書</h1>
<table>
<tr>
<th>title</th>
<th>author</th>
<th>publisher</th>
</tr>
<?php
foreach ($js as $book) {
    echo '<tr>';
    echo '<td>' . $book->title . '</td>';
    echo '<td>' . $book->author . '</td>';
    echo '<td>' . $book->publisher . '</td>';
    echo '</tr>';
}
?>
</table>
