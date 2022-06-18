<?php $title = 'Details Page'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'layouts/top_header.php'; ?>
<style>
    
    .post-details{position: unset;}
</style>
<body>

    <?php include 'layouts/header.php'; ?>
    <section class="body" id="main_body">
        <div class="container-fluid mt-3">
            <div class="row mb-3">
                <div class="col-12">
                    <span id="add" class="text-center"></span>
                </div>
            </div>
            <div class="row mx-0">
                
                <div class="col-12 col-md-12 col-xl-8 col-sm-8">
                    
                    <section class="site-description mb-3">
                        <h1 class="fw-bold">How to Subtract Minutes from DateTime in PHP?</h1>
                    </section>
                    <section class="single-post-details mb-4">
                        <div class="post-details">
                                    <span class="author-name">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/>
                                        </svg>
                                        By Hardik Savani
                                    </span>
                                    <span class="date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM64 304C64 312.8 71.16 320 80 320H112C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304zM192 304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304zM336 256C327.2 256 320 263.2 320 272V304C320 312.8 327.2 320 336 320H368C376.8 320 384 312.8 384 304V272C384 263.2 376.8 256 368 256H336zM64 432C64 440.8 71.16 448 80 448H112C120.8 448 128 440.8 128 432V400C128 391.2 120.8 384 112 384H80C71.16 384 64 391.2 64 400V432zM208 384C199.2 384 192 391.2 192 400V432C192 440.8 199.2 448 208 448H240C248.8 448 256 440.8 256 432V400C256 391.2 248.8 384 240 384H208zM320 432C320 440.8 327.2 448 336 448H368C376.8 448 384 440.8 384 432V400C384 391.2 376.8 384 368 384H336C327.2 384 320 391.2 320 400V432z"/></svg>
                                        May 30, 2022</span>
                                    <span class="category">
                                        <svg class="svg-inline--fa fa-briefcase fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"></path></svg><!-- <i class="fas fa-briefcase"></i> Font Awesome fontawesome.com -->Category : 
                                        <span class="cat-name">PHP</span>
                                    </span>
                                </div>
                    </section>
                    <section class="post-desc mb-3">
                        <p>This tutorial will give you example of php subtract minutes from datetime. i explained simply about php subtract minutes from current time. We will use how to subtract minutes from time in php. This article goes in detailed on how to subtract minutes from current time in php.</p>
                        <p></p>
                        <p>I will give you very simple example how to sub minutes to date and time in PHP. so let's see both example with output:</p>
                        <p></p>
                        <p><strong class="step">Example 1: PHP Subtract Minutes to DateTime</strong></p>
                        <p><span class="head">Index.php</span></p>
                        <p></p>
                        <?php

                        $code = '<?php 

                            $date = "2021-11-01 10:10:05";
                            $newDate = date("Y-m-d H:i:s", strtotime($date. " -10 minutes"));
                            echo $newDate;

                            ?>';
                        ?>
                        <pre class="prettyprint prettyprinted text-start text-white" style="">
                            <?php echo '<code>' . htmlspecialchars($code) . '</code>'; ?>
                        </pre>
                        <pre class="prettyprint prettyprinted" style="">
                            <p></p>
                             <code>&lt;?php</code>
                            <p><span class="pun">&lt;?php</span>
                                <span class="pln">php</span></p>
                                <p><span class="pln">  </span></p>
                                <p><span class="pln">    $date </span>
                                    <span class="pun">=</span>
                                    <span class="pln"> </span>
                                    <span class="str">"2021-11-01 10:10:05"</span>
                                    <span class="pun">;</span></p>
                                    <p><span class="pln">    $newDate </span>
                                        <span class="pun">=</span><span class="pln"> date</span><span class="pun">(</span><span class="str">'Y-m-d H:i:s'</span><span class="pun">,</span><span class="pln"> strtotime</span><span class="pun">(</span><span class="pln">$date</span><span class="pun">.</span><span class="pln"> </span><span class="str">' -10 minutes'</span><span class="pun">));</span></p><p><span class="pln">  </span></p><p><span class="pln">    echo $newDate</span><span class="pun">;</span></p><p><span class="pln">  </span></p><p><span class="pun">?&gt;</span></p><p></p></pre>
                    </section>
                    <div class="mb-5 google_search_ad"></div>
                    <section class="tags-main mb-4">
                        <div class="tags-details">
                            <span class="tag-title">
                                <i class="fas fa-tags"></i>Tags :
                            </span>
                            <ul class="list-inline">
                              <li class="list-inline-item"><a href="https://www.itsolutionstuff.com/tag/crud.html">CRUD</a></li>
                              <li class="list-inline-item"><a href="https://www.itsolutionstuff.com/tag/laravel.html">Laravel</a></li>
                              <li class="list-inline-item"><a href="https://www.itsolutionstuff.com/tag/laravel-8.html">Laravel 8</a></li>
                            </ul>
                        </div>
                    </section>
                    <section class="author-details my-4">
                        <div class="row mx-0">
                            <div class="col-12 col-md-3 col-sm-3 col-xl-3 d-flex justify-content-center">
                                <div class="author-avtar">
                                    <img src="https://www.itsolutionstuff.com/assets/images/hardik-savani.png">
                                </div>
                            </div>
                            <style>
                                
                                
                            </style>
                            <div class="col-12 col-md-9 col-sm-9 col-xl-9">
                                <div class="author-description">
                                    <h3>Hardik Savani</h3>
                                    <p>I'm a full-stack developer, entrepreneur and owner of Aatman Infotech.live in India and I love to write tutorials and tips that can help to other artisan. I am a big fan of PHP, Laravel, Angular, Vue, Node, Javascript, JQuery, Codeigniter and Bootstrap from the early stage. I believe in Hardworking and Consistency.</p>
                                    <div class="author-links">Follow Me: 
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="https://twitter.com/HardikSavani19">
                                                    <i class="fab fa-twitter ml-3 mr-2"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://github.com/savanihd"><i class="fab fa-github"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <style>


                    </style>
                    <section class="recommend-box">
                        <div class="recomend-list mb-50 box-shadow">
                            <h4 class="title">We are Recommending you</h4>
                            <ul>
                                <li>

                                    <a href="https://www.itsolutionstuff.com/post/laravel-8-send-mail-using-gmail-smtp-serverexample.html"><i class="fa-solid fa-angle-right"></i> Laravel 8 Send Mail using Gmail SMTP Server</a>
                                </li>
                                <li>
                                    <a href="https://www.itsolutionstuff.com/post/laravel-8-mail-laravel-8-send-email-tutorialexample.html"><i class="fa-solid fa-angle-right"></i> Laravel 8 Mail | Laravel 8 Send Email Tutorial</a>
                                </li>
                                <li>
                                    <a href="https://www.itsolutionstuff.com/post/laravel-8-multiple-file-upload-exampleexample.html"><i class="fa-solid fa-angle-right"></i> Laravel 8 Multiple File Upload Example</a>
                                </li>
                                <li>
                                    <a href="https://www.itsolutionstuff.com/post/laravel-8-pdf-laravel-8-generate-pdf-file-using-dompdfexample.html"><i class="fa-solid fa-angle-right"></i> Laravel 8 PDF | Laravel 8 Generate PDF File using DomPDF</a>
                                </li>
                                <li>
                                    <a href="https://www.itsolutionstuff.com/post/laravel-8-auth-with-inertia-js-jetstream-tutorialexample.html"><i class="fa-solid fa-angle-right"></i> Laravel 8 Auth with Inertia JS Jetstream Tutorial</a>
                                </li>
                                <li>
                                    <a href="https://www.itsolutionstuff.com/post/laravel-8-database-seeder-tutorial-exampleexample.html"><i class="fa-solid fa-angle-right"></i> Laravel 8 Database Seeder Tutorial Example</a>
                                </li>
                                <li>
                                    <a href="https://www.itsolutionstuff.com/post/laravel-8-auth-with-livewire-jetstream-tutorialexample.html"><i class="fa-solid fa-angle-right"></i> Laravel 8 Auth with Livewire Jetstream Tutorial</a>
                                </li>
                                <li>
                                    <a href="https://www.itsolutionstuff.com/post/laravel-8-authentication-using-jetstream-exampleexample.html"><i class="fa-solid fa-angle-right"></i>Laravel 8 Authentication using Jetstream Example</a>
                                </li>
                                <li><a href="https://www.itsolutionstuff.com/post/laravel-8-multiple-image-upload-tutorialexample.html"><i class="fa-solid fa-angle-right"></i>Laravel 8 Multiple Image Upload Tutorial</a>
                                </li>
                                <li><a href="https://www.itsolutionstuff.com/post/laravel-8-form-validation-exampleexample.html"><i class="fa-solid fa-angle-right"></i> Laravel 8 Form Validation Example</a>
                                </li>
                                <li><a href="https://www.itsolutionstuff.com/post/whats-new-in-laravel-8-laravel-8-new-featuresexample.html"><i class="fa-solid fa-angle-right"></i> What's New in Laravel 8 | Laravel 8 New Features</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    
                </div>
                <?php include 'layouts/sidebar.php'; ?>
            </div>
        </div>
    </section>
    <?php include 'layouts/footer.php'; ?>
    
</body>
</html>