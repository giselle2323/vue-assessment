<template>
  <section id="app">
    <NavBar />
    <section class="inner-container">
      <section class="employee__section">
        <SideBar />
        <EmployeesContainer />
      </section>
    </section>
  </section>
</template>
<script>
  import NavBar from './NavBar.vue'
  import SideBar from './SideBar.vue'
  import EmployeesContainer from './EmployeesContainer.vue'
  export default {
    name: 'main-component',
    components: {
      NavBar,
      SideBar,
      EmployeesContainer
    }
  }
</script>