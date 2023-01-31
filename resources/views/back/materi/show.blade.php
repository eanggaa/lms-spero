@extends('back.templates.pages')
@section('title', isset($title) ? $title : 'Show')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label>Judul Materi</label>
                          <input type="text" disabled name="judul_materi" value="{{ $materi->judul_materi }}" class="form-control" placeholder="Judul Materi">
                          <span class="text-danger">@error('judul_materi'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Video 1</label>
                          <ul>
                            <li>
                              <video width="300" height="300" muted controls><source src="/video_1/{{ $materi->video_1 }}" type="video/mp4"></video>
                            </li>
                          </ul>
                        </div>
                        <div class="form-group">
                            <label>Intruksi 1</label>
                            <textarea disabled name="intruksi_1" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Intruksi 1">{{ $materi->intruksi_1 }}</textarea>
                            <span class="text-danger">@error('intruksi_1'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Penjelasan 1</label>
                            <textarea disabled name="penjelasan_1" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Penjelasan 1">{{ $materi->penjelasan_1 }}</textarea>
                            <span class="text-danger">@error('penjelasan_1'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Pertanyaan 1</label>
                            <textarea disabled name="pertanyaan_1" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Pertanyaan 1">{{ $materi->pertanyaan_1 }}</textarea>
                            <span class="text-danger">@error('pertanyaan_1'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>PDF</label>
                          <ul>
                            <li>
                              <a href="/pdf/{{ $materi->file_pdf }}" target="_blank">{{ $materi->file_pdf }}</a>
                            </li>
                          </ul>
                        </div>
                        <div class="form-group">
                          <label>Video 2</label>
                          <ul>
                            <li>
                              <video width="300" height="300" muted controls><source src="/video_2/{{ $materi->video_2 }}" type="video/mp4"></video>
                            </li>
                          </ul>
                        </div>
                        <div class="form-group">
                            <label>Intruksi 2</label>
                            <textarea disabled name="intruksi_2" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Intruksi 2">{{ $materi->intruksi_2 }}</textarea>
                            <span class="text-danger">@error('intruksi_2'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Penjelasan 2</label>
                            <textarea disabled name="penjelasan_2" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Penjelasan 2">{{ $materi->penjelasan_2 }}</textarea>
                            <span class="text-danger">@error('penjelasan_2'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Instruksi Studi Kasus</label>
                            <textarea disabled name="instruksi_studi_kasus" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Instruksi Studi Kasus">{{ $materi->instruksi_studi_kasus }}</textarea>
                            <span class="text-danger">@error('instruksi_studi_kasus'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Penjelasan Studi Kasus</label>
                            <textarea disabled name="penjelasan_studi_kasus" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Penjelasan Studi Kasus">{{ $materi->penjelasan_studi_kasus }}</textarea>
                            <span class="text-danger">@error('penjelasan_studi_kasus'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Pertanyaan Studi Kasus</label>
                            <textarea disabled name="pertanyaan_studi_kasus" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Pertanyaan Studi Kasus">{{ $materi->pertanyaan_studi_kasus }}</textarea>
                            <span class="text-danger">@error('pertanyaan_studi_kasus'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Praktekan</label>
                            <textarea disabled name="praktekkan" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Praktekan">{{ $materi->praktekkan }}</textarea>
                            <span class="text-danger">@error('praktekkan'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Intruksi Essay</label>
                            <textarea disabled name="instruksi_essay" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Intruksi Essay">{{ $materi->instruksi_essay }}</textarea>
                            <span class="text-danger">@error('instruksi_essay'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Urutan Materi</label>
                            <textarea disabled name="urutan_materi" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Urutan Materi">{{ $materi->urutan_materi }}</textarea>
                            <span class="text-danger">@error('urutan_materi'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Created By</label>
                            <input type="text" disabled name="created_by" value="{{ $materi->created_by }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('created_by'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                            <label>Updated By</label>materi
                            <input type="text" disabled name="updated_by" value="{{ $materi->updated_by }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('updated_by'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Created At</label>
                            <input type="text" disabled name="created_at" value="{{ $materi->created_at }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('created_at'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                            <label>Updated At</label>
                            <input type="text" disabled name="updated_at" value="{{ $materi->updated_at }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('updated_at'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        @if($materi->status_aktif == 1)
                          @if(auth()->user()->level == 1)
                              <a href="{{ route('superadmin.materi.index') }}" class="btn btn-dark">Back</a>
                          @elseif(auth()->user()->level == 2)
                              <a href="{{ route('admin.materi.index') }}" class="btn btn-dark">Back</a>
                          @elseif(auth()->user()->level == 3)
                              <a href="{{ route('agensi.materi.index') }}" class="btn btn-dark">Back</a>
                          @endif
                        @elseif($materi->status_aktif == 2)
                          @if(auth()->user()->level == 1)
                            <a href="{{ route('superadmin.materi.terhapus') }}" class="btn btn-dark">Back</a>
                          @elseif(auth()->user()->level == 2)
                            <a href="{{ route('admin.materi.terhapus') }}" class="btn btn-dark">Back</a>
                          @elseif(auth()->user()->level == 3)
                            <a href="{{ route('agensi.materi.terhapus') }}" class="btn btn-dark">Back</a>
                          @endif
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//cdn.ckeditor.com/4.20.1/basic/ckeditor.js"></script>
@endsection