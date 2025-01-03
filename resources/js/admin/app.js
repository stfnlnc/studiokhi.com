import Alpine from 'alpinejs';

import 'tinymce/tinymce';
import 'tinymce/skins/ui/oxide/skin.min.css';
import 'tinymce/icons/default/icons';
import 'tinymce/themes/silver/theme';
import 'tinymce/models/dom/model';
import 'tinymce/plugins/link';
import 'tinymce/plugins/lists';

window.Alpine = Alpine;

Alpine.start();

window.addEventListener('DOMContentLoaded', () => {
    tinymce.init({
        selector: 'textarea',
        license_key: 'gpl',
        /* TinyMCE configuration options */
        skin: false,
        content_css: false,
        plugins: ['link', 'lists'],
        toolbar: 'undo redo | link | bold italic underline | fontsize styles bullist numlist'
    });
});
