@extends('back.templates.pages')
@section('title', 'Create')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="{{ route('agensi.project.store') }}" method="POST">
                        @csrf
                        @foreach ($agensi as $agensis)
                          @if($agensis->user_id == auth()->user()->id)
                            @if($agensi_id = $agensis->id)@endif
                          @endif
                        @endforeach
                        <div class="form-group">
                            <input type="text" readonly hidden name="agensi_id" value="{{ $agensi_id }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('agensi_id'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Judul Project</label>
                            <input type="text" name="judul_project" class="form-control" placeholder="Judul Project">
                            <span class="text-danger">@error('judul_project'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Deskripsi</label>
                          <textarea name="deskripsi" class="form-control h-150px" rows="6" id="comment" placeholder="Deskripsi"></textarea>
                          <span class="text-danger">@error('deskripsi'){{ $message }}@enderror</span>
                        </div>
                        <a href="{{ route('agensi.project.index') }}" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection