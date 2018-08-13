@extends(_get_frontend_layout_path('catalog'))

@section('content')
<section class="shopping-cart ptb-100">
    <div class="container">
        <div class="content pt-40 mt-20" id="place-order-checkout-app">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="card-body">
                        @if(isset($user) && $user)
                        <h4 class="is-size-4 has-text-link">Delivery Info: </h4>
                        <hr class="is-marginless">
                        <address class="mt-20">
                            <p>
                                <strong>{{ session('user_data.name') }}</strong>
                            </p>
                            <p>
                                {{ $user->address }} {{ $user->city }}, {{ $user->state }} {{ $user->postcode }}, {{ $user->country }}
                            </p>
                            <p>
                                <span class="has-text-link">Phone: {{ $user->phone }}</span>
                            </p>
                        </address>
                        <a href="{{ url('frontend/my_profile/'.session('user_data.uuid')) }}" class="button is-info is-pulled-right"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;Update</a>
                        @else
                        <p>WHAT'S YOUR SHIPPING ADDRESS?</p>
                            <el-form :model="shippingForm" :rules="rules" ref="shippingForm" label-width="70px" class="demo-shippingForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <el-form-item label="Name" prop="name">
                                            <el-input v-model="shippingForm.name" placeholder="Your Name"></el-input>
                                        </el-form-item>
                                    </div>
                                    <div class="col-md-6">
                                        <el-form-item label="Phone" prop="phone">
                                            <el-input v-model="shippingForm.phone" placeholder="Phone number"></el-input>
                                        </el-form-item>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <el-form-item label="Email" prop="email">
                                            <el-input v-model="shippingForm.email" placeholder="Your Email"></el-input>
                                        </el-form-item>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <el-form-item label="Address" prop="address">
                                            <el-input v-model="shippingForm.address" placeholder="Address line"></el-input>
                                        </el-form-item>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <el-form-item label="Suburb" prop="city">
                                            <el-input v-model="shippingForm.city" placeholder="Suburb"></el-input>
                                        </el-form-item>
                                    </div>
                                    <div class="col-md-4">
                                        <el-form-item label="State" prop="state">
                                            <el-select v-model="shippingForm.state" placeholder="State">
                                                <el-option label="Australian Capital Territory" value="ACT"></el-option>
                                                <el-option label="New South Wales" value="NSW"></el-option>
                                                <el-option label="Northern Territory" value="NT"></el-option>
                                                <el-option label="Queensland" value="QLD"></el-option>
                                                <el-option label="Tasmania" value="TAS"></el-option>
                                                <el-option label="Victoria" value="VIC"></el-option>
                                                <el-option label="Western Australia" value="WA"></el-option>
                                            </el-select>
                                        </el-form-item>
                                    </div>
                                    <div class="col-md-4">
                                        <el-form-item label="Postcode" prop="postcode">
                                            <el-input v-model="shippingForm.postcode" placeholder="Postcode"></el-input>
                                        </el-form-item>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <el-form-item>
                                            <el-button type="primary"
                                                @click="submitForm('shippingForm')"
                                                :disabled="customer.length>0"
                                                :loading="submitFormInProgress"
                                            >CONTINUE TO BILLING</el-button>
                                        </el-form-item>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <div class="el-button border-none" style="background-color:#009ca1;">
                                            <a href="{{ url('frontend/customers/login') }}" style="color:#fff;">CUSTOMER LOGIN</a>
                                        </div>
                                    </div>
                                </div>
                            </el-form>
                        <p class="is-small has-text-grey mt-20 has-text-centered">By proceeding, you agree to our Terms and Conditions and Privacy Policy</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box mt-10">
                    <div class="card-body">
                        <h4 class="is-size-4 has-text-link">Order Summary:</h4>
                        <hr class="is-marginless">
                        <p class="columns is-marginless">
                            <span class="column">Customer Name:</span>
                            <span class="column"><b>{{ session('user_data.name') }}</b></span>
                        </p>
                        <p class="columns is-marginless">
                            <span class="column">Cart Subtotal (GST Incl.):</span>
                            <span class="column"><b>{{ config('system.CURRENCY').' '.($cart->total()) }} ({{$cart->count()}} {{ $cart->count()>1 ?'Items':'Item' }})</b></span>
                        </p>
                        <p class="columns is-marginless">
                            <span class="column">Shipping Fee (GST Incl.):</span>
                            <span class="column"><b>{{ config('system.CURRENCY').' '.(number_format($delivery_charge,2)) }}</b></span>
                        </p>
                        <p class="columns is-marginless">
                            <span class="column">Total (GST Incl.):</span>
                            <?php
                            $cartTotal = str_replace(',','',$cart->total());
                            ?>
                            <span class="column"><b>{{ config('system.CURRENCY').' '.(number_format($cartTotal + $delivery_charge,2)) }}</b></span>
                        </p>
                        <a href="{{ url('/view_cart') }}" class="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Details</a>
                        <div class="is-clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form method="post" action="{{ url('/frontend/place_order_checkout') }}" id="payment-form">
                    {{ csrf_field() }}
                    <input type="hidden" name="payment_method" value="pm-stripe" id="payment-method-input">
                    @include(_get_frontend_theme_path('checkout.elements.payments'))
                    <input type="hidden" name="customerUuid" v-model="customer">
                    <div class="box">
                    <h3>My Notes</h3>
                    <textarea class="textarea note-text" name="notes" placeholder="Please leave your notes here ..." rows="3"></textarea>
                    <input required type="checkbox" name="agree" class="checkbox" checked>
                    I agree to <a target="_blank" class="hyperlink" href="{{ url('/frontend/content/view/terms') }}">Terms and Conditions</a> and <a target="_blank" class="hyperlink" href="{{ url('/frontend/content/view/privacy-policy') }}">Privacy Policy</a>
                    </div>
                    <el-button type="primary" native-type="submit"
                        :disabled="customer.length==0"
                    >Submit Order Now</el-button>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection