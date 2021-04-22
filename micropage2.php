<?php /* Template Name: MicroPage */ ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holisticly</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://holisticly.io/wp-content/themes/hello-elementor/micropage.css">
</head>

<body>

    <header>
        <div class="info">
            <img src="https://holisticly.io/wp-content/themes/hello-elementor/assets/holisticly.png" alt="logo" class="logo">
            <span class="title"><?php echo get_post_meta( get_the_ID(), 'line_1', true ); ?></span>
        </div>

        <div class="featured">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <img  src="<?php echo $image[0]; ?>" alt="featured">
        </div>




    </header>
    <main>

        <div class="content">
            <?php 
                $id=get_the_ID(); 
                $post = get_post($id); 
                $content = apply_filters('the_content', $post->post_content); 
                echo $content;  
            ?>
        </div>

        <div class="chatbox">
            <?php echo get_post_meta( get_the_ID(), 'chatbox', true ); ?>            
        </div>

    </main>

    <script>
        // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
        let vh = window.innerHeight * 0.01;
        // Then we set the value in the --vh custom property to the root of the document
        document.documentElement.style.setProperty('--vh', `${vh}px`);

        // We listen to the resize event
        window.addEventListener('resize', () => {
            // We execute the same script as before
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        });
    </script>

</body>

</html>