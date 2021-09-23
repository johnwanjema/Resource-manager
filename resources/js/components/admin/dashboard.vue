<template>
    <div class="content" style="padding-top:68px">
        <div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
            <div class="col-6 col-xl-4">
                <router-link class="block block-rounded block-bordered block-link-shadow" to="/admin/pdfs">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-right mt-15 d-none d-sm-block">
                            <i class="fa fa-book fa-2x text-primary-light"></i>
                        </div>
                        <div class="font-size-h3 font-w600 text-primary js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="1500">
                            {{pdfs}}
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">
                            PDFS
                        </div>
                    </div>
                </router-link>
            </div>
            <div class="col-6 col-xl-4">
                <router-link class="block block-rounded block-bordered block-link-shadow" to="/admin/snippets">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-right mt-15 d-none d-sm-block">
                            <i class="fa fa-code fa-2x text-earth-light"></i>
                        </div>
                        <div class="font-size-h3 font-w600 text-earth">{{snippets}}</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">
                            HTML snippet
                        </div>
                    </div>
                </router-link>
            </div>
            <div class="col-6 col-xl-4">
                <router-link class="block block-rounded block-bordered block-link-shadow" to="/admin/links">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-right mt-15 d-none d-sm-block">
                            <i class="fa fa-link fa-2x text-elegance-light"></i>
                        </div>
                        <div class="font-size-h3 font-w600 text-elegance js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="15">
                            15
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">
                            Links
                        </div>
                    </div>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            pdfs:0,
            snippets:0,
            links:0,
        }
    },
    methods:{
        getDashboardData() {
            axios.get("/api/dashboardstats" )
                .then(({data}) => {
                    // console.log(data);
                    this.pdfs = data.data.pdfs;
                    this.snippets = data.data.snippets;
                    this.links = data.data.links;
                })
                .catch((e) => {
                    console.log(error)
                });
        },
    },
    created(){
        this.getDashboardData();
    }
}
</script>
