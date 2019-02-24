<template>
  <div>
    <div class="panel panel-default">
      <div class="panel-heading">Level List</div>
        <div class="panel-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Level</th>
                <th>Name Level</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="level,index in level">
                <td>{{ index+1 }}</td>
                <td>{{ level.id }}</td>
                <td>{{ level.name }}</td>
                <td>
                  <router-link :to="{name:'levelEdit', params:{id:level.id}}" class="btn btn-warning">Edit</router-link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>      
    </div>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        level: []
      }
    },
    mounted() {
      var app = this
      axios.get('http://localhost:8000/api/v1/level')
            .then((resp) => {
              app.level = resp.data
            })

    }
  }
</script>