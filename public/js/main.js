$(document).ready(function () {
    $('.btn-danger').click(function (e) { 
        e.preventDefault();
        let user = $('#user').val();
        let evenement = $('#evenement').val();
        let _token = $('input[type="hidden"]').attr('value');
        $.ajax({
            url: "/JesosyMpamonjy/evenement/"+evenement,
            method: 'post', 
            data: {
                user,
                evenement,
                _token
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
            }
        });
    });
});