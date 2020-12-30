<?php
include("DB.php");
if (isset($_REQUEST['name'])) {

    $name = $_REQUEST['name'];

    $city = '';
    $country = '';
    $Interest = '';
    $email = '';
    $pass = '';
    $PrimarySchool = '';
    $skill = '';
    $SecondarySchool = '';
    $University = '';
    $error = '';



    function clean($string)
    {
        $string = trim($string);
        $string = stripcslashes($string);
        $string = htmlspecialchars($string);
        $string = strip_tags($string);
        return $string;
    }
    if (isset($_POST['enter'])) {
        if (empty($_POST['Cit'])) {
            $error .= '<p class="smile"> please enter your name </p>';
        } else {
            $city = clean($_POST['Cit']);
            if (!preg_match('/^[A-Za-z]*$/', $city)) {
                $error .= " please enter the correct text";
            }
        }

        if (empty($_POST['Cou'])) {
            $error .= '<p class="smile"> please enter your address</p>';
        } else {
            $country = clean($_POST['Cou']);
            if (!preg_match('/^[A-Za-z0-9]*$/', $country)) {
                $error .=  'please enter the correct text';
            }
        }

        if (empty($_POST['Interest'])) {
            $error .= '<p class="smile"> please enter your phoneNumber</p>';
        } else {
            $Interest = clean($_POST['Interest']);
            if (!preg_match('/^[A-Za-z0-9]*$/', $Interest)) {
                $error .= 'please enter the correct phoneNumber';
            }
        }

        if (empty($_POST['PrimarySchool'])) {
            $error .= '<p class="smile"> please enter your phoneNumber</p>';
        } else {
            $PrimarySchool = clean($_POST['PrimarySchool']);
            if (!preg_match('/^[A-Za-z0-9]*$/', $PrimarySchool)) {
                $error .= 'please enter the correct password';
            }
        }

        if (empty($_POST['skill'])) {
            $error .= '<p class="smile"> please enter your phoneNumber</p>';
        } else {
            $skill = clean($_POST['skill']);
            if (!preg_match('/^[A-Za-z0-9]*$/', $skill)) {
                $error .= 'please enter the correct password';
            }
        }



        if (empty($_POST['SecondarySchool'])) {
            $error .= "<p class='smile'> please enter your email</p>";
        } else {
            $SecondarySchool = clean($_POST['Secondary School']);
            if (!filter_var($SecondarySchool, FILTER_SANITIZE_STRING)) {
                $error .= "<p class='smile'> please enter your secondary school</p>";
            }
        }



        if (empty($_POST['University'])) {
            $error .= "<p class='smile'> please enter your email</p>";
        } else {
            $University = clean($_POST['University']);
            if (!filter_var($University, FILTER_SANITIZE_STRING)) {
                $error .= "<p class='smile'> please enter your email correctly</p>";
            }
        }





        header("location:profile.php?successful");





        $city = mysqli_real_escape_string($conn, $city);
        $city = filter_var($_POST['Cit'], FILTER_SANITIZE_STRING);
        $country = mysqli_real_escape_string($conn, $country);
        $country = filter_var($_POST['Cou'], FILTER_SANITIZE_STRING);
        $Interest = mysqli_real_escape_string($conn, $Interest);
        $Interest = filter_var($_POST['Interest'], FILTER_SANITIZE_STRING);
        $PrimarySchool = mysqli_real_escape_string($conn, $PrimarySchool);
        $PrimarySchool = filter_var($_POST['PrimarySchool'], FILTER_SANITIZE_STRING);
        $SecondarySchool = mysqli_real_escape_string($conn, $SecondarySchool);
        $SecondarySchool = filter_var($_POST['SecondarySchool'], FILTER_SANITIZE_STRING);
        $city = filter_var($_POST['Cit'], FILTER_SANITIZE_STRING);
        $University = mysqli_real_escape_string($conn, $University);
        $University = filter_var($_POST['University'], FILTER_SANITIZE_STRING);
        $skill = filter_var($_POST['skill'], FILTER_SANITIZE_STRING);
        $skill  = mysqli_real_escape_string($conn, $skill);



        $sql = "insert into  more(name, City, Country,  Interest, PrimarySchool, SecondarySchool, University, Skill)  values('$name', '$city', '$country', '$Interest', '$PrimarySchool', '$SecondarySchool', '$University', '$skill')";

        if (!mysqli_query($conn, $sql)) {
            printf("d% conn to sql", mysqli_affected_rows($conn));
            mysqli_close($conn);
        }
    }
} else {
    header("location:profile.php?click one the right button");
}
