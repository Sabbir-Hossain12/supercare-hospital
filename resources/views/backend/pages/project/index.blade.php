@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Project Section
@endpush

@push('add-css')
     <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush


@section('body-content')

 <div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Project Table</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_Modal">Add Project</button>
        </div>


        <div class="card-body">
          <div class="table-responsive text-nowrap">
            <table class="table table-bordered" id="projectTables">
              <thead>
                <tr>
                  <th>#SL.</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Social Url</th>
                  <th>Client Bio</th>
                  <th>Status</th>
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


    {{-- Create Project --}}
    <div class="modal fade" id="create_Modal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel3">Create New Project</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="createForm" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col mb-3">
                           <label for="category" class="form-label">Category</label>
                           <input type="text" id="category" name="category" class="form-control" placeholder="category.....">
                        </div>

                        <div class="col mb-3">
                            <label for="client_name" class="form-label">Client Name</label>
                            <input type="text" id="client_name" name="client_name" class="form-control" placeholder="Client Name.....">
                        </div>

                        <div class="col mb-3">
                            <label for="age" class="form-label">Client Age</label>
                            <input type="number" id="age" name="age" class="form-control" placeholder="Age.....">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="title" class="form-label">Project Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Title.....">
                        </div>

                        <div class="col mb-3">
                            <label for="image" class="form-label">Project Image</label>
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="text" id="facebook" name="facebook" class="form-control" placeholder="Facebook Links.....">
                        </div>

                        <div class="col mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" id="instagram" name="instagram" class="form-control" placeholder="Instagram Links.....">
                            </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" id="twitter" name="twitter" class="form-control" placeholder="Twitter Links.....">
                        </div>

                        <div class="col mb-3">
                            <label for="linkedin" class="form-label">Linkedin</label>
                            <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="Linkedin Links.....">
                            </div>
                    </div>

                    <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Write description....."></textarea>
                    </div>

                    <div class="col mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option selected="" disabled value="">Open this select menu</option>
                            <option value="1">Active</option>
                            <option value="2">Deactive</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>


    {{-- Update Category --}}
    <div class="modal fade" id="editModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel3">Update Banner</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="updateForm" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <input type="text" id="up_id" name="id" hidden>

                    <div class="row">
                        <div class="col mb-3">
                           <label for="up_category" class="form-label">Category</label>
                           <input type="text" id="up_category" name="category" class="form-control" placeholder="category.....">
                        </div>

                        <div class="col mb-3">
                            <label for="up_client_name" class="form-label">Client Name</label>
                            <input type="text" id="up_client_name" name="client_name" class="form-control" placeholder="Client Name.....">
                        </div>

                        <div class="col mb-3">
                            <label for="up_age" class="form-label">Client Age</label>
                            <input type="number" id="up_age" name="age" class="form-control" placeholder="Age.....">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="up_title" class="form-label">Project Title</label>
                            <input type="text" id="up_title" name="title" class="form-control" placeholder="Title.....">
                        </div>

                        <div class="col mb-3">
                            <label for="image" class="form-label">Project Image</label>
                            <input class="form-control" type="file" name="image" id="image">

                            <div id="imageShow"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="up_facebook" class="form-label">Facebook</label>
                            <input type="text" id="up_facebook" name="facebook" class="form-control" placeholder="Facebook Links.....">
                        </div>

                        <div class="col mb-3">
                            <label for="up_instagram" class="form-label">Instagram</label>
                            <input type="text" id="up_instagram" name="instagram" class="form-control" placeholder="Instagram Links.....">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="up_twitter" class="form-label">Twitter</label>
                            <input type="text" id="up_twitter" name="twitter" class="form-control" placeholder="Twitter Links.....">
                        </div>

                        <div class="col mb-3">
                            <label for="up_linkedin" class="form-label">Linkedin</label>
                            <input type="text" id="up_linkedin" name="linkedin" class="form-control" placeholder="Linkedin Links.....">
                        </div>
                    </div>

                    <div class="row">
                        <label for="up_description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="up_description" rows="3" placeholder="Write description....."></textarea>
                    </div>

                    <div class="col mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="up_status" name="status">
                            <option selected="" disabled value="">Open this select menu</option>
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                        </button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>

@endsection



@push('custom-script')

 <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

 <script>

     $(document).ready(function(){

        // show all data
        let projectTables = $('#projectTables').DataTable({
            order: [
                [0, 'asc']
            ],
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.get-project') }}",
            // pageLength: 30,

            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'image'
                },
                {
                    data: 'title'
                },
                {
                    data: 'social-links'
                },
                {
                    data: 'client-details'
                },
                {
                    data: 'status'
                },
                {
                    data: 'action'
                }
            ]
        });


        //  Status updates
        $(document).on('click', '#status', function () {
            var id = $(this).data('id');
            var status = $(this).data('status');

            // console.log(id, status);

            $.ajax({
                type: "POST",
                url: "{{ route('admin.project.status') }}",
                data: {
                    // '_token': token,
                    id: id,
                    status: status
                },
                success: function (res) {
                    projectTables.ajax.reload();

                    if (res.status == 1) {
                        swal.fire(
                        {
                            title: 'Status Changed to Active',
                            icon: 'success'
                        })
                    } else {
                        swal.fire(
                        {
                            title: 'Status Changed to Inactive',
                            icon: 'success'
                        })
                    }
                },
                error: function (err) {
                    console.log(err);
                }

            })
        })


        // Create Banner
        $('#createForm').submit(function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.project.store') }}",
                data: formData,
                processData: false,  // Prevent jQuery from processing the data
                contentType: false,  // Prevent jQuery from setting contentType
                success: function (res) {
                    // console.log(res);
                    if (res.status === true) {
                        $('#create_Modal').modal('hide');
                        $('#createForm')[0].reset();
                        projectTables.ajax.reload();

                        swal.fire({
                            title: "Success",
                            text: `${res.message}`,
                            icon: "success"
                        })
                    }
                },
                error: function (err) {
                    console.error('Error:', err);
                    swal.fire({
                        title: "Failed",
                        text: "Something Went Wrong !",
                        icon: "error"
                    })
                }
            });
        })


        // Edit Banner
        $(document).on("click", '#editButton', function (e) {
            let id = $(this).attr('data-id');
            // alert(id);

            $.ajax({
                type: 'GET',
                // headers: {
                //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                // },
                url: "{{ url('admin/project') }}/" + id + "/edit",
                processData: false,  // Prevent jQuery from processing the data
                contentType: false,  // Prevent jQuery from setting contentType
                success: function (res) {
                    let data = res.success;
                    // console.log(data)

                    $('#up_id').val(data.id);
                    $('#up_title').val(data.title);
                    $('#up_category').val(data.category);
                    $('#up_client_name').val(data.client_name);
                    $('#up_age').val(data.age);
                    $('#up_facebook').val(data.facebook);
                    $('#up_instagram').val(data.instagram);
                    $('#up_twitter').val(data.twitter);
                    $('#up_linkedin').val(data.linkedin);
                    $('#imageShow').html('');
                    $('#imageShow').append(`
                        <img src={{ asset("`+ data.image +`") }} alt="" style="width: 75px;">
                    `);
                    $('#up_status').val(data.status);
                    

                    // Destroy any existing CKEditor instance before creating a new one
                    if (window.editor) {
                        window.editor.destroy();
                    }

                    // Initialize CKEditor and set its content
                    ClassicEditor.create(document.querySelector('#up_description'))
                        .then(editor => {
                            window.editor = editor;
                            editor.setData(data.description);
                        })
                        .catch(error => {
                            console.error(error);
                        });

                },
                error: function (error) {
                    console.log('error');
                }

            });
        })


        // Update Banner
        $("#updateForm").submit(function (e) {
            e.preventDefault();

            let id = $('#up_id').val();
            let formData = new FormData(this);

            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('admin/project') }}/" + id,
                data: formData,
                processData: false,  // Prevent jQuery from processing the data
                contentType: false,  // Prevent jQuery from setting contentType
                success: function (res) {

                    swal.fire({
                        title: "Success",
                        text: "Project Edited",
                        icon: "success"
                    })

                    $('#editModal').modal('hide');
                    $('#updateForm')[0].reset();
                    projectTables.ajax.reload();
                },
                error: function (err) {
                    console.error('Error:', err);
                    swal.fire({
                        title: "Failed",
                        text: "Something Went Wrong !",
                        icon: "error"
                    })
                }
            });

        });


        // Delete Banner
        $(document).on("click", "#deleteBtn", function () {
            let id = $(this).data('id')

            swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this !",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            })
            .then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',

                        url: "{{ url('admin/project') }}/" + id,
                        data: {
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        },
                        success: function (res) {
                            Swal.fire({
                                title: "Deleted!",
                                text: `${res.message}`,
                                icon: "success"
                            });

                            projectTables.ajax.reload();
                        },
                        error: function (err) {
                            console.log('error')
                        }
                    })

                } else {
                    swal.fire('Your Data is Safe');
                }

            })
        })

    });

 </script>


<script src="{{asset('https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js')}}"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .then(newEditor => {
            jReq = newEditor;
        })
        .catch(error => {
            console.error(error);
    });
</script>

@endpush
