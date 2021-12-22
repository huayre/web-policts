let editor;
$(document).ready(function () {
    ClassicEditor.create(document.querySelector('#notice'))
        .then( newEditor => {
            editor = newEditor;
        } )
        .catch( error => {
            console.error( error );
        } );
    let btnCreateNotice = document.getElementById('btn-create-notice');
    btnCreateNotice.onclick = function () {
        validateDataNotice();
    };
    let btnCreateNoticeMessage = document.getElementById('btn-create-notice-message');
    btnCreateNotice.innerText = 'VALIDAR';
    btnCreateNotice.style.background = '#03a9f3';
    btnCreateNoticeMessage.style.display = 'none';
});

function validateDataNotice() {
    let btnCreateNotice = document.getElementById('btn-create-notice');
    let btnCreateNoticeMessage = document.getElementById('btn-create-notice-message');
    btnCreateNoticeMessage.style.display = 'block'
    btnCreateNoticeMessage.disabled = 'true'
    let title = document.getElementById('title').value;
    let extract = document.getElementById('extract').value;
    let img_notice = document.getElementById('img_notice').value;
    const editorData = editor.getData();

    if (title == '') {
        btnCreateNoticeMessage.innerText = 'INGRESE EL TITULO';
        btnCreateNoticeMessage.style.background = 'red';
    } else if (extract.trim().length == 0) {
        btnCreateNoticeMessage.innerText = 'INGRESE LA DESCRIPCIÓN';
        btnCreateNoticeMessage.style.background = 'red';
    } else if (img_notice == '') {
        btnCreateNoticeMessage.innerText = 'INGRESE LA IMAGEN';
        btnCreateNoticeMessage.style.background = 'red';
    } else if (editorData == '') {
        btnCreateNoticeMessage.innerText = 'INGRESE EL CONTENIDO';
        btnCreateNoticeMessage.style.background = 'red';
    } else {
        btnCreateNoticeMessage.innerText = 'VALIDACIÓN CORRECTA';
        btnCreateNoticeMessage.style.background = '#00c292';
        btnCreateNotice.innerText = 'GUARDAR'
        btnCreateNotice.onclick = function () {
            saveNotice();
        };
    }
}

function saveNotice()
{
    let formNotice = document.getElementById('form-notice');
    const editorData = editor.getData();
    let data = new FormData(formNotice);
    data.append('notice', editorData);
    let btnCreateNotice = document.getElementById('btn-create-notice');
    btnCreateNotice.disabled = 'false'
    btnCreateNotice.disabled = 'Creando..'
    $.ajax({
        method: 'POST',
        data: data,
        url: '/notice',
        // dataType: 'json',
        processData: false,
        contentType: false,
        success: function (datosServidor) {
            console.log(datosServidor)
            if (datosServidor.status === true) {
                Swal.fire({
                    title: 'Correcto!',
                    text: 'La noticia fue registrado correctamente..!!',
                    icon: 'success',
                    customClass: 'swal-height'
                }).then((result) => {
                    if (result.isConfirmed) {
                        history.back()
                    }
                })
            } else if (datosServidor.status === false) {
                Swal.fire({
                    title: 'Error!',
                    text: '¡Oh, no! Ocurrió un error, consulte con soporte',
                    icon: 'error',
                    customClass: 'swal-height'
                })
            }
        }
    })
}
