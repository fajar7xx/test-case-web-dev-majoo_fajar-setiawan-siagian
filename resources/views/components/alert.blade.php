<div class="row">
    <div class="col-12">
        @if (session()->exists('success'))
            <div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
                <strong>Success</strong> {{session()->get('success')}}
            </div>
        @elseif(session()->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show" id="alert" role="alert">
                <strong>Failed</strong> {{session()->get('failed')}}
            </div>
        @endif
    </div>
</div>
