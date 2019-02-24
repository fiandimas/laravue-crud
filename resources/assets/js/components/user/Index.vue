<template>
  <div>
    <div class="form-group">
      <router-link :to = "{name: 'createUser'}" class="btn btn-success">Add User</router-link>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">User List</div>
      <div class="panel-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Username</th>
              <th>Address</th>
              <th>Level</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="user, index in user">
              <td>{{ index+1 }}</td>
              <td>{{ user.name }}</td>
              <td>{{ user.username }}</td>
              <td>{{ user.address }}</td>
              <td>{{ user.id_level }}</td>
              <td>
                <router-link :to = "{name: 'editUser', params: {id:user.id}}" class="btn btn-warning">Edit</router-link>
                <a href="#" class="btn btn-danger" v-on:click="deleteUser(user.id,index)">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>  
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        user: []
      }
    },
    mounted() {
      var app = this;
      axios.get('http://localhost:8000/api/v1/user')
           .then((resp) => {
             app.user = resp.data
           })
    },
    methods: {
      deleteUser(id,index){
        if(confirm('Are you sure to delete this ?')){
          let app = this
          axios.delete('http://localhost:8000/api/v1/user/' + id)
                .then((resp) => {
                  app.user.splice(index,1)
                })
        }
      }
    },
  }
</script>