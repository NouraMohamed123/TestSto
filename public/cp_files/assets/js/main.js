$(function() {

    $(".datepickr").flatpickr();

    // The DOM elements you wish to replace with Tagify
    var input1 = document.querySelector("#kt_tagify_1");
    var input2 = document.querySelector("#kt_tagify_2");

    // Initialize Tagify components on the above inputs
    new Tagify(input1);
    new Tagify(input2);    

    $(".datepickrTime").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });

    $('.repeater').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function () {
            $(this).slideDown();
        },

        hide: function (deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });

    // Uploade Image
    // upload-img

    $(document).on('change', '.upload-img input', function () {

        let inputVal = window.URL.createObjectURL(this.files[0]);

        $(this).closest('.upload-img').find('img').attr('src', inputVal)

    });


});
