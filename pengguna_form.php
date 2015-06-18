<form  id='form1' method="POST" 
                      action='home.php?go=Pengguna_Simpan'
                      class="form-horizontal" role="form"
                     
                      >
                     
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">nama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control required" id="usertxt" name='usertxt'
       placeholder="Masukan nama user">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">alamat</label>
    <div class="col-sm-9">
      <input type="text" class="form-control required" name='pswtxt' type="password" id="pswtxt"
       placeholder="Masukan Password">
    </div>

 </div>
  
 
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
    
      <input type="submit" class="btn btn-primary" name='submit' value="Simpan" />
    </div>
  </div>
</form>
