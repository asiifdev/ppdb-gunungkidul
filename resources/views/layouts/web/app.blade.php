<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registrasi SMK Ma`arif Gunung Kidul</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo_smk.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') . '?version=' . version() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') . '?version=' . version() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.css') . '?version=' . version() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') . '?version=' . version() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors/switch.css') . '?version=' . version() }}">
    <!-- Color Alternatives -->
    {{-- <link href="{{ asset('assets/css/colors/color-2.css') . '?version=' . version() }}" rel="alternate stylesheet"
        type="text/css" title="color-2">
    <link href="{{ asset('assets/css/colors/color-3.css') . '?version=' . version() }}" rel="alternate stylesheet"
        type="text/css" title="color-3">
    <link href="{{ asset('assets/css/colors/color-4.css') . '?version=' . version() }}" rel="alternate stylesheet"
        type="text/css" title="color-4">
    <link href="{{ asset('assets/css/colors/color-5.css') . '?version=' . version() }}" rel="alternate stylesheet"
        type="text/css" title="color-5"> --}}
    {{-- DATE PICKER --}}
    {{-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/air-datepicker@3.3.5/air-datepicker.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        /* .color-2 {
            color: #00A759 !important;
            background: #00A759 !important;
        } */

        .text-divider {
            display: flex;
            align-items: center;
            --text-divider-gap: 1rem;
        }

        .text-divider::before {
            margin-right: var(--text-divider-gap);
        }

        .text-divider::before,
        .text-divider::after {
            content: '';
            height: 1px;
            background-color: silver;
            flex-grow: 1;
        }

        .icon-form {
            font-size: 45px;
        }

        input[type="date"]::before {
            content: attr(placeholder);
            position: absolute;
            color: #999999;
        }

        input[type="date"] {
            color: #ffffff;
        }

        input[type="date"]:focus,
        input[type="date"]:valid {
            color: #666666;
        }

        input[type="date"]:focus::before,
        input[type="date"]:valid::before {
            content: "";
        }

        .wizard-footer {
            min-height: 300px;
        }

        .actions li:first-child span,
        .actions li:first-child button {
            color: #8a8a8a;
            background-color: #d3d3d600 !important;
            border-color: #c6e0fd;
            border-radius: 3px;
        }

        .actions li:first-child span:hover,
        .actions li:first-child button:hover {
            background: #00A759 !important;
            color: white !important;
        }
        .error{
            font-size: 20px;
        }
    </style>
    @livewireStyles
</head>

<body class="boxed-version">
    {{-- <img src="{{ asset('assets/img/logo_smk.png') }}" alt="" srcset=""> --}}

    <!-- This code is use for color chooser, you can delete -->
    {{-- <div id="switch-color" class="color-switcher">
        <div class="open"><i class="fas fa-cog"></i></div>
        <h4>COLOR OPTION</h4>
        <ul>
            <li><a class="color-2" onclick="setActiveStyleSheet('color-2'); return false;" href="#"><i
                        class="fas fa-cog"></i></a> </li>
            <li><a class="color-3" onclick="setActiveStyleSheet('color-3'); return false;" href="#"><i
                        class="fas fa-cog"></i></a> </li>
            <li><a class="color-4" onclick="setActiveStyleSheet('color-4'); return false;" href="#"><i
                        class="fas fa-cog"></i></a> </li>
            <li><a class="color-5" onclick="setActiveStyleSheet('color-5'); return false;" href="#"><i
                        class="fas fa-cog"></i></a> </li>
        </ul>
    </div> --}}
    <div class="clearfix"></div>

    <div class="wrapper clearfix">
        <div class="wizard-part-title">
            <h3> Registrasi Siswa Baru</h3>
        </div>
        <!--multisteps-form-->
        <div class="multisteps-form">
            <!--progress bar-->
            <div class="row">
                <div class="col-12 col-lg-12 ml-auto mr-auto mb-5 mt-5">
                    <div class="multisteps-form__progress">
                        <div class="multisteps-form__progress-btn js-active">
                            <div class="text-center">
                                <i class="fa fa-book icon-form"></i>
                                <p>Lengkapi Data </p>
                            </div>
                            <div style="font-size: 40px;" class="responsive_ket text-center">
                                <i class="fa fa-book"></i>
                                <p style="font-size: 14px;">Lengkapi Data </p>
                            </div>
                        </div>

                        <div class="multisteps-form__progress-btn">
                            <div class="text-center">
                                <i class="fa fa-file icon-form"></i>
                                <p>Lampiran Berkas </p>
                            </div>
                            <div style="font-size: 40px;" class="responsive_ket text-center">
                                <i class="fa fa-file"></i>
                                <p style="font-size: 14px;">Lampiran Berkas </p>
                            </div>
                        </div>

                        <div class="multisteps-form__progress-btn">
                            <div class="text-center">
                                <i class="fa fa-id-card icon-form"></i>
                                <p>Preview </p>
                            </div>
                            <div style="font-size: 40px;" class="responsive_ket text-center">
                                <i class="fa fa-id-card"></i>
                                <p style="font-size: 14px;">Preview </p>
                            </div>
                        </div>

                        <div class="multisteps-form__progress-btn">
                            <div class="text-center">
                                <i class="fa fa-recycle icon-form"></i>
                                <p>Pilih Jalur Pendaftaran </p>
                            </div>
                            <div style="font-size: 40px;" class="responsive_ket text-center">
                                <i class="fa fa-recycle"></i>
                                <p style="font-size: 14px;">Pilih Jalur Pendaftaran </p>
                            </div>
                        </div>
                        
                        {{-- <button class="multisteps-form__progress-btn">Review </button> --}}
                    </div>
                </div>
            </div>
            <!--form panels-->
            <div class="row">
                <div class="col-12 col-lg-12 m-auto">
                    <div class="multisteps-form__form position-relative clearfix" id="wizard">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') . '?version=' . version() }}"></script>
    {{-- DATE PICKER --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.3.5/air-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('assets/js/popper.min.js') . '?version=' . version() }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') . '?version=' . version() }}"></script>
    <script src="{{ asset('assets/js/switch.js') . '?version=' . version() }}"></script>
    <script src="{{ asset('assets/js/main.js') . '?version=' . version() }}"></script>
    <script>
        $("#files").change(function() {
            filename = this.files[0].name
            $('.upload-text span').text(filename);
            console.log(this.files[0]);
        });
        $("#file-images").change(function() {
            filename = this.files[0].name
            $('#judul_raport').text("Upload Berhasil");
            $('#namafile_raport').text(filename);
            console.log(filename);
        });
    </script>
    <script>
        // $('#provinsi').change(function(e) {
        //     e.preventDefault();
        //     var id = $('#provinsi').val();
        //     $('#kabupaten').empty();
        //     $('#kecamatan').empty();
        //     $('#kelurahan').empty();
        //     if (id != "") {
        //         var url = "{{ url('kabupaten/') }}" + "/" + id
        //         $.ajax({
        //             type: "GET",
        //             url: url,
        //             success: function(response) {
        //                 $.each(response, function(index, val) {
        //                     // console.log(val)
        //                     $('#kabupaten').append("<option value='" + val.id + "'>" + val
        //                         .name +
        //                         "</option>");
        //                 });
        //                 $('#kabupaten').trigger('change');
        //             }
        //         });
        //     }
        // });
        // $('#kabupaten').change(function(e) {
        //     e.preventDefault();
        //     var id = $('#kabupaten').val();
        //     var url = "{{ url('kecamatan/') }}" + "/" + id
        //     console.log(id)
        //     $('#kecamatan').empty();
        //     $.ajax({
        //         type: "GET",
        //         url: url,
        //         success: function(response) {
        //             $.each(response, function(index, val) {
        //                 $('#kecamatan').append(
        //                     "<option value='" +
        //                     val.id + "'>" + val
        //                     .name + "</option>")
        //             });
        //             $('#kecamatan').trigger('change');
        //         }
        //     });
        // });
        // $('#kecamatan').change(function(e) {
        //     e.preventDefault();
        //     var id = $('#kecamatan').val();
        //     var url = "{{ url('kelurahan/') }}" + "/" + id
        //     console.log(id)
        //     $('#kelurahan').empty();
        //     $.ajax({
        //         type: "GET",
        //         url: url,
        //         success: function(response) {
        //             $.each(response, function(index, val) {
        //                 $('#kelurahan').append(
        //                     "<option value='" +
        //                     val.id + "'>" + val
        //                     .name + "</option>")
        //             });
        //             $('#kelurahan').trigger('change');
        //         }
        //     });
        // });
        $('#sekolah').change(function(e) {
            e.preventDefault();
            var id = $('#sekolah').val();
            if (id == "") {
                $('#detailsekolah').attr('hidden', true);
            } else {
                $('#detailsekolah').attr('hidden', false);
                var url = "{{ url('sekolah/') }}" + "/" + id
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(response) {
                        $('#npsn').val(response.npsn)
                        $('#alamatsekolah').val(response.alamat)
                    }
                });
            }
        });
        $('.select2').select2();

        window.addEventListener('nextForm', event => {
            var page = event.detail;
            $('.multisteps-form__progress-btn:nth-child('+page+')').click()
        })
        window.addEventListener('gagal', event => {
            $('.multisteps-form__progress-btn:nth-child(1)').click()
        })
    </script>

    @livewireScripts
</body>

</html>
