<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Our Team</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/about/about-project.php">About</a> &rsaquo;
                Our Team
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Core Research Team</h3>
            <p>The <?php echo $acronym; ?> project brings together a diverse team of economists, researchers, data
                scientists, and policy experts with extensive experience in international trade and monetary economics.
            </p>

            <div class="card-container">
                <div class="card">
                    <div class="card-img"
                        style="background-color: var(--light-blue); display: flex; align-items: center; justify-content: center; color: var(--dark-blue); font-size: 3rem;">
                        <i>👨‍💼</i>
                    </div>
                    <div class="card-body">
                        <h4>Dr. Sarah Chen</h4>
                        <p><strong>Project Director</strong><br>
                            PhD in International Economics, Harvard University<br>
                            Former Senior Economist at WTO<br>
                            Specialization: Trade Policy Analysis</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img"
                        style="background-color: var(--light-blue); display: flex; align-items: center; justify-content: center; color: var(--dark-blue); font-size: 3rem;">
                        <i>👩‍🔬</i>
                    </div>
                    <div class="card-body">
                        <h4>Dr. Marcus Rodriguez</h4>
                        <p><strong>Head of Research</strong><br>
                            PhD in Economics, LSE<br>
                            Former IMF Research Department<br>
                            Specialization: Monetary Systems</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img"
                        style="background-color: var(--light-blue); display: flex; align-items: center; justify-content: center; color: var(--dark-blue); font-size: 3rem;">
                        <i>👨‍💻</i>
                    </div>
                    <div class="card-body">
                        <h4>Dr. Elena Petrova</h4>
                        <p><strong>Data Science Lead</strong><br>
                            PhD in Computational Economics, MIT<br>
                            Big Data Analytics Expert<br>
                            Specialization: Trade Flow Modeling</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Regional Specialists</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Region</th>
                        <th>Specialist</th>
                        <th>Background</th>
                        <th>Focus Areas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>North America</td>
                        <td>Dr. James Wilson</td>
                        <td>Former US Trade Representative Office</td>
                        <td>USMCA, Cross-border Supply Chains</td>
                    </tr>
                    <tr>
                        <td>European Union</td>
                        <td>Dr. Isabelle Moreau</td>
                        <td>European Central Bank Alumni</td>
                        <td>EU Trade Policy, Eurozone</td>
                    </tr>
                    <tr>
                        <td>Asia-Pacific</td>
                        <td>Dr. Kenji Tanaka</td>
                        <td>Asian Development Bank Experience</td>
                        <td>RCEP, Asian Integration</td>
                        tr>
                    <tr>
                        <td>Latin America</td>
                        <td>Dr. Carlos Mendez</td>
                        <td>UN ECLAC Research Fellow</td>
                        <td>MERCOSUR, Regional Blocs</td>
                    </tr>
                    <tr>
                        <td>Africa</td>
                        <td>Dr. Amina Diallo</td>
                        <td>African Development Bank</td>
                        <td>AfCFTA, Development Economics</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Advisory Board</h3>
            <p>Our international advisory board provides strategic guidance and ensures the academic rigor and practical
                relevance of our research outputs.</p>

            <ul style="margin-left: 20px; margin-bottom: 20px;">
                <li><strong>Prof. Robert Johnson</strong> - Nobel Laureate in Economics, Stanford University</li>
                <li><strong>Dr. Maria Schmidt</strong> - Former Director-General, World Trade Organization</li>
                <li><strong>Prof. Li Wei</strong> - Dean, School of Economics, Peking University</li>
                <li><strong>Dr. Klaus Bauer</strong> - Chief Economist, European Central Bank (Retired)</li>
                <li><strong>Ambassador Sofia Ramirez</strong> - Former Trade Negotiator, Chilean Government</li>
            </ul>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>