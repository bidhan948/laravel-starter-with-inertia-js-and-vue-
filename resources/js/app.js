import { createApp, h } from 'vue'
import { createInertiaApp, Head } from '@inertiajs/inertia-vue3';
import Layout from './Shared/Layout';
import { InertiaProgress } from '@inertiajs/progress';

createInertiaApp({
  resolve: async name => {
    let page = (await import(`./Pages/${name}`)).default;
    if (page.layout === undefined) {
      page.layout = Layout;
    }
    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component("Head",Head)
      .mount(el)
  },
});

InertiaProgress.init({
  color: '#29d',
  includeCSS: true,
})