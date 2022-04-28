@extends('adminpage')
@section('title','Demandes')

@section('content')

<div class="container" >
    <div class="row justify-content-center">
<div class="col-md-4">
    <div class="card">
        <div class="card-header text-center">Demandes</div>
        <form action="#" method="post">
            @csrf
            <div class="card-body text-right">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Type de Demandes :</label>
                        <select id="disabledSelect" class="form-select">
                          <option>Demande1</option>
                          <option>Demande2</option>
                        </select>
                      </div>
                    <br>
                    <label for="story">description:</label>
                    <textarea type="text" class="form-control" name="des_name"  rows="4" cols="33">
                    </textarea>                          
                       <br>
                    <form action="/action_page.php" >
                       <label for="img">Select image :</label>
                       <input type="file" name="type_demande"  accept="image/*">
                       
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
        <div class="card-header text-center">Demandes</div>
       

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
                        <th scope="col">type_demande</th>
                        <th scope="col">modifier</th>
                        <th scope="col">supprimer</th>

                    </tr>
                </thead>
             <tbody>
               
               <tr>
                   <td ></td>
                 <td>type_demande </td>
                 <td style="width:15%"> <a href=""><button  class="btn btn-primary ">modifier</button></a>  </td>
                 <td style="width:15%" ><a href="#"><button class="btn btn-danger"id="delete" onclick="alert('supprimé')">supprimer</button></a> </td>
                </tr>
                  
             </tbody>
          </table>
        </div>
    </div>
 </div> 
    </div>
@endsection