<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Acknowledgements</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/about/about-project.php">About</a> &rsaquo;
                Acknowledgements
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Our Supporters and Partners</h3>
            <p>The <?php echo $acronym; ?> project acknowledges with gratitude the support and collaboration of numerous
                institutions, organizations, and individuals who have contributed to the development and success of this
                initiative.</p>
        </div>

        <div class="content-section">
            <h3>Funding Organizations</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>International Development Foundation</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Grant Period:</strong> 2020-2024<br>
                            <strong>Focus Area:</strong> Core research and platform development<br>
                            <strong>Contribution:</strong> $2.5 million
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Global Economic Research Council</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Grant Period:</strong> 2021-2023<br>
                            <strong>Focus Area:</strong> Data collection and analysis<br>
                            <strong>Contribution:</strong> $1.8 million
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Trade Policy Innovation Fund</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Grant Period:</strong> 2022-2025<br>
                            <strong>Focus Area:</strong> Policy research and outreach<br>
                            <strong>Contribution:</strong> $1.2 million
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Research Partners</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Institution</th>
                        <th>Collaboration Type</th>
                        <th>Duration</th>
                        <th>Key Contributions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>World Trade Organization</td>
                        <td>Data Sharing & Research</td>
                        <td>2020-Present</td>
                        <td>Trade statistics, policy analysis</td>
                    </tr>
                    <tr>
                        <td>International Monetary Fund</td>
                        <td>Monetary Policy Research</td>
                        <td>2021-Present</td>
                        <td>Exchange rate data, financial flows</td>
                    </tr>
                    <tr>
                        <td>World Bank Group</td>
                        <td>Development Economics</td>
                        <td>2020-Present</td>
                        <td>Development indicators, country profiles</td>
                    </tr>
                    <tr>
                        <td>United Nations UNCTAD</td>
                        <td>Trade & Development</td>
                        <td>2022-Present</td>
                        <td>Developing country focus, capacity building</td>
                    </tr>
                    <tr>
                        <td>OECD</td>
                        <td>Policy Harmonization</td>
                        <td>2021-Present</td>
                        <td>Standards, best practices</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Academic Collaborations</h3>
            <p>We extend our sincere appreciation to the following academic institutions for their research
                collaboration, data sharing, and expert contributions:</p>

            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; margin: 20px 0;">
                <div style="padding: 15px; background: var(--light-gray); border-radius: 5px;">
                    <strong>Harvard University</strong><br>
                    <em>Center for International Development</em>
                </div>
                <div style="padding: 15px; background: var(--light-gray); border-radius: 5px;">
                    <strong>London School of Economics</strong><br>
                    <em>International Trade Policy Unit</em>
                </div>
                <div style="padding: 15px; background: var(--light-gray); border-radius: 5px;">
                    <strong>Stanford University</strong><br>
                    <em>Freeman Spogli Institute</em>
                </div>
                <div style="padding: 15px; background: var(--light-gray); border-radius: 5px;">
                    <strong>National University of Singapore</strong><br>
                    <em>Asia-Pacific Research Center</em>
                </div>
                <div style="padding: 15px; background: var(--light-gray); border-radius: 5px;">
                    <strong>University of Geneva</strong><br>
                    <em>Global Studies Institute</em>
                </div>
                <div style="padding: 15px; background: var(--light-gray); border-radius: 5px;">
                    <strong>Peking University</strong><br>
                    <em>China Center for Economic Research</em>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Individual Contributors</h3>
            <p>We acknowledge the valuable contributions of research assistants, interns, and volunteer translators who
                have supported the <?php echo $acronym; ?> project:</p>

            <ul style="margin-left: 20px; margin-bottom: 20px;">
                <li><strong>Research Assistants (2020-2024):</strong> 45 graduate students from partner universities
                </li>
                <li><strong>Technical Team:</strong> Web developers, data engineers, and UX designers</li>
                <li><strong>Translation Team:</strong> Volunteers providing content in 6 languages</li>
                <li><strong>Peer Reviewers:</strong> 120+ experts providing feedback on research outputs</li>
            </ul>

            <p>For more information about collaboration opportunities, please <a
                    href="<?php echo $site_url; ?>/pages/contact/contact.php"
                    style="color: var(--primary-blue);">contact our team</a>.</p>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>