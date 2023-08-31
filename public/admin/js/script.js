$(document).ready(function(){
    $("#current_password").keyup(function(){
        var current_password = $("#current_password").val();

        $.ajax({
            headers:{
                'X-CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/check-admin-password',
            data:{current_password:current_password},
            success:function(resp){
                if(resp=="false"){
                    $("#check_password").html("<font color='red'>Current Password is incorrect</font>");
                }else if(resp="true"){
                    $("#check_password").html("<font color='green'>Current Password is Correct!</font>");
                }
            },error:function(){
                alert('Error');
            }
        })
    })

    // Update Status Data

    $(document).on("click",".updateAdminStatus",function(){
        var status = $(this).children("i").attr("status");
        var admin_id = $(this).attr("admin_id");
        // alert(admin_id);
        $.ajax({
            headers:{
                'X-CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-admin-status',
            data: {status:status,admin_id:admin_id},
            success:function(resp){
                // alert(resp);
                if(resp['status']==0){
                    $("#admin-"+admin_id).html("<i class='fa fa-toggle-off' aria-hidden='true' status='Inactive'></i>")
                }else if(resp['status']==1){
                    $("#admin-"+admin_id).html("<i class='fa fa-toggle-on' aria-hidden='true' status='Active'></i>")
                }
            },error:function(){
                alert('Error');
            }
        })
    });
    $(document).on("click",".updateSectionStatus",function(){
        var status = $(this).children("i").attr("status");
        var section_id = $(this).attr("section_id");
        // alert(section_id);
        $.ajax({
            headers:{
                'X-CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-section-status',
            data: {status:status,section_id:section_id},
            success:function(resp){
                // alert(resp);
                if(resp['status']==0){
                    $("#section-"+section_id).html("<i class='fa fa-toggle-off' aria-hidden='true' status='Inactive'></i>")
                }else if(resp['status']==1){
                    $("#section-"+section_id).html("<i class='fa fa-toggle-on' aria-hidden='true' status='Active'></i>")
                }
            },error:function(){
                alert('Error');
            }
        })
    });

    // $(".confirmDelete").click(function(){
    //     var title = $(this).attr("title");
    //     if(confirm("Are you sure you want to delete this "+title+" ?")){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // })
    $(".confirmDelete").click(function(){
        var module = $(this).attr('module');
        var moduleid = $(this).attr('moduleid');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/admin/delete-"+module+"/"+moduleid;
            }
        })
    })



    $('#updateModal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)
    var name = button.data('section')
    var id = button.data('id')
    var modal = $(this)

    modal.find('.modal-body #name').val(name);
    modal.find('.modal-body #section-id').val(id);
    });

    // Change Category Status
    $(document).on("click",".updateCategoryStatus",function(){
        var status = $(this).children("i").attr("status");
        var category_id = $(this).attr("category_id");
        // alert(category_id);
        $.ajax({
            headers:{
                'X-CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-category-status',
            data: {status:status,category_id:category_id},
            success:function(resp){
                // alert(resp);
                if(resp['status']==0){
                    $("#category-"+category_id).html("<i class='fa fa-toggle-off' aria-hidden='true' status='Inactive'></i>")
                }else if(resp['status']==1){
                    $("#category-"+category_id).html("<i class='fa fa-toggle-on' aria-hidden='true' status='Active'></i>")
                }
            },error:function(){
                alert('Error');
            }
        })
    });
});
