<ul class="regis-block clearfix">
    <li class="register"><a class="btnreg" href="#"></a></li>
    <li class="card"><a class="btnquicklogin" href="#"></a></li>
</ul>
<button id="btn_register" type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerModal" data-whatever="@mdo" style="display: none;">Open dmoal for @mdo</button>
<button id="btn_card" type="button" class="btn btn-primary" data-toggle="modal" data-target="#cardModal" data-whatever="@mdo" style="display: none;">Open modal for @mdo</button>
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="register" class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>
                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-4 control-label">Username</label>
                        <div class="col-md-12">
                            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="submit_register" type="button" class="btn btn-primary">Register</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('li.register > a.btnreg').click(function() {
        $('#btn_register').click();
    });

    $('li.card > a.btnquicklogin').click(function() {
        $('#btn_card').click();
    });

    //register
    $('button#submit_register').click(function() {
        $(this).prop('disabled', true);
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: "{{ route('register') }}",
            data: $('form#register').serialize(),
            dataType: 'json',
            success: function(data) {
                //console.log(data);
            },
            error: function(data, statusText, xhr) {
                if (statusText == 'error') {
                    $(".help-block").remove();
                    var response = data.responseJSON;
                    if (typeof response !== 'undefined') {
                        var errors = response.errors;
                        if (typeof errors !== 'undefined') {
                            for (name in errors) {
                                message = errors[name][0];
                                $('#' + name).after('<span class="help-block"><strong>' + message + '</strong></span>');
                            }
                        }
                    }
                } else {
                    location.reload();
                }
            }
        }) //End call ajax

        $(this).prop('disabled', false);
    });
})
</script>