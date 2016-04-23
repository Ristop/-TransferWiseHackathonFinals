@extends('layouts.layout')

@section('content')
    <div class="section-main-first">
        <div class="img-responsive">
            <img src="img/sample3.jpg">
        </div>
        <div class="section-main-first-content">
            <div class="Buyer col-md-6 col-xs-6">
                <p class="pull-right">Client</p>
            </div>
            <div class="Vendor col-md-6 col-xs-6">
                <p class="pull-left">Vendor</p>
            </div>
        </div>
        <div id="subscribe-container">
            <div class="col-lg-8">
                <form action="saveemail" method="POST">
                    {{ csrf_field() }}
                    <label id="subscribe-name" for="subscribe">Subscribe for updates</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="email address" name="address">
                     <span class="input-group-btn">
                    <input type="submit" value="Subscribe" class="btn btn-secondary subscribe-button">
                         </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="Steps" class="steps-section">
        <h1 class="steps-header">What we offer</h1>
        <div class="steps-timeline">
            <div class="steps-one">
                <img class="steps-img" src="http://placehold.it/50/3498DB/FFFFFF" alt=""/>
                <h3 class="steps-name">Client</h3>
                <p class="steps-description">Our client can have the product shipped much faster when the vendor uses
                    our service.</p>
            </div>
            <div class="steps-two">
                <img class="steps-img" src="http://placehold.it/50/4CAF50/FFFFFF" alt=""/>
                <h3 class="steps-name">Us</h3>
                <p class="steps-description">We offer a platform where the vendor can ping whether the client has
                    issued a wire transfer to the vendor's bank account</p>
            </div>
            <div class="steps-three">
                <img class="steps-img" src="http://placehold.it/50/000000/FFFFFF" alt=""/>
                <h3 class="steps-name">Vendor</h3>
                <p class="steps-description">When the ping returns a positive result, the vendor can ship the product
                    without having to wait for the funds to arrive to their bank account.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="project-name">How it works</h1>
        <div id="timeline">
            <div class="timeline-item">
                <div class="timeline-icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20"
                         xml:space="preserve">
                <path fill="#FFFFFF" d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
                    c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
                    l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
                    c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
                    c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z"/>
                </svg>

                </div>
                <div class="timeline-content blue-arrow">
                    <div class="blue">
                        <h2>Client authentication</h2>
                        <p>Buyer identifies himself in Virtual Handshake environment by logging in with his ID credentials. Setups application/request towards Vendor describing bank wire transfer details.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20"
                         xml:space="preserve">
                <g>
                    <path fill="#FFFFFF" d="M17.92,3.065l-1.669-2.302c-0.336-0.464-0.87-0.75-1.479-0.755C14.732,0.008,7.653,0,7.653,0v5.6
                        c0,0.096-0.047,0.185-0.127,0.237c-0.081,0.052-0.181,0.06-0.268,0.02l-1.413-0.64C5.773,5.183,5.69,5.183,5.617,5.215l-1.489,0.65
                        c-0.087,0.038-0.19,0.029-0.271-0.023c-0.079-0.052-0.13-0.141-0.13-0.235V0H2.191C1.655,0,1.233,0.434,1.233,0.97
                        c0,0,0.025,15.952,0.031,15.993c0.084,0.509,0.379,0.962,0.811,1.242l2.334,1.528C4.671,19.905,4.974,20,5.286,20h10.307
                        c1.452,0,2.634-1.189,2.634-2.64V4.007C18.227,3.666,18.12,3.339,17.92,3.065z M16.42,17.36c0,0.464-0.361,0.833-0.827,0.833H5.341
                        l-1.675-1.089h10.341c0.537,0,0.953-0.44,0.953-0.979V2.039l1.459,2.027V17.36L16.42,17.36z"/>
                </g>
                </svg>

                </div>
                <div class="timeline-content right left-green-arrow">
                    <div class="green">
                        <h2>Request processing</h2>
                        <p>Virtual Handshake processes the request by asking transfer confirmation from Bank the Buyer used for paying for the invoice.</p>

                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20"
                         xml:space="preserve">
                <path fill="#FFFFFF" d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
                    c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
                    l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
                    c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
                    c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z"/>
                </svg>

                </div>
                <div class="timeline-content green-arrow">
                    <div class="green">
                        <h2>Informing vendor</h2>
                        <p>Once positive confirmation is received Virtual Handshake informs the Vendor, that he is good to ship the parcel.
                        </p>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20"
                         xml:space="preserve">
                <path fill="#FFFFFF" d="M17.92,3.065l-1.669-2.302c-0.336-0.464-0.87-0.75-1.479-0.755C14.732,0.008,7.653,0,7.653,0v5.6
                        c0,0.096-0.047,0.185-0.127,0.237c-0.081,0.052-0.181,0.06-0.268,0.02l-1.413-0.64C5.773,5.183,5.69,5.183,5.617,5.215l-1.489,0.65
                        c-0.087,0.038-0.19,0.029-0.271-0.023c-0.079-0.052-0.13-0.141-0.13-0.235V0H2.191C1.655,0,1.233,0.434,1.233,0.97
                        c0,0,0.025,15.952,0.031,15.993c0.084,0.509,0.379,0.962,0.811,1.242l2.334,1.528C4.671,19.905,4.974,20,5.286,20h10.307
                        c1.452,0,2.634-1.189,2.634-2.64V4.007C18.227,3.666,18.12,3.339,17.92,3.065z M16.42,17.36c0,0.464-0.361,0.833-0.827,0.833H5.341
                        l-1.675-1.089h10.341c0.537,0,0.953-0.44,0.953-0.979V2.039l1.459,2.027V17.36L16.42,17.36z"/>
                </svg>

                </div>
                <div class="timeline-content right left-black-arrow">
                    <div class="black">
                        <h2>Shipping confirmation</h2>
                        <p>Vendor confirms to Buyer shipping the parcel through Virtual Handshake account.
                            Once transaction is completed both counterparties can leave the feedback.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-live-demo">
        <h1 class="section-live-demo-header">What it looks like</h1>
        <div class="container">
            <div class="Buyer col-md-6 col-xs-6">
                <form action="makePayment" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label id="subscribe-name" for="subscribe">Wire the funds</label>
                        <input type="text" class="form-control" placeholder="Vendor identification" name="address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Billing reference" name="address">
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Amount" name="address">
                     <span class="input-group-btn">
                    <input type="submit" value="Send" class="btn btn-secondary subscribe-button">
                         </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="Vendor col-md-6 col-xs-6">
                <form action="checkPayment" method="POST">
                    {{ csrf_field() }}
                    <label id="subscribe-name" for="subscribe">Check if the payment has arrived</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Billing reference" name="address">
                     <span class="input-group-btn">
                    <input type="submit" value="Check" class="btn btn-secondary subscribe-button">
                         </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop