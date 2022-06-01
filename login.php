
<html lang="en">
<head>
    
    <title>Login</title>
    <link rel = "stylesheet" type = "text/css" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> 
    <link rel = "stylesheet" type = "text/css" href = "style.css">

</head>
<body>
    <div class = "container">
        <a class = 'float-right' href="login.php"><span>E</span>እንጀራ</a>

        <!-- <h2 class = "description-header">EInjera</h2> -->
        <p style = "margin-top: 50px"><span>E</span>እንጀራ: የእንጀራ አከፋፋይ ኩባንያዎችን ለማግኘት የሚያገለግል መድረክ ነው። 
        በዚህ መድረክ ሬስቶራንቶች, ካፌዎች, የሰርግ እና የሌሎች ዝግጅት አዘጋጆች,ቤተሰቦች እና ሌሎች ደንበኞች 
        በከተማችን ስላሉት የተለያዩ የእንጀራ አከፋፋዮች ዝርዝር መረጃ ማግኘት ይችላሉ። ይህን ፕላትፎርም በመጠቀም ደንበኞች ለሚፈልጉት አገልግሎት የእንጅራ እከፋፋይ ድርጅቶችን ማግኘት, 
        ድርጅቱ ስለሚሰጠው አገልግሎት ማወቅ, አድራሻ ማግኘት እንዲሁም ደንበኞች ለድርጅቶች አስተያየት እና ጥያቄ ማቅረብ ይችላሉ።</p>
        
        <div class = "login-box">
        <div class = "row">

            <div class = "col-md-6 login-left">
                <h2 class = "sign-in">Login</h2> 
                <form action="validation.php" method = "post">
                    <div class = "form-group">
                        <label>Username</label>
                        <input type="text" name = "user" class = "form-control" required>
                    </div>

                    <div class = "form-group">
                        <label>Password</label>
                        <input type="password" name = "password" class = "form-control" required>
                    </div>
                    <button type = "submit" class = "btn btn-primary"> Login </button>
                </form> 
            </div>

            <div class = "col-md-6 login-right">
                <h2 class = "sign-up">Sign Up</h2> 
                <form action="registration.php" method = "post">

                    <div class = "form-group">
                        <label>Email</label>
                        <input type="email" name = "email" class = "form-control" required>
                    </div>

                    <div class = "form-group">
                        <label>Username</label>
                        <input type="text" name = "user" class = "form-control" required>
                    </div>

                    <div class = "form-group">
                        <label>Password</label>
                        <input type="password" name = "password" class = "form-control" required>
                    </div>
                    <button type = "submit" class = "btn btn-primary"> Sign Up </button>
                </form> 
            </div>

        </div>
        </div>

        
    </div>
</body>
</html>