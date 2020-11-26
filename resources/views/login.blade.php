
@extends('master')
@section('content')

    <div class="row custom_style">
        <div class="col-sm-4 col-sm-offset-4">
           <div class="card" style="border: 1px solid #718096;padding: 10px">
               <div class="card-header">
                   <h2 class="" style="padding: 15px 0; background: #111; margin-bottom: 30px;text-align: center;color: #ffffff">
                       Login Please
                   </h2>
               </div>
               <div class="card-body">
                   <form>
                       <div class="form-group">
                           <label for="exampleInputEmail1">Email address</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                       </div>
                       <div class="form-group mt-3">
                           <label for="exampleInputPassword1">Password</label>
                           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                       </div>
                       <button type="submit" class="btn btn-primary d-block">Submit</button>
                   </form>
               </div>
           </div>
        </div>
    </div>
    
@endsection

