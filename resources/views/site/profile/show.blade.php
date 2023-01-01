@extends('site.layouts.master')

@section('title')
    Mijn profiel
@endsection

@section('content')
    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-header"></div>
                        <div class="avatar-box">
                            <div class="status online"></div>
                            <div class="avatar-inner">
                                <div class="figure" style="background: url('');"></div>
                                <div class="plate"></div>
                            </div>
                        </div>
                        <div class="avatar-name">
                            <p><b>{{ $user->username }}</b></p><br>
                            <em>Eigenaar</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Grootprofiel</h5>
                        <p>Berichten hier</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gastenboek (0)</h5>
                        <p>Berichten hier</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-xl-4">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informatie over {{ $user->username }}</h5>
                        <div class='sub-box'><p id='stats' class='statsinfoLeft'>Status</p><p id='stats' class='statsinfoRight'><img src="https://files.habboemotion.com/resources/images/icons/offline.gif"></p></div>
                        <div class='sub-box'><p id='stats' class='statsinfoLeft'>Lid geworden op</p><p id='stats' class='statsinfoRight'>{{ $user->created_at }}</p></div>
                        <div class='sub-box'><p id='stats' class='statsinfoLeft'>Laatst online</p><p id='stats' class='statsinfoRight'>4 jan 2022 om 16:30</p></div>
                        <div class='sub-box'><p id='stats' class='statsinfoLeft'>Muntjes</p><p id='stats' class='statsinfoRight'>0 muntjes</p></div>
                        <div class='sub-box'><p id='stats' class='statsinfoLeft'>Favoriete meubel</p><p id='stats' class='statsinfoRight'>Stoel</p></div>
                        <div class='sub-box'><p id='stats' class='statsinfoLeft'>Favoriete kamer</p><p id='stats' class='statsinfoRight'>Woonkamer</p></div>
                        <div class='sub-box'><p id='stats' class='statsinfoLeft'>Favoriete Staff</p><p id='stats' class='statsinfoRight'>raydevinlr</p></div>
                        <div class='sub-box'><p id='stats' class='statsinfoLeft'>Profiel likes</p><p id='stats' class='statsinfoRight'>0 likes</p></div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Badges (0)</h5>
                        <p>{{ $user->username }} heeft nog geen badges</p>
                        <div class="overflow-auto" style="height: 100px;">
                            <div class="badgebox">
                                <div style="height:50px;width:50px;background-color: red;"></div>
                            </div>
                            <div class="badgebox">
                                <div style="height:50px;width:50px;background-color: red;"></div>
                            </div>
                            <div class="badgebox">
                                <div style="height:50px;width:50px;background-color: red;"></div>
                            </div>
                            <div class="badgebox">
                                <div style="height:50px;width:50px;background-color: red;"></div>
                            </div>
                            <div class="badgebox">
                                <div style="height:50px;width:50px;background-color: red;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Twitter</h5>
                        <p>{{ $user->username }} heeft nog geen Twitter ingesteld</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">YouTube</h5>
                        <p>{{ $user->username }} heeft nog geen YouTube video ingesteld</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
