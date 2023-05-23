export default {
    publicDir: false,
    build: {
        outDir: 'public',
        emptyOutDir: false,
        manifest: true,
        modulePreload: false,
        rollupOptions: {
            input: ['./main.js', './main.css']
        }
    }
}
