<template>
    <div>
        <h1>Create A Product</h1>
        <form @submit.prevent="addproduct">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Product name:</label>
                        <input type="text" class="form-control" v-model="product.name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>product description:</label>
                        <textarea class="form-control" v-model="product.description" rows="5"></textarea>
                    </div>
                </div>
            </div><br />

            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>product price:</label>
                    <textarea class="form-control" v-model="product.price" rows="5"></textarea>
                </div>
            </div>

                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>product categories:</label>
                        <select v-model="category_id">
                            <option v-for="category in categories" v-bind:value="category.id">
                                {{ category.name }}
                            </option>

                        </select>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data(){
        return {
            product:{
                name:'',
                price:'',
                description:'',
                category_id:'',

            }
        }
    },
    created() {
        let uri = 'http://localhost:8000/categerie/index';
        this.axios.get(uri).then(response => {
            this.categories = response.data.data;
        });
    },
    methods: {

            addproduct(){
                let uri = 'http://localhost:8000/product/create';
                axios.post(uri, this.product)
                    .then(function( response ){

                    }.bind(this));
            }

        }


}
</script>
