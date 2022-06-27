const allCategorys = [
    'T-Shirt',
    'Pants',
    'Sweater',
    'Shoes',
];

class Products {
    constructor(name, price, salePrice, category) {
      this.name = name;
      this.price = price;
      (!salePrice.length) ? this.salePrice = salePrice : this.salePrice = this.salePrice = 0;
      this.salePrice = salePrice;
      this.category = category;
      this.categoryName = category;
    }

    // if(this.allCategorys.includes(this.category)){
    //     console.log('yra');
    // }

    getProductNameWithPrice() {
        if(this.salePrice === this.price) {
            return `produktas: ${this.name} ${this.category}, kainas: ${this.price}`;
        } else {
            return `produktas: ${this.name} ${this.category}, kainas su nuolaida: ${this.salePrice}`;
        }
    }

    getSalePrice() {
        if(this.salePrice === 0) {
            return false;
        } else {
            return this.salePrice;
        }
    }

    getDiscountPercents() {
        if(this.salePrice === 0) {
            return false;
        } else {
            return ((this.price - this.salePrice)/this.price * 100);
        }
    }

    filterByPrice() {
        
    }
    
  }

const currentProducts = [
    new Products('Nike', 59, 59, 'Shoes'),
    new Products('Puma', 10, 6, 'Sweater'),
    new Products('Reebok', 15, 12, 'T-Shirt'),
    new Products('Puma', 26, 26, 'Pants'),
    new Products('Fila', 99, 99, 'Shoes'),
];

console.log(currentProducts);
console.log(currentProducts[0].getProductNameWithPrice());
console.log(currentProducts[1].getProductNameWithPrice());
console.log(`${currentProducts[0].name} ${currentProducts[0].category} nuolaida:${currentProducts[0].getDiscountPercents()}%`);
console.log(`${currentProducts[1].name} ${currentProducts[1].category} nuolaida:${currentProducts[1].getDiscountPercents()}%`);