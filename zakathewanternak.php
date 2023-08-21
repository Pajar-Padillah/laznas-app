<?php
include 'header_user.php';

if (empty($_SESSION['iduser'])) { ?>
  <script>
    document.location.href = 'login.php';
  </script>
<?php } else {
?>


  <h2 class="my-3">Zakat Hewan Ternak</h2>


  <table class="table table-striped table-responsive">
    <h3>Nisab dan Zakat Kambing atau Domba</h3>
    <thead>
      <tr>
        <th>Nisab</th>
        <th>Bilangan Dan Jenis Zakat</th>
        <th>Umur</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>40-120</td>
        <td>1 ekor kambing betina</td>
        <td>2 Tahun lebih</td>
      </tr>
      <tr>
        <td>atau 40-120</td>
        <td>1 ekor domba betina</td>
        <td>1 Tahun lebih</td>
      </tr>
      <tr>
        <td>120-200</td>
        <td>2 ekor kambing betina</td>
        <td>2 Tahun lebih</td>
      </tr>
      <tr>
        <td>atau 120-200</td>
        <td>2 ekor domba betina</td>
        <td>1 Tahun lebih</td>
      </tr>
      <tr>
        <td>201-399</td>
        <td>3 ekor kambing betina</td>
        <td>2 Tahun lebih</td>
      </tr>
      <tr>
        <td>201-399</td>
        <td>3 ekor domba betina</td>
        <td>1 Tahun lebih</td>
      </tr>
      <tr>
        <td>lebih dari 400</td>
        <td>4 ekor kambing betina</td>
        <td>2 Tahun lebih</td>
      </tr>
      <tr>
        <td>atau lebih dari 400</td>
        <td>4 ekor domba betina</td>
        <td>1 Tahun lebih</td>
      </tr>
    </tbody>
  </table>

  <table class="table table-striped table-responsive">
    <h3>Nisab dan Zakat Unta</h3>
    <thead>
      <tr>
        <th>Nisab</th>
        <th>Bilangan Dan Jenis Zakat</th>
        <th>Umur</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>25-35</td>
        <td>1 ekor anak unta</td>
        <td>1 Tahun lebih</td>
      </tr>
      <tr>
        <td>36-45</td>
        <td>1 ekor anak unta</td>
        <td>2 Tahun lebih</td>
      </tr>
      <tr>
        <td>46-60</td>
        <td>1 ekor anak unta</td>
        <td>3 Tahun lebih</td>
      </tr>
      <tr>
        <td>61-75</td>
        <td>1 ekor anak unta</td>
        <td>4 Tahun lebih</td>
      </tr>
      <tr>
        <td>76-90</td>
        <td>2 ekor anak unta</td>
        <td>2 Tahun lebih</td>
      </tr>
      <tr>
        <td>91-120</td>
        <td>2 ekor anak unta</td>
        <td>3 Tahun lebih</td>
      </tr>
      <tr>
        <td>121</td>
        <td>3 ekor anak unta</td>
        <td>2 Tahun lebih</td>
      </tr>
    </tbody>
  </table>

  <table class="table table-striped table-responsive">
    <h3>Nisab dan Zakat Sapi atau Kerbau</h3>
    <thead>
      <tr>
        <th>Nisab</th>
        <th>Bilangan Dan Jenis Zakat</th>
        <th>Umur</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>35-39</td>
        <td>1 ekor anak sapi atau seekor kerbau</td>
        <td>2 Tahun lebih</td>
      </tr>
      <tr>
        <td>40-59</td>
        <td>1 ekor anak sapi atau seekor kerbau</td>
        <td>2 Tahun lebih</td>
      </tr>
      <tr>
        <td>46-60</td>
        <td>1 ekor anak unta</td>
        <td>3 Tahun lebih</td>
      </tr>
      <tr>
        <td>60-69</td>
        <td>2 ekor anak sapi atau seekor kerbau</td>
        <td>1 Tahun lebih</td>
      </tr>
      <tr>
        <td>lebih dari 70</td>
        <td>1 ekor anak sapi atau seekor kerbau dan 1 ekor anak sapi atau seekor kerbau</td>
        <td>2 Tahun lebih</td>
      </tr>
    </tbody>
  </table>

  <?php include 'sidebar.php'; ?>

  </div>
  </div>


<?php }
include 'footer_user.php'; ?>