import Vue from 'vue'
import VueRouter from 'vue-router'

import ChangePassword from '../components/ChangePassword.vue'
import PermissionsIndex from '../components/cruds/Permissions/Index.vue'
import PermissionsCreate from '../components/cruds/Permissions/Create.vue'
import PermissionsShow from '../components/cruds/Permissions/Show.vue'
import PermissionsEdit from '../components/cruds/Permissions/Edit.vue'
import RolesIndex from '../components/cruds/Roles/Index.vue'
import RolesCreate from '../components/cruds/Roles/Create.vue'
import RolesShow from '../components/cruds/Roles/Show.vue'
import RolesEdit from '../components/cruds/Roles/Edit.vue'
import UsersIndex from '../components/cruds/Users/Index.vue'
import UsersCreate from '../components/cruds/Users/Create.vue'
import UsersShow from '../components/cruds/Users/Show.vue'
import UsersEdit from '../components/cruds/Users/Edit.vue'
import DevelopmentsIndex from '../components/cruds/Developments/Index.vue'
import DevelopmentsCreate from '../components/cruds/Developments/Create.vue'
import DevelopmentsShow from '../components/cruds/Developments/Show.vue'
import DevelopmentsEdit from '../components/cruds/Developments/Edit.vue'
import ProductionsIndex from '../components/cruds/Productions/Index.vue'
import ProductionsCreate from '../components/cruds/Productions/Create.vue'
import ProductionsShow from '../components/cruds/Productions/Show.vue'
import ProductionsEdit from '../components/cruds/Productions/Edit.vue'
import ReceiptsIndex from '../components/cruds/Receipts/Index.vue'
import ReceiptsCreate from '../components/cruds/Receipts/Create.vue'
import ReceiptsShow from '../components/cruds/Receipts/Show.vue'
import ReceiptsEdit from '../components/cruds/Receipts/Edit.vue'
import TasksIndex from '../components/cruds/Tasks/Index.vue'
import TasksCreate from '../components/cruds/Tasks/Create.vue'
import TasksShow from '../components/cruds/Tasks/Show.vue'
import TasksEdit from '../components/cruds/Tasks/Edit.vue'

Vue.use(VueRouter)

const routes = [
    { path: '/change-password', component: ChangePassword, name: 'auth.change_password' },
    { path: '/permissions', component: PermissionsIndex, name: 'permissions.index' },
    { path: '/permissions/create', component: PermissionsCreate, name: 'permissions.create' },
    { path: '/permissions/:id', component: PermissionsShow, name: 'permissions.show' },
    { path: '/permissions/:id/edit', component: PermissionsEdit, name: 'permissions.edit' },
    { path: '/roles', component: RolesIndex, name: 'roles.index' },
    { path: '/roles/create', component: RolesCreate, name: 'roles.create' },
    { path: '/roles/:id', component: RolesShow, name: 'roles.show' },
    { path: '/roles/:id/edit', component: RolesEdit, name: 'roles.edit' },
    { path: '/users', component: UsersIndex, name: 'users.index' },
    { path: '/users/create', component: UsersCreate, name: 'users.create' },
    { path: '/users/:id', component: UsersShow, name: 'users.show' },
    { path: '/users/:id/edit', component: UsersEdit, name: 'users.edit' },
    { path: '/developments', component: DevelopmentsIndex, name: 'developments.index' },
    { path: '/developments/create', component: DevelopmentsCreate, name: 'developments.create' },
    { path: '/developments/:id', component: DevelopmentsShow, name: 'developments.show' },
    { path: '/developments/:id/edit', component: DevelopmentsEdit, name: 'developments.edit' },
    { path: '/productions', component: ProductionsIndex, name: 'productions.index' },
    { path: '/productions/create', component: ProductionsCreate, name: 'productions.create' },
    { path: '/productions/:id', component: ProductionsShow, name: 'productions.show' },
    { path: '/productions/:id/edit', component: ProductionsEdit, name: 'productions.edit' },
    { path: '/receipts', component: ReceiptsIndex, name: 'receipts.index' },
    { path: '/receipts/create', component: ReceiptsCreate, name: 'receipts.create' },
    { path: '/receipts/:id', component: ReceiptsShow, name: 'receipts.show' },
    { path: '/receipts/:id/edit', component: ReceiptsEdit, name: 'receipts.edit' },
    { path: '/tasks', component: TasksIndex, name: 'tasks.index' },
    { path: '/tasks/create', component: TasksCreate, name: 'tasks.create' },
    { path: '/tasks/:id', component: TasksShow, name: 'tasks.show' },
    { path: '/tasks/:id/edit', component: TasksEdit, name: 'tasks.edit' },
]

export default new VueRouter({
    mode: 'history',
    base: '/admin',
    routes
})
