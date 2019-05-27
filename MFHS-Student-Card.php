<?php 

/**
 * Template Name: Template One
 * Version: 1.0
 * Description: Developed By WebIT.pk
 * Author: Fahad Yosuaf Mahar
 * Author URI: https://webIT.pk
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: WebIT.pk
 */

/* Prevent direct access to the template (always good to include this) */
if ( ! class_exists( 'GFForms' ) ) {
    return;
}


?>

<!-- Any PDF CSS styles can be placed in the style tag below -->
<style>
h1 {
    text-align: center;
    text-transform: uppercase;
    color: #a62828; 
    border-bottom: 1px solid #999;
    border-top: 1px solid #999;

}
    footer{
            text-align: center;
    text-transform: uppercase;
    color: #a62828; 
    border-top: 1px double #999;
    }
    .sep{
        border-right: 1px solid grey;
        border-left: 1px solid grey;

    }
    .center{
        text-align: right;
        float: right;
    }
    table {
    width: 100%;
}

th {
    height: 5px;
}
      .powered{
        text-align: right;
        vertical-align: bottom;
        font-size: 9px;
          color: grey;
    }
</style>

<!-- The PDF content should be placed in here -->
<table>
    <watermarkimage src="<?php echo PDF_TEMPLATE_LOCATION; ?>images/background.jpg" alpha="0.2" />

 <?php 
        $dob=$form_data['field']['Date of Birth'];
        $dateArr=explode("/",$dob);
        //Converting DD/MM/YYYY to MM/DD/YYYY
        $d=$dateArr[0];
        $m=$dateArr[1];
        $dateArr[0]=$m;
        $dateArr[1]=$d;
        // Getting Time Stamps
        $dobt=implode('/', $dateArr);
        $dobt = preg_replace('/\s+/', '', $dobt);
        $dobTs=strtotime($dobt);
        $today=strtotime('Today');
        $days=floor(($today-$dobTs)/86400);
        $years=floor($days/365);

        ?>       
<tr><td class="center">
<img height="150px" src="<?php echo PDF_TEMPLATE_LOCATION; ?>images/logo.jpg">
</td><td><center><h2>MUSLIM FOUNDATION OF HEALTH SCIENCES</h2></center>
</td></tr></table>
<h1>MFHS {Registration Type:2} Registration Letter</h1>
<h3>REGISTRATION #: <?php echo "111".date('y',strtotime($form_data['date_created_usa'])).($form_data['entry_id']+99); ?></h3>
<table>
    <tr><td>
        <p>Mr. / Mrs.</p>
        <p>S/O | D/O :</p>
        <p>CNIC #:</p>
        <p>Age:</p>
        <p>Email:</p>
        <p>Degree:</p>
    </td><td>
<p><?php echo $form_data['field']['Name']['first']." ".$form_data['field']['Name']['last']; ?></p>
<p><?php echo $form_data['field']['Father Name']['first']." ".$form_data['field']['Father Name']['last']; ?></p>            
<p><?php echo $form_data['field']['CNIC']; ?></p>
<p><?php echo $years." Years"; ?></p>
<p><?php echo $form_data['field']['Email']; ?></p>
<P><?php echo $form_data['field']['Degree']; ?></P>
</td><td class="center"><img width="150px" src="<?php echo $form_data['field']['Picture'][0]; ?>">
</td></tr></table>
<h3>Assalam-u-Alaikum!</h3>
<p>        We are pleased to inform you that, You have been successfully registered with Muslim Foundation of Health Sciences.</p>
<p>Your Registration No is : <strong><em>MFHS-<?php echo date('mdY',strtotime($form_data['date_created_usa'])); ?>{entry_id}.</em></strong> Please abide by all rules and regulation of our Foundation and that you will, Inshallah. We are hopeful that you will prove to be a benefecial addition to MFHS and serve the humanity in all needs.</p>

<p class="center"><img src="<?php echo PDF_TEMPLATE_LOCATION; ?>images/sign.png"></p>
<footer>
<h3>Copyright &copy; <?php echo date('Y'); ?> - Your Organization </h3>
<p><a href="YourOrganization.com"> Your Organization </a></p></footer><p class="powered">Thanks to Fahad Yousaf</p>
