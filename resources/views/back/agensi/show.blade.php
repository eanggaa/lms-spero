@extends('back.templates.pages')
@section('title', 'Show')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="" method="POST">
                        @csrf
                        <label>Direktur</label>
                        <div class="form-group">
                            <label>Nama Panjang</label>
                            <input type="text" disabled name="nama_panjang" value="{{ $agensi->direkturs->nama_panjang }}" class="form-control" placeholder="Nama Panjang">
                            <span class="text-danger">@error('nama_panjang'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="date" disabled name="tanggal_lahir" value="{{ $agensi->direkturs->tanggal_lahir }}" class="form-control">
                          <span class="text-danger">@error('tanggal_lahir'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" disabled name="email" value="{{ $agensi->direkturs->email }}" class="form-control" placeholder="Email">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Nomor Handphone</label>
                              <input type="number" disabled name="no_hp" value="{{ $agensi->direkturs->no_hp }}" class="form-control" placeholder="Nomor Handphone">
                              <span class="text-danger">@error('no_hp'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea disabled name="alamat" class="form-control h-150px" rows="6" id="comment" placeholder="Alamat">{{ $agensi->direkturs->alamat }}</textarea>
                          <span class="text-danger">@error('alamat'){{ $message }}@enderror</span>
                        </div>
                        <label>Agensi</label>
                        <div class="form-group">
                          <label>Nama Usaha</label>
                          <input type="text" disabled name="nama_usaha" value="{{ $agensi->nama_usaha }}" class="form-control" placeholder="Nama Usaha">
                          <span class="text-danger">@error('nama_usaha'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Nomor Induk Berusaha</label>
                            <input type="number" disabled name="nib" class="form-control" value="{{ $agensi->nib }}" placeholder="Nomor Induk Berusaha">
                            <span class="text-danger">@error('nib'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Telepon</label>
                              <input type="number" disabled name="telepon" value="{{ $agensi->telepon }}" class="form-control" placeholder="Telepon">
                              <span class="text-danger">@error('telepon'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea disabled name="alamat" class="form-control h-150px" rows="6" id="comment" placeholder="Alamat">{{ $agensi->alamat }}</textarea>
                          <span class="text-danger">@error('alamat'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" disabled name="email"  value="{{ $agensi->users->email }}" class="form-control" placeholder="Email">
                          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="text" disabled name="password"  value="{{ $agensi->users->password }}" class="form-control" placeholder="Password">
                          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Logo</label>
                          <ul>
                            <li>
                              @if($agensi->logo == null)
                                <td><img src="/default.jpg" alt="" width="200px"></td>
                              @else
                                <td><img src="/logo/{{ $agensi->logo }}" alt="" width="200px"></td>
                              @endif
                            </li>
                          </ul>
                        </div>
                        @if($agensi->status_verifikasi == 1)
                          @if(auth()->user()->level == 1)
                            <a href="{{ route('superadmin.agensi.index') }}" class="btn btn-dark">Back</a>
                          @elseif(auth()->user()->level == 2)
                            <a href="{{ route('admin.agensi.index') }}" class="btn btn-dark">Back</a>
                          @endif
                        @elseif($agensi->status_verifikasi == 2)
                          @if(auth()->user()->level == 1)
                            <a href="{{ route('superadmin.agensi.verification') }}" class="btn btn-dark">Back</a>
                          @elseif(auth()->user()->level == 2)
                            <a href="{{ route('admin.agensi.verification') }}" class="btn btn-dark">Back</a>
                          @endif
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection