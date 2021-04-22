<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_the_title(); ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://holisticly.io/wp-content/themes/hello-elementor/micropage.css">
</head>

<body>

    <header>
        <div>
            <img src="./assets/logo.svg" alt="logo" class="logo">
            <div>
                <span class="line1"><?php echo get_post_meta( get_the_ID(), 'line_1', true ); ?></span>
                <span class="line2"><?php echo get_post_meta( get_the_ID(), 'line_2', true ); ?></span>
                <img class="solavieve" src="https://holisticly.io/wp-content/themes/hello-elementor/assets/solavieve.svg" alt="">
            </div>
        </div>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <img  src="<?php echo $image[0]; ?>" alt="anxiety">


    </header>
    <main>

        <p>
            <?php 
                $id=get_the_ID(); 
                $post = get_post($id); 
                $content = apply_filters('the_content', $post->post_content); 
                echo $content;  
            ?>
        </p>

        <?php echo get_post_meta( get_the_ID(), 'chatbox', true ); ?>
    </main>

</body>

</html>