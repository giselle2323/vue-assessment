import EmployeesContainer from '../components/EmployeesContainer.vue';
import AddEmployee from '../components/AddEmployee.vue';
import EditEmployee from '../components/EditEmployee.vue';
export const routes = [

  {
    name: 'home',
    path: '/',
    component: EmployeesContainer
  },
  {
    name: 'add-employee',
    path: '/new-employee',
    component: AddEmployee
  },
  {
    name: 'edit-employee',
    path: '/edit-employee/:id',
    component: EditEmployee
  }
];