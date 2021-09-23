<template>
    <section>
        <div class="content">
            <h2 class="content-heading">Links</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title"><small></small></h3>
                    <button class="btn btn-success" @click="openModal()">
                            Add Links
                        </button>
                </div>
                <div class="block-content block-content-full">
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="DataTables_Table_1_length">
                                    <label>
                                            Show
                                            <select v-model="perPage" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="5">5</option>
                                                <option value="8">8</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                            </select>
                                            entries
                                        </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="DataTables_Table_1_filter" class="dataTables_filter">
                                    <label>Search:<input v-model="filter" type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_1" /></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <b-table responsive striped hover show-empty :items="links" :fields="fields" :per-page="perPage" :current-page="currentPage" :filter="filter" :filterIncludedFields="filterOn" @filtered="onFiltered">
                                    <template v-slot:cell(#)="row">
                                            <p>{{row.index + 1}}</p>
                                    </template>

                                     <template v-slot:cell(created_at)="row">
                                        <p>{{row.item.created_at |filterDateOnly}}</p>
                                    </template>
                                    <template v-slot:cell(actions)="row">
                                        <b-button class="btn btn-sm" variant="primary" @click="openVIewModal(row.item)">
                                            View
                                        </b-button>
                                        <b-button class="btn btn-sm" variant="warning" @click="openEditModal(row.item)">
                                            Edit
                                        </b-button>
                                    </template>
                                </b-table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <!-- <div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 8 of 20 entries</div> -->
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate">
                                    <b-pagination v-model="currentPage" :total-rows="rows" :per-page="perPage" aria-controls="my-table"></b-pagination>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-large" tabindex="-1" role="dialog" aria-labelledby="modal-large" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form @submit.prevent="addLink">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 v-if="editMode" class="block-title">Edit Link</h3>
                                <h3 v-else class="block-title">Add Link</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                    <div class="form-group">
                                        <label for="email">Title</label>
                                        <input required v-model="form.title" type="text" class="form-control" id="title" name="title" placeholder="Enter title.." />
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Link</label>
                                        <input required v-model="form.link" type="text" class="form-control" id="link" name="link" placeholder="Enter link.." />
                                    </div>
                                   <div class="form-group row">
                                        <label class="col-12"></label>
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                            <input required v-model="form.open_in_new_tab" class="custom-control-input" type="checkbox" name="example-inline-checkbox1" id="example-inline-checkbox1" value="option1" checked="">
                                            <label class="custom-control-label" for="example-inline-checkbox1">Open in a new tab</label>
                                            </div>
                                            
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-danger" data-dismiss="modal">Close</button>
                            <button v-if="editMode" type="submit" class="btn btn-alt-success">
                                Update Link
                            </button>
                            <button v-else type="submit" class="btn btn-alt-success">
                                Add Link
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>


<script>
export default {
    data() {
        return {
            currentPage: 1,
            perPage: 5,
            fields: ['#', { key: 'title', }, 'created_at', { key: 'actions', label: 'Actions' }],
            links: [],
            filter: null,
            filterOn: [],
            form: new Form({
                id: '',
                title: '',
                link: '',
                open_in_new_tab: ''
            }),
            editMode: false
        }
    },
    computed: {
        rows() {
            return this.links.length
        }
    },
    methods: {
        openVIewModal(link) {
            $('#modal').modal('show');
            this.form.fill(link)
        },
        updateLink() {

        },
        openModal() {
            this.editMode = false;
            $('#modal-large').modal('show');
        },
        openEditModal() {
            this.editMode = true;
            $('#modal-large').modal('show');
        },
        onFiltered(filteredItems) {
            this.totalRows = filteredItems.length;
            this.currentPage = 1
        },
        addLink() {
            this.form
                .post("/api/links")
                .then(({ data }) => {
                    if (data.success) {
                        toast.fire({
                            icon: "success",
                            title: "Link added successfully"
                        });
                        $("#modal-large").modal("hide");
                        this.getLinks();
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getLinks() {
            axios.get("/api/links" )
                .then(({data}) => {
                    // console.log(data);
                    this.links = data.data;
                    this.totalRows = this.links.length;
                })
                .catch((e) => {
                    console.log(error)
                });
        }
    },
    created() {
        this.getLinks();
    }
}
</script>