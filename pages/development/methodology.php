<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Research Methodology</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/development/methodology.php">Development</a> &rsaquo;
                Methodology
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Methodological Framework</h3>
            <p>The <?php echo $acronym; ?> project employs a comprehensive methodological framework that combines
                quantitative analysis, qualitative research, and computational modeling to ensure the accuracy,
                reliability, and relevance of our research outputs.</p>
        </div>

        <div class="content-section">
            <h3>Data Collection Methods</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Primary Data Sources</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Official government statistics</li>
                            <li>International organization databases</li>
                            <li>Central bank reports</li>
                            <li>Customs administration data</li>
                            <li>Trade ministry publications</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Secondary Data Sources</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Academic research papers</li>
                            <li>Policy documents</li>
                            <li>Industry reports</li>
                            <li>Historical archives</li>
                            <li>Media analysis</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Primary Research</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Expert interviews</li>
                            <li>Surveys of trade professionals</li>
                            <li>Case studies</li>
                            <li>Field research</li>
                            <li>Policy analysis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Analytical Approaches</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Application</th>
                        <th>Tools Used</th>
                        <th>Validation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Econometric Modeling</td>
                        <td>Trade flow analysis, policy impact assessment</td>
                        <td>Stata, R, Python</td>
                        <td>Statistical significance tests, robustness checks</td>
                    </tr>
                    <tr>
                        <td>Network Analysis</td>
                        <td>Supply chain mapping, trade relationship analysis</td>
                        <td>Gephi, NetworkX</td>
                        <td>Centrality measures, community detection</td>
                    </tr>
                    <tr>
                        <td>Computable General Equilibrium</td>
                        <td>Trade agreement simulation, economic impact</td>
                        <td>GTAP model, GAMS</td>
                        <td>Sensitivity analysis, scenario testing</td>
                    </tr>
                    <tr>
                        <td>Time Series Analysis</td>
                        <td>Trend identification, forecasting</td>
                        <td>Python, R, EViews</td>
                        <td>Stationarity tests, forecast accuracy</td>
                    </tr>
                    <tr>
                        <td>Content Analysis</td>
                        <td>Policy document analysis, media coverage</td>
                        <td>NVivo, Python NLTK</td>
                        <td>Inter-coder reliability, thematic validation</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Quality Assurance Framework</h3>
            <p>All research outputs undergo rigorous quality assurance processes to ensure methodological soundness and
                factual accuracy:</p>

            <div style="background: var(--light-blue); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Four-Stage Review Process</h4>
                <ol style="margin-left: 20px;">
                    <li><strong>Internal Review:</strong> Technical review by senior researchers</li>
                    <li><strong>Peer Review:</strong> External evaluation by subject matter experts</li>
                    <li><strong>Statistical Validation:</strong> Data accuracy and methodological checks</li>
                    <li><strong>Editorial Review:</strong> Language, clarity, and presentation quality</li>
                </ol>
            </div>

            <p>Our methodology is continuously refined based on new developments in economic research and feedback from
                the academic community.</p>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>