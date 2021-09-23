<template>
    <div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">
                            With supporting text below as a natural lead-in to additional content.
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">
                            With supporting text below as a natural lead-in to additional content.
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["category"],
    data() {
        return {};
    },
    methods:{
        getData(){
            console.log('data');
             axios.get("/api/gethomedata" )
                .then(({data}) => {
                    console.log(data);
                })
                .catch((e) => {
                    console.log(error)
                });
        }
    },
    created(){
        this.getData();
    }
};
</script>