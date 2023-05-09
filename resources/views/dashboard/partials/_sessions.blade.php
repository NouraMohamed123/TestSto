@if(session('success'))

    <script>
        new Noty({
            theme: 'relax',
            type: 'success',
            layout:'topRight',
            text: "{{session('success')}}",
            timeout: 2000,
            killer: true,
        }).show();

    </script>

@endif
