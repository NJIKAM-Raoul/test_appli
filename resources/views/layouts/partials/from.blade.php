<form method="POST" action="{{route('pages.store')}}">
    {{ csrf_field() }}
    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="text" name="nom" class="form-control" placeholder="Nom" required>
      </div>

      <div class="form-group col-md-6">
        <input type="text" name="prenom" class="form-control" placeholder="Prenom">
      </div>
     

    <div class="form-row">
        <div class="form-group col-md-6">
          <input type="date" class="form-control" name="datenaiss" >
        </div>
        
        <div class="form-group col-md-6">
          <input type="text" name="lieunaiss" class="form-control" placeholder="Lieu Naissance">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" name="sexe" class="form-control" placeholder="Sexe">
        </div>
        
        <div class="form-group col-md-6">
          <input type="text" name="lieuculte" class="form-control" placeholder="Lieu de Culte">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" name="nompere" class="form-control" placeholder="Nom du Pere">
        </div>
        
        <div class="form-group col-md-6">
          <input type="text" name="nommere" class="form-control" placeholder="Nom de La Mere">
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" name="classe" class="form-control" placeholder="Classe frequente">
        </div>
        
        <div class="form-group col-md-6">
          <input type="text" name="niveau" class="form-control" placeholder="Niveau">
        </div>
      </div><br>
      <div class="col">
        <center><button class="btn btn-primary btn-lg btn-block" style="height: 50px; width: 250px;" type="submit"> Enregistrer</button></center>
      </div>
  </form><br><br>








