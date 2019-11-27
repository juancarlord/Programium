<!DOCTYPE html>
<html>

<head>
    
    <title>Curso Intermedio</title>
    <?php require_once  'includes/bootstrapHead.php'; ?>
</head>

<body>
    <?php require_once 'includes/navBar.php'; ?>
    <?php require_once 'includes/loginModal.php'; ?>
    <?php require_once 'includes/signUpModal.php'; ?>
    
    <?php 
        if (!isset($_SESSION['sess_user_id']) && !isset($_SESSION['displayUser']) && !isset($_SESSION['name'])) {
            require_once 'includes/contentBlocker.php'; 
        }else{
            require_once 'includes/curso2.php';
        }
     ?>
    
    

    <?php require_once 'includes/bootstrapBody.php'; ?>
</body>

</html>