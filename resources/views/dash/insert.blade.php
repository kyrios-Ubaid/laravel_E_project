@extends('dash.main')   

@section('main-section')

<br><br><br><br><br><br>


<div class="col-md-1 col-lg-5 pb-4 " >                          
    <div class="jumbotron">
        <form action="{{url('/')}}/padd" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="jumbotron">
                <div class="row">
                    <div class="form-group">
                        <label class="text-black" >Product Name</label>
                        <input type="text" name="name"class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-black" >Price</label>
                    <input type="number" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-black">insert image</label><br>
                    <input type="file" name="image" class="form-control-file">
                </div>
                
                <button type="submit" class="btn btn-secondary mt-4">insert</button>
            <!-- </div> -->
        </form>
    </div> 
</div>
@endsection