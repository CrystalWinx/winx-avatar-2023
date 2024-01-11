<!DOCTYPE html>
<html>
    <head>
        <?php include "config.php";?>
        <meta charset="utf-8" />
        <meta name="description" content="Here's my Winx Avatar! Come join the club." />
        <meta property="fb:app_id" content="836929921496395" />
        <meta property="og:title" content="Winx Avatar" />
        <meta property="og:description" content="Here's my Winx Avatar! Come join the club." />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo $baseURL . 'share?uuid=' . $_GET['uuid']; ?>" />
        <meta property="og:image" content="<?php echo $baseURL . 'userImages/' . $_GET['uuid'] . '.jpg'; ?>" />
        <meta property="og:locale" content="en_US" />
        <meta property="twitter:card" content="summary" /
        <meta property="twitter:title" content="Winx Avatar" />
        <meta property="twitter:site" content="<?php echo $baseURL; ?>" />
        <meta property="twitter:description" content="Here's my Winx Avatar! Come join the club." />
        <meta property="twitter:image" content="<?php echo $baseURL . 'userImages/' . $_GET['uuid'] . '.jpg'; ?>" />
        <title>Winx Avatar</title>
        <style type="text/css">
            html, body {
                height: 100%;
                margin: 0;
            }
            img{
                height: 100%;
            }
            section {
                align-items: flex-end;
                bottom: 0;
                display: flex;
                left: 0;
                position: fixed;
                right: 0;
                text-align: center;
                top: 0;
            }
            small {
                background-color: white;
                display: block;
                flex: 1;
                padding: 1rem;
                opacity: 1;
                transition: opacity 1s ease-in-out;
            }
        </style>
    </head>
    <body>
        <main itemscope itemtype="https://schema.org/ImageObject">
            <h1 itemprop="name">Winx Avatar</h1>
            <p itemprop="description">Here's my Winx Avatar! Come join the club.</p>
            <img id="image-preview" src="<?php echo $baseURL . 'userImages/' . $_GET['uuid'] . '.jpg'; ?>" alt="My Winx Avatar" itemprop="contentUrl" />
        </main>
        <section>
            <small id="help">
                Click <a href="<?php echo $baseURL;?>" id="linkToCreator">here</a> if you are not redirected automatically.
            </small>
        </section>
        
        <script type="text/javascript">
                function onLoadComplete() {
                    setTimeout(redirectToCreator, 5000);
                    
                }
                function redirectToCreator(){
                    window.location.replace(baseURL);
                }
                function showHelp() {
                    document.getElementById("help")
                            .style.opacity = 1;
                }

                document.getElementById("image-preview")
                        .addEventListener("load", onLoadComplete);
        </script>
    </body>
</html>
