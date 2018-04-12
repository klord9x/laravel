@auth
<div class="modal fade" id="cardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id= "alert" class="alert alert-danger" style="display: none;">
                </div>
                <form id="pay" class="form-horizontal" method="POST" action="{{ route('pay') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-4 control-label">Username</label>
                        <div class="col-md-12">
                            <input id="username" type="text" class="form-control" name="username" value="{{ Auth::user()->username }}" required>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('cardType') ? ' has-error' : '' }}">
                        <label for="cardType" class="col-md-4 control-label">Card Type:</label>
                        <div class="col-md-12">
                            <select class="form-control" id="cardType" name="cardType">
                                <option value="VTT">Viettel</option>
                                <option value="VNP">VinaPhone</option>
                                <option value="VMS">MobiPhone</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('cardCode') ? ' has-error' : '' }}">
                        <label for="cardCode" class="col-md-4 control-label">Card Code</label>
                        <div class="col-md-12">
                            <input id="cardCode" type="text" class="form-control" name="cardCode" required>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('cardSerial') ? ' has-error' : '' }}">
                        <label for="cardSerial" class="col-md-4 control-label">Card Serial</label>
                        <div class="col-md-12">
                            <input id="cardSerial" type="text" class="form-control" name="cardSerial" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <!-- Rounded switch -->
                                <label class="switch">
                                      <input id= "wallet" type="checkbox" name="plus">
                                      <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="col-md-6" style="padding-left: 5px;">
                                <label for="wallet" class="col-md-12 control-label" style="top: 10px; padding: 0;">Gạch thẻ và cộng tiền vào ví</label>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="submit_pay" type="button" class="btn btn-primary">Pay</button>
            </div>
        </div>
    </div>
</div>
@endauth

<script type="text/javascript">
$(document).ready(function() {

    $('button#submit_pay').click(function() {
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