<template>
    <section>
        <div class="content">
            <h2 class="content-heading"> HTML snippets</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title"><small></small></h3>
                    <button class="btn btn-success" @click="openModal()">
                            Add Snippet
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
                                <b-table responsive striped hover show-empty :items="snippets" :fields="fields" :per-page="perPage" :current-page="currentPage" :filter="filter" :filterIncludedFields="filterOn" @filtered="onFiltered">
                                    <template v-slot:cell(#)="row">
                                                <p>{{row.index + 1}}</p>
                                    </template>

                                    <template v-slot:cell(created_at)="row">
                                        <p>
                                            {{row.item.created_at |filterDateOnly}}</p>
                                    </template>

                                    <template v-slot:cell(actions)="row">
                                        <b-button class="btn btn-sm" variant="primary" @click="openVIewModal(row.item)">
                                            View
                                        </b-button>
                                        <b-button class="btn btn-sm" variant="warning" @click="openEditModal(row.item)">
                                            Edit
                                        </b-button>
                                        <b-button class="btn btn-sm" variant="danger" @click="deleteSnippet(row.item.id)">
                                            Delete
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
                    <form @submit.prevent="editMode ? updateSnippet() : addSnippet()">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 v-if="editMode" class="block-title">Edit Snippet</h3>
                                <h3 v-else class="block-title">Add Snippet</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <form action="be_forms_elements_bootstrap.html" method="post" onsubmit="return false;">
                                    <div class="form-group">
                                        <label for="email">Title</label>
                                        <input v-model="form.title" type="text" class="form-control" id="email" name="email" placeholder="Enter title.." />
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-textarea-input">Description</label>
                                        <div class="col-12">
                                            <textarea v-model="form.description" class="form-control" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="Description .." spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="description">HTML Snippet</label>
                                        <tinymce id="d1" v-model="form.snippet"></tinymce>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-danger" data-dismiss="modal">Close</button>
                            <button v-if="editMode" type="submit" class="btn btn-alt-success">
                                Update Snippet
                            </button>
                            <button v-else type="submit" class="btn btn-alt-success">
                                Add Snippet
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <div class="modal" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="modal-large" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">View Snippet</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p >{{snippet.snippet}}</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-danger" data-dismiss="modal">Close</button>
                    </div>
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
            fields: ['#', { key: 'title', }, { key: 'description', }, 'created_at', { key: 'actions', label: 'Actions' }],
            snippets: [],
            filter: null,
            filterOn: [],
            form: new Form({
                id: '',
                title: '',
                description: '',
                snippet: ''
            }),
            editMode: false,
            snippet: ''
        }
    },
    computed: {
        rows() {
            return this.snippets.length
        }
    },
    methods: {
        openVIewModal(snippet) {
            $('#view-modal').modal('show');
            this.snippet = snippet;
        },
        updateSnippet() {
            this.form.put('/api/snippets/' + this.snippet.id)
                .then(({ data }) => {
                    // console.log(data);
                     toast.fire({
                        icon: "success",
                        title: "Snippet updated successfully"
                    });
                    $('#modal-large').modal('hide');
                    this.form.reset();
                    this.getSnippets();
                });
        },
        openModal() {
            this.editMode = false;
            $('#modal-large').modal('show');
        },
        openEditModal(snippet) {
            this.form.fill(snippet);
            this.editMode = true;
            this.snippet = snippet;
            $('#modal-large').modal('show');
        },
        onFiltered(filteredItems) {
            this.totalRows = filteredItems.length;
            this.currentPage = 1
        },
        getSnippets() {
            axios.get("/api/snippets")
                .then(({ data }) => {
                    // console.log(data);
                    this.snippets = data.data;
                    this.totalRows = this.snippets.length;
                })
                .catch((e) => {
                    console.log(error)
                });
        },
        addSnippet() {
            this.form
                .post("/api/snippets")
                .then(({ data }) => {
                    if (data.success) {
                        toast.fire({
                            icon: "success",
                            title: "Snippet added successfully"
                        });
                        $("#modal-large").modal("hide");
                        this.getSnippets();
                    }
                })
                .catch(() => {});
        },
        deleteSnippet(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then(result => {
                // send request
                if (result.value) {
                    this.form
                        .delete("/api/snippets/" + id)
                        .then(() => {
                            Swal.fire("Deleted!", "Snippet has been deleted.", "success");
                            this.getSnippets();
                        })
                        .catch(() => {
                            Swal.fire("Failed to delete", "Failed",'error');
                        });
                }
            });
        },
    },
    created() {
        this.getSnippets();
    }
}
</script>