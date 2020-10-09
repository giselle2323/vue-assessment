<script>
export default {
  name: "add-employee",
  data() {
    return {
      errors: [],
      employee: {},
      name: null,
      salary: null,
      image: null,
      job_title: null,
      job_status: null,
      job_type: null,
    };
  },
  methods: {
    addEmployee() {
      this.axios
        .post("/employee/create", this.employee)
        .then(
          () => (
            alert("Employee added sucessfully"),
            this.$router.push({ name: "home" })
          )
        )
        .catch((error) => console.log(error))
        .finally(() => (this.loading = false));
    },
    checkForm: function (e) {
      
      if (!this.name) {
        this.errors.push("Name required.");
      }
      if (!this.salary) {
        this.errors.push("Email required.");
      }
      if (!this.image) {
        this.errors.push("Image link required.");
      }
      if (!this.job_status) {
        this.errors.push("Job status required.");
      }
      if (!this.job_type) {
        this.errors.push("Job type required.");
      }
      if (!this.job_title) {
        this.errors.push("Job Title required.");
      }
      if (!this.errors.length) {
        return true;
      } 
      e.preventDefault();
      this.addEmployee();
  
    }
  },
};
</script>

<template>

  <div class="form-container">
    
    <div class="form__header">
      <h2>Kindly Provide the following details</h2>
    </div>
    <form @submit="checkForm" method="post">
        <p v-if="errors.length">
          <b>Please correct the following error(s):</b>
          <ul>
            <li v-for="error in errors" :key="error">{{ error }}</li>
          </ul>
        </p>
      <div class="form-group">
        <label>Name</label>
        <br />
        <input type="text" class="form-control" v-model="employee.name" name="name"/>
      </div>
      <div class="form-group">
        <label>Salary</label>
        <br />
        <input type="number" class="form-control" id="name" v-model="employee.salary" name="salary"/>
      </div>
      <div class="form-group">
        <label>Image Link</label>
        <br />
        <input type="text" class="form-control" id="image" v-model="employee.image" name='image'/>
      </div>
      <div class="form-group">
        <label>Job Title</label>
        <br />
        <input type="text" class="form-control" id="job_title" v-model="employee.job_title"  name="job_title"/>
      </div>
      <div class="form-group">
        <label>Job Type</label>
        <br />
        <input type="text" class="form-control" id="job_type" v-model="employee.job_type" name="job_type" />
      </div>
      <div class="form-group">
        <label>Job Status</label>
        <br />
        <input type="text" class="form-control" id="job_status" v-model="employee.job_status" name="job_status" />
      </div>

      <input type="submit" value="Submit" />
    </form>
  </div>
</template>
