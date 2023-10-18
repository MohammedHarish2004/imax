<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/tivo/template/base-input.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 08:42:00 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <title>Tivo - Premium Admin Template</title>
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
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

  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    #submit {
      background-color: #fe030c;
      border: 0px !important;
    }

    #submit:hover {
      background-color: #bd001fd0;
      border: 0px !important;
    }
  </style>

</head>

<body>
  <!-- tap on top starts-->
  <div class="tap-top" style="background-color:#fe030c;"><i data-feather="chevrons-up"></i></div>
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
                <h3>Product Creations </h3>
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
                <div class="form theme-form">
                  <!-- <div class="row"> -->
                  <div class="row">
                    <div class="card">
                      <div class="card-body">
                      <div class="table-responsive theme-scrollbar">
  <table class="table" id="imageTable">
    <thead>
      <tr class="border-bottom-success">
        <th scope="col">Image File</th>
        <th scope="col">Image Preview</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr class="border-bottom-success" id="rowTemplate">
        <td>
          <input class="form-control mt-4 w-75 mainimg" style="border:.5px solid #9b9999;"
            onchange="previewImage(this)" type="file" accept=".jpg, .jpeg, .png">
          <p class="mt-3 fsize"></p>
        </td>
        <td><img class="mainprev" width="100%" height="100px"></td>
        <td>
          <!-- Empty container div for the delete button -->
          <div class="delete-container mt-4"></div>
        </td>
      </tr>
    </tbody>
  </table>
  <button class="btn btn-success mt-2 float-end" id="addImage">Add Image</button>
</div>






                      </div>
                    </div>

                    <!-- <div class="col-lg-6">
                        <div class="mb-3">
                          <label class="form-label" for="mainimg">Main Image</label>
                          <input class="form-control" style="border:.5px solid #9b9999;" id="mainimg"
                            onchange="previewImage()" type="file" accept=".jpg, .jpeg, .png">
                          <p id="errorText" style="color: red;"></p>
                          <p id="fsize" class="mt-3"></p>
                        </div>

                        <div class="mb-3">
                          <img id="mainprev" width="100%" height="300px">
                        </div>
                      </div> end col -->

                    <!-- <div class="col-lg-6">
                        <div class="mb-3">
                          <label class="form-label" for="addimg">Additional Images</label>
                          <input class="form-control" style="border:.5px solid #9b9999;" id="addimg1" type="file"
                            onchange="previewaddImage(1)" accept=".jpg, .jpeg, .png">
                          <p id="fsize1" class="mt-3"></p>
                          <p id="errorText" style="color: red;"></p>
                          <input class="form-control mt-2" style="border:.5px solid #9b9999;" id="addimg2" type="file"
                            onchange="previewaddImage(2)" accept=".jpg, .jpeg, .png">
                          <p id="fsize2" class="mt-3"></p>
                          <p id="errorText" style="color: red;"></p>
                          <input class="form-control mt-2" style="border:.5px solid #9b9999;" id="addimg3" type="file"
                            onchange="previewaddImage(3)" accept=".jpg, .jpeg, .png">
                          <p id="fsize3" class="mt-3"></p>
                          <p id="errorText" style="color: red;"></p>
                        </div> -->

                    <!-- <div class="mb-3">
                          <img id="addprev1" width="150px" height="200px">
                          <img id="addprev2" width="150px" height="200px">
                          <img id="addprev3" width="150px" height="200px">
                        </div>
                      </div> -->
                    <!-- end col -->


                    <!-- </div> -->
                    <!-- end row -->

                  </div>
                </div>
              </div>
            </div>



            <div class="col-lg-4">
              <div class="mb-3">
                <label class="form-label" for="proname">Product Name</label>
                <input type="text" class="form-control" style="border:.5px solid #9b9999;" id="proname"
                  placeholder="Enter Product Name">
              </div>
            </div> <!-- end col -->

            <div class="col-lg-4">
              <div class="mb-3">
                <label class="form-label" for="proprice">Product Price</label>
                <input type="number" class="form-control" style="border:.5px solid #9b9999;" id="proprice"
                  placeholder='Enter Product Price'>
              </div>
            </div> <!-- end col -->

            <div class="col-lg-4">
              <div class="mb-3">
                <label class="form-label" for="prosize">Product Size</label>
                <input type="text" class="form-control" style="border:.5px solid #9b9999;" id="prosize"
                  placeholder='Enter Product Size'>
              </div>
            </div> <!-- end col -->

            <div class="row">
              <div class="col-lg-4">
                <div class="mb-3">
                  <label class="form-label" for="procolor">Product Color</label>
                  <input type="text" class="form-control" style="border:.5px solid #9b9999;" id="procolor"
                    placeholder="Enter Product Color">
                </div>
              </div>

              <div class="col-lg-8">
                <div class="mb-3">
                  <label class="form-label" for="prodes">Product Description</label>
                  <textarea style="border:.5px solid #9b9999;" class="form-control" id="prodes" rows="4"
                    placeholder="Product Description"></textarea>
                </div>
              </div>
            </div>


            <div class="card-footer text-end">
              <button class="btn text-white" style='display:none;' id="submit" type="submit">Submit</button>

            </div>
          </div><!-- end row -->
        </div>
      </div>
      <!-- Container-fluid Ends-->

    </div>

    <!-- footer start-->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 p-0 footer-left">
            <p class="mb-0">Copyright © . All rights reserved Designed By <a
                href="https://cryptographicsolutions.in/">Cryptographic Solutions</a>.</p>
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
  <script src="../assets/js/theme-customizer/customizer.js"> </script>
  <!-- login js-->

  <!--Toastr  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
document.getElementById('addImage').addEventListener('click', function () {
  const table = document.getElementById('imageTable').getElementsByTagName('tbody')[0];
  const rowTemplate = document.getElementById('rowTemplate');
  const newRow = rowTemplate.cloneNode(true); // Clone the template row
  newRow.style.display = ''; // Make the cloned row visible

  // Reset the file input and image preview for the new row
  const fileInput = newRow.querySelector('input[type="file"]');
  const imagePreview = newRow.querySelector('img');
  const fileSizeMessage = newRow.querySelector('.fsize');
  const deleteContainer = newRow.querySelector('.delete-container'); // Container for the delete button
  const submit_btn = document.getElementById('submit');

  fileInput.value = '';
  imagePreview.src = '';
  fileSizeMessage.textContent = '';

  // Add a delete button to the new row (in the delete-container div)
  const deleteButton = document.createElement('button');
  deleteButton.innerHTML = '<i class="bi bi-trash-fill h6 mt-2"></i>'; // Use the Font Awesome trash icon
  deleteButton.className = 'btn btn-danger';
  deleteButton.addEventListener('click', function () {
    table.removeChild(newRow);
  });

  deleteContainer.appendChild(deleteButton); // Append the delete button to the container

  // Remove any additional default rows created by the JavaScript
  const defaultRows = table.getElementsByClassName('default-row');
  if (defaultRows.length > 1) {
    table.removeChild(defaultRows[defaultRows.length - 1]);
  }

  table.appendChild(newRow);
});

function previewImage(input) {
  const preview = input.parentElement.nextElementSibling.querySelector('img');
  const fileSizeMessage = input.parentElement.querySelector('.fsize');
  const submit_btn = document.getElementById('submit');

  if (input.files && input.files[0]) {
    const reader = new FileReader();
    reader.onload = function (e) {
      preview.src = e.target.result;
    };
    reader.readAsDataURL(input.files[0]);

    const selectedFile = input.files[0];
    const maxSizeInBytes = 1024 * 100;

    if (selectedFile && selectedFile.size > maxSizeInBytes) {
      fileSizeMessage.textContent = 'File size exceeds the allowed limit.';
      submit_btn.style.display = 'none';
    } else {
      fileSizeMessage.textContent = 'Successfully Uploaded';
      submit_btn.style.display = 'inline-block';
    }
  } else {
    fileSizeMessage.textContent = '';
    submit_btn.style.display = 'inline-block';
  }
}

    $(document).ready(function () {

      $("#submit").click(function () {
        var proname = $("#proname").val().trim();
        console.log(proname);
        var proprice = $("#proprice").val().trim();
        console.log(proprice);
        var prosize = $("#prosize").val().trim();
        console.log(prosize);
        var procolor = $("#procolor").val().trim();
        console.log(procolor);
        var prodes = $("#prodes").val().trim();
        console.log(prodes);

         if (proname == "") {
          toastr.error("Enter Product Name", "Empty !");
        } else if (proprice == "") {
          toastr.error("Enter Price", "Empty !")
        } else if (prosize == "") {
          toastr.error("Enter Size", "Empty !")
        } else if (procolor == "") {
          toastr.error("Enter Color", "Empty !")
        } else if (prodes == "") {
          toastr.error("Enter Description", "Empty !")
        } else {
          var fd = new FormData();
          fd.append("product_name", proname);
          fd.append("product_price", proprice);
          fd.append("product_color", procolor);
          fd.append("product_size", prosize);
          fd.append("product_description", prodes);

          $.ajax({
            url: 'ajax',
            type: 'post',
            contentType: false,
            processData: false,
            data: fd,

            success: function (response) {
              var result = JSON.parse(response);
              if (result.status == "Success") {
                toastr.success("Product Created Successfully", "Welcome !")

                $("#mainimg").files("");
                $("#addimg1").files("");
                $("#addimg2").files("");
                $("#addimg3").files("");
                $("#proname").val("");
                $("#proprice").val("");
                $("#procolor").val("");
                $("#prosize").val("");
                $("#prodes").val("");
              } else {
                toastr.error("Unable To Create Product", "Error")
              }
            }
          })
        }

      })





    });
  </script>

</body>

</html>