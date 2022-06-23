class Book {
    constructor(name, author, year) {
      this.name = name;
      this.author = author;
      this.year = year;
    }
    get bookNameAuthor() {
      return this.nameAndAuthor();
    }
    nameAndAuthor() {
      return `Pavadinimas:${this.name}, Autorius:${this.author}`;
    }
    get bookYear() {
        return this.yearOfBook();
    }
    yearOfBook() {
        return `${new Date().getFullYear() - this.year} metų senumo.`;
    }
  }
  
  const book1 = new Book('Vienintelė žemė', 'Marcinkevičius', 1984);

  console.log(book1.bookNameAuthor);
  console.log(book1.bookYear);
  