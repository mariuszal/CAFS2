class Movie {
    constructor(name, year, director, budget, income) {
      this.name = name;
      this.director = director;
      this.year = year;
      this.budget = budget;
      this.income = income;
    }
    
    getIntroduction() {
      return `Filmas: ${this.name},${this.year} \nRezisierius:${this.director}`;
    }
    
    getProfit() {
        return `Filmas uzdirbo: ${this.income - this.budget}$`;
    }
  }
  
  const Movie1 = new Movie('Mad Max: Fury Road', 2015, 'George Mille',185000000,374000000);
  const Movie2 = new Movie('SuperMan: Return', 2006, 'Bryan Singer',204000000,391000000);

  console.log(Movie1.getIntroduction());
  console.log(Movie1.getProfit());

  console.log(Movie2.getIntroduction());
  console.log(Movie2.getProfit());
  