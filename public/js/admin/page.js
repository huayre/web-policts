function openModalPage()
{
    document.getElementById('form-page').reset();
    let previewImg = document.getElementById('preview_img');
    previewImg.style.display = 'none';
    let btnCreatePage = document.getElementById('btn-create-page');
    btnCreatePage.onclick = function () {
        validateDataPage();
    };
    let btnCreatePageMessage = document.getElementById('btn-create-page-message');
    btnCreatePage.innerText = 'VALIDAR';
    btnCreatePage.style.background = '#03a9f3';
    btnCreatePageMessage.style.display = 'none';
    document.getElementById('modal-page-title').innerText = 'NUEVA IMAGEN'
    $('#modal-page').modal('show');
}

function previewImg()
{
    let img = document.getElementById('url_img');
    let previewImg = document.getElementById('preview_img');
    previewImg.style.display = 'block'
    previewImg.src=window.URL.createObjectURL(img.files[0])
}

function validateDataPage()
{
    let btnCreatePage = document.getElementById('btn-create-page');
    let btnCreatePageMessage = document.getElementById('btn-create-page-message');
    btnCreatePageMessage.style.display = 'block'
    btnCreatePageMessage.disabled = 'true'
    let Img = document.getElementById('url_img').value;

    if (Img == '') {
        btnCreatePageMessage.innerText = 'SELECCIONE UNA IMAGEN';
        btnCreatePageMessage.style.background = 'red';
    }  else {
        btnCreatePageMessage.innerText = 'VALIDACIÓN CORRECTA';
        btnCreatePageMessage.style.background = '#00c292';
        btnCreatePage.innerText = 'GUARDAR'
        btnCreatePage.onclick = function () {
            savePage();
        };
    }
}

function savePage()
{
    let formPage = document.getElementById('form-page');
    let data = new FormData(formPage);
    let btnCreatePage = document.getElementById('btn-create-page');
    btnCreatePage.disabled = 'false';
    btnCreatePage.disabled = 'Creando..'
    $.ajax({
        method: 'POST',
        data: data,
        url: 'page',
        // dataType: 'json',
        processData: false,
        contentType: false,
        success: function (datosServidor) {
            $('#modal-page').modal('hide')
            if (datosServidor.status === true) {
                Swal.fire({
                    title: 'Correcto!',
                    text: 'Imagen subida correctamente..!!',
                    icon: 'success',
                    customClass: 'swal-height'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            } else if (datosServidor.status === false) {
                Swal.fire({
                    title: 'Error!',
                    text: '¡Oh, no! Ocurrió un error, consulte con soporte',
                    icon: 'error',
                    customClass: 'swal-height'
                });
            }
        }
    });
}
function deletePage(id) {
    Swal.fire({
        title: '¿Está seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'si, borralo!',
        cancelButtonText: 'No, cancelar!',
        customClass: 'swal-height'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                method: 'DELETE',
                url: 'page/' + id,
                success: function (datosServidor) {
                    if (datosServidor.status === true) {
                        Swal.fire({
                            title: 'Borrado!',
                            text: 'Imagen borrada correctamente..!!',
                            icon: 'success',
                            customClass: 'swal-height'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        })
                    } else if (datosServidor.status === false) {
                        Swal.fire({
                            title: 'Error!',
                            text: '¡Oh, no! Ocurrió un error, consulte con soporte',
                            icon: 'error',
                            customClass: 'swal-height'
                        });
                    }
                }
            });
        }
    });
}
