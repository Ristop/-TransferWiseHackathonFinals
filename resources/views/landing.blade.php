@extends('layouts.layout')

@section('content')
    <div class="section-main-first">
        <div class="img-responsive">
            <img src="img/sample2.jpg">
        </div>
        <div class="section-main-first-content">
            <div class="Buyer col-md-6 col-xs-6">
                <p class="pull-right">Client</p>
            </div>
            <div class="Vendor col-md-6 col-xs-6">
                <p class="pull-left">Vendor</p>
            </div>
        </div>

        <!-- STEPS -->
        <section id="Steps" class="steps-section">

            <h1 class="steps-header">
                OUR PROCESS
            </h1>

            <div class="steps-timeline">

                <div class="steps-one">
                    <img class="steps-img" src="http://placehold.it/50/3498DB/FFFFFF" alt="" />
                    <h3 class="steps-name">
                        Wire transfer
                    </h3>
                    <p class="steps-description">
                        The customer wires their transfer to our escrow account.
                    </p>
                </div>

                <div class="steps-two">
                    <img class="steps-img" src="http://placehold.it/50/000000/FFFFFF" alt="" />
                    <h3 class="steps-name">
                        Black Box
                    </h3>
                    <p class="steps-description">
                        When our escrow receives the transfer, we notify the vendor for them to release the product.
                    </p>
                </div>

                <div class="steps-three">
                    <img class="steps-img" src="http://placehold.it/50/00cc00/FFFFFF" alt="" />
                    <h3 class="steps-name">
                        Success
                    </h3>
                    <p class="steps-description">
                        When the shipment has arrived to the client, we release the escrow to the vendor.
                    </p>
                </div>

            </div><!-- /.steps-timeline -->

        </section>

        <div class="section-main-second-content">
            <div class="Buyer col-md-6 col-xs-6">
                <p class="pull-right"></p>
                <h1 class="text-center">Clients:</h1>
                <div id="section-two" class="row text-center">
                    @foreach($transactions as $transaction)
                        @if( $transaction -> role == "client")
                            <div style="padding: 20px;">
                                <p>Source: {{ $transaction -> sourceAmount }} {{ $transaction -> source }}</p>
                                <p>Target: {{ $transaction -> targetAmount }} {{ $transaction -> target }}</p>
                                <p>Rate: {{ $transaction -> rate }}</p>
                                <p>Fee: {{ $transaction -> fee }} {{ $transaction -> source }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="Vendor col-md-6 col-xs-6">
                <p class="pull-left"></p>
                <h1 class="text-center">Vendors:</h1>
                <div id="section-three" class="row text-center">
                    @foreach($transactions as $transaction)
                        @if( $transaction -> role == "vendor")
                            <div style="padding: 20px;">
                                <p>Source: {{ $transaction -> sourceAmount }} {{ $transaction -> source }}</p>
                                <p>Target: {{ $transaction -> targetAmount }} {{ $transaction -> target }}</p>
                                <p>Rate: {{ $transaction -> rate }}</p>
                                <p>Fee: {{ $transaction -> fee }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop