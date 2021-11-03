<template>
  <div>
    <h6 class="text-uppercase font-weight-bolder text-muted">
      Check Availability
    </h6>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="from">Arrival:</label>
        <input
          v-model="from"
          @keyup.enter="check"
          type="text"
          name="from"
          class="form-control form-control-sm"
          placeholder="start date"
          :class="[{ 'is-invalid': this.errorFor('from') }]"
        />
        <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('from')"
          :key="'from' + index"
        >{{error}}</div>
      </div>
      <div class="form-group col-md-6">
        <label for="to">Departure:</label>
        <input
          v-model="to"
          @keyup.enter="check"
          type="text"
          name="to"
          class="form-control form-control-sm"
          placeholder="end date"
          :class="[{ 'is-invalid': this.errorFor('to') }]"
        />
        <div
          class="invalid-feedback"
          v-for="(error, index) in this.errorFor('to')"
          :key="'to' + index"
        >{{error}}</div>
      </div>
    </div>
    <button
      @click="check"
      class="btn btn-secondary btn-block"
      :disabled="loading"
    >
      Find Bookings
    </button>
  </div>
</template>

<style scoped>
label {
  font-size: 0.7rem;
  color: gray;
  text-transform: uppercase;
  font-weight: bolder;
}
</style>

<script>
export default {
  data() {
    return {
      from: null,
      to: null,
      loading: false,
      availability: null,
      errors: null,
      status: null,
    };
  },
  computed: {
    hasErrors() {
      return this.status == 422 && this.errors != null;
    },
    hasAvailability() {
      return this.status == 200;
    },
    hasNoAvailability() {
      return this.status == 400;
    },
  },
  methods: {
    //here we call endpoints to check about the availability - API Calls using axios
    check() {
      console.log("Fetching Api to bring Availability...");
      this.loading = true;
      this.errors = null;
      axios
        .get(
          "/api/bookables/" +
            this.$route.params.id +
            "/availability?from=" +
            this.from +
            "&to=" +
            this.to
        )
        .then((response) => {
          this.status = response.status;
          console.log(this.status);
        })
        .catch((error) => {
          console.log(error.response.data);
          if (422 == error.response.status) {
            this.errors = error.response.data.errors;
          }
          this.status = error.response.status;
        })
        .then(() => (this.loading = false));
    },
    errorFor(field) {
      return this.hasErrors && this.errors[field] ? this.errors[field] : null;
    },
  },
};
</script>