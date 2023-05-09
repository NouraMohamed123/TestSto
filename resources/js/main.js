$(document).on('change', '.upload-img input', function () {

    let inputVal = window.URL.createObjectURL(this.files[0]);

    $(this).closest('.upload-img').find('img').attr('src', inputVal)

});
