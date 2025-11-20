import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resources/css/estilos.css','resources/css/estilosFormulario','resources/css/estilosHome.css','resources/css/estilosNavBar.css'],
            refresh: true,
        }),
    ],
});
