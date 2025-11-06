<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>International Trade Basics</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/trade/basics.php">Trade</a> &rsaquo;
                Basics
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Fundamentals of International Trade</h3>
            <p>International trade involves the exchange of goods, services, and capital across international borders.
                It represents a significant portion of gross domestic product (GDP) for most countries and is a key
                driver of global economic growth and development.</p>
        </div>

        <div class="content-section">
            <h3>Key Concepts and Terminology</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Balance of Trade</h4>
                    </div>
                    <div class="card-body">
                        <p>The difference between a country's exports and imports of goods. A trade surplus occurs when
                            exports exceed imports, while a trade deficit occurs when imports exceed exports.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Comparative Advantage</h4>
                    </div>
                    <div class="card-body">
                        <p>The ability of a country to produce goods or services at a lower opportunity cost than other
                            countries, forming the basis for beneficial trade relationships.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Tariffs and Quotas</h4>
                    </div>
                    <div class="card-body">
                        <p>Tariffs are taxes on imported goods, while quotas are quantity restrictions on imports. Both
                            are tools used to protect domestic industries.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Global Trade Flows (2023 Data)</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Trade Flow</th>
                        <th>Value (USD Trillions)</th>
                        <th>Growth Rate (%)</th>
                        <th>Major Participants</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Merchandise Trade</td>
                        <td>$25.3</td>
                        <td>+2.7%</td>
                        <td>China, USA, Germany</td>
                    </tr>
                    <tr>
                        <td>Services Trade</td>
                        <td>$7.2</td>
                        <td>+4.1%</td>
                        <td>USA, UK, Germany</td>
                    </tr>
                    <tr>
                        <td>Digital Trade</td>
                        <td>$3.8</td>
                        <td>+12.3%</td>
                        <td>USA, China, EU</td>
                    </tr>
                    <tr>
                        <td>Agricultural Trade</td>
                        <td>$1.9</td>
                        <td>+1.2%</td>
                        <td>USA, Brazil, EU</td>
                    </tr>
                    <tr>
                        <td>Energy Trade</td>
                        <td>$3.2</td>
                        <td>+5.8%</td>
                        <td>Middle East, Russia, USA</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Trade Documentation and Procedures</h3>
            <p>International trade involves complex documentation and regulatory procedures. Key documents include:</p>

            <div style="background: var(--light-blue); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Essential Trade Documents</h4>
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin-top: 15px;">
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Commercial Invoice</strong><br>
                        Details of transaction between seller and buyer
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Bill of Lading</strong><br>
                        Contract between owner and carrier for goods transport
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Certificate of Origin</strong><br>
                        Verifies country where goods were produced
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Insurance Certificate</strong><br>
                        Proof of insurance coverage for shipped goods
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Benefits and Challenges of International Trade</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header" style="background-color: #28a745;">
                        <h4>Benefits</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Economic growth and development</li>
                            <li>Access to larger markets</li>
                            <li>Lower prices for consumers</li>
                            <li>Technology transfer and innovation</li>
                            <li>Job creation in export sectors</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" style="background-color: #dc3545;">
                        <h4>Challenges</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Job displacement in import-competing sectors</li>
                            <li>Environmental concerns</li>
                            <li>Trade imbalances</li>
                            <li>Cultural homogenization</li>
                            <li>Dependency on global markets</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>