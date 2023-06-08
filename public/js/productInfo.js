Vue.component('product-info', {
  
  template: `
  <div class="col-md-3">  
    <div class="product-box">
      <div class="product-box--content">
        <input class="delete-checkbox" 
                type="checkbox" 
                v-model="checked"
                :value="product.sku"
                v-on:change="onCheckboxChange">
        <h2>{{ product.sku }}</h2>
        <p>{{ product.name }}</p>
        <p>{{ product.price }}</p>
        <p>{{ product.prodSpecificAttr }}</p>
        
        </div>
    </div>
  </div>
  `,
  props: ['product'],
  data() {
    return {
      checked: false
    };
  },
  methods: {
    onCheckboxChange(event) {
      const sku = event.target.value; 
      

      this.$emit('checkbox-updated', sku);
    }
  }
  
});