<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="header">
    <div class="icon-text-right">
        <div>
            <i class="fa fa-mobile"></i>
            <span>WE REPAIR ALL TYPES OF ELECTRONICS</span>
        </div>
        <div>
            <i class="fa fa-truck"></i>
            <span>ENTER THE DELIVERY ADDRESS</span>
        </div>
        <div>
            <i class="fa fa-stethoscope"></i>
            <span>FREE DIAGNOSTICS AND COST EVALUATION</span>
        </div>
        <div>
            <i class="fa fa-cogs"></i>
            <span>HIGH QUALITY SPARE PARTS ONLY</span>
        </div>
    </div>
</div>
<div class="services">
    <div class="services-header">
        <h2>OUR SERVICES</h2>
        <div class="navigation">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="service-card">
                    <img src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/x-box-1791671_1920-360x185.jpg"
                        alt="Game console" />
                    <h3>GAME CONSOLES REPAIR</h3>
                    <p>Nullam non dignissim est, interdum ornare arcu. Morbi dignissim a ipsum in dignissim...</p>
                    <a href="#">READ MORE</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-card">
                    <img src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/MG_2830-wifi-360x185.jpg"
                        alt="WiFi Problems" />
                    <h3>WIFI PROBLEMS</h3>
                    <p>Phasellus dui ligula, bibendum faucibus commodo at, porta non nunc...</p>
                    <a href="#">READ MORE</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-card">
                    <img src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/IMG_2719-1-360x185.jpg"
                        alt="Water Damage" />
                    <h3>WATER DAMAGE</h3>
                    <p>Fusce mollis turpis quis est sollicitudin bibendum...</p>
                    <a href="#">READ MORE</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-card">
                    <img src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/MG_2915-360x185.jpg"
                        alt="Unlocking" />
                    <h3>UNLOCKING</h3>
                    <p>Donec laoreet leo dui, laoreet cursus metus pharetra ac...</p>
                    <a href="#">READ MORE</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-card">
                    <img src="https://demo.brothersthemes.com/phone-repair/wp-content/uploads/sites/3/2016/12/MG_2321-360x185.jpg"
                        alt="Mac & PC Repair" />
                    <h3>MAC & PC REPAIR</h3>
                    <p>Proin condimentum dui at ipsum tempus volutpat eget eget lorem...</p>
                    <a href="#">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/scripts.js"></script>