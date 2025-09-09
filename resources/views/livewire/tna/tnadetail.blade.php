<div>
    <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>{{ $title }}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">{{ env('APP_NAME') }}</a>
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
            <div class="col-lg-7">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Detail Training Need</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="form-group">
                                                                <label>Year</label>
                                                                <input readonly wire:model="year" type="text"
                                                                            placeholder="Enter First Name"
                                                                            class="form-control">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Remake</label>
                                                                <textarea wire:model="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                                            </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-5">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>TNA Percentage</h5>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="doughnutChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="ibox ">
                        <div class="ibox-content">
                            <button class="text-white btn rounded-0 btn-success">Recap Training</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Training Planned</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="d-flex m-b-md">
                            <button class="text-white btn rounded-0 btn-success" data-toggle="modal" href="#modal-form">Add {{ $title }}</button>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Years</th>
                                    <th>Status</th>
                                    <th>Note</th>
                                    <th>Created</th>
                                    <th class="sorting" width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($datas as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->department->name }}</td>
                                        <td>{{ $data->position->name }}</td>
                                        <td>{{ $data->qualification->name }}</td>
                                        <td><a href="#" class="text-white m-xxs btn btn-rounded-0 btn-xs btn-warning"><i class="fa fa-pencil"></i></a><a wire:click="destroy({{ $data->id }})" class="text-white m-xxs btn btn-rounded-0 btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Training Unplanned</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="d-flex m-b-md">
                            <button class="text-white btn rounded-0 btn-success" data-toggle="modal" href="#modal-form">Add {{ $title }}</button>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Years</th>
                                    <th>Status</th>
                                    <th>Note</th>
                                    <th>Created</th>
                                    <th class="sorting" width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($datas as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->department->name }}</td>
                                        <td>{{ $data->position->name }}</td>
                                        <td>{{ $data->qualification->name }}</td>
                                        <td><a href="#" class="text-white m-xxs btn btn-rounded-0 btn-xs btn-warning"><i class="fa fa-pencil"></i></a><a wire:click="destroy({{ $data->id }})" class="text-white m-xxs btn btn-rounded-0 btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                @endforeach --}}
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