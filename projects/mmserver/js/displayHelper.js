/**
 * Created by gonzal99 on 7/22/2015.
 */
$(document).ready(function () {
    $('#yes').on('click', function () {
        $('#question').hide('slow');
        $('#reg').show('slow');
    });
});
$(document).ready(function () {
    $('#no').on('click', function () {
        $('#question').hide('slow');
        $('#nreg').show('slow');
    });
});