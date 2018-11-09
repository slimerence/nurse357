<section id="features" class="page-section">
    <div class="container text-center">
        <div class="feature-header">

            @if( \Illuminate\Support\Facades\URL::current() == url('/') )
                <h3 class="feature-head">{{ trans('nurse.infoof') }}</h3>
                <h1 class="feature-head">{{ trans('nurse.sinfo') }}</h1>
                @else
                <h3 class="feature-head">{{ trans('nurse.infoof') }}</h3>
                <h3 class="feature-head">{{ trans('nurse.sinfo') }}</h3>
            @endif
            <p class="feature-sub" style="max-width: 100%; font-size: 14px;">
                {{ trans('nurse.fb') }}
            </p>
        </div>
        <div class="row">
            <div class="wow fadeInLeft col-md-4 d-flex align-content-center flex-wrap animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="features-box-right features-box">
                    <div class="features-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                    <h5 class="features-title">{{ trans('nurse.ft1') }}</h5>
                    <p class="features-content">{{ trans('nurse.fc1') }}</p>
                </div>
                <div class="features-box-right features-box">
                    <div class="features-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                    <h5 class="features-title">{{ trans('nurse.ft2') }}</h5>
                    <p class="features-content">{{ trans('nurse.fc2') }}</p>
                </div>

            </div>
            <div class="wow fadeIn col-md-4 hidden-sm hidden-xs text-center animated" style="visibility: visible; animation-name: fadeIn;">
                <img src="{{ asset('images/product/pill.png') }}">
            </div>
            <div class="wow fadeInRight col-md-4 d-flex align-content-center flex-wrap animated" style="visibility: visible; animation-name: fadeInRight;">
                <div class="features-box-left features-box">
                    <div class="features-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                    <h5 class="features-title">{{ trans('nurse.ft3') }}</h5>
                    <p class="features-content">{{ trans('nurse.fc3') }}</p>
                </div>
                <div class="features-box-left features-box">
                    <div class="features-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                    <h5 class="features-title">{{ trans('nurse.ft4') }}</h5>
                    <p class="features-content">{{ trans('nurse.fc4') }}</p>
                </div>

            </div>
        </div>
        @if( \Illuminate\Support\Facades\URL::current() == url('/') )
            <p class="feature-sub" style="max-width: 100%; font-size: 14px;">澳大利亚地广人稀的地方并且是一个食品监管相当严格的国家，澳洲附近所有海域几乎达到零度污染。Nurse357角鲨烯采用无污染区的深海鲨鱼肝脏为原料，经现代工艺提取浓缩精制而成，保留了角鲨烯的全部活性。。
                <a target="_blank" href="https://baike.baidu.com/item/%E8%A7%92%E9%B2%A8%E7%83%AF">角鲨烯</a>进入人体后，会给人的肌体提供充足氧气给细胞，加速细胞再生和组织还原，迅速提高血液含氧量，清除自由基使红血球活性化，从而达到降低血脂、血压和胆固醇，大大促进血液循环，持续改善体内新陈代谢。
                经过临床验证，角鲨烯主要机理是通过抗疲劳和增强机体的抗病能力，来提高人体免疫功能。实践证明了，角鲨烯在癌切除外科手术后或采用放化疗时使用，效果显著，其最大的特点是防止癌症向肺部转移，并且提升白细胞。
                Nurse357在澳大利亚无污染海域利用自然资源提炼获得的高纯度角鲨烯Nurse357达到了鱼油所达不到的高纯度，并具备极易为人体所吸收的效果，是迄今为止公认的心血管健康守护和抗癌保健品之首选。
            </p>
        @endif
    </div>
</section>