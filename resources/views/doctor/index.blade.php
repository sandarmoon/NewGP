@extends('frontendTemplate')
@section('content')
<div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-header border-0">
          @role('Admin')
          <h3 class="mb-0">Doctor List</h3>
            <a class="btn btn-primary btn-sm float-right " href="{{route('doctor.create')}}">Add Doctor</a>
            @endrole
          @if( Session::has("success") )
          <div class="alert alert-success alert-block" role="alert">
              <button class="close" data-dismiss="alert"></button>
              {{ Session::get("success") }}
          </div>
          @endif
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-white table-flush"  id="doctorTable">
            <thead class="thead-light">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Clinic</th>
                <th>Treatment Count</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                  
            </tbody>
          </table>
        </div>	
      </div>

    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  $('document').ready(function(){
    getData();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // function getData(){
        //   console.log('you make it');
        //   $.get("{{route('getDoctor')}}",function(response){
        //     var j=1;
        //     var html='';
        //     $.each(response,function(i,v){
        //       console.log(v);
        //             html+=`<tr>
        //                       <td>${j++}</td>
        //                       <td>${v.doctorinfo.name}</td>
        //                       <td>${v.doctorinfo.email}</td>
        //                       <td>${v.doctor.phone}</td>
        //                       <td>${v.ownerinfo.clinic_name}</td>
        //                       <td>
        //                          <a href='' class="btn btn-primary btn-sm d-inline-block btnEdit " data-id="${v.doctor.id}"><i class="ni ni-settings"></i></a>
        //                          <a href="" class="btn btn-warning btn-sm d-inline-block btnDetail " data-id="${v.doctor.id}"><i class="ni ni-collection"></i></a>
        //                         <button  class="btn btn-danger btn-sm d-inline-block btnDelete " data-id="${v.doctor.id}" data-userid="${v.doctorinfo.id}"> <i class="ni ni-fat-delete"></i></button>

                                 
        //                       </td>

        //                   </tr>`;

        //           })

        //     $('#doctorTable').html(html);
        //   })
        // }

        //start the datatable js
          function getData(){
            var i=1;
                $('#doctorTable').DataTable({
                "serverSide": true,
                "processing": true,
                destroy:true,
                "sort":false,
                pagingType: 'full_numbers',
                 pageLength: 10,
                 language: {
                   oPaginate: {
                     sNext: '<i class="fa fa-forward"></i>',
                     sPrevious: '<i class="fa fa-backward"></i>',
                     sFirst: '<i class="fa fa-step-backward"></i>',
                     sLast: '<i class="fa fa-step-forward"></i>'
                     }
                   } ,
                   
                   
                 
                "ajax": "{{route('getDoctor')}}",
                "columns":[

                     {"data":"DT_RowIndex"},
                    { "data": "doctorinfo.name",
                    render:function(data){
                      $('.btnEdit').attr('data-name', data);
                      return data;
                    } },
                    {"data":"doctorinfo.email"},
                    {"data":"doctor.phone"},
                    {"data":"ownerinfo.clinic_name"},
                     {"data":"treatments_count"},
                    { "data": "doctor.id",
                      sortable:false,
                      render:function(data){
                        return `
                        @role('Admin')
                        <button class="btn btn-primary btn-sm d-inline-block btnEdit "  data-id="${data}"><i class="ni ni-settings"></i></button>
                        @endrole
                        <button class="btn btn-warning btn-sm d-inline-block btnDetail "  data-id="${data}"><i class="ni ni-circle-08"></i></button>
                        @role('Admin')
                                  <button class="btn btn-danger btn-sm d-inline-block btnDelete " data-id="${data}"> <i class="ni ni-fat-delete"></i></button> @endrole`;
                                 
                      }
                     }
                ],
                "info":false
                
             });
        }
        //end the datatable js

   
        //Edit

        $('#doctorTable').on('click','.btnEdit',function(){
          //alert('helo');
          var id=$(this).data('id');
          var url="{{route('doctor.edit',':id')}}";
      
          url=url.replace(':id',id);
          // $(this).attr('href',url);
          window.location.href=url;
        })

        $('#doctorTable').on('click','.btnDelete',function(){
            if(confirm('Are you sure to delete?')){
              var id=$(this).data('id');
              var url="{{route('doctor.destroy',':id')}}";
          
               url=url.replace(':id',id);
               
               $.ajax({
                  url:url,
                  type:"post",
                  data:{"_method": 'DELETE'},
                  dataType:'json',
                  success:function(res){
                    if(res.success){
                    $('.success').removeClass('d-none');
                    $('.success').addClass('text-danger');
                        $('.success').show();
                        $('.success').text('successfully Deleted');
                        $('.success').fadeOut();
                        getData();

                    }},
                    

                });
            }
          
        })

        $('#doctorTable').on('click','.btnDetail',function(){
             var id=$(this).data('id');
             console.log(id);;
            var url="{{route('doctor.show',':id')}}";
        
             url=url.replace(':id',id);
            
          window.location.href=url;
        
        })
     
    })


 
</script>

@endsection
