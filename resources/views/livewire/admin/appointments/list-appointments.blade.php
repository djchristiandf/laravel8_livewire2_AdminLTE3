<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Appointments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Appointment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        {{-- @if (session()->has('message'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong><i class="fa fa-check-circle mr-1"></i> {{ session('message')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif --}}

        <div class="row">
          <div class="col-lg-12">
              <div class="d-flex justify-content-end mb-2">
                  <a href="{{ route('admin.appointments.create')}}">
                  <button  class="btn btn-primary">
                      <i class="fa fa-plus-circle mr-1"></i>
                      Add New Appointment</button></a>
              </div>
            <div class="card">
              <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Client Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                          <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $appointment->client->name}}</td>
                            <td>{{ $appointment->date->toFormattedDate()}}</td>
                            <td>{{ $appointment->time->toFormattedTime()}}</td>
                            <td>
                                <span class="badge badge-{{$appointment->status_badge   }}">{{ $appointment->status}}</span>
                            </td>
                            {{-- <td>
                                @if ($appointment->status == 'SCHEDULED')
                                    <span class="badge badge-primary">SCHEDULED</span>
                                @else
                                    <span class="badge badge-success">CLOSED</span>
                                @endif
                            </td> --}}
                            <td>
                                <a href="" >
                                    <i class="fa fa-edit mr-2"></i>
                                </a>
                                <a href="" >
                                    <i class="fa fa-trash text-danger"></i>
                                </a>
                            </td>
                           </tr>
                        @endforeach
                    </tbody>
                    </table>
              </div>
              <div class="card-footer d-flex justify-content-end">

              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->{{-- Care about people's approval and you will be their prisoner. --}}



    <!-- Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Delete User</h5>
                </div>

                <div class="modal-body">
                    <h4>Are you sure you want to delete this appointment ?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancel</button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Delete User</button>
                </div>
            </div>
        </div>
    </div>
</div>
