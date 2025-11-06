<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>International Trade Theories</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/trade/theories.php">Trade</a> &rsaquo;
                Theories
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Evolution of Trade Theories</h3>
            <p>International trade theories have evolved over centuries, from early mercantilist ideas to modern complex
                models that incorporate technology, economies of scale, and strategic behavior.</p>
        </div>

        <div class="content-section">
            <h3>Classical Trade Theories</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Theory</th>
                        <th>Key Proponent</th>
                        <th>Core Principle</th>
                        <th>Historical Context</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mercantilism</td>
                        <td>Thomas Mun</td>
                        <td>Maximize exports, minimize imports to accumulate wealth</td>
                        <td>16th-18th Century Europe</td>
                    </tr>
                    <tr>
                        <td>Absolute Advantage</td>
                        <td>Adam Smith</td>
                        <td>Countries should specialize in goods they produce most efficiently</td>
                        <td>Late 18th Century</td>
                    </tr>
                    <tr>
                        <td>Comparative Advantage</td>
                        <td>David Ricardo</td>
                        <td>Specialize based on relative efficiency (opportunity cost)</td>
                        <td>Early 19th Century</td>
                    </tr>
                    <tr>
                        <td>Heckscher-Ohlin Model</td>
                        <td>Eli Heckscher, Bertil Ohlin</td>
                        <td>Trade patterns determined by factor endowments</td>
                        <td>Early 20th Century</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Modern Trade Theories</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>New Trade Theory</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Key Contributors:</strong> Paul Krugman, Elhanan Helpman</p>
                        <p><strong>Core Concepts:</strong> Economies of scale, product differentiation, network effects
                        </p>
                        <p><strong>Application:</strong> Explains intra-industry trade between similar countries</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Gravity Model of Trade</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Key Contributors:</strong> Jan Tinbergen, Walter Isard</p>
                        <p><strong>Core Concepts:</strong> Trade flows proportional to economic size and inversely to
                            distance</p>
                        <p><strong>Application:</strong> Predicting bilateral trade patterns</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Product Life Cycle Theory</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Key Contributors:</strong> Raymond Vernon</p>
                        <p><strong>Core Concepts:</strong> Products move through innovation, growth, maturity stages
                            across countries</p>
                        <p><strong>Application:</strong> Explains shifting production locations</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Contemporary Theoretical Developments</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Theoretical Approach</th>
                        <th>Focus Area</th>
                        <th>Key Insights</th>
                        <th>Policy Implications</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>New Economic Geography</td>
                        <td>Spatial distribution of economic activity</td>
                        <td>Agglomeration effects and core-periphery patterns</td>
                        <td>Regional development policies</td>
                    </tr>
                    <tr>
                        <td>Institutional Trade Theory</td>
                        <td>Role of institutions in trade</td>
                        <td>Quality of institutions affects trade patterns and gains</td>
                        <td>Institutional reforms</td>
                    </tr>
                    <tr>
                        <td>Heterogeneous Firm Models</td>
                        <td>Firm-level differences</td>
                        <td>Only most productive firms engage in international trade</td>
                        <td>Export promotion policies</td>
                    </tr>
                    <tr>
                        <td>Global Value Chain Theory</td>
                        <td>Fragmentation of production</td>
                        <td>Tasks rather than final goods are traded</td>
                        <td>Trade in tasks and services</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Theoretical Applications in Modern Trade</h3>
            <div style="background: var(--light-blue); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Current Research Applications</h4>
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-top: 15px;">
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Digital Trade</strong><br>
                        Applying new trade theory to digital services and e-commerce
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Environmental Trade</strong><br>
                        Incorporating environmental externalities into trade models
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Services Trade</strong><br>
                        Extending goods-based theories to services sector
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Trade & Inequality</strong><br>
                        Analyzing distributional effects of trade liberalization
                    </div>
                </div>
            </div>

            <p>Modern trade theories continue to evolve, incorporating insights from behavioral economics, network
                theory, and computational methods to better explain complex global trade patterns.</p>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>