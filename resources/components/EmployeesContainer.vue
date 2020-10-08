<template>
  <section class="employee-container">
    <header class="employee-container__header">
      <div class="employee_container__btn primary__btn">
        <router-link to="/new-employee"> Add Employee </router-link>
      </div>
    </header>
    <section v-if="!employees.length" class="employee-container__table">
      <h2 class="no-data-text">
        Sorry , no data available at the moment, create a new employee to manage
        your data.
      </h2>
    </section>
    <section v-if="loading" class="loading">Loading...</section>
    <section v-else class="employee-container__table">
      <table class="table table-responsive">
        <thead>
          <tr class="column__header">
            <td class="header-row"><input type="checkbox" name="checkbox" /></td>
            <th
              v-for="column in columns"
              :key="column.name"
              @click="sortBy(column.name)"
              :class="
                sortKey === column.name
                  ? sortOrders[column.name] > 0
                    ? 'sorting_asc'
                    : 'sorting_desc'
                  : 'sorting'
              "
            >
              {{ column.label }}
            </th>
            <th>Manage</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="employee in employees" :key="employee.id">
            <td class="checkbox-row">
              <input type="checkbox" name="checkbox" :id="employee.id" />
            </td>
            <td class="image-row">
              <img
                :src="employee.image"
                alt="profile"
                height="45px"
                width="45px"
              />
            </td>
            <td class="name-row">
              <p class="bold-name-column">{{ employee.name }}</p>
              <br />
              <p class="light-column">{{ employee.job_title }}</p>
            </td>
            <td class="salary-row">
              <p class="bold-column">
                {{ employee.salary }} NOK
                <span class="gain" v-if="employee.last_salary_change >= 0">
                  + {{ employee.last_salary_change }}</span
                >
                <span class="loss" v-else>
                  - {{ employee.last_salary_change }}</span
                >
              </p>
              <br />
              <p class="light-column">{{ employee.job_type.toLowerCase() }}</p>
            </td>
            <td>
              <p>{{ employee.job_status }}</p>
              <br />
              <p class="light-column">2 months</p>
            </td>
            <td>
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                aria-expanded="false"
              >
              </a>
              <div class="actions">
                <router-link
                  :to="{ name: 'edit-employee', params: { id: employee.id } }"
                  ><i
                    class="fa fa-pencil-square-o edit-icon"
                    aria-hidden="true"
                  ></i
                ></router-link>
                <span
                  class="delete__btn"
                  href="#"
                  @click="deleteEmployee(employee.id)"
                  ><i class="fa fa-trash-o delete-icon" aria-hidden="true"></i
                ></span>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </section>
</template>

<script>
const defaultImage = require("../assets/images/profile.jpg");
export default {
  name: "employees-container",
  data() {
    let sortOrders = {};
    let columns = [
      { label: "", name: "image" },
      { label: "Employee", name: "name" },
      { label: "Salary", name: "current_salary" },
      { label: "Status", name: "job_status" },
    ];
    columns.forEach((column) => {
      sortOrders[column.name] = -1;
    });
    return {
      defaultImage,
      loading: false,
      employees: [],
      error: false,
      columns: columns,
      sortKey: "name",
      sortOrders: sortOrders,
      tableShow: {
        showdata: true,
      },
    };
  },
  methods: {
    sortBy(key) {
      this.sortKey = key;
      this.sortOrders[key] = this.sortOrders[key] * -1;
    },
    getIndex(array, key, value) {
      return array.findIndex((i) => i[key] == value);
    },
    deleteEmployee(id) {
      let deleteData = confirm(
        "Are you sure you want to delete this employee?"
      );
      if (deleteData == true) {
        axios
          .delete("{env(APP_URL)}}/employee/" + id)
          .then(() => {
            alert("Success! employee has been deleted"), this.$router.go();
          })
          .catch((error) => {
            console.log(error);
          });
      } else {
        this.$router.go();
      }
    },
  },

  mounted() {
    axios
      .get("http://localhost:8000/employee/list")
      .then((response) => {
        this.employees = response.data.data;
      })
      .catch((error) => {
        console.log(error);
        this.error = true;
      })
      .finally(() => (this.loading = false));
  },
};
</script>