import Vue from "vue";
import Vuex from "vuex";
import createPersistedState from "vuex-persistedstate";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        auth: [],
        errors: [],
        users: [],
        employee: [],
        departments: [],
        directorates: [],
        designations: [],
        programs: [],
        contracts: [],
        roles: [],
        projects: [],
        leaveTypes: [],
        assets: [],
        vendors: [],
        myRequests: [],
        request: [],
        settings: [],
        systemSettings: [],
        leaveStats: [],
        chats: [],
        chat: [],
        subs: [],
        usersCount: ""
    },
    mutations: {
        setAuthUser: (state, data) => {
            state.auth = data;
        },
        setErrors: (state, data) => {
            state.errors = data;
        },
        setUsers: (state, data) => {
            state.users = data;
        },
        setCurrentEmployee: (state, data) => {
            state.employee = data;
        },
        setDepartments: (state, data) => {
            state.departments = data;
        },
        setDirectorates: (state, data) => {
            state.directorates = data;
        },
        setDesignations: (state, data) => {
            state.designations = data;
        },
        setPrograms: (state, data) => {
            state.programs = data;
        },
        setContracts: (state, data) => {
            state.contracts = data;
        },
        setRoles: (state, data) => {
            state.roles = data;
        },
        setSubs: (state, data) => {
            state.subs = data;
        },
        setProjects: (state, data) => {
            state.projects = data;
        },
        setUsersCount: (state, data) => {
            state.usersCount = data;
        },
        setLeaveTypes: (state, data) => {
            state.leaveTypes = data;
        },
        setAssets: (state, data) => {
            state.assets = data;
        },
        setVendors: (state, data) => {
            state.vendors = data;
        },
        setMyRequests: (state, data) => {
            state.myRequests = data;
        },
        setRequest: (state, data) => {
            state.request = data;
        },
        setSettings: (state, data) => {
            state.settings = data;
        },
        setSystemSettings: (state, data) => {
            state.systemSettings = data;
        },
        setLeaveStats: (state, data) => {
            state.leaveStats = data;
        },
        setChats: (state, data) => {
            state.chats = data;
        },
        setChat: (state, data) => {
            state.chat = data;
        },
        setRequestAttachments: (state, data) => {
            state.request.attachments = data;
        },
        setRequestNotes: (state, data) => {
            state.request.notes = data;
        }
    },
    plugins: [
        createPersistedState({
            key: "vuex",
            storage: window.localStorage
        })
    ]
});
