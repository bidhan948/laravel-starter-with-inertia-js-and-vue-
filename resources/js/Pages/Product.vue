<template>
  <Head title="Product" />
  <div id="tableExample">
    <div class="row">
      <div class="col-3">
        <input
          class="form-control form-control-sm my-2 ml-1"
          type="text"
          v-model="search"
          placeholder="Search "
          aria-label=".form-control-sm example"
          spellcheck="false"
          data-ms-editor="true"
          style="margin-left: 10px"
        />
      </div>
    </div>
    <div class="table-responsive scrollbar">
      <table class="table table-bordered table-striped fs--1 mb-0">
        <thead class="bg-200 text-900">
          <tr>
            <th>
              <span class="px-2"> Sn </span
              ><span class="fas fa-arrow-down"></span>
            </th>
            <th>
              <span class="px-2"> Post </span
              ><span class="fas fa-arrow-down"></span>
            </th>
            <th>
              <span class="px-2"> Likes </span
              ><span class="fas fa-arrow-down"></span>
            </th>
          </tr>
        </thead>
        <tbody class="list">
          <tr v-for="(product, key) in products.data" :key="product.id">
            <td class="name">{{ key + 1 }}</td>
            <td class="email">{{ product.post }}</td>
            <td class="age">{{ product.like }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-12">
      <Pagination :links="products.links" class="py-2" />
    </div>
  </div>
</template>

<script setup>
import { Inertia } from "@inertiajs/inertia";
import { ref } from "@vue/reactivity";
import { watch } from "@vue/runtime-core";
import Pagination from "../Shared/Pagination";
import throttle from "lodash/throttle";

let search = ref(props.filters.search);
let props = defineProps({
  products: Object,
  filters: Object,
});
watch(
  search,
  throttle(function (value) {
    Inertia.get(
      "/product",
      { search: value },
      { preserveState: true, replace: true }
    );
  }, 500)
);
</script>
