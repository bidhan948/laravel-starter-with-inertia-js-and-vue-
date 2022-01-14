<template>
  <Component
    :is="link.url ? 'Link' : 'span'"
    v-for="(link, index) in links"
    :key="index"
    v-html="link.label"
    class="px-2 text-sm"
    :href="link.url"
    preserve-scroll
  />
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: { Link },
  props: { links: Array },
};
</script>
<style>
a{
    font-size: 0.9rem !important;
}
span{
    font-size: 0.9rem !important;
}
</style>