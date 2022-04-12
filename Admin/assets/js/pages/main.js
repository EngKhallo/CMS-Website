$(document).ready(function() {
    $('.update').on('click', function() {
        $('#edit-home').modal('show');
        var id = $(this).data('id');
    })
})