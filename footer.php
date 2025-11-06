<?php
// footer.php
?>
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <div class="logo"><img src="<?php echo $site_url; ?>/assets/images/logo.png" style="width: 100px;" />
                </div>
                <!--<div class="site-name"><?php echo $site_name; ?></div>
                <p>Global Trade Insights & Research</p>-->
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="<?php echo $site_url; ?>/index.php">Home</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/about/about-project.php">About Project</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/research/research-articles.php">Research Articles</a>
                    </li>
                    <li><a href="<?php echo $site_url; ?>/pages/contact/contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Research Areas</h3>
                <ul>
                    <li><a href="<?php echo $site_url; ?>/pages/trade/theories.php">Trade Theories</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/trade/agreements.php">Trade Agreements</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/monetary/policies.php">Monetary Policies</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/countries/overview.php">Country Analysis</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Resources</h3>
                <ul>
                    <li><a href="<?php echo $site_url; ?>/pages/research/data-visualization.php">Data Visualization</a>
                    </li>
                    <li><a href="<?php echo $site_url; ?>/pages/research/case-studies.php">Case Studies</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/development/data-sources.php">Data Sources</a></li>
                    <li><a href="<?php echo $site_url; ?>/pages/contact/faq.php">FAQ</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $acronym; ?> - <?php echo $site_name; ?>. All rights reserved.
            </p>
        </div>
    </div>
</footer>
<script>
    // Slider functionality
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.slider-dot');
        let currentSlide = 0;

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            currentSlide = (n + slides.length) % slides.length;

            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        // Auto advance slides
        setInterval(() => {
            showSlide(currentSlide + 1);
        }, 5000);

        // Dot click events
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
            });
        });
    });
</script>

<script type="text/javascript">
    var LHCChatboxOptions = {
        hashchatbox: 'empty',
        identifier: 'default',
        status_text: 'IMF'
    };
    (function() {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src =
            '//localhost/itr/lhc_web/index.php/chatbox/getstatus/(position)/bottom_right/(top)/300/(units)/pixels/(width)/300/(height)/300/(chat_height)/220';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
</script>
</body>

</html>