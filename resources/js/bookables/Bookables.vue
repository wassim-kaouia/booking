<!--responsible of all the bookables that the customers can buy-->
<template>
  <div class="container">
    <div class="row" v-if="loading">
      <h5>Loading Bookings ...</h5>
    </div>
    <div v-else>
       <div class="row">
      <div v-for="(bookable,index) in bookables" :key="'bookable'+index" class="col-md-4 p-2 d-flex align-items-stretch">
         <bookable-list-item
            :title="bookable.title"
            :content="bookable.description"
            :price="1200"
          ></bookable-list-item>
      </div>
    </div>
    </div>
  </div>
</template>

<script>
//Register the component locally
import BookableListItem from "./BookableListItem.vue";
export default {
  data() {
    return {
      loading: false,
      bookables: null,
    };
  },
  components: {
    //Like this we can set the first property as we want and then we can use it above in kebab or camel case
    BookableListItem: BookableListItem,
  },
  created() {
    this.loading = true;
    console.log('Start Api Fetching ...');
    const request = axios.get('/api/bookables').then(response => {
       this.bookables = response.data;
       this.loading = false;
    });
    console.log(request);
    
  },
  //set time out to simulate the api request
};
</script>