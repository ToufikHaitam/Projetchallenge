<div id="app"></div>
<template>
    <div>
        <h3 class="text-center">All products</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products" :key="product.id">
                <td>{{ product.id }}</td>
                <td>{{ product.name }}</td>
                <td>{{ product.description }}</td>
                <td>{{ product.price }}</td>
                <td>{{ product.created_at }}</td>
                <td>{{ product.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: product.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteProduct(product.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            products: []
        }
    },
    created() {window.axios
            .get('http://localhost:8000/product/index')
            .then(response => {
                this.products = response.data;
                console.log(this.products);
            });
    },
    methods: {
        deleteProduct(id) {
            this.axios
                .delete('http://localhost:8000/product/delete/${id}')
                .then(response => {
                    let i = this.products.map(item => item.id).indexOf(id); // find index of your object
                    this.products.splice(i, 1)
                });
        }
    }
}
</script>
