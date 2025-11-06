<?php
require_once '../../header.php';

// Sample country data - in a real application, this would come from a database
$country_code = isset($_GET['code']) ? $_GET['code'] : 'USA';
$countries = [
    'USA' => [
        'name' => 'United States',
        'capital' => 'Washington D.C.',
        'population' => '336 million',
        'gdp' => '$27.4 trillion',
        'gdp_growth' => '2.5%',
        'inflation' => '3.4%',
        'trade_balance' => '-$891 billion',
        'unemployment' => '3.8%',
        'main_exports' => 'Services, Technology, Aerospace, Agricultural Products',
        'main_imports' => 'Consumer Goods, Automotive, Electronics, Oil',
        'trading_partners' => 'China, Canada, Mexico, European Union, Japan',
        'trade_agreements' => 'USMCA, WTO, bilateral agreements with 20 countries',
        'currency' => 'US Dollar (USD)',
        'central_bank' => 'Federal Reserve System',
        'economic_freedom' => '76.2/100',
        'ease_business' => '6th globally',
        'innovation_index' => '1st globally',
        'description' => 'The United States has the world\'s largest economy, characterized by advanced technology infrastructure, abundant natural resources, and high productivity. Its service sector accounts for 80% of GDP, with significant contributions from technology, finance, healthcare, and retail.',
        'sectors' => [
            'Services' => '80% of GDP',
            'Industry' => '18.9% of GDP',
            'Agriculture' => '1.1% of GDP'
        ],
        'key_industries' => 'Technology, Finance, Healthcare, Aerospace, Automotive, Pharmaceuticals',
        'recent_developments' => 'Inflation reduction through aggressive monetary policy, CHIPS Act implementation, Infrastructure Investment and Jobs Act rollout'
    ],
    'CHN' => [
        'name' => 'China',
        'capital' => 'Beijing',
        'population' => '1.425 billion',
        'gdp' => '$18.5 trillion',
        'gdp_growth' => '5.2%',
        'inflation' => '2.8%',
        'trade_balance' => '+$535 billion',
        'unemployment' => '5.2%',
        'main_exports' => 'Electronics, Machinery, Textiles, Furniture, Toys',
        'main_imports' => 'Oil, Integrated Circuits, Iron Ore, Vehicles, Soybeans',
        'trading_partners' => 'United States, European Union, ASEAN, Japan, South Korea',
        'trade_agreements' => 'RCEP, bilateral agreements with 26 countries',
        'currency' => 'Chinese Yuan (CNY)',
        'central_bank' => 'People\'s Bank of China',
        'economic_freedom' => '48.3/100',
        'ease_business' => '31st globally',
        'innovation_index' => '12th globally',
        'description' => 'China has transformed from a centrally planned to a market-based economy and is now the world\'s second largest. It is the largest exporter and second largest importer of goods, with manufacturing accounting for 40% of GDP.',
        'sectors' => [
            'Services' => '53% of GDP',
            'Industry' => '40% of GDP',
            'Agriculture' => '7% of GDP'
        ],
        'key_industries' => 'Manufacturing, Technology, Construction, E-commerce, Renewable Energy',
        'recent_developments' => 'Dual circulation strategy, Belt and Road Initiative advancement, technology self-sufficiency drive'
    ],
    'DEU' => [
        'name' => 'Germany',
        'capital' => 'Berlin',
        'population' => '83 million',
        'gdp' => '$4.6 trillion',
        'gdp_growth' => '0.2%',
        'inflation' => '2.9%',
        'trade_balance' => '+$289 billion',
        'unemployment' => '3.2%',
        'main_exports' => 'Vehicles, Machinery, Chemicals, Electronics, Pharmaceuticals',
        'main_imports' => 'Oil, Vehicles, Electronics, Pharmaceuticals, Food Products',
        'trading_partners' => 'European Union, United States, China, United Kingdom, Switzerland',
        'trade_agreements' => 'European Union, bilateral agreements',
        'currency' => 'Euro (EUR)',
        'central_bank' => 'European Central Bank (with Bundesbank)',
        'economic_freedom' => '72.5/100',
        'ease_business' => '22nd globally',
        'innovation_index' => '8th globally',
        'description' => 'Germany has Europe\'s largest economy and is known for its highly developed social market economy. It is a global leader in several industrial and technological sectors and has a highly skilled labor force.',
        'sectors' => [
            'Services' => '68% of GDP',
            'Industry' => '30.7% of GDP',
            'Agriculture' => '1.3% of GDP'
        ],
        'key_industries' => 'Automotive, Machinery, Chemicals, Electronics, Renewable Energy',
        'recent_developments' => 'Energy transition (Energiewende), digital transformation initiative, response to energy price shocks'
    ]
];

$country = $countries[$country_code] ?? $countries['USA'];
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2><?php echo $country['name']; ?> - Country Profile</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/countries/overview.php">Countries</a> &rsaquo;
                <?php echo $country['name']; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Economic Overview</h3>
            <p><?php echo $country['description']; ?></p>

            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Basic Information</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Capital:</strong> <?php echo $country['capital']; ?></p>
                        <p><strong>Population:</strong> <?php echo $country['population']; ?></p>
                        <p><strong>Currency:</strong> <?php echo $country['currency']; ?></p>
                        <p><strong>Central Bank:</strong> <?php echo $country['central_bank']; ?></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Economic Indicators</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>GDP:</strong> <?php echo $country['gdp']; ?></p>
                        <p><strong>GDP Growth:</strong> <?php echo $country['gdp_growth']; ?></p>
                        <p><strong>Inflation Rate:</strong> <?php echo $country['inflation']; ?></p>
                        <p><strong>Unemployment:</strong> <?php echo $country['unemployment']; ?></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>International Rankings</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Economic Freedom:</strong> <?php echo $country['economic_freedom']; ?></p>
                        <p><strong>Ease of Business:</strong> <?php echo $country['ease_business']; ?></p>
                        <p><strong>Innovation Index:</strong> <?php echo $country['innovation_index']; ?></p>
                        <p><strong>Trade Balance:</strong> <?php echo $country['trade_balance']; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Economic Structure</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Sector</th>
                        <th>Contribution to GDP</th>
                        <th>Employment Share</th>
                        <th>Growth Rate</th>
                        <th>Key Sub-sectors</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($country['sectors'] as $sector => $contribution): ?>
                        <tr>
                            <td><?php echo $sector; ?></td>
                            <td><?php echo $contribution; ?></td>
                            <td>
                                <?php
                                // Sample employment data
                                $employment = [
                                    'Services' => '75%',
                                    'Industry' => '22%',
                                    'Agriculture' => '3%'
                                ];
                                echo $employment[$sector] ?? 'N/A';
                                ?>
                            </td>
                            <td>
                                <?php
                                // Sample growth rates
                                $growth = [
                                    'Services' => '3.2%',
                                    'Industry' => '2.1%',
                                    'Agriculture' => '1.5%'
                                ];
                                echo $growth[$sector] ?? 'N/A';
                                ?>
                            </td>
                            <td>
                                <?php
                                // Sample sub-sectors
                                $subsectors = [
                                    'Services' => 'Finance, IT, Healthcare, Retail',
                                    'Industry' => 'Manufacturing, Construction, Mining',
                                    'Agriculture' => 'Crops, Livestock, Forestry'
                                ];
                                echo $subsectors[$sector] ?? 'N/A';
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>International Trade Profile</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Exports</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Main Exports:</strong> <?php echo $country['main_exports']; ?></p>
                        <p><strong>Top Destinations:</strong> <?php echo $country['trading_partners']; ?></p>
                        <p><strong>Export Growth:</strong> +4.8% (2023-2024)</p>
                        <p><strong>High-tech Exports:</strong> 28% of manufactured exports</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Imports</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Main Imports:</strong> <?php echo $country['main_imports']; ?></p>
                        <p><strong>Top Sources:</strong> <?php echo $country['trading_partners']; ?></p>
                        <p><strong>Import Growth:</strong> +3.2% (2023-2024)</p>
                        <p><strong>Energy Imports:</strong> 15% of total imports</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Trade Policy</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Trade Agreements:</strong> <?php echo $country['trade_agreements']; ?></p>
                        <p><strong>Average Tariff:</strong> 2.1% (weighted mean)</p>
                        <p><strong>Trade Freedom:</strong> 85.2/100</p>
                        <p><strong>WTO Membership:</strong> Since 1995</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Key Industries and Competitiveness</h3>
            <div style="background: var(--light-blue); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Strategic Industries</h4>
                <p><strong>Leading Industries:</strong> <?php echo $country['key_industries']; ?></p>
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-top: 15px;">
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Global Market Share</strong><br>
                        Top 3 in 8 major industries
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>R&D Investment</strong><br>
                        3.2% of GDP annually
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Productivity Growth</strong><br>
                        1.8% annually (5-year average)
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Export Competitiveness</strong><br>
                        7.8/10 global ranking
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Recent Economic Developments</h3>
            <p><strong>Key Developments:</strong> <?php echo $country['recent_developments']; ?></p>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>Policy Area</th>
                        <th>Recent Initiatives</th>
                        <th>Expected Impact</th>
                        <th>Implementation Timeline</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monetary Policy</td>
                        <td>Interest rate adjustments, quantitative tightening</td>
                        <td>Inflation control, exchange rate stability</td>
                        <td>2023-2025</td>
                    </tr>
                    <tr>
                        <td>Fiscal Policy</td>
                        <td>Infrastructure investment, tax reforms</td>
                        <td>Growth stimulation, debt management</td>
                        <td>2024-2026</td>
                    </tr>
                    <tr>
                        <td>Trade Policy</td>
                        <td>New trade agreements, export promotion</td>
                        <td>Market diversification, export growth</td>
                        <td>2024-2027</td>
                    </tr>
                    <tr>
                        <td>Industrial Policy</td>
                        <td>Green transition, digital transformation</td>
                        <td>Competitiveness enhancement, job creation</td>
                        <td>2024-2030</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Economic Outlook and Risks</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Short-term Outlook (2024-2025)</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>GDP Growth:</strong> 2.3-2.8%</p>
                        <p><strong>Inflation:</strong> 2.5-3.0%</p>
                        <p><strong>Employment:</strong> Stable with modest growth</p>
                        <p><strong>Trade:</strong> Gradual export recovery</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Medium-term Outlook (2026-2028)</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>GDP Growth:</strong> 2.0-2.5%</p>
                        <p><strong>Productivity:</strong> Moderate improvement</p>
                        <p><strong>Investment:</strong> Steady growth in green and digital</p>
                        <p><strong>Global Integration:</strong> Continued but selective</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Key Risks and Challenges</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Geopolitical tensions affecting trade</li>
                            <li>Climate change impacts and transition costs</li>
                            <li>Technological disruption and skills gaps</li>
                            <li>Demographic changes and fiscal pressures</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Explore Other Countries</h3>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <a href="country-profile.php?code=USA"
                    style="padding: 10px 15px; background: var(--primary-blue); color: white; text-decoration: none; border-radius: 5px;">United
                    States</a>
                <a href="country-profile.php?code=CHN"
                    style="padding: 10px 15px; background: var(--primary-blue); color: white; text-decoration: none; border-radius: 5px;">China</a>
                <a href="country-profile.php?code=DEU"
                    style="padding: 10px 15px; background: var(--primary-blue); color: white; text-decoration: none; border-radius: 5px;">Germany</a>
                <a href="<?php echo $site_url; ?>/pages/countries/overview.php"
                    style="padding: 10px 15px; background: var(--dark-blue); color: white; text-decoration: none; border-radius: 5px;">All
                    Countries</a>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>