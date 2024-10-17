<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3039">
    <div class="header">
        <h1>Get Started With Your Device Repair</h1>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem sapiente iure obcaecati voluptate modi
        dolores? <br>Necessitatibus, quis qui sit officiis excepturi autem recusandae ipsam quasi tempore pariatur,
        itaque, neque quo!
    </div>
    <div class="container body-content">
        <div class="col-xs-12 col-md-3 col-sm-6">
            <div class="service-item">
                <div class="service-item-image">
                    <a href="#">
                        <div class="img-hover-effect">
                            <img decoding="async" width="350" height="233"
                                src="//fixar.templines.org/wp-content/uploads/2017/10/service01-350x233.jpg"
                                class="fixar-services-thumb-width wp-post-image" alt="">
                        </div>
                    </a>
                </div>
                <div class="service-item-footer">
                    <h4>Phone Repair</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora enim perspiciatis recusandae,
                        possimus minima ...</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-3 col-sm-6">
            <div class="service-item">
                <div class="service-item-image">
                    <a href="#">
                        <div class="img-hover-effect">
                            <img loading="lazy" decoding="async" width="350" height="233"
                                src="//fixar.templines.org/wp-content/uploads/2015/11/repair04-350x233.png"
                                class="fixar-services-thumb-width wp-post-image" alt="">
                        </div>
                    </a>
                </div>
                <div class="service-item-footer">
                    <h4>Tablet Repair</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia vero fuga praesentium quo
                        exercitationem ...</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-3 col-sm-6">
            <div class="service-item">
                <div class="service-item-image">
                    <a href="#">
                        <div class="img-hover-effect">
                            <img loading="lazy" decoding="async" width="350" height="233"
                                src="//fixar.templines.org/wp-content/uploads/2016/06/tfnchBFIlhgNqeA-350x233.jpeg"
                                class="fixar-services-thumb-width wp-post-image" alt="">
                        </div>
                    </a>
                </div>
                <div class="service-item-footer">
                    <h4>Laptop Repair</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident repellendus necessitatibus,
                        est maiores non ...</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-3 col-sm-6">
            <div class="service-item">
                <div class="service-item-image">
                    <a href="#">
                        <div class="img-hover-effect">
                            <img loading="lazy" decoding="async" width="350" height="233"
                                src="//fixar.templines.org/wp-content/uploads/2016/06/Motherboard-Repair-350x233.jpg"
                                class="fixar-services-thumb-width wp-post-image" alt="">
                        </div>
                    </a>
                </div>
                <div class="service-item-footer">
                    <h4>Computer Repair</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab exercitationem vel illum aut iste
                        aliquid qui minima ...</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>