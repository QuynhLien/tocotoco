<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Dashboard | MilkteaTen</title>
<link rel="icon" href="<?= site_url(); ?>template/images/icon.png">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?= site_url('adTpl') ?>/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="<?= site_url('adTpl') ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="<?= site_url('adTpl') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="<?= site_url('adTpl') ?>/plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?= site_url('adTpl') ?>/dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="<?= site_url('adTpl') ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?= site_url('adTpl') ?>/plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="<?= site_url('adTpl') ?>/plugins/summernote/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!--Input file style-->
<link rel="stylesheet" type="text/css" href="<?= site_url('template') ?>/css/component.css" />
<!-- jQuery -->
<script src="<?= site_url('adTpl') ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= site_url('adTpl') ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- DataTables -->
<link rel="stylesheet" href="<?= site_url('adTpl')?>/plugins/datatables/dataTables.bootstrap4.css">
<!-- DataTables -->
<script src="<?= site_url('adTpl') ?>/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= site_url('adTpl') ?>/plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?= site_url('adTpl') ?>/plugins/sweetalert2/sweetalert2.min.css">
<script src="<?= site_url('adTpl') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<!--Style custome-->
<style type="text/css">
	.table.table-bordered.dataTable tbody td {vertical-align: middle;}
	.alert {padding: 0.45rem 1.25rem;}
</style>




<script src="https://apis.google.com/js/api.js"></script>
<script>
function start() {
  // 2. Initialize the JavaScript client library.
  gapi.client.init({
    'apiKey': 'AIzaSyBtCmWOoR9HSl4_uQY9B3vdD7q-BLwuED4',
    // Your API key will be automatically added to the Discovery Document URLs.
    'discoveryDocs': ['https://people.googleapis.com/$discovery/rest'],
    // clientId and scope are optional if auth is not required.
    'clientId': '274630479256-3dv8qcn2lc0ssk11urqnjt0gj8vp70pl.apps.googleusercontent.com',
    'scope': 'profile',
  }).then(function() {
    // 3. Initialize and make the API request.
    return gapi.client.people.people.get({
      'resourceName': 'people/me',
      'requestMask.includeField': 'person.names'
    });
  }).then(function(response) {
    console.log(response.result);
  }, function(reason) {
    console.log('Error: ' + reason.result.error.message);
  });
};
// 1. Load the JavaScript client library.
gapi.load('client', start); 
</script>


<!-- <script type="text/javascript">

    // The Browser API key obtained from the Google API Console.
    // Replace with your own Browser API key, or your own key.
    var developerKey = 'AIzaSyBaZaMggdirW5PCRSqvl8mM3-CTSvUxbR4';

    // The Client ID obtained from the Google API Console. Replace with your own Client ID.
    var clientId = "368401809432-g60alt8dcer815kl1lvic83qbubrqpb1.apps.googleusercontent.com"

    // Replace with your own project number from console.developers.google.com.
    // See "Project number" under "IAM & Admin" > "Settings"
    var appId = "368401809432";

    // Scope to use to access user's Drive items.
    var scope = ['https://www.googleapis.com/auth/drive.file'];

    var pickerApiLoaded = false;
    var oauthToken;

    // Use the Google API Loader script to load the google.picker script.
    function loadPicker() {
      gapi.load('auth', {'callback': onAuthApiLoad});
      gapi.load('picker', {'callback': onPickerApiLoad});
    }

    function onAuthApiLoad() {
      window.gapi.auth.authorize(
          {
            'client_id': clientId,
            'scope': scope,
            'immediate': false
          },
          handleAuthResult);
    }

    function onPickerApiLoad() {
      pickerApiLoaded = true;
      createPicker();
    }

    function handleAuthResult(authResult) {
      if (authResult && !authResult.error) {
        oauthToken = authResult.access_token;
        createPicker();
      }
    }

    // Create and render a Picker object for searching images.
    function createPicker() {
      if (pickerApiLoaded && oauthToken) {
        var view = new google.picker.View(google.picker.ViewId.DOCS);
        view.setMimeTypes("image/png,image/jpeg,image/jpg");
        var picker = new google.picker.PickerBuilder()
            .enableFeature(google.picker.Feature.NAV_HIDDEN)
            .enableFeature(google.picker.Feature.MULTISELECT_ENABLED)
            .setAppId(appId)
            .setOAuthToken(oauthToken)
            .addView(view)
            .addView(new google.picker.DocsUploadView())
            .setDeveloperKey(developerKey)
            .setCallback(pickerCallback)
            .build();
         picker.setVisible(true);
      }
    }

    // A simple callback implementation.
    function pickerCallback(data) {
      if (data.action == google.picker.Action.PICKED) {
        var fileId = data.docs[0].id;
        alert('The user selected: ' + fileId);
      }
    }
    </script> -->