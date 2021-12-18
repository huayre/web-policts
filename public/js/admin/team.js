
function openModalTeam()
{
    document.getElementById('form-team').reset();
    let btnCreateTeam = document.getElementById('btn-create-team');
    btnCreateTeam.onclick = function () {
        validateDataTeam();
    };
    let btnCreateTeamMessage = document.getElementById('btn-create-team-message');
    btnCreateTeam.innerText = 'VALIDAR';
    btnCreateTeam.style.background = '#03a9f3';
    btnCreateTeamMessage.style.display = 'none';
    document.getElementById('modal-team-title').innerText = 'NUEVO INTEGRANTE'
    $('#modal-team').modal('show')
}

function validateDataTeam()
{
    let btnCreateTeam = document.getElementById('btn-create-team');
    let btnCreateTeamMessage = document.getElementById('btn-create-team-message');
    btnCreateTeamMessage.style.display = 'block'
    btnCreateTeamMessage.disabled = 'true'
    let fullName = document.getElementById('full_name').value;
    let description = document.getElementById('description').value;
    let urlCv = document.getElementById('url_cv').value;
    let urlPhoto = document.getElementById('url_photo').value;

    if (fullName == '') {
        btnCreateTeamMessage.innerText = 'INGRESE EL NOMBRE';
        btnCreateTeamMessage.style.background = 'red';
    } else if (description == '') {
        btnCreateTeamMessage.innerText = 'INGRESE LA DESCRIPCIÓN';
        btnCreateTeamMessage.style.background = 'red';
    } else if (urlCv == '') {
        btnCreateTeamMessage.innerText = 'INGRESE LA HOJA DE VIDA';
        btnCreateTeamMessage.style.background = 'red';
    } else if (urlPhoto == '') {
        btnCreateTeamMessage.innerText = 'INGRESE LA FOTO';
        btnCreateTeamMessage.style.background = 'red';
    } else {
        btnCreateTeamMessage.innerText = 'VALIDACIÓN CORRECTA';
        btnCreateTeamMessage.style.background = '#00c292';
        btnCreateTeam.innerText = 'GUARDAR'
        btnCreateTeam.onclick = function () {
            saveTeam();
        };
    }
}

function saveTeam()
{
    let formTeam = document.getElementById('form-team');
    let data = new FormData(formTeam);
    let btnCreateTeam = document.getElementById('btn-create-team');
    btnCreateTeam.disabled = 'false'
    btnCreateTeam.disabled = 'Creando..'
    $.ajax({
        method: 'POST',
        data: data,
        url: 'team',
        // dataType: 'json',
        processData: false,
        contentType: false,
        success: function (datosServidor) {
            $('#modal-team').modal('hide')
            if (datosServidor.status === true) {
                Swal.fire({
                    title: 'Correcto!',
                    text: 'El integrante fue registrado correctamente..!!',
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
                })
            }
        }
    })
}
