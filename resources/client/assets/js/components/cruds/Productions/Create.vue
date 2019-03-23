<template>
    <section class="content-wrapper" style="min-height: 960px;">
        <section class="content-header">
            <h1>Production</h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <form @submit.prevent="submitForm" novalidate>
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Create</h3>
                            </div>

                            <div class="box-body">
                                <back-buttton></back-buttton>
                            </div>

                            <bootstrap-alert />

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">Title *</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="title"
                                            placeholder="Enter Title *"
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
                                    <label for="start_date">Start date</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="start_date"
                                            placeholder="Enter Start date"
                                            :value="item.start_date"
                                            @input="updateStart_date"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="end_date">End date</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="end_date"
                                            placeholder="Enter End date"
                                            :value="item.end_date"
                                            @input="updateEnd_date"
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
        ...mapGetters('ProductionsSingle', ['item', 'loading'])
    },
    created() {
        // Code ...
    },
    destroyed() {
        this.resetState()
    },
    methods: {
        ...mapActions('ProductionsSingle', ['storeData', 'resetState', 'setTitle', 'setDescription', 'setLink', 'setStart_date', 'setEnd_date']),
        updateTitle(e) {
            this.setTitle(e.target.value)
        },
        updateDescription(e) {
            this.setDescription(e.target.value)
        },
        updateLink(e) {
            this.setLink(e.target.value)
        },
        updateStart_date(e) {
            this.setStart_date(e.target.value)
        },
        updateEnd_date(e) {
            this.setEnd_date(e.target.value)
        },
        submitForm() {
            this.storeData()
                .then(() => {
                    this.$router.push({ name: 'productions.index' })
                    this.$eventHub.$emit('create-success')
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
