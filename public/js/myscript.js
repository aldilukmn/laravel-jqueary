$(document).ready(function() {
    show();
})

const show = () => {
    $.get(showUrl, {}, function(data, status) {
        $('#show').html(data);
    })
} 

const create = () => {
    $.get(createUrl, {},
        function(data, status) {
            $('#exampleModalLabel').html('Add Product');
            $('#page').html(data);
            $('#exampleModal').modal('show');
        });
};

const store = () => {
    let name = $('#name').val();
    $.ajax({
        type: 'get',
        url: storeUrl,
        data: `name=${name}`,
        success: function (data) {
            $('.btn-close').click();
        }
    })
}