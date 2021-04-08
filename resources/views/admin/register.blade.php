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
                        Delete
                      </th>
                      
                    </thead>
                    
                    <tbody>
                      
                      <tr>
                      @foreach($users as $row)
                      <tr>
                        <td>
                         {{$row->name}}
                        </td>
                        <td>
                        {{$row->phone}}
                        </td>
                        <td>
                        {{$row->email}}
                        </td>
                        <td>
                        {{$row->usertype}}
                        </td>
                        <td>
                        {{$row->approval}}
                        </td>
                        <td>
                          <a href='#' class ="btn btn-success>DELETE</a>"
                        </td>
                     </tr>
                     @endforeach
                        
                        
                     
                        
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