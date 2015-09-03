<!-- Slider Area From Here  -->

<div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="images/slider/slider1.jpg" alt="...">
                <div class="carousel-caption">
                    <p>This Is Slider Caption</p>
                </div>
            </div>

            <div class="item">
                <img src="images/slider/slider2.jpg" alt="...">
                <div class="carousel-caption">
                    <p>This Is Slider Caption</p>
                </div>
            </div>

            <div class="item">
                <img src="images/slider/slider3.jpg" alt="...">
                <div class="carousel-caption">
                    <p>This Is Slider Caption</p>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Slider Area End From Here  -->



<div class="container">
    <div class="row">
        <div class="col-md-3">

            <div class="calculator-wrapper">
                <div class="calculator-name">
                    <span>Calculate Cashback</span>
                </div>

                <div class="calculator-content">
                    <div class="form-group">
                        <label>Choose your broker</label>
                        <div class="select-box">
                            <select name="broker-name" id="" class="form-control">
                                <option value="">Choose Brokar Name</option>
                                <option value="214">FxPro</option>
                                <option value="215">IronFX</option>
                                <option value="216">Admiral Markets</option>
                                <option value="217">ACFX</option>
                                <option value="218">Orbex</option>
                                <option value="227">LMAX Exchange</option>
                                <option value="263">XM</option>
                                <option value="264">Pepperstone</option>
                                <option value="265">FBS</option>
                                <option value="266">FXCM UK</option>
                                <option value="267">FXCM AU</option>
                                <option value="268">AMarkets</option>
                                <option value="269">FXTM</option>
                                <option value="270">Hantec Markets</option>
                                <option value="271">HotForex</option>
                                <option value="272">FXOpen AU</option>
                                <option value="273">FXCC</option>
                                <option value="274">Dukascopy</option>
                                <option value="275">Swissquote (MIG BANK)</option>
                                <option value="276">MFX Broker</option>
                                <option value="279">FX Solutions UK</option>
                                <option value="281">MTrading</option>
                                <option value="639">Fibo Group</option>
                                <option value="641">Tickmill</option>
                                <option value="646">AxiTrader</option>
                                <option value="651">Forex4you</option>
                                <option value="653">InstaForex</option>
                                <option value="655">Альфа-Форекс</option>
                                <option value="656">Нефтепромбанк</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Choose your broker</label>
                        <div class="select-box">
                            <select name="currency-name" id="" class="form-control">
                                <option value="">Choose your Currency</option>
                                <option value="11" data-key="eurusd">EUR/USD</option>
                                <option value="12" data-key="gbpusd">GBP/USD</option>
                                <option value="13" data-key="usdjpy">USD/JPY</option>
                                <option value="14" data-key="usdchf">USD/CHF</option>
                                <option value="15" data-key="audusd">AUD/USD</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Monthly trade volume (lots)</label>
                    </div>
                    <div class="trade-volume">
                        <input type="number" class="form-control" value="5">
                    </div>

                </div>

                <div class="calculator-output">
                    <span id="rebatespermonth">Your rebates per month</span>
                    <div id="rebates_count">41.20$</div>
                </div>

            </div>


            <div class="block-inner">
                <div class="content">
                    <div class="view view-payment_systems">
                        <div class="title">Payment Systems</div>
                        <div class="content">
                            <div class="row row-payment_system">
                                <img src="images/bank-icon/bank_transfer.png" alt="Bank Transfer" title="Bank Transfer" class="imagecache imagecache_payment_system">
                            </div>
                            <div class="row row-payment_system">
                                <img src="images/bank-icon/skrill.png" alt="Skrill" title="Skrill" class="imagecache imagecache_payment_system">
                            </div>
                            <div class="row row-payment_system">
                                <img src="images/bank-icon/paypal.png" alt="PayPal" title="PayPal" class="imagecache imagecache_payment_system">
                            </div>
                            <div class="row row-payment_system">
                                <img src="images/bank-icon/neteller.png" alt="NETELLER" title="NETELLER" class="imagecache imagecache_payment_system">
                            </div>
                            <div class="row row-payment_system">
                                <img src="images/bank-icon/fasapay.png" alt="FasaPay" title="FasaPay" class="imagecache imagecache_payment_system">
                            </div>
                            <div class="row row-payment_system">
                                <img src="images/bank-icon/webmoney_0.png" alt="WebMoney" title="WebMoney" class="imagecache imagecache_payment_system">
                            </div>
                            <div class="row row-payment_system">
                                <img src="images/bank-icon/local_bank.png" alt="Local Bank (Indonesia)" title="Local Bank (Indonesia)" class="imagecache imagecache_payment_system">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-9">
            <div class="brokers-list">
                <h2>Forex cashback for brokers*</h2>

                <ul class="brokers-ul">

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="">
                            <div class="field-logo">
                                <img src="images/brokers/logo_fxpro_main.png">
                            </div>
                            <div class="field-teaser">
                                <span class="rebates_number">$4.4</span><br>
                                <span class="rebates-price">per lot</span>
                            </div>
                        </a>

                    </li>






                </ul>
            </div>

            <div class="clear"></div>
            <div style="font-size: 12px; color: #777777; margin: 15px 0px; font-style: italic;">* The average value for major instruments.</div>
            <hr class="solid">
            <div class="ceo_text">
                <div class="image float-left">
                    <img src="images/forex_trading.png">
                </div>
                <h2>What is forex cashback?</h2>
                <div class="main_text">
                    <p>Nowadays web search engines deliver a huge number of results to queries about Forex and Forex trading. They include Forex brokers’ sites, Forex forums, sites with Forex analytics, Forex calendars (economic calendar) and Forex news, sites on Forex education, various Forex signals and lots of other resources in some way connected with Forex (Forex trading).</p>
                    <p>Unfortunately the majority of these resources are useless or even harmful. Making the very first steps in Forex you can come across numerous resources about Forex education telling the tales about how easy it is to earn at the Forex market. Then when choosing a broker you can go into business with swindlers instead of licensed and regulated forex brokers. As a matter of fact only 5-10% of all companies claiming themselves as Forex brokers are really regulated. With the rest of the so-called Forex brokers you will never have a successful business at the Forex market.</p>
                    <p>Globe Gain Team<br>(Cashbackforex, forex cash back, forex cashback)</p>
                </div>
            </div>

        </div> <!--/ col-md-9 -->
    </div>
</div>