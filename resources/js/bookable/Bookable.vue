<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div v-if="loading">
          <h1>Loading Bookable ...</h1>
        </div>
        <div v-else>
          <h3>{{ bookable.title }}</h3>
          <p>{{ bookable.description }}</p>
        </div>
      </div>
      <div class="col-md-4">
          <availability></availability>
      </div>
    </div>
  </div>
</template>

<script>
import Availability from './Availability.vue';
export default {
  components: { Availability },
  data() {
    return {
      bookable: null,
      loading: false,
    };
  },
  created() {
    console.log("start fetching one bookable by ID");
    this.loading = true;
    const req = axios
      .get("/api/bookables/" + this.$route.params.id)
      .then((response) => {
        this.bookable = response.data;
        this.loading = false;
      });
  },
};
</script>