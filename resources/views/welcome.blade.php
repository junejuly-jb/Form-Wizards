<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/wizard.css')}}">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="row mrgn_top">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                                   data-hc="white"></i> Bootstrap Wizard 2
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removecard"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <form id="commentForm" method="get" action="#">
                                <div id="rootwizard">
                                    <ul class="nav nav-pills">
                                        <li class="nav_active nav-item">
                                            <a href="#tab1" data-toggle="tab" class="nav-link active">
                                                <span>
                                                    <span class="item_clr">Credentials</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab2" class="nav-link" data-toggle="tab">
                                                <span>
                                                    <span>Details</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab3" class="nav-link" data-toggle="tab">
                                                <span>
                                                    <span>Contact</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group">
                                                <label for="userName" class="control-label">User name *</label>
                                                <input id="userName" name="username" type="text"
                                                       placeholder="Enter user name" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="control-label">Email *</label>
                                                <input id="email" name="email" placeholder="Enter your Email"
                                                       type="text" class="form-control required email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="control-label">Password *</label>
                                                <input id="password" name="password" type="password"
                                                       placeholder="Enter your password" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="confirm" class="control-label">Confirm Password *</label>
                                                <input id="confirm" name="confirm" type="password"
                                                       placeholder="Confirm your password "
                                                       class="form-control required">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group">
                                                <label for="name" class="control-label">First name *</label>
                                                <input id="name" name="fname" placeholder="Enter your First name"
                                                       type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="surname" class="control-label">Last name *</label>
                                                <input id="surname" name="lname" type="text"
                                                       placeholder=" Enter your Last name"
                                                       class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Gender</label>
                                                <select class="form-control" name="gender" id="gender"
                                                        title="Select an account type...">
                                                    <option disabled="" selected="">Select</option>
                                                    <option>MALE</option>
                                                    <option>FEMALE</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="age" class="control-label">Age *</label>
                                                <input id="age" name="age" type="text" maxlength="3"
                                                       class="form-control required number"
                                                       data-bv-greaterthan-inclusive="false"
                                                       data-bv-lessthan-inclusive="true">
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <div class="form-group">
                                                <label for="phone1" class="control-label">Home number *</label>
                                                <input type="text" class="form-control" id="phone1" name="phone1"
                                                       placeholder="(999)999-9999">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone2" class="control-label">Personal number *</label>
                                                <input type="text" class="form-control" id="phone2" name="phone2"
                                                       placeholder="(999)999-9999">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone3" class="control-label">Alternate number *</label>
                                                <input type="text" class="form-control" id="phone3" name="phone3"
                                                       placeholder="(999)999-9999">
                                            </div>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group">
                                                <label>
                                                    <input id="acceptTerms" name="acceptTerms" type="checkbox"
                                                           class="custom-checkbox"> *I agree with the <a
                                                            href="javascript:void(0)">terms &amp; Conditions</a>.
                                                </label>
                                            </div>
                                        </div>
                                        <ul class="pager wizard">
                                            <li class="previous btn btn-primary">
                                                <a>Previous</a>
                                            </li>
                                            <li class="next">
                                                <a>Next</a>
                                            </li>
                                            <li class="next finish" style="display:none;">
                                                <a>Finish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">User Register</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>You have Submitted Successfully.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">OK
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/jquery.bootstrap.wizard.js')}}"></script>
        <script>
           $(document).ready(function() {
                $('#rootwizard').bootstrapWizard({});
            });
        </script>
        {{-- <script src="{{asset('js/app.js')}}"></script> --}}
        
    </body>
</html>
