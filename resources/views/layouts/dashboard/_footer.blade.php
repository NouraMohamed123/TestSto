





</div>
</div>
</div>


 <!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{  asset('cp_files/assets/plugins/global/plugins.bundle.js')  }}"></script>
<script src="{{  asset('cp_files/assets/js/scripts.bundle.js')  }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{  asset('cp_files/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')  }}"></script>
<script src="{{  asset('cp_files/assets/plugins/custom/datatables/datatables.bundle.js')  }}"></script>
<script src="{{  asset('cp_files/assets/plugins/custom/formrepeater/formrepeater.bundle.js')  }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{  asset('cp_files/assets/js/widgets.bundle.js')  }}"></script>
<script src="{{  asset('cp_files/assets/js/custom/widgets.js')  }}"></script>
<script src="{{  asset('cp_files/assets/js/custom/apps/chat/chat.js')  }}"></script>
<script src="{{  asset('cp_files/assets/js/custom/utilities/modals/users-search.js')  }}"></script>

<script src="{{  asset('cp_files/assets/js/main.js')  }}"></script>
{{--<script src="{{  asset('cp_files/assets/js/reapter.js')  }}"></script>--}}
@stack('js')
<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.delete', function (e){

            let $this = $(this);
            let n = new Noty({
                theme: 'relax',
                text: 'هل انت متأكد من عملية الحذف؟',
                killer: true,
                buttons: [
                    Noty.button('نعم', 'btn btn-success me-3 btn-sm', function () {
                        $this.closest('form').submit();
                    }),
                    Noty.button('لا', 'btn btn-danger btn-sm', function () {
                        n.close();
                    }),
                ],

            });

            n.show();

            e.preventDefault();
        });

    });
</script>
</html>
</body>
