<template>
  <Layout>
      <div class="container">
          <div class="col-8 offset-2">
              <div class="card mt-5">
                  <div class="card-header">Add New User</div>
                  <div class="card-body">
                      <div v-if="(errors.length) > 0" class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              <span class="sr-only">Close</span>
                          </button>
                          <strong>Holy guacamole!</strong>{{errors}}
                      </div>
                      <form action="/create" method="POST" @submit.prevent="createUser">
                            <div class="form-group">    
                                <label for="name">Name:</label>
                                <input type="text" v-model="form.name" id="name" class="form-control" placeholder="John Doe">
                                <span class="text-danger" v-if="errors.name">{{errors.name[0]}}</span>
                            </div>
                            <div class="form-group">
                                <label for="email">@:</label>
                                <input type="text" v-model="form.email" id="email" placeholder="ABC@example.com" class="form-control">
                                <span class="text-danger" v-if="errors.email">{{errors.email[0]}}</span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" v-model="form.password" id="password" placeholder="*********" class="form-control">
                                <span class="text-danger" v-if="errors.password">{{errors.password[0]}}</span>
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
        createUser() {
            this.$inertia.post('/create', this.form)
        }
    }
}
</script>

<style>

</style>