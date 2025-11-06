<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Monetary Policies</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/monetary/policies.php">Monetary</a> &rsaquo;
                Policies
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Global Monetary Policy Framework</h3>
            <p>Monetary policy refers to the actions undertaken by a nation's central bank to control money supply and
                achieve macroeconomic goals such as controlling inflation, consumption, growth, and liquidity. These
                policies are crucial for maintaining economic stability and facilitating international trade.</p>
        </div>

        <div class="content-section">
            <h3>Types of Monetary Policies</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Expansionary Policy</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Objective:</strong> Stimulate economic growth</p>
                        <p><strong>Tools:</strong> Lower interest rates, reduce reserve requirements, quantitative
                            easing</p>
                        <p><strong>Current Usage:</strong> 45% of central banks in expansionary mode</p>
                        <p><strong>Risks:</strong> Inflation, asset bubbles</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Contractionary Policy</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Objective:</strong> Control inflation, cool overheating economy</p>
                        <p><strong>Tools:</strong> Raise interest rates, increase reserve requirements, quantitative
                            tightening</p>
                        <p><strong>Current Usage:</strong> 35% of central banks in contractionary mode</p>
                        <p><strong>Risks:</strong> Economic slowdown, higher unemployment</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Neutral Policy</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Objective:</strong> Maintain current economic conditions</p>
                        <p><strong>Tools:</strong> Stable interest rates, minimal intervention</p>
                        <p><strong>Current Usage:</strong> 20% of central banks in neutral stance</p>
                        <p><strong>Benefits:</strong> Policy predictability, market stability</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Major Central Bank Policy Stances (2024)</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Central Bank</th>
                        <th>Policy Rate</th>
                        <th>Policy Stance</th>
                        <th>Inflation Target</th>
                        <th>Recent Policy Changes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Federal Reserve (US)</td>
                        <td>5.25-5.50%</td>
                        <td>Restrictive</td>
                        <td>2.0%</td>
                        <td>Paused rate hikes after 525 bps increase</td>
                    </tr>
                    <tr>
                        <td>European Central Bank</td>
                        <td>4.50%</td>
                        <td>Restrictive</td>
                        <td>2.0%</td>
                        <td>First rate cut expected Q3 2024</td>
                    </tr>
                    <tr>
                        <td>Bank of Japan</td>
                        <td>-0.10%</td>
                        <td>Accommodative</td>
                        <td>2.0%</td>
                        <td>Ended negative rates in March 2024</td>
                    </tr>
                    <tr>
                        <td>Bank of England</td>
                        <td>5.25%</td>
                        <td>Restrictive</td>
                        <td>2.0%</td>
                        <td>Holding rates amid persistent inflation</td>
                    </tr>
                    <tr>
                        <td>People's Bank of China</td>
                        <td>3.45%</td>
                        <td>Accommodative</td>
                        <td>3.0%</td>
                        <td>Targeted easing to support economy</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Monetary Policy Transmission Mechanisms</h3>
            <div style="background: var(--light-blue); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Policy Impact Channels</h4>
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-top: 15px;">
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Interest Rate Channel</strong><br>
                        Policy rates → market rates → consumption/investment
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Credit Channel</strong><br>
                        Bank lending conditions → credit availability → economic activity
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Exchange Rate Channel</strong><br>
                        Interest rates → exchange rates → net exports
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Asset Price Channel</strong><br>
                        Policy stance → asset prices → wealth effects → spending
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Unconventional Monetary Policies</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Quantitative Easing (QE)</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Definition:</strong> Large-scale asset purchases to inject liquidity</p>
                        <p><strong>Major Programs:</strong> Fed ($8.9T peak), ECB ($6.2T), BoJ ($6.8T)</p>
                        <p><strong>Effectiveness:</strong> Lowered long-term rates, supported recovery</p>
                        <p><strong>Risks:</strong> Balance sheet expansion, market distortions</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Forward Guidance</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Definition:</strong> Communication about future policy path</p>
                        <p><strong>Implementation:</strong> 85% of central banks use explicit guidance</p>
                        <p><strong>Benefits:</strong> Market stability, enhanced policy transmission</p>
                        <p><strong>Challenges:</strong> Credibility, flexibility trade-off</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Negative Interest Rates</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Definition:</strong> Policy rates below zero to stimulate lending</p>
                        <p><strong>Users:</strong> ECB, BoJ, Swiss National Bank, Riksbank</p>
                        <p><strong>Effectiveness:</strong> Mixed results, bank profitability concerns</p>
                        <p><strong>Current Status:</strong> Mostly phased out post-pandemic</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Policy Coordination and Spillover Effects</h3>
            <p>In an interconnected global economy, monetary policy decisions in major economies create significant
                spillover effects. The <?php echo $acronym; ?> research shows that Federal Reserve policy changes
                account for 30-40% of monetary policy variance in emerging markets.</p>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>Policy Action</th>
                        <th>Domestic Impact</th>
                        <th>International Spillovers</th>
                        <th>Coordination Mechanisms</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fed Rate Hike</td>
                        <td>Stronger USD, lower inflation</td>
                        <td>Capital outflows from EMs, currency pressure</td>
                        <td>BIS meetings, G20 coordination</td>
                    </tr>
                    <tr>
                        <td>ECB QE Program</td>
                        <td>Lower eurozone rates, growth support</td>
                        <td>Euro depreciation, trade advantages</td>
                        <td>IMF surveillance, bilateral swaps</td>
                    </tr>
                    <tr>
                        <td>PBOC Easing</td>
                        <td>Credit growth, economic stimulus</td>
                        <td>Commodity demand, regional growth</td>
                        <td>Regional financial arrangements</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>