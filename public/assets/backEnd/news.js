$(document).ready(function(){
  $('#TableNews').DataTable( {
    responsive: true,
    ajax: {
        url: baseUrl+'news',
        dataType: "json",
        type: "GET",
        serverSide: true,
        processing: true,
    },
    columns: [
        { data: "id" },
        { data: "author" },
        { data: "title" },
        { data: "image",
          "render" : function ( url, type, full) {
          return '<img height="50" width="50" src="'+url+'"/>';
          }
        },
        { data: "category_id" },
        { data: "status", 
        "render" : function ( id, row, data, type) {
          if (data.status == 0) {
            return '<button class="btn btn-danger" disabled="disabled">Unpublish</button>'
          } else {
            return '<button class="btn btn-success" disabled="disabled">Publish</button>'
          }        
          } 
         },
        { data: "id", 
          "render" : function ( id, row, data, type ) {
            if (data.status == 0) {
              return '<div class="btn-group mr-1 mb-1">'+
                       '<button type="button" class="btn btn-icon btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                          '<i class="la la-navicon"></i>'+
                       '</button>'+
                       '<ul class="dropdown-menu">'+
                          '<li><a onclick="NewsPublish('+id+')" id="NewsPublish">Publish</a></li>'+
                          '<li><a onclick="NewsEdit('+id+')" id="NewsEdit">Edit</a></li>'+
                          '<li><a onclick="NewsDelete('+id+')" id="NewsDelete">Delete</a></li>'+
                       '</ul>'+
                     '</div>'
            } else {
              return '<div class="btn-group mr-1 mb-1">'+
                       '<button type="button" class="btn btn-icon btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                          '<i class="la la-navicon"></i>'+
                       '</button>'+
                       '<ul class="dropdown-menu">'+
                          '<li><a onclick="NewsEdit('+id+')" id="NewsEdit">Edit</a></li>'+
                          '<li><a onclick="NewsDelete('+id+')" id="NewsDelete">Delete</a></li>'+
                       '</ul>'+
                     '</div>'
            }
            }
        },
    ]
  });

  $.get(baseUrl+'category', function(data) {
    $('#selectCategory').empty();
    $('#selectCategory').append(  
      '<option value="0">Pilih Category</option>'
    );

      // console.log(); 
    $.each(data.data, function(index, value) {
      $('#selectCategory').append(
        '<option value="'+value.id+'">'+value.category+'</option>'
      );
    })
  });

  $('#createData').submit(function(e){
      var formData    = new FormData($('#createData')[0]);
      e.preventDefault();
      $.ajax({
          url:baseUrl+'news',
          type:'POST',
          data:formData,
          cache: true,
          contentType: false,
          processData: false,
          async:true,
          dataType: 'json',
          success:function(response){
              swal("Berhasil!", "Tambah Data News!", "success");
              $('#newsModal').modal('hide');
              $('#TableNews').DataTable().ajax.reload();
          },
          complete: function() {
              $("#indexNews").show();
              $("#createData")[0].reset();
          }
      });
  });


});
