Vue.component('products-header', {
  template: `
  <header>

    <h2>Product List</h2>
    <a href="add-product" class="btn btn-secondary">ADD</a>
    <button id="delete-product-btn" class="btn btn-primary" 
      @click="massDelete">MASS DELETE</button>

  </header>
  `,
  data() {
    return {
      checkedProductSkus: []
    };
  },
  methods: {
    massDelete() {
      // Perform the mass deletion logic here using this.checkedProductIds
      console.log('Deleting products with IDs:', this.checkedProductSkus);
    },
    handleCheckboxUpdated(sku) {
      if (this.checkedProductsSkus.includes(sku)) {
        this.checkedProductsSkus = this.checkedProductsSkus.filter(id => id !== sku);
      } else {
        this.checkedProductsSkus.push(sku);
      }
    }
  },
  mounted() {
    this.$root.$on('checkbox-updated', this.handleCheckboxUpdated);
  },
  beforeDestroy() {
    this.$root.$off('checkbox-updated', this.handleCheckboxUpdated);
  }
  
});