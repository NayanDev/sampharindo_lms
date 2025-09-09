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

                                                            <input wire:model="user_id" type="hidden" class="form-control">
                                                            
                                                            <div class="form-group">
                                                                <label>Year</label>
                                                                <input readonly wire:model="year" type="text" placeholder="Enter Training Year" class="form-control">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea wire:model="description" class="form-control" id="" cols="30" rows="10"></textarea>
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
                                    <th>Years</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                    <th>Created</th>
                                    <th class="sorting" width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>TNA - {{ $data->year }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td>{{ $data->description }}</td>
                                        <td>{{ $data->user->name }}</td>
                                        <td><a href="#" class="text-white m-xxs btn btn-rounded-0 btn-xs btn-warning"><i class="fa fa-pencil"></i></a><a wire:click="destroy({{ $data->id }})" class="text-white m-xxs btn btn-rounded-0 btn-xs btn-danger"><i class="fa fa-trash"></i></a><a href="/tna/{{ $data->id }}" class="text-white m-xxs btn btn-rounded-0 btn-xs btn-success"><i class="fa fa-eye"></i></a></td>
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