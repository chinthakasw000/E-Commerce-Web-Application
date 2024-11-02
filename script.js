function changeView() {
    var signInBox = document.getElementById("signInBox");
    var signUpBox = document.getElementById("signUpBox");

    signInBox.classList.toggle("d-none");
    signUpBox.classList.toggle("d-none");
}

function signUp() {
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var mobile = document.getElementById("mobile");
    var username = document.getElementById("username");
    var password = document.getElementById("password");

    // alert(fname.value);

    var f = new FormData();
    f.append("f", fname.value);
    f.append("l", lname.value);
    f.append("e", email.value);
    f.append("m", mobile.value);
    f.append("u", username.value);
    f.append("p", password.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                document.getElementById("msg1").innerHTML = "Registration Successfully";
                document.getElementById("msg1").className = "alert alert-success";
                document.getElementById("msgDiv1").className = "d-block";

                fname.value = "";
                lname.value = "";
                email.value = "";
                mobile.value = "";
                username.value = "";
                password.value = "";
            } else {
                document.getElementById("msg1").innerHTML = response;
                document.getElementById("msgDiv1").className = "d-block";
            }

        }
    };

    request.open("POST", "signUpProcess.php", true);
    request.send(f);

}

function signIn() {
    var un = document.getElementById("un");
    var pw = document.getElementById("pw");
    var rm = document.getElementById("rm");

    // alert(un.value);

    var f = new FormData();
    f.append("u", un.value);
    f.append("p", pw.value);
    f.append("r", rm.checked);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                window.location = "index.php";
            } else {
                document.getElementById("msg2").innerHTML = response;
                document.getElementById("msgDiv2").className = "d-block";
            }
        }
    };

    request.open("POST", "signInProcess.php", true);
    request.send(f);

}

function adminSignIn() {

    var un = document.getElementById("un");
    var pw = document.getElementById("pw");

    // alert(un.value);

    var f = new FormData();
    f.append("u", un.value);
    f.append("p", pw.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                window.location = "adminDashboard.php";
            } else {
                document.getElementById("msg").innerHTML = response;
                document.getElementById("msgDiv").className = "d-block";
            }
        }
    };

    request.open("POST", "adminSignInProcess.php", true);
    request.send(f);

}

function loadUser() {

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            document.getElementById("tb").innerHTML = response;
        }
    };

    request.open("POST", "loadUserProcess.php", true);
    request.send();

}

function updateUserStatus() {
    var userid = document.getElementById("uid");
    //    alert(userid.value);

    var f = new FormData();
    f.append("u", userid.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Deactive") {
                document.getElementById("msg").innerHTML = "User Deactivate Successfully";
                document.getElementById("msg").className = "alert alert-success";
                document.getElementById("msgDiv").className = "d-block";
                userid.value = "";
                loadUser();

            } else if (response == "Active") {
                document.getElementById("msg").innerHTML = "User Activate Successfully";
                document.getElementById("msg").className = "alert alert-success";
                document.getElementById("msgDiv").className = "d-block";
                userid.value = "";
                loadUser();

            } else {
                document.getElementById("msg").innerHTML = response;
                document.getElementById("msgDiv").className = "d-block";
            }
        }
    };

    request.open("POST", "updateUserStatusProcess.php", true);
    request.send(f);

}

function reload() {
    location.reload();
}

function brandReg() {
    var brand = document.getElementById("brand");
    // alert(brand.value);

    var f = new FormData();
    f.append("b", brand.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                document.getElementById("msg1").innerHTML = "Brand Registration Successfully";
                document.getElementById("msg1").className = "alert alert-success";
                document.getElementById("msgDiv1").className = "d-block";
                brand.value = "";
            } else {
                document.getElementById("msg1").innerHTML = response;
                document.getElementById("msgDiv1").className = "d-block";
            }
        }
    };

    request.open("POST", "brandRegisterProcess.php", true);
    request.send(f);

}

function categoryReg() {
    var cat = document.getElementById("cat");
    // alert(cat.value);

    var f = new FormData();
    f.append("c", cat.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                document.getElementById("msg2").innerHTML = "Category Registration Successfully";
                document.getElementById("msg2").className = "alert alert-success";
                document.getElementById("msgDiv2").className = "d-block";
                cat.value = "";
            } else {
                document.getElementById("msg2").innerHTML = response;
                document.getElementById("msgDiv2").className = "d-block";
            }
        }
    };

    request.open("POST", "categoryRegisterProcess.php", true);
    request.send(f);
}

function colorReg() {
    var color = document.getElementById("color");
    // alert(color.value);

    var f = new FormData();
    f.append("c", color.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                document.getElementById("msg3").innerHTML = "Color Registration Successfully";
                document.getElementById("msg3").className = "alert alert-success";
                document.getElementById("msgDiv3").className = "d-block";
                color.value = "";
            } else {
                document.getElementById("msg3").innerHTML = response;
                document.getElementById("msgDiv3").className = "d-block";
            }
        }
    };

    request.open("POST", "colorRegisterProcess.php", true);
    request.send(f);
}

function sizeReg() {
    var size = document.getElementById("size");
    // alert(size.value);

    var f = new FormData();
    f.append("s", size.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
                document.getElementById("msg4").innerHTML = "Size Registration Successfully";
                document.getElementById("msg4").className = "alert alert-success";
                document.getElementById("msgDiv4").className = "d-block";
                size.value = "";
            } else {
                document.getElementById("msg4").innerHTML = response;
                document.getElementById("msgDiv4").className = "d-block";
            }
        }
    };

    request.open("POST", "sizeRegisterProcess.php", true);
    request.send(f);

}


function regProduct() {

    var pname = document.getElementById("pname");
    var brand = document.getElementById("brand");
    var cat = document.getElementById("cat");
    var color = document.getElementById("color");
    var size = document.getElementById("size");
    var desc = document.getElementById("desc");
    var file = document.getElementById("file");

    // alert(pname.value);
    // alert(brand.value);
    // alert(cat.value);
    // alert(color.value);
    // alert(size.value);
    // alert(desc.value);
    // alert(file.value);

    var F = new FormData(); 

     var form = new FormData();
    form.append("pname", pname.value);
    form.append("brand", brand.value);
    form.append("cat", cat.value);
    form.append("color", color.value);
    form.append("size", size.value);
    form.append("desc", desc.value);
    form.append("image", file.files[0]);

    var req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        
        if(req.readyState == 4 && req.status == 200){
            var resp = req.responseText;
            // alert(resp);

            Swal.fire({
                title:resp,
             
              
              });
       
        }
      
    };
    req.open("POST", "productRegProcess.php", true);
    req.send(form);

    }

    function updateStock() {

        var pname = document.getElementById("selectProduct");
        var qty = document.getElementById("qty");
        var price = document.getElementById("uprice");
        // alert(pname.value);

        var f = new FormData();
        f.append("p", pname.value);
        f.append("q", qty.value);
        f.append("up", price.value);

        var request = new XMLHttpRequest();


        request.onreadystatechange = function () {
            if (request.readyState == 4 & request.status == 200) {
                var response = request.responseText;
                // alert(response);

                Swal.fire({
                    title:response,
                 
                  
                  });


               
            }
        };
        
        request.open("POST", "updateStockProcess.php", true);
        request.send(f);

    }

    function printDiv() {
        var originalContent = document.body.innerHTML;
        var printArea = document.getElementById("printArea").innerHTML;
        document.body.innerHTML = printArea;
        window.print();
        document.body.innerHTML = originalContent;

    
     
    }



    function loadProduct(x){

        var page = x;
        // alert(x);

        var f = new FormData();
        f.append("p", page);

        var request = new XMLHttpRequest();

        request.onreadystatechange = function (){
            if(request.readyState == 4 & request.status == 200){
                var response = request.responseText;
                // alert(response);
                document.getElementById("pid").innerHTML = response;
              
            }
        };


        request.open("POST", "loadProductProcess.php", true);
        request.send(f);

    }

    
    function searchProduct(x){


        var page = x;
    
        var product = document.getElementById("product");
    
        // alert(page);
        // alert(product.value);
    
        var f = new FormData();
        f.append("p", product.value);
        f.append("pg", page);
    
        var request = new XMLHttpRequest();
        request.onreadystatechange = function (){
            if(request.readyState == 4 & request.status == 200){
                var response = request.responseText;
                // alert(response);
                document.getElementById("pid").innerHTML = response;
            }
        };
        request.open("POST", "searchProductProcess.php", true);
        request.send(f);
    }



//   acer
    function searchProductAcer(a){


        var page = a;
    
        var product = document.getElementById("acer");
    
        // alert(page);
        // alert(product.value);
    
        var f = new FormData();
        f.append("p", product.value);
        f.append("pg", page);
    
        var request = new XMLHttpRequest();
        request.onreadystatechange = function (){
            if(request.readyState == 4 & request.status == 200){
                var response = request.responseText;
                // alert(response);
                document.getElementById("pid").innerHTML = response;
            }
        };
        request.open("POST", "SearchProductProcessAcer.php", true);
        request.send(f);
    }

    
//   asus
function searchProductAsus(b){

    var page = b;

    var product = document.getElementById("asus");

    // alert(page);
    // alert(product.value);

    var f = new FormData();
    f.append("p", product.value);
    f.append("pg", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            // alert(response);
            document.getElementById("pid").innerHTML = response;
        }
    };
    request.open("POST", "SearchProductProcessAsus.php", true);
    request.send(f);
}


//   Gigabyte
function searchProductGigabyte(c){

    var page = c;

    var product = document.getElementById("gigabyte");

    // alert(page);
    // alert(product.value);

    var f = new FormData();
    f.append("p", product.value);
    f.append("pg", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            // alert(response);
            document.getElementById("pid").innerHTML = response;
        }
    };
    request.open("POST", "SearchProductProcessGigabyte.php", true);
    request.send(f);
}



//   Hp
function searchProductHp(d){

    var page = d;

    var product = document.getElementById("hp");

    // alert(page);
    // alert(product.value);

    var f = new FormData();
    f.append("p", product.value);
    f.append("pg", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            // alert(response);
            document.getElementById("pid").innerHTML = response;
        }
    };
    request.open("POST", "SearchProductProcessHp.php", true);
    request.send(f);
}



//   Lenovo
function searchProductLenovo(e){

    var page = e;

    var product = document.getElementById("lenovo");

    // alert(page);
    // alert(product.value);

    var f = new FormData();
    f.append("p", product.value);
    f.append("pg", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            // alert(response);
            document.getElementById("pid").innerHTML = response;
        }
    };
    request.open("POST", "SearchProductProcessLenovo.php", true);
    request.send(f);
}



//   MSI
function searchProductMsi(f){

    var page = f;

    var product = document.getElementById("msi");

    // alert(page);
    // alert(product.value);

    var f = new FormData();
    f.append("p", product.value);
    f.append("pg", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            // alert(response);
            document.getElementById("pid").innerHTML = response;
        }
    };
    request.open("POST", "SearchProductProcessMsi.php", true);
    request.send(f);
}



//   Razer
function searchProductRazer(g){

    var page = g;

    var product = document.getElementById("razer");

    // alert(page);
    // alert(product.value);

    var f = new FormData();
    f.append("p", product.value);
    f.append("pg", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            // alert(response);
            document.getElementById("pid").innerHTML = response;
        }
    };
    request.open("POST", "SearchProductProcessRazer.php", true);
    request.send(f);
}


//   Apple
function searchProductApple(h){

    var page = h;

    var product = document.getElementById("apple");

    // alert(page);
    // alert(product.value);

    var f = new FormData();
    f.append("p", product.value);
    f.append("pg", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            // alert(response);
            document.getElementById("pid").innerHTML = response;
        }
    };
    request.open("POST", "SearchProductProcessApple.php", true);
    request.send(f);
}




//   Dell
function searchProductDell(i){

    var page = i;

    var product = document.getElementById("dell");

    // alert(page);
    // alert(product.value);

    var f = new FormData();
    f.append("p", product.value);
    f.append("pg", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            // alert(response);
            document.getElementById("pid").innerHTML = response;
        }
    };
    request.open("POST", "SearchProductProcessDell.php", true);
    request.send(f);
}
    
    function viewFilter(){
        // alert("Filter");
    
        document.getElementById("filterId").className ="d-block";
    
    }



    function searchProduct(x){


        var page = x;
    
        var product = document.getElementById("product");
    
        // alert(page);
        // alert(product.value);
    
        var f = new FormData();
        f.append("p", product.value);
        f.append("pg", page);
    
        var request = new XMLHttpRequest();
        request.onreadystatechange = function (){
            if(request.readyState == 4 & request.status == 200){
                var response = request.responseText;
                // alert(response);
                document.getElementById("pid").innerHTML = response;
            }
        };
        request.open("POST", "searchProductProcess.php", true);
        request.send(f);
    }
    
    
    function viewFilter(){
        // alert("Filter");
    
        document.getElementById("filterId").className ="d-block";
    
    }
    
    function advSearchProduct(x){
    
        var page = x;
       var color =  document.getElementById("color");
      var cat =   document.getElementById("cat");
     var brand =    document.getElementById("brand");
     var size =   document.getElementById("size");
     var min =   document.getElementById("min");
      var max =  document.getElementById("max");
        // alert(cat.value);
    
        var f = new FormData();
        f.append("pg", page);
        f.append("co", color.value);
        f.append("cat", cat.value);
        f.append("b", brand.value);
        f.append("s", size.value);
        f.append("min", min.value);
        f.append("max", max.value);
    
        var request = new XMLHttpRequest();
        request.onreadystatechange = function (){
            if(request.readyState == 4 & request.status == 200){
                var response = request.responseText;
                // alert(response);
                document.getElementById("pid").innerHTML = response;
              
            }
        };
        request.open("POST", "advanceSearchProductProcess.php", true);
        request.send(f);
       
    
    
    }

    
function uploadImg(){
    // alert("Upload Image");

 var img = document.getElementById("imgUploader");

 var f = new FormData();
 f.append("i", img.files[0]);

 var request = new XMLHttpRequest();
 request.onreadystatechange = function (){
     if(request.readyState == 4 & request.status == 200){
         var response = request.responseText;
        //  alert(response);
        if (response == "empty") {
            Swal.fire({
                title: "Please select Your Profile Image",
                icon: "warning"
              });
         
            
        } else {
            document.getElementById("i").src = response;
            img.value = "";

            Swal.fire({
                title: "Your Profile Image Uploaded",
                icon: "success"
              });
        }
     }
 };
 request.open("POST", "profileImgUpload.php", true);
 request.send(f);

}


function updateData(){
    // alert("Update Data");
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var mobile = document.getElementById("mobile");
    var pw = document.getElementById("pw");
    var no = document.getElementById("no");
    var line1 = document.getElementById("line1");
    var line2 = document.getElementById("line2"); 
    // alert(fname.value);
    // alert(lname.value);

   var f = new FormData();
    f.append("f", fname.value);
    f.append("l", lname.value);
    f.append("e", email.value);
    f.append("m", mobile.value);
    f.append("p", pw.value);
    f.append("n", no.value);
    f.append("l1", line1.value);
    f.append("l2", line2.value);
var request = new XMLHttpRequest();
request.onreadystatechange = function (){
    if(request.readyState == 4 & request.status == 200){
        var response = request.responseText;
       
        Swal.fire({
            title: response,
          });

        

       
    }
};
request.open("POST", "updateDataProcess.php", true);
request.send(f);
}


function signOut(){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function (){
        if(request.readyState == 4 && request.status == 200){ // Use '&&' instead of '&'
            var response = request.responseText;

            // alert(response);
           
           Swal.fire({
  title: "Sign Out Successfully",
  icon: "success",
  confirmButtonText: "OK",
}).then((result) => {
  if (result.isConfirmed) {
    // Reload the page
    location.reload();
  }
});
           
        }
    };
    request.open("POST", "signOutProcess.php", true);
    request.send();
}
