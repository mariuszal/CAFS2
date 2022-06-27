class Car {
  constructor(make, model, year) {
      this.make = make;
      this.model = model;
      this.year = year;
  }

  getIntroduction() {
      return `Marke:${this.make} Modelis:${this.model}`
  }

  getAge(){
      const date = new Date();
      const year = date.getFullYear();
      let r = '';
      if((year - this.year) <= 10) {
        r = '10 metu arba naujesnis';
      } else {
        r = '11 metu arba senesnis';
      }
      return r;
  }
}

class Motorcycle extends Car {
  constructor(make, model, year, wheels) {
      super(make, model, year);
      this.wheels = wheels;
  }

  getWheelsNumber() {
      if (this.wheels == 3) {
          return 'motociklas turi 3 ratus'
      } else if (this.wheels == 2) {
          return 'motociklas turi 2 ratus'
      }else{
          return 'manau tai nemotociklas....'
      }
  }

}
const golfas = new Car('VW', 'Golf', 2006);
const harley = new Motorcycle('Harley-Davidson', 'Street', 2013, 2)
console.log(harley.getWheelsNumber());
console.log(golfas.getIntroduction());
console.log(golfas.getAge());