<!--responsible of all the bookables that the customers can buy-->
<template>
  <div>
    <bookable-list-item
      v-if="bookable1 != null"
      :title="bookable1.title"
      :content="bookable1.content"
      :price="1200"
    ></bookable-list-item>
    <div v-else>
        <h2>nothing to show</h2>
    </div>
  </div>
</template>


<script>
//Register the component locally
import BookableListItem from "./BookableListItem.vue";
export default {
  data() {
    return {
      bookable1: null,
    };
  },
  components: {
    //Like this we can set the first property as we want and then we can use it above in kebab or camel case
    BookableListItem: BookableListItem,
  },
  created() {
    console.log(this.bookable1);
    setTimeout(() => {
      this.bookable1 = {
           title : "title changed",
           content : "content changed",
      };
    }, 5000);
  },
  //set time out to simulate the api request
};
</script>