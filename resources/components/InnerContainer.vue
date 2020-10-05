<template>
  <section class="inner-container">
    <section class="employee__section">
      <SideBar />
      <router-view />
    </section>
  </section>
</template>

<script>
import SideBar from "./SideBar.vue";
import EmployeesContainer from "./EmployeesContainer.vue";

export default {
  name: "inner-component",
  components: {
    SideBar,
    EmployeesContainer,
  },
  props: {
    employees: {
      type: Array,
    },
  },
};
</script>