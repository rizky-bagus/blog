$(document).ready(function(){
  $('#TableCategory').DataTable( {
    responsive: true,
    ajax: {
        url: baseUrl+'category',
        dataType: "json",
        type: "GET",
        serverSide: true,
        processing: true,
    },
    columns: [
        { data: "id" },
        { data: "category" },
        { data: "id", 
          "render" : function ( id, row, data, type ) {
              return '<div class="btn-group mr-1 mb-1">'+
                       '<button type="button" class="btn btn-icon btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                          '<i class="la la-navicon"></i>'+
                       '</button>'+
                       '<ul class="dropdown-menu">'+
                          '<li><a onclick="CategoryEdit('+id+')" id="CategoryEdit">Edit</a></li>'+
                          '<li><a onclick="CategoryDelete('+id+')" id="CategoryDelete">Delete</a></li>'+
                       '</ul>'+
                     '</div>'
            
            }
        },
    ]
  });

  
  $('#createData').submit(function(e){
      var formData    = new FormData($('#createData')[0]);
      e.preventDefault();
      $.ajax({
          url:baseUrl+'category',
          type:'POST',
          data:formData,
          cache: true,
          contentType: false,
          processData: false,
          async:true,
          dataType: 'json',
          success:function(response){
              swal("Berhasil!", "Tambah Data Category !", "success");
              $('#categoryModal').modal('hide');
              $('#TableCategory').DataTable().ajax.reload();
          },
          complete: function() {
              $("#indexCategory").show();
              $("#createData")[0].reset();
          }
      });
  });


});
