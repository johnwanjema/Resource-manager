<template>
    <section>
        <div class="content">
            <h2 class="content-heading">PDFs</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title"><small></small></h3>
                    <button class="btn btn-success" @click="openModal()">
                            Add PDF
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
                                <b-table responsive striped hover show-empty :items="pdfs" :fields="fields" :per-page="perPage" :current-page="currentPage" :filter="filter" :filterIncludedFields="filterOn" @filtered="onFiltered">
                                    <template v-slot:cell(#)="row">
                                            <p>{{row.index + 1}}</p>
                                    </template>
                                    <template v-slot:cell(created_at)="row">
                                        <p>{{row.item.created_at |filterDateOnly}}</p>
                                    </template>
                                    <template v-slot:cell(image)="row">
                                        <img :src="'/pdfPictures/'+ row.item.imageUrl" alt="" class="img-avatar">
                                    </template>

                                    <template v-slot:cell(actions)="row">
                                        <a class="btn btn-primary btn-sm"  :href="'/PDF/'+ row.item.storageLink" target="_blank">
                                            View
                                        </a>
                                        <b-button class="btn btn-sm" variant="warning" @click="openEditModal(row.item)">
                                            Edit
                                        </b-button>
                                        <b-button class="btn btn-sm" variant="danger" @click="deletePDF(row.item.id)">
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
                    <form @submit.prevent="editMode ? updatePDf() : addpdf()">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 v-if="editMode" class="block-title">Edit PDF</h3>
                                <h3 v-else class="block-title">Add PDF</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="form-group">
                                    <label for="email">Title</label>
                                    <input required v-model="form.title" type="text" class="form-control" id="email" name="email" placeholder="Enter title.." />
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="textarea-input">Description</label>
                                    <div class="col-12">
                                        <textarea v-model="form.description" class="form-control" id="textarea-input" name="textarea-input" rows="4" placeholder="Description .." spellcheck="false"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="file-input">Image</label>
                                    <div class="col-12">
                                        <input required  @change="selectImage" type="file" id="image-input" name="file-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="file-input">File Upload</label>
                                    <div class="col-12">
                                        <input required  @change="selectPdf" type="file" id="file-input" name="file-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-danger" data-dismiss="modal">Close</button>
                            <button v-if="editMode" type="submit" class="btn btn-alt-success">
                                Update PDF
                            </button>
                            <button v-else type="submit" class="btn btn-alt-success">
                                Add PDF
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
            fields: ['#','image', { key: 'title', }, { key: 'description', }, 'created_at', { key: 'actions', label: 'Actions' }],
            pdfs: [],
            filter: null,
            filterOn: [],
            form: new Form({
                id:'',
                title:'',
                description:'',
                pdf: '',
                image:''
            }),
            editMode: false,
            pdf:{}
        }
    },
    computed: {
        rows() {
            return this.pdfs.length
        }
    },
    methods: {
        updatePDf() {
            let data = new FormData();
            data.append('title', this.form.title);
            data.append('description', this.form.description);
            data.append('pdf', this.form.pdf);

            axios.post("/api/updatepdf/" + this.pdf.id , data, {
                headers: {
                    'accept': 'application/json',
                    'Accept-Language': 'en-US,en;q=0.8',
                    'Content-Type': 'multipart/form-data',
                }
            }).then(({ data }) => {
                if (data.success) {
                    $('#modal-large').modal('hide');
                    this.form.reset();
                    document.getElementById("file-input").value = "";
                    toast.fire({
                        icon: "success",
                        title: "PDF updated successfully"
                    });
                    this.getPdfs();
                }
            });
        },
        selectPdf(event) {
            this.form.pdf = event.target.files[0];
        },
        openModal() {
            this.form.reset()
            this.editMode = false;
            $('#modal-large').modal('show');
        },
        openEditModal(pdf) {
            this.editMode = true;
            this.pdf = pdf
            $('#modal-large').modal('show');
            this.form.fill(pdf);
            // document.getElementById("file-input").value = pdf.storageLink;
        },
        onFiltered(filteredItems) {
            this.totalRows = filteredItems.length;
            this.currentPage = 1
        },
        getPdfs() {
            axios.get("/api/pdfs" )
                .then(({data}) => {
                    // console.log(data);
                    this.pdfs = data.data;
                    this.totalRows = this.pdfs.length;
                })
                .catch((e) => {
                    console.log(error)
                });
        },
        addpdf() {
            let data = new FormData();
            data.append('title', this.form.title);
            data.append('description', this.form.description);
            data.append('pdf', this.form.pdf);
            data.append('image', this.form.image);

            axios.post("/api/pdfs", data, {
                headers: {
                    'accept': 'application/json',
                    'Accept-Language': 'en-US,en;q=0.8',
                    'Content-Type': 'multipart/form-data',
                }
            }).then(({ data }) => {
                if (data.success) {
                    $('#modal-large').modal('hide');
                    this.form.reset();
                    document.getElementById("file-input").value = "";
                    toast.fire({
                        icon: "success",
                        title: "PDF added successfully"
                    });
                    this.getPdfs();
                }
            });
        },
        deletePDF(id) {
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
                        .delete("/api/pdfs/" + id)
                        .then(() => {
                            Swal.fire("Deleted!", "PDF has been deleted.", "success");
                            this.getPdfs();
                        })
                        .catch(() => {
                            Swal.fire("Failed to delete", "Failed",'error');
                        });
                }
            });
        },
        selectImage(event){
            this.form.image = event.target.files[0];
        }
    },
    created() {
        this.getPdfs();
    }
}
</script>