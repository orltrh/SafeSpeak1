@extends('layout.admin')
@section('title', 'createEdukasi')


@section('content')
@parent
<section style="padding-top: 100px">
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
            <form method="POST" action="{{ route('admins.prosesUpdateMateri', ['judul' => $data->judul]) }}" enctype="multipart/form-data" >
                <div style="padding-top: 10px;">
                @csrf
                <div style="max-width: 600px; margin: 0 auto;">
                  <table style="width: 100%;">

                    <tr>
                        <td><label for="materi">Materi:</label></td>
                        <td>
                            <select id="materi" name="materi" required style="margin-bottom: 10px; width: 200px; height:35px;">
                                <option value="">Pilih Materi</option>
                                <option value="Self Awareness" {{ isset($data) && $data->materi == 'Self Awareness' ? 'selected' : '' }}>Self Awareness</option>
                                <option value="Self Regulation" {{ isset($data) && $data->materi == 'Self Regulation' ? 'selected' : '' }}>Self Regulation</option>
                                <option value="Self Adjustment" {{ isset($data) && $data->materi == 'Self Adjustment' ? 'selected' : '' }}>Self Adjustment</option>
                                <option value="Self Motivation" {{ isset($data) && $data->materi == 'Self Motivation' ? 'selected' : '' }}>Self Motivation</option>
                                <option value="Empathy" {{ isset($data) && $data->materi == 'Empathy' ? 'selected' : '' }}>Empathy</option>
                                <option value="Social Skills" {{ isset($data) && $data->materi == 'Social Skills' ? 'selected' : '' }}>Social Skills</option>
                                <!-- tambahkan opsi lainnya sesuai kebutuhan -->
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="judul">Judul:</label></td>
                        <td><input type="text" id="judul" name="judul" required style="margin-bottom: 10px;" value="{{ isset($data) ? $data->judul : '' }}"></td>
                    </tr>
                    <tr>
                        <td><label for="paragraf1">Paragraf 1:</label></td>
                        <td><textarea id="paragraf1" name="paragraf1" required style="width: 100%; height: 100px; margin-bottom: 10px;">{{ isset($data) ? $data->paragraf1 : '' }}</textarea></td>
                    </tr>
                    <tr>
                        <td><label for="paragraf2">Paragraf 2:</label></td>
                        <td><textarea id="paragraf2" name="paragraf2" style="width: 100%; height: 100px; margin-bottom: 10px;">{{ isset($data) ? $data->paragraf2 : '' }}</textarea></td>
                    </tr>
                    <tr>
                        <td><label for="paragraf3">Paragraf 3:</label></td>
                        <td><textarea id="paragraf3" name="paragraf3" style="width: 100%; height: 100px; margin-bottom: 10px;">{{ isset($data) ? $data->paragraf3 : '' }}</textarea></td>
                    </tr>
                    <tr>
                        <td><label for="paragraf4">Paragraf 4:</label></td>
                        <td><textarea id="paragraf4" name="paragraf4" style="width: 100%; height: 100px; margin-bottom: 10px;">{{ isset($data) ? $data->paragraf4 : '' }}</textarea></td>
                    </tr>
                    <tr>
                        <td><label for="paragraf5">Paragraf 5:</label></td>
                        <td><textarea id="paragraf5" name="paragraf5" style="width: 100%; height: 100px; margin-bottom: 10px;">{{ isset($data) ? $data->paragraf5 : '' }}</textarea></td>
                    </tr>
                    <tr>
                        <td><label for="image" class="form-label">Image:</label></td>
                        <td>
                            <input class="form-control" type="file" id="image" name="image">
                            @if(isset($data) && $data->image)
                                <img src="{{ asset('storage/'.$data->image) }}" alt="Image" style="max-width: 200px; margin-top: 10px;">
                            @endif
                        </td>
                    </tr>
                  </table>
                </div>
                </div>
                <div class="pt-3 pb-3">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
              </form>
        </div>
    </div>
    </div>
</div>


</section>
@endsection
