<?php include 'classes/Appointment.php';?>
<?php include 'classes/Doctor.php';?>
<?php include 'classes/Page.php';?>
<?php include 'classes/Patient.php';?>
<?php include 'classes/Service.php';?>
<html>
<?php include 'components/head.php';?>

<body>
    <?php include 'components/NAVBAR.php';?>
    <div class="layout">
        <?php include 'components/sidebar.php';?> 
        
        <?php Page::display($_GET['page']);?>

        <main class="content">
            <h2>Dashboard Analytics</h2>
            <p>The warm-up is over. Let the real games begin.</p>
        </main>
    </div>
</body>
</html>
