$(function () {
    pretrazi();
    sortiraj();
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

function sortiraj() {

    $(document).on('click', '#sortBtn', function () {

        var kolonaSort = $('#selKolona').val();
        var sort = $('#selSort').val();

        $.ajax(
            {
                url: 'sortirajClanove.php',
                method: 'post',
                data: { KolonaSort: kolonaSort, Sort: sort },

                success: function (result) {
                    {
                        $('#prikazBody').html(result);
                    }
                }
            }
        )

    })
}