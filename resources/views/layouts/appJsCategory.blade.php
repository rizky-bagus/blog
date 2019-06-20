<script>
  function CategoryDelete(id)
  {
      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((result) => {
        if (result) {
          $.ajax({
              url:baseUrl+'category/'+id,
              type:'delete',
              cache: true,
              contentType: false,
              processData: false,
              async:false,
              dataType: 'json',
              success:function(respone){
              swal("Berhasil menghapus Category!", {
                icon: "success",
              });
          },
          complete: function() {
              $('#TableCategory').DataTable().ajax.reload();
          }
          });
        } else {

        }
      });
  }
</script>

<script>
  function CategoryEdit(id)
  {
    console.log(id);
    // $('.news').hide();
    $('#categoryEditModal').modal('show');
    // $('.NewsEdit').attr('hidden',false);
    $.ajax({
        url:baseUrl+'category/edit/'+id,
        type:'get',
        cache: true,
        contentType: false,
        processData: false,
        async:false,
        dataType: 'json',
        success:function(data){
          console.log(data.category);
          $('input#id').val(data.id);
          $('input#category').val(data.category);
        },
        complete: function() {
            // $('#indexCategory').attr('hidden', false);
        }
    });
  }
  $('.myFormEditCategory').submit(function(e){
      var formData    = new FormData($('.myFormEditCategory')[0]);
      var id = formData.get('id');
      e.preventDefault();
      $.ajax({
          url:baseUrl+'category/'+id,
          type:'post',
          data:formData,
          cache: true,
          contentType: false,
          processData: false,
          async:false,
          dataType: 'json',
          success:function(respone){
              swal("Berhasil!", "Edit Category!", "success");
              $('#categoryEditModal').modal('hide');
              $('#TableCategory').DataTable().ajax.reload();
          },
          complete: function() {
              $('.myFormEditCategory')[0].reset();
          }
      });
  });
</script>