<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        .form-container{
            background-color: #fff;
            font-family: 'Titillium Web', sans-serif;
            font-size: 0;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 25px -15px rgba(0, 0, 0, 0.3);
        }
        .form-container .title{
            color: #000;
            font-size: 25px;
            font-weight: 600;
            text-transform: capitalize;
            margin: 0 0 25px;
        }

        .form-container .sub-title{
            color: #333;
            font-size: 18px;
            font-weight: 600;
            text-align: center;
            text-transform: uppercase;
            margin: 0 0 20px;
        }
        .form-container .form-horizontal{ font-size: 0; }
        .form-container .form-horizontal .form-group{
            color: #333;
            width: 50%;
            padding: 0 8px;
            margin: 0 0 15px;
            display: inline-block;
        }
        .form-container .form-horizontal .form-group:nth-child(4){ margin-bottom: 30px; }
        .form-container .form-horizontal .form-group label{
            font-size: 17px;
            font-weight: 600;
        }
        .form-container .form-horizontal .form-control{
            color: #888;
            background: #fff;
            font-weight: 400;
            letter-spacing: 1px;
            height: 40px;
            padding: 6px 12px;
            border-radius: 10px;
            border: 2px solid #e7e7e7;
            box-shadow: none;
        }
        .form-container .form-horizontal .form-control:focus{ box-shadow: 0 0 5px #dcdcdc; }
        .form-container .form-horizontal .check-terms{
            padding: 0 8px;
            margin: 0 0 25px;
        }
        .form-container .form-horizontal .check-terms .check-label{
            color: #333;
            font-size: 14px;
            font-weight: 500;
            font-style: italic;
            vertical-align: top;
            display: inline-block;
        }
        .form-container .form-horizontal .check-terms .checkbox{
            height: 17px;
            width: 17px;
            min-height: auto;
            margin: 2px 8px 0 0;
            border: 2px solid #d9d9d9;
            border-radius: 2px;
            cursor: pointer;
            display: inline-block;
            position: relative;
            appearance: none;
            -moz-appearance: none;
            -webkit-appearance: none;
            transition: all 0.3s ease 0s;
        }
        .form-container .form-horizontal .check-terms .checkbox:before{
            content: '';
            height: 5px;
            width: 9px;
            border-bottom: 2px solid #00A9EF;
            border-left: 2px solid #00A9EF;
            transform: rotate(-45deg);
            position: absolute;
            left: 2px;
            top: 2.5px;
            transition: all 0.3s ease;
        }
        .form-container .form-horizontal .check-terms .checkbox:checked:before{ opacity: 1; }
        .form-container .form-horizontal .check-terms .checkbox:not(:checked):before{ opacity: 0; }
        .form-container .form-horizontal .check-terms .checkbox:focus{ outline: none; }
        .form-container .signin-link{
            color: #333;
            font-size: 14px;
            width: calc(100% - 190px);
            margin-right: 30px;
            display: inline-block;
            vertical-align: top;
        }
        .form-container .signin-link a{
            color: #00A9EF;
            font-weight: 600;
            transition: all 0.3s ease 0s;
        }
        .form-container .signin-link a:hover{ text-decoration: underline; }
        .form-container .form-horizontal .signup{
            color: #fff;
            background: #00A9EF;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            width: 160px;
            padding: 8px 15px 9px;
            border-radius: 10px;
            transition: all 0.3s ease 0s;
        }
        .form-container .form-horizontal .btn:hover,
        .form-container .form-horizontal .btn:focus{
            text-shadow: 0 0 5px rgba(0,0,0,0.5);
            box-shadow: 3px 3px rgba(0,0,0,0.15),5px 5px rgba(0,0,0,0.1);
            outline: none;
        }
        @media only screen and (max-width:479px){
            .form-container .form-horizontal .form-group{ width: 100%; }
            .form-container .signin-link{
                width: 100%;
                margin: 0 10px 15px;
            }
        }

    </style>



</head>
<body>

<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="form-container">
                    <h3 class="title">Register</h3><hr>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <label>Area</label>
                            <input type="Area" class="form-control" placeholder="Area">
                        </div>
                        <div class="form-group">
                            <label>Mandal</label>
                            <input type="mandal" class="form-control" placeholder="mandal">
                        </div>
                        <div class="form-group">
                            <label>District</label>
                            <input type="password" class="form-control" placeholder="District">
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input type="state" class="form-control" placeholder="State">
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <select class="form-control">
                                <option value="india">INDIA</option>
                                <option value="america">AMERICA</option>
                                <option value="chaina">CHAINA</option>
                                <option value="france">FRANCE</option>
                                <option value="africa">AFRICA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pincode</label>
                            <input type="pincode" class="form-control" placeholder="Pincode">
                        </div>
                        <div class="check-terms">
                            <input type="checkbox" class="checkbox">
                            <span class="check-label">I agree to the terms</span>
                        </div>
                        <span class="signin-link">Already have an account? Click here to <a href="login.php">Login</a></span>
                        <button class="btn signup" > <a href="home.php" style="color: white">SUBMIT </a> </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>