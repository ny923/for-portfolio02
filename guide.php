<?php
/*
Template Name:guide
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">
    <div class="headline">

      <!-- パンくず -->
      <div class="breadcrumbs">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?= site_url(); ?>/">
              <span itemprop="name">HOME</span></a>
            <meta itemprop="position" content="1" />
          </li>
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <span itemprop="name"><?php the_title(); ?></span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title"><?php the_title(); ?></h1>

    </div>
</section>

<section class="section section-static" id="section-static">

  <div class="section-content row w700" data-aos="fade-up" anchor="#section-static" data-aos-once="true" data-aos-duration="1000">

    <div class="static ">

      <section class="section">
        <h2 class="static__title">お支払い方法について</h2>
        <h3 class="static__sub-title">【オンラインショップの場合】</h3>
        <p class="static__text">BtoB向けや海外直送のお取り扱いはございません。</p>
        <p class="caution">※現在、オンラインショップ用のショッピングカートは準備中です。商品はご覧いただけます。<br>
          メール・FAXでのご注文のみになります。</p>
      </section>

      <div class="section">
        <h3 class="static__sub-title">【FAX・電子メールの場合】</h3>
        <h4 class="static__title-h4">代金引換</h4>

        <section class="section">
          <h5 class="static__title-h5">宅配業者</h5>
          <h6 class="static__title-h6">佐川急便</h6>
          <p class="static__text">代金は商品配送時に現金またはクレジットカードでお支払いください。<br>
            （一部地域では、カードでのお支払いが出来ないこともあります。その際には、現金でお支払いください。）
          </p>
        </section>

        <section class="section">
          <h5 class="static__title-h5">お支払総額</h5>
          <p class="static__text">商品代金合計(税込)＋送料(税込)<br>
            ※一回のご注文金額が、合計で1,000円に満たない場合、梱包手数料300円をご負担ください。</p>
        </section>


        <section class="section">
          <h4 class="static__title-h4">コンビニ収納および郵便振替</h4>
          <p class="static__text">商品発送の際に払込取扱票を同封させていただきます。その用紙を使い、コンビニエンスストアまたは郵便局からお払込み下さい。払込手数料は、掛かりません。</p>
        </section>

        <section class="section">
          <h5 class="static__title-h5">お支払い期限</h5>
          <p class="static__text">商品到着後、２週間以内にお支払いください。お支払い状況により、ご利用いただけない場合があります。</p>
        </section>


        <section class="section">
          <h4 class="static__title-h4">銀行振込</h4>
          <p class="static__text">請求書を郵送させていただきます。そこに記載された金額を、ご送金ください。お振込にかかる手数料は、お客様のご負担となります。<br>
            <strong>＊必ずご請求書に記載のお名前にてお振込み下さい。<br>
              ＊名義が異なる場合は伝票番号を入力していただくか、弊社までご連絡ください。
            </strong>
            <b>取引銀行：　みずほ銀行　高田馬場支店　当座預金　００３３８０６</b>
          </p>
        </section>
      </div>

      <section class="section">
        <h2 class="static__title">配送について</h2>
        <h3 class="static__sub-title">■宅配便</h3>
        <p class="static__text">配達時間指定をご希望の場合は、注文時にご指定ください。<br>
          ※指定できる配達時間帯は、下記のとおりです。ただし、一部ご利用できない地域もございます</p>
      </section>

      <section class="section">
        <h4 class="static__title-h4">お届け時間</h4>
        <p class="static__text">お届け時間帯をご指定いただく場合は、下記の5つの時間帯の中からお選びいただけます。<br>
          午前中指定 / 12時～14時 / 14時～16時 / 16時～18時 / 18時～21時<br>
          ※交通状況、天候等の影響により お届け時間が前後する場合がございます。予めご了承下さい。</p>
      </section>

      <section class="section">
        <h3 class="static__sub-title">■お届け日数</h3>
        <ul class="static-list">
          <li class="static__item">●在庫切れ商品は、その時々の状況により、２～３ヶ月以上かかる場合があります。<br>
            ※ほとんどの商品は海外メーカーからの輸入品となります。予めご了承ください。</li>

          <li class="static__item">●銀行振込：入金確認後、在庫品の場合14日以内に発送いたします。</li>

          <li class="static__item">●代金引換(現金・クレジットカード払い)の場合：ご注文確定後、在庫品の場合14日以内に発送いたします</li>

          <li class="static__item">●繁忙期や大量注文につきましては、その都度ご確認ください。<br>
            ※お急ぎの場合は、ご注文の際にその旨をお伝えください。納期がかかることにより、ご注文をキャンセルする場合は、お早めにご連絡ください。</li>
        </ul>
      </section>

      <section class="section">
        <h3 class="static__sub-title">■送料（税込み）</h3>
        <table class="static-table">
          <tbody>
            <tr>
              <th class="static__th" width="15%">北海道</th>
              <td class="static__td" width="60%">北海道</td>
              <td class="static__td" width="15%">1,540円</td>
            </tr>
            <tr>
              <th class="static__th">北東北</th>
              <td class="static__td">青森県　秋田県　岩手県</td>
              <td class="static__td">1,210円</td>
            </tr>
            <tr>
              <th class="static__th">南東北<br>
                関東<br>
                甲信越<br>
                北陸<br>
                中部</th>
              <td class="static__td">宮城県　山形県　福島県　茨城県　栃木県　群馬県　埼玉県　千葉県　東京都　奈川県　山梨県　新潟県　長野県　富山県　石川県　福井県　岐阜県　静岡県　愛知県　三重県</td>
              <td class="static__td">1,100円</td>
            </tr>
            <tr>
              <th class="static__th">関西</th>
              <td class="static__td">滋賀県　京都府　大阪府　兵庫県　奈良県　和歌山県</td>
              <td class="static__td">1,210円</td>
            </tr>
            <tr>
              <th class="static__th">中国</th>
              <td class="static__td">鳥取県　島根県　岡山県　広島県　山口県</td>
              <td class="static__td">1,320円</td>
            </tr>
            <tr>
              <th class="static__th">四国</th>
              <td class="static__td">徳島県　香川県　愛媛県　高知県</td>
              <td class="static__td">1,210円</td>
            </tr>
            <tr>
              <th class="static__th">九州</th>
              <td class="static__td">福岡県　佐賀県　長崎県　熊本県　大分県　宮崎県　鹿児島県</td>
              <td class="static__td">1,540円</td>
            </tr>
            <tr>
              <th class="static__th">沖縄</th>
              <td class="static__td">沖縄県</td>
              <td class="static__td">3,630円</td>
            </tr>
          </tbody>
        </table>

        <table class="static-table">
          <tbody>
            <tr>
              <th class="static__th" width="35%">送料について</th>
              <td class="static__td" width="65%">ご注文の際は、上記料金表に該当する送料をご負担ください。この料金には、梱包費用が含まれています。また、修理品をお送りいただく際の送料は、お客様がご負担ください。</td>
            </tr>
            <tr>
              <th class="static__th">高額購入時の特典</th>
              <td class="static__td">一度のご注文金額が合計30,000円以上の場合、送料が無料になります。</td>
            </tr>
            <tr>
              <th class="static__th">分納になる場合の送料</th>
              <td class="static__td">在庫切れ等の理由により一括して配送できない場合、合計30,000円未満のご注文については、初回配送分の送料のみご負担ください。</td>
            </tr>
            <tr>
              <th class="static__th">追加料金について</th>
              <td class="static__td">離島や一部地域では、荷物の大きさにより追加料金が掛かる場合もあります。</td>
            </tr>
          </tbody>
        </table>
      </section>


      <section class="section">
        <h2 class="static__title">商品取り置き・修理品の預かりについて</h2>
        <ul class="static-list">
          <li class="static__item">■商品のお取り置きは原則１か月となります。</li>
          <li class="static__item">■修理品の預かり保管期間は原則１年となります。期間を過ぎた物に関しましては、破棄する場合がございますので予めご了承ください。</li>
          <li class="static__item">■やむを得ない事情の場合は、上記限りではございませんので、弊社までご相談ください。</li>
        </ul>
      </section>


      <section class="section">
        <h2 class="static__title">返品・交換について</h2>
        <ul class="static-list">
          <li class="static__item">■商品到着時の不良および品違いにつきましては、一週間以内にご連絡をお願い致します。この際の返送料は、当社にて負担します。</li>
          <li class="static__item">■お客様のご都合による返品および交換は、あらかじめご連絡のうえご返送ください。この際の返送料は、お客様のご負担となります。</li>
        </ul>

        <div class="group-wrap">
          <p class="caution">以下の場合は、返品・交換をお受けできません。</p>
          <ul class="static-list">
            <li class="static__item">■商品を使用したり、名前等を記入してしまった場合。</li>
            <li class="static__item">■誤配の場合でも、使用したり、名前等を記入してしまった商品。</li>
            <li class="static__item">■お客様のご指定により、名前等をプリントしたり、加工した商品。</li>
            <li class="static__item">■特殊なサイズや色の通常商品ではない商品。</li>
          </ul>
        </div>
      </section>

      <section class="section">
        <h3 class="static__sub-title">手数料</h3>
        <p class="static__text">決済完了後にキャンセルのご連絡をいただいた場合、ご返金時の手数料はお客様のご負担とさせていただきます。</p>


        <h3 class="static__sub-title">ご返金方法</h3>

        <h4 class="static__title-h4">クレジットカード決済</h4>
        <p class="static__text">クレジットカード決済でご注文いただいた場合、売上確定締め日の期間内であれば、売上の「キャンセル処理」を、締め日を過ぎた場合につきましては、「返金処理」をさせていただきます。</p>


        <h4 class="static__title-h4">クレジットカード決済以外</h4>
        <p class="static__text">クレジットカード決済以外のお支払い方法でご注文いただいた場合は、「銀行振込」 もしくは、「郵便振替」のいずれかにてご返金させていただきます。振込、または振替口座をご指定下さい。</p>
      </section>


    </div>
  </div>
</section>

<?php get_footer(); ?>