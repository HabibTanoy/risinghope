<div class="row">
    <div class="col-md-10">
        <div class="ml-5">
            @if ($errors->any())
                <div class="alert">
                    <ul>
                        <li class="text-danger">{{ $errors->first() }}</li>
                    </ul>
                </div>
            @endif

            @if (\Session::has('success'))
                <div class="alert">
                    <ul>
                        <li class="text-success">{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="{{route('pledges.store')}}" style="margin-left:92px; font-size: 20px" method="POST">
                    {{csrf_field()}}
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-uppercase">Name</span>
                        </div>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-uppercase">Address</span>
                        </div>
                        <input type="text" class="form-control" name="address">
                    </div>

                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-uppercase">city / state / zip</span>
                        </div>
                        <input type="text" class="form-control" name="city_state">
                    </div>

                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-uppercase">Phone</span>
                        </div>
                        <input type="text" class="form-control" name="phone">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-uppercase">Email</span>
                        </div>
                        <input type="text" class="form-control" name="email">
                    </div>

                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-uppercase">total pledge $</span>
                        </div>
                        <input type="text" class="form-control" name="total_pledge">
                    </div>

                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-uppercase">$</span>
                        </div>
                        <input type="text" class="form-control" name="weekly"> Weekly
                        <div class="input-group-prepend">
                            <span class="input-group-text text-uppercase">$</span>
                        </div>
                        <input type="text" class="form-control" name="monthly"> Monthly
                        <div class="input-group-prepend">
                            <span class="input-group-text text-uppercase">$</span>
                        </div>
                        <input type="text" class="form-control" name="other"> Other
                    </div>

                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                    <span class="input-group-text">
                        I/We wish to give to "Forward in Faith" by means of a gift other then cash.
                    </span>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-uppercase">Description</span>
                        </div>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-uppercase">Total $</span>
                        </div>
                        <input type="text" class="form-control" name="total">
                    </div>
                    <br>
                    <div class="input-group mb-1">
                        <button class="btn"
                                type="submit"
                                style="background-color: #e86638;color: white;width: 30%">SUBMIT
                        </button>
                    </div>

                    <div class="input-group mb-1">
                        <small class=" mt-4">1500 W Cowing Dr. Munic, IN 47304 <br>
                            Phone: 765-744-6292 . RisingHopeChurch.com <br>
                            mhewitt@RisingHopeChurch.com</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
