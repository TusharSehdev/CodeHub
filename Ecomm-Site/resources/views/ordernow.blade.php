@extends('master')
@section('content')
    <div class="custom-product">
        <h1>Order Details</h1>
        <div class="col-sm-6">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Price</td>
                        <td>{{ $total }} inr</td>

                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>0 inr</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>{{ $total + 100 }}</td>
                    </tr>
                </tbody>
            </table>
            <form action="/action_page.php">
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea class="form-control"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Payment Method</label>
                    <p>
                        <input type="radio" name="payment">
                        <span>Online Pay</span>
                    </p>
                    <p>
                        <input type="radio" name="payment">
                        <span>COD</span>
                    </p>
                    <p>
                        <input type="radio" name="payment">
                        <span>Credit cart</span>
                    </p>
                    <p>
                        <input type="radio" name="payment">
                        <span>EMI</span>
                    </p>

                </div>
                <button type="submit" class="btn btn-success">Order Now</button>
            </form>

        </div>
    </div>
    </div>
@endsection
