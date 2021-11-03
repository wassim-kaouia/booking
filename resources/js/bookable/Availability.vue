<template>
    <div>
        <h6 class="text-uppercase font-weight-bolder text-muted">Check Availability</h6>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="from">Arrival:</label>
                <input v-model="from" @keyup.enter="check" type="text" name="from" class="form-control form-control-sm" placeholder="start date">
            </div>
            <div class="form-group col-md-6">
                <label for="to">Departure:</label>
                <input v-model="to" @keyup.enter="check" type="text" name="to" class="form-control form-control-sm" placeholder="end date">
            </div>
        </div>
        <button @click="check" class="btn btn-secondary btn-block">Find Bookings</button>
    </div>
</template>

<style scoped>
    label {
        font-size:  0.7rem;
        color:gray;
        text-transform: uppercase;
        font-weight: bolder;
    }
</style>

<script>
export default {
    data(){
        return {
            from:null,
            to:null,
        }
    },
    methods:{
        //here we call endpoints to check about the availability - API Calls using axios
        check(){
            
            console.log('heho');
        }
    },
}
</script>