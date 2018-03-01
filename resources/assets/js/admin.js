$(document).foundation();

function initTinyMCE(){
    tinymce.init({
        selector : 'textarea.rte',
        branding: 'false',
        plugins : [
            'advlist autolink lists link image charmap preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
        ],
        menubar : '',
        toolbar : 'fullscreen | undo redo | styleselect | forecolor backcolor | bold italic underline | alighleft aligncenter alignright alignjustify | bullist numlist outdent indent | table | link image | code',
        plugin_preview_height: 800,
        plugin_preview_width: 1200,
        convert_urls: false,
        content_css : [
            window.site_css
        ],
        visual: false,
        relative_urls : false,
        visualblocks_default_state: false,
        end_container_on_empty_block: true,
        force_root_block: 'p'
    });
}

initTinyMCE();