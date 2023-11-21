@extends('frontend.master')


@section('content')
<div class="container" >
 <div class="row d-flex align-items-center justify-content-center"style="height: 70vh ">
    <div class="col-md-4 ">
        <div class="card" style="border-radius: 15px; background-color:#424242">
            <div class="card-body text-center">
              <div class="mt-3 mb-4 d-flex justify-content-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                  class="rounded-circle img-fluid" style="width: 100px;" />
              </div>
                
              
            <div>

                <h5 class="mb-2 text-white">Full Name: {{ auth()->user()->name }}</h5>
                
                <h5 class="mb-2 text-white">Email :{{ auth()->user()->email }}</h5>
                
                <h5 class="mb-2 text-white">Role :{{ auth()->user()->role }}</h5>

                <button type="button" class="btn btn-primary btn-rounded btn-lg text-white mb-5">
                    Message now
                </button>
                {{-- <div class="d-flex justify-content-between text-center mt-5 mb-2">
                        <div>
                            <p class="mb-2 h5 text-white">8471</p>
                            <p class="text-muted mb-0" style="color: white !important">Wallets Balance</p>
                        </div>
                        <div class="px-3">
                            <p class="mb-2 h5 text-white">8512</p>
                            <p class="text-muted mb-0 text-white">Income amounts</p>
                        </div>
                        <div>
                            <p class="mb-2 h5 text-white">4751</p>
                            <p class="text-muted mb-0 text-white">Total Transactions</p>
                        </div>
                </div> --}}
            </div>
          </div>
    </div>
    </div>
 </div>
@endsection