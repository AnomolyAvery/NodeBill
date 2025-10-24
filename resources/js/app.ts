import Alpine from "alpinejs";
import "./bootstrap.js";

window.addEventListener("alpine:init", () => {
    console.info("Alpine.js initialized");
});

Alpine.start();
