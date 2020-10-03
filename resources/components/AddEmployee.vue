<template>
  <form @submit.prevent="addEmployee">
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" v-model="employee.name">
    </div>
    <div class="form-group">
      <label>Salary</label>
      <input type="text" class="form-control" v-model="employee.salary">
    </div>
    <div class="form-group">
      <label>Image Link</label>
      <input type="text" class="form-control" v-model="employee.image">
    </div>
    <div class="form-group">
      <label>Job Title</label>
      <input type="text" class="form-control" v-model="employee.job_title">
    </div>
    <div class="form-group">
      <label>Job Type</label>
      <input type="text" class="form-control" v-model="employee.job_type">
    </div>
    <div class="form-group">
      <label>Job Status</label>
      <input type="text" class="form-control" v-model="employee.job_status">
    </div>
    <button type="submit" class="btn btn-primary">Add Employee</button>
  </form>
</template>

<script>
  export default {
    data() {
      return {
        employee: {}
      }
    },
    methods: {
      addEmployee() {

        this.axios
          .post('http://localhost:8000/employee/create', this.employee)
          .then(response => (
              this.$router.push({name: 'home'})
              // console.log(response.data)
          ))
          .catch(error => console.log(error))
          .finally(() => this.loading = false)
      }
    }
  }
</script>