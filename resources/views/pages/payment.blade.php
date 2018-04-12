<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pay</div>
                <div id= "alert" class="alert alert-danger" style="display: none;">
                </div>
                <div class="panel-body">
                    <form id="pay" class="form-horizontal" method="POST" action="{{ route('pay') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ Auth::user()->username }}" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cardType') ? ' has-error' : '' }}">
                            <label for="cardType" class="col-md-4 control-label">Card Type:</label>
                            <div class="col-md-6">
                                <select class="form-control" id="cardType" name="cardType">
                                    <option value="VTT">Viettel</option>
                                    <option value="VNP">VinaPhone</option>
                                    <option value="VMS">MobiPhone</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cardCode') ? ' has-error' : '' }}">
                            <label for="cardCode" class="col-md-4 control-label">Card Code</label>
                            <div class="col-md-6">
                                <input id="cardCode" type="text" class="form-control" name="cardCode" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cardSerial') ? ' has-error' : '' }}">
                            <label for="cardSerial" class="col-md-4 control-label">Card Serial</label>
                            <div class="col-md-6">
                                <input id="cardSerial" type="text" class="form-control" name="cardSerial" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" checked data-toggle="toggle" data-on="<i class='fa fa-play'></i> Play" data-off="<i class='fa fa-pause'></i> Pause">
                            <div class="col-md-6 col-md-offset-4">
                                <button id = "pay" type="submit" class="btn btn-primary">
                                    Pay
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
$(document).ready(function() {

    $('button#pay').click(function() {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: "{{ route('pay') }}",
            data: $('form#pay').serialize(),
            dataType: 'json',
            success: function(data) {
                console.log(data);
            },
            error: function(data, statusText, xhr) {
                if (statusText == 'error') {
                    $('#alert').empty();
                    $( ".help-block" ).remove();
                    var response = data.responseJSON;
                    var errors = response.errors;
                    if (typeof errors !== 'undefined') {
                        for (name in errors) {
                            message = errors[name][0];
                            if( $('#' + name).length )
                            {
                                $('#' + name).after('<span class="help-block"><strong>' + message + '</strong></span>');
                            } else {
                                $('#alert').append('<strong>Error! '+name.toUpperCase()+'</strong><span> </span>' + message);
                                $('#alert').show();
                            }
                            
                        }
                    }
                } else {
                    location.reload();
                }
            }
        })
    });
})
</script>