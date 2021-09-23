<template>
    <div>
        <div class="row">
            <div v-for="(item , i ) in items" :key="i" class="col-md-6" style="padding-bottom:25px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{item.title}}</h5>
                        <p class="card-text">
                            {{item.description}}
                        </p>
                        <a v-if="item.storageLink" style="float:right" href="#" class="btn btn-primary">PDF</a>
                        <a v-if="item.snippet" style="float:right" href="#" class="btn btn-primary">HTml</a>
                        <a v-if="item.link" style="float:right" href="#" class="btn btn-primary">Link</a>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</template>

<script>
export default {
    props: ["category"],
    data() {
        return {
            items: [],
            pdfs: [],
            snippets: [],
            links: [],
        };
    },
    watch: {
        category: function(val) {
            this.getData();
        },
    },
    methods: {
        getData() {
            axios.get("/api/gethomedata")
                .then(({ data }) => {
                    if (this.category == 'pdfs') {
                        this.items = data.data.pdfs;
                    } else if (this.category == 'htmlsnippets') {
                        this.items = data.data.snippets;
                    } else {
                        this.items = data.data.links;
                    }
                })
                .catch((e) => {
                    console.log(error)
                });
        }
    },
    created() {
        this.getData();
    }
};
</script>