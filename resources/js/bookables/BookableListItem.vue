<!--responsible of displaying one object of all the bookable list that the customer can buy-->
<template>
  <div>
    <h1>{{ title }}</h1>
    <p>{{ content }}</p>
    <p>Price {{ price }}</p>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    content: String,
    price: Number,
  },
};
</script>