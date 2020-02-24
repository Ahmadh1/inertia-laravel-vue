<template>
    <layout>
        <div class="container">
            <div class="col-10 offset-1">
                <div class="my-5">
                    <inertia-link href="/users/create" class="btn btn-primary">Add New User</inertia-link>
                </div>
                <div class="card mt-5">
                    <div class="card-header">Users</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <td scope="row">{{user.name}}</td>
                                    <td>{{user.email}}</td>
                                    <td>
                                        <inertia-link :href="`/user/${user.id}/edit`" class="btn btn-outline-dark btn-sm">edit</inertia-link>
                                        <inertia-link :href="`/user/${user.id}/remove`" class="btn btn-outline-danger btn-sm">remove</inertia-link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from '../../Shared/Layout'
export default {
    name: 'Index',
    props: ['users'],
    components: {
        Layout,
    }
}
</script>

<style>

</style>