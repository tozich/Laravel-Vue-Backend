<template>
    <section class="content-wrapper" style="min-height: 960px;">
        <section class="content-header">
            <h1>Tasks</h1>
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
                                    <label for="project">Project</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="project"
                                            placeholder="Enter Project"
                                            :value="item.project"
                                            @input="updateProject"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="link"
                                            placeholder="Enter Link"
                                            :value="item.link"
                                            @input="updateLink"
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
                                    <label for="time_needed">Time needed</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="time_needed"
                                            placeholder="Enter Time needed"
                                            :value="item.time_needed"
                                            @input="updateTime_needed"
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
        ...mapGetters('TasksSingle', ['item', 'loading']),
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
        ...mapActions('TasksSingle', ['fetchData', 'updateData', 'resetState', 'setTitle', 'setProject', 'setLink', 'setDescription', 'setTime_needed']),
        updateTitle(e) {
            this.setTitle(e.target.value)
        },
        updateProject(e) {
            this.setProject(e.target.value)
        },
        updateLink(e) {
            this.setLink(e.target.value)
        },
        updateDescription(e) {
            this.setDescription(e.target.value)
        },
        updateTime_needed(e) {
            this.setTime_needed(e.target.value)
        },
        submitForm() {
            this.updateData()
                .then(() => {
                    this.$router.push({ name: 'tasks.index' })
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
