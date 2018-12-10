<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="icon" href="../../../../favicon.ico">

    <title>Miller Promotions</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset("css/signin.css") }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/dashboard.css") }}"> 
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
    </script>
  </head>
  <body>

    <nav class="navbar">
        <div class="container">
                <a class="" style="margin-left: auto; margin-right: auto;" href="#">
                <img style="background-color: none;" src="{{ asset("images/millerpromotions.logo.png") }}" style="    height: 280px;">
                </a>
        </div>
    </nav>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="list-style: none;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif    
            <div class="wrapper">
                    <div class="container">
                    <form method="POST" action="{{ url('create_account') }}" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control rad" name="username" placeholder="Username">
                            </div>
                            <div class="col">
                            <input type="password" class="form-control rad" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="row" style="    padding-top: 25px;">
                            <div class="col">
                                <input type="text" class="form-control rad" name="firstname" placeholder="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control rad" name="lastname" placeholder="Last name">
                            </div>
                        </div>
                    
                        <div class="row" style="    padding-top: 25px;">
                            <div class="col">
                            <input type="text" class="form-control rad" name="companyname" placeholder="Company/Business Name">
                            </div>
                        </div>
                        <div class="row" style="    padding-top: 25px;">
                            <div class="col">
                            <input type="text" class="form-control rad" name="vendorname" placeholder="Vendor Name">
                            </div>
                        </div>
            
                        <div class="row" style="    padding-top: 25px;">
                            <div class="col">
                            <select name="title">
                                <option value="" disabled selected>Job Title</option>  
                                <option value="Owner">Owner</option>
                                <option value="Representative">Representative</option>
                                <option value="Reseller">Reseller</option>
                                <option value="Employee">Employee</option>
                            </select>
                            </div>
                            <div class="col">
                            <select name="companyindustry">
                                <option value="" disabled selected>Industry</option>  
                                <option value="Industrial">Industrial</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Cosmetics">Cosmetics</option>
                                <option value="Handmade">Handmade Products</option>
                                <option value="Hobby">Hobby</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Automotive">Automotive</option>
                            </select>
                            </div>
                        </div>
            
                        <div class="row" style="padding-top: 25px;">
                            <div class="col">
                                <select name="productspect">
                                    <option value="" disabled selected>Products/Services Specialty</option>  
                                    <option value="Commercial Products">Commercial Products</option>
                                    <option value="Commercial Services">Commercial Services</option>
                                    <option value="Music/Band">Music/Band</option>
                                    <option value="Handmade products">Handmade products</option>
                                    <option value="Import">Import</option>
                                    <option value="Direct Re-selling">Direct Re-selling</option>
                                </select>
                            </div>
                        </div>
            
                        <div class="row" style="    padding-top: 25px;">
                            <div class="col">
                                <input type="text" name="addressone" class="form-control rad" placeholder="Street Address">
                            </div>
                        </div>
            
                        <div class="row" style="    padding-top: 25px;">
                            <div class="col">
                            <input type="text" name="city" class="form-control rad" placeholder="City">
                            </div>
                            <div class="col">
                            <input type="text" name="zip" class="form-control rad" placeholder="ZIP">
                            </div>
                        </div>
            
                        <div class="row" style="    padding-top: 25px;">
                            <div class="col">
                            <input type="text" name="phone" class="form-control rad" placeholder="Phone">
                            </div>
                            <div class="col">
                            <input type="text" name="fax" class="form-control rad" placeholder="FAX">
                            </div>
                        </div>
            
                        <div class="row" style="    padding-top: 25px;">
                            <div class="col">
                                <input type="email" class="form-control rad" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="row" style="    padding-top: 25px;">
                            <div class="col">
                                <input type="file" class="form-control rad" name="companylogo" style="width: 50%;">
                            </div>
                        </div>
                        <div class="row" style="    padding-top: 25px;">
                            <div class="col">
                                <button class="btn" type="submit">
                                    SAVE
                                </button>
                            </div>
                        </div>
            
                        </form>
                    </div>
                </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    </body>
</html>

