

  <div class="col-md-10-mt-3 pl-5">

     <label for="add_mahasiswa"></label>
        <button type="button" class="btn btn-primary mb-3" id="addForm" data-toggle="modal" data-target="#exampleModalLong">Add New Data</button>

    <div class="table-reponsive">
    	<table id="mahasiswa_data" class="display">
            <thead>
                <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Nip</th>
                    <th style="text-align: right;">Action</th>
                </tr>
            </thead>    
    			<tbody id="myTable">
            <!-- getAjax -->
          </tbody> 
    	</table>
    </div>

  </div> 
</div>    

        <!-- modal tambah -->
 <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Form Add Students</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <form method="post" id="form_mahasiswa">
        <input type="hidden" name="action" id="action">

          <div class="form-group">
            <label for="nim">Nim</label>
            <input type="text" class="form-control" id="nim" placeholder="Nim Students">
            </div>

          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Students Name">
          </div>
          
          <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" id="kelas" placeholder="Class Name">
          </div>

          
      
          <div class="modal-footer">
            <input type="submit" name="save_mahasiswa" class="btn btn-primary" id="save_mahasiswa" value="Insert">
          </div>
      </div>
        </form>

    </div>
  </div>

</div>
        <!--END MODAL TAMBAH-->













