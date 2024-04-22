import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
// import laravel from 'laravel-vite-plugin';



// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue(),
    /*
    laravel({
      input: ["resources/css/app.css", "resources/js/app.js"],
      refresh: true,
    }),

    */
  ],
  resolve: {
    alias: {
      vue: "vue/dist/vue.esm-bundler.js",
    },
  },
});
