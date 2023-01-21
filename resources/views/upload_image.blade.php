@extends('master')
@section('title')
    <title>jQuery File Uploader </title>
@endsection

@section('custom_css')
    <link href="{{asset('css/jquery.dm-uploader.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
@endsection

@section('content')
    <main role="main" class="container">

        <h1>jQuery File Uploader</h1>
        <div class="alert alert-warning w-50 ps-5" role="alert">
            <p> Mimes =>[ png , jpg , webp ] </p>
            <p> Max Size:2048 </p>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12">

                <!-- Our markup, the important part here! -->
                <div id="drag-and-drop-zone" class="dm-uploader p-5">
                    <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop files here</h3>

                    <div class="btn btn-primary btn-block mb-5">
                        <input id="_token" type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <span>Open the file Browser</span>
                        <input type="file" title='Click to add Files'/>
                    </div>
                </div><!-- /uploader -->

            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card h-100">
                    <div class="card-header">
                        File List
                    </div>

                    <ul class="list-unstyled p-2 d-flex flex-column col" id="files">
                        <li class="text-muted text-center empty">No files uploaded.</li>
                    </ul>
                </div>
            </div>
        </div><!-- /file list -->

        <div class="row">
            <div class="col-12">
                <div class="card h-100">
                    <div class="card-header">
                        Debug Messages
                    </div>

                    <ul class="list-group list-group-flush" id="debug">
                        <li class="list-group-item text-muted empty">Loading plugin....</li>
                    </ul>
                </div>
            </div>
        </div> <!-- /debug -->

    </main> <!-- /container -->

@endsection

@section('custom_js')
    <script src="{{asset('js/jquery.dm-uploader.min.js')}}"></script>
    <script src="{{asset('js/demo-ui.js')}}"></script>
    <script src="{{asset('js/demo-config.js')}}"></script>

    <!-- File item template -->
    <script type="text/html" id="files-template">
        <li class="media">
            <div class="media-body mb-1">
                <p class="mb-2">
                    <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
                </p>
                <div class="progress mb-2">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                         role="progressbar"
                         style="width: 0%"
                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <hr class="mt-1 mb-1"/>
            </div>
        </li>
    </script>

    <!-- Debug item template -->
    <script type="text/html" id="debug-template">
        <li class="list-group-item text-%%color%%"><strong>%%date%%</strong>: %%message%%</li>
    </script>
@endsection

