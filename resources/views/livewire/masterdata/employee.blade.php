<div>
    <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>{{ $title }}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">{{ env('APP_NAME') }}</a>
            </li>
            <li class="breadcrumb-item">
                {{ $parent_menu }}
            </li>
            <li class="breadcrumb-item active">
                <strong>{{ $title }}</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content p-5">
                    <div class="d-flex m-b-md">
                        <div class="d-flex m-b-md">
                            <button class="text-white btn rounded-0 btn-success" data-toggle="modal" href="#modal-form">Add {{ $title }}</button>
                        </div>

                                <div id="modal-form" class="modal fade" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h3 class="m-t-none m-b">Add {{ $title }}</h3>

                                                        <form wire:submit.prevent="store" role="#">
                                                            
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>First Name</label>
                                                                        <input wire:model="first_name" type="text"
                                                                            placeholder="Enter First Name"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Last Name</label>
                                                                        <input wire:model="last_name" type="text"
                                                                            placeholder="Enter Last Name"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input wire:model="email" type="text"
                                                                            placeholder="Enter Email"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Phone</label>
                                                                        <input wire:model="phone_number" type="number"
                                                                            placeholder="Enter Phone Number"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Gender</label>
                                                                        <select wire:model="gender" class="form-control m-b">
                                                                            <option>-- Choose Gender --</option>
                                                                            <option value="L">Male</option>
                                                                            <option value="P">Female</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Department</label>
                                                                        <select wire:model="department_id" class="form-control m-b">
                                                                            <option>-- Choose Department --</option>
                                                                            @foreach($departments as $data)
                                                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Position</label>
                                                                        <select wire:model="position_id" class="form-control m-b">
                                                                            <option>-- Choose Position --</option>
                                                                            @foreach($positions as $data)
                                                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Qualification</label>
                                                                        <select wire:model="qualification_id" class="form-control m-b">
                                                                            <option>-- Choose Qualification --</option>
                                                                            @foreach($qualifications as $data)
                                                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="button-group pull-right">
                                                                    <button class="btn btn-sm btn-success m-t-n-xs"
                                                                        type="submit"><strong>Submit</strong></button>
                                                                    <button class="btn btn-sm btn-danger m-t-n-xs"
                                                                        data-dismiss="modal"><strong>Cancel</strong></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Position</th>
                                    <th>Qualification</th>
                                    <th class="sorting" width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->department->name }}</td>
                                        <td>{{ $data->position->name }}</td>
                                        <td>{{ $data->qualification->name }}</td>
                                        <td><a href="#" class="text-white m-xxs btn btn-rounded-0 btn-xs btn-warning"><i class="fa fa-pencil"></i></a><a wire:click="destroy({{ $data->id }})" class="text-white m-xxs btn btn-rounded-0 btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script type="text/javascript">
    
</script>
@endpush
</div>