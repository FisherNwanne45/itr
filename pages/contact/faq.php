<?php
require_once '../../header.php';
?>

<main>
    <div class="page-header">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="breadcrumb">
                <a href="<?php echo $site_url; ?>/index.php">Home</a> &rsaquo;
                <a href="<?php echo $site_url; ?>/pages/contact/faq.php">Contact</a> &rsaquo;
                FAQ
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-section">
            <h3>Common Questions About <?php echo $acronym; ?></h3>
            <p>Find answers to the most frequently asked questions about our research, data, services, and operations.
                If you don't find the information you're looking for, please don't hesitate to <a href="contact.php"
                    style="color: var(--primary-blue);">contact us</a> directly.</p>
        </div>

        <div class="content-section">
            <h3>Research and Data FAQs</h3>
            <div
                style="background: var(--light-blue); padding: 0; border-radius: 8px; margin: 20px 0; overflow: hidden;">
                <div style="padding: 20px; border-bottom: 1px solid #ddd; background: white;">
                    <h4 style="margin-bottom: 10px;">1. How often is your trade data updated?</h4>
                    <p>Our trade data is updated on the following schedule:</p>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li><strong>Monthly updates:</strong> Major trade indicators for G20 countries</li>
                        <li><strong>Quarterly updates:</strong> Comprehensive trade statistics for all countries</li>
                        <li><strong>Annual updates:</strong> Complete dataset revisions and methodology improvements
                        </li>
                        <li><strong>Real-time updates:</strong> Exchange rates and selected financial indicators</li>
                    </ul>
                </div>

                <div style="padding: 20px; border-bottom: 1px solid #ddd; background: white;">
                    <h4 style="margin-bottom: 10px;">2. What sources do you use for your research data?</h4>
                    <p>We integrate data from multiple authoritative sources including:</p>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li>World Trade Organization (WTO) databases</li>
                        <li>International Monetary Fund (IMF) statistics</li>
                        <li>World Bank development indicators</li>
                        <li>United Nations COMTRADE database</li>
                        <li>National statistical agencies and central banks</li>
                        <li>OECD trade and economic indicators</li>
                    </ul>
                    <p>All data undergoes rigorous validation and harmonization processes before publication.</p>
                </div>

                <div style="padding: 20px; border-bottom: 1px solid #ddd; background: white;">
                    <h4 style="margin-bottom: 10px;">3. Can I download your datasets for my own research?</h4>
                    <p>Yes, we provide multiple access options for our datasets:</p>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li><strong>Public datasets:</strong> Available for immediate download in CSV, Excel, and JSON
                            formats</li>
                        <li><strong>Advanced datasets:</strong> Available to registered researchers after approval</li>
                        <li><strong>Custom datasets:</strong> Available through our data services team for complex
                            requirements</li>
                        <li><strong>API access:</strong> Available for institutional partners and commercial users</li>
                    </ul>
                    <p>Please review our <a href="#" style="color: var(--primary-blue);">data usage policy</a> for terms
                        and conditions.</p>
                </div>

                <div style="padding: 20px; border-bottom: 1px solid #ddd; background: white;">
                    <h4 style="margin-bottom: 10px;">4. How can I cite your research in my publications?</h4>
                    <p>We provide recommended citation formats for all our publications. Typically, citations should
                        include:</p>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li>Author(s) name(s)</li>
                        <li>Publication year</li>
                        <li>Title of the research paper or dataset</li>
                        <li><?php echo $acronym; ?> - <?php echo $site_name; ?></li>
                        <li>URL or DOI if available</li>
                    </ul>
                    <p>Specific citation formats are provided on each publication page.</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Membership and Access FAQs</h3>
            <div
                style="background: var(--light-blue); padding: 0; border-radius: 8px; margin: 20px 0; overflow: hidden;">
                <div style="padding: 20px; border-bottom: 1px solid #ddd; background: white;">
                    <h4 style="margin-bottom: 10px;">5. Do I need to create an account to access your resources?</h4>
                    <p>Access levels vary by content type:</p>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li><strong>Public content:</strong> No account required - research articles, basic data,
                            educational materials</li>
                        <li><strong>Registered user content:</strong> Free account required - advanced datasets,
                            personalized features</li>
                        <li><strong>Institutional access:</strong> Special accounts for universities, research
                            institutions, and government agencies</li>
                        <li><strong>Premium services:</strong> Subscription-based access to specialized research and
                            data services</li>
                    </ul>
                </div>

                <div style="padding: 20px; border-bottom: 1px solid #ddd; background: white;">
                    <h4 style="margin-bottom: 10px;">6. Is there a cost to access your research?</h4>
                    <p>Our access model includes both free and premium content:</p>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li><strong>Free access:</strong> 80% of our research papers, basic datasets, educational
                            resources</li>
                        <li><strong>Open access:</strong> All publications become freely available 12 months after
                            initial release</li>
                        <li><strong>Premium access:</strong> Early access to research, specialized datasets, customized
                            analysis</li>
                        <li><strong>Institutional subscriptions:</strong> Comprehensive access for organizations</li>
                    </ul>
                    <p>We are committed to maintaining significant free access to support global knowledge sharing.</p>
                </div>

                <div style="padding: 20px; border-bottom: 1px solid #ddd; background: white;">
                    <h4 style="margin-bottom: 10px;">7. Can students access your resources for academic work?</h4>
                    <p>Yes, we strongly support academic use and provide several options for students:</p>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li><strong>Student registration:</strong> Free enhanced access with valid .edu email address
                        </li>
                        <li><strong>University partnerships:</strong> Institutional access for partner universities</li>
                        <li><strong>Research assistance:</strong> Support for student research projects upon request
                        </li>
                        <li><strong>Educational materials:</strong> Curriculum resources for instructors</li>
                    </ul>
                    <p>We also offer internship opportunities and research assistantships for qualified students.</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Technical and Usage FAQs</h3>
            <div
                style="background: var(--light-blue); padding: 0; border-radius: 8px; margin: 20px 0; overflow: hidden;">
                <div style="padding: 20px; border-bottom: 1px solid #ddd; background: white;">
                    <h4 style="margin-bottom: 10px;">8. What browsers are supported by your website?</h4>
                    <p>Our website supports all modern browsers including:</p>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li>Google Chrome (version 90 and above)</li>
                        <li>Mozilla Firefox (version 88 and above)</li>
                        <li>Safari (version 14 and above)</li>
                        <li>Microsoft Edge (version 90 and above)</li>
                    </ul>
                    <p>For optimal experience, we recommend using the latest version of your preferred browser with
                        JavaScript enabled.</p>
                </div>

                <div style="padding: 20px; border-bottom: 1px solid #ddd; background: white;">
                    <h4 style="margin-bottom: 10px;">9. Do you have a mobile app?</h4>
                    <p>We currently offer:</p>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li><strong>Mobile-responsive website:</strong> Full functionality on all mobile devices</li>
                        <li><strong>Data API:</strong> For developers to build custom applications</li>
                        <li><strong>Progressive Web App (PWA):</strong> App-like experience when added to home screen
                        </li>
                        <li><strong>Future plans:</strong> Native mobile apps are in development for 2025 release</li>
                    </ul>
                    <p>Our website is optimized for all screen sizes and mobile operating systems.</p>
                </div>

                <div style="padding: 20px; border-bottom: 1px solid #ddd; background: white;">
                    <h4 style="margin-bottom: 10px;">10. How can I report an error or technical issue?</h4>
                    <p>We appreciate feedback on errors or technical issues. Please report them through:</p>
                    <ul style="margin-left: 20px; margin-top: 10px;">
                        <li><strong>Contact form:</strong> Use the "Technical Support" category</li>
                        <li><strong>Email:</strong> techsupport@<?php echo $urlh; ?></li>
                        <li><strong>GitHub:</strong> Report issues on our open-source repositories</li>
                        <li><strong>User feedback:</strong> Use the feedback form on each page</li>
                    </ul>
                    <p>When reporting issues, please include your browser version, operating system, and steps to
                        reproduce the problem.</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Partnership and Collaboration FAQs</h3>
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <h4>Research Collaboration</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Q: Can my organization collaborate on research projects?</strong></p>
                        <p>Yes, we actively seek research partnerships with academic institutions, think tanks, and
                            international organizations. Contact our partnerships department to discuss potential
                            collaboration.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Data Sharing</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Q: Can we contribute data to your platform?</strong></p>
                        <p>We welcome data contributions that meet our quality standards. All contributed data undergoes
                            validation and must include proper metadata and documentation.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Funding and Support</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Q: How can I support your work financially?</strong></p>
                        <p>We accept donations and grants from individuals, foundations, and organizations that support
                            our mission. All funding is used to maintain and expand our research activities.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h3>Still Have Questions?</h3>
            <div
                style="background: var(--light-gray); padding: 30px; border-radius: 8px; text-align: center; margin: 20px 0;">
                <h4>We're Here to Help</h4>
                <p>If you couldn't find the answer to your question in our FAQ, please don't hesitate to reach out to
                    our team directly.</p>
                <div style="margin-top: 20px;">
                    <a href="contact.php"
                        style="display: inline-block; background: var(--primary-blue); color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; margin: 0 10px;">Contact
                        Us</a>
                    <a href="feedback.php"
                        style="display: inline-block; background: var(--dark-blue); color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; margin: 0 10px;">Send
                        Feedback</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once '../../footer.php';
?>