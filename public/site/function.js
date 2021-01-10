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
        server: {
            url: '',
            process: '/register',
            revert: '/register',
            headers: {
                'X-CSRF-TOKEN': $('input[name=_token]').val()
              }
        },
        onerror: (response) => console.log(response.data),
        acceptedFileTypes: [
            'application/doc'
        ]
    });
});
