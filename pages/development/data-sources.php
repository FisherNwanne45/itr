<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Data Sources</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/development/data-sources.php">Development</a> &rsaquo;
                Data Sources
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Primary Data Sources</h3>
            <p>The <?php echo $acronym; ?> project integrates data from multiple authoritative sources to ensure
                comprehensive coverage and accuracy in our analysis of international trade and monetary systems.</p>
        </div>

        <div class="content-section">
            <h3>International Organization Databases</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Organization</th>
                        <th>Data Type</th>
                        <th>Update Frequency</th>
                        <th>Coverage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>World Trade Organization (WTO)</td>
                        <td>Trade statistics, tariff data, trade policy reviews</td>
                        <td>Monthly/Quarterly</td>
                        <td>164 member countries</td>
                    </tr>
                    <tr>
                        <td>International Monetary Fund (IMF)</td>
                        <td>Balance of payments, exchange rates, financial flows</td>
                        <td>Monthly/Quarterly</td>
                        <td>190 countries</td>
                    </tr>
                    <tr>
                        <td>World Bank</td>
                        <td>Development indicators, trade in services, investment</td>
                        <td>Annual/Quarterly</td>
                        <td>217 economies</td>
                    </tr>
                    <tr>
                        <td>United Nations COMTRADE</td>
                        <td>Detailed merchandise trade by product and partner</td>
                        <td>Annual</td>
                        <td>170+ countries</td>
                    </tr>
                    <tr>
                        <td>OECD</td>
                        <td>Trade in value-added, services trade, indicators</td>
                        <td>Annual/Quarterly</td>
                        <td>38 member countries + partners</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Regional and National Sources</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>European Union</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Eurostat - EU trade statistics</li>
                            <li>European Central Bank - monetary data</li>
                            <li>DG Trade - policy documents</li>
                            <li>National statistical offices</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>United States</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>U.S. Census Bureau - trade data</li>
                            <li>Bureau of Economic Analysis</li>
                            <li>Federal Reserve - monetary policy</li>
                            <li>USTR - trade policy</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Asia-Pacific</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>ASEAN Secretariat</li>
                            <li>Asian Development Bank</li>
                            <li>National statistics bureaus</li>
                            <li>Central banks</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Specialized Databases</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Database</th>
                        <th>Focus Area</th>
                        <th>Provider</th>
                        <th>Key Metrics</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>World Integrated Trade Solution (WITS)</td>
                        <td>Tariff and trade analysis</td>
                        <td>World Bank/WTO</td>
                        <td>Tariff rates, trade flows, protection indices</td>
                    </tr>
                    <tr>
                        <td>Global Trade Alert</td>
                        <td>Trade policy interventions</td>
                        <td>CEPR</td>
                        <td>Policy changes, discrimination indices</td>
                    </tr>
                    <tr>
                        <td>TRADING ECONOMICS</td>
                        <td>Economic indicators</td>
                        <td>Private provider</td>
                        <td>200,000+ indicators from 196 countries</td>
                    </tr>
                    <tr>
                        <td>BACI</td>
                        <td>Harmonized trade flows</td>
                        <td>CEPII</td>
                        <td>Bilateral trade at product level</td>
                    </tr>
                    <tr>
                        <td>DOTS</td>
                        <td>Direction of trade statistics</td>
                        <td>IMF</td>
                        <td>Bilateral trade, current account</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Data Processing and Integration</h3>
            <p>Our data processing pipeline ensures consistency, accuracy, and comparability across different sources:
            </p>

            <div style="background: var(--light-blue); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Data Processing Steps</h4>
                <ol style="margin-left: 20px;">
                    <li><strong>Collection:</strong> Automated data harvesting from primary sources</li>
                    <li><strong>Cleaning:</strong> Removal of duplicates, correction of errors</li>
                    <li><strong>Harmonization:</strong> Standardization of classifications and units</li>
                    <li><strong>Validation:</strong> Cross-checking with alternative sources</li>
                    <li><strong>Integration:</strong> Combining data into unified databases</li>
                    <li><strong>Documentation:</strong> Metadata creation and source attribution</li>
                </ol>
            </div>

            <p>All processed data undergoes regular audits and quality checks to maintain the highest standards of
                accuracy and reliability.</p>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>