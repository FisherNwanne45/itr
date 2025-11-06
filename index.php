<?php
// index.php
require_once 'header.php';
?>

<main>
    <!-- Hero Slider -->
    <section class="slider">
        <div class="slide active" style="background-image: url('assets/images/slider1.jpg');">
            <div class="slide-content">
                <h2>Understanding Global Trade Dynamics</h2>
                <p>Comprehensive research and analysis of international trade patterns, policies, and economic impacts
                    across global markets.</p>
                <a href="<?php echo $site_url; ?>/pages/trade/basics.php" class="btn">Explore Trade Basics</a>
            </div>
        </div>
        <div class="slide" style="background-image: url('assets/images/slider2.jpg');">
            <div class="slide-content">
                <h2>Monetary Policy & Exchange Rates</h2>
                <p>In-depth analysis of central bank policies, currency fluctuations, and their effects on international
                    trade and investment.</p>
                <a href="<?php echo $site_url; ?>/pages/monetary/policies.php" class="btn">Learn About Monetary
                    Systems</a>
            </div>
        </div>
        <div class="slide" style="background-image: url('assets/images/slider3.jpg');">
            <div class="slide-content">
                <h2>Country-Specific Trade Analysis</h2>
                <p>Detailed profiles of national economies, trade relationships, and regional economic integration
                    initiatives.</p>
                <a href="<?php echo $site_url; ?>/pages/countries/overview.php" class="btn">View Country Profiles</a>
            </div>
        </div>
        <div class="slider-nav">
            <div class="slider-dot active"></div>
            <div class="slider-dot"></div>
            <div class="slider-dot"></div>
        </div>
    </section>

    <div class="container">
        <div class="content-section">
            <h3>About International Trade Research</h3>
            <p>Welcome to the <?php echo $acronym; ?> platform, a comprehensive resource for understanding global trade
                dynamics, monetary systems, and economic policies. Our mission is to provide researchers, policymakers,
                and students with accurate data, insightful analysis, and educational resources.</p>

            <p>International trade is the exchange of capital, goods, and services across international borders or
                territories. In most countries, such trade represents a significant share of gross domestic product
                (GDP).</p>
        </div>

        <div class="content-section">
            <h3>Key Research Areas</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-img" style="background-image: url('assets/images/trade-theories.jpg');"></div>
                    <div class="card-body">
                        <h4>Trade Theories</h4>
                        <p>Explore classical and modern theories of international trade including comparative advantage,
                            factor proportions theory, and new trade theory.</p>
                        <a href="<?php echo $site_url; ?>/pages/trade/theories.php" class="card-link">Learn More →</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image: url('assets/images/trade-agreements.jpg');"></div>
                    <div class="card-body">
                        <h4>Trade Agreements</h4>
                        <p>Analysis of major trade agreements like WTO, USMCA, EU, and RCEP and their impacts on global
                            commerce.</p>
                        <a href="<?php echo $site_url; ?>/pages/trade/agreements.php" class="card-link">Learn More →</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image: url('assets/images/monetary-systems.jpg');"></div>
                    <div class="card-body">
                        <h4>Monetary Systems</h4>
                        <p>Understanding exchange rates, central bank policies, and international monetary systems that
                            facilitate global trade.</p>
                        <a href="<?php echo $site_url; ?>/pages/monetary/policies.php" class="card-link">Learn More
                            →</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Recent Global Trade Data</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Country/Region</th>
                        <th>Total Trade Volume (2023)</th>
                        <th>Major Exports</th>
                        <th>Major Imports</th>
                        <th>Trade Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>China</td>
                        <td>$5.3 trillion</td>
                        <td>Electronics, Machinery, Textiles</td>
                        <td>Oil, Minerals, Agricultural Products</td>
                        <td>+$535 billion</td>
                    </tr>
                    <tr>
                        <td>United States</td>
                        <td>$4.9 trillion</td>
                        <td>Aircraft, Machinery, Pharmaceuticals</td>
                        <td>Automobiles, Electronics, Oil</td>
                        <td>-$891 billion</td>
                    </tr>
                    <tr>
                        <td>European Union</td>
                        <td>$5.8 trillion</td>
                        <td>Machinery, Vehicles, Chemicals</td>
                        <td>Energy, Raw Materials, Electronics</td>
                        <td>+$289 billion</td>
                    </tr>
                    <tr>
                        <td>Japan</td>
                        <td>$1.4 trillion</td>
                        <td>Vehicles, Machinery, Electronics</td>
                        <td>Oil, LNG, Food Products</td>
                        <td>+$42 billion</td>
                    </tr>
                    <tr>
                        <td>ASEAN</td>
                        <td>$2.7 trillion</td>
                        <td>Electronics, Petroleum, Palm Oil</td>
                        <td>Machinery, Vehicles, Refined Oil</td>
                        <td>+$118 billion</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Featured Visualizations Section Added Here -->
        <div class="content-section">

            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Global Trade Flow Map</h4>
                    </div>
                    <div class="card-body">
                        <div id="tradeFlowMap"
                            style="height: 200px; background: var(--light-gray); position: relative; margin-bottom: 15px;">
                            <div
                                style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: var(--dark-gray);">
                                <div style="font-size: 14px; margin-bottom: 10px;">World Trade Flow Visualization</div>
                                <div style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap;">
                                    <div
                                        style="padding: 5px 10px; background: #e74c3c; color: white; border-radius: 3px; font-size: 12px;">
                                        Imports</div>
                                    <div
                                        style="padding: 5px 10px; background: #2ecc71; color: white; border-radius: 3px; font-size: 12px;">
                                        Exports</div>
                                    <div
                                        style="padding: 5px 10px; background: #3498db; color: white; border-radius: 3px; font-size: 12px;">
                                        Balance</div>
                                </div>
                            </div>
                            <!-- Simplified world map outline -->
                            <svg width="100%" height="100%" viewBox="0 0 800 400"
                                style="position: absolute; top: 0; left: 0;">
                                <!-- Simplified continent shapes -->
                                <path d="M150,100 Q200,80 250,100 Q300,120 280,150 Q260,180 220,170 Q180,160 150,140 Z"
                                    fill="#3498db" fill-opacity="0.3" stroke="#2980b9" stroke-width="2" />
                                <path d="M400,120 Q450,100 500,120 Q550,140 520,170 Q490,200 450,190 Q410,180 380,160 Z"
                                    fill="#2ecc71" fill-opacity="0.3" stroke="#27ae60" stroke-width="2" />
                                <path d="M300,250 Q350,230 400,250 Q450,270 420,300 Q390,330 350,320 Q310,310 280,290 Z"
                                    fill="#e74c3c" fill-opacity="0.3" stroke="#c0392b" stroke-width="2" />

                                <!-- Trade flow lines -->
                                <line x1="200" y1="130" x2="420" y2="140" stroke="#e74c3c" stroke-width="3"
                                    stroke-dasharray="5,5" />
                                <line x1="450" y1="155" x2="320" y2="270" stroke="#2ecc71" stroke-width="3" />
                                <line x1="280" y1="280" x2="180" y2="150" stroke="#3498db" stroke-width="3"
                                    stroke-dasharray="5,5" />
                            </svg>
                        </div>
                        <p><strong>Description:</strong> Interactive map showing bilateral trade flows between countries
                            with animated flow lines.</p>
                        <p><strong>Data Coverage:</strong> 195 countries, 1990-2023</p>
                        <p><strong>Key Features:</strong> Time slider, commodity filters, trade balance indicators</p>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Trade Policy Dashboard</h4>
                    </div>
                    <div class="card-body">
                        <div id="policyDashboard"
                            style="height: 200px; background: var(--light-gray); position: relative; margin-bottom: 15px; padding: 15px;">
                            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; height: 100%;">
                                <div
                                    style="background: white; border-radius: 5px; padding: 10px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <div style="font-size: 24px; font-weight: bold; color: var(--primary-blue);">164
                                    </div>
                                    <div style="font-size: 12px; text-align: center;">WTO Members</div>
                                </div>
                                <div
                                    style="background: white; border-radius: 5px; padding: 10px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <div style="font-size: 24px; font-weight: bold; color: #e74c3c;">285</div>
                                    <div style="font-size: 12px; text-align: center;">Trade Measures</div>
                                </div>
                                <div
                                    style="background: white; border-radius: 5px; padding: 10px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <div style="font-size: 24px; font-weight: bold; color: #2ecc71;">45</div>
                                    <div style="font-size: 12px; text-align: center;">Active Agreements</div>
                                </div>
                                <div
                                    style="background: white; border-radius: 5px; padding: 10px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <div style="font-size: 24px; font-weight: bold; color: #f39c12;">12</div>
                                    <div style="font-size: 12px; text-align: center;">Disputes</div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Description:</strong> Comprehensive dashboard tracking trade policy changes and their
                            economic impacts.</p>
                        <p><strong>Data Coverage:</strong> 164 WTO members, 2015-2024</p>
                        <p><strong>Key Features:</strong> Policy database, impact assessment, trend analysis</p>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Supply Chain Network Analysis</h4>
                    </div>
                    <div class="card-body">
                        <div id="supplyChainNetwork"
                            style="height: 200px; background: var(--light-gray); position: relative; margin-bottom: 15px;">
                            <svg width="100%" height="100%" viewBox="0 0 600 300"
                                style="position: absolute; top: 0; left: 0;">
                                <!-- Nodes -->
                                <circle cx="100" cy="150" r="20" fill="#3498db" stroke="#2980b9" stroke-width="2" />
                                <circle cx="300" cy="100" r="15" fill="#2ecc71" stroke="#27ae60" stroke-width="2" />
                                <circle cx="300" cy="200" r="15" fill="#2ecc71" stroke="#27ae60" stroke-width="2" />
                                <circle cx="500" cy="150" r="20" fill="#e74c3c" stroke="#c0392b" stroke-width="2" />

                                <!-- Connections -->
                                <line x1="120" y1="150" x2="285" y2="100" stroke="#7f8c8d" stroke-width="2" />
                                <line x1="120" y1="150" x2="285" y2="200" stroke="#7f8c8d" stroke-width="2" />
                                <line x1="315" y1="100" x2="480" y2="150" stroke="#7f8c8d" stroke-width="2" />
                                <line x1="315" y1="200" x2="480" y2="150" stroke="#7f8c8d" stroke-width="2" />

                                <!-- Labels -->
                                <text x="100" y="190" text-anchor="middle" fill="#2c3e50" font-size="12">Supplier
                                    A</text>
                                <text x="300" y="80" text-anchor="middle" fill="#2c3e50" font-size="10">Manufacturer
                                    B</text>
                                <text x="300" y="230" text-anchor="middle" fill="#2c3e50" font-size="10">Manufacturer
                                    C</text>
                                <text x="500" y="190" text-anchor="middle" fill="#2c3e50" font-size="12">Consumer
                                    D</text>
                            </svg>
                        </div>
                        <p><strong>Description:</strong> Interactive network diagrams showing global value chain
                            connections and dependencies.</p>
                        <p><strong>Data Coverage:</strong> 50 major industries, 2000-2023</p>
                        <p><strong>Key Features:</strong> Sector filters, risk analysis, dependency mapping</p>

                    </div>
                </div>
            </div>

        </div>

        <div class="content-section">
            <h3>Latest Research</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-img" style="background-image: url('assets/images/digital-trade.jpg');"></div>
                    <div class="card-body">
                        <h4>Impact of Digital Trade</h4>
                        <p>Examining how digitalization is transforming international trade patterns and creating new
                            opportunities for SMEs.</p>
                        <a href="<?php echo $site_url; ?>/pages/research/research-articles.php" class="card-link">Read
                            Article →</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image: url('assets/images/supply-chain.jpg');"></div>
                    <div class="card-body">
                        <h4>Supply Chain Resilience</h4>
                        <p>Analysis of post-pandemic supply chain restructuring and its implications for global trade
                            flows.</p>
                        <a href="<?php echo $site_url; ?>/pages/research/research-articles.php" class="card-link">Read
                            Article →</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background-image: url('assets/images/sustainable-trade.jpg');"></div>
                    <div class="card-body">
                        <h4>Sustainable Trade Practices</h4>
                        <p>Exploring how environmental considerations are reshaping international trade agreements and
                            practices.</p>
                        <a href="<?php echo $site_url; ?>/pages/research/research-articles.php" class="card-link">Read
                            Article →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Add the visualization animation script -->
<script>
    // Simple animation for the trade flow map
    document.addEventListener('DOMContentLoaded', function() {
        const tradeLines = document.querySelectorAll('#tradeFlowMap line');
        tradeLines.forEach((line, index) => {
            // Add animation delay
            line.style.animation = `dash 3s linear infinite ${index * 0.5}s`;
        });

        // Add CSS for the animation
        const style = document.createElement('style');
        style.textContent = `
        @keyframes dash {
            to {
                stroke-dashoffset: -20;
            }
        }
    `;
        document.head.appendChild(style);
    });
</script>

<?php
require_once 'footer.php';
?>