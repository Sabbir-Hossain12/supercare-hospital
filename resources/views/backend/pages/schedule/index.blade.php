@extends('backend.layout.master')

@push('meta-title')
    Dashboard | Schedule Section
@endpush

@push('add-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush


@section('body-content')

    <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Service Table</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_Modal">Add Schedule</button>
            </div>


            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered" id="scheduleTable">
                        <thead>
                        <tr>
                            <th>#SL.</th>
                            <th>Schedule Icon</th>
                            <th>Schedule title 1</th>
                            <th>Schedule title 2</th>
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


    {{-- Create Service --}}
    <div class="modal fade" id="create_Modal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Create New Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form id="createForm" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="mb-3">
                                <label for="service_title" class="form-label">Schedule Title 1</label>
                                <input type="text"  name="schedule_title_1" class="form-control" placeholder="Banner Title">
                            </div> 
                            <div class="mb-3">
                                <label for="service_title" class="form-label">Schedule Title 2</label>
                                <input type="text"  name="schedules_title_2" class="form-control" placeholder="Banner Title">
                            </div>
                            

                            <div class="mb-3">
                                <label for="service_icon" class="form-label">Schedule Icon</label>
                                <input type="file"  name="schedules_icon" class="form-control" placeholder="Banner Title">
                            </div>

                            <div class="mb-3">
                                <label for="service_desc" class="form-label">Schedule Description</label>
                                <textarea name="schedules_desc" id="scheduleDesc"  class="form-control" cols="30" rows="10"></textarea>
                            </div>

                            

                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- Update Category --}}
    <div class="modal fade" id="editModal" tabindex="-1" style="display: none;">
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

                            <div class="mb-3">
                                <label for="service_title" class="form-label">Schedule Title 1</label>
                                <input type="text"  name="schedule_title_1" id="schedule_title_1" class="form-control" placeholder="Banner Title">
                            </div>
                            <div class="mb-3">
                                <label for="service_title" class="form-label">Schedule Title 2</label>
                                <input type="text"  name="schedules_title_2" id="schedules_title_2" class="form-control" placeholder="Banner Title">
                            </div>


                            <div class="mb-3">
                                <label for="service_icon" class="form-label">Schedule Icon</label>
                                <input type="file" id="schedules_icon"  name="schedules_icon" class="form-control" placeholder="Banner Title">
                                <img class="mt-2" id="scheduleIcon" src="" width="80" height="50" alt="">
                            </div>

                            <div class="mb-3">
                                <label for="service_desc" class="form-label">Schedule Description</label>
                                <textarea name="schedules_desc" id="scheduleDesc2"  class="form-control" cols="30" rows="10"></textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



@push('custom-script')

    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="{{asset('https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js')}}"></script>
    

    <script>

        $(document).ready(function(){
            let jReq;
            // Ckeditor 5
            ClassicEditor
                .create(document.querySelector('#scheduleDesc'))
                .then(newEditor => {
                    jReq = newEditor;
                })
                .catch(error => {
                    console.error(error);
                });

            let data;
            // Ckeditor 5
            ClassicEditor
                .create(document.querySelector('#scheduleDesc2'))
                .then(newEditor => {
                    data = newEditor;
                })
                .catch(error => {
                    console.error(error);
                });
            
            

            // show all data
            let scheduleTable = $('#scheduleTable').DataTable({
                order: [
                    [0, 'asc']
                ],
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.get-schedule') }}",
                // pageLength: 30,

                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'scheduleImage'
                    }, 
                    {
                        data: 'schedule_title_1'
                    }, 
                    {
                        data: 'schedules_title_2'
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
                    url: "{{ route('admin.schedule.status') }}",
                    data: {
                        // '_token': token,
                        id: id,
                        status: status
                    },
                    success: function (res) {
                        scheduleTable.ajax.reload();

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

            // Create Service
            $('#createForm').submit(function (e) {
                e.preventDefault();
                const scheduleDesc = jReq.getData();
                let formData = new FormData(this);
                formData.append('schedules_desc', scheduleDesc);
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('admin.schedule.store') }}",
                    data: formData,
                    processData: false,  // Prevent jQuery from processing the data
                    contentType: false,  // Prevent jQuery from setting contentType
                    success: function (res) {
                        // console.log(res);
                        if (res.message == 'success') {
                            $('#create_Modal').modal('hide');
                            $('#createForm')[0].reset();
                            scheduleTable.ajax.reload();

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


                $.ajax({
                    type: 'GET',
                    // headers: {
                    //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    // },
                    url: "{{ url('admin/schedule') }}/" + id + "/edit",
                    processData: false,  // Prevent jQuery from processing the data
                    contentType: false,  // Prevent jQuery from setting contentType
                    success: function (res) {
                        // let data = res.success;
                        // console.log(data)


                        // $('#editModal').modal('show');
                        $('#up_id').val(res.data.id);
                        $('#schedule_title_1').val(res.data.schedule_title_1);
                        $('#schedules_title_2').val(res.data.schedules_title_2);
                        // $('#scheduleDesc2').val(res.data.schedules_desc);
                        data.setData(res.data.schedules_desc);
                       $('#scheduleIcon').attr('src','{{asset('')}}' + res.data.schedules_icon);
                        
                       


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
                let schedules_desc=data.getData();
                let formData = new FormData(this);
                formData.append('schedules_desc', schedules_desc);
                

                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ url('admin/schedule') }}/" + id,
                    data: formData,
                    processData: false,  // Prevent jQuery from processing the data
                    contentType: false,  // Prevent jQuery from setting contentType
                    success: function (res) {

                        swal.fire({
                            title: "Success",
                            text: "Schedule Edited",
                            icon: "success"
                        })

                        $('#editModal').modal('hide');
                        $('#updateForm')[0].reset();
                        scheduleTable.ajax.reload();
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

                                url: "{{ url('admin/schedule') }}/" + id,
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

                                    scheduleTable.ajax.reload();
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

@endpush
