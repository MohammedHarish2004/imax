<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/tivo/template/base-input.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 08:42:00 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>Tivo - Premium Admin Template</title><link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <!-- Custom css -->
    <style>
    input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button
            {
            -webkit-appearance:none;margin:0;
            }
   </style>
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php include "navbar.php" ;?>
      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include "sidebar.php" ;?>
        <!-- Page Sidebar Ends-->

        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Purchase DSC</h3>
                </div>
                <!-- <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Form Controls</li>
                    <li class="breadcrumb-item active">Base inputs</li>
                  </ol>
                </div> -->
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h4></h4>
                  </div>
                  <div class="form theme-form">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="mb-3">
                            <label class="form-label" for="Invoice">Invoice No</label>
                            <input class="form-control" style="border:.5px solid #9b9999;" id="Invoice" type="text" placeholder="Enter Invoice No">
                          </div> 
                        </div><!-- end col -->

                        <div class="col-lg-3">
                        <div class="mb-3">
                            <label class="form-label" for="Token">Date</label>
                            <input style="border:.5px solid #9b9999;" class="form-control" id="date" type="date" placeholder="Enter Date">
                          </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="company">Company</label>
                            <select style="border:.5px solid #9b9999;" class="form-select" id="company">
                            <option value="">--Select Company--</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                            </select>
                          </div>
                        </div> <!-- end col -->



                      
                      </div>

                      <div class="row">
                        
                        <div class="col-lg-3">
                          <div class="mb-3">
                            <label class="form-label" for="count">Count</label>
                            <input style="border:.5px solid #9b9999;" class="form-control" id="count" type="text" placeholder="Enter Count">
                          </div>
                        </div> <!-- end col -->

                       

                        <div class="col-lg-3">
                          <div class="mb-3">
                            <label class="form-label" for="valid">Valid</label>
                            <select style="border:.5px solid #9b9999;" class="form-select" id="valid">
                            <option value="">--Select Valid--</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                            </select>
                          </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label class="form-label" for="dsc">DSC</label>
                            <select style="border:.5px solid #9b9999;" class="form-select" id="dsc">
                            <option value="">--Select DSC--</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                            </select>
                          </div>
                        </div> <!-- end col -->

                      </div>

                      <div class="row">
                      <div class="col-lg-3">
                          <div class="mb-3">
                            <label class="form-label mandator" for="amount">Amount </label>
                            <input style="border:.5px solid #9b9999;" oninput="onlynum(this)" class="form-control" id="amount" type="number" placeholder="Enter Amount">
                          </div>
                        </div> <!-- end col -->

                      <div class="col-lg-3">
                          <div class="mb-3">
                            <label class="form-label" for="PaymentStatus">Payment Status</label>
                            <select style="border:.5px solid #9b9999;" class="form-select" id="PaymentStatus">
                            <option value="">--Select Payment Status--</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                            </select>
                          </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label class="form-label" for="PaymentDetails">Payment Details</label>
                            <textarea style="border:.5px solid #9b9999;" class="form-control" id="PaymentDetails" rows="3" placeholder="Payment Details"></textarea>
                          </div>
                        </div> <!-- end col -->
  
                      </div>

                      
                    </div>

                    

                    <div class="card-footer text-end">
                      <button class="btn btn-primary" id="Purchase" type="submit">Purchase DSC</button>
                      
                    </div>
                  </div>
                </div>
                
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-0 footer-left">
                <p class="mb-0">Copyright © . All rights reserved  Designed By <a href="https://cryptographicsolutions.in/">Cryptographic Solutions</a>.</p>
            </div>
            <!-- <div class="col-md-6 p-0 footer-right">
               <a href="https://cryptographicsolutions.in/"></a>
            </div> -->
        </div>
        </div>
      </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Template js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js">  </script>
    <!-- login js-->

    <!--Toastr  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
      $(document).ready(function()
        {
    
        $('#Purchase').click(function()
        {
            
        var InvoiceNo = $("#Invoice").val().trim();
        console.log(InvoiceNo)

        var DSC = $("#dsc").val();
        console.log(DSC)
    
        var Company = $("#company").val().trim();
        console.log(Company)

        var Count = $("#count").val().trim();
        console.log(Count)

        var Date = $("#date").val();
        console.log(Date)

        var Valid = $("#valid").val();
        console.log(Valid)

        var Amount = $("#amount").val().trim();
        console.log(Amount)

        var Payment_Status = $("#PaymentStatus").val();
        console.log(Payment_Status)

        var Payment_Details = $("#PaymentDetails").val().trim();
        console.log(Payment_Details)

       
  
      
        if(InvoiceNo == "")
        {
            toastr.error('Enter your Invoice Number !', 'Empty');
        }

        else if(DSC == "")
        {
            toastr.error('Enter Dsc !', 'Empty');
    
        }
    
        else if( Company == "")
        {
            toastr.error('Select Company !', 'Empty');
    
        }

        else if( Count == "")
        {
            toastr.error('Enter Count !', 'Empty');
    
        }

        else if( Date == "")
        {
            toastr.error('Select Date !', 'Empty');
    
        }

        else if( Valid == "")
        {
            toastr.error('Select Valid  !', 'Empty');
    
        }

        else if( Amount == "")
        {
            toastr.error('Enter Amount !', 'Empty');
    
        }
    
        else if( Payment_Status == "")
        {
            toastr.error('Select Payment Status !', 'Empty');
    
        }

        else if( Payment_Details == "")
        {
            toastr.error('Select Payment Details !', 'Empty');
    
        }

        

        else
        {
            var fd = new FormData();
    
            fd.append("InvoiceNo", InvoiceNo);
            fd.append("DSC", DSC);
            fd.append("Company",Company);
            fd.append("Count",Count);
            fd.append("Date",Date);
            fd.append("Valid",Valid);
            fd.append("Amount",Amount);
            fd.append("Payment_Status",Payment_Status);
            fd.append("Payment_Details",Payment_Details);
          
            
    
            $.ajax({
                url: 'ajax',
                data: fd,
                type:'post',
                contentType: false,
                processData: false,
                success: function(response)
                {
                        // console.log(response);
                        data = JSON.parse(response);
                        // console.log(data);
                        if(data.status == 'Success')
                        {
                            toastr.success('Welcome!', 'Success');
                            window.location.href='Index';
                        }
                        // else if(data.status == 'PassWrong')
                        // {
                        //     toastr.warning('Check Your Password!', 'Password Wrong!')
                        // }
                        // else if(data.status == 'NotFound')
                        // {
                        //     toastr.warning('This Contact Number not Exists!', 'Contact number Wrong!')
                        // }
                        // else if(data.status == 'Deactivated')
                        // {
                        //     toastr.info('Your Account DEACTIVATED!, Contact Admin!', 'Deactivated!')
                        // }
                        else
                        {
                            toastr.error('Error!', 'Error Found!')
                        }
                    }
                });
            }
        })
    })

    function onlynum(e) {
      var input = e.value.replace(/[^0-9]/g, '');  
      e.value = input; 
    }

    </script>
    
  </body>


</html>