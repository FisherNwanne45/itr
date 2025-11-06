<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>About the Project</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/about/about-project.php">About</a> &rsaquo;
                About the Project
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Project Overview</h3>
            <p>The <?php echo $acronym; ?> (<?php echo $site_name; ?>) platform represents a comprehensive initiative to
                document, analyze, and disseminate knowledge about international trade dynamics, monetary systems, and
                global economic interactions. Established in 2020, this project brings together academic research,
                policy analysis, and practical insights to serve researchers, policymakers, students, and business
                professionals worldwide.</p>

            <p>Our mission is to bridge the gap between theoretical economic principles and real-world trade practices,
                providing actionable intelligence and educational resources that promote understanding of global
                commerce.</p>
        </div>

        <div class="content-section">
            <h3>Project Scope</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-img"
                        style="background-color: var(--light-blue); display: flex; align-items: center; justify-content: center; color: var(--dark-blue); font-size: 3rem;">
                        <i>🌍</i>
                    </div>
                    <div class="card-body">
                        <h4>Global Coverage</h4>
                        <p>Comprehensive analysis of 190+ countries and major economic regions with detailed trade
                            statistics and policy frameworks.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img"
                        style="background-color: var(--light-blue); display: flex; align-items: center; justify-content: center; color: var(--dark-blue); font-size: 3rem;">
                        <i>📊</i>
                    </div>
                    <div class="card-body">
                        <h4>Data Integration</h4>
                        <p>Integration of multiple data sources including WTO, World Bank, IMF, and national statistical
                            agencies for accurate analysis.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img"
                        style="background-color: var(--light-blue); display: flex; align-items: center; justify-content: center; color: var(--dark-blue); font-size: 3rem;">
                        <i>🔬</i>
                    </div>
                    <div class="card-body">
                        <h4>Research Depth</h4>
                        <p>Multidisciplinary approach combining economics, political science, and business strategy for
                            holistic understanding.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Key Achievements</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Milestone</th>
                        <th>Impact</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2020</td>
                        <td>Project Launch</td>
                        <td>Initial database of 50 countries with basic trade indicators</td>
                    </tr>
                    <tr>
                        <td>2021</td>
                        <td>Research Portal Expansion</td>
                        <td>Added monetary policy analysis and 100+ research articles</td>
                    </tr>
                    <tr>
                        <td>2022</td>
                        <td>Global Partnerships</td>
                        <td>Collaboration with 15 international research institutions</td>
                    </tr>
                    <tr>
                        <td>2023</td>
                        <td>Platform Upgrade</td>
                        <td>Comprehensive website redesign and mobile optimization</td>
                    </tr>
                    <tr>
                        <td>2024</td>
                        <td>Data Visualization Suite</td>
                        <td>Interactive charts and mapping tools for trade data analysis</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Methodological Framework</h3>
            <p>The <?php echo $acronym; ?> project employs a rigorous methodological framework that combines
                quantitative analysis, qualitative research, and case study approaches. Our research team utilizes
                advanced statistical models, econometric analysis, and computational tools to process and interpret
                complex trade data.</p>

            <p>All data undergoes thorough validation processes, and our analytical models are regularly reviewed and
                updated to reflect changing global economic conditions. We maintain transparency in our methodologies
                and provide detailed documentation for all research outputs.</p>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>