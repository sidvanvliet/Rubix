<?php
require("rubix.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Rubix Demo</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <style>
            .col{
                min-height:40vh;
            }
            .col:not(:first-child){
                border-left:1px solid #ccc;
            }
            article img{
                max-width:30vw;
            }
        </style>

    </head>
    <body>

        <div class="row container-fluid mt-3">

            <div class="col">
                <?php $user_role = "user"; ?>
                <b>User view:</b>

                <article class="mt-3">
                    <h2>Lionel Messi: Barcelona forward set to make early return from injury</h2>
                    <p>6 hours ago | European Football</p>
                    <img src="demo_img/injured_l_messi.jpg" alt="Injured Lionel Messi">
                    <p>
                        <b>Lionel Messi could return from injury earlier than expected for Barcelona.</b>
                        <br><br>
                        The Argentine was expected to be out for three weeks after breaking his arm against Sevilla on 20 October.
                        <br><br>
                        But after missing only the Champions League win over Inter Milan and Sunday's El Clasico triumph, Messi took part in light training on Wednesday.
                        <br><br>
                        The 31-year-old forward is not in the squad to face Cultural Leonesa in the Copa del Rey on Wednesday night but may face Rayo Vallecano on Saturday.
                    </p>
                    <?php if(can_use('comment', $user_role)){ ?>
                        <button>Reply</button>
                    <?php } ?>
                </article>
            </div>

            <div class="col">
                <?php $user_role = "editor"; ?>
                <b>Editor view:</b>

                <article class="mt-3">
                    <h2>Lionel Messi: Barcelona forward set to make early return from injury</h2>
                    <p>
                        6 hours ago | European Football <?php if(can_use('edit article', $user_role)){ ?> | <a href="#"><img src="demo_img/pencil.png"> Edit article</a> <?php } ?>
                    </p>
                    <img src="demo_img/injured_l_messi.jpg" alt="Injured Lionel Messi">
                    <p>
                        <b>Lionel Messi could return from injury earlier than expected for Barcelona.</b>
                        <br><br>
                        The Argentine was expected to be out for three weeks after breaking his arm against Sevilla on 20 October.
                        <br><br>
                        But after missing only the Champions League win over Inter Milan and Sunday's El Clasico triumph, Messi took part in light training on Wednesday.
                        <br><br>
                        The 31-year-old forward is not in the squad to face Cultural Leonesa in the Copa del Rey on Wednesday night but may face Rayo Vallecano on Saturday.
                    </p>
                    <?php if(can_use('comment', $user_role)){ ?>
                        <button>Reply</button>
                    <?php } ?>
                </article>
            </div>

            <div class="col">
                <?php $user_role = "admin"; ?>
                <b>Admin view:</b>

                <article class="mt-3">
                    <h2>Lionel Messi: Barcelona forward set to make early return from injury</h2>
                    <p>
                        6 hours ago | European Football
                        <?php if(can_use('edit article', $user_role)){ ?> | <a href="#"><img src="demo_img/pencil.png"> Edit article</a> <?php } ?>
                        <?php if(can_use('delete article', $user_role)){ ?> | <a href="#"><img src="demo_img/delete.png"> Delete article</a> <?php } ?>
                    </p>
                    <img src="demo_img/injured_l_messi.jpg" alt="Injured Lionel Messi">
                    <p>
                        <b>Lionel Messi could return from injury earlier than expected for Barcelona.</b>
                        <br><br>
                        The Argentine was expected to be out for three weeks after breaking his arm against Sevilla on 20 October.
                        <br><br>
                        But after missing only the Champions League win over Inter Milan and Sunday's El Clasico triumph, Messi took part in light training on Wednesday.
                        <br><br>
                        The 31-year-old forward is not in the squad to face Cultural Leonesa in the Copa del Rey on Wednesday night but may face Rayo Vallecano on Saturday.
                    </p>
                    <?php if(can_use('comment', $user_role)){ ?>
                        <button>Reply</button>
                    <?php } ?>
                    <?php if(can_use('disable comments', $user_role)){ ?>
                        <button>Disable comments on this post</button>
                    <?php } ?>
                </article>
            </div>

        </div>

        <!-- Example usage: -->
<!--        --><?php //if(can_use('edit', $user_role)){ ?>
<!--            <span>Only people with permission <u>edit</u> and role <u>admin</u> will see this.</span>-->
<!--        --><?php //} ?>

    </body>
</html>