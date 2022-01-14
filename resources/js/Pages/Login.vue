<template>
  <LoginLayout />
  <form @submit.prevent="submit">
    <div class="mb-3">
      <label class="form-label" for="card-email">Email address</label>
      <input
        class="form-control"
        v-bind:class="[errors.email ? 'is-invalid' : '']"
        v-model="form.email"
        id="card-email"
        type="email"
      />
      <p
        class="mt-1 mb-0 form-text text-danger font-weight-bold"
        v-if="errors.email"
        v-text="errors.email"
      ></p>
    </div>
    <div class="mb-3">
      <div class="d-flex justify-content-between">
        <label class="form-label" for="card-password">Password</label>
      </div>
      <input
        class="form-control"
        id="card-password"
        v-bind:class="[errors.password ? 'is-invalid' : '']"
        v-model="form.password"
        type="password"
      />
       <p
      class="mt-1 mb-0 form-text text-danger font-weight-bold"
        v-if="errors.password"
        v-text="errors.password"
      ></p>
    </div>
    <div class="mb-3">
      <button
        class="btn btn-primary d-block w-100 mt-3"
        type="submit"
        name="submit"
      >
        Log in
      </button>
    </div>
  </form>
</template>
<script>
import LoginLayout from "../Shared/LoginLayout";
export default {
  layout: LoginLayout,
  data() {
    return {
      form: {
        email: null,
        password: null,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.post("/login", this.form);
    },
  },
  props: {
    errors: Object,
  },
};
</script>