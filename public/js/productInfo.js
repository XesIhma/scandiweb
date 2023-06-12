Vue.component('product-info', {
  props: ['product'],
  template: `
  <div class="col-md-3 card">  
    <div class="product-box card-body">
      <div class="product-box--content">
        <input class="delete-checkbox" 
                type="checkbox"  :checked="product.checked" @change="handleCheckboxChange">
        <h2>{{ product.sku }}</h2>
        <p>{{ product.name }}</p>
        <p>{{ product.price }}</p>
        <p>{{ product.prodSpecificAttr }}</p>
        
        </div>
    </div>
  </div>
  `,
  data() {
    return {
      checked: false
    };
  },
  methods: {
    handleCheckboxChange() {
      this.$emit('checkbox-change', this.product);
    }
  }
  
});