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
                <div class="ibox ">
                    <div class="ibox-content text-center p-md">

                        <h2><span class="text-navy">LMS (Learning Management System)</span></h2>

                        <p>
                            PT Sampharindo
                        </p>

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
