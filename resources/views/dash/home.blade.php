@extends('dash.main')   
   
   @section('main-section')
   <div class="sidebar"></div>
   <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with stripped rows</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Preview</th>
                </tr>
                </thead>
                <tbody>
                @foreach($DATA as $d)
                  <tr>
                  
  
                   <th>{{$d->id}}</th>
                   <td>{{$d->name}}</td>
                   <td>{{$d->price}}</td>
                   <td>
                    <img src="{{asset('tem/images/pro/'.$d->img)}}" height="70px" width="70px"alt="">
                    </td>  
                  
                  </tr>
                  @endforeach
                 
              
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              <a href="insert" class="btn btn-secondary me-2">insert</a>
            </div>
          </div>

            @endsection