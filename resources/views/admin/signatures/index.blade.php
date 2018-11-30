@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                haffiz
                <!--<signatures></signatures>-->
                <router-view name="SignatureForm"></router-view>
                <router-view name="signatures"></router-view>
                
                
<!--                     <router-view name="signatures"></router-view>
                        <router-view></router-view>-->
            </div>
        </div>
    </div>
@endsection