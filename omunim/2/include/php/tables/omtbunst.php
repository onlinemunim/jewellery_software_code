<?php

/*
 * **************************************************************************************
 * @tutorial: Udhaar Notice Setup Table by @Author: KHUSH16JAN13
 * **************************************************************************************
 * 
 * Created on Jan 16, 2013 3:22:42 PM
 *
 * @FileName: omtbunst.php
 * @Author: SoftwareGen Developement Team
 * @AuthorEmailId:  info@softwaregen.com
 * @ProjectName: omunim
 * @version 1.0.1
 * @Copyright (c) 2010 www.softwaregen.com
 * @All rights reserved
 *  Copyright 2012 SoftwareGen, Inc
 *
 * @ModificaionHistory
 *  MODIFICATION DATE: Modified by KHUSH20JAN13
 *  AUTHOR:
 *  REASON:
 *
 */
?>
<?php

if ($ownerId == '') {
    $ownerId = $dgGUId;
}
if ($ownerId == '') {
    $ownerId = $_SESSION['sessiondgGUId'];
}

$query = "CREATE TABLE IF NOT EXISTS udhaar_notice_setup (
uns_id                          INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
uns_own_id                      VARCHAR(50),
uns_def_lang                    VARCHAR(20),
uns_lang                        VARCHAR(20),
uns_top_margin                  VARCHAR(6),  
uns_left_margin                 VARCHAR(6),  
uns_header_width                VARCHAR(20),
uns_header_display              VARCHAR(30),
uns_border_check                VARCHAR(6),
uns_firm_left_logo_check        VARCHAR(6),
uns_firm_right_logo_check       VARCHAR(6),
uns_header_left_section         VARCHAR(100),
uns_header_left_section_font    VARCHAR(20),
uns_header_left_section_color   VARCHAR(30),
uns_header_left_sec_check       VARCHAR(6),
uns_header_right_section        VARCHAR(100),
uns_header_right_section_font   VARCHAR(20),
uns_header_right_section_color  VARCHAR(30),
uns_header_right_sec_check      VARCHAR(6),
uns_header                      VARCHAR(100),
uns_header_font                 VARCHAR(20),
uns_header_color                VARCHAR(30),
uns_header_check                VARCHAR(6),
uns_firm_header_font            VARCHAR(20),
uns_firm_header_color           VARCHAR(30),
uns_firm_header_check           VARCHAR(6),
uns_firm_name_font              VARCHAR(20),
uns_firm_name_color             VARCHAR(30),
uns_firm_name_check             VARCHAR(6),
uns_firm_desc_font              VARCHAR(20),
uns_firm_desc_color             VARCHAR(30),
uns_firm_desc_check             VARCHAR(6),
uns_firm_address_font           VARCHAR(20),
uns_firm_address_color          VARCHAR(30),
uns_firm_address_check          VARCHAR(6),
uns_firm_phone_font             VARCHAR(20),
uns_firm_phone_color            VARCHAR(30),
uns_firm_phone_check            VARCHAR(6),
uns_firm_email_font             VARCHAR(20),
uns_firm_email_color            VARCHAR(30),
uns_firm_email_check            VARCHAR(6),
uns_reg_no_label                VARCHAR(100),
uns_reg_no_font                 VARCHAR(20),
uns_reg_no_color                VARCHAR(30),
uns_reg_no_check                VARCHAR(6),
uns_date_lbl                    VARCHAR(100),
uns_date_font                   VARCHAR(20),
uns_date_color                  VARCHAR(30),
uns_sub_head                    VARCHAR(100),    
uns_sub_lbl                     VARCHAR(100), 
uns_sub_font                    VARCHAR(20),
uns_sub_color                   VARCHAR(30),
uns_sub_check                   VARCHAR(6),
uns_notice_cont                 VARCHAR(2000),
uns_notice_font                 VARCHAR(20),
uns_notice_color                VARCHAR(30),
uns_notice_check                VARCHAR(6),
uns_details                     VARCHAR(100),
uns_principal_lbl               VARCHAR(100),
uns_udhaar_date_lbl             VARCHAR(100),
uns_udhaar_date_font            VARCHAR(20),
uns_udhaar_date_color           VARCHAR(30),
uns_udhaar_date_check           VARCHAR(6),
uns_interest_lbl                VARCHAR(100),
uns_total_amt_lbl               VARCHAR(100),
uns_other_info                  VARCHAR(500),
uns_other_info_font             VARCHAR(20),
uns_other_info_color            VARCHAR(30),
uns_other_info_check            VARCHAR(6),
uns_tnc_lbl                     VARCHAR(100),
uns_tnc                         VARCHAR(2000),
uns_tnc_font                    VARCHAR(20),
uns_tnc_color                   VARCHAR(30),
uns_tnc_content_font            VARCHAR(20),
uns_tnc_content_color           VARCHAR(30),
uns_tnc_check                   VARCHAR(6),
uns_cust_sign_lbl               VARCHAR(200),
uns_cust_sign_font              VARCHAR(20),
uns_cust_sign_color             VARCHAR(30),
uns_owner_sign_lbl              VARCHAR(100),
uns_owner_sign_font             VARCHAR(20),
uns_owner_sign_color            VARCHAR(30),
uns_cust_image_check            VARCHAR(6),
uns_footer                      VARCHAR(100),
uns_footer_font                 VARCHAR(20),
uns_footer_color                VARCHAR(30),
uns_footer_check                VARCHAR(6),
uns_form_size                   VARCHAR(20),
uns_default_size                VARCHAR(20),
uns_form_width                  VARCHAR(6),
uns_staff_id                    VARCHAR(16),
last_column                VARCHAR(1))AUTO_INCREMENT=1";

if (!mysqli_query($conn, $query)) {
    die('Error: ' . mysqli_error($conn));
}
//To check new columns added into table or not 
include 'ommptbauprdwrfl.php';
//
// ======================================================================================================= //
// START CODE TO ADD CONDITION FOR INSERTING ENTRY ONLY IF ENTRY IS NOT PRESENT @AUTHOR:MADHUREE-11NOV2020 //
// ======================================================================================================= //
//
$qUdharNoticeSetupDetails = "SELECT * FROM udhaar_notice_setup WHERE uns_def_lang = 'English'";
$resUdharNoticeSetupDetails = mysqli_query($conn, $qUdharNoticeSetupDetails) or die(mysqli_error($conn));
$totalUdharNoticeSetupDetails = mysqli_num_rows($resUdharNoticeSetupDetails);
if ($totalUdharNoticeSetupDetails <= 0) {
//Start Code to Setup table for ENG Lang
    $defLang = 'English';
    $lang = 'English';
    $headerLabel = 'UNSECURED LOAN NOTICE';
    $dateLabel = 'DATE:';
    $subjectHead = 'SUBJECT:';
    $subjectLabel = 'FINAL LETTER FOR UDHAAR NOTICE';
    $udhaarNoticeContent = '&NewLine;&Tab;This is to inform you with great regret that you did not respond to any of our earlier notices and have not deposited the amount of Rs. LOAN_AMOUNT/- till date. We had given you more than required time to deposit the amount but now in case of deposition failure of the amount by 07FINAL_LOAN_DATE, a legal action would be taken in this regard.&NewLine;&Tab;We hope that you would not force us to take such strict actions and deposit the remaining amount very soon and thus help to maintain the cordial relationship.';
    $details = 'UDHAAR DETAILS:';
    $principalAmountLabel = 'CUSTOMER ADDRESS:';
    $udhaarDateLabel = 'UDHAAR DATE: ';
    $interestLabel = 'INTEREST:';
    $totalAmountLabel = 'TOTAL AMOUNT:';
    $udhaarOtherInfo = '';
    $tNCLabel = 'TERMAS AND CONDITIONS:';
    $tNC = '';
    $custSign = 'CUSTOMER SIGNATURE:';
    $ownerSign = 'OENER SIGNATURE:';
    $footerLabel = 'FOOTER:';

// Start To protect MySQL injection
    $defLang = stripslashes($defLang);
    $lang = stripslashes($lang);
    $headerLabel = stripslashes($headerLabel);
    $dateLabel = stripslashes($dateLabel);
    $subjectHead = stripslashes($subjectHead);
    $subjectLabel = stripslashes($subjectLabel);
    $udhaarNoticeContent = stripslashes($udhaarNoticeContent);
    $details = stripslashes($details);
    $principalAmountLabel = stripslashes($principalAmountLabel);
    $udhaarDateLabel = stripslashes($udhaarDateLabel);
    $interestLabel = stripslashes($interestLabel);
    $totalAmountLabel = stripslashes($totalAmountLabel);
    $udhaarOtherInfo = stripslashes($udhaarOtherInfo);
    $tNCLabel = stripslashes($tNCLabel);
    $tNC = stripslashes($tNC);
    $custSign = stripslashes($custSign);
    $ownerSign = stripslashes($ownerSign);
    $footerLabel = stripslashes($footerLabel);

    $defLang = mysqli_real_escape_string($conn, $defLang);
    $lang = mysqli_real_escape_string($conn, $lang);
    $headerLabel = mysqli_real_escape_string($conn, $headerLabel);
    $dateLabel = mysqli_real_escape_string($conn, $dateLabel);
    $subjectHead = mysqli_real_escape_string($conn, $subjectHead);
    $subjectLabel = mysqli_real_escape_string($conn, $subjectLabel);
    $udhaarNoticeContent = mysqli_real_escape_string($conn, $udhaarNoticeContent);
    $details = mysqli_real_escape_string($conn, $details);
    $principalAmountLabel = mysqli_real_escape_string($conn, $principalAmountLabel);
    $udhaarDateLabel = mysqli_real_escape_string($conn, $udhaarDateLabel);
    $interestLabel = mysqli_real_escape_string($conn, $interestLabel);
    $totalAmountLabel = mysqli_real_escape_string($conn, $totalAmountLabel);
    $udhaarOtherInfo = mysqli_real_escape_string($conn, $udhaarOtherInfo);
    $tNCLabel = mysqli_real_escape_string($conn, $tNCLabel);
    $tNC = mysqli_real_escape_string($conn, $tNC);
    $custSign = mysqli_real_escape_string($conn, $custSign);
    $ownerSign = mysqli_real_escape_string($conn, $ownerSign);
    $footerLabel = mysqli_real_escape_string($conn, $footerLabel);
// End To protect MySQL injection

    $qInsertUdhaarNotice = "insert into udhaar_notice_setup(
    uns_own_id,uns_def_lang,uns_lang,uns_header_width,uns_header_display,uns_border_check,uns_firm_left_logo_check,uns_firm_right_logo_check,
uns_header,uns_header_font,uns_header_color,uns_header_check,
uns_firm_header_font,uns_firm_header_color,uns_firm_header_check,
uns_firm_name_font,uns_firm_name_color,uns_firm_name_check,
uns_firm_desc_font,uns_firm_desc_color,uns_firm_desc_check,
uns_firm_address_font,uns_firm_address_color,uns_firm_address_check,
uns_firm_phone_font,uns_firm_phone_color,uns_firm_phone_check,
uns_firm_email_font,uns_firm_email_color,uns_firm_email_check,
uns_reg_no_label,uns_reg_no_font,uns_reg_no_color,uns_reg_no_check,
uns_date_lbl,uns_date_font,uns_date_color,uns_sub_lbl,uns_sub_font,uns_sub_color,uns_sub_check,
uns_notice_cont,uns_notice_font,uns_notice_color,uns_notice_check,
uns_udhaar_date_lbl,uns_udhaar_date_font,uns_udhaar_date_color,uns_udhaar_date_check,
uns_other_info,uns_other_info_font,uns_other_info_color,uns_other_info_check,
uns_tnc_lbl,uns_tnc,uns_tnc_font,uns_tnc_color,uns_tnc_content_font,uns_tnc_content_color,uns_tnc_check,
uns_cust_sign_lbl,uns_cust_sign_font,uns_cust_sign_color,
uns_owner_sign_lbl,uns_owner_sign_font,uns_owner_sign_color,
uns_footer,uns_footer_font,uns_footer_color,uns_footer_check,
uns_form_size,uns_default_size,uns_form_width) 
    values (
    '$ownerId','$defLang','$lang','25','display','on','on','on',
        '$headerLabel','18','black','',
        '20','black','on',
        '16','black','on',
        '16','black','on',
        '12','black','on',
        '12','black','on',
        '12','black','on',
        '$regNoLabel','12','black','',
        '$dateLabel','12','black','$subjectLabel','12','black','on',"
            . "'$udhaarNoticeContent','12','black','on',"
            . "'$udhaarDateLabel','12','black','on',
        '$udhaarOtherInfo','12','black','on',"
            . "'$tNCLabel','$tNC','12','black','12','black','on',"
            . "'$custSign','12','black',"
            . "'$ownerSign','12','black',"
            . "'$footerLabel','12','black','',"
            . "'udhaarNoticeLayA5','udhaarNoticeLayA5','135')";
    if (!mysqli_query($conn, $qInsertUdhaarNotice)) {
        die('Error: ' . mysqli_error($conn));
    }
    $qInsertUdhaarNotice = "insert into udhaar_notice_setup
    (uns_own_id,uns_def_lang,uns_lang,uns_default_size) 
    values ('$ownerId','Hindi','Hindi','udhaarNoticeLayA5'),
        ('$ownerId','Marathi','Marathi','udhaarNoticeLayA5')";

    if (!mysqli_query($conn, $qInsertUdhaarNotice)) {
        die('Error: ' . mysqli_error($conn));
    }
}
//
// ===================================================================================================== //
// END CODE TO ADD CONDITION FOR INSERTING ENTRY ONLY IF ENTRY IS NOT PRESENT @AUTHOR:MADHUREE-11NOV2020 //
// ===================================================================================================== //
//
//End Code to Setup table for ENG Lang
////Start Code to Setup table for HIN Lang
//$defLang = 'Hindi';
//$lang = 'Hindi';
//$headerLabel = 'उधार नोटीस';
//$dateLabel = 'दिनांक:';
//$subjectHead = 'विषय:';
//$subjectLabel = 'तकादे का अंतिम पत्र';
//$udhaarNoticeContent = '&NewLine;प्रिय मोह्दय,&NewLine;नमस्कार,&NewLine;&Tab;हमे अत्‍यंत खेद के साथ कहना पड़ रहा है की आपने हमारे पिछले पत्रो की ओर बिल्कुल भी ध्यान नही दिया, तथा रु LOAN_AMOUNT/- का भुगतान अभी तक नही किया है| हम ने आपको आवश्यक्ता से अधिक समय दिया था तथा अब हम दिनांक 07FINAL_LOAN_DATE के उपरांत प्रतीक्षा नही कर सकते यदि आपने उस समय तक भुगतान नही किया तो हमे विवश होकर एक पक्षिय कार्यवाही करनी पड़ेगी |&NewLine;&Tab;हमे आशा ही नही अपितु पूर्ण विश्वास है की आप हमे ऐसा करने के लिए बाध्य नही करेंगे तथा शेष धनराशि का भुगतान तुरंत करके आपसी संबंध पुर्नव्रत बनाए रखेंगे |';
//$details = 'उधार विवरण';
//$principalAmountLabel = 'धनराशि:';
//$udhaarDateLabel = 'दिनांक: ';
//$interestLabel = 'ब्याज:';
//$totalAmountLabel = 'कुल धनराशि:';
//$udhaarOtherInfo = '';
//$tNCLabel = 'नियम व शर्ते:';
//$tNC = '';
//$custSign = 'ग्राहक के हस्ताक्षर:';
//$ownerSign = 'मालिक/दूकानदार के हस्ताक्षर:';
//$footerLabel = 'Footer:';
//
//// Start To protect MySQL injection
//$defLang = stripslashes($defLang);
//$lang = stripslashes($lang);
//$headerLabel = stripslashes($headerLabel);
//$dateLabel = stripslashes($dateLabel);
//$subjectHead = stripslashes($subjectHead);
//$subjectLabel = stripslashes($subjectLabel);
//$udhaarNoticeContent = stripslashes($udhaarNoticeContent);
//$details = stripslashes($details);
//$principalAmountLabel = stripslashes($principalAmountLabel);
//$udhaarDateLabel = stripslashes($udhaarDateLabel);
//$interestLabel = stripslashes($interestLabel);
//$totalAmountLabel = stripslashes($totalAmountLabel);
//$udhaarOtherInfo = stripslashes($udhaarOtherInfo);
//$tNCLabel = stripslashes($tNCLabel);
//$tNC = stripslashes($tNC);
//$custSign = stripslashes($custSign);
//$ownerSign = stripslashes($ownerSign);
//$footerLabel = stripslashes($footerLabel);
//
//$defLang = mysqli_real_escape_string($conn,$defLang);
//$lang = mysqli_real_escape_string($conn,$lang);
//$headerLabel = mysqli_real_escape_string($conn,$headerLabel);
//$dateLabel = mysqli_real_escape_string($conn,$dateLabel);
//$subjectHead = mysqli_real_escape_string($conn,$subjectHead);
//$subjectLabel = mysqli_real_escape_string($conn,$subjectLabel);
//$udhaarNoticeContent = mysqli_real_escape_string($conn,$udhaarNoticeContent);
//$details = mysqli_real_escape_string($conn,$details);
//$principalAmountLabel = mysqli_real_escape_string($conn,$principalAmountLabel);
//$udhaarDateLabel = mysqli_real_escape_string($conn,$udhaarDateLabel);
//$interestLabel = mysqli_real_escape_string($conn,$interestLabel);
//$totalAmountLabel = mysqli_real_escape_string($conn,$totalAmountLabel);
//$udhaarOtherInfo = mysqli_real_escape_string($conn,$udhaarOtherInfo);
//$tNCLabel = mysqli_real_escape_string($conn,$tNCLabel);
//$tNC = mysqli_real_escape_string($conn,$tNC);
//$custSign = mysqli_real_escape_string($conn,$custSign);
//$ownerSign = mysqli_real_escape_string($conn,$ownerSign);
//$footerLabel = mysqli_real_escape_string($conn,$footerLabel);
//// End To protect MySQL injection
//
//$qInsertUdhaarNotice = "insert into udhaar_notice_setup(uns_own_id,uns_def_lang,uns_lang,uns_header,uns_date_lbl,uns_sub_head,uns_sub_lbl,
//    uns_notice_cont,uns_details,uns_principal_lbl,uns_udhaar_date_lbl,uns_interest_lbl,uns_total_amt_lbl,uns_other_info,uns_tnc_lbl,uns_tnc,uns_cust_sign_lbl,
//    uns_owner_sign_lbl,uns_footer) 
//    values ('$ownerId','$defLang','$lang','$headerLabel','$dateLabel','$subjectHead','$subjectLabel','$udhaarNoticeContent','$details','$principalAmountLabel',
//            '$udhaarDateLabel','$interestLabel','$totalAmountLabel','$udhaarOtherInfo','$tNCLabel','$tNC','$custSign','$ownerSign','$footerLabel')";
//
//
//if (!mysqli_query($conn,$qInsertUdhaarNotice)) {
//    die('Error: ' . mysqli_error($conn));
//}
//
////End Code to Setup table for HIN Lang
////Start Code to Setup table for MARATHI Lang by @Author: KHUSH21JAN13
//// Modified by KHUSH22JAN13
//
//$defLang = 'Marathi';
//$lang = 'Marathi';
//$headerLabel = 'कर्ज नोटीस';
//$dateLabel = 'दिनांक:';
//$subjectHead = 'विषय:';
//$subjectLabel = 'सूचना पत्रक';
//$udhaarNoticeContent = '&NewLine;प्रिय महोद्य,&NewLine;नमस्कार,&NewLine;&Tab;आम्हाला  लिहिताना फार वाईट वाटत आहे की, तुम्ही आमच्या मागच्या पत्रकडे अजिबात लक्ष्या दिले नाही व रु LOAN_AMOUNT/- च अजुन भरणा केला नही. आम्ही तुम्हाला भरणा करण्यासाठी खूप वेळ दिला पण आम्ही आता 07FINAL_LOAN_DATE दिनांक पेक्षा जास्त वाट पाहु शकत नही. जर आपण लवकर भरणा नही केला तर आम्हाला एकपक्षी कार्यवाही करावी लागेल.&NewLine;&Tab;आम्हाला अशा नाही पण पूर्णा विश्वास आहे की तुम्ही आम्हाला कारवाई करण्यास भाग नही पडणार व लवकरात लवकर भरणा करून आपले संबंध नि ठेवण्यात मदत कराल.';
//$details = 'कर्ज विवरण';
//$principalAmountLabel = 'धनराशि:';
//$udhaarDateLabel = 'दिनांक: ';
//$interestLabel = 'ब्याज:';
//$totalAmountLabel = 'कुल धनराशि:';
//$udhaarOtherInfo = '';
//$tNCLabel = 'नियम आणि शर्ते:';
//$tNC = '';
//$custSign = 'ग्राहकाची सही /अंगठा:';
//$ownerSign = 'दुकानदार सही:';
//$footerLabel = 'Footer:';
//
//// Start To protect MySQL injection
//$defLang = stripslashes($defLang);
//$lang = stripslashes($lang);
//$headerLabel = stripslashes($headerLabel);
//$dateLabel = stripslashes($dateLabel);
//$subjectHead = stripslashes($subjectHead);
//$subjectLabel = stripslashes($subjectLabel);
//$udhaarNoticeContent = stripslashes($udhaarNoticeContent);
//$details = stripslashes($details);
//$principalAmountLabel = stripslashes($principalAmountLabel);
//$udhaarDateLabel = stripslashes($udhaarDateLabel);
//$interestLabel = stripslashes($interestLabel);
//$totalAmountLabel = stripslashes($totalAmountLabel);
//$udhaarOtherInfo = stripslashes($udhaarOtherInfo);
//$tNCLabel = stripslashes($tNCLabel);
//$tNC = stripslashes($tNC);
//$custSign = stripslashes($custSign);
//$ownerSign = stripslashes($ownerSign);
//$footerLabel = stripslashes($footerLabel);
//
//$defLang = mysqli_real_escape_string($conn,$defLang);
//$lang = mysqli_real_escape_string($conn,$lang);
//$headerLabel = mysqli_real_escape_string($conn,$headerLabel);
//$dateLabel = mysqli_real_escape_string($conn,$dateLabel);
//$subjectHead = mysqli_real_escape_string($conn,$subjectHead);
//$subjectLabel = mysqli_real_escape_string($conn,$subjectLabel);
//$udhaarNoticeContent = mysqli_real_escape_string($conn,$udhaarNoticeContent);
//$details = mysqli_real_escape_string($conn,$details);
//$principalAmountLabel = mysqli_real_escape_string($conn,$principalAmountLabel);
//$udhaarDateLabel = mysqli_real_escape_string($conn,$udhaarDateLabel);
//$interestLabel = mysqli_real_escape_string($conn,$interestLabel);
//$totalAmountLabel = mysqli_real_escape_string($conn,$totalAmountLabel);
//$udhaarOtherInfo = mysqli_real_escape_string($conn,$udhaarOtherInfo);
//$tNCLabel = mysqli_real_escape_string($conn,$tNCLabel);
//$tNC = mysqli_real_escape_string($conn,$tNC);
//$custSign = mysqli_real_escape_string($conn,$custSign);
//$ownerSign = mysqli_real_escape_string($conn,$ownerSign);
//$footerLabel = mysqli_real_escape_string($conn,$footerLabel);
//// End To protect MySQL injection
//
//$qInsertUdhaarNotice = "insert into udhaar_notice_setup(uns_own_id,uns_def_lang,uns_lang,uns_header,uns_date_lbl,uns_sub_head,uns_sub_lbl,
//    uns_notice_cont,uns_details,uns_principal_lbl,uns_udhaar_date_lbl,uns_interest_lbl,uns_total_amt_lbl,uns_other_info,uns_tnc_lbl,uns_tnc,uns_cust_sign_lbl,
//    uns_owner_sign_lbl,uns_footer) 
//    values ('$ownerId','$defLang','$lang','$headerLabel','$dateLabel','$subjectHead','$subjectLabel','$udhaarNoticeContent','$details','$principalAmountLabel',
//            '$udhaarDateLabel','$interestLabel','$totalAmountLabel','$udhaarOtherInfo','$tNCLabel','$tNC','$custSign','$ownerSign','$footerLabel')";
//
//
//if (!mysqli_query($conn,$qInsertUdhaarNotice)) {
//    die('Error: ' . mysqli_error($conn));
//}
//End Code to Setup table for MARATHI Lang by @Author: KHUSH21JAN13
?>