CREATE TABLE Books (
    BookID INT PRIMARY KEY IDENTITY,
    Title VARCHAR(255) NOT NULL,
    Author VARCHAR(255) NOT NULL,
    Genre VARCHAR(50) NOT NULL,
	Rating INT,
    Price DECIMAL(10, 2) NOT NULL,
    StockQuantity INT NOT NULL DEFAULT 0
);

INSERT INTO Books (Title, Author, Genre, Rating, Price, StockQuantity)
VALUES 
('The Catcher in the Rye', 'J.D. Salinger', 'Literary Fiction', 4, 20.00, 50),
('To Kill a Mockingbird', 'Harper Lee', 'Classic', 3, 25.00, 30),
('Pride and Prejudice', 'Jane Austen', 'Romance', 5, 15.00, 40),
('1984', 'George Orwell', 'Dystopian', 4, 18.00, 60),
('The Great Gatsby', 'F. Scott Fitzgerald', 'Literary Fiction', 5, 22.00, 55),
('Harry Potter and the Sorcerer''s Stone', 'J.K. Rowling', 'Fantasy', 4, 30.00, 20),
('The Hobbit', 'J.R.R. Tolkien', 'Fantasy', 3, 28.00, 25),
('The Lord of the Rings', 'J.R.R. Tolkien', 'Fantasy', 5, 19.00, 45),
('Animal Farm', 'George Orwell', 'Allegory', 4, 17.00, 35),
('The Da Vinci Code', 'Dan Brown', 'Mystery', 4, 21.00, 50),
('The Hunger Games', 'Suzanne Collins', 'Young Adult', 5, 24.00, 30),
('The Alchemist', 'Paulo Coelho', 'Fantasy', 3, 26.00, 40),
('The Road', 'Cormac McCarthy', 'Dystopian', 4, 29.00, 60),
('The Girl with the Dragon Tattoo', 'Stieg Larsson', 'Mystery', 5, 16.00, 55),
('The Notebook', 'Nicholas Sparks', 'Romance', 4, 23.00, 20),
('The Fault in Our Stars', 'John Green', 'Young Adult', 3, 27.00, 25),
('Gone Girl', 'Gillian Flynn', 'Mystery', 5, 31.00, 45),
('The Help', 'Kathryn Stockett', 'Historical Fiction', 4, 32.00, 35),
('The Martian', 'Andy Weir', 'Science Fiction', 4, 33.00, 50),
('Crazy Rich Asians', 'Kevin Kwan', 'Contemporary', 5, 34.00, 30);

select * from books;
DELETE FROM Books;
