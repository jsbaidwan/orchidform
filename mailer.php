<?php
    //echo '<pre>';print_r($_POST);die;
    $to = '*****@gmail.com';
    $subject = 'Orchid Financial Enquiry Form';
    $from = '*****@gmail.com';

    /* Form 1 Data Start */
    $id1 = $_POST['id1'];
    $gname1 = $_POST['gname1']; 
    $sname1 = $_POST['sname1']; 
    $caddress1 = $_POST['caddress1'];
    $tcaddress1 = $_POST['tcaddress1'];
    $mortage1 = $_POST['mortage1'];
    $own1 = $_POST['own1'];
    $rent1 = $_POST['rent1'];
    $other1 = $_POST['other1'];
    $preaddress1 = $_POST['preaddress1'];
    $licnumber1 = $_POST['licnumber1'];
    $issue1 = $_POST['issue1'];
    $licexp1 = $_POST['licexp1'];
    $dob1 = $_POST['dob1'];
    $mphone1 = $_POST['mphone1'];
    $hphone1 = $_POST['hphone1'];
    $wphone1 = $_POST['wphone1'];
    $email1 = $_POST['email1'];
    $aus1 = $_POST['aus1'];
    $status1 = $_POST['status1'];
    $mstatus1 = $_POST['mstatus1'];
    $agedepend1 = $_POST['agedepend1'];
    $numdepend1 = $_POST['numdepend1'];
    $emptype1 = $_POST['emptype1'];
    $empstatus1 = $_POST['empstatus1'];
    $empname1 = $_POST['empname1'];
    $purhome1 = $_POST['purhome1'];
    $refhome1 = $_POST['refhome1'];
    $debtconso1 = $_POST['debtconso1'];
    $pip1 = $_POST['pip1'];
    $riloan1 = $_POST['riloan1'];
    $cons1 = $_POST['cons1'];
    $fjudge1 = $_POST['fjudge1'];
    $fcomitt1 = $_POST['fcomitt1'];
    $arrears1 = $_POST['arrears1'];
    $intrates1 = $_POST['intrates1'];
    $fsituation1 = $_POST['fsituation1'];
    $comment1 = $_POST['comment1'];
    
    /* Form 1 Data End */

    /* Form 2 Data Start */

    $id2 = $_POST['id2'];
    $gname2 = $_POST['gname2']; 
    $sname2 = $_POST['sname2']; 
    $caddress2 = $_POST['caddress2'];
    $tcaddress2 = $_POST['tcaddress2'];
    $mortage2 = $_POST['mortage2'];
    $own2 = $_POST['own2'];
    $rent2 = $_POST['rent2'];
    $other2 = $_POST['other2'];
    $preaddress2 = $_POST['preaddress2'];
    $licnumber2 = $_POST['licnumber2'];
    $issue2 = $_POST['issue2'];
    $licexp2 = $_POST['licexp2'];
    $dob2 = $_POST['dob2'];
    $mphone2 = $_POST['mphone2'];
    $hphone2 = $_POST['hphone2'];
    $wphone2 = $_POST['wphone2'];
    $email2 = $_POST['email2'];
    $aus2 = $_POST['aus2'];
    $status2 = $_POST['status2'];
    $mstatus2 = $_POST['mstatus2'];
    $agedepend2 = $_POST['agedepend2'];
    $numdepend2 = $_POST['numdepend2'];
    $emptype2 = $_POST['emptype2'];
    $empstatus2 = $_POST['empstatus2'];
    $empname2 = $_POST['empname2'];
    $purhome2 = $_POST['purhome2'];
    $refhome2 = $_POST['refhome2'];
    $debtconso2 = $_POST['debtconso2'];
    $pip2 = $_POST['pip2'];
    $riloan2 = $_POST['riloan2'];
    $cons2 = $_POST['cons2'];
    $fjudge2 = $_POST['fjudge2'];
    $fcomitt2 = $_POST['fcomitt2'];
    $arrears2 = $_POST['arrears2'];
    $intrates2 = $_POST['intrates2'];
    $fsituation2 = $_POST['fsituation2'];
    $comment2 = $_POST['comment2'];

    /* Form 2 Data End */

    if($id2 == "1"){
    
        // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // Create email headers
    $headers .= 'From: '.$from."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    /* Form 1  */
    $message .= "<tr style='background: #eee; font-size:25px; font-weight:800;'><td colspan='2'>Personal Details (Borrower 1) </strong> </td></tr>";

    $message .= "<tr><td><strong>Given Name:</strong> </td><td>" . $gname1 . "</td></tr>";
    $message .= "<tr><td><strong>Surname:</strong> </td><td>" . $sname1 . "</td></tr>";
    $message .= "<tr><td><strong>Current Address:</strong> </td><td>" . $caddress1 . "</td></tr>";
    $message .= "<tr><td><strong>Time at Current Address:</strong> </td><td>" . $tcaddress1 . "</td></tr>";
    $message .= "<tr><td><strong>Address Status:</strong> </td><td>" . $mortage1 . "," . $own1 . "," . $rent1 . "," . $other1 . "</td></tr>";
    $message .= "<tr><td><strong>Previous Address (if within last 3 years):</strong> </td><td>" . $preaddress1 . "</td></tr>";
    $message .= "<tr><td><strong>Driver Licence Number:</strong> </td><td>" . $licnumber1 . "</td></tr>";
    $message .= "<tr><td><strong>State of Issue:</strong> </td><td>" . $issue1 . "</td></tr>";
    $message .= "<tr><td><strong>Driver Licence Expiry Date:</strong> </td><td>" . $licexp1 . "</td></tr>";
    $message .= "<tr><td><strong>DOB:</strong> </td><td>" . $dob1 . "</td></tr>";
    $message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . $mphone1 . "," . $hphone1 . "," . $wphone1 . "</td></tr>";
    $message .= "<tr><td><strong>Email Address:</strong> </td><td>" . $email1 . "</td></tr>";
    $message .= "<tr><td><strong>Aust Citizen:</strong> </td><td>" . $aus1 . "</td></tr>";
    $message .= "<tr><td><strong>Status:</strong> </td><td>" . $status1 . "</td></tr>";
    $message .= "<tr><td><strong>Marital Status:</strong> </td><td>" . $mstatus1 . "</td></tr>";
    $message .= "<tr><td><strong>Age of Dependants:</strong> </td><td>" . $agedepend1 . "</td></tr>";
    $message .= "<tr><td><strong>Number of Dependants:</strong> </td><td>" . $numdepend1 . "</td></tr>";
   
    $message .= "<tr style='background: #eee; font-size:25px; font-weight:800;'><td colspan='2'>A. Current Employment (Borrower 1)</strong> </td></tr>";

    $message .= "<tr><td><strong>Type of Employment:</strong> </td><td>" . $emptype1 . "</td></tr>";
    $message .= "<tr><td><strong>Status:</strong> </td><td>" . $empstatus1 . "</td></tr>";
    $message .= "<tr><td><strong>Employer Name:</strong> </td><td>" . $empname1 . "</td></tr>";
 
    $message .= "<tr style='background: #eee; font-size:25px; font-weight:800;'><td colspan='2'>B. Select Loan Purpose (Applicant 1)</strong> </td></tr>";

    $message .= "<tr><td><strong>Loan Purpose:</strong> </td><td>" . $purhome1 . "," . $refhome1 . "," . $debtconso1 . "," . $pip1 . "," . $riloan1 . "," . $cons1 . "</td></tr>";
  
    $message .= "<tr style='background: #eee; font-size:25px; font-weight:800;'><td colspan='2'>C. Your Financial Security (Applicant 1)</strong> </td></tr>";

    $message .= "<tr><td><strong>Have you ever had any financial judgments or legal proceedings against you?:</strong> </td><td>" . $fjudge1 . "</td></tr>";
    $message .= "<tr><td><strong>Do you have any difficulty meeting your financial commitments in the past 2 years?:</strong> </td><td>" . $fcomitt1 . "</td></tr>";
    $message .= "<tr><td><strong>Are any of yours existing debts currently in arrears?:</strong> </td><td>" . $arrears1 . "</td></tr>";
    $message .= "<tr><td><strong>Are you concerned about rising interest rates? How concerned are you?:</strong> </td><td>" . $intrates1 . "</td></tr>";
    $message .= "<tr><td><strong>Do you expect significant changes to your financial situation in the foreseeable future that would adversely impact your ability to meet your commitments?:</strong> </td><td>" . $fsituation1 . "</td></tr>";
    $message .= "<tr><td><strong>Please comment if you answered 'Yes' to any of these:</strong> </td><td>" . $comment1 . "</td></tr>";
   
    /* Form 2  */
    $message .= "<tr style='background: #000; color:#fff; font-size:25px; font-weight:800;'><td colspan='2'>Personal Details (Borrower 2) </strong> </td></tr>";

    $message .= "<tr><td><strong>Given Name:</strong> </td><td>" . $gname2 . "</td></tr>";
    $message .= "<tr><td><strong>Surname:</strong> </td><td>" . $sname2 . "</td></tr>";
    $message .= "<tr><td><strong>Current Address:</strong> </td><td>" . $caddress2 . "</td></tr>";
    $message .= "<tr><td><strong>Time at Current Address:</strong> </td><td>" . $tcaddress2 . "</td></tr>";
    $message .= "<tr><td><strong>Address Status:</strong> </td><td>" . $mortage2 . "," . $own2 . "," . $rent2 . "," . $other2 . "</td></tr>";
    $message .= "<tr><td><strong>Previous Address (if within last 3 years):</strong> </td><td>" . $preaddress2 . "</td></tr>";
    $message .= "<tr><td><strong>Driver Licence Number:</strong> </td><td>" . $licnumber2 . "</td></tr>";
    $message .= "<tr><td><strong>State of Issue:</strong> </td><td>" . $issue2 . "</td></tr>";
    $message .= "<tr><td><strong>Driver Licence Expiry Date:</strong> </td><td>" . $licexp2 . "</td></tr>";
    $message .= "<tr><td><strong>DOB:</strong> </td><td>" . $dob2 . "</td></tr>";
    $message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . $mphone2 . "," . $hphone2 . "," . $wphone2 . "</td></tr>";
    $message .= "<tr><td><strong>Email Address:</strong> </td><td>" . $email2 . "</td></tr>";
    $message .= "<tr><td><strong>Aust Citizen:</strong> </td><td>" . $aus2 . "</td></tr>";
    $message .= "<tr><td><strong>Status:</strong> </td><td>" . $status2 . "</td></tr>";
    $message .= "<tr><td><strong>Marital Status:</strong> </td><td>" . $mstatus2 . "</td></tr>";
    $message .= "<tr><td><strong>Age of Dependants:</strong> </td><td>" . $agedepend2 . "</td></tr>";
    $message .= "<tr><td><strong>Number of Dependants:</strong> </td><td>" . $numdepend2 . "</td></tr>";

    $message .= "<tr style='background: #eee; font-size:25px; font-weight:800;'><td colspan='2'>A. Current Employment (Borrower 2)</strong> </td></tr>";

    $message .= "<tr><td><strong>Type of Employment:</strong> </td><td>" . $emptype2 . "</td></tr>";
    $message .= "<tr><td><strong>Status:</strong> </td><td>" . $empstatus2 . "</td></tr>";
    $message .= "<tr><td><strong>Employer Name:</strong> </td><td>" . $empname2 . "</td></tr>";

    $message .= "<tr style='background: #eee; font-size:25px; font-weight:800;'><td colspan='2'>B. Select Loan Purpose (Applicant 2)</strong> </td></tr>";

    $message .= "<tr><td><strong>Loan Purpose:</strong> </td><td>" . $purhome2 . "," . $refhome2 . "," . $debtconso2 . "," . $pip2 . "," . $riloan2 . "," . $cons2 . "</td></tr>";

    $message .= "<tr style='background: #eee; font-size:25px; font-weight:800;'><td colspan='2'>C. Your Financial Security (Applicant 2)</strong> </td></tr>";

    $message .= "<tr><td><strong>Have you ever had any financial judgments or legal proceedings against you?:</strong> </td><td>" . $fjudge2 . "</td></tr>";
    $message .= "<tr><td><strong>Do you have any difficulty meeting your financial commitments in the past 2 years?:</strong> </td><td>" . $fcomitt2 . "</td></tr>";
    $message .= "<tr><td><strong>Are any of yours existing debts currently in arrears?:</strong> </td><td>" . $arrears2 . "</td></tr>";
    $message .= "<tr><td><strong>Are you concerned about rising interest rates? How concerned are you?:</strong> </td><td>" . $intrates2 . "</td></tr>";
    $message .= "<tr><td><strong>Do you expect significant changes to your financial situation in the foreseeable future that would adversely impact your ability to meet your commitments?:</strong> </td><td>" . $fsituation2 . "</td></tr>";
    $message .= "<tr><td><strong>Please comment if you answered 'Yes' to any of these:</strong> </td><td>" . $comment2 . "</td></tr>";
    $message .= '</table>';
    $message .= '</body></html>';
    
    // Sending email
    if(mail($to, $subject, $message, $headers)){
    echo "<script> Swal.fire('Sent!', 'Your mail has been sent successfully!!','success')</script>";
    } else{
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'
        })</script>";
    }
  }

  else if($id1 == '1') {
              // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // Create email headers
    $headers .= 'From: '.$from."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

    $message .= "<tr style='background: #eee; font-size:25px; font-weight:800;'><td colspan='2'>Personal Detail</strong> </td></tr>";

    $message .= "<tr><td><strong>Given Name:</strong> </td><td>" . $gname1 . "</td></tr>";
    $message .= "<tr><td><strong>Surname:</strong> </td><td>" . $sname1 . "</td></tr>";
    $message .= "<tr><td><strong>Current Address:</strong> </td><td>" . $caddress1 . "</td></tr>";
    $message .= "<tr><td><strong>Time at Current Address:</strong> </td><td>" . $tcaddress1 . "</td></tr>";
    $message .= "<tr><td><strong>Address Status:</strong> </td><td>" . $mortage2 . "," . $own1 . "," . $rent1 . "," . $other2 . "</td></tr>";
    $message .= "<tr><td><strong>Previous Address (if within last 3 years):</strong> </td><td>" . $preaddress1 . "</td></tr>";
    $message .= "<tr><td><strong>Driver Licence Number:</strong> </td><td>" . $licnumber1 . "</td></tr>";
    $message .= "<tr><td><strong>State of Issue:</strong> </td><td>" . $issue1 . "</td></tr>";
    $message .= "<tr><td><strong>Driver Licence Expiry Date:</strong> </td><td>" . $licexp1 . "</td></tr>";
    $message .= "<tr><td><strong>DOB:</strong> </td><td>" . $dob1 . "</td></tr>";
    $message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . $mphone1 . "," . $hphone1 . "," . $wphone1 . "</td></tr>";
    $message .= "<tr><td><strong>Email Address:</strong> </td><td>" . $email1 . "</td></tr>";
    $message .= "<tr><td><strong>Aust Citizen:</strong> </td><td>" . $aus1 . "</td></tr>";
    $message .= "<tr><td><strong>Status:</strong> </td><td>" . $status1 . "</td></tr>";
    $message .= "<tr><td><strong>Marital Status:</strong> </td><td>" . $mstatus1 . "</td></tr>";
    $message .= "<tr><td><strong>Age of Dependants:</strong> </td><td>" . $agedepend1 . "</td></tr>";
    $message .= "<tr><td><strong>Number of Dependants:</strong> </td><td>" . $numdepend1 . "</td></tr>";
   
    $message .= "<tr style='background:  #eee; font-size:25px; font-weight:800;'><td colspan='2'>A. Current Employment (Borrower 1)</strong> </td></tr>";

    $message .= "<tr><td><strong>Type of Employment:</strong> </td><td>" . $emptype1 . "</td></tr>";
    $message .= "<tr><td><strong>Status:</strong> </td><td>" . $empstatus1 . "</td></tr>";
    $message .= "<tr><td><strong>Employer Name:</strong> </td><td>" . $empname1 . "</td></tr>";
 
    $message .= "<tr style='background: #eee; font-size:25px; font-weight:800;'><td colspan='2'>B. Select Loan Purpose (Applicant 1)</strong> </td></tr>";

    $message .= "<tr><td><strong>Loan Purpose:</strong> </td><td>" . $purhome1 . "," . $refhome1 . "," . $debtconso1 . "," . $pip1 . "," . $riloan1 . "," . $cons1 . "</td></tr>";
  
    $message .= "<tr style='background: #eee; font-size:25px; font-weight:800;'><td colspan='2'>C. Your Financial Security (Applicant 1)</strong> </td></tr>";

    $message .= "<tr><td><strong>Have you ever had any financial judgments or legal proceedings against you?:</strong> </td><td>" . $fjudge1 . "</td></tr>";
    $message .= "<tr><td><strong>Do you have any difficulty meeting your financial commitments in the past 2 years?:</strong> </td><td>" . $fcomitt1 . "</td></tr>";
    $message .= "<tr><td><strong>Are any of yours existing debts currently in arrears?:</strong> </td><td>" . $arrears1 . "</td></tr>";
    $message .= "<tr><td><strong>Are you concerned about rising interest rates? How concerned are you?:</strong> </td><td>" . $intrates1 . "</td></tr>";
    $message .= "<tr><td><strong>Do you expect significant changes to your financial situation in the foreseeable future that would adversely impact your ability to meet your commitments?:</strong> </td><td>" . $fsituation1 . "</td></tr>";
    $message .= "<tr><td><strong>Please comment if you answered 'Yes' to any of these:</strong> </td><td>" . $comment1 . "</td></tr>";
 
    $message .= '</table>';
    $message .= '</body></html>';
   
    // Sending email
    if(mail($to, $subject, $message, $headers)){
    echo "<script> Swal.fire('Sent!', 'Your mail has been sent successfully!!','success')</script>";
    } else{
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'
        })</script>";
    }
  }

    
?>