// https://nuxt.com/docs/api/configuration/nuxt-config
import { resolve } from "path";
export default defineNuxtConfig({
    devtools: { enabled: true },
    alias: {
        "@": resolve(__dirname, "/"),
    },
    css: [
        "~/assets/css/bootstrap.css",
        "~/assets/css/style.css",
        "~/assets/css/responsive.css"
    ],
    modules: ['nuxt-swiper',"@formkit/nuxt"],
    formkit: {
        configFile: './formkit.config.ts',
      },
  
});
