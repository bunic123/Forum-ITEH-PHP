$(function () {
    pretrazi();
});

function pretrazi() {

    $(document).on('click', '#pretraziBtn', function () {

        var pretrazi = $('#txtPretraga').val();

        $.ajax(
            {
                url: 'pretraziClanove.php',
                method: 'post',
                data: { Pretrazi: pretrazi },

                success: function (result) {
                    {
                        $('#prikazBody').html(result);
                    }
                }
            }
        )
    })
}
