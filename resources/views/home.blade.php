@extends('layout')

@section('title')
Главная станица
@endsection

@section('main_content')
<div class="pricing-header p-3 pb-md-4 mx-auto text-center text-white">
    <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
    <p class="fs-5 text-white">Quickly build an effective pricing table for your potential customers with this
        Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
</div>

</div>

<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <!-- // for:?> -->
    <?php for($i = 0; $i <= 5; $i++):?>

    <div class="col">
        <div class="card m-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Free</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$<?php echo $i+1?>
                    <small class="text-body-secondary fw-light">/mo</small>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
            </div>
        </div>

    </div>
    <?php endfor ?>

</div>
@endsection