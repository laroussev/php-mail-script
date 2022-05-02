<?php 
/**
 * mail.php
 *
 * Bulk Mail Sending Script
 *
 * @category   Mail
 * @package    PhpMailler
 * @author     seotamsin
 * @copyright  2022 seotamsin
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @link       http://pear.php.net/package/PackageName
 * @datetime   02 05 2022
 */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Script">
    <meta name="keywords" content="HTML, CSS, JavaScript, PhpMailler">
    <meta name="author" content="seotamsin">
    <title>Bulk Mail Sending Script - seotamsin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .row {
            padding-top: 20px
        }
        
        .marginmail {
            margin-right: 16px;
        }
        .btn-outline-primary{
            color:#000;
            position: absolute;
    right: 40px;
    margin-top: 30px;
    font-size:18px;
        }
        
    </style>
</head>

<body>
    <div class="container-sm">
        <h1 class="row">Bulk Mail Sending Script</h1>
        <form class="row g-3 needs-validation" method="POST" action="test-post.php">
            <div class="input-group mb-3">
                <span class="input-group-text">Mail ( SMTP ) Adress : </span>
                <input type="text" class="form-control" placeholder="smtp.gmail.com" name="smtphost" required>
                <select class="form-select" name="smtpport" required>
                    <option selected disabled>SMTP Port</option>
                    <option value="25">25</option>
                    <option value="465">465</option>
                    <option value="587">587</option>
                  </select>
            </div>

            <div class="col-md-6">
                <span class="input-group-text" required>Mail Adress : </span>
                <input type="mail" class="form-control marginmail" placeholder="info@example.com" name="mailadress">
                <span class="input-group-text" required>Mail Password : </span>
                <input type="password" class="form-control" placeholder="•••••••••" name="mailpassword">
            </div>

            <div class="col-md-6">
                <span class="input-group-text">Sender Name : </span>
                <input type="text" class="form-control marginmail" placeholder="Name Surname" name="mailname" required>
                <span class="input-group-text">Subject Header : </span>
                <input type="text" class="form-control" placeholder="Subject" name="mailsubject" required>
            </div>


            <div class="input-group">
                <span class="input-group-text">Subject Content : </span>
                <textarea class="form-control" name="mailmessage"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
            
       <script type="text/javascript">document.write(unescape('%20%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%67%69%74%68%75%62%2E%63%6F%6D%2F%73%65%6F%74%61%6D%73%69%6E%22%20%74%61%72%67%65%74%3D%22%5F%62%6C%61%6E%6B%22%20%63%6C%61%73%73%3D%22%62%74%6E%20%62%74%6E%2D%6F%75%74%6C%69%6E%65%2D%70%72%69%6D%61%72%79%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%73%76%67%20%73%74%79%6C%65%3D%22%6D%61%72%67%69%6E%2D%72%69%67%68%74%3A%35%70%78%3B%63%6F%6C%6F%72%3A%77%68%69%74%65%3B%77%69%64%74%68%3A%33%32%70%78%3B%22%20%68%65%69%67%68%74%3D%22%32%34%22%20%61%72%69%61%2D%68%69%64%64%65%6E%3D%22%74%72%75%65%22%20%76%69%65%77%42%6F%78%3D%22%30%20%30%20%31%36%20%31%36%22%20%76%65%72%73%69%6F%6E%3D%22%31%2E%31%22%20%77%69%64%74%68%3D%22%32%34%22%20%64%61%74%61%2D%76%69%65%77%2D%63%6F%6D%70%6F%6E%65%6E%74%3D%22%74%72%75%65%22%20%63%6C%61%73%73%3D%22%6F%63%74%69%63%6F%6E%20%6F%63%74%69%63%6F%6E%2D%6D%61%72%6B%2D%67%69%74%68%75%62%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%61%74%68%20%66%69%6C%6C%2D%72%75%6C%65%3D%22%65%76%65%6E%6F%64%64%22%20%64%3D%22%4D%38%20%30%43%33%2E%35%38%20%30%20%30%20%33%2E%35%38%20%30%20%38%63%30%20%33%2E%35%34%20%32%2E%32%39%20%36%2E%35%33%20%35%2E%34%37%20%37%2E%35%39%2E%34%2E%30%37%2E%35%35%2D%2E%31%37%2E%35%35%2D%2E%33%38%20%30%2D%2E%31%39%2D%2E%30%31%2D%2E%38%32%2D%2E%30%31%2D%31%2E%34%39%2D%32%2E%30%31%2E%33%37%2D%32%2E%35%33%2D%2E%34%39%2D%32%2E%36%39%2D%2E%39%34%2D%2E%30%39%2D%2E%32%33%2D%2E%34%38%2D%2E%39%34%2D%2E%38%32%2D%31%2E%31%33%2D%2E%32%38%2D%2E%31%35%2D%2E%36%38%2D%2E%35%32%2D%2E%30%31%2D%2E%35%33%2E%36%33%2D%2E%30%31%20%31%2E%30%38%2E%35%38%20%31%2E%32%33%2E%38%32%2E%37%32%20%31%2E%32%31%20%31%2E%38%37%2E%38%37%20%32%2E%33%33%2E%36%36%2E%30%37%2D%2E%35%32%2E%32%38%2D%2E%38%37%2E%35%31%2D%31%2E%30%37%2D%31%2E%37%38%2D%2E%32%2D%33%2E%36%34%2D%2E%38%39%2D%33%2E%36%34%2D%33%2E%39%35%20%30%2D%2E%38%37%2E%33%31%2D%31%2E%35%39%2E%38%32%2D%32%2E%31%35%2D%2E%30%38%2D%2E%32%2D%2E%33%36%2D%31%2E%30%32%2E%30%38%2D%32%2E%31%32%20%30%20%30%20%2E%36%37%2D%2E%32%31%20%32%2E%32%2E%38%32%2E%36%34%2D%2E%31%38%20%31%2E%33%32%2D%2E%32%37%20%32%2D%2E%32%37%2E%36%38%20%30%20%31%2E%33%36%2E%30%39%20%32%20%2E%32%37%20%31%2E%35%33%2D%31%2E%30%34%20%32%2E%32%2D%2E%38%32%20%32%2E%32%2D%2E%38%32%2E%34%34%20%31%2E%31%2E%31%36%20%31%2E%39%32%2E%30%38%20%32%2E%31%32%2E%35%31%2E%35%36%2E%38%32%20%31%2E%32%37%2E%38%32%20%32%2E%31%35%20%30%20%33%2E%30%37%2D%31%2E%38%37%20%33%2E%37%35%2D%33%2E%36%35%20%33%2E%39%35%2E%32%39%2E%32%35%2E%35%34%2E%37%33%2E%35%34%20%31%2E%34%38%20%30%20%31%2E%30%37%2D%2E%30%31%20%31%2E%39%33%2D%2E%30%31%20%32%2E%32%20%30%20%2E%32%31%2E%31%35%2E%34%36%2E%35%35%2E%33%38%41%38%2E%30%31%33%20%38%2E%30%31%33%20%30%20%30%30%31%36%20%38%63%30%2D%34%2E%34%32%2D%33%2E%35%38%2D%38%2D%38%2D%38%7A%22%3E%3C%2F%70%61%74%68%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%73%76%67%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%47%69%74%48%75%62%0A%20%20%20%20%20%20%20%20%3C%2F%61%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%0A%0A%20%20%20%20%3C%73%63%72%69%70%74%20%73%72%63%3D%22%68%74%74%70%73%3A%2F%2F%63%64%6E%2E%6A%73%64%65%6C%69%76%72%2E%6E%65%74%2F%6E%70%6D%2F%62%6F%6F%74%73%74%72%61%70%40%35%2E%31%2E%33%2F%64%69%73%74%2F%6A%73%2F%62%6F%6F%74%73%74%72%61%70%2E%62%75%6E%64%6C%65%2E%6D%69%6E%2E%6A%73%22%20%69%6E%74%65%67%72%69%74%79%3D%22%73%68%61%33%38%34%2D%6B%61%37%53%6B%30%47%6C%6E%34%67%6D%74%7A%32%4D%6C%51%6E%69%6B%54%31%77%58%67%59%73%4F%67%2B%4F%4D%68%75%50%2B%49%6C%52%48%39%73%45%4E%42%4F%30%4C%52%6E%35%71%2B%38%6E%62%54%6F%76%34%2B%31%70%22%20%63%72%6F%73%73%6F%72%69%67%69%6E%3D%22%61%6E%6F%6E%79%6D%6F%75%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A'));</script>
</body>

</html>