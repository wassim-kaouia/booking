<!--responsible of all the bookables that the customers can buy-->
<template>
  <div class="container">
    <div class="row" v-if="loading">
      <h5>Loading Bookings ...</h5>
    </div>
    <div v-else>
       <div class="row">
      <div v-for="(bookable,index) in bookables" :key="'bookable'+index" class="col-md-4 p-2">
         <bookable-list-item
            :title="bookable.title"
            :content="bookable.content"
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
    console.log(this.bookable1);
    setTimeout(() => {
      this.bookables = [
        {
          title: "title changed1",
          content: "content changed",
        },
        {
          title: "title changed2",
          content: "content changed",
        },
        {
          title: "title change3d",
          content: "content changed",
        },
        {
          title: "title changed4",
          content: "content changed",
        },
        {
          title: "title changed1",
          content: "content changed",
        },
        {
          title: "title changed2",
          content: "content changed",
        },
        {
          title: "title change3d",
          content: "content changed",
        },
        {
          title: "title changed4",
          content: "content changed",
        },
      ];
      this.loading = false;
    }, 3000);
    this.loading = true;
  },
  //set time out to simulate the api request
};
</script>