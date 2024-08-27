import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import * as glob from "glob";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                ...glob.sync("resources/js/*.js"),
                ...glob.sync("resources/js/**/*.js"),
                ...glob.sync("resources/js/pages/**/*.js"),
                ...glob.sync("resources/scss/*.scss"),
                ...glob.sync("resources/scss/**/*.scss"),
                ...glob.sync("resources/scss/pages/*.scss"),
                ...glob.sync("resources/scss/pages/**/*.scss")
            ],
            refresh: true,
        }),
    ],
});
