Vue.component('product-info', {
  props: ['product'],
  template: `
    <div>
      <h2>{{ product.sku }}</h2>
      <p>{{ product.name }}</p>
      <p>{{ product.price }}</p>
      <p>{{ product.prodSpecificAttr }}</p>
    </div>
  `
});