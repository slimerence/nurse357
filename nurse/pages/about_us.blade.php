@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <section class="ptb" style="padding-top:80px;" >
        <div class="module-wrapper">
            <div class="container module-title">
                <a class="module-breadcrumbs-link" href="{{ url('/') }}">Home</a> <span class="module-breadcrumbs-divider">/</span>
                <a class="module-breadcrumbs-link" href="{{ url('/') }}">About</a>
            </div>
        </div>
        <div class="module-wrapper">
            <div class="module page">
                <div class="module-header page-header">
                    <div class="module-title">
                        <h1 class="text-center">About Us</h1>
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
                <p>NURSE357（保健卫士）集团成立于2012年，总部在澳大利亚墨尔本，是一家致力于亚洲人保健，从事高端保健食品生产及
                销售的公司。NURSE357系列产品通过澳大利亚药品管理局（TGA）认证， 严格按照澳洲cGMP药品制造规范守则生产及包装。
                所有产品采用澳洲纯天然无污染原材料，并以现代生物高科技加工制造而成，达到了高纯度易吸收的效果。</p>
                <p>NURSE357公司通过对澳洲市场鲛鲨烯产品15年的深入研究和263例临床试验，从而推出了
                高纯度鲛鲨烯- 鲛鲨宝 。与此同时，
                NURSE357公司在十多年的实践中，将中医和
                澳洲护士所推崇的心脑血管护理方法两者相结
                合，创造了独特的NURSE357保健养生方法。
                众多遵循NURSE357健康法则的亚健康患者的
                健康状况迅速好转，有效率达到97%。目前公司
                快速发展，在澳大利亚营养保健行业处于领先地
                位，这便是NURSE357的创举。</p>

                <div class="row">
                    <div class="col-lg-8 col-sm-12 align-self-center">
                        <p>鲛鲨宝原料取自栖息在纯净无污染的塔斯马尼亚
                            海域海平面1000~3000米以下深海鲨鱼的肝
                            脏。鲛鲨烯能汲取水中的氢分子进而生成氧，使
                            血液中保持足够的氧含量，使大脑及其他组织细
                            胞内氧含量增加，改善大脑及组织缺氧状态，帮
                            助预防和治疗因缺氧而引起的各种疾病。据研究
                            人员提供的数据表明，鲛鲨烯能够提高 T 淋巴
                            细胞亚群中cd3、cd4、cd8和cd16的值，从而对
                            高血压、糖尿病及癌症具有治疗作用。通过观察
                            250例慢性乙型肝炎患者，平均用药（鲛鲨烯）
                            6月，临床症状复常率95%~100%，alt复常率
                            85%， hbsag、hbeag、hbcag转阴率分别为
                            17.6%、20.6%、和15.7%，均优于通用的保肝
                            药物。</p>
                    <h3 class="text-center">主要功效：</h3>
                    <ol class="mx-auto">
                        <li>预防治疗高血脂，高血压，高胆固醇；</li>
                        <li>预防心血管疾病，降低中风病发几率；</li>
                        <li>为长期熬夜体力透支疲劳者补充体力；</li>
                        <li>帮助接受放射性治疗的癌症患者迅速恢复；</li>
                        <li>维持强壮健康的骨骼。</li>
                    </ol>
                    </div>
                    <div class="col-lg-4 col-sm-12 text-center">
                        <img class="img-fluid rounded" style="max-height: 400px;" src="{{ asset('images/product/1.png') }}" alt="">
                    </div>
                </div>
                @else
                    <p>Premium Australian vitamin brand Nurse357 was established in Melbourne 2013. We are the leaders in bringing a mono-brand vitamin concept business to the Australian marketplace.<br/>

                    Our company utilizes premier Australian pharmaceutical companies to manufacture the best Australian Made health food products utilizing locally sourced ingredients with the highest degree of safety and purity.<br/>

                    Our products, most of which are unique to Australia, aim to assist with the particularly stressful lifestyles and eating habits of the modern consumer.<br/>

                    We produce vitamins in limited quantities, as our first priority is to maintain stringent quality control over ingredients and production. Further TGA (Therapeutic Goods Administration) approval means our products are tested and declared safe for consumption and our products are backed by scientific evidence.<br/>

                    We distribute our brand through signature stores in Melbourne, online, and select wholesale accounts. We are looking to expand overseas accounts through franchise models and bring our premium products to everyone across the globe.<br/>

                    Our customer base consists of predominantly Asian descent, discerning clientele who are looking for niche 100% Australian Made vitamin products of the highest quality and efficacy. We believe the breadth of our product line perfectly assists with their concerns: high blood pressure, immunity, nutrition, pollution detox and beauty.<br/>

                    Since inception, our stores have been frequented by Chinese sporting and TV celebrities and as a market leader we have been featured in The Australian and on ABC's 7.30 report.</p>
                @endif
            </div>
        </div>
    </section>

@endsection