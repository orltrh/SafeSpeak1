@extends('layout.admin')
@section('title', 'Edukasi')
@section('menuIndex', 'active')

@section('content')
<section id="edukasi" style="height:100vh; padding-top: 50px">
    <div class="container">
        <div class="row" style="padding-top: 100px">
            <div class="col-sm-4 mb-3 mb-sm-0 d-flex justify-content-center">
                <div class="book">
                    <div><a href="admin-adselfawareness" class="btn btn-primary">Let's Learn</a></div>
                    <div class="cover">
                        <p>Self-Awareness</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="book">
                    <a href="admin-adselfregulation" class="btn btn-primary">Let's Learn</a>
                    <div class="cover">
                        <p>Self-Regulation</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="book">
                    <a href="admin-adselfmotivation" class="btn btn-primary">Let's Learn</a>
                    <div class="cover">
                        <p>Self-Motivation</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row" style="padding-top: 100px">
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="book">
                    <a href="admin-adempathy" class="btn btn-primary">Let's Learn</a>
                    <div class="cover">
                        <p>Empathy</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="book">
                    <a href="admin-adsocialskills" class="btn btn-primary">Let's Learn</a>
                    <div class="cover">
                        <p>Social Skills</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="book">
                    <a href="admin-adselfadjustment" class="btn btn-primary">Let's Learn</a>
                    <div class="cover">
                        <p>Self-Adjustment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
