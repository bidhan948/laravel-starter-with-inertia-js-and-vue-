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
              <span class="px-2"> Sn <Orderby @click="orderBy('id')" /> </span>
            </th>
            <th>
              <span class="px-2"> Post </span
              ><Orderby @click="orderBy('post')" />
            </th>
            <th>
              <span class="px-2"> Likes </span
              ><Orderby @click="orderBy('like')" />
            </th>
          </tr>
        </thead>
        <tbody class="list">
          <tr v-for="(product, key) in products.data" :key="product.id">
            <td class="name">{{ sn++ }}</td>
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
import { ref } from "vue";
import { reactive, watch } from "@vue/runtime-core";
import Pagination from "../Shared/Pagination";
import Orderby from "../Shared/Orderby";
import throttle from "lodash/throttle";

let search = ref(props.filters.search);

let props = defineProps({
  products: Object,
  filters: Object,
});
let sn = reactive(props.products.from);

let orderBy = (param) => {
  sn = 1;
  console.log(sn);
  Inertia.get("/product", { orderBy: param }, { replace: true });
};

watch(
  search,
  throttle(function (value) {
    Inertia.get("/product", { search: value }, { replace: true });
  }, 500)
);
</script>
