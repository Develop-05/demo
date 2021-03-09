<?php 

    $email = $_POST['email'];
    $version = $_POST['version'];
    $system = $_POST['system'];
    $subject = $_POST['subject'];
    $textarea = $_POST['textarea'];
    $file = $_POST['file'];


    $email = htmlspecialchars('email');
    $version = htmlspecialchars('version');
    $system = htmlspecialchars('system');
    $subject = htmlspecialchars('subject');
    $textarea = htmlspecialchars('textarea');
    $file = htmlspecialchars('file');

    $email = urldecode('email');
    $version = urldecode('version');
    $system = urldecode('system');
    $subject = urldecode('subject');
    $textarea = urldecode('textarea');
    $file = urldecode('file');

    $email = trim('email');
    $version = trim('version');
    $system = trim('system');
    $subject = trim('subject');
    $textarea = trim('textarea');
    $file = trim('file');


    // send data!!!

    if(mail ("happyppb@gmail.com",
        "New email from site !",
        "email:".$email."\n".
        "version:".$version."\n".
        "system:".$system."\n".
        "subject:".$subject."\n".
        "textarea:".$textarea."\n".
        "file:".$file."\n",
        "From: user@gmail.com \r\n") 
    ) {
        echo ("Letter successfully send !");
    } 
    
    else {
        echo('Are error! Check data...');
    }


    $language = $_POST['language'];
    $type = $_POST['type'];
    $textarea2 = $_POST['textarea2'];

    $option1 = $_POST['option1'];
    $answer1 = $_POST['answer1'];

    $option2 = $_POST['option2'];
    $answer2 = $_POST['answer2'];

    $option3 = $_POST['option3'];
    $answer3 = $_POST['answer3'];

    $option4 = $_POST['option4'];
    $answer4 = $_POST['answer4'];

    $option5 = $_POST['option5'];
    $answer5 = $_POST['answer5'];

    $option6 = $_POST['option6'];
    $answer6 = $_POST['answer6'];

    $option7 = $_POST['option7'];
    $answer7 = $_POST['answer7'];

    $option8 = $_POST['option8'];
    $answer8 = $_POST['answer8'];

    $option9 = $_POST['option9'];
    $answer9 = $_POST['answer9'];

    $option10 = $_POST['option10'];
    $answer10 = $_POST['answer10'];


    $typePlay = $_POST['typePlay'];

    $name = $_POST['name'];
    $email = $_POST['email'];



    $language = htmlspecialchars('language');
    $type = htmlspecialchars('type');
    $textarea2 = htmlspecialchars('textarea2');

    $option1 = htmlspecialchars('option1');
    $answer1 = htmlspecialchars('answer1');

    $option2 = htmlspecialchars('option2');
    $answer2 = htmlspecialchars('answer2');

    $option3 = htmlspecialchars('option3');
    $answer3 = htmlspecialchars('answer3');

    $option4 = htmlspecialchars('option4');
    $answer4 = htmlspecialchars('answer4');

    $option5 = htmlspecialchars('option5');
    $answer5 = htmlspecialchars('answer5');

    $option6 = htmlspecialchars('option6');
    $answer6 = htmlspecialchars('answer6');

    $option7 = htmlspecialchars('option7');
    $answer7 = htmlspecialchars('answer7');

    $option8 = htmlspecialchars('option8');
    $answer8 = htmlspecialchars('answer8');

    $option9 = htmlspecialchars('option9');
    $answer9 = htmlspecialchars('answer9');

    $option10 = htmlspecialchars('option10');
    $answer10 = htmlspecialchars('answer10');
    

    $typePlay = htmlspecialchars('typePlay');

    $name = htmlspecialchars('name');
    $email = htmlspecialchars('email');





    $language = urldecode('language');
    $type = urldecode('type');
    $textarea2 = urldecode('textarea2');

    $option1 = urldecode('option1');
    $answer1 = urldecode('answer1');

    $option2 = urldecode('option2');
    $answer2 = urldecode('answer2');

    $option3 = urldecode('option3');
    $answer3 = urldecode('answer3');

    $option4 = urldecode('option4');
    $answer4 = urldecode('answer4');

    $option5 = urldecode('option5');
    $answer5 = urldecode('answer5');

    $option6 = urldecode('option6');
    $answer6 = urldecode('answer6');

    $option7 = urldecode('option7');
    $answer7 = urldecode('answer7');

    $option8 = urldecode('option8');
    $answer8 = urldecode('answer8');

    $option9 = urldecode('option9');
    $answer9 = urldecode('answer9');

    $option10 = urldecode('option10');
    $answer10 = urldecode('answer10');
    

    $typePlay = urldecode('typePlay');

    $name = urldecode('name');
    $email = urldecode('email');






    $language = trim('language');
    $type = trim('type');
    $textarea2 = trim('textarea2');

    $option1 = trim('option1');
    $answer1 = trim('answer1');

    $option2 = trim('option2');
    $answer2 = trim('answer2');

    $option3 = trim('option3');
    $answer3 = trim('answer3');

    $option4 = trim('option4');
    $answer4 = trim('answer4');

    $option5 = trim('option5');
    $answer5 = trim('answer5');

    $option6 = trim('option6');
    $answer6 = trim('answer6');

    $option7 = trim('option7');
    $answer7 = trim('answer7');

    $option8 = trim('option8');
    $answer8 = trim('answer8');

    $option9 = trim('option9');
    $answer9 = trim('answer9');

    $option10 = trim('option10');
    $answer10 = trim('answer10');
    

    $typePlay = trim('typePlay');

    $name = trim('name');
    $email = trim('email');


    if(mail ("happyppb@gmail.com",
    "New email from site !",
    "language:".$language."\n".
    "type:".$type."\n".
    "textarea2:".$textarea2."\n".

    "option1:".$option1."\n".
    "answer1:".$answer1."\n".

    "option2:".$option2."\n".
    "answer2:".$answer2."\n".

    "option3:".$option3."\n".
    "answer3:".$answer3."\n".

    "option4:".$option4."\n".
    "answer4:".$answer4."\n".

    "option5:".$option5."\n".
    "answer5:".$answer5."\n".

    "option6:".$option6."\n".
    "answer6:".$answer6."\n".

    "option7:".$option7."\n".
    "answer7:".$answer7."\n".

    "option8:".$option8."\n".
    "answer8:".$answer8."\n".

    "option9:".$option9."\n".
    "answer9:".$answer9."\n".

    "option10:".$option10."\n".
    "answer10:".$answer10."\n".

    "typePlay:".$typePlay."\n".
    "name:".$name."\n".
    "email:".$email."\n",
    "From: user@gmail.com \r\n") 
) {
    echo ("Letter successfully send !");
} 

else {
    echo('Are error! Check data...');
}

?>