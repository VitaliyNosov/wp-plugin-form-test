<?php
    global $wpdb;
    $result = $wpdb->get_results("select * from wp_mytable");

    // print_r($result);
?>

<div class="container">

    <!-- bootsrtap table style: table table-striped -->

    <table class="widefat fixed" cellspacing="0">
        <thead>

    <!-- <table class="table table-striped"> 
        <thead> -->
            <tr>
                <th class="table-name">User Name</th>
                <th class="table-name">User Email</th>
                <th class="table-name">User Phone</th>
                <th class="table-name">User Date</th>
            </tr>
        </thead>
        <tbody>

        <table class="widefat fixed" cellspacing="0">
            <thead>

    <?php
    foreach ($result as $mytable) { ?>
        <tr>
            <td><?php echo $mytable->Name; ?></td>
            <td><?php echo $mytable->Email; ?></td>
            <td><?php echo $mytable->Phone; ?></td>
            <td><?php echo $mytable->Date; ?></td>
        </tr>
    <?php } ?>
    
        </tbody>
    </table>

    <div class="footer-plugin">
        <div class="autor-social-block">
            <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100004502835112" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
            <div class="social">
                <a href="https://www.linkedin.com/in/vitaliy-nosov-5543a8173/" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <div class="social">
               <a href="https://t.me/VitaliyNosovWeb" target="_blank">
                    <i class="fab fa-telegram-plane"></i>
               </a>
            </div>
        </div>
            <p>
                Developer: <span>Vitaliy Nosov</span>
            </p>
    </div>

</div>