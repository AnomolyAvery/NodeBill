import axios from "axios";
import type Alpine from "alpinejs";

declare global {
    interface Window {
        axios: typeof axios;
        Alpine: typeof Alpine;
    }
}

export {};
