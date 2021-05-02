@if ($errors->any())
    <div class="alert">
        <ul>
            <li class="text-danger">{{ $errors->first() }}</li>
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-md-12">
        <form action="{{route('pledges.store')}}" style="margin-left:92px; font-size: 20px" method="POST">
            {{csrf_field()}}
            <div class="form-group row">
                <label for="inputPassword" class="col-form-label text-uppercase">Name</label>
                <div class="name">
                    <input type="text" name="name" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-form-label text-uppercase">address</label>
                <div class="address">
                    <input type="text" name="address"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-form-label text-uppercase">city / state / zip</label>
                <div>
                    <input type="text" name="city_state" />
                </div>
            </div>
            <div class="form-group row">
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputPassword" class="col-form-label text-uppercase">phone</label>
                        <input class="phone" type="text" name="phone" />
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="col-form-label text-uppercase">email</label>
                        <input class="email" type="text" name="email" />
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-form-label text-uppercase font-weight-bold">total pledge $</label>
                <div>
                    <input type="text" name="total_pledge"/>
                </div>
            </div>
            <div class="form-group forward-faith">
                <div class="row">
                    <div class="col-md-4">
                        <label for="inputPassword" class="col-form-label text-uppercase">$</label>
                        <input class="dollar" type="text" name="weekly"/>
                    </div>
                    <div class="col-md-4" style="margin-left:-145px">
                        <label for="inputPassword" class="col-form-label">Weekly $</label>
                        <input class="dollar" type="text" name="monthly" />
                    </div>
                    <div class="col-md-4" style="margin-left:-70px">
                        <label for="inputPassword" class="col-form-label">Monthly $</label>
                        <input class="dollar" type="text" name="other" />
                        <span style="margin-left: -10px">Other</span>
                    </div>
                </div>
            </div>
            <p class="forward-faith mt-2">I/We wish to give to "Forward in Faith" by means of </p>
            <div class="row">
                <p class="mr-3">a gift other then cash.</p>
                <div class="form-group">
                    <label for="inputPassword" class="">Description</label>
                    <input class="dollar" type="text" name="description" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-form-label">Total $</label>
                <div>
                    <input class="dollar" type="text" name="total" />
                </div>
            </div>

            <button class="btn row"
                    type="submit"
                    style="background-color: #e86638;color: white">SUBMIT
            </button>
            <p class="footer mt-5">1500 W Cowing Dr. Munic, IN 47304 <br>
                Phone: 765-744-6292 . RisingHopeChurch.com <br>
                mhewitt@RisingHopeChurch.com</p>
        </form>
    </div>
</div>
