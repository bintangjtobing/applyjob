@extends('candidate.dashboard.welcome')
@section('titledashboard','Setting Account')
@section('content')
<div class="container-fluid mt-3">
    @if(session('sukses'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible fade show" role='alert'>
                <strong>Berhasil</strong> {{session('sukses')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kontak Informasi Singkat</h4>
                    <div class="table-responsive">
                        <table class="table header-border">
                            <tbody>
                                <tr>
                                    <td align="right">Nama :</td>
                                    <td>{{session()->get('firstname')}} {{session()->get('lastname')}}</td>
                                </tr>
                                <tr>
                                    <td align="right">Email :</td>
                                    <td>{{session()->get('email')}}</td>
                                </tr>
                                <tr>
                                    <td align="right">Nomor Ponsel :</td>
                                    <td>@if(session()->get('nohp')=='') Belum terisi @else {{session()->get('nohp')}}
                                        @endif</td>
                                </tr>
                                <tr>
                                    <td align="right">Alamat :</td>
                                    <td>@if(session()->get('alamat')=='') Belum terisi @else
                                        {{session()->get('alamat')}} @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="" data-toggle="modal" data-target="#ubahdataprofil"
                                            class="btn btn-primary btn-block btn-sm">Ubah data profil</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informasi Langganan</h4>
                    <div class="table-responsive">
                        <table class="table header-border">
                            <tbody>
                                <tr>
                                    <td align="right">Email Pemberitahuan Lowongan :</td>
                                    <td align="left">@if(session()->get('notif_lowongan')=='0')Tidak Berlangganan @else
                                        Berlangganan @endif</td>
                                </tr>
                                <tr>
                                    <td align="right">Email Peluang Kerja :</td>
                                    <td align="left">@if(session()->get('notif_peluang')=='0')Tidak Berlangganan @else
                                        Berlangganan @endif</td>
                                </tr>
                                <tr>
                                    <td align="right">Dapatkan email promosi dari mitra Applyjob :</td>
                                    <td align="left">@if(session()->get('notif_promosi')=='0')Tidak Berlangganan @else
                                        Berlangganan @endif</td>
                                </tr>
                                <tr>
                                    <td align="right">Email pemberitahuan pembaruan profil :</td>
                                    <td align="left">@if(session()->get('notif_profil')=='0')Tidak Berlangganan @else
                                        Berlangganan @endif</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="#" class="btn btn-primary btn-block btn-sm">Ubah langganan</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informasi Keamanan</h4>
                    <div class="table-responsive">
                        <table class="table header-border">
                            <tbody>
                                <tr>
                                    <td>Kata sandi: {{session()->get('unpass')}}
                                    <td>
                                    <td><a href="#" class="btn btn-primary btn-sm btn-block">Ubah</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal ubah profil --}}
<!-- Modal -->
<div class="modal fade" id="ubahdataprofil" tabindex="-1" aria-labelledby="ubahdataprofil" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubahdataprofil">Ubah data {{session()->get('firstname')}}
                    {{session()->get('lastname')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/dashboard/candidate/updatesetting/profil/{{session()->get('id')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="firstname" value="{{session()->get('firstname')}}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="lastname" value="{{session()->get('lastname')}}"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" value="{{session()->get('email')}}" id=""
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nomor Ponsel</label>
                                <input type="text" name="nohp"
                                    value="@if(session()->get('nohp')=='') - @else {{session()->get('nohp')}} @endif"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Warga Negara</label>
                                <select name="country" id="" class="form-control custom-select">
                                    @foreach ($country as $country)
                                    <option value="{{$country->id}}">{{$country->iso}} - {{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" id="" cols="30" rows="10" required>@if(session()->get('alamat')=='') - @else {{session()->get('alamat')}}
                                @endif</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
