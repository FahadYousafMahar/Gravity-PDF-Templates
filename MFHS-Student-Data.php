<?php 

/**
 * Template Name: MFHS Student Data PDF
 * Version: 1.1.3
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
<table>
<tr><td class="center">
<img height="150px" src="<?php echo PDF_TEMPLATE_LOCATION; ?>images/logo.jpg">
</td><td><center><h2>MUSLIM FOUNDATION OF HEALTH SCIENCES</h2></center>
</td></tr></table>
<h1>MFHS {Registration Type:2} DATASHEET</h1>
<h3>REGISTRATION #: MFHS-<?php echo date('mdY',strtotime($form_data['date_created_usa'])); ?>{entry_id}</h3>
<table>
<tr><td>
    
    <p>Name</p>
    <p>Father Name:</p>
    <p>CNIC #:</p>
    <p>Date of Birth:</p>
    <p>Age:</p>
    <p>Blood Group:</p>
    <p>Email:</p>
    <p>Phone NO:</p>
    
</td>
<td>
    
<p><?php echo $form_data['field']['Name']['first']." ".$form_data['field']['Name']['last']; ?></p>
<p><?php echo $form_data['field']['Father Name']['first']." ".$form_data['field']['Father Name']['last']; ?></p>
<p><?php echo $form_data['field']['CNIC']; ?></p>
<p><?php echo $form_data['field']['Date of Birth']; ?></p>
<p><?php echo $years." Years"; ?></p>
<p><?php echo $form_data['field']['Blood Group']; ?></p>
<p><?php echo $form_data['field']['Email']; ?></p>
<p><?php echo $form_data['field']['Phone Number']; ?></p>
    
</td><td class="center"><img width="150px" src="<?php echo $form_data['field']['Picture'][0]; ?>">
</td></tr></table>
<h3>Address: <?php foreach($form_data['field']['Address'] as $address){if ($address != ''){ echo $address.", ";}}?></h3>

<p>Degree: <?php echo $form_data['field']['Degree']." ".$form_data['field']['Degree Name']; ?></p>
<p>Institution: <?php echo $form_data['field']['Institution']; ?></p>
<p>Session: <?php echo $form_data['field']['Session']; ?></p>

<p><strong>What is your Aim in Life ?</strong><br><?php echo $form_data['field']['What is your Aim in Life ?']; ?></p>
<p><strong>Why you want to be a part of MFHS ?</strong><br><?php echo $form_data['field']['Why you want to be a part of MFHS ?']; ?></p>

<footer>
<h3>Copyright &copy; <?php echo date('Y'); ?> - MFHS | Muslim Foundation of Health Sciences</h3>
<p><a hre="www.MFHSpak.org">WWW.MFHSPAK.ORG</a></p></footer><p class="powered">Powered by WebIT.pk</p>