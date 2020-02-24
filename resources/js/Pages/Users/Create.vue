<template>
  <Layout>
      <div class="container">
          <div class="col-8 offset-2">
              <div class="card mt-5">
                  <div class="card-header">Add New User</div>
                  <div class="card-body">
                      <form action="/create" method="POST" @submit.prevent="createUser">
                            <div class="form-group">
                                <label for="name">Name:</label>
                              <input type="text" v-model="form.name" id="name" class="form-control" placeholder="John Doe">
                            </div>
                            <div class="form-group">
                                <label for="email">@:</label>
                                <input type="text" v-model="form.email" id="email" placeholder="ABC@example.com" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" v-model="form.password" id="password" placeholder="*********" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Submit</button>  
                            </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </Layout>
</template>

<script>
import Layout from '../../Shared/Layout'
export default {
    name: 'Create',
    props: ['errors'],
    components: {
        Layout,
    },
    data () {
        return {
            form: {
                name: '',
                email: '',
                password: ''
            }
        }
    },
    methods: {
        createUser () {
            this.$inertia.post('/create', this.form)
        }
    }
}
</script>

<style>

</style>