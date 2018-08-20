@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <section class="ptb" style="padding-top:80px;" >
        <div class="module-wrapper">
            <div class="container module-title">
                <a class="module-breadcrumbs-link" href="{{ url('/') }}">Home</a> <span class="module-breadcrumbs-divider">/</span>
                <a class="module-breadcrumbs-link" href="{{ url('/') }}">Shipping & Returns</a>
            </div>
        </div>
        <div class="module-wrapper">
            <div class="module page">
                <div class="module-header page-header">
                    <div class="module-title">
                        <h1 class="text-center">Shipping & Returns</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ptb-60" style="background-color: #fafafa;">
        <div class="container">
            <div class="about-content" style="padding: 2em;
    box-shadow: 3px 3px 20px #969696;">
                @if(app()->getLocale()=='cn')

                @else
                    <p>
                    <strong>Shipping Method:</strong><br/>EWE GLOBAL EXPRESS<br/><br/>


                    <strong>NURSE357 Returns Policy</strong><br/>
                    Our returns policy is in addition to your rights under the Australian Consumer Law because we want you to be satisfied with your purchase. Please read the following carefully to ensure you are fully aware of your rights under this policy and our obligations to you.
                        <br/><br/>
                    <strong>Change of mind returns</strong><br/>
                    If you wish to return an item because you have changed your mind about your purchase, NURSE357 will offer you an exchange or refund provided that:
                    <ul>
                        <li>You return the item within 30 days of purchase;</li>
                        <li>You produce your original NURSE357 register receipt, online tax invoice or other adequate proof of purchase at the time you return the item;</li>
                        <li>The item must not have been used or damaged in any way including that it is in its original packaging including manuals, pamphlets and all accessories;</li>
                        <li>It is unopened, unused and in its original saleable condition;</li>
                        <li>The product is not one on which a change of mind return is not available (see below).</li>
                    </ul>

                    If these requirements are not satisfied Chemist Warehouse reserves the right not to offer an exchange or refund for change of mind returns.<br/>

                    Goods presented for repair may be replaced by refurbished goods of the same type rather than being repaired. Refurbished parts may be used to repair goods. <br/>
                    Our goods come with guarantees that cannot be excluded under the Australian Consumer Law. You are entitled to a replacement or refund for a major failure and for compensation for any other reasonably foreseeable loss or damage.<br/>
                    You are also entitled to have the goods repaired or replaced if the goods fail to be of acceptable quality* and the failure does not amount to a major failure.<br/>
                    <br/>
                    *Products must be of acceptable quality, that is:<br/>
                    safe, lasting, with no faults; look acceptable; do all the things someone would normally expect them to do.<br/><br/>

                    Acceptable quality takes into account what would normally be expected for the type of product and cost.<br/><br/>

                    <Strong>NURSE357 reserves the right to:</Strong><br/>
                    Assess the condition and age of returned goods prior to providing a repair, exchange or refund. This may result in a repair, exchange or refund being refused.<br/><br/>

                    <Strong>Please note:</Strong><br/>

                    For Online Orders:<br/>
                    Even though great care is taken in the shipping process, if your item/s arrives damaged, please contact our Customer Service Team to assess the damage and to work out a solution. You may be requested to provide of photograph of your item/s and /or delivery package to aid a speedy resolution.<br/>

                    For returns under Australian Consumer Law, please contact our Customer Service Team to arrange collection of the item/s to be delivered back to our Warehouse for assessment, exchange, repair or refund.<br/>
                    </p>


                @endif
            </div>
        </div>
    </section>

@endsection