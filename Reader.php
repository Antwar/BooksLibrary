<?php

class Reader {
	
	private $name;
	private $email;
	private $borrowedBooks;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
        $this->borrowedBooks = [];
        
    }
	
	public function getName() {
		return $this->name;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
    public function borrowBook($book) {
        if ($book->getAvailability()) {
            $this->borrowedBooks[] = $book;
            $book->setAvailability(false);
            echo "Вы взяли книгу: {$book->getTitle()}\n";
        } else {
            echo "Книги {$book->getTitle()} нет в наличии\n";
        }
    }
    
        public function returnBook($book) {
        if (($index = array_search($book, $this->borrowedBooks, true)) === true) {
            unset($this->borrowedBooks[$index]);
            $book->setAvailability(true);
        } else {
            echo "Книга не взята\n";
        }
    }
}
