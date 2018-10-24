<section id="features" class="page-section">
    <div class="container text-center">
        <div class="feature-header">
            <h3 class="feature-head">{{ trans('nurse.infoof') }}</h3>
        <h1 class="feature-head">{{ trans('nurse.sinfo') }}</h1>
            @if( \Illuminate\Support\Facades\URL::current() == url('/') )
                <p class="feature-sub" style="max-width: 100%; font-size: 14px;">
                1906年瑞典科学家卡约博士发现角鲨烯，并因此获得了当年的诺贝尔奖。角鲨烯是从栖息在深海大型鲨鱼肝脏中提取出的天然物质，角鲨烯在体内与低密度蛋白质结合，通过血液运输并分布到身体各组织，大大加强肌体对氧的利用力从而避免了肌体因缺氧而引起的各种疾病。同时大大提高人体耐受力，大幅度改善心脏功能，保护肝脏，抗衰老、预防糖尿病和修复细胞增强抵抗力等作用。在海洋鱼油类产品中，角鲨烯是唯一确认有防癌作用，并被广泛用于肿瘤病人的药物。
                深海鱼油是海洋鱼类脂肪的萃取物属于油脂类产品，其主要成份是DHA/EPA多元不饱和脂肪酸。角鲨烯深海大型鲨鱼肝脏中提取出的天然物质，其主要成份是维他命A与D，深海鱼油相对比较便宜，角鲨烯的价格十分珍惜也昂贵。
               </p>
                @else
                <p class="feature-sub">NURSE357 Squalene functions as a strong antioxidant. It assists in the maintenance of healthy skin and hair and the improvement of general wellbeing.</p>
            @endif
        </div>
        <div class="row">
            <div class="wow fadeInLeft col-md-4 d-flex align-content-center flex-wrap animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="features-box-right features-box">
                    <div class="features-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                    <h5 class="features-title">Features and Benefits: </h5>
                    <p class="features-content">Maintain healthy heart and cardiovascular system.Strong anti-oxidant.</p>
                </div>
                <div class="features-box-right features-box">
                    <div class="features-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                    <h5 class="features-title">Dosage/Direction</h5>
                    <p class="features-content">Take 1-3 squalene capsules per day before meals, or as directed by your professional. </p>
                </div>

            </div>
            <div class="wow fadeIn col-md-4 hidden-sm hidden-xs text-center animated" style="visibility: visible; animation-name: fadeIn;">
                <img src="{{ asset('images/product/pill.png') }}">
            </div>
            <div class="wow fadeInRight col-md-4 d-flex align-content-center flex-wrap animated" style="visibility: visible; animation-name: fadeInRight;">
                <div class="features-box-left features-box">
                    <div class="features-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                    <h5 class="features-title">Storage</h5>
                    <p class="features-content">Store below 30 degrees Cin a cool dry place. Do not use if seal is broken.</p>
                </div>
                <div class="features-box-left features-box">
                    <div class="features-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                    <h5 class="features-title">Active Ingredients Per Capsule</h5>
                    <p class="features-content">Each squalene capsule contains 1000mg squalene.</p>
                </div>

            </div>
        </div>
        @if( \Illuminate\Support\Facades\URL::current() == url('/') )
            <p class="feature-sub" style="max-width: 100%; font-size: 14px;">澳大利亚地广人稀的地方并且是一个食品监管相当严格的国家，澳洲附近所有海域几乎达到零度污染。Nurse357角鲨烯采用无污染区的深海鲨鱼肝脏为原料，经现代工艺提取浓缩精制而成，保留了角鲨烯的全部活性。。
                角鲨烯进入人体后，会给人的肌体提供充足氧气给细胞，加速细胞再生和组织还原，迅速提高血液含氧量，清除自由基使红血球活性化，从而达到降低血脂、血压和胆固醇，大大促进血液循环，持续改善体内新陈代谢。
                经过临床验证，角鲨烯主要机理是通过抗疲劳和增强机体的抗病能力，来提高人体免疫功能。实践证明了，角鲨烯在癌切除外科手术后或采用放化疗时使用，效果显著，其最大的特点是防止癌症向肺部转移，并且提升白细胞。
                Nurse357在澳大利亚无污染海域利用自然资源提炼获得的高纯度角鲨烯Nurse357达到了鱼油所达不到的高纯度，并具备极易为人体所吸收的效果，是迄今为止公认的心血管健康守护和抗癌保健品之首选。
            </p>
        @endif
    </div>
</section>