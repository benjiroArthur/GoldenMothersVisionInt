@extends('layouts.app')


@section('content')
<br><br><br>
    <div class="row">
        <div class="col-sm-1 col-md-3 col-lg-3"></div>
        <div class="col-sm-1 col-md-6 col-lg-6">
            <form class="form-control form-style text-center" action="{{url('/api/payment')}}" method="post" id="payment-form">
                <div class="form-group">
                    <input class="form-control pay-fields" name="name" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <input class="form-control pay-fields" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control pay-fields" name="phone" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <select class="form-control pay-fields" name="donation_course">
                        <option>General Donation</option>
                        <option>School Projects</option>
                        <option>Face Of Mother Ghana</option>
                        <option>Face Of Golden Mothers</option>
                        <option>Women Empowerment</option>
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control pay-fields" name="amount" placeholder="$   Amount" type="number">
                </div>
                <div class="form-group">
                    <div class="form-row">
                    <h3>Credit Or Debit Card</h3>
                    </div>
                <div class="form-control pay-fields">

                    <div id="card-element" class="pay-fields">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>
                </div>

                <button class="btn btn-primary">Submit Payment</button>
            </form>
        </div>
        <div class="col-sm-1 col-md-3 col-lg-3"></div>
    </div>
    <br><br>


    {{--<script>--}}

        {{--// Create a Stripe client.--}}
        {{--var stripe = Stripe('pk_test_ysYG2YLE6Dlfb2WptP1IYcuV');--}}

        {{--// Create an instance of Elements.--}}
        {{--var elements = stripe.elements();--}}

        {{--var style = {--}}
            {{--base: {--}}
                {{--// Add your base input styles here. For example:--}}
                {{--fontSize: '16px',--}}
                {{--color: "#32325d",--}}
            {{--}--}}
        {{--};--}}


    {{--</script>--}}



@endsection