<template>
    <section class="content-wrapper" style="min-height: 960px;">
        <section class="content-header">
            <h1>Receipts</h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <form @submit.prevent="submitForm" novalidate>
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit</h3>
                            </div>

                            <div class="box-body">
                                <back-buttton></back-buttton>
                            </div>

                            <bootstrap-alert />

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="title"
                                            placeholder="Enter Title"
                                            :value="item.title"
                                            @input="updateTitle"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="description"
                                            placeholder="Enter Description"
                                            :value="item.description"
                                            @input="updateDescription"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="technologies">Technologies</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="technologies"
                                            placeholder="Enter Technologies"
                                            :value="item.technologies"
                                            @input="updateTechnologies"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="project_duration">Project duration</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="project_duration"
                                            placeholder="Enter Project duration"
                                            :value="item.project_duration"
                                            @input="updateProject_duration"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="working_hours">Working hours</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="working_hours"
                                            placeholder="Enter Working hours"
                                            :value="item.working_hours"
                                            @input="updateWorking_hours"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="price"
                                            placeholder="Enter Price"
                                            :value="item.price"
                                            @input="updatePrice"
                                            >
                                </div>
                            </div>

                            <div class="box-footer">
                                <vue-button-spinner
                                        class="btn btn-primary btn-sm"
                                        :isLoading="loading"
                                        :disabled="loading"
                                        >
                                    Save
                                </vue-button-spinner>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
</template>


<script>
import { mapGetters, mapActions } from 'vuex'

export default {
    data() {
        return {
            // Code...
        }
    },
    computed: {
        ...mapGetters('ReceiptsSingle', ['item', 'loading']),
    },
    created() {
        this.fetchData(this.$route.params.id)
    },
    destroyed() {
        this.resetState()
    },
    watch: {
        "$route.params.id": function() {
            this.resetState()
            this.fetchData(this.$route.params.id)
        }
    },
    methods: {
        ...mapActions('ReceiptsSingle', ['fetchData', 'updateData', 'resetState', 'setTitle', 'setDescription', 'setTechnologies', 'setProject_duration', 'setWorking_hours', 'setPrice']),
        updateTitle(e) {
            this.setTitle(e.target.value)
        },
        updateDescription(e) {
            this.setDescription(e.target.value)
        },
        updateTechnologies(e) {
            this.setTechnologies(e.target.value)
        },
        updateProject_duration(e) {
            this.setProject_duration(e.target.value)
        },
        updateWorking_hours(e) {
            this.setWorking_hours(e.target.value)
        },
        updatePrice(e) {
            this.setPrice(e.target.value)
        },
        submitForm() {
            this.updateData()
                .then(() => {
                    this.$router.push({ name: 'receipts.index' })
                    this.$eventHub.$emit('update-success')
                })
                .catch((error) => {
                    console.error(error)
                })
        }
    }
}
</script>


<style scoped>

</style>
