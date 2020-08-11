

<form method="POST" action="{{ route('pages.update', $enfant) }}">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="text" name="nom" value="{{ $enfant->nom }}" class="form-control" placeholder="Nom" required>
      </div>

      <div class="form-group col-md-6">
        <input type="text" name="prenom" value="{{ $enfant->prenom }}" class="form-control" placeholder="Prenom">
      </div>
     

    <div class="form-row">
        <div class="form-group col-md-6">
          <input type="date" class="form-control" value="{{ $enfant->datenaiss }}" name="datenaiss" >
        </div>
        
        <div class="form-group col-md-6">
          <input type="text" name="lieunaiss" class="form-control" value="{{ $enfant->lieunaiss }}" placeholder="Lieu Naissance">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" name="sexe" class="form-control" value="{{ $enfant->sexe }}" placeholder="Sexe">
        </div>
        
        <div class="form-group col-md-6">
          <input type="text" name="lieuculte" value="{{ $enfant->lieuculte }}" class="form-control" placeholder="Lieu de Culte">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" name="nompere" value="{{ $enfant->nompere }}" class="form-control" placeholder="Nom du Pere">
        </div>
        
        <div class="form-group col-md-6">
          <input type="text" name="nommere" value="{{ $enfant->nommere }}" class="form-control" placeholder="Nom de La Mere">
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" name="classe" value="{{ $enfant->classe }}" class="form-control" placeholder="Classe frequente">
        </div>
        
        <div class="form-group col-md-6">
          <input type="text" name="niveau" value="{{ $enfant->niveau }}" class="form-control" placeholder="Niveau">
        </div>
      </div><br>
      <div class="col">
        <center><button class="btn btn-primary btn-lg btn-block" 
            style="height: 50px; width: 250px;" type="submit"> Modifier</button></center>
      </div>
  </form><br><br>