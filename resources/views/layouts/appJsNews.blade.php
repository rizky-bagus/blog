<script>
  function NewsEdit(id)
  {
    console.log(id);
    // $('.news').hide();
    $('#newsEditModal').modal('show');
    // $('.NewsEdit').attr('hidden',false);
    $.ajax({
        url:baseUrl+'news/edit/'+id,
        type:'get',
        cache: true,
        contentType: false,
        processData: false,
        async:false,
        dataType: 'json',
        success:function(data){
          console.log(data.category_id);
          $('input#id').val(data.id);
          $('input#author').val(data.author);
          $('input#title').val(data.title);
          $('textarea#description').val(data.description);
          $('input#image').val(data.image);
          $('textarea#content').val(data.content);
          $('input#category_id').val(data.category_id);
        },
        complete: function() {
            // $('#indexCategory').attr('hidden', false);
        }
    });
  }
  $('.myFormEdit').submit(function(e){
      var formData    = new FormData($('.myFormEdit')[0]);
      var id = formData.get('id');
      e.preventDefault();
      $.ajax({
          url:baseUrl+'news/'+id,
          type:'post',
          data:formData,
          cache: true,
          contentType: false,
          processData: false,
          async:false,
          dataType: 'json',
          success:function(respone){
              swal("Berhasil!", "Edit News!", "success");
              $('#newsEditModal').modal('hide');
              $('#TableNews').DataTable().ajax.reload();
          },
          complete: function() {
              $('.myFormEdit')[0].reset();
          }
      });
  });
</script>

<script>
  function NewsPublish(id)
  {
    console.log(id);
    // $('.news').hide();
    $('#newsPublishModal').modal('show');
    // $('.NewsEdit').attr('hidden',false);
    $.ajax({
        url:baseUrl+'news/edit/'+id,
        type:'get',
        cache: true,
        contentType: false,
        processData: false,
        async:false,
        dataType: 'json',
        success:function(data){
          console.log(data.category_id);
          $('input#id').val(data.id);
          $('input#author').val(data.author);
          $('input#title').val(data.title);
          $('textarea#description').val(data.description);
          $('input#image').val(data.image);
          $('textarea#content').val(data.content);
          $('input#category_id').val(data.category_id);
        },
        complete: function() {
            // $('#indexCategory').attr('hidden', false);
        }
    });
  }
  $('.myFormPublish').submit(function(e){
      var formData    = new FormData($('.myFormPublish')[0]);
      var id = formData.get('id');
      e.preventDefault();
      $.ajax({
          url:baseUrl+'news/publish/'+id,
          type:'post',
          data:formData,
          cache: true,
          contentType: false,
          processData: false,
          async:false,
          dataType: 'json',
          success:function(respone){
              swal("Berhasil!", "Publish News!", "success");
              $('#newsPublishModal').modal('hide');
              $('#TableNews').DataTable().ajax.reload();
          },
          complete: function() {
              $('.myFormPublish')[0].reset();
          }
      });
  });
</script>

<script>
  function NewsDelete(id)
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
              url:baseUrl+'news/'+id,
              type:'delete',
              cache: true,
              contentType: false,
              processData: false,
              async:false,
              dataType: 'json',
              success:function(respone){
              swal("Berhasil menghapus news!", {
                icon: "success",
              });
          },
          complete: function() {
              $('#TableNews').DataTable().ajax.reload();
          }
          });
        } else {
        }
      });
  }
</script>