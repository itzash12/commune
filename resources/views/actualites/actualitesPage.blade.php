@extends('adminpage')
@section('title','Actualites')

@section('content')



<div class="container" >
     <div class="row justify-content-center">


         <div class="col-md-4">
             <div class="card">
                 <div class="card-header text-center">Actualites</div>
                 <form action="{{route ('actual.store')}}" method="post">
                     @csrf
                     <div class="card-body text-right">
                         <div class="form-group">
                             <label for="name">titre Actualites</label>
                             <input type="text" class="form-control" name="actual_name" placeholder="titre Actualite">
                             <br>
                             <label for="story">description:</label>

                             <textarea type="text" class="form-control" name="des_name"  rows="4" cols="33">
                             </textarea>                          
                                <br>
                             <form action="/action_page.php" >
                                <label for="img">Select image :</label>
                                <input type="file" name="actual_image"  accept="image/*">
                                
                             </form>
                             
                         </div>
                         <br>

                         <div class="form-group text-center">
                             <button class="btn btn-danger" type="submit">confirmer</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
         <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Actualites</div>
               

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">titre actualite</th>
                                <th scope="col">modifier</th>
                                <th scope="col">supprimer</th>

                            </tr>
                        </thead>
                     <tbody>
                         @foreach ($actuals as $key=> $row)
                       <tr>
                           <td scope="row">{{$key =$key+1}}</td>
                         <td>{{$row->actual_name }}</td>
                         <td style="width:15%"> <a href=""><button  class="btn btn-primary ">modifier</button></a>  </td>
                         <td style="width:15%" ><a href="{{route('actual.delete',$row->id)}}"><button class="btn btn-danger"id="delete" onclick="alert('supprimé')">supprimer</button></a> </td>
                        </tr>
                        @endforeach  
                     </tbody>
                  </table>
                </div>
            </div>
         </div> 
     </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifer</h5>
  
        </div>
        

@endsection
