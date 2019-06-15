  <script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function () {
  load_data();
	function load_data() {
      $.ajax({
          url:'<?= base_url; ?>/admin/getAjax',
          method:'get',
          dataType :'json',
          success:function (data) {
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
              html += '<tr>'+                                
                      '<td>'+data[i].nim+'</td>'+
                      '<td>'+data[i].nama+'</td>'+
                      '<td>'+data[i].kelas+'</td>'+
                      '<td>'+data[i].nip+'</td>'+
                      '<td style="text-align:right;">'+
                      '<a href="javascript:;" class="btn btn-info btn-xs m_edit" data="'+data[i].nip+'">Edit</a>'+' '+
                     '<a href="javascript:;" class="btn btn-danger btn-xs m_hapus" data="'+data[i].nip+'">Hapus</a>'+
                      '</td>'+
                      '</tr>';
                    }

                    $('#myTable').html(html);
                    $('#mahasiswa_data').DataTable();
              }
          }); 
      return false;
      } 

    // });

  // Add data
 $(document).on('submit','#form_mahasiswa',function(e){
     e.preventDefault();
     var nim  =$('#nim').val();
     var nama =$('#nama').val();
     var kelas=$('#kelas').val();
    
       if(nama != '' && nim != '')
       {
          $.ajax({
                  url:'<?= base_url; ?>/admin/addData',
                  method:'post',
                  data:{nim:nim,nama:nama,kelas:kelas},
                  success:function (data) {
                    $('#nim').val(''); 
                    $('#nama').val('');
                    $('#kelas').val('');           
                    $('#exampleModalLong').modal('hide');
                    load_data();
                    }
                });
          return false;
       }else{
        alert('Bot fields are required');
        return false;
       } 

    // Hapus
  });
    $(document).on('click','.m_hapus',function () {
         
            var nip = $(this).attr('data');
            if(confirm('Are you sure!.') ){
              $.ajax({
                type:'ajax',
                url:'<?= base_url; ?>/admin/delete/'+nip,
                method: 'get',
                data:{nip:nip},
                success:function (data) {
                  load_data();
                },error:function(){
                  alert('could not add data');
                }
              });
            }else{
              return false;
            }
    });
    //Hapus

});

  



</script>
  </body>
</html>











