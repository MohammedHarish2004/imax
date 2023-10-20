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

    .tooltip-inner {
      color: red !important;
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



      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-body">
              <div class="container-fluid">
                <div class="page-title">
                  <div class="row">
                    <div class="col-sm-6">
                      <h3>Product Creations</h3>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Container-fluid starts -->
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="table-responsive theme-scrollbar">
                          <table class="table" id="imageTable">
                            <thead>
                              <tr class="border-bottom-info">

                                <th scope="col">Image File<button class="btn text-danger" type="button"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Choose image less
                                  than 2mb"><i class="bi bi-info-circle-fill"></i></button>


                                </th>
                                <th scope="col">Image Preview</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- Template row for adding images -->
                              <tr class="border-bottom-info" id="rowTemplate">
                                <td>
                                  <!-- Replace your button with this code -->
                                  <div class="row">
                                    <div class="col-12">
                                      <label class="btn mt-4 btn-success btn-sm btn-block mainimg">
                                        <input type="file" accept=".jpg, .jpeg, .png" style="display: none;"
                                          onchange="previewImage(this)">
                                        Upload Image
                                      </label>
                                    </div>
                                  </div>

                                  <!-- Hidden file input -->
                                  <p class="pt-3 fsize"></p>
                                </td>


                                <td>
                                  <!-- Image preview initially hidden -->
                                  <img class="mainprev" width="100%" height="100px" style="display: none;">
                                  <br>
                                  <label for="" class="mb-2 me-1">Main</label>
                                  <input type="radio" class="main-image-radio" name="mainImage"
                                    onchange="setMainImage(this)">
                                </td>




                                <td>
                                  <!-- Container for the delete button -->
                                  <div class="delete-container mt-4"></div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- Button to add new images -->
                          <button class="btn btn-info mt-2 float-end" id="addImage">Add Image</button>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <label class="form-label" for="proname">Product Name</label>
                              <input type="text" class="form-control" style="border:.5px solid #9b9999;" id="proname"
                                placeholder="Enter Product Name">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <label class="form-label" for="proprice">Product Price</label>
                              <input type="number" class="form-control" style="border:.5px solid #9b9999;" id="proprice"
                                placeholder='Enter Product Price'>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <label class="form-label" for="prosize">Product Size</label>
                              <input type="text" class="form-control" style="border:.5px solid #9b9999;" id="prosize"
                                placeholder='Enter Product Size'>
                            </div>
                          </div>
                        </div>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer text-end">
                <button class="btn text-white" style='display:none;' id="submit">Submit</button>
              </div>
            </div>
          </div>
        </div>
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
    function selectImage(button) {
      // Find the hidden file input associated with the clicked button
      const fileInput = button.nextElementSibling;

      // Trigger a click event on the file input
      fileInput.click();
    }


    document.getElementById('addImage').addEventListener('click', function () {
      const table = document.getElementById('imageTable').getElementsByTagName('tbody')[0];
      const rowTemplate = document.getElementById('rowTemplate');
      const newRow = rowTemplate.cloneNode(true); // Clone the template row
      newRow.style.display = ''; // Make the cloned row visible

      // Reset the file input and image preview for the new row
      const fileInput = newRow.querySelector('input[type="file"]');
      const imagePreview = newRow.querySelector('img');
      const fileSizeMessage = newRow.querySelector('.fsize');
      const deleteContainer = newRow.querySelector('.delete-container');
      const radio = newRow.querySelector('.main-image-radio'); // Get the radio button for the new row
      const submit_btn = document.getElementById('submit');

      fileInput.value = '';
      imagePreview.src = '';
      imagePreview.style.display = 'none';
      fileSizeMessage.textContent = '';

      // Add a delete button to the new row
      const deleteButton = document.createElement('button');
      deleteButton.innerHTML = '<i class="bi bi-trash-fill h6 mt-2"></i>';
      deleteButton.className = 'btn btn-danger';
      deleteButton.addEventListener('click', function () {
        table.removeChild(newRow);
      });

      deleteContainer.appendChild(deleteButton);

      // Remove any additional default rows created by the JavaScript
      const defaultRows = table.getElementsByClassName('default-row');
      if (defaultRows.length > 1) {
        table.removeChild(defaultRows[defaultRows.length - 1]);
      }

      table.appendChild(newRow);

      // Uncheck the radio button in the new row to avoid automatic selection
      radio.checked = false;
    });

    function setMainImage(radio) {
      const row = radio.closest('tr');
      const imagePreview = row.querySelector('img.mainprev');

      if (radio.checked) {
        // Remove any existing borders in the same table
        const table = row.closest('table');
        table.querySelectorAll('img.mainprev').forEach((prev) => (prev.style.border = 'none'));

        // Add a border to the selected image to indicate it's the main image
        imagePreview.style.border = '2px solid green';
      }
    }



    function previewImage(input) {
      const preview = input.closest('tr').querySelector('img.mainprev');
      const fileSizeMessage = input.closest('td').querySelector('.fsize');
      const submit_btn = document.getElementById('submit'); // Get the submit button

      if (input.files && input.files[0]) {
        const selectedFile = input.files[0];
        const maxSizeInBytes = 1024 * 200; // 2MB

        if (selectedFile.size > maxSizeInBytes) {
          fileSizeMessage.textContent = 'File size exceeds the allowed limit.';
          fileSizeMessage.style.color = 'red';
          preview.style.display = 'none'; // Hide the image preview

        } else {
          fileSizeMessage.textContent = 'File Size is within the limit';
          fileSizeMessage.style.color = 'green';
          submit_btn.style.display = 'inline-block'; // Show the submit butto

          const reader = new FileReader();
          reader.onload = function (e) {
            preview.src = e.target.result;
            preview.style.display = 'block'; // Show the image preview
          };
          reader.readAsDataURL(input.files[0]);
        }
      } else {
        fileSizeMessage.textContent = '';
        preview.style.display = 'none'; // Hide the image preview
        submit_btn.style.display = 'none'; // Hide the submit button
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