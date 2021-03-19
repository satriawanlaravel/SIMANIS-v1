@extends('layouts.app')
@section('content')
    <div class="form-group">
        <div class="form-control">
            <label for="">Cabang Industri</label>
            <select class="form-control select2" name="cab">
                <option value="">Pilih Cabang</option>
                @foreach ($getcabang as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_cabangindustri }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-control">
            <label for="">Sub Cabang Industri</label>
            <select class="form-control select2" name="sub">

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
            $('select[name="cab"]').on('change', function() {
                var catid = $(this).val();
                if (catid) {
                    $.ajax({
                        url: '/subcabangindustri/' + catid,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="sub"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="sub"]').append('<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="sub"]').empty();
                }
            });
        });

    </script>

@endsection()
