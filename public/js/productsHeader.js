Vue.component('products-header', {
  template: `
  <header>

    <h2>Product List</h2>
    <a href="add-product" class="btn btn-secondary">ADD</a>
    <button id="delete-product-btn" class="btn btn-primary" 
    @click="handleMassDelete">MASS DELETE</button>

  </header>
  `
  ,
  methods: {
    handleMassDelete() {
      this.$emit('mass-delete');
    }
  }
  
});