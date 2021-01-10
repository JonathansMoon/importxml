(function ($) {
    $('#formulario').submit(function (e) {
        var files = $('#file')[0].files;
        var exts = ['xml'];
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            if (file) {
                var get_ext = file.name.split('.');
                get_ext = get_ext.reverse();
                if ($.inArray(get_ext[0].toLowerCase(), exts) <= -1) {
                    $(".errors-custom")
                        .append($('<div class="alert alert-danger">The file must be a file of type: xml.</div>'));
                    e.preventDefault();
                    $("#file").focus();
                    return false;
                }
            } else return false;
        }
        return true;
    });
})(jQuery);
