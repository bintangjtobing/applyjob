@extends('candidate.dashboard.welcome')
@section('titledashboard','Setting Account')
@section('content')
<div class="container-fluid mt-3">
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
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubahdataprofil">Ubah data {{session()->get('firstname')}}
                    {{session()->get('lastname')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
