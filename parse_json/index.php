<?php

$contents = file_get_contents('books.json');

try {

    $data = json_decode(
        $contents,
        flags: JSON_THROW_ON_ERROR | JSON_OBJECT_AS_ARRAY
    );
} catch (JsonException $e) {

    exit($e->getMessage());
}

/*
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_last_error_msg();
}
*/

var_dump($data[0]['title']);
var_dump($data[1]['pages']);
var_dump($data[0]['author']['firstname']);

echo '<pre>';
print_r($data);
echo '</pre>';

?>
<h1>Books</h1>

<?php foreach ($data as $book) : ?>

    <h2><?= $book['title'] ?></h2>

    <p>by <?= $book['author']['firstname'] ?>
        <?= $book['author']['surname'] ?></p>

    <p><?= implode(', ', $book['categories']) ?></p>

    <table>
        <thead>
            <tr>
                <th>Pages</th>
                <th>Price</th>
                <th>Available</th>
                <th>Language</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $book['pages'] ?></td>
                <td>£<?= number_format($book['price'], 2) ?></td>
                <td><?= $book['available'] ? 'yes' : 'no' ?></td>
                <td><?= $book['language'] ?? 'unknown' ?></td>
            </tr>
        </tbody>
    </table>

    <hr>

<?php endforeach; ?>