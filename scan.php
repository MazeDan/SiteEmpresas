<?php 
    include_once('php/topo.php');
    include_once('php/menu.php');
?>

<script src="js/html5-qrcode.min.js"></script>

<br>
<div class="container">
  <div class="row">
    <div class="col">
      <div id="reader"></div>
    </div>

    <div class="col">
      <h4>Resultado QrCode</h4>
      <div id="result">Result Here</div>
    </div>

  </div>
</div>
<script type="text/javascript">
function onScanSuccess(qrCodeMessage) {
    window.location.href = 'http://localhost:8080/arquivos/receber.php?qrcode='+qrCodeMessage;
    document.getElementById('result').innerHTML = '<span class="result">'+qrCodeMessage+'</span>';
}
function onScanError(errorMessage) {
  //handle scan error
}
var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 280 });
html5QrcodeScanner.render(onScanSuccess, onScanError);
</script>
<?php 
    include_once('rodape.php');
?>