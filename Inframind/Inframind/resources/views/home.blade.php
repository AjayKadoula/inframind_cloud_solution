@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <p style="text-align:center; font-size:20px; font-weight:bold;">Select One Application environment </p>
                   <form >
                     <label class="radio-inline">
                       <input type="radio" name="optradio" checked>  2 web servers each with 1 cpu, 2 GB memory and 10GB hard disk, with Apache HTTP server software installed
                     </label>
                     <label class="radio-inline">
                       <input type="radio" name="optradio">  1 database server with 1 cpu, 4 GB memory and 30GB hard disk, with MySQL software installed
                     </label>
                     <button type="submit" class="btn btn-default">Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
