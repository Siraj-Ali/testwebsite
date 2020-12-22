@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
          <div class="col-3 text-right"><button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-block btn-success right">New Product</button></div>
          <div class="col-12">
            <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Products</h3>

                <div class="card-tools">
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" >
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Availability</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($products as $product)
                      <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->title_ar}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->availability}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>Edit | Delete</td>
                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" @click="cancel()" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form method="post" action="{{route('create.product')}}" enctype= multipart/form-data>
               @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="name"  type="text" class="form-control" name="name"
                                required autocomplete="name" autofocus
                                >
                                <has-error  field="name"></has-error>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Title Arabic</label>

                            <div class="col-md-6">
                                <input id="name_ar"  type="text" class="form-control" name="name_ar"
                                required autocomplete="name arabic" autofocus
                                >
                                <has-error  field="name"></has-error>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Price</label>

                            <div class="col-md-6">
                                <input id="price"  type="text" class="form-control" name="price" value="" required autocomplete="email" 
                                >
                                <has-error  field="price"></has-error>

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">Quantity</label>

                            <div class="col-md-6">
                                <input id="quantity"  type="number" class="form-control" name="quantity" value="" required autocomplete="email" 
                                >
                                <has-error  field="price"></has-error>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Availability</label>

                            <div class="col-md-6">
                                <input id="availability"  type="text" class="form-control " name="availability" autocomplete="new-password" 
                                >
                                <has-error field="availability"></has-error>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                                <input id="image"  type="file" class="form-control " name="image" autocomplete="new-password" 
                                >
                                <has-error field="availability"></has-error>

                            </div>
                        </div>
                        
                        <div class="text-right">
                          
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit" class="btn btn-primary">
                          Submit
                          
                        </button>
                        </div>
               </form>
            </div>
            </div>
        </div>
        </div>
</div>
@endsection
