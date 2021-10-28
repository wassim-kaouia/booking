<!--responsible of all the bookables that the customers can buy-->
<template>
  <div>
    <bookable-list-item
      title="Vila zwina"
      content="vila zwina bzaaaf juste khass wa9t bach nchriha"
      :price="1200"
    ></bookable-list-item>
  </div>
</template>


<script>
//Register the component locally
import BookableListItem from "./BookableListItem.vue";
export default {
  components: {
    //Like this we can set the first property as we want and then we can use it above in kebab or camel case
    BookableListItem: BookableListItem,
  },
};
</script>