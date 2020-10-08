<script>
export default {
  name: "edit-employee",
  data() {
    return {
      errors: [],
      employee: {},
      loading: false,
      error: null,
      name: null,
      salary: null,
      image: null,
      job_title: null,
      job_status: null,
      job_type: null,
    };
  },
  methods: {
    editEmployee(id) {
      let editEmployee = confirm(
        "Performing this action would change the employee's data"
      );
      if (editEmployee == true) {
        this.axios
          .put("/employee/" + id, this.employee)
          .then(() => {
            alert("Employee was updated succesfully"),
              this.$router.push({ name: "home" });
          })
          .catch((error) => console.log(error))
          .finally(() => (this.loading = false));
      } else {
        this.$router.push({ name: "home" });
      }
    },
    checkForm: function (e) {
      this.errors = [];

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
      } else {
        this.editEmployee(this.employee.id);
      }
    },
  },
  mounted() {
    this.axios
      .get("/employee/" + this.$route.params.id)
      .then((response) => {
        this.employee = response.data.employee;
        console.log(this.employee);
      })
      .catch((error) => console.log(error))
      .finally(() => (this.loading = false));
  },
};
</script>

<template>
 <div class="form-container">
   <div class="form__header">Kindly Edit Employee Details</div>
      <form @submit.prevent="checkForm">
        <p v-if="errors.length">
          <b>Please correct the following error(s):</b>
          <ul>  
            <li v-for="error in errors" :key="error.message">{{ error }}</li>
          </ul>
        </p>
      <div class="form-group">
        <label>Name</label>
        <br />
        <input type="text" class="form-control" v-model="employee.name" />
      </div>
      <div class="form-group">
        <label>Salary</label>
        <br />
        <input type="text" class="form-control" v-model="employee.salary" />
      </div>
      <div class="form-group">
        <label>Image Link</label>
        <br />
        <input type="text" class="form-control" v-model="employee.image" />
      </div>
      <div class="form-group">
        <label>Job Title</label>
        <br />
        <input type="text" class="form-control" v-model="employee.job_title" />
      </div>
      <div class="form-group">
        <label>Job Type</label>
        <br />
        <input type="text" class="form-control" v-model="employee.job_type" />
      </div>
      <div class="form-group">
        <label>Job Status</label>
        <br />
        <input type="text" class="form-control" v-model="employee.job_status" />
      </div>

      <input type="submit" value="Submit" />
    </form>
 </div>
</template>

