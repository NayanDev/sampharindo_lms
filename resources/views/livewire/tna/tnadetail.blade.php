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
        <div class="col-lg-2"></div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Detail Training Need</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="form-group">
                            <label>Year</label>
                            <input readonly wire:model="year" type="text" placeholder="Enter First Name"
                                class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Remake</label>
                            <textarea wire:model="description" class="form-control" id="" cols="30"
                                rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>TNA Percentage</h5>
                    </div>
                    <div class="ibox-content"></div>
                </div>
                <div class="ibox">
                    <div class="ibox-content">
                        <a href="{{ route('tna.recap', ['id' => 1]) }}" class="text-white btn rounded-0 btn-success">
                            Recap Training
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Training Planned</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="d-flex m-b-md">
                            <button class="text-white btn rounded-0 btn-success" data-toggle="modal" href="#modal-planned">
                                Add {{ $title }}
                            </button>
                            <button class="text-white btn rounded-0 btn-warning">
                                Print
                            </button>
                        </div>
                        <div id="modal-planned" class="modal fade" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-none m-b">Add {{ $title }}</h3>

                                                <form wire:submit.prevent="store" role="#">
                                                    <input wire:model="planned" type="hidden" class="form-control">
                                                    <div class="form-group">
                                                        <label>Participant</label>
                                                        <select wire:model="department_id" class="form-control m-b">
                                                            <option>-- Choose Participant --</option>
                                                        {{-- @foreach($departments as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Workshop</label>
                                                        <select wire:model="department_id" class="form-control m-b">
                                                            <option>-- Choose Workshop --</option>
                                                        {{-- @foreach($departments as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Date Workshop</label>
                                                        <input wire:model="first_name" type="date" placeholder="Enter Date Workshop" class="form-control">
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
                        <div class="table-responsive">
                            <table class="table table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Workshop</th>
                                        <th>Employee</th>
                                        <th>Department</th>
                                        <th>Workshop Date</th>
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
                                        <td>
                                            <a href="#" class="text-white m-xxs btn btn-rounded-0 btn-xs btn-warning"><i
                                                    class="fa fa-pencil"></i></a><a
                                                wire:click="destroy({{ $data->id }})"
                                                class="text-white m-xxs btn btn-rounded-0 btn-xs btn-danger"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                                <tfoot></tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Training Unplanned</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="d-flex m-b-md">
                            <button class="text-white btn rounded-0 btn-success" data-toggle="modal" href="#modal-unplanned">
                                Add {{ $title }}
                            </button>
                        </div>
                        <div id="modal-unplanned" class="modal fade" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-none m-b">Add {{ $title }}</h3>

                                                <form wire:submit.prevent="store" role="#">
                                                    <input wire:model="unplanned" type="hidden" class="form-control">
                                                    <div class="form-group">
                                                        <label>Participant</label>
                                                        <select wire:model="department_id" class="form-control m-b">
                                                            <option>-- Choose Participant --</option>
                                                        {{-- @foreach($departments as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Workshop</label>
                                                        <select wire:model="department_id" class="form-control m-b">
                                                            <option>-- Choose Workshop --</option>
                                                        {{-- @foreach($departments as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}
                                                            </option>
                                                            @endforeach --}}
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Date Workshop</label>
                                                        <input wire:model="first_name" type="date" placeholder="Enter Date Workshop" class="form-control">
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
                        <div class="table-responsive">
                            <table class="table table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Workshop</th>
                                        <th>Employee</th>
                                        <th>Department</th>
                                        <th>Workshop Date</th>
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
                                        <td>
                                            <a href="#" class="text-white m-xxs btn btn-rounded-0 btn-xs btn-warning"><i
                                                    class="fa fa-pencil"></i></a><a
                                                wire:click="destroy({{ $data->id }})"
                                                class="text-white m-xxs btn btn-rounded-0 btn-xs btn-danger"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                                <tfoot></tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
    <script type="text/javascript"></script>
    @endpush
</div>