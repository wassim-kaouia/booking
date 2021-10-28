<!--responsible of all the bookables that the customers can buy-->
<template>
  <div>
    <bookable-list-item
      :title="bookable1.title"
      :content="bookable1.content"
      :price="1200"
    ></bookable-list-item>
  </div>
</template>


<script>
//Register the component locally
import BookableListItem from "./BookableListItem.vue";
export default {
  data() {
    return {
      bookable1: {
        title: "title 1",
        content: "content 1",
      },
      bookable2: {
        title: "title 2",
        content: "content 2",
      },
    };
  },
  components: {
    //Like this we can set the first property as we want and then we can use it above in kebab or camel case
    BookableListItem: BookableListItem,
  },
  created() {
    console.log(this.bookable1);
    console.log(this.bookable2);
    setTimeout(() => {
      this.bookable1.title = "title changed";
      this.bookable1.content = "content changed";
    }, 5000);
  },
  //set time out to simulate the api request
};
</script>