<div class="box content">
    <h2 class="text-center">Customer Login</h2>
    <div class="content-detail-wrap">
        <form method="post" action="{{ url('/frontend/customers/login') }}">
            {{ csrf_field() }}
            <input type="hidden" name="the_referer" value="{{ $the_referer }}">
            <div class="field">
                <label for="staticEmail" class="label">Email</label>
                <div class="control">
                    <input type="text" class="input w-100" id="staticEmail" name="email" placeholder="email@example.com">
                </div>
                @if ($errors->has('email'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry!</strong> {{ $errors->first('email') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="field">
                <label for="inputPassword" class="label">Password</label>
                <div class="control">
                    <input type="password" class="input w-100" id="inputPassword" name="password" placeholder="Password">
                </div>
                @if ($errors->has('password'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry!</strong> {{ $errors->first('password') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-6">
                    <a class="customer-btn cancel text-center" href="{{ url('frontend/customers/forget-password') }}">Forget Password</a>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="customer-btn confirm">Log Me In</button>
                </div>
            </div>
        </form>
    </div>
</div>