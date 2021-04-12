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
                    @extends('layouts.master')





@section('title')
Registered Roles
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        To Do List
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Usertype
                      </th>
                      <th>
                        Approval
                      </th>
                      <th>
                        Edit
                      </th>

                      <th>
                      Delete
                      </th>
                      
                    </thead>
                    
                    <tbody>
                      
                     
                        
                     
                        
                    </tbody>
                        
                    
                  </table>
                </div>
              </div>
            </div>
          </div>

                
        
        </div>
@endsection



@section('scripts')

@endsection
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
