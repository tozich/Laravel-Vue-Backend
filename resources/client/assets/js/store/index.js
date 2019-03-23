import Vue from 'vue'
import Vuex from 'vuex'
import Alert from './modules/alert'
import ChangePassword from './modules/change_password'
import Rules from './modules/rules'
import PermissionsIndex from './modules/Permissions'
import PermissionsSingle from './modules/Permissions/single'
import RolesIndex from './modules/Roles'
import RolesSingle from './modules/Roles/single'
import UsersIndex from './modules/Users'
import UsersSingle from './modules/Users/single'
import DevelopmentsIndex from './modules/Developments'
import DevelopmentsSingle from './modules/Developments/single'
import ProductionsIndex from './modules/Productions'
import ProductionsSingle from './modules/Productions/single'
import ReceiptsIndex from './modules/Receipts'
import ReceiptsSingle from './modules/Receipts/single'
import TasksIndex from './modules/Tasks'
import TasksSingle from './modules/Tasks/single'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
    modules: {
        Alert,
        ChangePassword,
        Rules,
        PermissionsIndex,
        PermissionsSingle,
        RolesIndex,
        RolesSingle,
        UsersIndex,
        UsersSingle,
        DevelopmentsIndex,
        DevelopmentsSingle,
        ProductionsIndex,
        ProductionsSingle,
        ReceiptsIndex,
        ReceiptsSingle,
        TasksIndex,
        TasksSingle,
    },
    strict: debug,
})
