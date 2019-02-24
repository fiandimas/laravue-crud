<template>
  <div>
    <div class="form-group">
      <router-link to="/" class="btn btn-warning">Back</router-link>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">Edit Level</div>
      <div class="panel-body">
        <form v-on:submit="save()">
          <div class="row">
            <div class="col-xs-12 form-group">
              <label class="control-label">Name</label>
              <input type="text" v-model="level.name" class="form-control"/>
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
        level: {
          name: ''
        }
      }
    },
    mounted() {
      let app = this;
      let id = app.$route.params.id
      app.id = id
      axios.get('http://localhost:8000/api/v1/level/' + id)
            .then((resp) => {
              app.level = resp.data
            })
    },
    methods: {
      save(){
        let app = this
        let id = app.id
        let newLevel = app.level
        axios.put('http://localhost:8000/api/v1/level/' + id,newLevel)
              .then(() => [
                app.$router.replace('/')
              ])
      }
    },
  }
</script>