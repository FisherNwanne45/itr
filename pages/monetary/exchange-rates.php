<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Exchange Rates</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/monetary/exchange-rates.php">Monetary</a> &rsaquo;
                Exchange Rates
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Global Exchange Rate Systems</h3>
            <p>Exchange rates represent the value of one currency in terms of another and play a crucial role in
                international trade, investment, and economic stability. Understanding exchange rate dynamics is
                essential for businesses, investors, and policymakers engaged in global commerce.</p>
        </div>

        <div class="content-section">
            <h3>Major Exchange Rate Regimes</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Floating Exchange Rates</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Definition:</strong> Market-determined rates with minimal intervention</p>
                        <p><strong>Examples:</strong> USD, EUR, JPY, GBP, AUD, CAD</p>
                        <p><strong>Coverage:</strong> 45% of global GDP</p>
                        <p><strong>Benefits:</strong> Automatic adjustment, monetary independence</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Managed Float</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Definition:</strong> Market-determined with occasional central bank intervention</p>
                        <p><strong>Examples:</strong> CNY, INR, BRL, KRW, SGD</p>
                        <p><strong>Coverage:</strong> 35% of global GDP</p>
                        <p><strong>Benefits:</strong> Stability with flexibility</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Fixed Pegs</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Definition:</strong> Fixed value relative to another currency or basket</p>
                        <p><strong>Examples:</strong> HKD (USD), DKK (EUR), SAR (USD)</p>
                        <p><strong>Coverage:</strong> 15% of global GDP</p>
                        <p><strong>Benefits:</strong> Trade stability, inflation control</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Major Currency Performance (2020-2024)</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Currency</th>
                        <th>Current Rate vs USD</th>
                        <th>1-Year Change</th>
                        <th>5-Year Volatility</th>
                        <th>Reserve Currency Share</th>
                        <th>Trade Weight</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>US Dollar (USD)</td>
                        <td>1.0000</td>
                        <td>+4.2%</td>
                        <td>8.5%</td>
                        <td>58.4%</td>
                        <td>40.1%</td>
                    </tr>
                    <tr>
                        <td>Euro (EUR)</td>
                        <td>0.9200</td>
                        <td>-2.1%</td>
                        <td>9.8%</td>
                        <td>20.5%</td>
                        <td>31.2%</td>
                    </tr>
                    <tr>
                        <td>Japanese Yen (JPY)</td>
                        <td>155.20</td>
                        <td>-12.5%</td>
                        <td>12.3%</td>
                        <td>5.7%</td>
                        <td>8.5%</td>
                    </tr>
                    <tr>
                        <td>British Pound (GBP)</td>
                        <td>0.7900</td>
                        <td>+1.8%</td>
                        <td>11.2%</td>
                        <td>4.9%</td>
                        <td>6.8%</td>
                    </tr>
                    <tr>
                        <td>Chinese Yuan (CNY)</td>
                        <td>7.2500</td>
                        <td>-3.2%</td>
                        <td>6.5%</td>
                        <td>2.6%</td>
                        <td>12.4%</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Exchange Rate Determination Theories</h3>
            <div style="background: var(--light-blue); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Key Theoretical Frameworks</h4>
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-top: 15px;">
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Purchasing Power Parity (PPP)</strong><br>
                        Exchange rates adjust to equalize price levels across countries
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Interest Rate Parity</strong><br>
                        Difference in interest rates equals expected exchange rate change
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Balance of Payments Approach</strong><br>
                        Current account imbalances drive exchange rate adjustments
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Asset Market Approach</strong><br>
                        Exchange rates as asset prices determined by capital flows
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Global Currency Trading Statistics</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Market Segment</th>
                        <th>Daily Turnover (USD Billions)</th>
                        <th>Growth (2019-2022)</th>
                        <th>Major Participants</th>
                        <th>Trading Centers</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Spot Transactions</td>
                        <td>$2,100</td>
                        <td>+18%</td>
                        <td>Banks, corporations, funds</td>
                        <td>London, New York, Singapore</td>
                    </tr>
                    <tr>
                        <td>Outright Forwards</td>
                        <td>$1,050</td>
                        <td>+22%</td>
                        <td>Corporations, institutional investors</td>
                        <td>Global distribution</td>
                    </tr>
                    <tr>
                        <td>Foreign Exchange Swaps</td>
                        <td>$3,200</td>
                        <td>+25%</td>
                        <td>Banks, central banks</td>
                        <td>London, New York, Tokyo</td>
                    </tr>
                    <tr>
                        <td>Currency Options</td>
                        <td>$350</td>
                        <td>+30%</td>
                        <td>Hedge funds, corporations</td>
                        <td>Chicago, London, Singapore</td>
                    </tr>
                    <tr>
                        <td>Total FX Market</td>
                        <td>$7,500</td>
                        <td>+21%</td>
                        <td>Diverse participant base</td>
                        <td>Global 24-hour market</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Exchange Rate Impacts on International Trade</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Competitiveness Effects</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Export Competitiveness:</strong> 10% depreciation typically boosts exports by 2-3%
                        </p>
                        <p><strong>Import Substitution:</strong> Currency weakness encourages domestic production</p>
                        <p><strong>Time Lags:</strong> J-curve effect - initial deterioration before improvement</p>
                        <p><strong>Sector Variations:</strong> Manufacturing more sensitive than services</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Corporate Risk Management</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Hedging Strategies:</strong> 65% of multinationals hedge currency exposure</p>
                        <p><strong>Natural Hedging:</strong> Local sourcing and production</p>
                        <p><strong>Financial Instruments:</strong> Forwards, options, swaps</p>
                        <p><strong>Budget Rates:</strong> Conservative rate assumptions for planning</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Policy Implications</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Competitive Devaluations:</strong> "Currency wars" risk</p>
                        <p><strong>Capital Controls:</strong> Used by 40% of emerging markets</p>
                        <p><strong>International Coordination:</strong> G7, G20 agreements</p>
                        <p><strong>Reserve Accumulation:</strong> $12.8 trillion global reserves</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Emerging Trends in Foreign Exchange</h3>
            <p>The foreign exchange market is undergoing significant transformation driven by technological innovation,
                regulatory changes, and evolving market structure:</p>

            <ul style="margin-left: 20px; margin-bottom: 20px;">
                <li><strong>Electronic Trading:</strong> 85% of spot FX now traded electronically</li>
                <li><strong>Algorithmic Trading:</strong> 45% of volume from algorithmic strategies</li>
                <li><strong>Cryptocurrency Integration:</strong> Growing correlation between crypto and traditional FX
                </li>
                <li><strong>Regulatory Changes:</strong> MiFID II, Basel III impacting market structure</li>
                <li><strong>Emerging Market Currencies:</strong> Increasing liquidity and acceptance</li>
            </ul>

            <p>According to <?php echo $acronym; ?> research, digital transformation could reduce FX trading costs by
                15-20% over the next five years while increasing market efficiency and accessibility.</p>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>