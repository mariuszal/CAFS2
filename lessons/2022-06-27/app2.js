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
      this.salePrice = salePrice;
      this.category = category;
      if(allCategorys.includes(category)) { 
          this.categoryName = category;
      } else {
      this.categoryName = undefined;
      }
    }

    getProductNameWithPrice() {
        if(this.salePrice === this.price) {
            return `produktas: ${this.name} ${this.category}, kainas: ${this.price}`;
        } else {
            return `produktas: ${this.name} ${this.category}, kainas su nuolaida: ${this.salePrice}`;
        }
    }

    getSalePrice() {
        if(this.salePrice === this.price) {
            return false;
        } else {
            return this.salePrice;
        }
    }

    getDiscountPercents() {
        if(this.salePrice === this.price) {
            return `nera nuolaidos`;
        } else {
            return `nuolaida ${((this.price - this.salePrice)/this.price * 100)}%`;
        }
    }

    
    
  }

function filterByPrice(product, min, max) {
    if(min === 0 && max === 0 || min === undefined && max === undefined) {
        return product;
    } else if(min === 0 || min === undefined) {
        return product.filter( (product) => { return product.price <= max;});
    } else if(max === undefined) {
        return product.filter( (product) => { return product.price >= min;});
    } else {
        return product.filter( (product) => { return product.price >= min && product.price <= max;});
    }
}

function filterByCategory(product, category) {
    if(category === undefined || category === '') {
        return product;
    } else {
        return product.filter( (product) => { return product.categoryName === category});   
    }
}

function filterByDiscount(product) {
    return product.filter( (product) => { return product.getSalePrice();} );
}

const currentProducts = [
    new Products('Nike', 59, 59, 'Shoes'),
    new Products('Puma', 10, 6, 'Sweater'),
    new Products('Reebok', 15, 12, 'T-Shirt'),
    new Products('Puma', 26, 22, 'Pants'),
    new Products('Fila', 99, 99, 'Shoes'),
];


console.log(currentProducts);
console.log(currentProducts[0].getProductNameWithPrice());
console.log(currentProducts[1].getProductNameWithPrice());
console.log(filterByPrice(currentProducts, 60, 100));
console.log(filterByCategory(currentProducts, 'Shoes'));
console.log(filterByDiscount(currentProducts));
console.log(`${currentProducts[0].name} ${currentProducts[0].category} ${currentProducts[0].getDiscountPercents()}`);
console.log(`${currentProducts[1].name} ${currentProducts[1].category} ${currentProducts[1].getDiscountPercents()}`);