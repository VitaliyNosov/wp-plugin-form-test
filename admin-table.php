<?php
    global $wpdb;
    $result = $wpdb->get_results("select * from wp_mytable");

    // print_r($result);
?>
    <div class="container">
    <table class="table table-striped">
    
        <thead>
            <tr>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Phone</th>
                <th>User Date</th>
            </tr>
        </thead>
        <tbody>

    <?php
    foreach ($result as $mytable) { ?>
        <tr>
            <td><?php echo $mytable->name; ?></td>
            <td><?php echo $mytable->email; ?></td>
            <td><?php echo $mytable->phone; ?></td>
            <td><?php echo $mytable->date; ?></td>
        </tr>
    <?php } ?>
    
        </tbody>
</table>

    </div>