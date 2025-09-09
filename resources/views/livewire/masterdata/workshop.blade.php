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
                                                            <div class="form-group">
                                                                <label>{{ $title }} Name</label>
                                                                <input wire:model="name" type="text" placeholder="Enter {{ $title }} Name" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Department Name</label>
                                                                <select wire:model="department_id" class="form-control m-b">
                                                                            <option>-- Choose Department --</option>
                                                                            @foreach($departments as $data)
                                                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                                            @endforeach
                                                                        </select>
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
                                    <th>Department</th>
                                    <th class="sorting" width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->department->name }}</td>
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