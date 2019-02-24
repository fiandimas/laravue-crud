<template>
  <div>
    <div class="form-group">
      <router-link to="/" class="btn btn-warning">Back</router-link>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">Edit User</div>
      <div class="panel-body">
        <form v-on:submit="save()">
          <div class="row">
            <div class="col-xs-12 form-group">
              <label class="control-label">Name</label>
              <input type="text" v-model="user.name" class="form-control"/>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 form-group">
              <label class="control-label">Username</label>
              <input type="text" v-model="user.username" class="form-control" readonly/>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 form-group">
              <label class="control-label">Address</label>
              <input type="text" v-model="user.address" class="form-control"/>
            </div>
          </div>
          
          <div class="row">
            <div class="col-xs-12 form-group">
              <label class="control-label">Level</label>
              <select class="form-control" v-model="user.id_level">
                <option v-for="level in level" :value="level.id">{{ level.name }}</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 form-group">
              <button class="btn btn-success">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        user: {
          name: '',
          username: '',
          address: '',
          id_level: null
        },
        level: [],
      }
    },
    mounted() {
      let app = this;
      let id = app.$route.params.id;
      app.id = id
      axios.get('http://localhost:8000/api/v1/user/' + id)
            .then((resp) => {
              app.user = resp.data
            })

      axios.get('http://localhost:8000/api/v1/level')
            .then((resp) => {
              app.level = resp.data
            })      
    },
    methods: {
      save(){
        event.preventDefault();
        let app = this;
        const newUser = app.user;
        axios.put('http://localhost:8000/api/v1/user/' + app.id, newUser)
              .then(() => {
                app.$router.replace('/');
              })
      }
    },
  }
</script>