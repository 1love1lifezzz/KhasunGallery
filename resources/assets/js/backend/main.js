$(function() {
    $('.btn-delete').click(function () {
        var data_id = $(this).data('id');
        bootbox.confirm("Do you want to delete this list?", function (result) {
            if (result == true) {
                $('.form-delete[parent-data-id=' + data_id + ']').submit();
            }
        });
    });
});