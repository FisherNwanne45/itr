<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Trade Agreements</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/trade/agreements.php">Trade</a> &rsaquo;
                Agreements
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Global Trade Agreement Framework</h3>
            <p>International trade agreements establish the rules and frameworks that govern trade between countries,
                ranging from multilateral agreements involving many nations to bilateral agreements between two
                countries.</p>
        </div>

        <div class="content-section">
            <h3>Major Multilateral Agreements</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Agreement</th>
                        <th>Established</th>
                        <th>Member Countries</th>
                        <th>Key Provisions</th>
                        <th>Covered Trade (USD Trillion)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>World Trade Organization (WTO)</td>
                        <td>1995</td>
                        <td>164</td>
                        <td>General trade rules, dispute settlement</td>
                        <td>$18.5</td>
                    </tr>
                    <tr>
                        <td>General Agreement on Tariffs and Trade (GATT)</td>
                        <td>1948</td>
                        <td>128 (original)</td>
                        <td>Tariff reduction, non-discrimination</td>
                        <td>N/A (replaced by WTO)</td>
                    </tr>
                    <tr>
                        <td>General Agreement on Trade in Services (GATS)</td>
                        <td>1995</td>
                        <td>164</td>
                        <td>Services trade liberalization</td>
                        <td>$6.8</td>
                    </tr>
                    <tr>
                        <td>Trade-Related Aspects of Intellectual Property Rights (TRIPS)</td>
                        <td>1995</td>
                        <td>164</td>
                        <td>Intellectual property protection</td>
                        <td>N/A</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Major Regional Trade Agreements</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>European Union (EU)</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Members:</strong> 27 countries</p>
                        <p><strong>Established:</strong> 1993 (Maastricht Treaty)</p>
                        <p><strong>Key Features:</strong> Single market, customs union, common trade policy</p>
                        <p><strong>Intra-bloc Trade:</strong> $8.2 trillion</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>United States-Mexico-Canada Agreement (USMCA)</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Members:</strong> 3 countries</p>
                        <p><strong>Established:</strong> 2020</p>
                        <p><strong>Key Features:</strong> Modernized NAFTA, digital trade, labor standards</p>
                        <p><strong>Covered Trade:</strong> $1.4 trillion</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Regional Comprehensive Economic Partnership (RCEP)</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Members:</strong> 15 Asia-Pacific countries</p>
                        <p><strong>Established:</strong> 2022</p>
                        <p><strong>Key Features:</strong> Largest trade bloc by population, comprehensive coverage</p>
                        <p><strong>Covered Trade:</strong> $12.7 trillion</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Recent Trade Agreement Developments</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Agreement</th>
                        <th>Status</th>
                        <th>Key Innovations</th>
                        <th>Expected Economic Impact</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Comprehensive and Progressive Agreement for Trans-Pacific Partnership (CPTPP)</td>
                        <td>In force (2018)</td>
                        <td>High-standard provisions, digital trade chapter</td>
                        <td>+1.5% GDP for members by 2030</td>
                    </tr>
                    <tr>
                        <td>African Continental Free Trade Area (AfCFTA)</td>
                        <td>Operational phase</td>
                        <td>Pan-African integration, development focus</td>
                        <td>+$450 billion in African income by 2035</td>
                    </tr>
                    <tr>
                        <td>EU-Japan Economic Partnership Agreement</td>
                        <td>In force (2019)</td>
                        <td>Comprehensive coverage, sustainability chapters</td>
                        <td>+€36 billion for EU, +€29 billion for Japan</td>
                    </tr>
                    <tr>
                        <td>Digital Economy Partnership Agreement (DEPA)</td>
                        <td>In force (2021)</td>
                        <td>Digital trade rules, emerging technology cooperation</td>
                        <td>New framework for digital trade governance</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Trade Agreement Impacts and Effectiveness</h3>
            <div style="background: var(--light-blue); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Measured Impacts of Major Trade Agreements</h4>
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-top: 15px;">
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Tariff Reduction</strong><br>
                        85-95% elimination of tariffs among members
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Trade Creation</strong><br>
                        15-25% increase in intra-bloc trade volumes
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Investment Flows</strong><br>
                        20-40% increase in foreign direct investment
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Economic Growth</strong><br>
                        0.5-2.0% GDP growth for member countries
                    </div>
                </div>
            </div>

            <p>Modern trade agreements increasingly include provisions on labor standards, environmental protection,
                digital trade, and sustainable development, reflecting evolving global priorities beyond traditional
                market access issues.</p>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>