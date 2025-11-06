<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Website Architecture</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/development/website-architecture.php">Development</a> &rsaquo;
                Website Architecture
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Technical Architecture Overview</h3>
            <p>The <?php echo $acronym; ?> platform is built on a robust, scalable architecture designed to handle
                complex data processing, ensure high availability, and provide an optimal user experience across all
                devices.</p>
        </div>

        <div class="content-section">
            <h3>System Architecture</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Frontend Layer</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>HTML5/CSS3:</strong> Semantic markup and responsive design</li>
                            <li><strong>JavaScript:</strong> Interactive features and data visualization</li>
                            <li><strong>PHP:</strong> Server-side templating and logic</li>
                            <li><strong>Bootstrap Framework:</strong> Responsive grid system</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Application Layer</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>PHP 8.1+:</strong> Core application logic</li>
                            <li><strong>Apache Web Server:</strong> Request handling</li>
                            <li><strong>Mod_rewrite:</strong> URL routing and SEO</li>
                            <li><strong>Session Management:</strong> User state handling</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Data Layer</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>Flat-file System:</strong> Configuration and content storage</li>
                            <li><strong>JSON Data Files:</strong> Structured data storage</li>
                            <li><strong>CSV Databases:</strong> Tabular data management</li>
                            <li><strong>Cache System:</strong> Performance optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Directory Structure</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Directory</th>
                        <th>Purpose</th>
                        <th>Key Files</th>
                        <th>Access Level</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>/</td>
                        <td>Root directory</td>
                        <td>config.php, header.php, footer.php, index.php</td>
                        <td>Public</td>
                    </tr>
                    <tr>
                        <td>/pages</td>
                        <td>Content pages organized by section</td>
                        <td>All .php content pages</td>
                        <td>Public</td>
                    </tr>
                    <tr>
                        <td>/assets</td>
                        <td>Static resources</td>
                        <td>CSS, JavaScript, images, documents</td>
                        <td>Public</td>
                    </tr>
                    <tr>
                        <td>/data</td>
                        <td>Data storage and processing</td>
                        <td>JSON files, CSV databases, cache</td>
                        <td>Protected</td>
                    </tr>
                    <tr>
                        <td>/includes</td>
                        <td>PHP includes and utilities</td>
                        <td>Functions, classes, utilities</td>
                        <td>Server-side</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h3>Key Technical Features</h3>
            <div style="background: var(--light-blue); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Core Functionality</h4>
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-top: 15px;">
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Responsive Design</strong><br>
                        Mobile-first approach with breakpoints
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Accessibility</strong><br>
                        WCAG 2.1 AA compliance
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Performance</strong><br>
                        Optimized loading under 3 seconds
                    </div>
                    <div style="padding: 15px; background: white; border-radius: 5px;">
                        <strong>Security</strong><br>
                        Input validation, XSS protection
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Data Flow Architecture</h3>
            <p>The platform processes data through a structured pipeline:</p>

            <ol style="margin-left: 20px; margin-bottom: 20px;">
                <li><strong>Data Ingestion:</strong> Automated collection from external sources</li>
                <li><strong>Processing:</strong> Cleaning, transformation, and analysis</li>
                <li><strong>Storage:</strong> Structured storage in optimized formats</li>
                <li><strong>Presentation:</strong> Dynamic rendering through PHP templates</li>
                <li><strong>Delivery:</strong> Optimized content delivery to users</li>
            </ol>

            <p>This architecture ensures scalability to handle increasing data volumes and user traffic while
                maintaining performance and reliability.</p>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>