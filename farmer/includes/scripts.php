    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Datatables -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://kit.fontawesome.com/a3af999ee0.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#tblloan').DataTable();} );
    $(document).ready(function() {
    $('#tblseed').DataTable();} );
    $(document).ready(function() {
    $('#tblvet').DataTable();} );
    $(document).ready(function() {
    $('#example').DataTable();} );
    
    </script>
    

    <!-- Alert -->
    <script>
        var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
    var alertTrigger = document.getElementById('liveAlertBtn')

    function alert(message, type) {
    var wrapper = document.createElement('div')
    wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button></div>'

    alertPlaceholder.append(wrapper)
    }

    if (alertTrigger) {
    alertTrigger.addEventListener('click', function () {
        alert('Nice, you triggered this alert message!', 'success')
    })
    }
    </script>

<script>
    function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(cityName).style.display = "block";
}

// var triggerEl = document.querySelector('#myTab a[href="#loan"]')
// bootstrap.Tab.getInstance(triggerEl).show()

// var triggerEl = document.querySelector('#myTab a[href="#seed"]')
// bootstrap.Tab.getInstance(triggerEl).show()

// var triggerEl = document.querySelector('#myTab a[href="#vet"]')
// bootstrap.Tab.getInstance(triggerEl).show()

// var triggerEl = document.querySelector('#myTab a[href="#settings-tab"]')
// bootstrap.Tab.getInstance(triggerEl).show()

// var triggerFirstTabEl = document.querySelector('#myTab li:profile-tab a')
// bootstrap.Tab.getInstance(triggerFirstTabEl).show()

$('#myTab a').click(function (e) {
   e.preventDefault()
   $(this).tab('show')
})

</script>