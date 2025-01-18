<?php

include 'Book.php';
include 'Reader.php';
include 'Library.php';

$library = new Library();

$firstBook = new Book("Мартин Иден", "Джек Лондон", 1909);
$secondBook = new Book("Смерть на Ниле", "Агата Кристи", 1937);

$library->addBook($firstBook);
$library->addBook($secondBook);

$reader = new Reader("Никита Лебедев", "lebedev@mail.com");
$library->addReader($reader);

$reader->borrowBook($firstBook);
$library->listBooks();
$reader->returnBook($secondBook);

$library->findBook('Мартин Иден');
