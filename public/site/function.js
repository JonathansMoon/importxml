$(function(){
    const inputElement = document.querySelector('input[type="file"]');
    const pond = FilePond.create(
        inputElement,
        {
            labelIdle: 'Drag & Drop your files XML <span class="filepond--label-action"> Browse </span>',
            acceptedFileTypes: ['image/png']
        }
    );


    FilePond.setOptions({
        server: 'test/',
        acceptedFileTypes: [
            'application/doc'
        ]
    });
});
