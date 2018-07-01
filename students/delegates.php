<?php
session_start();
if(!isset($_SESSION['student_id'])){
    header('Location: http://ovs-core.zaidimarvels.co.ke/', true, 301);
	exit();
}
// echo json_encode($_SESSION);
$user_name = $_SESSION['student_name'];
$user_email = $_SESSION['student_email'];
$password = $_SESSION['firebase_pass'];
$user_id = $_SESSION['student_id'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Online Voting System</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/delegates.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body>

    <div class="wrapper">
        <div class="sidebar" id="colorChanger" data-color="purple" data-image="assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="home.php" class="simple-text">
                        O.V.S Core
                    </a>
                </div>

                <ul class="nav">
                    <li>
                        <a href="home.php">
                            <i class="pe-7s-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="profile.php">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="delegates.php">
                            <i class="pe-7s-users"></i>
                            <p>Delegates</p>
                        </a>
                    </li>
                    <li class="">
                        <a href="candidates.php">
                            <i class="fa fa-lg fa-users"></i>
                            <p>Candidates</p>
                        </a>
                    </li>
                    <li>
                        <a href="vote-delegates.php">
                            <i class="pe-7s-box1"></i>
                            <p>Start Voting</p>
                        </a>
                    </li>
                    <li>
                        <a href="message-delegates.php">
                            <i class="pe-7s-mail-open-file"></i>
                            <p>Message Delegate</p>
                        </a>
                    </li>
                    <li>
                        <a href="preliminary-voting.php">
                            <i class="fa fa-calendar fa-lg"></i>
                            <p>Preliminary Voting</p>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="main-panel">
            <nav style="background-color:#101010" class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a style="color:white" class="navbar-brand" href="#">
                            <i class="pe-7s-study"></i>Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-info" data-toggle="dropdown">
                                    <p>
                                        Theme
                                        <b class="caret"></b>
                                    </p>

                                </a>
                                <ul class="dropdown-menu" style=" background:#101010; min-width:150px; max-width:150px; display:flex; flex-direction:column;">
                                    <li style="flex:1; margin-bottom: -10px;" class="btn btn-sm btn-primary" onclick="javascript:changeColor('blue')">
                                        <p>
                                            <i class="pe-7s-drop"></i>
                                            Blue
                                        </p>
                                    </li>
                                    <li style="flex:1; margin-bottom: -10px;" class="btn btn-sm btn-success" onclick="javascript:changeColor('green')">
                                        <p>
                                            <i class="pe-7s-drop"></i>
                                            Green
                                        </p>
                                    </li>
                                    <li style="flex:1; margin-bottom: -10px;" class="btn btn-sm btn-info" onclick="javascript:changeColor('azure')">
                                        <p>
                                            <i class="pe-7s-drop"></i>
                                            Azure
                                        </p>
                                    </li>
                                    <li style="flex:1; margin-bottom: -10px;" class="btn btn-sm btn-warning" onclick="javascript:changeColor('orange')">
                                        <p>
                                            <i class="pe-7s-drop"></i>
                                            Orange
                                        </p>
                                    </li>
                                    <li style="flex:1;" class="btn btn-sm btn-danger" onclick="javascript:changeColor('red')">
                                        <p>
                                            <i class="pe-7s-drop"></i>
                                            Red
                                        </p>
                                    </li>

                                </ul>
                            </li>

                            <li>
                                <button class="btn btn-danger"  onclick="javascript:logoutUser()">
                                    <p>
                                        <i class="pe-7s-power"></i>Log out</p>
                                </button>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div style="background: url('assets/img/main_background.jpg');background-size:cover;" class="content">

            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="home.php">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="http://ovs-core.zaidimarvels.co.ke.co.ke/">
                                    Online Voting System
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        Powered by &copy;
                        <a href="http://ovs-core.zaidimarvels.co.ke.co.ke">ZaidiMarvels</a>
                        <script>document.write(new Date().getFullYear())</script>, Elegant Web Solutions
                    </p>
                </div>
            </footer>

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  logout script   -->
<script src="assets/js/logout.js"></script>
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/ovs.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.10.0/firebase.js"></script>

<script type="text/javascript">
// Initialize Firebase
var databaseConfig = {
apiKey: "AIzaSyDf6TwRt1WQf6TdJaBjRT69b9xseZmoFJg",
authDomain: "onlinevotersys.firebaseapp.com",
databaseURL: "https://onlinevotersys.firebaseio.com",
projectId: "onlinevotersys",
storageBucket: "onlinevotersys.appspot.com",
messagingSenderId: "473955500102"
}
var firebaseRef = firebase.initializeApp(databaseConfig)
var databaseRef = firebaseRef.database()

    $(document).ready(function () {
      sendNoteSuccess('top','left','info','Fetching the delegates. Be Patient',2000)
      databaseRef.ref('delegate_students/').once('value',(snapshot)=>{
          if(snapshot){
            var delegatesObj = snapshot.val()
            var all_delegates_html = []
            Object.keys(delegatesObj).forEach((delegate_key)=>{
              var currentDel = delegatesObj[delegate_key]
              console.log(delegate_key);
              var delegatElem = '<div class="container" style="margin-top: -10px; margin-bottom: 10px; width:100%">'+
                                  '<div class="row panel">'+
                                      '<div class="col-md-4 bg_blur" style="background-image:url('+currentDel.profile_photo+')" ></div>'+
                                      '<div class="col-md-8  col-xs-12">'+
                                          '<div class="header">'+
                                              '<h3>'+currentDel.full_name+'</h3>'+
                                              '<h4>Aspiring Delegate</h4>'+
                                              '<small><strong>Skills: </strong>'+currentDel.delegate_skills+'</small>'+
                                              '<div class="info">'+currentDel.about_delegate+'</div>'+
                                          '</div>'+
                                      '</div>'+
                                  '</div>'+
                                  '<div class="row nav">'+
                                      '<div class="col-md-4"></div>'+
                                      '<div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">'+
                                          '<div class=" col-md-4 col-xs-4 well" onclick="javascript:vote()">'+
                                              'Vote'+
                                              '<i class="fa fa-archive fa-lg"></i>'+
                                          '</div>'+
                                          '<div class=" col-md-4 col-xs-4 well" onclick="javascript:message()">'+
                                              'Message'+
                                              '<i class="fa fa-envelope fa-lg"></i>'+
                                          '</div>'+
                                          '<div class=" col-md-4 col-xs-4 well" onclick="javascript:like('+delegate_key+')">'+
                                          '<input type="text" value="'+delegate_key+'" hidden="true" id="'+delegate_key+'" />'+
                                              'Like'+
                                              '<i class="fa fa-thumbs-o-up fa-lg"></i>'+
                                          '</div>'+
                                      '</div>'+
                                  '</div>'+
                              '</div>'
                    $('.content').append(delegatElem)
            })
          }else{
            sendNoteError('top','right','danger','There are no matching details in Firebase',4000)
          }
      }).catch((err)=>{
          sendNoteError('top','right','danger','Firebase Error: '+err.message,5000)
      })
    })
    function vote(){
      window.location.href = 'http://ovs-core.zaidimarvels.co.ke/students/vote-delegates.php'
    }
    function message(){
      window.location.href = 'http://ovs-core.zaidimarvels.co.ke/students/message-delegates.php'
    }
    function like(id_val){
      var key = $(id_val).attr('value')
      console.log(key);
      var likesPath = 'delegate_students/'+key.toString()+'/likes/'
      var delegatePath = 'delegate_students/'+key.toString()+'/'
      databaseRef.ref(likesPath).once('value',(snap)=>{
          var likesObj = snap.val()
          if(likesObj){
            var currentLikes = likesObj.counter
            databaseRef.ref(likesPath).update({
              counter: currentLikes+1,
            }).then(()=>{
              sendNoteSuccess('top','left','success','Thanks for liking: ',1000)
            }).catch((err)=>{
              sendNoteError('top','right','danger','Firebase liking Error: '+err.message,5000)
            })
          }else{
            databaseRef.ref(delegatePath).update({
              likes:{
                counter:1
              }
            }).then(()=>{
              sendNoteSuccess('top','left','success','Thanks for liking: ',5000)
            }).catch((err)=>{
              sendNoteError('top','right','danger','Firebase liking Error: '+err.message,5000)
            })
          }
      }).catch((err)=>{
          sendNoteError('top','right','danger','Firebase likes Error: '+err.message,5000)
      })
    }
    var changeColor = (color) => {
        var elem = document.getElementById('colorChanger')
        elem.setAttribute('data-color', color)
    }
</script>

</html>
