<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mywedding</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('bootUser/img/favicon.icon" rel="icon') }}">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <!-- data table -->
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('bootUser/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootUser/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('bootUser/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    @yield('sidebar')

    <!-- Content -->
    @yield('content')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('bootUser/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('bootUser/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('bootUser/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('bootUser/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('bootUser/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('bootUser/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('bootUser/mail/contact.js') }}"></script>

    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('bootUser/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            // membatasi jumlah inputan
            var maxGroup = 10;

            //melakukan proses multiple input
            $(".addMore").click(function() {
                if ($('body').find('.fieldGroup').length < maxGroup) {
                    var fieldHTML = '<div class="form-group fieldGroup">' + $(".fieldGroupCopy").html() +
                        '</div>';
                    $('body').find('.fieldGroup:last').after(fieldHTML);
                } else {
                    alert('Maximal Pemotretan Hanya ' + maxGroup);
                }
            });

            //remove fields group
            $("body").on("click", ".remove", function() {
                $(this).parents(".fieldGroup").remove();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // membatasi jumlah inputan
            var maxGroup = 10;

            //melakukan proses multiple input
            $(".addMore1").click(function() {
                if ($('body').find('.fieldGroup1').length < maxGroup) {
                    var fieldHTML = '<div class="form-group fieldGroup1">' + $(".fieldGroupCopy1").html() +
                        '</div>';
                    $('body').find('.fieldGroup1:last').after(fieldHTML);
                } else {
                    alert('Maximal Pemotretan Hanya ' + maxGroup);
                }
            });

            //remove fields group
            $("body").on("click", ".remove1", function() {
                $(this).parents(".fieldGroup1").remove();
            });
        });
    </script>
    <script>
        CKEDITOR.replace('my-editor');
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>


</body>

</html>
