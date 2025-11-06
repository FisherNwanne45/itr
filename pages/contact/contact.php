<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/contact/contact.php">Contact</a> &rsaquo;
                Contact Us
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Get in Touch</h3>
            <p>The <?php echo $acronym; ?> team welcomes inquiries from researchers, policymakers, students, and anyone
                interested in international trade and monetary research. We're here to answer your questions, discuss
                collaboration opportunities, and receive your feedback.</p>
        </div>

        <div class="content-section">
            <h3>Our Global Offices</h3>
            <div class="card-container">
                <?php foreach ($contact_info as $index => $contact): ?>
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo $contact['location']; ?> Office </h4>
                        </div>
                        <div class="card-body">
                            <p><strong>Address:</strong><br><?php echo $contact['address']; ?></p>
                            <p><strong>Phone:</strong> <?php echo $contact['phone']; ?></p>
                            <p><strong>Email:</strong> <?php echo $contact['email']; ?></p>
                            <p><strong>Office Hours:</strong> 9:00 AM - 6:00 PM Local Time</p>
                            <p><strong>Regional Focus:</strong>
                                <?php
                                $focus_areas = [
                                    'Global trade policy and WTO affairs',
                                    'Monetary policy and financial systems',
                                    'Asia-Pacific trade and regional integration'
                                ];
                                echo $focus_areas[$index];
                                ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="content-section">
            <h3>Department Contacts</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Department</th>
                        <th>Contact Person</th>
                        <th>Email</th>
                        <th>Areas of Responsibility</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Research & Analysis</td>
                        <td>Dr. Sarah Chen</td>
                        <td>research@<?php echo $urlh; ?></td>
                        <td>Research papers, data analysis, economic modeling</td>
                    </tr>
                    <tr>
                        <td>Policy Advisory</td>
                        <td>Dr. Marcus Rodriguez</td>
                        <td>policy@<?php echo $urlh; ?></td>
                        <td>Policy briefs, government consultations, impact assessment</td>
                    </tr>
                    <tr>
                        <td>Data Management</td>
                        <td>Dr. Elena Petrova</td>
                        <td>data@<?php echo $urlh; ?></td>
                        <td>Database management, data quality, API development</td>
                    </tr>
                    <tr>
                        <td>Educational Outreach</td>
                        <td>Prof. James Wilson</td>
                        <td>education@<?php echo $urlh; ?></td>
                        <td>Academic programs, workshops, student resources</td>
                    </tr>
                    <tr>
                        <td>Media Relations</td>
                        <td>Ms. Maria Schmidt</td>
                        <td>media@<?php echo $urlh; ?></td>
                        <td>Press releases, interviews, public communications</td>
                    </tr>
                    <tr>
                        <td>Partnership Development</td>
                        <td>Mr. Robert Green</td>
                        <td>partnerships@<?php echo $urlh; ?></td>
                        <td>Institutional collaborations, funding, joint projects</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="content-section">
            <h3>Response Time and Service Standards</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>General Inquiries</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Response Time:</strong> Within 2 business days</p>
                        <p><strong>Contact:</strong> info@<?php echo $urlh; ?></p>
                        <p><strong>Scope:</strong> General questions, website navigation, basic information</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Research Inquiries</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Response Time:</strong> Within 5 business days</p>
                        <p><strong>Contact:</strong> research@<?php echo $urlh; ?></p>
                        <p><strong>Scope:</strong> Data requests, methodology questions, research collaboration</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Media Inquiries</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Response Time:</strong> Within 24 hours</p>
                        <p><strong>Contact:</strong> media@<?php echo $urlh; ?></p>
                        <p><strong>Scope:</strong> Interviews, press releases, expert commentary</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Visiting Our Offices</h3>
            <p>We welcome visitors to our offices by appointment. Please contact the relevant office at least 48 hours
                in advance to schedule your visit. All visitors must present valid identification and may be subject to
                security screening.</p>

            <div style="background: var(--light-gray); padding: 20px; border-radius: 5px; margin: 20px 0;">
                <h4>Office Access Information</h4>
                <ul style="margin-left: 20px;">
                    <li><strong>Geneva Office:</strong> Located in the International Trade Centre, adjacent to WTO
                        headquarters</li>
                    <li><strong>New York Office:</strong> Situated in the Manhattan financial district, near UN
                        headquarters</li>
                    <li><strong>Singapore Office:</strong> Located in the Raffles Place financial district</li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>