@extends(_get_frontend_layout_path('frontend'))
@section('seoconfig')
    @if(app()->getLocale()=='en')
@section('title','Squalene Capsule | Australian Health Products')
<meta name="keywords" content="Squalene Capsule | Australian Health Products">
<meta name="description" content="Nurse 357 is leading and premium Australian health products supplier. Our squalene capsule has highest purity and effect. Our health products online store can offer the most convenience and health choices for you and your family. Shop now, get healthy life. ">
@else
    @section('title','角鲨烯 | 澳洲保健品')
<meta name="keywords" content="角鲨烯 | 澳洲保健品">
<meta name="description" content="NURSE357是澳大利亚的专业保健品品牌。旗下的天然角鲨烯胶囊具有高纯度，易吸收的特点，并且在降血脂，心血管保护等方面效果显著。购买澳洲保健品，请认准NURSE357。">
@endif
@endsection
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
                        <h1 class="text-center">{{ trans('nurse.about') }}</h1>
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
                <p>Nurse357（保健卫士）集团成立于2012年，总部在澳大利亚墨尔本，是一家致力于亚洲人保健，从事高端保健食品生产及
                销售的公司。Nurse357系列产品通过澳大利亚药品管理局（TGA）认证， 严格按照澳洲cGMP药品制造规范守则生产及包装。
                所有产品采用澳洲纯天然无污染原材料，并以现代生物高科技加工制造而成，达到了高纯度易吸收的效果。</p><br>
                <p>Nurse357公司通过对澳洲市场鲛鲨烯产品15年的深入研究和263例临床试验，从而推出了
                高纯度鲛鲨烯- 鲛鲨宝 。与此同时，
                Nurse357公司在十多年的实践中，将中医和
                澳洲护士所推崇的心脑血管护理方法两者相结
                合，创造了独特的Nurse357保健养生方法。
                众多遵循Nurse357健康法则的亚健康患者的
                健康状况迅速好转，有效率达到97%。目前公司
                快速发展，在澳大利亚营养保健行业处于领先地
                位，这便是Nurse357的创举。</p><br>
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
                    <p>Premium Australian vitamin brand Nurse357 was established in Melbourne 2013. We are the leaders in bringing a mono-brand vitamin concept business to the Australian marketplace.<br/><br>

                    Our company utilizes premier Australian pharmaceutical companies to manufacture the best Australian Made health food products utilizing locally sourced ingredients with the highest degree of safety and purity.<br/><br>

                    Our products, most of which are unique to Australia, aim to assist with the particularly stressful lifestyles and eating habits of the modern consumer.<br/><br>
                    We produce vitamins in limited quantities, as our first priority is to maintain stringent quality control over ingredients and production. Further TGA (Therapeutic Goods Administration) approval means our products are tested and declared safe for consumption and our products are backed by scientific evidence.<br/>
                        <br>
                    We distribute our brand through signature stores in Melbourne, online, and select wholesale accounts. We are looking to expand overseas accounts through franchise models and bring our premium products to everyone across the globe.<br/>
                        <br>
                    Our customer base consists of predominantly Asian descent, discerning clientele who are looking for niche 100% Australian Made vitamin products of the highest quality and efficacy. We believe the breadth of our product line perfectly assists with their concerns: high blood pressure, immunity, nutrition, pollution detox and beauty.<br/>
                        <br>
                    Since inception, our stores have been frequented by Chinese sporting and TV celebrities and as a market leader we have been featured in The Australian and on ABC's 7.30 report.</p>
                @endif
            </div>
            <div class="about-content why-content mt-5" style="padding: 2em;
    box-shadow: 3px 3px 20px #969696;">
                @if(app()->getLocale()=='cn')
                    <h3 class="text-center">为什么选择Nurse357?</h3>
                    <h4>Nurse357采用高纯度角鲨烯</h4>
                    <p>1906年瑞典科学家卡约博士发现角鲨烯，并因此获得了当年的诺贝尔奖。100年后Nurse357在澳大利亚无污染海域利用自然资源提炼获得的高纯度角鲨烯Nurse357达到了鱼油所达不到的高纯度，并具备极易为人体所吸收的效果，是迄今为止公认的心血管健康守护首先品。</p>
                    <h4>Nurse357始终致力于营养保健品的研究和创新</h4>
                    <p>Nurse357为消费者提供一系列创新的服务，其中包括在获得数以万计的临床使用反馈后，我们对Nurse357角鲨烯产品持续不断的效能提升。Nurse357深信消费者的临床服用结果是一个广泛的大数据创新资源来源，是未来Nurse357使用者的健康福祉资源。所以Nurse357的顶级研发团队始终保持着巨大的创新活力来不断改善修正我们的配方，直至将角鲨烯的药理学发挥至极致。</p>
                    <h4>Nurse357由澳洲联邦药物管理局 (TGA) 监管下研发生产</h4>
                    <p>Nurse357致力于提供符合最高质量标准的天然保健产品。与其他竞争对手全球采购计划不同， Nurse357深信澳洲本地的原材料是其他国家和区域无法匹敌的，因此Nurse357只利用澳大利亚本土高品质的原料xxxx （原材料名称）并结合最新的临床营养医学文献指导下研发。Nurse357从原料的获取、检测、加工到成品包装和检验等各个环节均按照严格按照澳洲CGMP药品制造规范守则进行管制型生产，并接受由澳洲联邦药物管理局 (TGA) 监管。</p>
                    <h4> Nurse357是澳洲高端药房Ramsay Pharmacy 唯一在售角鲨烯产品</h4>
                    <p>Nurse357 是 Ramsay Health Care 旗下 Ramsay Pharmacy Home Brand. 是目前澳洲高端药房Ramsay Pharmacy唯一允许在售的角鲨烯产品。<br>
                        （关于Ramsay Health Care Ramsay Health Care成立于1964年，半个多世纪以来一直专注于医养结合澳大利亚最大的医药集团，目前在六个国家运营管理235 家医院并在澳洲上市，总部设在澳洲悉尼。 ）
                    </p>
                    <h4>Nurse357是一个负责任的澳洲营养品研发生产者</h4>
                    <p>Nurse357对环境和社会责任的长期承诺包括对澳大利亚自然资源可持续发展的贡献，包括我们支持社区组织和回馈澳洲社会（这里您可能需要增加一些社会活动的材料）</p>
                @else
                    <h3 class="text-center">Why Choose Us?</h3>
                    <h4>Nurse357 has Squalene with highest purity.</h4>
                    <p>In 1906, the Swedish scientist Dr. Cayo discovered Squalene and won the Nobel Prize. After 100 years, Nurse357 obtained Squalene from the natural resource in the unpolluted waters of Australia, and has reached the highest purity that fish oil can't reach. It is easily absorbed by the human body. It is recognized as the first line product for cardiovascular health.
                    </p>
                    <h4>Nurse357 is always committed to the research and innovation of Nutritional Health products.</h4>
                    <p>Nurse357 offers customers a range of innovative services, including our continuous improvement in the effect of Nurse357 Squalene products after receiving tens of thousands of clinical practice feedback. Nurse357 is convinced that the clinical use of customers is a broad source with innovation, and well-being resource for future Nurse357 customers. Therefore, the top R&D team of Nurse357 has always maintained a great creative vitality to continuously improve and modify our formula until the Squalene achieves maximized pharmacological effects.</p>
                    <h4>Nurse357 is developed and manufactured under the supervision of the Australian Therapeutic Goods Administration (TGA).</h4>
                    <p>Nurse357 is committed to providing natural products that meet the highest quality standards. Never conducting global sourcing strategy, Nurse357 only uses Australia's high-quality raw materials xxxx (raw material name) with the guidance of the latest clinical nutrition literatures. Nurse357 is controlled by the Australian Therapeutic Goods Administration (TGA) in strict accordance with the Australian CGMP Drug Manufacturing Code.</p>
                    <h4>Nurse357 is the only Squalene product, which sells in  Ramsay Pharmacy</h4>
                    <p>NURSE357 is only Squalene product available in Australia's high-end pharmacy Ramsay Pharmacy. Ramsay Pharmacy is the home brand of Ramsay Health Care. It is the only squalene product currently available in Australia's high-end pharmacy Ramsay Pharmacy.<br>
                        (About Ramsay Health Care: Founded in 1964, Ramsay Health Care has been focused on healthcare for more than half a century and is Australia's largest pharmaceutical group. It currently operates 235 hospitals in six countries and is listed in Australia, with its headquarter in Sydney, Australia. )

                    </p>
                    <h4>Nurse357 is a responsible Nutrition R&D manufacturer in Australia</h4>
                    <p>Nurse357 has long-term commitment to environmental and social responsibility, including contributions to the sustainable development of natural resources in Australia, and support for community and contribute to Australian society.</p>
                @endif
            </div>
        </div>
    </section>

@endsection