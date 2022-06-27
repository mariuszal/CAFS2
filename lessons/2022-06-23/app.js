class Animal {
  constructor(name, sound = null) {
      this.name = name;
      this.sound = this.sound
      this.created = Date.now();
  }

  getSound() {
    return this.sound;
  }
}
class Rabbit extends Animal {
  constructor(name) {
      super(name);   
  }
}
class Cat extends Animal {
  constructor(name) {
      super(name, 'Miau');
  }
}
class Dog extends Animal {
  constructor(name) {
      super(name, 'Au Au Au');
  }
}

let animals = [
  new Rabbit('baltas', 'ttttt'),
  new Cat('pukis'),
  new Dog('reksas'),
];

for(let a of animals) {
  console.log(a.name, a.getSound());
}