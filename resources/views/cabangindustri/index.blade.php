@extends('layouts.app')
@section('content')
    <div class="form-group">
        <div class="form-control">
            <label for="">Cabang Industri</label>
            <select class="form-control select2">
                @foreach($getcabang as $item)
                <option value="">{{ $item->nama_cabangindustri }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-control">
            <label for="">Sub Cabang Industri</label>
            <select class="form-control select2">
                @foreach($getsubcabang as $item)
                <option value="">{{ $item->nama_sub_cabangindustri }}</option>
                @endforeach
            </select>
        </div>
    </div>
@endsection