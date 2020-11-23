<?php get_header(); ?>

<?php
    $homepage = get_page_by_title('Accueil', OBJECT, 'test'); 
    $content = apply_filters('the_content', $homepage->post_content);
    $thumbhomepage = get_the_post_thumbnail_url( $homepage, 'post-thumbnail' );

    $quote = get_page_by_title('Quote', OBJECT, 'test'); 
    $contentQuote = apply_filters('the_content', $quote->post_content);
    
    $disclaimer = get_page_by_title('Disclaimer', OBJECT, 'test'); 
    $contentDisclaimer = apply_filters('the_content', $disclaimer->post_content);
?>

<div class="accueilHome">
    <div class="accueilHome-content">
        <?php echo $content ?>
    </div>

    <div class="accueilHome-thumbnail" style="background: url('<?php echo $thumbhomepage ?>') center center/cover;">
    </div>
</div>

<div class="container-disclaimer">
    <?php echo $contentDisclaimer; ?>
</div>

<div class="container-home-playlist-quote">
    <div class="playlist-display">
        <fieldset>
            <legend>playlist <svg id="playlist" height="50" viewBox="0 0 511.449 511.449" width="50"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m436.508 74.941c-99.912-99.914-261.639-99.93-361.566 0-99.914 99.912-99.93 261.639 0 361.566 99.912 99.914 261.639 99.93 361.566 0 99.914-99.911 99.929-261.638 0-361.566zm-266.116 74.451h170.666c11.598 0 21 9.402 21 21s-9.402 21-21 21h-170.666c-11.598 0-21-9.402-21-21s9.402-21 21-21zm64 212.666h-64c-11.598 0-21-9.402-21-21s9.402-21 21-21h64c11.598 0 21 9.402 21 21s-9.403 21-21 21zm-64-85.333c-11.598 0-21-9.402-21-21s9.402-21 21-21h106.666c11.598 0 21 9.402 21 21s-9.402 21-21 21zm242.783 9.724c-5.188 10.373-17.8 14.579-28.175 9.392l-12.275-6.138v51.354c0 23.343-18.99 42.334-42.333 42.334s-42.334-18.991-42.334-42.334c0-22.902 18.417-42.333 42.667-42.333v-43c0-15.603 16.453-25.75 30.392-18.783l42.667 21.333c10.372 5.187 14.577 17.801 9.391 28.175z" />
                </svg>
            </legend>
            <div class="playlist-display-loop">
                <?php get_template_part('loop-music'); ?>
            </div>
            <div class="bas-playlist-home">
                <svg id="previousPlaylist" height="50" viewBox="0 0 511.448 511.448" width="50"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m74.941 436.508c99.913 99.913 261.64 99.927 361.567 0 99.913-99.913 99.928-261.64 0-361.567-99.913-99.913-261.639-99.927-361.567 0-99.914 99.911-99.929 261.639 0 361.567zm39.486-197.037 117.333-96c13.695-11.208 34.298-1.419 34.298 16.253v51.685l83.036-67.938c13.569-11.103 34.298-1.538 34.298 16.253v192c0 17.682-20.607 27.456-34.298 16.253l-83.036-67.938v51.685c0 17.682-20.606 27.455-34.298 16.253l-117.333-96c-10.301-8.427-10.231-24.136 0-32.506z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50"
                    height="50" viewBox="0 0 455 455" id="stopPlaylist">>
                    <defs>
                        <clipPath>
                            <rect width="455" height="455" />
                        </clipPath>
                    </defs>
                    <g id="Web_1366_1" clip-path="url(#clip-Web_1366_1)">
                        <path id="Tracé_2"
                            d="M225,0C349.264,0,450,100.736,450,225S349.264,450,225,450,0,349.264,0,225,100.736,0,225,0Z"
                            transform="translate(3 3)" />
                        <path id="Tracé_1"
                            d="M25,0H175a25,25,0,0,1,25,25V175a25,25,0,0,1-25,25H25A25,25,0,0,1,0,175V25A25,25,0,0,1,25,0Z"
                            transform="translate(128 128)" fill="#444444" />
                    </g>
                </svg>
                <svg id="playPlaylist" height="50" viewBox="0 0 511.449 511.449" width="50"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m436.508 74.941c-99.913-99.913-261.639-99.927-361.566 0-99.914 99.912-99.93 261.64 0 361.567 99.913 99.913 261.639 99.927 361.566 0 99.914-99.911 99.929-261.64 0-361.567zm-103.891 197.36-96 74.667c-13.642 10.609-33.893.986-33.893-16.577v-149.333c0-17.439 20.119-27.292 33.893-16.577l96 74.667c10.809 8.408 10.796 24.755 0 33.153z" />
                </svg>
                <svg id="pausePlaylist" height="50" viewBox="0 0 511.448 511.448" width="50"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m436.508 74.94c-99.913-99.913-261.64-99.927-361.567 0-99.913 99.913-99.928 261.64 0 361.567 99.913 99.913 261.64 99.928 361.567 0 99.912-99.912 99.927-261.639 0-361.567zm-202.451 255.45c0 11.598-9.402 21-21 21s-21-9.402-21-21v-149.333c0-11.598 9.402-21 21-21s21 9.402 21 21zm85.333 0c0 11.598-9.402 21-21 21s-21-9.402-21-21v-149.333c0-11.598 9.402-21 21-21s21 9.402 21 21z" />
                </svg>
                <svg id="nextPlaylist" height="50" viewBox="0 0 511.448 511.448" width="50"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m436.507 74.941c-99.913-99.913-261.64-99.927-361.567 0-99.913 99.913-99.927 261.64 0 361.567 99.913 99.913 261.639 99.928 361.567 0 99.914-99.912 99.93-261.64 0-361.567zm-39.485 197.036-117.333 96c-13.695 11.208-34.298 1.419-34.298-16.253v-51.685l-83.036 67.938c-13.569 11.103-34.298 1.538-34.298-16.253v-192c0-17.682 20.607-27.456 34.298-16.253l83.036 67.938v-51.685c0-17.682 20.606-27.455 34.298-16.253l117.333 96c10.3 8.427 10.23 24.136 0 32.506z" />
                </svg>
            </div>
        </fieldset>
    </div>
    <div class="homeQuote">
        <?php echo $contentQuote; ?>
    </div>
</div>

<?php get_footer(); ?>