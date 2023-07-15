@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                    <div class="admin-section">
                        <div class="row">
                            <div class="col-md-4">
                                <h4> Management </h4>
                                <a href="{{ route('management.index') }}"> <i class="fa-sharp fa-solid fa-people-roof"></i> </a>
                            </div>
                            <div class="col-md-4">
                                <h4> Casher </h4>
                              <a href="">   <i class="fa-sharp fa-solid fa-cash-register"></i>   </a>
                            </div>
                            <div class="col-md-4">
                                <h4> Report </h4>
                               <a href=""> <i class="fa-sharp fa-solid fa-hotel"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
