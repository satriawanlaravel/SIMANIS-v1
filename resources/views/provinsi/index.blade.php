@extends('layouts.app')
@section('content')
    <div class="form-group">
        <div class="form-control">
            <label for="">Pilih Provinsi</label>
            <select class="form-control select2" name="prov">
            <option value="" desabled>--Pilih Provinsi--</option>
                @foreach ($getprovinsi as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_provinsi }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-control">
            <label for="">Pilih Kabupaten</label>
            <select class="form-control select2" name="kab">
            <option value="" desabled>--Pilih Kabupaten--</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-control">
            <label for="">Pilih Kecamatan</label>
            <select class="form-control select2" name="kec">
            <option value="" desabled>--Pilih Kecamatan--</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-control">
            <label for="">Pilih Kelurahan / Desa</label>
            <select class="form-control select2" name="kel_des">
            <option value="" desabled>--Pilih Kelurahan--</option>
            </select>
        </div>
    </div>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
@endsection()
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                theme: 'bootstrap4',
            });
            $(".select2-dynamic").select2({
                tags: true,
                theme: 'bootstrap4'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            // get kabupaten
            $('select[name="prov"]').on('change', function() {
                var catid = $(this).val();
                if (catid) {
                    $.ajax({
                        url: '/getkabupaten/' + catid,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="kab"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="kab"]').append('<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="kab"]').empty();
                }
            });
            // get kecamatan
            $('select[name="kab"]').on('change', function() {
                var catkecid = $(this).val();
                if (catkecid) {
                    $.ajax({
                        url: '/getkecamatan/' + catkecid,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="kec"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="kec"]').append('<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="kec"]').empty();
                }
            });

            // get keluraha /desa
            $('select[name="kec"]').on('change', function() {
                var catkecid = $(this).val();
                if (catkecid) {
                    $.ajax({
                        url: '/getkelurahandesa/' + catkecid,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="kel_des"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="kel_des"]').append('<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="kel_des"]').empty();
                }
            });
        });
    </script>

@endsection()