@extends('layouts.default', ['title' => 'About'])

@section('content')

    <h1 class="text-center"> About</h1>
    <h2 class="text-center"> Une Page Ici!!!!</h2>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="full-right">
                    <h1>CRUD avec Laravel</h1>
       
       
                </div>
            </div>
         </div>
         <br><br>
       
         <table class="table table-bordered">
           <tr>
             <th with= "80px"> NO </th>
             <th>Nom</th>
             <th>Prenom</th>
             <th>Date Naissance</th>
             <th>Lieu Naissance</th>
             <th>Sexe</th>
             <th>Lieu Culte</th>
             <th>Nom Pere</th>
             <th>Nom Mere</th>
             <th>Classe</th>
             <th>Nivau</th>
             <th class="text-center" with="140px">
             
                <a href="{{ route('pages.create') }}" class="btn btn-success btn-sm">
                 <i class="glyphicon glyphicon-plus"></i>
                </a>
                {{-- {{ Form::open(['method' => 'DELETE', 'route' => ['pages.destroy', $value->id], 'style' => "display: inline;"
                   <button type="submit" style="display: inline;" class="btn btn-danger btn-sm">
                 <i class="glyphicon glyphicon"></i> </button>]) }}
               {{ Form::close() }} --}}
               
             </th>
           
           </tr>
       
            <?php $no = 1;?>
       
            @foreach($enfant as $key => $value)
              <tr>
                 <td>{{$no++}}</td>
                 <td>{{$value->nom }}</td>
                 <td>{{$value->prenom}}</td>
                 <td>{{ $value->datenaiss}}</td>
                 <td>{{$value->lieunaiss}}</td>
                 <td>{{ $value->sexe }}</td>
                 <td>{{$value->lieuculte}}</td>
                 <td>{{ $value->nompere }}</td>
                 <td>{{$value->nommere}}</td>
                 <td>{{ $value->classe }}</td>
                 <td>{{$value->niveau}}</td>
                 <td>

                   <a href="{{route('pages.show', $value)}}" class="btn btn-info btn-sm">
                     <i class="glyphicon glyphicon-th-large"></i>
                   </a> 
                   <a href="{{ route('pages.edit', $value) }}" class="btn btn-primary btn-sm">
                     <i class="glyphicon glyphicon-pencil"></i>
                   </a>
                    <form action="{{ route('pages.destroy', $value) }}" method="post" class="btn btn-sm">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-primary btn-sm" >
                        <i class="glyphicon glyphicon-trash"></i>
                      </button>
                    </form>
                   
                  <a href="{{ route('impression') }}?id={{ $value->id }}" class="btn btn-primary btn-sm">
                    <i class="glyphicon glyphicon-print"></i>
                  </a>
       
                 </td>
              </tr>
            @endforeach
    </div>
@stop

   
